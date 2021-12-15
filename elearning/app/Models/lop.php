<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lop extends Model
{
    use HasFactory;
<<<<<<< Updated upstream
=======
    protected $table = "Lop";
    public function DSTaiKhoan(){
        return $this->belongsToMany('App\Models\taikhoan','chitietlop','ID_TaiKhoan','ID_Lop');
    }
    public function TaiKhoan()
    {
        return $this->belongsTo('App\Models\taikhoan','ID_TaiKhoan','id');
    }
>>>>>>> Stashed changes
}
