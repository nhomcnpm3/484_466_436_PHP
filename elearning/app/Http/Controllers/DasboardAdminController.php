<?php

namespace App\Http\Controllers;
use App\Models\TaiKhoan;
use Illuminate\Http\Request;

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
    
}
