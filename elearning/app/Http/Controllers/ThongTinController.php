<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TaiKhoan;

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
}
