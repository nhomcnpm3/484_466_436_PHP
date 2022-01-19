@extends('layouts.master')

@section('title', 'Home Page')

@section('sidebar')
	@parent
@endsection

@section('content')
<div class="wm-mini-header">
			<span class="wm-blue-transparent"></span>
		    <div class="container">
			     <div class="row">
				      <div class="col-md-12">
			      		   <div class="wm-mini-title">
						   		<h1>404 Page</h1>	
			      		   </div>
					       <div class="wm-breadcrumb">
						        <ul>
							         <li><a href="index-2.html">Home</a></li>
							         <li>Page Not Found</li>
						        </ul>
					       </div>      
				      </div>
			     </div>
		    </div>    
	   </div>
		<!--// Mini Header \\-->

		<!--// Header \\-->

		<!--// Main Content \\-->
		<div class="wm-main-content ">

            <!--// Main Section \\-->
            <div class="wm-main-section">
            	<div class="wm-404page-bg">
                	<div class="container">
	                    <div class="row">	
							<div class="col-md-7">
								<div class="wm-404page">			
									<div class="wm-404page-text">
										<h3>Ooops! Page Not Found!</h3>
										<p>The page you are looking for might have been removed, had its name changed, or is temporarily unavailable..</p>
										<ul>
											<li>If you typed the page adress, make sure it is spelled correctly.</li>
											<li>Click <a href="#">Back</a> button to try another link.</li>
											<li>Or go back on <a href="index-2.html">Homepage</a> and try there.</li>		
										</ul>
										<form>
											<input type="text" onfocus="if(this.value =='Enter Your Keyword') { this.value = ''; }" onblur="if(this.value == '') { this.value ='Enter Your Keyword'; }" value="Enter Your Keyword">
											<i class="wmicon-search"></i>
											<input type="submit" value="">
										</form>
									</div>
									<div class="wm-404page-button">
										<ul>
											<li><a href="#"><span>Go Back</span></a></li>
											<li><a href="#"><span>back To homepage</span></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>				
                    </div>
                </div>
            </div>
            <!--// Main Section \\-->

		</div>
		<!--// Main Content \\-->

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
                                <li><a title="" data-rel="prettyPhoto[gallery1]" href="extra-images/widget-galleryfull-1.jpg"><img src="extra-images/widget-gallery-1.jpg" alt=""></a></li>
                                <li><a title="" data-rel="prettyPhoto[gallery1]" href="extra-images/widget-galleryfull-2.jpg"><img src="extra-images/widget-gallery-2.jpg" alt=""></a></li>
                                <li><a title="" data-rel="prettyPhoto[gallery1]" href="extra-images/widget-galleryfull-3.jpg"><img src="extra-images/widget-gallery-3.jpg" alt=""></a></li>
                                <li><a title="" data-rel="prettyPhoto[gallery1]" href="extra-images/widget-galleryfull-4.jpg"><img src="extra-images/widget-gallery-4.jpg" alt=""></a></li>
                                <li><a title="" data-rel="prettyPhoto[gallery1]" href="extra-images/widget-galleryfull-5.jpg"><img src="extra-images/widget-gallery-5.jpg" alt=""></a></li>
                                <li><a title="" data-rel="prettyPhoto[gallery1]" href="extra-images/widget-galleryfull-6.jpg"><img src="extra-images/widget-gallery-6.jpg" alt=""></a></li>
                                <li><a title="" data-rel="prettyPhoto[gallery1]" href="extra-images/widget-galleryfull-7.jpg"><img src="extra-images/widget-gallery-7.jpg" alt=""></a></li>
                                <li><a title="" data-rel="prettyPhoto[gallery1]" href="extra-images/widget-galleryfull-8.jpg"><img src="extra-images/widget-gallery-8.jpg" alt=""></a></li>
                                <li><a title="" data-rel="prettyPhoto[gallery1]" href="extra-images/widget-galleryfull-9.jpg"><img src="extra-images/widget-gallery-9.jpg" alt=""></a></li>
                            </ul>
                        </aside>
                    </div>
                </div>
            </div>
      @endsection