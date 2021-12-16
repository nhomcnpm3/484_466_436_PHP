<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;;

use App\Models\lop;
use App\Models\taikhoan;
use App\Models\chitietlop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LopController extends Controller
{
    public function showclass()
    {
        if ((Auth::check())) {
            $classlist = taikhoan::find(auth()->user()->id);
            return view('user/class/classlist', compact('classlist'));
        }
        return redirect()->route('home');
    }
    public function showCreateClass()
    {
        return view('user/class/create_class');
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
        $lop->Logo = $new_img_name;
        $time = time();
        $file = $request->file('banner')->getClientOriginalName();
        $new_img_name = $time . "-" . $file;
        $uploadBanner = $request->banner;
        $uploadBanner->storeAs('extra-images', $new_img_name);
        $lop->Banner = $new_img_name;
        $lop->MauChuDe = $request->favcolor;
        $lop->ID_TaiKhoan = auth()->user()->id;
        $lop->MaLop = Str::random(7);
        $lop->save();
        $chitietlop = new chitietlop;
        $chitietlop->ID_TaiKhoan=auth()->user()->id;
        $chitietlop->ID_Lop=$lop->id;
        $chitietlop->TrangThai=1;
        $chitietlop->save();
        return redirect()->route('classlist');
    }
    public function joinclass(Request $request){
        
        $lop = lop::where("MaLop",$request->joinclass)->first();
        if(empty($lop)){
            return redirect()->route('classlist');
        }
        $chitietlop=chitietlop::where([["ID_TaiKhoan",auth()->user()->id],['ID_Lop',$lop->id]])->first();
        if(empty($chitietlop)){
            $chitietlop = new chitietlop;
            $chitietlop->ID_TaiKhoan=auth()->user()->id;
            $chitietlop->ID_Lop=$lop->id;
            $chitietlop->TrangThai=1;
            $chitietlop->save();
            return redirect()->route('classlist');
        }
        return redirect()->route('classlist');
    }
    public function classdetail($id){
        return view('user/class/class_detail');
    }

}
