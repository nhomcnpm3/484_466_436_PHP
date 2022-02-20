<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <!-- Css Files -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{asset('css/flaticon.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/dropzone.css')}}">
    <link href="{{asset('css/slick-slider.css')}}" rel="stylesheet">
    <link href="{{asset('css/prettyphoto.css')}}" rel="stylesheet">
    <link href="{{asset('build/mediaelementplayer.css')}}" rel="stylesheet">
    <link href="{{asset('style.css')}}" rel="stylesheet">
    <link href="{{asset('css/color.css')}}" rel="stylesheet">
    <link href="{{asset('css/color-two.css')}}" rel="stylesheet">
    <link href="{{asset('css/color-three.css')}}" rel="stylesheet">
    <link href="{{asset('css/color-four.css')}}" rel="stylesheet">
    <link href="{{asset('css/responsive.css')}}" rel="stylesheet">
   

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
      .file-sidebar .card .card-body,
.file-sidebar .card .card-header, .file-content .card .card-body,
.file-content .card .card-header {
  padding: 20px !important; }

.file-sidebar .card .file-manager, .file-content .card .file-manager {
  padding-top: unset !important; }

.file-sidebar ul li + li {
  margin-top: 8px; }

.file-sidebar .btn {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center; }
  .file-sidebar .btn.btn-light:hover {
    color: #24695c !important; }
    .file-sidebar .btn.btn-light:hover svg {
      stroke: #24695c; }
  .file-sidebar .btn svg {
    width: 15px;
    vertical-align: middle;
    margin-right: 8px; }

.file-sidebar .pricing-plan {
  border: 1px solid #e6edef;
  border-radius: 5px;
  margin-top: 10px;
  padding: 15px;
  position: relative;
  overflow: hidden; }
  .file-sidebar .pricing-plan h6 {
    font-weight: 500;
    font-size: 14px;
    margin-bottom: 5px;
    color: #898989; }
  .file-sidebar .pricing-plan h5 {
    font-weight: 600; }
  .file-sidebar .pricing-plan p {
    margin-bottom: 10px;
    color: #999; }
  .file-sidebar .pricing-plan .btn {
    display: inline-block; }
  .file-sidebar .pricing-plan .bg-img {
    position: absolute;
    top: 40px;
    opacity: 0.1;
    -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg);
    right: -40px; }

.file-sidebar h6 {
  font-size: 14px; }

.file-manager h5 {
  font-size: 18px;
  font-weight: 600; }

.file-manager > h6 {
  opacity: 0.6;
  font-weight: 400 !important;
  font-size: 15px;
  margin-bottom: 20px;
  color: #999; }

.file-manager .files .file-box:nth-child(1) {
  -webkit-animation-fill-mode: both;
          animation-fill-mode: both;
  -webkit-animation: fadeIncustom 0.5s linear 10ms;
          animation: fadeIncustom 0.5s linear 10ms; }

.file-manager .files .file-box:nth-child(2) {
  -webkit-animation-fill-mode: both;
          animation-fill-mode: both;
  -webkit-animation: fadeIncustom 0.5s linear 20ms;
          animation: fadeIncustom 0.5s linear 20ms; }

.file-manager .files .file-box:nth-child(3) {
  -webkit-animation-fill-mode: both;
          animation-fill-mode: both;
  -webkit-animation: fadeIncustom 0.5s linear 30ms;
          animation: fadeIncustom 0.5s linear 30ms; }

.file-manager .files .file-box:nth-child(4) {
  -webkit-animation-fill-mode: both;
          animation-fill-mode: both;
  -webkit-animation: fadeIncustom 0.5s linear 40ms;
          animation: fadeIncustom 0.5s linear 40ms; }

.file-manager .files .file-box:nth-child(5) {
  -webkit-animation-fill-mode: both;
          animation-fill-mode: both;
  -webkit-animation: fadeIncustom 0.5s linear 50ms;
          animation: fadeIncustom 0.5s linear 50ms; }

.file-manager .files .file-box:nth-child(6) {
  -webkit-animation-fill-mode: both;
          animation-fill-mode: both;
  -webkit-animation: fadeIncustom 0.5s linear 60ms;
          animation: fadeIncustom 0.5s linear 60ms; }

.file-manager .files .file-box:nth-child(7) {
  -webkit-animation-fill-mode: both;
          animation-fill-mode: both;
  -webkit-animation: fadeIncustom 0.5s linear 70ms;
          animation: fadeIncustom 0.5s linear 70ms; }

.file-manager .files .file-box:nth-child(8) {
  -webkit-animation-fill-mode: both;
          animation-fill-mode: both;
  -webkit-animation: fadeIncustom 0.5s linear 80ms;
          animation: fadeIncustom 0.5s linear 80ms; }

.file-manager .files .file-box:nth-child(9) {
  -webkit-animation-fill-mode: both;
          animation-fill-mode: both;
  -webkit-animation: fadeIncustom 0.5s linear 90ms;
          animation: fadeIncustom 0.5s linear 90ms; }

.file-manager .files .file-box:nth-child(10) {
  -webkit-animation-fill-mode: both;
          animation-fill-mode: both;
  -webkit-animation: fadeIncustom 0.5s linear 100ms;
          animation: fadeIncustom 0.5s linear 100ms; }

.file-manager .files .file-box:nth-child(11) {
  -webkit-animation-fill-mode: both;
          animation-fill-mode: both;
  -webkit-animation: fadeIncustom 0.5s linear 110ms;
          animation: fadeIncustom 0.5s linear 110ms; }

.file-manager .files .file-box:nth-child(12) {
  -webkit-animation-fill-mode: both;
          animation-fill-mode: both;
  -webkit-animation: fadeIncustom 0.5s linear 120ms;
          animation: fadeIncustom 0.5s linear 120ms; }

.file-manager .files .file-box:nth-child(13) {
  -webkit-animation-fill-mode: both;
          animation-fill-mode: both;
  -webkit-animation: fadeIncustom 0.5s linear 130ms;
          animation: fadeIncustom 0.5s linear 130ms; }

.file-manager .files .file-box:nth-child(14) {
  -webkit-animation-fill-mode: both;
          animation-fill-mode: both;
  -webkit-animation: fadeIncustom 0.5s linear 140ms;
          animation: fadeIncustom 0.5s linear 140ms; }

.file-manager .files .file-box:nth-child(15) {
  -webkit-animation-fill-mode: both;
          animation-fill-mode: both;
  -webkit-animation: fadeIncustom 0.5s linear 150ms;
          animation: fadeIncustom 0.5s linear 150ms; }

.file-manager .files h6 {
  margin-top: 10px;
  margin-bottom: 0;
  text-transform: capitalize; }

.file-manager p {
  opacity: 0.9;
  font-size: 12px;
  color: #999; }

.files h6, .folder h6 {
  font-size: 14px; }

.file-content .ellips {
  position: absolute;
  top: 30px;
  right: 30px;
  opacity: 0.7; }

.file-content .form-inline {
  border: 1px solid #e6edef;
  border-radius: 5px;
  padding: 0 20px; }
  .file-content .form-inline i {
    padding-right: 10px;
    color: #898989;
    line-height: 3; }
  .file-content .form-inline input::-webkit-input-placeholder {
    color: #898989; }
  .file-content .form-inline input:focus {
    outline: none !important; }

.file-content .search-form input {
  padding: 5px 10px 5px 70px;
  border-radius: 5px; }

.file-content .search-form .form-group:before {
  left: 82px;
  top: 37px; }

.file-content .search-form .form-group:after {
  top: 39px;
  left: 53px; }

.file-content .btn svg {
  height: 15px;
  margin-right: 2px;
  vertical-align: middle; }

.file-content h4 {
  font-weight: 600; }

.file-content .folder .folder-box {
  border: 1px solid #e6edef;
  border-radius: 5px;
  padding: 15px;
  background-color: rgba(36, 105, 92, 0.05);
  width: calc(25% - 15px);
  display: inline-block; }
  .file-content .folder .folder-box:nth-child(1) {
    -webkit-animation-fill-mode: both;
            animation-fill-mode: both;
    -webkit-animation: fadeIncustom 0.5s linear 10ms;
            animation: fadeIncustom 0.5s linear 10ms; }
  .file-content .folder .folder-box:nth-child(2) {
    -webkit-animation-fill-mode: both;
            animation-fill-mode: both;
    -webkit-animation: fadeIncustom 0.5s linear 20ms;
            animation: fadeIncustom 0.5s linear 20ms; }
  .file-content .folder .folder-box:nth-child(3) {
    -webkit-animation-fill-mode: both;
            animation-fill-mode: both;
    -webkit-animation: fadeIncustom 0.5s linear 30ms;
            animation: fadeIncustom 0.5s linear 30ms; }
  .file-content .folder .folder-box:nth-child(4) {
    -webkit-animation-fill-mode: both;
            animation-fill-mode: both;
    -webkit-animation: fadeIncustom 0.5s linear 40ms;
            animation: fadeIncustom 0.5s linear 40ms; }
  .file-content .folder .folder-box:nth-child(5) {
    -webkit-animation-fill-mode: both;
            animation-fill-mode: both;
    -webkit-animation: fadeIncustom 0.5s linear 50ms;
            animation: fadeIncustom 0.5s linear 50ms; }
  .file-content .folder .folder-box:nth-child(6) {
    -webkit-animation-fill-mode: both;
            animation-fill-mode: both;
    -webkit-animation: fadeIncustom 0.5s linear 60ms;
            animation: fadeIncustom 0.5s linear 60ms; }
  .file-content .folder .folder-box:nth-child(7) {
    -webkit-animation-fill-mode: both;
            animation-fill-mode: both;
    -webkit-animation: fadeIncustom 0.5s linear 70ms;
            animation: fadeIncustom 0.5s linear 70ms; }
  .file-content .folder .folder-box:nth-child(8) {
    -webkit-animation-fill-mode: both;
            animation-fill-mode: both;
    -webkit-animation: fadeIncustom 0.5s linear 80ms;
            animation: fadeIncustom 0.5s linear 80ms; }
  .file-content .folder .folder-box:nth-child(9) {
    -webkit-animation-fill-mode: both;
            animation-fill-mode: both;
    -webkit-animation: fadeIncustom 0.5s linear 90ms;
            animation: fadeIncustom 0.5s linear 90ms; }
  .file-content .folder .folder-box:nth-child(10) {
    -webkit-animation-fill-mode: both;
            animation-fill-mode: both;
    -webkit-animation: fadeIncustom 0.5s linear 100ms;
            animation: fadeIncustom 0.5s linear 100ms; }
  .file-content .folder .folder-box:nth-child(11) {
    -webkit-animation-fill-mode: both;
            animation-fill-mode: both;
    -webkit-animation: fadeIncustom 0.5s linear 110ms;
            animation: fadeIncustom 0.5s linear 110ms; }
  .file-content .folder .folder-box:nth-child(12) {
    -webkit-animation-fill-mode: both;
            animation-fill-mode: both;
    -webkit-animation: fadeIncustom 0.5s linear 120ms;
            animation: fadeIncustom 0.5s linear 120ms; }
  .file-content .folder .folder-box:nth-child(13) {
    -webkit-animation-fill-mode: both;
            animation-fill-mode: both;
    -webkit-animation: fadeIncustom 0.5s linear 130ms;
            animation: fadeIncustom 0.5s linear 130ms; }
  .file-content .folder .folder-box:nth-child(14) {
    -webkit-animation-fill-mode: both;
            animation-fill-mode: both;
    -webkit-animation: fadeIncustom 0.5s linear 140ms;
            animation: fadeIncustom 0.5s linear 140ms; }
  .file-content .folder .folder-box:nth-child(15) {
    -webkit-animation-fill-mode: both;
            animation-fill-mode: both;
    -webkit-animation: fadeIncustom 0.5s linear 150ms;
            animation: fadeIncustom 0.5s linear 150ms; }

.file-box {
  border: 1px solid #e6edef;
  border-radius: 5px;
  padding: 5px;
  background-color: rgba(36, 105, 92, 0.05);
  width: calc(20% - 100px);
  display: inline-block;
  position: relative; }
  .file-box1 {
  border: 1px solid #e6edef;
  border-radius: 5px;
  padding: 5px;
  background-color: rgba(36, 105, 92, 0.05);
  width: calc(20% - 156px);
  display: inline-block;
  position: relative; }
  .text {
  display: block;
  width: 60px;
  overflow: hidden;
  white-space: nowrap;
  text-overflow: ellipsis;
}
  .file-top {
    height: 70px;
    background-color: #fff;
    border: 1px solid #e6edef;
    border-radius: 5px;
    font-size: 30px;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center; }

@media screen and (max-width: 1440px) {
  .file-content .folder .folder-box .media {
    display: block;
    text-align: center; }
    .file-content .folder .folder-box .media .media-body {
      margin-left: 0 !important;
      margin-top: 5px; } }

@media screen and (max-width: 1366px) {
  .file-content .files {
    margin-bottom: -10px; }
    .file-content .files .file-box {
      width: calc(50% - 15px);
      margin-bottom: 10px;
      margin-right: 8px; }
  .file-content .card-header .btn {
    padding: 8px 15px; }
  .file-content .folder .folder-box {
    padding: 13px;
    width: calc(50% - 15px);
    margin-bottom: 10px; }
    .file-content .folder .folder-box .media i {
      font-size: 30px; }
  .file-sidebar .btn {
    padding: 8px 15px; } }

@media screen and (max-width: 768px) {
  .file-content .folder {
    margin-bottom: -10px; }
    .file-content .folder .folder-box {
      width: calc(50% - 15px);
      margin-bottom: 10px;
      margin-right: 8px; }
  .file-content .media {
    display: block;
    text-align: center; }
    .file-content .media .media-body {
      margin-top: 10px;
      text-align: center !important; } }

@media screen and (max-width: 420px) {
  .file-content .folder .folder-box, .file-content .files .file-box {
    width: calc(100%);
    margin-right: unset; }
  .file-content h4 {
    font-size: 20px; }
  .file-content .card-header .btn {
    padding: 7px 10px;
    font-size: 12px; }
  .file-manager > h6 {
    font-size: 14px; } }
.dropbtn {
  background-color:#222845;
  color: white;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropbtn:hover, .dropbtn:focus {
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: white;
  min-width: 160px;
  overflow: auto;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 8px 16px;
  font-size:13px;
  text-decoration: none;
  display: block;
}

.dropdown a:hover {background-color: #ddd;}

.show {display: block;}
.input-file-container {
  border:solid 1px #b99663  ;
  position: relative;
} 
.js .input-file-trigger {
  display: block;
  padding: 10px 15px;
  color: #b99663;
  font-size: 1em;
  transition: all .4s;
  cursor: pointer;
}
.js .input-file {
  position: absolute;
  top: 0; left: 0;
  width: 225px;
  opacity: 0;
  padding: 14px 0;
  cursor: pointer;
}
.js .input-file:hover + .input-file-trigger,
.js .input-file:focus + .input-file-trigger,
.js .input-file-trigger:hover,
.js .input-file-trigger:focus {
}

.file-return {
  margin: 0;
}
.file-return:not(:empty) {
  margin: 1em 0;
}
.js .file-return {
  font-style: italic;
  font-size: .9em;
  font-weight: bold;
}
.js .file-return:not(:empty):before {
  content: "Selected file: ";
  font-style: normal;
  font-weight: normal;
}




.send {
        float: right;
        margin-right: 6px;
        margin-top: -20px;
        position: absolute;
        z-index: 2;
        color: red;
    }
.txtcenter {
  margin-top: 4em;
  font-size: .9em;
  text-align: center;
  color: #aaa;
}
.copy {
  margin-top: 2em;
}
.copy a {
  text-decoration: none;
  color: #1ABC9C;
}
</style>
  </head>
  <body>
	
    <!--// Main Wrapper \\-->
    <div class="wm-main-wrapper">
    @section('sidebar')
  
        <!--// Header \\-->
		<header id="wm-header" class="wm-header-one">

            <!--// TopStrip \\-->
			<div class="wm-topstrip">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div  class="wm-language"> <ul> <li><a href="#">English</a></li> <li><a href="#">español</a></li> </ul> </div>
                            <ul class="wm-stripinfo">
                                <li><i class="wmicon-location"></i> 2925 Swick Hill Street, Charlotte, NC 28202</li>
                                <li><i class="wmicon-technology4"></i> +1 984-700-7129</li>
                                <li><i class="wmicon-clock2"></i> Mon - fri: 7:00am - 6:00pm</li>
                            </ul>
                            <ul class="wm-adminuser-section">
                                @if(!empty(auth()->user()))
                                <li>
                                <div class="dropdown">
                                <img style="width:30px;height:30px;border-radius:50px;border:none;margin-right:5px;" src="{{asset('extra-images')}}/{{ auth()->user()->AVT}}" alt=""><button onclick="myFunction()" class="dropbtn" style="font-size:13px">{{ auth()->user()->Email}}</button>
                                    <div id="myDropdown" class="dropdown-content">
                                        <a style="color:black;font-size:13px"href="{{route('profile')}}">Profile</a>
                                        <a style="color:black;font-size:13px"href="#about">About</a>
                                        <a style="color:black;font-size:13px"href="{{route('logout')}}">Logout</a>
                                    </div>
                                    </div>
                                    </li>
                                    @else
                                <li>
                                    <a href="#" data-toggle="modal" data-target="#ModalLogin">login</a>
                                </li>
                                @endif
                                <li>
                                    <a href="#" class="wm-search-btn" data-toggle="modal" data-target="#ModalSearch"><i class="wmicon-search"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!--// TopStrip \\-->

            <!--// MainHeader \\-->
            <div class="wm-main-header">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3"><a href="{{route('home')}}" class="wm-logo"><img src="{{asset('images/logo-1.png')}}" alt=""></a></div>
                        <div class="col-md-9">
                            <!--// Navigation \\-->
                            <nav class="navbar navbar-default">
                                <div class="navbar-header">
                                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="true">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                  </button>
                                </div>
                                <div class="collapse navbar-collapse" id="navbar-collapse-1">
                                  <ul class="nav navbar-nav">
                                    <li class="active"><a href="{{route('home')}}">Home</a>
                                    </li>
                                    <li><a href="{{route('classlist')}}">Class list</a>
                                    </li>
                                    <li ><a href="#">About Us</a>
                                    </li>
                                    <li class="wm-megamenu-li"><a href="#">Contact</a>
                                        <ul class="wm-megamenu">
                                            <li class="row">
                                                <div class="col-md-2">
                                                    <h4>Links 1</h4>
                                                    <ul class="wm-megalist">
                                                        <li><a href="contact-us.html">Contact Us</a></li>
                                                        <li><a href="404-page.html">404 Error Page</a></li>
                                                        <li><a href="shop-list.html">Shop List</a></li>
                                                        <li><a href="shop-grid.html">Shop Grid</a></li>
                                                        <li><a href="shop-single-product.html">Shop Detail</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-5">
                                                    <h4>Artists text</h4>
                                                    <div class="wm-mega-text">
                                                        <p>Your work is going to fill a large part of your life, and the only way to be truly satisfied is to do what you believe is great work. And the only way to do great work is to love.</p>
                                                        <p>If you haven't found it yet, keep looking. Don't settle. As with all matters of the heart, you'll know when you find it.</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-5">
                                                    <h4>sub category widget</h4>
                                                    <a href="#" class="wm-thumbnail">
                                                        <img src="extra-images/mega-menuadd.jpg" alt="" />
                                                    </a>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                  </ul>
                                </div>
                            </nav>
                            <!--// Navigation \\-->
                        </div>
                    </div>
                </div>
            </div>
            <!--// MainHeader \\-->

		</header>



      
      @show
		<!--// Header \\-->
      @yield('content')

		<!--// Footer \\-->
		<footer id="wm-footer" class="wm-footer-one">
			
            <!--// FooterNewsLatter \\-->
            <div class="wm-footer-newslatter">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <form>
                                <i class="wmicon-interface2"></i>
                                <input type="text" value="Enter your e-mail address" onblur="if(this.value == '') { this.value ='Enter your e-mail address'; }" onfocus="if(this.value =='Enter your e-mail address') { this.value = ''; }">
                                <input type="submit" value="Subscribe to our newsletter">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!--// FooterNewsLatter \\-->

            <!--// FooterWidgets \\-->
            <div class="wm-footer-widget">
                <div class="container">
                    <div class="row">
                        <aside class="widget widget_contact_info col-md-3">
                            <a href="index-2.html" class="wm-footer-logo"><img src="images/logo-1.png" alt=""></a>
                            <ul>
                                <li><i class="wm-color wmicon-pin"></i> 195 Cooks Mine Road Espanola, NM 87532</li>
                                <li><i class="wm-color wmicon-phone"></i> +1 505-753-5656 <br> +1 505-753-4437</li>
                                <li><i class="wm-color wmicon-letter"></i> <a href="mailto:name@email.com">info@university.com</a> <a href="mailto:name@email.com">support@university.com</a></li>
                            </ul>
                            <div class="wm-footer-icons">
                                <a href="#" class="wmicon-social5"></a>
                                <a href="#" class="wmicon-social4"></a>
                                <a href="#" class="wmicon-social3"></a>
                                <a href="#" class="wmicon-vimeo"></a>
                            </div>
                        </aside>
                        <aside class="widget widget_archive col-md-2">
                            <div class="wm-footer-widget-title"> <h5>Quick Links</h5> </div>
                            <ul>
                                <li><a href="#">Our Latest Events</a></li>
                                <li><a href="#">Our Courses</a></li>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">FAQ</a></li>
                                <li><a href="#">404 Page</a></li>
                                <li><a href="#">Gallery</a></li>
                                <li><a href="#">All Instructors</a></li>
                            </ul>
                        </aside>
                        <aside class="widget widget_twitter col-md-4">
                            <div class="wm-footer-widget-title"> <h5><i class="wmicon-social2"></i> @enrollcampus</h5> </div>
                            <ul>
                                <li>
                                    <p>Check Youniverse - Multipurpose PSD Template @ThemeForest: <a href="#">pic.twitter.com/xcVlqJySjq</a></p>
                                    <time datetime="2008-02-14 20:00" class="wm-color">2 hrs ago</time>
                                </li>
                                <li>
                                    <p>Check out my New PSD:  FashionPlus - Fashion eCommerce: <a href="#">pic.twitter.com/xc445Ghyt</a></p>
                                    <time datetime="2008-02-14 20:00" class="wm-color">4 hrs ago</time>
                                </li>
                                <li>
                                    <p>MedicAid - Medical Template @ThemeForest: <a href="#">pic.twitter.com/xcVlq542wfER</a></p>
                                    <time datetime="2008-02-14 20:00" class="wm-color">1 day ago</time>
                                </li>
                            </ul>
                        </aside>
                        <aside class="widget widget_gallery col-md-3">
                            <div class="wm-footer-widget-title"> <h5>Our Instructors</h5> </div>
                            <ul class="gallery">
                                <li><a title="" data-rel="prettyPhoto[gallery1]" href="extra-images/widget-galleryfull-1.jpg"><img src="{{asset('extra-images/widget-gallery-1.jpg')}}" alt=""></a></li>
                                <li><a title="" data-rel="prettyPhoto[gallery1]" href="extra-images/widget-galleryfull-2.jpg"><img src="{{asset('extra-images/widget-gallery-2.jpg')}}" alt=""></a></li>
                                <li><a title="" data-rel="prettyPhoto[gallery1]" href="extra-images/widget-galleryfull-3.jpg"><img src="{{asset('extra-images/widget-gallery-3.jpg')}}" alt=""></a></li>
                                <li><a title="" data-rel="prettyPhoto[gallery1]" href="extra-images/widget-galleryfull-4.jpg"><img src="{{asset('extra-images/widget-gallery-4.jpg')}}" alt=""></a></li>
                                <li><a title="" data-rel="prettyPhoto[gallery1]" href="extra-images/widget-galleryfull-5.jpg"><img src="{{asset('extra-images/widget-gallery-5.jpg')}}" alt=""></a></li>
                                <li><a title="" data-rel="prettyPhoto[gallery1]" href="extra-images/widget-galleryfull-6.jpg"><img src="{{asset('extra-images/widget-gallery-6.jpg')}}" alt=""></a></li>
                                <li><a title="" data-rel="prettyPhoto[gallery1]" href="extra-images/widget-galleryfull-7.jpg"><img src="{{asset('extra-images/widget-gallery-7.jpg')}}" alt=""></a></li>
                                <li><a title="" data-rel="prettyPhoto[gallery1]" href="extra-images/widget-galleryfull-8.jpg"><img src="{{asset('extra-images/widget-gallery-8.jpg')}}" alt=""></a></li>
                                <li><a title="" data-rel="prettyPhoto[gallery1]" href="extra-images/widget-galleryfull-9.jpg"><img src="{{asset('extra-images/widget-gallery-9.jpg')}}" alt=""></a></li>
                            </ul>
                        </aside>
                    </div>
                </div>
            </div>
            <!--// FooterWidgets \\-->

            <!--// FooterCopyRight \\-->
            <div class="wm-copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6"> <span><i class="wmicon-nature"></i> Barcelona, Spain 2°F / -17°C</span> </div>
                        <div class="col-md-6"> <p><a target="_blank" href="https://www.templateshub.net">Templates Hub</a></p> </div>
                    </div>
                </div>
            </div>
            <!--// FooterCopyRight \\-->

		</footer>
		<!--// Footer \\-->

	<div class="clearfix"></div>
    </div>
    <!--// Main Wrapper \\-->

    <!-- ModalLogin Box -->
    <div class="modal fade" id="ModalLogin" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-body">            
            <div class="wm-modallogin-form wm-login-popup">
                <span class="wm-color">Login to Your Account</span>
                <form action="{{ route('xl-dang-nhap') }}" method="POST">
                    @csrf
                    <ul>
                        <li> <input type="text" value="Your Email" name="email" onblur="if(this.value == '') { this.value ='Your Email'; }" onfocus="if(this.value =='Your Email') { this.value = ''; }"> </li>
                        <li> <input type="password" value="password" name="password" onblur="if(this.value == '') { this.value ='password'; }" onfocus="if(this.value =='password') { this.value = ''; }"> </li>
                        <li> <a href="{{route('forgotpassword')}}" class="wm-forgot-btn">Forgot Password?</a> </li>
                        <li> <input type="submit" value="Sign In"> </li>
                    </ul>
                </form>
                <span class="wm-color">or try our socials</span>
                <ul class="wm-login-social-media">
                    <li><a href="#"><i class="wmicon-social5"></i> Facebook</a></li>
                    <li class="wm-twitter-color"><a href="#"><i class="wmicon-social4"></i> twitter</a></li>
                    <li class="wm-googleplus-color"><a href="{{ url('/auth/redirect/google') }}"><i class="fa fa-google-plus-square"></i> Google+</a></li>
                </ul>
                <p>Not a member yet? <a href="#">Sign-up Now!</a></p>
            </div>
            <div class="wm-modallogin-form wm-register-popup">
                <span class="wm-color">create Your Account today</span>
                <form action="{{route('signup')}}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <ul>
                    <li>Your Email</li>
                    <li> <input type="text" name="mail" value="E-mail" onblur="if(this.value == '') { this.value ='Your E-mail'; }" onfocus="if(this.value =='Your E-mail') { this.value = ''; }"> </li>
                    <li>FUll name</li>
                    <li><input type="text" name="fullname" value="FullName" onblur="if(this.value == '') { this.value ='Your Username'; }" onfocus="if(this.value =='Your Username') { this.value = ''; }"> </li>
                    <li>Number phone</li>
                    <li> <input type="text" name="phone" value="Phone" onblur="if(this.value == '') { this.value ='Phone'; }" onfocus="if(this.value =='Phone') { this.value = ''; }"> </li>
                    <li>Address</li>
                    <li> <input type="text" name="address" value="Address" onblur="if(this.value == '') { this.value ='Address'; }" onfocus="if(this.value =='Address') { this.value = ''; }"> </li>
                    <li>Birthday</li>
                    <li> <input type="date" name="birthday" value="Birth of Date" onblur="if(this.value == '') { this.value ='Birth of Date'; }" onfocus="if(this.value =='Birth of Date') { this.value = ''; }"> </li>
                    <li>Avatar</li>
                    <li> <input type="file" name="image"></li>
                    <li>Password</li>
                    <li> <input type="password" id="newaccpassword" name="pass" value="password" onblur="if(this.value == '') { this.value ='password'; }" onfocus="if(this.value =='password') { this.value = ''; }"> </li>
                    <li>Confirm password</li>
                    <li> <input type="password" id="newaccconfirm_password"  name="passconfirm" value="Confirm Password" onblur="if(this.value == '') { this.value ='Confirm Password'; }" onfocus="if(this.value =='Confirm Password') { this.value = ''; }"> </li>
                    <span id='message'></span>
                    <li> <input id="submit"  disabled="disabled" type="submit" value="Create Account"> </li>
                  </ul>
                </form>
                <span class="wm-color">or signup with your socials:</span>
                <ul class="wm-login-social-media">
                    <li><a href="#"><i class="wmicon-social5"></i> Facebook</a></li>
                    <li class="wm-twitter-color"><a href="#"><i class="wmicon-social4"></i> twitter</a></li>
                    <li class="wm-googleplus-color"><a href="{{ url('/auth/redirect/google') }}"><i class="fa fa-google-plus-square"></i> Google+</a></li>
                </ul>
                <p>Already a member? <a href="#">Sign-in Here!</a></p>
            </div>

          </div>
        </div>
      <div class="clearfix"></div>
      </div>
    </div>
    <!-- ModalLogin Box -->

    <!-- ModalSearch Box -->
    <div class="modal fade" id="ModalSearch" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-body">
            
            <div class="wm-modallogin-form">
                <span class="wm-color">Search Your KeyWord</span>
                <form>
                    <ul>
                        <li> <input type="text" value="Keywords..." onblur="if(this.value == '') { this.value ='Keywords...'; }" onfocus="if(this.value =='Keywords...') { this.value = ''; }"> </li>
                        <li> <input type="submit" value="Search"> </li>
                    </ul>
                </form>
            </div>

          </div>
        </div>
      <div class="clearfix"></div>
      </div>
    </div>
    <!-- ModalSearch Box -->
    <script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}

document.querySelector("html").classList.add('js');

var fileInput  = document.querySelector( ".input-file" ),  
    button     = document.querySelector( ".input-file-trigger" ),
    the_return = document.querySelector(".file-return");
      
button.addEventListener( "keydown", function( event ) {  
    if ( event.keyCode == 13 || event.keyCode == 32 ) {  
        fileInput.focus();  
    }  
});
button.addEventListener( "click", function( event ) {
   fileInput.focus();
   return false;
});  
fileInput.addEventListener( "change", function( event ) {  
    the_return.innerHTML = this.value;  
});  

</script>
<script>
	$('#newaccpassword, #newaccconfirm_password').on('keyup', function () {
  if (($('#newaccpassword').val() == $('#newaccconfirm_password').val()) && ($('#newaccpassword').val().length >= 8))
   {
    $('#message').html('Invalid').css('color', 'green');
	document.getElementById("submit").disabled=false;
  } else {
    $('#message').html('UnInvalid').css('color', 'red');
	document.getElementById("submit").disabled=true;
  }
	
});
	</script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<!-- jQuery (necessary for JavaScript plugins) -->
	<script type="text/javascript" src="{{asset('script/jquery.js')}}"></script>
	<script type="text/javascript" src="{{asset('script/modernizr.js')}}"></script>
    <script type="text/javascript" src="{{asset('script/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('script/jquery.prettyphoto.js')}}"></script>
    <script type="text/javascript" src="{{asset('script/jquery.countdown.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('script/fitvideo.js')}}"></script>
    <script type="text/javascript" src="{{asset('script/skills.js')}}"></script>
    <script type="text/javascript" src="{{asset('script/slick.slider.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('script/waypoints-min.js')}}"></script>
    <script type="text/javascript" src="{{asset('build/mediaelement-and-player.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('script/isotope.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('script/jquery.nicescroll.min.js')}}"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>
    <script type="text/javascript" src="{{asset('script/functions.js')}}"></script>

  </body>
</html>
