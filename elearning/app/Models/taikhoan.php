<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authentication;

class TaiKhoan extends Authentication
{
    use HasFactory;    
    protected $table = "TaiKhoan";  
    public function DanhsachLop()
    {
        return $this->hasMany('App\Models\lop','ID_TaiKhoan','id');
    }  
    public function LoaiTaiKhoan()
    {
        return $this->belongsTo('App\Models\LoaiTaiKhoan');
    }
    public function DSLop(){
        return $this->belongsToMany('App\Models\lop','chitietlop','ID_TaiKhoan','ID_Lop')->withPivot('TrangThai')->withPivot('LoaiGiaNhap');
    }
    public function DSBaiDang()
    {
        return $this->hasMany('App\Models\baidang');
    }
    public function dschitietlop()
    {
        return $this->hasMany('App\Models\chitietlop');
    }
}
