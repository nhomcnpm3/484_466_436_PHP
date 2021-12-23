<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Validator,Redirect,Response,File;
use Socialite;
use App\Models\User;
use App\Models\TaiKhoan;

class SocialController extends Controller
{
public function redirect($provider)
{
    return Socialite::driver($provider)->redirect();
}
 
public function callback($provider)
{
           
    $getInfo = Socialite::driver($provider)->user();
    $user = $this->createUser($getInfo,$provider);
    auth()->login($user);
 
    return redirect()->to('/home');
 
}
function createUser($getInfo,$provider){
 
 $user1 = TaiKhoan::where('Email', $getInfo->email)->first();
 
 if (!$user1) {

     $user = new TaiKhoan;
     $user->Ten     = $getInfo->name;
     $user->AVT    = $getInfo->avatar;
     $user->Phone    = "";
     $user->Email   = $getInfo->email;
     $user->DiaChi   = "";
     $user->password    = "";
     $user->NgaySinh    = '1990-01-01';
     $user->provider = $provider;
     $user->token    = "";
     $user->TrangThai    = 1;
     $user->ID_LoaiTaiKhoan    = 2;
     $user->save();
     return $user;
  }
  return $user1;
}
}
