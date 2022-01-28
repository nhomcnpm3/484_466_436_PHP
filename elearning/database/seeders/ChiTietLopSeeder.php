<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ChiTietLop;

class ChiTietLopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ctLop = new ChiTietLop();
        $ctLop->ID_TaiKhoan = 2;
        $ctLop->ID_Lop = 2;
        $ctLop->TrangThai = 1;
        $ctLop->LoaiGiaNhap = 1;
        $ctLop->save();

        $ctLop1 = new ChiTietLop();
        $ctLop1->ID_TaiKhoan = 3;
        $ctLop1->ID_Lop = 2;
        $ctLop1->TrangThai = 1;
        $ctLop1->LoaiGiaNhap = 1;
        $ctLop1->save();

        $ctLop2 = new ChiTietLop();
        $ctLop2->ID_TaiKhoan = 4;
        $ctLop2->ID_Lop = 2;
        $ctLop2->TrangThai = 1;
        $ctLop2->LoaiGiaNhap = 1;
        $ctLop2->save();

        $ctLop3 = new ChiTietLop();
        $ctLop3->ID_TaiKhoan = 7;
        $ctLop3->ID_Lop = 2;
        $ctLop3->TrangThai = 1;
        $ctLop3->LoaiGiaNhap = 1;
        $ctLop3->save();

        $ctLop4 = new ChiTietLop();
        $ctLop4->ID_TaiKhoan = 4;
        $ctLop4->ID_Lop = 3;
        $ctLop4->TrangThai = 1;
        $ctLop4->LoaiGiaNhap = 1;
        $ctLop4->save();

        $ctLop5 = new ChiTietLop();
        $ctLop5->ID_TaiKhoan = 5;
        $ctLop5->ID_Lop = 3;
        $ctLop5->TrangThai = 1;
        $ctLop5->LoaiGiaNhap = 1;
        $ctLop5->save();

        $ctLop6 = new ChiTietLop();
        $ctLop6->ID_TaiKhoan = 8;
        $ctLop6->ID_Lop = 3;
        $ctLop6->TrangThai = 1;
        $ctLop6->LoaiGiaNhap = 1;
        $ctLop6->save();

        $ctLop7 = new ChiTietLop();
        $ctLop7->ID_TaiKhoan = 2;
        $ctLop7->ID_Lop = 3;
        $ctLop7->TrangThai = 1;
        $ctLop7->LoaiGiaNhap = 1;
        $ctLop7->save();

        $ctLop8 = new ChiTietLop();
        $ctLop8->ID_TaiKhoan = 4;
        $ctLop8->ID_Lop = 3;
        $ctLop8->TrangThai = 1;
        $ctLop8->LoaiGiaNhap = 1;
        $ctLop8->save();

        $ctLop9 = new ChiTietLop();
        $ctLop9->ID_TaiKhoan = 9;
        $ctLop9->ID_Lop = 3;
        $ctLop9->TrangThai = 1;
        $ctLop9->LoaiGiaNhap = 1;
        $ctLop9->save();
    }
}
