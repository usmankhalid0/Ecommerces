<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ShopController;


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
    return view('auth.login');
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/email', [App\Http\Controllers\HomeController::class, 'email'])->name('email');

Route::resource('user', UserController::class);
Route::resource('product', ProductController::class);
Route::get('settingindex',[App\Http\Controllers\SettingController::class,'index'])->name('settingindex');
Route::post('sendNotification',[App\Http\Controllers\SettingController::class,'userNotify'])->name('sendNotification');
Route::resource('shop', ShopController::class);

