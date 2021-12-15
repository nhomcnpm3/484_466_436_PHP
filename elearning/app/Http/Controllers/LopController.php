<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;;

use App\Models\lop;
use App\Models\taikhoan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LopController extends Controller
{
    public function showclass()
    {
        if ((Auth::check())) {
            $classlist = taikhoan::find(auth()->user()->id);
            return view('class/classlist', compact('classlist'));
        }
        return redirect()->route('home');
    }
    public function showCreateClass()
    {
        return view('class/create_class');
    }
    public function CreateClass(Request $request)
    {
        $lop = new lop;
        $lop->TenLop = $request->classname;
        $lop->MoTa = $request->description;
        $time = time();
        $file = $request->file('logo')->getClientOriginalName();
        $new_img_name = $time . "-" . $file;
        $uploadLogo = $request->logo;
        $uploadLogo->storeAs('extra-images', $new_img_name);
        $lop->Logo = $uploadLogo;
        $time = time();
        $file = $request->file('banner')->getClientOriginalName();
        $new_img_name = $time . "-" . $file;
        $uploadBanner = $request->banner;
        $uploadBanner->storeAs('extra-images', $new_img_name);
        $lop->Banner = $uploadBanner;
        $lop->MauChuDe = $request->favcolor;
        $lop->ID_TaiKhoan = auth()->user()->id;
        $lop->MaLop = Str::random(7);
        $lop->save();
        return redirect()->route('classlist');
    }
}
