<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TaiKhoan;

class TaiKhoanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Thêm tài khoabr admin
        $taiKhoan = new TaiKhoan();
        $taiKhoan->Ten = "Admin";
        $taiKhoan->AVT = "avt_mac_dinh.png";        
        $taiKhoan->Email = "Admin@gmail.com";
        $taiKhoan->DiaChi = "TP HCM";
        $taiKhoan->MatKhau ="12345678";
        $taiKhoan->NgaySinh = "2001/05/26";
        $taiKhoan->ID_Loai_Tai_Khoan = 1;
        $taiKhoan->TrangThai = 1;

        //Thêm tài khoản học viên
        $taiKhoan1 = new TaiKhoan();
        $taiKhoan1->Ten = "Nguyễn Tấn Lộc";
        $taiKhoan1->AVT = "avt_mac_dinh.png";        
        $taiKhoan1->Email = "Loc@gmail.com";
        $taiKhoan1->DiaChi = "TP HCM";
        $taiKhoan1->MatKhau ="12345678";
        $taiKhoan1->NgaySinh = "2001/05/26";
        $taiKhoan1->ID_Loai_Tai_Khoan = 2;
        $taiKhoan1->TrangThai = 1;

        $taiKhoan2 = new TaiKhoan();
        $taiKhoan2->Ten = "Trần Đức Anh Tú";
        $taiKhoan2->AVT = "avt_mac_dinh.png";        
        $taiKhoan2->Email = "Tu@gmail.com";
        $taiKhoan2->DiaChi = "TP Vũng Tàu";
        $taiKhoan2->MatKhau ="12345678";
        $taiKhoan2->NgaySinh = "2001/04/27";
        $taiKhoan2->ID_Loai_Tai_Khoan = 2;
        $taiKhoan2->TrangThai = 1;

        $taiKhoan3 = new TaiKhoan();
        $taiKhoan3->Ten = "Nguyễn Huy";
        $taiKhoan3->AVT = "avt_mac_dinh.png";        
        $taiKhoan3->Email = "Huy@gmail.com";
        $taiKhoan3->DiaChi = "TP Bà Rịa";
        $taiKhoan3->MatKhau ="12345678";
        $taiKhoan3->NgaySinh = "2001/08/17";
        $taiKhoan3->ID_Loai_Tai_Khoan = 2;
        $taiKhoan3->TrangThai = 1;

        $taiKhoan4 = new TaiKhoan();
        $taiKhoan4->Ten = "Tống Thành Tài";
        $taiKhoan4->AVT = "avt_mac_dinh.png";        
        $taiKhoan4->Email = "Tai@gmail.com";
        $taiKhoan4->DiaChi = "TP Bến Tre";
        $taiKhoan4->MatKhau ="12345678";
        $taiKhoan4->NgaySinh = "2001/05/27";
        $taiKhoan4->ID_Loai_Tai_Khoan = 2;
        $taiKhoan4->TrangThai = 1; 

        $taiKhoan5 = new TaiKhoan();
        $taiKhoan5->Ten = "Trần Thanh Toàn";
        $taiKhoan5->AVT = "avt_mac_dinh.png";        
        $taiKhoan5->Email = "Toan@gmail.com";
        $taiKhoan5->DiaChi = "TP Đà Nẵng";
        $taiKhoan5->MatKhau ="12345678";
        $taiKhoan5->NgaySinh = "2001/09/08";
        $taiKhoan5->ID_Loai_Tai_Khoan = 2;
        $taiKhoan5->TrangThai = 1; 

        //Thêm tài khoản giáo viên
        $taiKhoan6 = new TaiKhoan();
        $taiKhoan6->Ten = "Trần Thanh Tuấn";
        $taiKhoan6->AVT = "avt_mac_dinh.png";        
        $taiKhoan6->Email = "Tuan@gmail.com";
        $taiKhoan6->DiaChi = "TP HN";
        $taiKhoan6->MatKhau ="12345678";
        $taiKhoan6->NgaySinh = "1990/01/01";
        $taiKhoan6->ID_Loai_Tai_Khoan = 3;
        $taiKhoan6->TrangThai = 1;

        $taiKhoan7 = new TaiKhoan();
        $taiKhoan7->Ten = "Lữ Cao Tiến";
        $taiKhoan7->AVT = "avt_mac_dinh.png";        
        $taiKhoan7->Email = "Tien@gmail.com";
        $taiKhoan7->DiaChi = "TP HN";
        $taiKhoan7->MatKhau ="12345678";
        $taiKhoan7->NgaySinh = "1990/01/01";
        $taiKhoan7->ID_Loai_Tai_Khoan = 3;
        $taiKhoan7->TrangThai = 1;

        $taiKhoan8 = new TaiKhoan();
        $taiKhoan8->Ten = "Phù Khắc Anh";
        $taiKhoan8->AVT = "avt_mac_dinh.png";        
        $taiKhoan8->Email = "Anh@gmail.com";
        $taiKhoan8->DiaChi = "TP Vũng Tàu";
        $taiKhoan8->MatKhau ="12345678";
        $taiKhoan8->NgaySinh = "1990/01/01";
        $taiKhoan8->ID_Loai_Tai_Khoan = 3;
        $taiKhoan8->TrangThai = 1;

        $taiKhoan9 = new TaiKhoan();
        $taiKhoan9->Ten = "Nguyễn Minh Triết";
        $taiKhoan9->AVT = "avt_mac_dinh.png";        
        $taiKhoan9->Email = "Triet@gmail.com";
        $taiKhoan9->DiaChi = "TP Bến Tre";
        $taiKhoan9->MatKhau ="12345678";
        $taiKhoan9->NgaySinh = "1990/01/01";
        $taiKhoan9->ID_Loai_Tai_Khoan = 3;
        $taiKhoan9->TrangThai = 1;

        $taiKhoan10 = new TaiKhoan();
        $taiKhoan10->Ten = "Nguyễn Minh HIền";
        $taiKhoan10->AVT = "avt_mac_dinh.png";        
        $taiKhoan10->Email = "Hiền@gmail.com";
        $taiKhoan10->DiaChi = "TP Bến Tre";
        $taiKhoan10->MatKhau ="12345678";
        $taiKhoan10->NgaySinh = "1990/01/01";
        $taiKhoan10->ID_Loai_Tai_Khoan = 3;
        $taiKhoan10->TrangThai = 1;
    }
}
