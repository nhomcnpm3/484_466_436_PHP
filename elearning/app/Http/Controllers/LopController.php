<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;;

use App\Models\lop;
use App\Models\taikhoan;
use App\Models\chitietlop;
use App\Models\gianhaplop;
use App\Models\BinhLuan;
use App\Models\baidang;
use App\Models\tepbaidang;
use App\Models\tepbainop;
use App\Models\tepbinhluan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PHPMailer\PHPMailer\PHPMailer;
use Exception;
use Illuminate\Support\Facades\Storage;
use Tepbaidang as GlobalTepbaidang;

class LopController extends Controller
{
    public function showclass()
    {
        if ((Auth::check())) {
            $classlist = taikhoan::find(auth()->user()->id);
            return view('user/class/classlist', compact('classlist'))->with('order', '0');
        }
        return redirect()->route('home');
    }
    public function showCreateClass()
    {
        return view('user/class/create_class');
    }
    public function CreateClass(Request $request)
    {
        $lop = new lop;
        $lop->TenLop = $request->classname;
        $lop->MoTa = $request->description;
        $time = time();
        $file = $request->file('logo')->getClientOriginalName();
        $new_img_name = $time . "-" . $file;
        $uploadLogo = $request->logo;
        $uploadLogo->storeAs('extra-images', $new_img_name);
        $lop->Logo = $new_img_name;
        $time = time();
        $file = $request->file('banner')->getClientOriginalName();
        $new_img_name = $time . "-" . $file;
        $uploadBanner = $request->banner;
        $uploadBanner->storeAs('extra-images', $new_img_name);
        $lop->Banner = $new_img_name;
        $lop->MauChuDe = $request->favcolor;
        $lop->trangthai = 1;
        $lop->ID_TaiKhoan = auth()->user()->id;
        $lop->MaLop = Str::random(7);
        $token = openssl_random_pseudo_bytes(16);
        $token = bin2hex($token);
        $lop->token = $token;
        $lop->save();
        $chitietlop = new chitietlop;
        $chitietlop->ID_TaiKhoan = auth()->user()->id;
        $chitietlop->ID_Lop = $lop->id;
        $chitietlop->LoaiGiaNhap = 1;
        $chitietlop->TrangThai = 1;
        $chitietlop->save();
        return redirect()->route('classlist');
    }
    public function joinclass(Request $request)
    {

        $lop = lop::where("MaLop", $request->joinclass)->first();
        if (empty($lop)) {
            return redirect()->route('classlist');
        }
        $chitietlop = chitietlop::where([["ID_TaiKhoan", auth()->user()->id], ['ID_Lop', $lop->id]])->first();
        if (empty($chitietlop)) {
            $chitietlop = new chitietlop;
            $chitietlop->ID_TaiKhoan = auth()->user()->id;
            $chitietlop->ID_Lop = $lop->id;
            if ($lop->trangthai == 1) {
                $chitietlop->TrangThai = 1;
            } elseif ($lop->trangthai == 2) {
                $chitietlop->TrangThai = 2;
            }
            $chitietlop->LoaiGiaNhap = 2;
            $chitietlop->save();
            return redirect()->route('classlist');
        }
        return redirect()->route('classlist');
    }
    public function classdetail($id)
    {
        $taikhoan = taikhoan::find(auth()->user()->id);
        $classdetail = lop::find($id);
        $dsBaiDang = baidang::where('ID_Lop', $id)->get();
        $checkgetlink = chitietlop::where([['ID_TaiKhoan', auth()->user()->id], ['ID_Lop', $id]])->first();
        if (!empty($checkgetlink)) {
            return view('user/class/class_detail', compact('classdetail', 'dsBaiDang', 'taikhoan'));
        }
        return redirect()->route('404');
    }
    public function addstudent($id)
    {
        $class = lop::find($id);
        return view('user/class/add_student', compact('class'));
    }
    public function add_student(Request $request, $id)
    {
        $email_array = explode(",", $request->email);
        require base_path("vendor/autoload.php");
        $mail = new PHPMailer(true);
        try {

            // Email server settings
            $mail->SMTPDebug = 0;
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            //  smtp host
            $mail->SMTPAuth = true;
            $mail->Username = 'tranducanhtu.frontend@gmail.com';   //  sender username
            $mail->Password = '01697223552aA';       // sender password
            $mail->SMTPSecure = 'ssl';                  // encryption - ssl/tls
            $mail->Port = 465;                          // port - 587/465
            $mail->Subject = "join class";
            $mail->setFrom('tranducanhtu.frontend@gmail.com', 'tranducanhtu.developer');
            $error = "";
            $exist = "";
            $success = "";
            foreach ($email_array as $email) {
                $token = openssl_random_pseudo_bytes(16);
                $token = bin2hex($token);
                $taikhoan = TaiKhoan::where('Email', $email)->first();
                if (!empty($taikhoan)) {
                    $checkchitietlop = chitietlop::where([['ID_TaiKhoan', $taikhoan->id], ['ID_Lop', $id]])->first();
                    if (empty($checkchitietlop)) {
                        $checkgianhap = gianhaplop::where([['ID_TaiKhoan', $taikhoan->id], ['ID_Lop', $id]])->first();
                        if (empty($checkgianhap)) {
                            $GiaNhapLop = new gianhaplop;
                            $GiaNhapLop->TrangThaiTruyCap = "0";
                            $GiaNhapLop->Token_mail = $token;
                            $GiaNhapLop->ID_TaiKhoan = $taikhoan->id;
                            $GiaNhapLop->ID_Lop = $id;
                            $mail->addAddress($email);
                            $mail->MsgHTML("<p>Xin vui long đăng nhập bằng email: <b>$email</b> trước khi nhân vào:click here.</p> <p>$request->content</p><a href='http://127.0.0.1:8000/classlist/student_join_class?token={$token}'>click here</a>");
                            $mail->send();
                            $GiaNhapLop->save();
                            $success .= "{$email} - ";
                        } else {
                            $checkgianhap->Token_mail = $token;
                            $mail->addAddress($email);
                            $mail->MsgHTML("<p>Xin vui long đăng nhập bằng email: <b>$email</b> trước khi nhân vào:click here.</p> <p>$request->content</p><a href='http://127.0.0.1:8000/classlist/student_join_class?token={$token}'>click here</a>");
                            $mail->send();
                            $checkgianhap->save();
                            $success .= "{$email} - ";
                        }
                    } else {
                        $exist .= "{$email} - ";
                    }
                } else {
                    $error .= "{$email} - ";
                }
            }
            return back()->with("failed1", "{$error}")
                ->with("failed2", "{$exist}")
                ->with("success1", "{$success}");
            if (!$mail->send()) {
                return back()->with("failed", "Email not sent.")->withErrors($mail->ErrorInfo);
            } else {
                return back();
            }
        } catch (Exception $e) {
            return back()->with('error', 'Message could not be sent.');
        }
    }
    public function checktoken(Request $request)
    {
        $token = $request->input('token');
        $checkgianhap = gianhaplop::where('Token_mail', $token)->first();
        if (!empty($checkgianhap)) {
            $taikhoan = taikhoan::where('id', $checkgianhap->ID_TaiKhoan)->first();
            if ((Auth::check())) {
                if ($checkgianhap->ID_TaiKhoan == auth()->user()->id) {
                    $checkgianhap->TrangThaiTruyCap = 1;
                    $checkgianhap->Token_mail = "";
                    $chitietlop = new chitietlop;
                    $chitietlop->ID_TaiKhoan = $checkgianhap->ID_TaiKhoan;
                    $chitietlop->ID_Lop = $checkgianhap->ID_Lop;
                    $chitietlop->TrangThai = 1;
                    $chitietlop->LoaiGiaNhap = 2;
                    $chitietlop->save();
                    $checkgianhap->save();
                    return redirect()->route('classdetail', ['id' => $checkgianhap->ID_Lop]);
                } else {
                    session(['token' => $token]);
                    return "Vui lòng đăng nhập với Email là: <b>$taikhoan->Email</b> <br/> <a href='../'>Đăng nhập</a>";
                }
            } else {
                session(['token' => $token]);
                return "Vui lòng đăng nhập với Email là: <b>$taikhoan->Email</b> <br/> <a href='../'>Đăng nhập</a>";
            }
        } else {
            return redirect()->route('404');
        }
    }
    public function joinlink(Request $request)
    {
        $token = $request->input('token');
        $class = lop::where('token', $token)->first();
        if (!empty($class)) {
            if ((Auth::check())) {
                $checkchitietlop = chitietlop::where([['ID_TaiKhoan', auth()->user()->id], ['ID_Lop', $class->id]])->first();
                if (empty($checkchitietlop)) {
                    $chitietlop = new chitietlop;
                    $chitietlop->ID_TaiKhoan = auth()->user()->id;
                    $chitietlop->ID_Lop = $class->id;
                    if ($class->trangthai == 1) {
                        $chitietlop->TrangThai = 1;
                    } elseif ($class->trangthai == 2) {
                        $chitietlop->TrangThai = 2;
                    }
                    $chitietlop->LoaiGiaNhap = 2;
                    $chitietlop->save();
                    return redirect()->route('classdetail', ['id' => $class->id]);
                }
                return redirect()->route('classlist');
            }
            return "Vui lòng đăng nhập <a href='home'>Đăng nhập</a>";
        }
        return redirect()->route('404');
    }
    public function everyone($id)
    {
        $classdetail = lop::find($id);
        // $waitjoin = chitietlop::where([["ID_Lop",$id], ['TrangThai', 2]])->get(); 
        // dd($waitjoin->TaiKhoan);       
        return view('user/class/everyone', compact('classdetail'));
    }
    public function showpersonalclass(Request $request)
    {
        if ((Auth::check())) {
            if ($request->order == 1) {
                $classlist = taikhoan::find(auth()->user()->id);
                return view('user/class/classlist', compact('classlist'))->with('order', '1');
            } elseif ($request->order == 2) {
                $classlist = taikhoan::find(auth()->user()->id);
                return view('user/class/classlist', compact('classlist'))->with('order', '2');
            } else {
                $classlist = taikhoan::find(auth()->user()->id);
                return view('user/class/classlist', compact('classlist'))->with('order', '0');
            }
        }
        return redirect()->route('home');
    }
    public function showaddlesson($id)
    {
        $taikhoan = taikhoan::find(auth()->user()->id);
        $class = lop::find($id);;
        return view('user/class/add_lesson', compact('taikhoan', 'class'));
    }
    public function addlesson($id, Request $request)
    {
        $baidang = new baidang;
        $baidang->TieuDe = $request->title;
        $baidang->ChiTiet = $request->description;
        $baidang->HanNop = $request->deadline;
        $baidang->TrangThai = $request->status;
        $baidang->ID_TaiKhoan = auth()->user()->id;
        $baidang->ID_Lop = $id;
        $baidang->save();
        if ($request->hasFile('file_upload')) {
            $time = time();
            $file = $request->file('file_upload')->getClientOriginalName();
            $new_file_name = $time . "-" . $file;
            $uploadFile = $request->file_upload;
            $uploadFile->storeAs('filebaidang', $new_file_name);
            $tepbaidang = new tepbaidang;
            $tepbaidang->Url = $new_file_name;
            $tepbaidang->ID_BaiDang = $baidang->id;
            $tepbaidang->save();
        }

        return redirect()->route('classdetail', ['id' => $id]);
    }
    public function autojoinclass($id)
    {
        $StatusClass = lop::find($id);
        if ($StatusClass->trangthai == 1) {
            $StatusClass->trangthai = 2;
        } elseif ($StatusClass->trangthai == 2) {
            $StatusClass->trangthai = 1;
        }
        $StatusClass->save();
        return redirect()->route('everyone', ['id' => $id]);
    }
    public function confirmstudent($id_lop, $id_taikhoan)
    {
        $chitietlop = chitietlop::where([['ID_Lop', $id_lop], ['ID_TaiKhoan', $id_taikhoan]])->first();
        if (empty($chitietlop)) {
            return redirect()->route('home');
        }
        $chitietlop->TrangThai = 1;
        $chitietlop->save();
        return redirect()->route('everyone', ['id' => $id_lop]);
    }
    public function deletestudent($id_lop, $id_taikhoan)
    {
        $chitietlop = chitietlop::where([['ID_Lop', $id_lop], ['ID_TaiKhoan', $id_taikhoan]])->first();
        if (empty($chitietlop)) {
            return redirect()->route('home');
        }
        $chitietlop->delete();
        return redirect()->route('everyone', ['id' => $id_lop]);
    }
    public function showdetaillesson($id)
    {
        $binhluan = BinhLuan::where('ID_BaiDang', $id)->get();
        $lesson = baidang::find($id);
        $taikhoan = taikhoan::find(auth()->user()->id);
        $loaibaidang = $lesson->TrangThai;
        if ($loaibaidang == 1) {
            $view = "Lesson";
        } else if ($loaibaidang == 2) {
            $view = "Exercise";
        } else if ($loaibaidang == 3) {
            $view = "Question";
        }
        $tep = tepbaidang::where('ID_BaiDang',$lesson->id)->first();
        $sizefile = '';
        if (!empty($tep)) {
            $size = Storage::disk('filebaidang')->size($tep->Url);
            $base = log($size, 1024);
            $suffixes = array('', 'Kb', 'Mb', 'Gb', 'Tb');
            $sizefile = round(pow(1024, $base - floor($base)), 2) . ' ' . $suffixes[floor($base)];
            return view('user/class/lesson_detail', compact('taikhoan', 'lesson', 'view', 'tep', 'sizefile', 'binhluan'));
        }
        return view('user/class/lesson_detail', compact('taikhoan', 'lesson', 'view', 'tep', 'sizefile', 'binhluan'));
    }
    public function deletelesson($id)
    {
        $binhluan = BinhLuan::where('ID_BaiDang', $id)->get();
        foreach ($binhluan as $value) {
            $tepbinhluan = tepbinhluan::where('ID_BinhLuan', $value->id)->get();
            foreach ($tepbinhluan as $value1) {
                $value1->delete();
            }
            $value->delete();
        }
        $tepbaidang = tepbaidang::where('ID_BaiDang', $id)->get();
        foreach ($tepbaidang as $value) {
            $value->delete();
        }

        $baidang = baidang::find($id);
        $baidang->delete();

        return back();
    }
    
    public function showupdateClass($id)
    {
        $class = lop::find($id);
        if ($class == null) {
            return redirect()->route('404');
        }
        
        return view('user/class/editclass',compact('class'));
    }
    public function updateclass($id, Request $request)
    {
        $lop = lop::find($id);
        if ($lop == null) {
            return "Không tìm thấy lớp có mã ={$id}";
        }
        $lop->TenLop = $request->tenlop;
        $lop->MoTa = $request->mota;
        if(!empty($request->logo))
        {
            $time = time();
            $file = $request->file('logo')->getClientOriginalName();
            $new_img_name = $time . "-" . $file;
            $uploadLogo = $request->logo;
            $uploadLogo->storeAs('extra-images', $new_img_name);
            $lop->Logo = $new_img_name;
        }
        if(!empty($request->banner)){
            $time = time();
            $file = $request->file('banner')->getClientOriginalName();
            $new_img_name = $time . "-" . $file;
            $uploadBanner = $request->banner;
            $uploadBanner->storeAs('extra-images', $new_img_name);
            $lop->Banner = $new_img_name;
        }
        $lop->MauChuDe = $request->favcolor;
        $lop->save();
        return redirect()->route('classlist', ['id' => $id]);
    }
    public function deleteclass($id, Request $request)
    {
        $lop = lop::find($id);
        $chitiet= chitietlop::where('ID_Lop',$id)->get();
        foreach($chitiet as $vale){
            $vale->delete();

        }
        if ($lop == null) {
            return "Không tìm thấy lớp có id ={$id}";
        }
        $lop->delete();

        $classlist = taikhoan::find(auth()->user()->id);
        return view('user/class/classlist', compact('classlist'))->with('order', '0');    }
}
