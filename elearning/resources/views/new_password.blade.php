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
                            <span>New Password</span>
                                </div>	
                                <form class="form-horizontal" action="{{route('checkpass')}}" method="post">
                                    @csrf
                                    <div class="form-group">
                                    <label class="control-label col-sm-2">New password:</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" placeholder="Enter New Password" name="npass">
                                    </div>
                                    </div>
                                    <div class="form-group">
                                    <label class="control-label col-sm-2">Repassword:</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" placeholder="Enter RePassword" name="rpass">
                                    </div>
                                    </div>
                            <div class="form-group">        
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-default">Submit</button>
                            </div>
                            </div>
                        </form>
                       
					</div>
				</div>
			</div>
			<!--// Main Section \\-->

		</div>

@endsection