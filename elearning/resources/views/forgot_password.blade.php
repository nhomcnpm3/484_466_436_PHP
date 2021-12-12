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
								@if(Session::has("success"))
									<div class="alert alert-success alert-dismissible"><button type="button" class="close">&times;</button>{{Session::get('success')}}</div>
								@elseif(Session::has("failed"))
									<div class="alert alert-danger alert-dismissible"><button type="button" class="close">&times;</button>{{Session::get('failed')}}</div>
								@endif
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
										<div id="clockdiv">
											<div>
												<span class="minutes" id="minutes"></span>
												<span id="check">:</span>
												<span class="seconds" id="seconds"></span>
												<a href="{{route('replayotp')}}" id="show" style="color:blue;" hidden>Replay OTP?</a>
											</div>
										</div>

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
		<script>
			function getTimeRemaining(endtime) {
  var t = Date.parse(endtime) - Date.parse(new Date());
  var seconds = Math.floor((t / 1000) % 60);
  var minutes = Math.floor((t / 1000 / 60) % 60);
  return {
    'total': t,
    'minutes': minutes,
    'seconds': seconds
  };
}

function initializeClock(id, endtime) {
  var clock = document.getElementById(id);
  var minutesSpan = clock.querySelector('.minutes');
  var secondsSpan = clock.querySelector('.seconds');

  function updateClock() {
    var t = getTimeRemaining(endtime);

    minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
    secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);

    if (t.total <= 0) {
      clearInterval(timeinterval);
	  $.getJSON("/clear/session/otp",
        function(data) {
            //doSomethingWith(data); 
        }); 

	  document.getElementById("show").hidden = false;
	  document.getElementById("check").hidden = true;
	  document.getElementById("minutes").hidden = true;
	  document.getElementById("seconds").hidden = true;

    }
  }

  updateClock();
  var timeinterval = setInterval(updateClock, 1000);
}
var deadline = new Date(Date.parse(new Date()) +  20 * 1000);
initializeClock('clockdiv', deadline);
			</script>

@endsection