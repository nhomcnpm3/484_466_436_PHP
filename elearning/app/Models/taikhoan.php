<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authentication;

class TaiKhoan extends Authentication
{
    use HasFactory;    
    protected $table = "TaiKhoan";    
    public function LoaiTaiKhoan()
    {
        return $this->belongsTo('App\Models\LoaiTaiKhoan');
    }
}
