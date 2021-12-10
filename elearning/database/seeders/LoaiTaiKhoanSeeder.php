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
        $loaiTK->TenLoai = "Admin";
        $loaiTK->save();

        $loaiTK1 = new LoaiTaiKhoan();
        $loaiTK1->TenLoai = "Học viên";
        $loaiTK1->save();

        $loaiTK2 = new LoaiTaiKhoan();
        $loaiTK2->TenLoai = "Giáo Viên";
        $loaiTK2->save();
    }
}
