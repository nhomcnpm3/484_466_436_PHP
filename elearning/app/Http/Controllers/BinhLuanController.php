<?php

namespace App\Http\Controllers;

use App\Models\BinhLuan;
use App\Models\TepBinhLuan;
use Illuminate\Http\Request;

class BinhLuanController extends Controller
{
    public function createBinhLuan($id, Request $request)
    {
        $binhluan = new BinhLuan();
        if(empty($request->content)){
            $binhluan->NoiDung = "";
        }else{
            $binhluan->NoiDung = $request->content;
        }
        $binhluan->TrangThai = 1;
        $binhluan->ID_TaiKhoan = auth()->user()->id;
        $binhluan->ID_BaiDang = $id;
        
        $uploadFile = $request->attachment;
        $binhluan->save();
        if(!empty($uploadFile)){
        foreach ($uploadFile as $file) {
                $time = time();
                $name = $file->getClientOriginalName();
                $new_file_name = $time . "-" . $name;
                $file->storeAs('filebinhluan', $new_file_name);
                $tepbinluan = new TepBinhLuan();
                $tepbinluan->Url=$new_file_name;
                $tepbinluan->ID_BinhLuan=$binhluan->id;
                $tepbinluan->save();
            }
        }
        return back();
    }
}
