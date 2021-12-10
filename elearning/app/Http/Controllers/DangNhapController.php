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
        //dd(Auth::attempt(['Email' => $request->email, 'password' =>$request->password]));
        if (Auth::attempt(['Email' => $request->email, 'password' =>
        $request->password])) {
            echo("hi");
        } else {
            echo("fail");
        }
    }
}