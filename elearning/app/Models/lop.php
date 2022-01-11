<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lop extends Model
{
    use HasFactory;
    protected $table = "Lop";
    public function DSTaiKhoan(){
        return $this->belongsToMany('App\Models\taikhoan','chitietlop','ID_Lop','ID_TaiKhoan')->withPivot('TrangThai');
    }
    public function TaiKhoan()
    {
        return $this->belongsTo('App\Models\taikhoan','ID_TaiKhoan','id');
    }
    public function DSBaiDang()
    {
        return $this->hasMany('App\Models\baidang','ID_Lop','id');
    }


}
