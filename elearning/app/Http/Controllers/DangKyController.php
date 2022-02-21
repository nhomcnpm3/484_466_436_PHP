<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\TaiKhoan;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class DangKyController extends Controller
{
    public function signup(Request $request)
    {
        $kiemtraemail = TaiKhoan::where('Email', $request->mail)->first();
        if (empty($kiemtraemail)) {

            $taikhoan = new TaiKhoan;
            $taikhoan->token = "";
            $taikhoan->Ten = $request->fullname;
            $taikhoan->Phone = $request->phone;
            $taikhoan->DiaChi = $request->address;
            $taikhoan->Email = $request->mail;
            $taikhoan->password = Hash::make($request->pass);
            $time = time();
            $file = $request->file('image')->getClientOriginalName();
            $new_img_name = $time . "-" . $file;
            $uploadFile = $request->image;
            $uploadFile->storeAs('extra-images', $new_img_name);
            $taikhoan->AVT = $new_img_name;
            $taikhoan->NgaySinh = $request->birthday;
            $taikhoan->TrangThai = 1;
            $taikhoan->provider = "";
            $taikhoan->ID_LoaiTaiKhoan = 3;
            $taikhoan->save();
            if (Auth::attempt(['Email' => $request->mail, 'password' =>
            $request->pass])) {
                return redirect()->route('home');
            } else {
                echo ("fail");
            }
        }



        return view();
    }
}
