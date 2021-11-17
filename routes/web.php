<?php

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
    return view('home');
});

Route::get('/home', [App\Http\Controllers\IndexController::class, 'index'])->name('home');

Route::get('/about', [App\Http\Controllers\AboutController::class, 'index'])->name('about');

Route::get('/service', [App\Http\Controllers\ServiceController::class, 'index'])->name('service');

Route::get('/team', [App\Http\Controllers\TeamController::class, 'index'])->name('team');

Route::get('/contact', [App\Http\Controllers\ContactController::class, 'index'])->name('contact');
Route::post('/contact', [App\Http\Controllers\ContactController::class, 'store']);

Route::post('/footer', [App\Http\Controllers\FooterController::class, 'store'])->name('footer');


Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'index'])->name('login');
Route::post('/login',[App\Http\Controllers\Auth\LoginController::class, 'store']);

Route::get('/info', [App\Http\Controllers\InfoController::class, 'index'])->name('info');

Route::post('/logout', [App\Http\Controllers\Auth\LogoutController::class, 'store']) ->name('logout');
