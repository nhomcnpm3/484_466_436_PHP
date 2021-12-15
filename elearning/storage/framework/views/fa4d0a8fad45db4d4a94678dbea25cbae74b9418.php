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
                                        <li >
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
                            <h2>Change the full name</h2> </div>
                            <div class="wm-courses wm-courses-popular wm-courses-mediumsec">
                            <form class="form-horizontal" action="/action_page.php">
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Full name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" value="<?php echo e(auth()->user()->Ten); ?>" placeholder="Enter fullname" name="pwd">

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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/macbookair/Desktop/484_466_436_PHP/elearning/resources/views/reset_profile_name.blade.php ENDPATH**/ ?>