<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DangNhapController;

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
Route::get('/classdetail', function () {
    return view('class_detail');
})->name('classdetail');

Route::post('/login', [DangNhapController::class, 'xuLyDangNhap'])->name('xl-dang-nhap');