<?php $__env->startSection('title', 'Home Page'); ?>

<?php $__env->startSection('sidebar'); ?>
##parent-placeholder-19bd1503d9bad449304cc6b4e977b74bac6cc771##
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
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
                                <a href="#"><img style="width:70px;height:70px;" src=" <?php echo e(asset('extra-images')); ?>/<?php echo e(auth()->user()->AVT); ?>" alt=""></a>
                            </figure>
                            <div class="wm-student-nav-text">
                                <h6><?php echo e(auth()->user()->Ten); ?></h6>
                                <a href="#">update image</a>
                            </div>
                            <ul>
                                <li class="active">
                                    <a href="#">
                                        <i class="wmicon-avatar"></i>
                                        Profile Details
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo e(route('classlist')); ?>">
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
                                    <a href="<?php echo e(route('logout')); ?>">
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
                        <a href="<?php echo e(route('profile')); ?>"><i class="fa fa-arrow-left" style="font-size:24px"></i></a>
                        <h2>Change the number phone</h2>
                    </div>
                    <div class="wm-courses wm-courses-popular wm-courses-mediumsec">
                                <?php if(Session::has("success")): ?>
									<div class="alert alert-success alert-dismissible"><button type="button" class="close">&times;</button><?php echo e(Session::get('success')); ?></div>
								<?php elseif(Session::has("failed")): ?>
									<div class="alert alert-danger alert-dismissible"><button type="button" class="close">&times;</button><?php echo e(Session::get('failed')); ?></div>
								<?php endif; ?>
                        <?php if(empty(session('otp1'))): ?>
                        
                        <form class="form-horizontal" action="<?php echo e(route('sendotp')); ?>" method="post">
                            <?php echo csrf_field(); ?>
                            <div class="form-group">
                                <label class="control-label col-sm-2">phone:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" value="<?php echo e(auth()->user()->phone); ?>" placeholder="Enter number phone" name="phone">

                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" class="btn btn-default">Save</button>
                                </div>
                            </div>
                        </form>
                        <?php else: ?>
                        <span>Verify OTP<?php echo e(session('otp1')); ?></span>
                        <form class="form-horizontal" action="<?php echo e(route('verifyupdateotp')); ?>" method="post">
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
												<a href="<?php echo e(route('replyupdateOTP')); ?>" id="show" style="color:blue;" hidden>Replay OTP?</a>
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
            $.getJSON("/clear/session/otp1",
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
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/macbookair/Desktop/484_466_436_PHP/elearning/resources/views/profile/reset_profile_phone.blade.php ENDPATH**/ ?>