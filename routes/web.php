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

//Admin
Route::get('/admin', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('admin_index')->middleware('auth:auth');
Route::get('/admin/login', [App\Http\Controllers\Admin\HomeController::class, 'login'])->name('admin_login');
Route::get('/admin/pass_forgotten', [App\Http\Controllers\Admin\HomeController::class, 'pass_forgotten'])->name('admin_pass_forgotten');
Route::post('/admin/logincheck', [App\Http\Controllers\Admin\HomeController::class, 'logincheck'])->name('admin_logincheck');
Route::post('/dashbord', [App\Http\Controllers\Admin\HomeController::class, 'logincheck']);
Route::post('/admin/logout', [App\Http\Controllers\Admin\HomeController::class, 'logout'])->name('admin_logout');



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
