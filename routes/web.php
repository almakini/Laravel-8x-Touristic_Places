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

Route::get('/', function () {
    return view('welcome');
});

//User
Route::get('/home', [MainController::class, 'main'])->name('home');
Route::get('/about', [MainController::class, 'about'])->name('about');
Route::get('/contact-us', [MainController::class, 'contact'])->name('contact-us');
Route::get('/search_place', [MainController::class, 'search_place'])->name('search_place');

//Admin
Route::middleware('auth')->prefix('admin')->group(function (){
    Route::get('/', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('admin_index');
    Route::get('category', [App\Http\Controllers\Admin\CategoryController::class, 'index'])->name('admin_category');
    Route::get('category/add', [App\Http\Controllers\Admin\CategoryController::class, 'add'])->name('admin_category_add');
    Route::get('category/update', [App\Http\Controllers\Admin\CategoryController::class, 'update'])->name('admin_category_update');
    Route::get('category/delete', [App\Http\Controllers\Admin\CategoryController::class, 'destroy'])->name('admin_category_delete');
    Route::get('category/show', [App\Http\Controllers\Admin\CategoryController::class, 'show'])->name('admin_category_show');
});

Route::post('/admin', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('admin_index');
Route::get('/admin/login', [App\Http\Controllers\Admin\HomeController::class, 'login'])->name('admin_login');
Route::get('/admin/pass_forgotten', [App\Http\Controllers\Admin\HomeController::class, 'pass_forgotten'])->name('admin_pass_forgotten');
Route::post('/admin/logincheck', [App\Http\Controllers\Admin\HomeController::class, 'logincheck'])->name('admin_logincheck');
Route::post('/dashbord', [App\Http\Controllers\Admin\HomeController::class, 'logincheck']);
Route::post('/admin/logout', [App\Http\Controllers\Admin\HomeController::class, 'logout'])->name('admin_logout');


// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

?>