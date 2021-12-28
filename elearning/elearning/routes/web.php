<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DangNhapController;
use App\Http\Controllers\ThongTinController;
use App\Http\Controllers\TwilioSMSController;
use App\Http\Controllers\MailerController;
use App\Http\Controllers\AnyController;
use App\Http\Controllers\DangKyController;
use App\Http\Controllers\LopController;
use App\Http\Controllers\SocialController;

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
Route::get('clear/session/{key}', [AnyController::class,'clearSessionKey']);
Route::post('sendSMS', [TwilioSMSController::class, 'index'])->name('verify');
Route::post('checkotp', [TwilioSMSController::class, 'Checkotp'])->name('verifyotp');
Route::get('/email', [TwilioSMSController::class, 'checkemail']);
Route::post('newpass', [TwilioSMSController::class, 'newpass'])->name('checkpass');
Route::get('/forgotpassword', [TwilioSMSController::class, 'getForgotpassword'])->name('forgotpassword');
Route::get('/newpassword',[TwilioSMSController::class, 'getNewpassword'])->name('newpass');
Route::get('/rep',[TwilioSMSController::class, 'replyOTP'])->name('replayotp');
Route::get('/repupdateotp',[TwilioSMSController::class, 'replyupdateOTP'])->name('replyupdateOTP');
Route::post('checkupdateotp', [TwilioSMSController::class, 'Checkupdateotp'])->name('verifyupdateotp');
Route::post('sendotp', [TwilioSMSController::class, 'Updatephone'])->name('sendotp');

Route::get('/classlist', [LopController::class, 'showclass'])->name('classlist');
Route::post('/classlist', [LopController::class, 'showpersonalclass'])->name('showpersonalclass');
Route::get('/classlist/create_class',[LopController::class, 'showCreateClass'])->name('showCreateClass');
Route::post('/classlist/create_class',[LopController::class, 'CreateClass'])->name('CreateClass');
Route::post('/classlist/join',[LopController::class, 'joinclass'])->name('joinclass');
Route::get('/classlist/classdetail/{id}',[LopController::class, 'classdetail'])->name('classdetail');
Route::get('/classlist/addstudent/{id}',[LopController::class, 'addstudent'])->name('addstudent');
Route::post('/classlist/add_student/{id}',[LopController::class, 'add_student'])->name('add_student');
Route::get('/student_join_class', [LopController::class, 'checktoken']);
Route::get('/linkclass', [LopController::class, 'joinlink']);
Route::get('/classlist/classdetail/everyone/{id}', [LopController::class, 'everyone'])->name('everyone');
Route::get('/classlist/addlesson/{id}',[LopController::class, 'showaddlesson'])->name('showaddlesson');
Route::post('/classlist/addlesson/{id}',[LopController::class, 'addlesson'])->name('addlesson');
Route::get('/classlist/detaillesson/{id}',[LopController::class, 'showdetaillesson'])->name('showdetaillesson');



Route::post('/login', [DangNhapController::class, 'xuLyDangNhap'])->name('xl-dang-nhap');
Route::get('/logout', [DangNhapController::class, 'dangxuat'])->name('logout');
Route::post('/signup',[DangKyController::class, 'signup'])->name('signup');

Route::post('/upload', [ThongTinController::class, 'uploadImage'])->name('upload-image');








Route::get('/', function () {
    return view('user/index');
})->name('home');
Route::get('/home', function () {
    return view('user/index');
});
Route::get('/contact', function () {
    return view('user/contact');
});






Route::get('/profile', function () {
    return view('user/profile/profile');
})->name('profile');

Route::get('/profile/UpdateFullName', function () {
    return view('user/profile/reset_profile_name');
})->name('reset_profile_name');

Route::get('/profile/UpdatePhone', function () {
    return view('user/profile/reset_profile_phone');
})->name('reset_profile_phone');
Route::post('/profile/UpdatePhone', [ThongTinController::class ,'capNhatDT'])->name('capNhatDT');

Route::post('/profile/UpdateFullName', [ThongTinController::class ,'capNhatTen'])->name('capNhatTen');

Route::get('/profile/Updatebirthday', function () {
    return view('user/profile/reset_profile_birthday');
})->name('reset_profile_birthday');
Route::post('/profile/Updatebirthday', [ThongTinController::class ,'capNhatNgaySinh'])->name('capNhatNgaySinh');

Route::post('/ChangePassword', [ThongTinController::class, 'capNhatMatKhau'])->name('capNhatMatKhau');









Route::get('/admin', function () {
    return view('admin/index');
})->name('admin_index');
Route::get('/404', function () {
    return view('404');
})->name('404');

Route::get('auth/redirect/{provider}', [SocialController::class, 'redirect']);
Route::get('callback/{provider}', [SocialController::class, 'callback']);





