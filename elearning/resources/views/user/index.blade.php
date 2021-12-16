@extends('layouts.master')

@section('title', 'Home Page')


@section('content')
<!--// Main Content \\-->
<div class="wm-main-content">

    <!--// Main Section \\-->
    <div class="wm-main-section">
        <div class="container">
            <div class="row">
                
                <div class="col-md-4">
                    <div class="wm-search-course">
                        <h3 class="wm-short-title wm-color">Find Your Class</h3>
                        <p>Fill in the form below to find your class:</p>
                        <form>
                            <ul>
                                <li>
                                    <div class="wm-radio">
                                        <div class="wm-radio-partition">
                                            <label>Classcode</label>
                                        </div>
                                    </div>
                                </li>
                                <li> <input type="text" value="Course Name" onblur="if(this.value == '') { this.value ='Course Name'; }" onfocus="if(this.value =='Course Name') { this.value = ''; }"> <i class="wmicon-search"></i> </li>                              
                                <li> <input type="submit" value="Search Class"> </li>
                            </ul>
                        </form>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="wm-service wm-box-service">
                        <ul>
                            <li>
                                <div class="wm-box-service-wrap wm-bgcolor">
                                    <i class="wmicon-suitcase"></i>
                                    <h6><a href="#">Business</a></h6>
                                </div>
                            </li>
                            <li>
                                <div class="wm-box-service-wrap wm-bgcolor">
                                    <i class="wmicon-money"></i>
                                    <h6><a href="#">Economics</a></h6>
                                </div>
                            </li>
                            <li>
                                <div class="wm-box-service-wrap wm-bgcolor">
                                    <i class="wmicon-school"></i>
                                    <h6><a href="#">Math</a></h6>
                                </div>
                            </li>
                            <li>
                                <div class="wm-box-service-wrap wm-bgcolor">
                                    <i class="wmicon-science"></i>
                                    <h6><a href="#">Science</a></h6>
                                </div>
                            </li>
                            <li>
                                <div class="wm-box-service-wrap wm-bgcolor">
                                    <i class="wmicon-computer"></i>
                                    <h6><a href="#">Computing</a></h6>
                                </div>
                            </li>
                            <li>
                                <div class="wm-box-service-wrap wm-bgcolor">
                                    <i class="wmicon-technology3"></i>
                                    <h6><a href="#">Web Design</a></h6>
                                </div>
                            </li>
                            <li>
                                <div class="wm-box-service-wrap wm-bgcolor">
                                    <i class="wmicon-web3"></i>
                                    <h6><a href="#">Development</a></h6>
                                </div>
                            </li>
                            <li>
                                <div class="wm-box-service-wrap wm-bgcolor">
                                    <i class="wmicon-shape"></i>
                                    <h6><a href="#">Biology</a></h6>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--// Main Section \\-->
    <br/>
    <br/>
    <br/>
    <br/>

		<!--// Main Banner \\-->
		<div class="wm-main-banner">
            
            <div class="wm-banner-one">
                <div class="wm-banner-one-for">
                    <div class="wm-banner-one-for-layer"> <img src="extra-images/banner-view1-1.jpg" alt=""> </div>
                    <div class="wm-banner-one-for-layer"> <img src="extra-images/banner-view1-2.jpg" alt=""> </div>
                    <div class="wm-banner-one-for-layer"> <img src="extra-images/banner-view1-3.jpg" alt=""> </div>
                    <div class="wm-banner-one-for-layer"> <img src="extra-images/banner-view1-1.jpg" alt=""> </div>
                </div>
                <div class="wm-banner-one-nav">
                    <div class="wm-banner-one-nav-layer">
                        <h1>International Programmes</h1>
                        <p>The study programmes of the Enroll Campus University are open to people from all nationalities.</p>
                        <a href="#" class="wm-banner-btn">learn more</a>
                    </div>
                    <div class="wm-banner-one-nav-layer">
                        <h1>UA Degree Programmes</h1>
                        <p>We offer companies the opportunity to access the technology and knowledge developed at the  Enroll Campus University.</p>
                        <a href="#" class="wm-banner-btn">know more</a>
                    </div>
                    <div class="wm-banner-one-nav-layer banner-bgcolor">
                        <h1>Research & Business</h1>
                        <p>The scientific community nominates CRISPR System, based on research developed at the UA.</p>
                        <a href="#" class="wm-banner-btn">learn more</a>
                    </div>
                    <div class="wm-banner-one-nav-layer">
                        <h1>International Programmes</h1>
                        <p>The study programmes of the Enroll Campus University are open to people from all nationalities.</p>
                        <a href="#" class="wm-banner-btn">learn more</a>
                    </div>
                </div>
            </div>

		</div>
		<!--// Main Banner \\-->
	</div>
   @endsection
