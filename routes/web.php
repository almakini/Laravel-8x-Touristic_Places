<?php

use App\http\Controllers\MainController;
use App\http\Controllers\Admin\HomeController;
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

//Admin
Route::middleware('auth')->prefix('admin')->group(function (){
    Route::get('/', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('admin_index');
    Route::get('category', [App\Http\Controllers\Admin\CategoryController::class, 'index'])->name('admin_category');
    Route::get('category/add', [App\Http\Controllers\Admin\CategoryController::class, 'add'])->name('admin_category_add');
    Route::get('category/update/{id}', [App\Http\Controllers\Admin\CategoryController::class, 'update'])->name('admin_category_update');
    Route::get('category/delete/{id}', [App\Http\Controllers\Admin\CategoryController::class, 'destroy'])->name('admin_category_delete');
    Route::post('category/create', [App\Http\Controllers\Admin\CategoryController::class, 'create'])->name('admin_category_create');
    Route::get('category/show', [App\Http\Controllers\Admin\CategoryController::class, 'show'])->name('admin_category_show');
});

Route::middleware('auth')->prefix('users')->group(function (){
    Route::get('/', [App\Http\Controllers\Admin\UsersController::class, 'index'])->name('users');
    Route::get('/add', [App\Http\Controllers\Admin\UsersController::class, 'add'])->name('users_add');
    Route::get('/update', [App\Http\Controllers\Admin\UsersController::class, 'update'])->name('users_update');
    Route::get('/delete', [App\Http\Controllers\Admin\UsersController::class, 'destroy'])->name('users_delete');
    Route::get('/show', [App\Http\Controllers\Admin\UsersController::class, 'show'])->name('users_show');
});

Route::get('/admin', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('admin_index');
Route::get('/admin/login', [App\Http\Controllers\Admin\HomeController::class, 'login'])->name('admin_login');
Route::get('/admin/pass_forgotten', [App\Http\Controllers\Admin\HomeController::class, 'pass_forgotten'])->name('admin_pass_forgotten');
Route::post('/admin/logincheck', [App\Http\Controllers\Admin\HomeController::class, 'logincheck'])->name('admin_logincheck');
Route::post('/dashbord', [App\Http\Controllers\Admin\HomeController::class, 'logincheck']);
Route::post('/admin/logout', [App\Http\Controllers\Admin\HomeController::class, 'logout'])->name('admin_logout');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

?>
