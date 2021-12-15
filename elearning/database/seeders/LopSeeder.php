<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Lop;

class LopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $lop = new Lop();
        $lop->TenLop = "Lớp học bổ túc";
        $lop->MoTa = "Lớp học bổ túc";
        $lop->Logo = "logo.png";
        $lop->Banner = "banner.png";
        $lop->MauChuDe = "#CCCCCC";
        $lop->MaLop ="lophocbotuc";
        $lop->ID_TaiKhoan="1";

        $lop->save();

        $lop1 = new Lop();
        $lop1->TenLop = "Lớp học Anh Văn A1";
        $lop1->MoTa = "Lớp học bổ túc";
        $lop1->Logo = "logo.png";
        $lop1->Banner = "banner.png";
        $lop1->MauChuDe = "#CCCCCC";
        $lop1->MaLop ="lophocanhvan1";
        $lop1->ID_TaiKhoan="1";
        $lop1->save();

        $lop2 = new Lop();
        $lop2->TenLop = "Lớp học Laravel";
        $lop2->MoTa = "Lớp học bổ túc";
        $lop2->Logo = "logo.png";
        $lop2->Banner = "banner.png";
        $lop2->MauChuDe = "#CCCCCC";
        $lop2->MaLop ="lophoclaravel";
        $lop2->ID_TaiKhoan="1";
        $lop2->save();
    }
}