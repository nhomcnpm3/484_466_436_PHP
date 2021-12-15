<?php $__env->startSection('title', 'Home Page'); ?>

<?php $__env->startSection('sidebar'); ?>
	##parent-placeholder-19bd1503d9bad449304cc6b4e977b74bac6cc771##
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
		<!--// Mini Header \\-->
		<div class="wm-mini-header">
			<span class="wm-blue-transparent"></span>
			 <div class="container">
			    <div class="row">
				    <div class="col-md-12">
				        <div class="wm-mini-title">
				       		<h1>Our Courses</h1> 
				        </div>
				        <div class="wm-breadcrumb">
				          	<ul>
				          	 	<li><a href="<?php echo e(route('home')); ?>">Home</a></li>
				          	 	<li><a href="<?php echo e(route('classlist')); ?>">Class list</a></li>
				           		<li>Class detail</li>
				          	</ul>
				        </div>      
				    </div>
			    </div>
			</div>    
		</div>
  		<!--// Mini Header \\-->

		<!--// Main Content \\-->
		<div class="wm-main-content">

			<!--// Main Section \\-->
			<div class="wm-main-section">
				<div class="container">
					<div class="row">
						<aside class="col-md-3">
							<div class="widget widget_professor-info">
								<div class="wm-widget-title">
									<h2>About Professor</h2>
								</div>
								<figure>
									<a href="#"><img src="extra-images/our-courses-author.jpg" alt=""></a>
								</figure>
								<div class="wm-Professor-info">
									<h6><a href="#">Trần Thanh Tuấn</a></h6>
									<span>15 yrs. experience</span>
								</div>
								<p>Shelly T. accompanied Dr. Stephen Harnish to SC12, an international supercomputing conference in Salt Lake City, Utah. At the conference.</p>
								<a class="wm-read-more" href="#">Read More</a>
							</div>
							
						</aside>
						<div class="col-md-9">
							<div class="wm-blog-single wm-courses">
								<figure class="wm-detail-thumb">
									<img src="extra-images/our-courses1.jpg" alt="">
								</figure>
								<div class="wm-blog-author wm-ourcourses">
									<div class="wm-blogauthor-left">
										<img src="extra-images/our-courses-author.jpg" alt="">
										<a class="wm-authorpost" href="#">Trần Thanh Tuấn</a>
									</div>
								</div>								
							</div>
							
							<div class="wm-courses-getting-started">
								<div class="wm-title-full">
									<h2>Getting Started</h2>
								</div>
								<div class="wm-courses-started">
									<span>Lesson 1: Course Additional Entry</span>
									<ul class="wm-courses-started-listing">
										<li>
											<a href="#" class="wmicon-tool"></a>
											<div class="wm-courses-started-text">
												<h6><a href="#">Test: Human Sciences</a></h6>
												<span><a href="#" class="wmicon-time2"></a><time datetime="2017-02-14">9/05/2016 - 15/06/2016</time></span>
												<span><a href="#" class=" wmicon-clock2"></a><time datetime="2017-02-14">Duration: 2hr15mins</time></span>													
											</div>
											<div class="wm-courses-preview">
												<a class="previe" href="#">Preview</a>
											</div>
										</li>
									</ul>
								</div>
								<div class="wm-courses-started">
									<span>Lesson 2:  Undergraduate Degree</span>
									<ul class="wm-courses-started-listing">
										<li>
											<a href="#" class=" wmicon-interface"></a>
											<div class="wm-courses-started-text">
												<h6><a href="#">Computer Science and Philosophy</a></h6>
												<span><a href="#" class="wmicon-time2"></a><time datetime="2017-02-14">19/05/2016 - 15/06/2016</time></span>
												<span><a href="#" class=" wmicon-clock2"></a><time datetime="2017-02-14">Duration: 2hr15mins</time></span>													
											</div>
											<div class="wm-courses-preview">
												<a href="#">Preview</a>
											</div>
										</li>
									</ul>
								</div>
							</div>
													
							<div class="wm-form">
								<div class="wm-widgettitle">
									<h2>Leave <span>Your Review</span></h2>
								</div>
								<form>
									<ul>
										<li><input type="text" value="Your Name" onblur="if(this.value == '') { this.value ='Your Name'; }" onfocus="if(this.value =='Your Name') { this.value = ''; }"></li>
										<li>
											<div class="wm-select-two">
												<select>
													<option>1 Star Review</option>
													<option>1 Star Review1</option>
													<option>1 Star Review2</option>
													<option>1 Star Review3</option>
												</select>
											</div>
										</li>
										<li class="wm-full-form">
											<textarea placeholder="Your Comment" ></textarea>
										</li>
	                                    <li class="wm-full-form">
											<input type="submit" value="Submit now">
	                                    </li>
	                                </ul>
								</form>                                
						    </div>							    
												
						</div>
					</div>
				</div>
			</div>
			<!--// Main Section \\-->

            <!--// Main Section \\-->
		</div>
		<!--// Main Content \\-->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/macbookair/Desktop/484_466_436_PHP/elearning/resources/views/class/class_detail.blade.php ENDPATH**/ ?>