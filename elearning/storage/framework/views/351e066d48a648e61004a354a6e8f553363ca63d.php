<?php $__env->startSection('title', 'Contact'); ?>

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
                            <?php if(empty(session('otp'))): ?>
							<span>Forgot password</span>
						</div>	
                        <form class="form-horizontal" action="<?php echo e(route('verify')); ?>" method="post">
                            <?php echo csrf_field(); ?>
                            <div class="form-group">
								<?php if(Session::has("success")): ?>
									<div class="alert alert-success alert-dismissible"><button type="button" class="close">&times;</button><?php echo e(Session::get('success')); ?></div>
								<?php elseif(Session::has("failed")): ?>
									<div class="alert alert-danger alert-dismissible"><button type="button" class="close">&times;</button><?php echo e(Session::get('failed')); ?></div>
								<?php endif; ?>
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
                            <?php else: ?>
                            <span>Verify OTP<?php echo e(session('otp')); ?></span>
                                </div>	
                                <form class="form-horizontal" action="<?php echo e(route('verifyotp')); ?>" method="post">
                                    <?php echo csrf_field(); ?>
                                    <div class="form-group">
                                    <label class="control-label col-sm-2">OTP:</label>
                                    <div class="col-sm-10">
                                        <input type="text" placeholder="Enter OTP" name="otp">
										<div id="clockdiv">
											<div>
												<span class="minutes" id="minutes"></span>
												<span id="check">:</span>
												<span class="seconds" id="seconds"></span>
												<a href="<?php echo e(route('replayotp')); ?>" id="show" style="color:blue;" hidden>Replay OTP?</a>
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
                            <?php endif; ?>
                           
                       
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

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/macbookair/Desktop/484_466_436_PHP/elearning/resources/views/forgot_password.blade.php ENDPATH**/ ?>