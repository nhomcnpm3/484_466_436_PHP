@extends('layouts.master')

@section('title', 'Home Page')

@section('sidebar')
	@parent
@endsection

@section('content')
<!-- blog section start -->
<div class="blog_section layout_padding">
         <div class="container">
            <h1 class="news_taital">Our Bolg</h1>
            <p class="news_text">do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
            <div class="blog_section_2">
               <div class="row">
                  <div class="col-md-6">
                     <img src="images/img-7.png" class="image_7" style="width:100%">
                  </div>
                  <div class="col-md-6">
                     <h4 class="classes_text">Best Classes and study</h4>
                     <p class="ipsum_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris </p>
                  </div>
               </div>
            </div>
            <div class="read_bt"><a href="#">Read More</a></div>
         </div>
      </div>
      <!-- blog section end -->
      @endsection