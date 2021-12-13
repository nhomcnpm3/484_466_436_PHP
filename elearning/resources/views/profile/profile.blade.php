@extends('layouts.master')

@section('title', 'Home Page')

@section('sidebar')
	@parent
@endsection

@section('content')
		<!--// Main Content \\-->
		<div class="wm-main-content">

            <!--// Main Section \\-->
            <div class="wm-main-section">
                <div class="container">
                    <div class="row">
                        
                        <aside class="col-md-4">
                            <div class="wm-student-dashboard-nav">
                                <div class="wm-student-nav">
                                    <figure>
                                        <a href="#"><img style="width:70px;height:70px;" src="extra-images/{{ auth()->user()->AVT}}" alt=""></a>
                                    </figure>
                                    <div class="wm-student-nav-text">
                                        <h6>{{ auth()->user()->Ten}}</h6>
                                        <div class="input-file-container">  
                                          <form action="{{ route('upload-image') }}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <input class="input-file" id="my-file" type="file" name="image" onchange="form.submit()">
                                            <label tabindex="0" for="my-file" class="input-file-trigger">Upload Image</label>
                                          </form>                                            
                                        </div>
                                    </div>
                                    <ul>
                                        <li class="active">
                                            <a href="#">
                                                <i class="wmicon-avatar"></i>
                                                Profile Details
                                            </a>
                                        </li>
                                        <li >
                                            <a href="{{route('classlist')}}">
                                                <i class="wmicon-book"></i>
                                                My Class
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="wmicon-three"></i>
                                                Settings
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{route('logout')}}">
                                                <i class="wmicon-arrow"></i>
                                                Logout
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </aside>
                        
                        <div class="col-md-8">
                            <div class="wm-plane-title"> <h2>User profile </h2> </div>
                            <div class="wm-courses wm-courses-popular wm-courses-mediumsec">
                            <form class="form-horizontal" action="/action_page.php">
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Full name:</label>
      <div class="col-sm-10">
        <lable  class="form-control">{{ auth()->user()->Ten}}</lable>
        <a style="color:#b99663"href="{{route('reset_profile_name')}}">Do you want to change the full name?</a>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Birthday:</label>
      <div class="col-sm-10">
        <lable  class="form-control">{{ auth()->user()->NgaySinh}}</lable>
        <a style="color:#b99663"href="{{route('reset_profile_birthday')}}">Do you want to change the birthday?</a>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Phone:</label>
      <div class="col-sm-10">          
      <lable  class="form-control">{{ auth()->user()->phone}}</lable>
      <a style="color:#b99663"href="{{route('reset_profile_phone')}}">Do you want to change the number phone?</a>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Email:</label>
      <div class="col-sm-10">          
      <lable  class="form-control">{{ auth()->user()->Email}}</lable>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">NPassword:</label>
      <div class="col-sm-10">          
        <input type="password" class="form-control" id="pwd" placeholder="Enter new password" name="pwd">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">RPassword:</label>
      <div class="col-sm-10">          
        <input type="password" class="form-control" id="pwd" placeholder="Enter repassword" name="pwd">
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Save</button>
      </div>
    </div>
  </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!--// Main Section \\-->

		</div>
		<!--// Main Content \\-->
@endsection