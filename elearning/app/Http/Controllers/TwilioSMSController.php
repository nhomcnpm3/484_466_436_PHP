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
        return view('user/new_password');
    }
    public function getForgotpassword(){
        if (Auth::check()) {
            return redirect()->route('home');

            }
        return view('user/forgot_password');
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
                $mail->MsgHTML('<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional //EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
                <html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
                <head>
                <!--[if gte mso 9]>
                <xml>
                  <o:OfficeDocumentSettings>
                    <o:AllowPNG/>
                    <o:PixelsPerInch>96</o:PixelsPerInch>
                  </o:OfficeDocumentSettings>
                </xml>
                <![endif]-->
                  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
                  <meta name="viewport" content="width=device-width, initial-scale=1.0">
                  <meta name="x-apple-disable-message-reformatting">
                  <!--[if !mso]><!--><meta http-equiv="X-UA-Compatible" content="IE=edge"><!--<![endif]-->
                  <title></title>
                  
                    <style type="text/css">
                      table, td { color: #000000; } a { color: #0000ee; text-decoration: underline; }
                @media only screen and (min-width: 620px) {
                  .u-row {
                    width: 600px !important;
                  }
                  .u-row .u-col {
                    vertical-align: top;
                  }
                
                  .u-row .u-col-100 {
                    width: 600px !important;
                  }
                
                }
                
                @media (max-width: 620px) {
                  .u-row-container {
                    max-width: 100% !important;
                    padding-left: 0px !important;
                    padding-right: 0px !important;
                  }
                  .u-row .u-col {
                    min-width: 320px !important;
                    max-width: 100% !important;
                    display: block !important;
                  }
                  .u-row {
                    width: calc(100% - 40px) !important;
                  }
                  .u-col {
                    width: 100% !important;
                  }
                  .u-col > div {
                    margin: 0 auto;
                  }
                }
                body {
                  margin: 0;
                  padding: 0;
                }
                
                table,
                tr,
                td {
                  vertical-align: top;
                  border-collapse: collapse;
                }
                
                p {
                  margin: 0;
                }
                
                .ie-container table,
                .mso-container table {
                  table-layout: fixed;
                }
                
                * {
                  line-height: inherit;
                }
                
               
                @media (max-width: 480px) {
                  .hide-mobile {
                    max-height: 0px;
                    overflow: hidden;
                    display: none !important;
                  }
                
                }
                    </style>
                  
                  
                
                <!--[if !mso]><!--><link href="https://fonts.googleapis.com/css?family=Lato:400,700&display=swap" rel="stylesheet" type="text/css"><link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&display=swap" rel="stylesheet" type="text/css"><link href="https://fonts.googleapis.com/css?family=Raleway:400,700&display=swap" rel="stylesheet" type="text/css"><!--<![endif]-->
                
                </head>
                
                <body class="clean-body u_body" style="margin: 0;padding: 0;-webkit-text-size-adjust: 100%;background-color: #efefef;color: #000000">
                  <!--[if IE]><div class="ie-container"><![endif]-->
                  <!--[if mso]><div class="mso-container"><![endif]-->
                  <table style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;min-width: 320px;Margin: 0 auto;background-color: #efefef;width:100%" cellpadding="0" cellspacing="0">
                  <tbody>
                  <tr style="vertical-align: top">
                    <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top">
                    <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td align="center" style="background-color: #efefef;"><![endif]-->
                    
                
                <div class="u-row-container" style="padding: 0px;background-color: transparent">
                  <div class="u-row" style="Margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: #0000ff;">
                    <div style="border-collapse: collapse;display: table;width: 100%;background-color: transparent;">
                      <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding: 0px;background-color: transparent;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:600px;"><tr style="background-color: #0000ff;"><![endif]-->
                      
                <!--[if (mso)|(IE)]><td align="center" width="600" style="width: 600px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;" valign="top"><![endif]-->
                <div class="u-col u-col-100" style="max-width: 320px;min-width: 600px;display: table-cell;vertical-align: top;">
                  <div style="width: 100% !important;">
                  <!--[if (!mso)&(!IE)]><!--><div style="padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;"><!--<![endif]-->
                  
                <table style=",sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                  <tbody>
                    <tr>
                      <td style="overflow-wrap:break-word;word-break:break-word;padding:25px 10px 13px;,sans-serif;" align="left">
                        
                <table width="100%" cellpadding="0" cellspacing="0" border="0">
                  <tr>
                    <td style="padding-right: 0px;padding-left: 0px;" align="center">
                                            
                    </td>
                  </tr>
                </table>
                
                      </td>
                    </tr>
                  </tbody>
                </table>
                
                  <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
                  </div>
                </div>
                <!--[if (mso)|(IE)]></td><![endif]-->
                      <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
                    </div>
                  </div>
                </div>
                
                
                
                <div class="u-row-container" style="padding: 0px;background-color: transparent">
                  <div class="u-row" style="Margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: #0000ff;">
                    <div style="border-collapse: collapse;display: table;width: 100%;background-repeat: no-repeat;background-position: center top;background-color: transparent;">
                      
                <div class="u-col u-col-100" style="max-width: 320px;min-width: 600px;display: table-cell;vertical-align: top;">
                  <div style="width: 100% !important;">
                  
                <table style=",sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                  <tbody>
                    <tr>
                      <td style="overflow-wrap:break-word;word-break:break-word;padding:10px 0px 20px;,sans-serif;" align="left">
                        
                  <table height="0px" align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;border-top: 1px dotted #ffe14f;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%">
                    <tbody>
                      <tr style="vertical-align: top">
                        <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;font-size: 0px;line-height: 0px;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%">
                          <span>&#160;</span>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                
                      </td>
                    </tr>
                  </tbody>
                </table>
                
                <table style=",sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                  <tbody>
                    <tr>
                      <td style="overflow-wrap:break-word;word-break:break-word;padding:20px 10px 30px;,sans-serif;" align="left">
                        
                  <div style="color: #ffffff; line-height: 150%; text-align: left; word-wrap: break-word;">
                    <p style="text-align: center; font-size: 14px; line-height: 150%;"><span style="font-size: 48px; line-height: 72px;"><strong><span style="line-height: 72px; color: #ffffff; font-family: Raleway, sans-serif; font-size: 48px;">Welcome To </span></strong></span></p>
                <p style="text-align: center; font-size: 14px; line-height: 150%;"><span style="font-size: 32px; line-height: 48px; color: #ffe14f; font-family: Raleway, sans-serif;">E-Learning</span></p>
                  </div>
                
                      </td>
                    </tr>
                  </tbody>
                </table>
                
                <table style=",sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                  <tbody>
                    <tr>
                      <td style="overflow-wrap:break-word;word-break:break-word;padding:10px;,sans-serif;" align="left">
                        
                <div align="center">
                  <!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0" style="border-spacing: 0; border-collapse: collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;,sans-serif;"><tr><td style=",sans-serif;" align="center"><v:roundrect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="" style="height:41px; v-text-anchor:middle; width:184px;" arcsize="10%" strokecolor="#ffffff" strokeweight="1px" fillcolor="#0000ff"><w:anchorlock/><center style="color:#ffffff;,sans-serif;"><![endif]-->
                    <a href="http://127.0.0.1:8000/email?token='.$token.'" target="_blank" style="box-sizing: border-box;display: inline-block;,sans-serif;text-decoration: none;-webkit-text-size-adjust: none;text-align: center;color: #ffffff; background-color: #0000ff; border-radius: 4px;-webkit-border-radius: 4px; -moz-border-radius: 4px; width:auto; max-width:100%; overflow-wrap: break-word; word-break: break-word; word-wrap:break-word; mso-border-alt: none;border-top-color: #ffffff; border-top-style: solid; border-top-width: 1px; border-left-color: #ffffff; border-left-style: solid; border-left-width: 1px; border-right-color: #ffffff; border-right-style: solid; border-right-width: 1px; border-bottom-color: #ffffff; border-bottom-style: solid; border-bottom-width: 1px;">
                      <span style="display:block;padding:10px 20px;line-height:120%;"><span style=" sans-serif; font-size: 18px; line-height: 21.6px;"><strong><span style="line-height: 21.6px; font-size: 18px;Color:#ffe14f">C L I C K&nbsp; &nbsp;H E R E</span></strong></span></span>
                    </a>
                  <!--[if mso]></center></v:roundrect></td></tr></table><![endif]-->
                </div>
                
                      </td>
                    </tr>
                  </tbody>
                </table>
                
                <table class="hide-mobile" style=",sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                  <tbody>
                    <tr>
                      <td style="overflow-wrap:break-word;word-break:break-word;padding:100px;,sans-serif;" align="left">
                        
                  <table height="0px" align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;border-top: 0px solid #BBBBBB;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%">
                    <tbody>
                      <tr style="vertical-align: top">
                        <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;font-size: 0px;line-height: 0px;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%">
                          <span>&#160;</span>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                
                      </td>
                    </tr>
                  </tbody>
                </table>
                
                <table style=",sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                  <tbody>
                    <tr>
                      <td style="overflow-wrap:break-word;word-break:break-word;padding:40px;,sans-serif;" align="left">
                        
                  <table height="0px" align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;border-top: 0px solid #BBBBBB;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%">
                    <tbody>
                      <tr style="vertical-align: top">
                        <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;font-size: 0px;line-height: 0px;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%">
                          <span>&#160;</span>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                
                      </td>
                    </tr>
                  </tbody>
                </table>
                
                  <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
                  </div>
                </div>
                <!--[if (mso)|(IE)]></td><![endif]-->
                      <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
                    </div>
                  </div>
                </div>
                
                
                
                <div class="u-row-container" style="padding: 0px;background-color: transparent">
                  <div class="u-row" style="Margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: #ffffff;">
                    <div style="border-collapse: collapse;display: table;width: 100%;background-color: transparent;">
                      <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding: 0px;background-color: transparent;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:600px;"><tr style="background-color: #ffffff;"><![endif]-->
                      
                <!--[if (mso)|(IE)]><td align="center" width="600" style="width: 600px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;" valign="top"><![endif]-->
                <div class="u-col u-col-100" style="max-width: 320px;min-width: 600px;display: table-cell;vertical-align: top;">
                  <div style="width: 100% !important;">
                  <!--[if (!mso)&(!IE)]><!--><div style="padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;"><!--<![endif]-->
                  
                <table style=",sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                  <tbody>
                    <tr>
                      <td style="overflow-wrap:break-word;word-break:break-word;padding:10px;,sans-serif;" align="left">
                        
                <div align="center">
                  <div style="display: table; max-width:207px;">
                  <!--[if (mso)|(IE)]><table width="207" cellpadding="0" cellspacing="0" border="0"><tr><td style="border-collapse:collapse;" align="center"><table width="100%" cellpadding="0" cellspacing="0" border="0" style="border-collapse:collapse; mso-table-lspace: 0pt;mso-table-rspace: 0pt; width:207px;"><tr><![endif]-->
                  
                    
                    <!--[if (mso)|(IE)]><td width="32" style="width:32px; padding-right: 20px;" valign="top"><![endif]-->
                    <table align="left" border="0" cellspacing="0" cellpadding="0" width="32" height="32" style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;margin-right: 20px">
                      <tbody><tr style="vertical-align: top"><td align="left" valign="middle" style="word-break: break-word;border-collapse: collapse !important;vertical-align: top">
                       
                      </td></tr>
                    </tbody></table>
                    <!--[if (mso)|(IE)]></td><![endif]-->
                    
                    <!--[if (mso)|(IE)]><td width="32" style="width:32px; padding-right: 20px;" valign="top"><![endif]-->
                    <table align="left" border="0" cellspacing="0" cellpadding="0" width="32" height="32" style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;margin-right: 20px">
                      <tbody><tr style="vertical-align: top"><td align="left" valign="middle" style="word-break: break-word;border-collapse: collapse !important;vertical-align: top">
                       
                      </td></tr>
                    </tbody></table>
                    <!--[if (mso)|(IE)]></td><![endif]-->
                    
                    <!--[if (mso)|(IE)]><td width="32" style="width:32px; padding-right: 20px;" valign="top"><![endif]-->
                    <table align="left" border="0" cellspacing="0" cellpadding="0" width="32" height="32" style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;margin-right: 20px">
                      <tbody><tr style="vertical-align: top"><td align="left" valign="middle" style="word-break: break-word;border-collapse: collapse !important;vertical-align: top">
                      
                      </td></tr>
                    </tbody></table>
                    <!--[if (mso)|(IE)]></td><![endif]-->
                    
                    <!--[if (mso)|(IE)]><td width="32" style="width:32px; padding-right: 0px;" valign="top"><![endif]-->
                    <table align="left" border="0" cellspacing="0" cellpadding="0" width="32" height="32" style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;margin-right: 0px">
                      <tbody><tr style="vertical-align: top"><td align="left" valign="middle" style="word-break: break-word;border-collapse: collapse !important;vertical-align: top">
                       
                      </td></tr>
                    </tbody></table>                    
                    
                  </div>
                </div>
                
                      </td>
                    </tr>
                  </tbody>
                </table>
                
                <table style=",sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                  <tbody>
                    <tr>
                      <td style="overflow-wrap:break-word;word-break:break-word;padding:10px;,sans-serif;" align="left">
                        
                <div class="menu" style="text-align:center">
                <!--[if (mso)|(IE)]><table role="presentation" border="0" cellpadding="0" cellspacing="0" align="center"><tr><![endif]-->
                
                  <!--[if (mso)|(IE)]><td style="padding:5px 10px"><![endif]-->
                  
                  <span style="padding:5px 10px;display:inline-block;color:#413d45;font-size:14px">
                    How it works
                  </span>
                  
                  <!--[if (mso)|(IE)]></td><![endif]-->
                  
                    <!--[if (mso)|(IE)]><td style="padding:5px 10px"><![endif]-->
                    <span style="padding:5px 10px;display:inline-block;color:#413d45;font-size:14px" class="hide-mobile">
                      |
                    </span>
                    <!--[if (mso)|(IE)]></td><![endif]-->
                  
                
                  <!--[if (mso)|(IE)]><td style="padding:5px 10px"><![endif]-->
                  
                  <span style="padding:5px 10px;display:inline-block;color:#413d45;font-size:14px">
                    FAQs
                  </span>
                  
                  <!--[if (mso)|(IE)]></td><![endif]-->
                  
                    <!--[if (mso)|(IE)]><td style="padding:5px 10px"><![endif]-->
                    <span style="padding:5px 10px;display:inline-block;color:#413d45;font-size:14px" class="hide-mobile">
                      |
                    </span>
                    <!--[if (mso)|(IE)]></td><![endif]-->
                  
                
                  <!--[if (mso)|(IE)]><td style="padding:5px 10px"><![endif]-->
                  
                  <span style="padding:5px 10px;display:inline-block;color:#413d45;font-size:14px">
                     T&Cs
                  </span>
                  
                  <!--[if (mso)|(IE)]></td><![endif]-->
                  
                    <!--[if (mso)|(IE)]><td style="padding:5px 10px"><![endif]-->
                    <span style="padding:5px 10px;display:inline-block;color:#413d45;font-size:14px" class="hide-mobile">
                      |
                    </span>
                    <!--[if (mso)|(IE)]></td><![endif]-->
                  
                
                  <!--[if (mso)|(IE)]><td style="padding:5px 10px"><![endif]-->
                  
                  <span style="padding:5px 10px;display:inline-block;color:#413d45;font-size:14px">
                    Subscribe 
                  </span>
                  
                  <!--[if (mso)|(IE)]></td><![endif]-->
                  
                
                <!--[if (mso)|(IE)]></tr></table><![endif]-->
                </div>
                
                      </td>
                    </tr>
                  </tbody>
                </table>
                
                <table style=",sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                  <tbody>
                    <tr>
                      <td style="overflow-wrap:break-word;word-break:break-word;padding:10px;,sans-serif;" align="left">
                        
                  <div style="color: #7e7e81; line-height: 150%; text-align: center; word-wrap: break-word;">
                    <p style="font-size: 14px; line-height: 150%;"><span style="font-size: 12px; line-height: 18px;">You have received this email as a registered user of healthcare.com</span></p>
                <p style="font-size: 14px; line-height: 150%;"><span style="font-size: 12px; line-height: 18px;"> You can <strong><span style="text-decoration: underline; font-size: 12px; line-height: 18px; color: #66636a;">unsubscribe </span></strong>from these emails here (Dont worry, we wont take it personally).</span></p>
                <p style="font-size: 14px; line-height: 150%;"><span style="font-size: 12px; line-height: 18px;">4321 Area Ave.&nbsp; I&nbsp; North town CA 2345&nbsp; I&nbsp; Country Name. </span></p>
                <p style="font-size: 14px; line-height: 150%;"><span style="font-size: 12px; line-height: 18px;">Company Number: 07094561</span></p>
                <p style="font-size: 14px; line-height: 150%;"><span style="font-size: 12px; line-height: 18px;">&copy; Healthcare. Inc. </span></p>
                  </div>
                
                      </td>
                    </tr>
                  </tbody>
                </table>
                
                  <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
                  </div>
                </div>
                <!--[if (mso)|(IE)]></td><![endif]-->
                      <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
                    </div>
                  </div>
                </div>
                
                
                    <!--[if (mso)|(IE)]></td></tr></table><![endif]-->
                    </td>
                  </tr>
                  </tbody>
                  </table>
                  <!--[if mso]></div><![endif]-->
                  <!--[if IE]></div><![endif]-->
                </body>
                
                </html>');
                
                
                
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
                $account_sid = "AC645a3bb8638db84c480cc12ece57555f";
                $auth_token = "39e5d9877f046920a89989b2504b9a0d";
                $twilio_number = "+18788796928";
                $client = new Client($account_sid, $auth_token);
                $client->messages->create("$request->email", [
                    'from' => $twilio_number, 
                    'body' => $message]);
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
            $account_sid = "AC645a3bb8638db84c480cc12ece57555f";
                $auth_token = "39e5d9877f046920a89989b2504b9a0d";
                $twilio_number = "+18788796928";
            $client = new Client($account_sid, $auth_token);
            $client->messages->create("$request->email", [
                'from' => $twilio_number, 
                'body' => $message]);
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
                $account_sid = "AC645a3bb8638db84c480cc12ece57555f";
                $auth_token = "39e5d9877f046920a89989b2504b9a0d";
                $twilio_number = "+18788796928";
      
                $client = new Client($account_sid, $auth_token);
                $client->messages->create(session('phone'), [
                    'from' => $twilio_number, 
                    'body' => $message]);
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
                $account_sid = "AC645a3bb8638db84c480cc12ece57555f";
                $auth_token = "39e5d9877f046920a89989b2504b9a0d";
                $twilio_number = "+18788796928";
      
                $client = new Client($account_sid, $auth_token);
                $client->messages->create(session('phone'), [
                    'from' => $twilio_number, 
                    'body' => $message]);
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
        return back()->with('failed', 'OTP code is wrong');
    }
    public function Checkupdateotp(Request $request){
        if(session('otp1')== $request->otp)
        {
            $taikhoan = TaiKhoan::find(auth()->user()->id);
            session()->forget('otp1');
            $taikhoan->Phone= session('updatephone');
            $taikhoan->save();
            return back()->with('success', 'Update your phone success');
        }
    }

    public function checkemail(Request $request){
        session()->put('checkforgot', 'true');
        $token=$request->input('token');
        $taikhoan= TaiKhoan::where('token',$token)->first();
        if(empty($taikhoan)){
            return redirect()->route('404');
        }
            session()->put('phone', $taikhoan->Phone);
            return redirect()->route('newpass');
    }
    public function newpass(Request $request){
        $taikhoan= TaiKhoan::where('Phone',session('phone'))->first();
        $taikhoan->password=Hash::make($request->repassword);
        $taikhoan->token="";
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