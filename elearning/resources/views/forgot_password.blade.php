@extends('layouts.master')

@section('title', 'Contact')

@section('sidebar')
	@parent
@endsection

@section('content')

		<!--// Mini Header \\-->
		<div class="wm-mini-header">
			<span class="wm-blue-transparent"></span>
			 <div class="container">
			    <div class="row">
				    <div class="col-md-12">
				        <div class="wm-mini-title">
				       		<h1>Our Gallery</h1> 
				        </div>
				        <div class="wm-breadcrumb">
				          	<ul>
				          	 	<li><a href="index-2.html">Home</a></li>
				          	 	<li><a href="#">Pages</a></li>
				           		<li>Our Gallery</li>
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
						<div class="wm-filterable">
                            @if(empty(session('otp')))
							<span>Forgot password</span>
						</div>	
                        <form class="form-horizontal" action="{{route('verify')}}" method="post">
                            @csrf
                            <div class="form-group">
                            <label class="control-label col-sm-2" for="email">Email:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="custom" placeholder="Enter email" name="email">
                            </div>
                            </div>
                            <div class="form-group">        
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-default">Submit</button>
                            </div>
                            </div>
                        </form>
                            @else
                            <span>Verify OTP{{session('otp')}}</span>
                                </div>	
                                <form class="form-horizontal" action="{{route('verifyotp')}}" method="post">
                                    @csrf
                                    <div class="form-group">
                                    <label class="control-label col-sm-2">OTP:</label>
                                    <div class="col-sm-10">
                                        <input type="text" placeholder="Enter OTP" name="otp">
                                    </div>
                                    </div>
                                    <div class="form-group">        
                                <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-default">Submit</button>
                            </div>
                            </div>
                        </form>
                            @endif
                           
                       
					</div>
				</div>
			</div>
			<!--// Main Section \\-->

		</div>

@endsection