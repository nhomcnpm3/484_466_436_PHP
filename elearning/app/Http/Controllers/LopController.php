<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;;

use App\Models\lop;
use App\Models\taikhoan;
use App\Models\chitietlop;
use App\Models\gianhaplop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PHPMailer\PHPMailer\PHPMailer;
use Exception;


class LopController extends Controller
{
    public function showclass()
    {
        if ((Auth::check())) {
            $classlist = taikhoan::find(auth()->user()->id);
            return view('user/class/classlist', compact('classlist'))->with('order', '1');
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
        $lop->ID_TaiKhoan = auth()->user()->id;
        $lop->MaLop = Str::random(7);
        $token = openssl_random_pseudo_bytes(16);
        $token = bin2hex($token);
        $lop->token = $token;
        $lop->save();
        $chitietlop = new chitietlop;
        $chitietlop->ID_TaiKhoan = auth()->user()->id;
        $chitietlop->ID_Lop = $lop->id;
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
            $chitietlop->TrangThai = 1;
            $chitietlop->save();
            return redirect()->route('classlist');
        }
        return redirect()->route('classlist');
    }
    public function classdetail($id)
    {
        $classdetail = lop::find($id);
        return view('user/class/class_detail', compact('classdetail'));
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
            $mail->Username = 'tranducanhtu.backend@gmail.com';   //  sender username
            $mail->Password = 'igxiypzaeanxhmbt';       // sender password
            $mail->SMTPSecure = 'ssl';                  // encryption - ssl/tls
            $mail->Port = 465;                          // port - 587/465
            $mail->Subject = "join class";
            $mail->setFrom('tranducanhtu.backend@gmail.com', 'tranducanhtu.developer');
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
                            $mail->MsgHTML("<p>$request->content</p><a href='http://127.0.0.1:8000/student_join_class?token={$token}'>click here</a>");
                            $mail->send();
                            $GiaNhapLop->save();
                            $success .= "{$email} - ";
                        } else {
                            $checkgianhap->Token_mail = $token;
                            $mail->addAddress($email);
                            $mail->MsgHTML("<p>$request->content</p><a href='http://127.0.0.1:8000/student_join_class?token={$token}'>click here</a>");
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
            if ($checkgianhap->ID_TaiKhoan == auth()->user()->id) {
                $checkgianhap->TrangThaiTruyCap = 1;
                $checkgianhap->Token_mail = "";
                $chitietlop = new chitietlop;
                $chitietlop->ID_TaiKhoan = $checkgianhap->ID_TaiKhoan;
                $chitietlop->ID_Lop = $checkgianhap->ID_Lop;
                $chitietlop->TrangThai = 1;
                $chitietlop->save();
                $checkgianhap->save();
                return redirect()->route('classdetail', ['id' => $checkgianhap->ID_TaiKhoan]);
            } else {
                return "Vui lòng đăng nhập với Email là: <b>$taikhoan->Email</b> <br/> <a href='home'>Đăng nhập</a>";
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
                    $chitietlop->TrangThai = 1;
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
        return view('user/class/everyone', compact('classdetail'));
    }
    public function showpersonalclass(Request $request)
    {
        if ((Auth::check())) {
            if ($request->order == 1) {
                $classlist = taikhoan::find(auth()->user()->id);
                return view('user/class/classlist', compact('classlist'))->with('order', '1');
            } else {
                $classlist = taikhoan::find(auth()->user()->id);
                return view('user/class/classlist', compact('classlist'))->with('order', '2');
            }
        }
        return redirect()->route('home');
    }
}
