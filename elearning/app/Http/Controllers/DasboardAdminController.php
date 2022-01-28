<?php

namespace App\Http\Controllers;
use App\Models\TaiKhoan;
use App\Models\Lop;
use App\Models\ChiTietLop;
use App\Models\BaiDang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class DasboardAdminController extends Controller
{
    public function admin_index()
    {
        
        return view('admin/index');
    }
    public function TeacherManagement()
    {
        $Teacher= TaiKhoan::where('ID_LoaiTaiKhoan',3)->get();
        //$a= Storage::disk('public-folder')->allFiles('');
        return view('admin/TeacherManagement',compact('Teacher'));
    }
    public function StudentManagement()
    {
        $Student= TaiKhoan::where('ID_LoaiTaiKhoan',2)->get();
        return view('admin/StudentManagement',compact('Student'));
    }
    
    public function FileManagement()
    {
        $images= Storage::disk('public-folder')->allFiles('');
        $Student= TaiKhoan::where('ID_LoaiTaiKhoan',2)->get();

        
        dd($images);

        return view('admin/filemanager',compact('Student'));
    }
    
    public function showcreateAccount()
    {
        return view('admin/createAccount');
    }

    public function createAccount(Request $request)
    {
        $account = new TaiKhoan;
        $account->Ten = $request->fullname;

        $time = time();
        $file = $request->file('avt')->getClientOriginalName();
        $new_img_name = $time."-".$file;
        $uploadFile = $request->avt;
        $uploadFile->storeAs('extra-images', $new_img_name);

        $account->AVT = $new_img_name;
        $account->Phone = $request->phone;
        $account->Email = $request->email;
        $account->DiaChi = $request->address;
        $account->Password = Hash::make($request->password);
        $account->NgaySinh = $request->birthday;
        $account->provider = "admin";
        $account->token = "0";
        $account->TrangThai = 1;
        $account->ID_LoaiTaiKhoan = $request->typeAccount;

        $account->save();
        return redirect()->route('admin_index');
    }

    public function showupdateAccount($id)
    {
        $account = TaiKhoan::find($id);
        return view('admin/updateAccount',compact('account'));
    }

    public function updateAccount(Request $request, $id)
    {
        $account = TaiKhoan::find($id);
        $account->Ten = $request->fullname;

        if($request->avt !="")
        {
            $time = time();
            $file = $request->file('avt')->getClientOriginalName();
            $new_img_name = $time."-".$file;
            $uploadFile = $request->avt;
            $uploadFile->storeAs('extra-images', $new_img_name);

            $account->AVT = $new_img_name;
        }
        else
        {
            $account->AVT = $account->AVT;
        }
        
        $account->Phone = $request->phone;
        $account->Email = $request->email;
        $account->DiaChi = $request->address;
        $account->Password = Hash::make($request->password);
        $account->NgaySinh = $request->birthday;
        $account->provider = "admin";
        $account->token = "0";
        $account->TrangThai = 1;
        $account->ID_LoaiTaiKhoan = $request->typeAccount;

        $account->save();
        if($account->ID_LoaiTaiKhoan == 2)
        {
            return redirect()->route('StudentManagement');
        }
        if($account->ID_LoaiTaiKhoan == 3)
        {
            return redirect()->route('TeacherManagement');
        }
        
    }

    public function deleteAccount($id)
    {
        $loaitk =  TaiKhoan::find($id);
        TaiKhoan::where('id', $id)->delete();
        ChiTietLop::where('ID_TaiKhoan', $id)->delete();
        Lop::where('ID_TaiKhoan', $id)->delete();
        BaiDang::where('ID_TaiKhoan', $id)->delete();
        if($loaitk->ID_LoaiTaiKhoan == 2)
        {
            return redirect()->route('StudentManagement');
        }
        if($loaitk->ID_LoaiTaiKhoan == 3)
        {
            return redirect()->route('TeacherManagement');
        }
    }
    public function classmanagement()
    {
        $Teacher= TaiKhoan::where('ID_LoaiTaiKhoan',3)->get();
        return view('admin/ClassManagement/ClassManagement',compact('Teacher'));
    }
    public function ShowClass($id)
    {
        $Teacher= TaiKhoan::where('ID_LoaiTaiKhoan',3)->get();
        $class=Lop::where('ID_TaiKhoan',$id)->get();
        return view('admin/ClassManagement/abc',compact('Teacher','class'));
    }
    public function ShowClassDetail($id)
    {
        $class=Lop::find($id);
        $color = "";
        $title = "";
        return view('admin/ClassManagement/admin_classdetail',compact('class', 'color', 'title'));
    }
    public function ClassDetail($id, Request $request)
    {
        $class=Lop::find($id);
        $class->TenLop = $request->tenlop;
        $class->MoTa = $request->mota;
        $class->Logo = $class->Logo;
        $class->Banner = $class->Banner;
        $class->MauChuDe = $class->MauChuDe;
        $class->TrangThai = $request->trangthai;
        $class->ID_TaiKhoan = $class->ID_TaiKhoan;
        $class->MaLop = $class->MaLop;
        $class->token = $class->token;
        $class->save();
        return redirect()->route('ShowClass', ['id' => $class->ID_TaiKhoan]);
    }
}
