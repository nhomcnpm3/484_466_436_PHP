<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TaiKhoan;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class DangNhapController extends Controller
{
    public function xuLyDangNhap(Request $request)
    {
        if (Auth::attempt(['Email' => $request->email, 'password' =>
        $request->password])) {
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