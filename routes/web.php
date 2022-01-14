<?php

use App\http\Controllers\MainController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\PlaceController;
use App\Http\Controllers\Admin\ImageController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\ReviewController;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/laravel', function () {
    return view('welcome');
});

//User
Route::get('/', [MainController::class, 'main'])->name('home');
Route::get('/about', [MainController::class, 'about'])->name('about');
Route::get('/contact-us', [MainController::class, 'contact'])->name('contact-us');
Route::get('/search_place', [MainController::class, 'search_place'])->name('search_place');
Route::get('/places', [MainController::class, 'places'])->name('places');
Route::get('/places/{id}/{slug}', [MainController::class, 'category_places'])->name('category_places');
Route::get('/signin', [MainController::class, 'signin'])->name('signin');
Route::get('/signup', [MainController::class, 'signup'])->name('signup');
Route::get('/place_detail/{id}/{slug}', [MainController::class, 'place_detail'])->name('place_detail');
Route::get('/faq', [MainController::class, 'faq'])->name('faq');
Route::get('/references', [MainController::class, 'references'])->name('references');

Route::post('/sendmessage', [MainController::class, 'sendmessage'])->name('sendmessage');
Route::post('/getplace', [MainController::class, 'getplace'])->name('getplace');
Route::get('/placeslist/{search}', [MainController::class, 'placeslist'])->name('placeslist');

//Admin
Route::middleware('auth')->prefix('admin')->group(function (){
    //Category
    Route::get('/logout', [HomeController::class, 'logout'])->name('admin_logout');
    Route::get('/', [HomeController::class, 'index'])->name('admin_index');
    Route::get('category', [CategoryController::class, 'index'])->name('admin_category');
    Route::get('category/add', [CategoryController::class, 'add'])->name('admin_category_add');
    Route::post('category/update/{id}', [CategoryController::class, 'update'])->name('admin_category_update');
    Route::get('category/edit/{id}', [CategoryController::class, 'edit'])->name('admin_category_edit');
    Route::get('category/delete/{id}', [CategoryController::class, 'destroy'])->name('admin_category_delete');
    Route::post('category/create', [CategoryController::class, 'create'])->name('admin_category_create');
    Route::get('category/show', [CategoryController::class, 'show'])->name('admin_category_show');

    //Place
    Route::prefix('place')->group(function(){
        Route::get('/', [PlaceController::class, 'index'])->name('admin_places');
        Route::get('add', [PlaceController::class, 'add'])->name('admin_place_add');
        Route::post('update/{id}', [PlaceController::class, 'update'])->name('admin_place_update');
        Route::get('edit/{id}', [PlaceController::class, 'edit'])->name('admin_place_edit');
        Route::get('delete/{id}', [PlaceController::class, 'destroy'])->name('admin_place_delete');
        Route::post('create', [PlaceController::class, 'create'])->name('admin_place_create');
        Route::get('show', [PlaceController::class, 'show'])->name('admin_place_show');
    });

    //Images Galery
    Route::prefix('image')->group(function(){
        Route::get('add/{place_id}', [ImageController::class, 'add'])->name('admin_image_add');
        Route::get('delete/{place_id}/{id}', [ImageController::class, 'destroy'])->name('admin_image_delete');
        Route::post('create', [ImageController::class, 'create'])->name('admin_image_create');
        Route::post('store/{place_id}', [ImageController::class, 'store'])->name('admin_image_store');
        Route::get('show/{place_id}', [ImageController::class, 'show'])->name('admin_image_show');
    });

    //Message
    Route::prefix('message')->group(function(){
       Route::get('/', [MessageController::class, 'index'])->name('admin_messages');
        Route::get('add', [MessageController::class, 'add'])->name('admin_message_add');
        Route::post('update/{id}', [MessageController::class, 'update'])->name('admin_message_update');
        Route::get('edit/{id}', [MessageController::class, 'edit'])->name('admin_message_edit');
        Route::get('delete/{id}', [MessageController::class, 'destroy'])->name('admin_message_delete');
        
        Route::get('show/{id}', [MessageController::class, 'show'])->name('admin_message_show');
    });
    
    //Setting
    Route::get('setting', [SettingController::class, 'index'])->name('admin_setting');
    Route::post('setting/update/{id}', [SettingController::class, 'update'])->name('admin_setting_update');

    //Review
    Route::prefix('review')->group(function(){
        Route::get('/', [ReviewController::class, 'index'])->name('admin_reviews');
        Route::post('update/{id}', [ReviewController::class, 'update'])->name('admin_review_update');
        Route::get('edit/{id}', [ReviewController::class, 'edit'])->name('admin_review_edit');
        Route::get('delete/{id}', [ReviewController::class, 'destroy'])->name('admin_review_delete');
    });

    Route::get('users', [UserController::class, 'index'])->name('admin_users');
    Route::get('user/add', [UserController::class, 'add'])->name('admin_user_add');
    Route::post('user/update/{id}', [UserController::class, 'update'])->name('admin_user_update');
    Route::get('user/edit/{id}', [UserController::class, 'edit'])->name('admin_user_edit');
    Route::get('user/delete/{id}', [UserController::class, 'destroy'])->name('admin_user_delete');
    Route::get('user/show', [UserController::class, 'show'])->name('admin_user_show');
});

//User middleware
Route::middleware('auth')->prefix('user')->namespace('user')->group(function (){
    //User Profile
    Route::get('/profile', [UserController::class, 'index'])->name('user_profile');

    //User Review
    Route::prefix('review')->group(function(){
        Route::get('/', [UserController::class, 'myreviews'])->name('user_reviews');
        Route::post('update/{id}', [UserController::class, 'updateMyReview'])->name('user_review_update');
        Route::get('edit/{id}', [UserController::class, 'editMyReview'])->name('user_review_edit');
        Route::get('delete/{id}', [UserController::class, 'deleteMyReview'])->name('user_review_delete');
    });

    //User Place
    Route::prefix('place')->group(function(){
        Route::get('/', [UserController::class, 'myplaces'])->name('user_places');
        Route::post('update/{id}', [UserController::class, 'update'])->name('user_place_update');
        Route::get('edit/{id}', [UserController::class, 'edit'])->name('user_place_edit');
        Route::get('delete/{id}', [UserController::class, 'destroy'])->name('user_place_delete');
        Route::get('show/{id}', [UserController::class, 'show'])->name('user_place_show');
    });

    //User Message
    Route::prefix('message')->group(function(){
        Route::get('/', [UserController::class, 'mymessages'])->name('user_messages');
        Route::post('update/{id}', [UserController::class, 'update'])->name('user_message_update');
        Route::get('edit/{id}', [UserController::class, 'edit'])->name('user_message_edit');
        Route::get('delete/{id}', [UserController::class, 'destroy'])->name('user_message_delete');
        Route::get('show/{id}', [UserController::class, 'show'])->name('user_message_show');
    });
});

Route::get('/admin/login', [HomeController::class, 'login'])->name('admin_login');
Route::get('/admin/pass_forgotten', [HomeController::class, 'pass_forgotten'])->name('admin_pass_forgotten');
Route::post('/admin/logincheck', [HomeController::class, 'logincheck'])->name('admin_logincheck');
Route::post('/dashbord', [HomeController::class, 'logincheck']);
// Route::post('/admin/logout', [HomeController::class, 'logout'])->name('admin_logout');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

?>
