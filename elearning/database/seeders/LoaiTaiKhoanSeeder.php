<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\LoaiTaiKhoan;

class LoaiTaiKhoanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $loaiTK = new LoaiTaiKhoan();
        $loaiTK->Ten_Loai = "Admin";

        $loaiTK1 = new LoaiTaiKhoan();
        $loaiTK1->Ten_Loai = "Học viên";

        $loaiTK2 = new LoaiTaiKhoan();
        $loaiTK2->Ten_Loai = "Giáo Viên";
    }
}
