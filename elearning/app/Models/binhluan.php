<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BinhLuan extends Model
{
    use HasFactory;
    protected $table = "BinhLuan";
    public function TaiKhoan()
    {
        return $this->belongsTo('App\Models\TaiKhoan','ID_TaiKhoan');
    }
    public function DanhsachTepBinhLuan()
    {
        return $this->hasMany('App\Models\tepbinhluan','ID_BinhLuan','id');
    }  
}
