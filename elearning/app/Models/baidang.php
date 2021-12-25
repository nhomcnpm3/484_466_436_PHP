<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BaiDang extends Model
{
    use HasFactory;
    protected $table = "BaiDang";
    public function TaiKhoan()
    {
        return $this->belongsTo('App\Models\taikhoan');
    }
}
