<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DangNhapController;
use App\Http\Controllers\ThongTinController;

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
    return view('index');
})->name('home');
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/classlist', function () {
    return view('classlist');
})->name('classlist');
Route::get('/classlist/classdetail', function () {
    return view('class_detail');
})->name('classdetail');
Route::get('/profile', function () {
    return view('profile');
})->name('profile');
Route::get('/profile/UpdateFullName', function () {
    return view('reset_profile_name');
})->name('reset_profile_name');
Route::get('/profile/Updatebirthday', function () {
    return view('reset_profile_birthday');
})->name('reset_profile_birthday');
Route::post('/login', [DangNhapController::class, 'xuLyDangNhap'])->name('xl-dang-nhap');
Route::get('/logout', [DangNhapController::class, 'dangxuat'])->name('logout');

Route::post('/upload', [ThongTinController::class, 'uploadImage'])->name('upload-image');