<?php
  
namespace App\Http\Controllers;
use PHPMailer\PHPMailer\PHPMailer;
use Illuminate\Http\Request;
use Exception;
use Twilio\Rest\Client;
use App\Models\TaiKhoan;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class TwilioSMSController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index(Request $request) {        
        $pos = strpos($request->email, "@");
        if($pos){
            require base_path("vendor/autoload.php");
            $mail = new PHPMailer(true);     // Passing `true` enables exceptions
            try {
                $token = openssl_random_pseudo_bytes(16);
                $token = bin2hex($token);
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
                $mail->Subject = "Test";
                $mail->setFrom('tranducanhtu.backend@gmail.com', 'tranducanhtu.developer');
                $mail->addAddress($request->email);
                $mail->MsgHTML("<a href='http://127.0.0.1:8000/email?token={$token}'>click here</a>");
                $mail->send();
                $taikhoan= TaiKhoan::where('Email',$request->email)->first();
                $taikhoan->token=$token;
                $taikhoan->save();
                return redirect()->route('forgotpassword');
                if( !$mail->send() ) {
                    return back()->with("failed", "Email not sent.")->withErrors($mail->ErrorInfo);
                }            
                else {
                    return back();
                }
    
            } catch (Exception $e) {
                 return back()->with('error','Message could not be sent.');
            }
        }else{
            $generator = "1357902468";
            $otp = "";
            for ($i = 1; $i <= 6; $i++) {
                $otp .= substr($generator, (rand()%(strlen($generator))), 1);
            }        
            $message = "otp $otp";
            try {
                $account_sid = getenv("TWILIO_SID");
                $auth_token = getenv("TWILIO_TOKEN");
                $twilio_number = getenv("TWILIO_FROM");
      
                $client = new Client($account_sid, $auth_token);
                $client->messages->create("$request->email", [
                    'from' => $twilio_number, 
                    'body' => $message]);
                    session()->put('otp', $otp);
                    session()->put('phone', $request->email);
                return redirect()->route('forgotpassword');
      
            } catch (Exception $e) {
                dd("Error: ". $e->getMessage());
            }
        }
        
    }
    public function Checkotp(Request $request){
        if(session('otp')== $request->otp){
            session()->forget('otp');
            return redirect()->route('newpass');
        }
    }
    public function checkemail(Request $request){
        $token=$request->input('token');
        $taikhoan= TaiKhoan::where('token',$token)->first();
        if(empty($taikhoan)){
            return redirect()->route('forgotpassword');
        }else{
            session()->put('phone', $taikhoan->phone);
            return redirect()->route('newpass');
        }
        return redirect()->route('home');
    }
    public function newpass(Request $request){
        $taikhoan= TaiKhoan::where('phone',session('phone'))->first();
        $taikhoan->password=Hash::make($request->rpass);
        $taikhoan->token=null;
        $taikhoan->save();
        session()->forget('phone');
        if (Auth::attempt(['Email' => $taikhoan->Email, 'password' =>
        $request->rpass])) {
            return redirect()->route('home');
        } else {
            echo("fail");
        }
    }
    
    
}