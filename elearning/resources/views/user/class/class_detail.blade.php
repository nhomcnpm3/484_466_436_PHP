@extends('layouts.master')

@section('title', 'Home Page')

@section('sidebar')
	@parent
@endsection
<style>
	ul {
	  list-style-type: none;
	  margin: 0;
	  padding: 0;
	}
	
	li {
	  display: inline;
	}
	li>a{
		color:blue;
		padding-left:10px;
		padding-right:10px;
		font-size:17px;
	}
	</style>
@section('content')
		<!--// Mini Header \\-->
		<div class="wm-mini-header">
			<span class="wm-blue-transparent"></span>
			 <div class="container">
			    <div class="row">
				    <div class="col-md-12">
				        <div class="wm-mini-title">
				       		<h1>Class Detail</h1> 
				        </div>
				        <div class="wm-breadcrumb">
				          	<ul>
				          	 	<li><a href="{{route('home')}}">Home</a></li>
				          	 	<li><a href="{{route('classlist')}}">Class list</a></li>
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
									<a href="#"><img style="border-radius:50%;width:60px;height:60px;" src="{{asset('extra-images')}}/{{$classdetail->taikhoan->AVT}}" alt=""></a>
								</figure>
								<div class="wm-Professor-info">
									<h6><a href="#">{{$classdetail->taikhoan->Ten}}</a></h6>
									<span>{{$classdetail->taikhoan->Email}}</span>
								</div>
								<p>{{$classdetail->mota}}</p>
								<a class="wm-read-more" href="#">Read More</a>
							</div>
							
						</aside>
						<div class="col-md-9">
							<div class="wm-blog-single wm-courses">
								<div class="wm-blog-author wm-ourcourses">
									<div class="wm-blogauthor-left" >
										<a class="wm-authorpost" href="#">{{$classdetail->taikhoan->Ten}}</a>
									</div>
								</div>								
							</div>
				 <ul>
					<li><a style="border-right:solid 1px blue;color:#424242" href="#">Post</a></li>
					<li><a style="border-right:solid 1px blue;" href="#">Exercise</a></li>
					<li><a href="{{route('everyone',['id'=>$classdetail->id])}}">Everyone</a></li>
				</ul>
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
@endsection