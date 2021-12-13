<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TaiKhoan;
use Illuminate\Support\Facades\Hash;

class ThongTinController extends Controller
{
    public function uploadImage(Request $request)
    {
        $time = time();
        $file = $request->file('image')->getClientOriginalName();
        $new_img_name = $time."-".$file;
        $uploadFile = $request->image;
        $uploadFile->storeAs('extra-images', $new_img_name);

        $taikhoan = TaiKhoan::find(auth()->user()->id);
        $taikhoan->AVT = $new_img_name;
        $taikhoan->save();

        return redirect()->route('profile');
    }

    public function capNhatTen(Request $request)
    {
        $taikhoan = TaiKhoan::find(auth()->user()->id);
        $taikhoan->Ten = $request->Ten;    
        $taikhoan->save();        
        return redirect()->route('profile');
    }

    public function capNhatNgaySinh(Request $request)
    {
        $taikhoan = TaiKhoan::find(auth()->user()->id);
        $taikhoan->NgaySinh = $request->NgaySinh;
        $taikhoan->save();
        return redirect()->route('profile');
    }

    public function capNhatMatKhau(Request $request)
    {
        $taikhoan = TaiKhoan::find(auth()->user()->id);
        if($request->MatKhauMoi != $request->NhapLaiMatKhauMoi)
        {
            return redirect()->route('profile');
        }
        else
        {
            $taikhoan->password =  Hash::make($request->MatKhauMoi);
            $taikhoan->save();
        }
        return redirect()->route('profile');
    }

    public function capNhatDT(Request $request)
    {
        $taikhoan = TaiKhoan::find(auth()->user()->id);
        $taikhoan->phone = $request->SDT;
        $taikhoan->save();
        return redirect()->route('profile');
    }
}
