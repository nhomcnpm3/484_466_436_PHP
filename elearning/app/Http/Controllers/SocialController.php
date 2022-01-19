<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator, Response, File;
use Socialite;
use App\Models\User;
use App\Models\TaiKhoan;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use App\Models\gianhaplop;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class SocialController extends Controller
{
    public function setpass(Request $request,$id)
    {
        $checksession=$request->session()->get('id');
        if($checksession==$id){
            $user = TaiKhoan::where('id', $id)->first();
            return view("user/create_new_password",compact('user'));
        }
        return redirect()->route('404');
    }
    public function ReSetPass(Request $request, $id)
    {
        $user = TaiKhoan::where('id', $id)->first();
        if(!empty($user)){
            $user->password=Hash::make($request->password);
            $user->save();
            auth()->login($user);
            return redirect()->route('home');
        }
        return redirect()->route('404');
    }
    public function redirect($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function callback(Request $request,$provider)
    {

        $getInfo = Socialite::driver($provider)->stateless()->user();
        $user = $this->createUser($getInfo, $provider);
        if(empty($user->password)){
            $request->session()->flash('id', $user->id);
            return redirect()->route('setpass',['id'=>$user->id]);
        }
        auth()->login($user);
        if(!empty(session('token'))){
            $token = session('token');
            session()->forget('token');
            $checkjoinclass = gianhaplop::where('Token_mail', $token)->first();
            if (!empty($checkjoinclass)) {
                if (auth()->user()->id == $checkjoinclass->ID_TaiKhoan) {
                    return Redirect::to("http://127.0.0.1:8000/student_join_class?token={$token}");
                }
            }
        }
        return redirect()->to('/home');
    }
    function createUser($getInfo, $provider)
    {

        $user1 = TaiKhoan::where('Email', $getInfo->email)->first();

        if (!$user1) {
            $time = time();
            $random = Str::random(6);
            Storage::disk('local1')->put($time . $random . ".png", file_get_contents($getInfo->avatar));


            $user = new TaiKhoan;
            $user->Ten     = $getInfo->name;
            $user->AVT    = $time . $random . ".png";
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
