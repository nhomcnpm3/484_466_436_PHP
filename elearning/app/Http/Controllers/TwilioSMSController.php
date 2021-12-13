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
    public function getNewpassword(){
        if(empty(session('checkforgot'))){
            return redirect()->route('forgotpassword');
        }
        return view('new_password');
    }
    public function getForgotpassword(){
        if (Auth::check()) {
            return redirect()->route('home');

            }
        return view('forgot_password');
    }
    public function index(Request $request) {  
        if(!empty(session('phone'))){
           session()->forget('phone');
        }
        $pos = strpos($request->email, "@");
        if($pos !== false){
            require base_path("vendor/autoload.php");
            $mail = new PHPMailer(true);  
            // Passing `true` enables exceptions
            
            try {
                $taikhoan= TaiKhoan::where('Email',"$request->email")->first();
                if(empty($taikhoan)){
                    return back()->with("failed", "Your email does not exist");
                }
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
                $taikhoan->token=$token;
                $taikhoan->save();
                return back()->with('success', 'please check your email');
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
            $taikhoan= TaiKhoan::where('Phone',$request->email)->first();
                if(empty($taikhoan)){
                    return back()->with("failed", "Your PHONE does not exist");
                }
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
      
                // $client = new Client($account_sid, $auth_token);
                // $client->messages->create("$request->email", [
                //     'from' => $twilio_number, 
                //     'body' => $message]);
                session(['otp' => $otp]);
                session()->put('phone', $request->email);
                return redirect()->route('forgotpassword');
      
            } catch (Exception $e) {
                dd("Error: ". $e->getMessage());
            }
        }
        
    }
    public function Updatephone(Request $request){
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
  
            // $client = new Client($account_sid, $auth_token);
            // $client->messages->create("$request->email", [
            //     'from' => $twilio_number, 
            //     'body' => $message]);
            session(['otp1' => $otp]);
            session()->put('updatephone', $request->phone);
            return redirect()->route('reset_profile_phone');
  
        } catch (Exception $e) {
            dd("Error: ". $e->getMessage());
        }
    }
    public function replyOTP(){
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
      
                // $client = new Client($account_sid, $auth_token);
                // $client->messages->create(session('phone'), [
                //     'from' => $twilio_number, 
                //     'body' => $message]);
                    session(['otp' => $otp]);
                return redirect()->route('forgotpassword');
      
            } catch (Exception $e) {
                dd("Error: ". $e->getMessage());
            }
    }
    public function replyupdateOTP(){
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
      
                // $client = new Client($account_sid, $auth_token);
                // $client->messages->create(session('phone'), [
                //     'from' => $twilio_number, 
                //     'body' => $message]);
                    session(['otp1' => $otp]);
                return redirect()->route('reset_profile_phone');
      
            } catch (Exception $e) {
                dd("Error: ". $e->getMessage());
            }
    }
    public function Checkotp(Request $request){
        if(session('otp')== $request->otp){
            session()->put('checkforgot', 'true');
            session()->forget('otp');
            return redirect()->route('newpass');
        }
    }
    public function Checkupdateotp(Request $request){
        if(session('otp1')== $request->otp)
        {
            $taikhoan = TaiKhoan::find(auth()->user()->id);
            session()->forget('otp1');
            $taikhoan->phone= session('updatephone');
            $taikhoan->save();
            return back()->with('success', 'Update your phone success');
        }
    }

    public function checkemail(Request $request){
        session()->put('checkforgot', 'true');
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
        $taikhoan->password=Hash::make($request->repassword);
        $taikhoan->token=null;
        $taikhoan->save();
        session()->forget('phone');
        session()->forget('checkforgot');
        if (Auth::attempt(['Email' => $taikhoan->Email, 'password' =>
        $request->repassword])) {
            return redirect()->route('home');
        } else {
            echo("fail");
        }
    }
    
    
}