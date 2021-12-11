<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DangNhapController;
use App\Http\Controllers\ThongTinController;
use App\Http\Controllers\TwilioSMSController;
use App\Http\Controllers\MailerController;


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
Route::post('sendSMS', [TwilioSMSController::class, 'index'])->name('verify');
Route::post('checkotp', [TwilioSMSController::class, 'Checkotp'])->name('verifyotp');
Route::get('/email', [TwilioSMSController::class, 'checkemail']);
Route::post('newpass', [TwilioSMSController::class, 'newpass'])->name('checkpass');


Route::post('/login', [DangNhapController::class, 'xuLyDangNhap'])->name('xl-dang-nhap');
Route::get('/logout', [DangNhapController::class, 'dangxuat'])->name('logout');

Route::post('/upload', [ThongTinController::class, 'uploadImage'])->name('upload-image');






Route::get('/newpassword', function () {
    return view('new_password');
})->name('newpass');


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

Route::get('/forgotpassword', function () {
    return view('forgot_password');
})->name('forgotpassword');

Route::get('/profile', function () {
    return view('profile');
})->name('profile');

Route::get('/profile/UpdateFullName', function () {
    return view('reset_profile_name');
})->name('reset_profile_name');

Route::get('/profile/Updatebirthday', function () {
    return view('reset_profile_birthday');
})->name('reset_profile_birthday');



