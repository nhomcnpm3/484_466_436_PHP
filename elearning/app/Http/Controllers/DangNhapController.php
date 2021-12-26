<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TaiKhoan;
use App\Models\gianhaplop;
use App\Models\lop;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class DangNhapController extends Controller
{
    public function xuLyDangNhap(Request $request)
    {
        if (Auth::attempt(['Email' => $request->email, 'password' =>
        $request->password])) {
            $token=session('token');
            session()->forget('token');
            $checkjoinclass=gianhaplop::where('Token_mail',$token)->first();
            if(!empty($checkjoinclass)){
                if(auth()->user()->id==$checkjoinclass->ID_TaiKhoan){
                    return Redirect::to("http://127.0.0.1:8000/student_join_class?token={$token}");
                }
            }
            return redirect()->route('home');
        } else {
            echo("fail");
        }
    }
    public function dangxuat()
    {
        $user= Auth::logout();
        return redirect()->route('home');
    }
    
}