<?php

use App\http\Controllers\MainController;
use App\http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Admin\UserController;
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
Route::get('/signin', [MainController::class, 'signin'])->name('signin');
Route::get('/signup', [MainController::class, 'signup'])->name('signup');
Route::get('/place_details', [MainController::class, 'place_details'])->name('place_details');
Route::get('/faq', [MainController::class, 'faq'])->name('faq');
Route::get('/references', [MainController::class, 'references'])->name('references');

//Admin
Route::middleware('auth')->prefix('admin')->group(function (){
    //Category
    Route::get('/logout', [App\Http\Controllers\Admin\HomeController::class, 'logout'])->name('admin_logout');
    Route::get('/', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('admin_index');
    Route::get('category', [App\Http\Controllers\Admin\CategoryController::class, 'index'])->name('admin_category');
    Route::get('category/add', [App\Http\Controllers\Admin\CategoryController::class, 'add'])->name('admin_category_add');
    Route::post('category/update/{id}', [App\Http\Controllers\Admin\CategoryController::class, 'update'])->name('admin_category_update');
    Route::get('category/edit/{id}', [App\Http\Controllers\Admin\CategoryController::class, 'edit'])->name('admin_category_edit');
    Route::get('category/delete/{id}', [App\Http\Controllers\Admin\CategoryController::class, 'destroy'])->name('admin_category_delete');
    Route::post('category/create', [App\Http\Controllers\Admin\CategoryController::class, 'create'])->name('admin_category_create');
    Route::get('category/show', [App\Http\Controllers\Admin\CategoryController::class, 'show'])->name('admin_category_show');

    //Place
    Route::prefix('place')->group(function(){
        Route::get('/', [App\Http\Controllers\Admin\PlaceController::class, 'index'])->name('admin_places');
        Route::get('add', [App\Http\Controllers\Admin\PlaceController::class, 'add'])->name('admin_place_add');
        Route::post('update/{id}', [App\Http\Controllers\Admin\PlaceController::class, 'update'])->name('admin_place_update');
        Route::get('edit/{id}', [App\Http\Controllers\Admin\PlaceController::class, 'edit'])->name('admin_place_edit');
        Route::get('delete/{id}', [App\Http\Controllers\Admin\PlaceController::class, 'destroy'])->name('admin_place_delete');
        Route::post('create', [App\Http\Controllers\Admin\PlaceController::class, 'create'])->name('admin_place_create');
        Route::get('show', [App\Http\Controllers\Admin\PlaceController::class, 'show'])->name('admin_place_show');
    });

    //Images Galery
    Route::prefix('image')->group(function(){
        Route::get('add/{place_id}', [App\Http\Controllers\Admin\ImageController::class, 'add'])->name('admin_image_add');
        Route::get('delete/{place_id}/{id}', [App\Http\Controllers\Admin\ImageController::class, 'destroy'])->name('admin_image_delete');
        Route::post('create', [App\Http\Controllers\Admin\ImageController::class, 'create'])->name('admin_image_create');
        Route::post('store/{place_id}', [App\Http\Controllers\Admin\ImageController::class, 'store'])->name('admin_image_store');
        Route::get('show/{place_id}', [App\Http\Controllers\Admin\ImageController::class, 'show'])->name('admin_image_show');
    });

    //Setting
    Route::get('setting', [App\Http\Controllers\Admin\SettingController::class, 'index'])->name('admin_setting');
    Route::post('setting/update/{id}', [App\Http\Controllers\Admin\SettingController::class, 'update'])->name('admin_setting_update');

    Route::get('users', [App\Http\Controllers\Admin\UserController::class, 'index'])->name('admin_users');
    Route::get('user/add', [App\Http\Controllers\Admin\UserController::class, 'add'])->name('admin_user_add');
    Route::post('user/update/{id}', [App\Http\Controllers\Admin\UserController::class, 'update'])->name('admin_user_update');
    Route::get('user/edit/{id}', [App\Http\Controllers\Admin\UserController::class, 'edit'])->name('admin_user_edit');
    Route::get('user/delete/{id}', [App\Http\Controllers\Admin\UserController::class, 'destroy'])->name('admin_user_delete');
    Route::get('user/show', [App\Http\Controllers\Admin\UserController::class, 'show'])->name('admin_user_show');

    Route::get('place/detail/{id}', [App\Http\Controllers\Admin\PlaceController::class, 'detail'])->name('place_detail');
});

//User middleware
Route::middleware('auth')->prefix('user')->namespace('user')->group(function (){
    Route::get('/myprofile', [App\Http\Controllers\UserController::class, 'index'])->name('user_profile');
    Route::get('/myreviews', [App\Http\Controllers\UserController::class, 'myreviews'])->name('user_reviews');
    Route::get('/mymessages', [App\Http\Controllers\UserController::class, 'mymessages'])->name('user_messages');
    Route::get('/myplaces', [App\Http\Controllers\UserController::class, 'myplaces'])->name('user_places');
});

Route::get('/admin/login', [App\Http\Controllers\Admin\HomeController::class, 'login'])->name('admin_login');
Route::get('/admin/pass_forgotten', [App\Http\Controllers\Admin\HomeController::class, 'pass_forgotten'])->name('admin_pass_forgotten');
Route::post('/admin/logincheck', [App\Http\Controllers\Admin\HomeController::class, 'logincheck'])->name('admin_logincheck');
Route::post('/dashbord', [App\Http\Controllers\Admin\HomeController::class, 'logincheck']);
// Route::post('/admin/logout', [App\Http\Controllers\Admin\HomeController::class, 'logout'])->name('admin_logout');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

?>
