<?php

namespace App\Http\Controllers;
use App\Models\TaiKhoan;
use App\Models\Lop;
use App\Models\ChiTietLop;
use App\Models\BaiDang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class DasboardAdminController extends Controller
{
    public function admin_index()
    {
        
        return view('admin/index');
    }
    public function TeacherManagement()
    {
        $countAdmin= TaiKhoan::where('ID_LoaiTaiKhoan',1)->count();
        $countStudent= TaiKhoan::where('ID_LoaiTaiKhoan',2)->count();
        $countTeacher= TaiKhoan::where('ID_LoaiTaiKhoan',3)->count();
        $Teacher= TaiKhoan::where('ID_LoaiTaiKhoan',3)->get();
        return view('admin/TeacherManagement',compact('Teacher','countAdmin','countStudent','countTeacher'));
    }
    public function StudentManagement()
    {
        $countAdmin= TaiKhoan::where('ID_LoaiTaiKhoan',1)->count();
        $countStudent= TaiKhoan::where('ID_LoaiTaiKhoan',2)->count();
        $countTeacher= TaiKhoan::where('ID_LoaiTaiKhoan',3)->count();
        $Student= TaiKhoan::where('ID_LoaiTaiKhoan',2)->get();
        return view('admin/StudentManagement',compact('Student','countAdmin','countStudent','countTeacher'));
    }
    
    public function showcreateAccount()
    {
        $countAdmin= TaiKhoan::where('ID_LoaiTaiKhoan',1)->count();
        $countStudent= TaiKhoan::where('ID_LoaiTaiKhoan',2)->count();
        $countTeacher= TaiKhoan::where('ID_LoaiTaiKhoan',3)->count();
        return view('admin/createAccount',compact('countAdmin','countStudent','countTeacher'));
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
        $countAdmin= TaiKhoan::where('ID_LoaiTaiKhoan',1)->count();
        $countStudent= TaiKhoan::where('ID_LoaiTaiKhoan',2)->count();
        $countTeacher= TaiKhoan::where('ID_LoaiTaiKhoan',3)->count();
        $account = TaiKhoan::find($id);
        return view('admin/updateAccount',compact('countAdmin','countStudent','countTeacher','account'));
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
}
