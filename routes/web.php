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
Route::get('/admin', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('admin_home');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
