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
                                        <a href="#"><img style="width:70px;height:70px;" src=" {{asset('extra-images')}}/{{auth()->user()->AVT}}" alt=""></a>
                                    </figure>
                                    <div class="wm-student-nav-text">
                                        <h6>{{ auth()->user()->Ten}}</h6>
                                        <a href="#">update image</a>
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
                            <div class="wm-plane-title">
                            <a href="{{route('profile')}}"><i class="fa fa-arrow-left" style="font-size:24px"></i></a>    
                            <h2>Change the number phone</h2> </div>
                            <div class="wm-courses wm-courses-popular wm-courses-mediumsec">
                            <form class="form-horizontal" action="/action_page.php">
    <div class="form-group">
      <label class="control-label col-sm-2" >phone:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" value="{{ auth()->user()->phone}}" placeholder="Enter number phone" name="pwd">

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