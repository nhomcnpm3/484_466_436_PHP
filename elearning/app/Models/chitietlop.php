<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChiTietLop extends Model
{
    use HasFactory;
    protected $table = "ChiTietLop";
    public function TaiKhoan()
    {
        return $this->belongsTo('App\Models\TaiKhoan');
    }
}
