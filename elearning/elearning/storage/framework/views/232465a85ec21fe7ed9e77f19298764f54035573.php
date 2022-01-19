

<?php $__env->startSection('title', 'Home Page'); ?>

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
                        <h1>Lesson Detail</h1>
                    </div>
                    <div class="wm-breadcrumb">
                        <ul>
                            <li><a href="<?php echo e(route('home')); ?>">Home</a></li>
                            <li><a href="<?php echo e(route('classlist')); ?>">Class list</a></li>
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
                                <a href="#"><img style="border-radius:50%;width:60px;height:60px;"
                                        src="<?php echo e(asset('extra-images')); ?>/<?php echo e($taikhoan->AVT); ?>" alt=""></a>
                            </figure>
                            <div class="wm-Professor-info">
                                <h6><a href="#"><?php echo e($taikhoan->Ten); ?></a></h6>
                                <span><?php echo e($taikhoan->Email); ?></span>
                            </div>
                            <a class="wm-read-more" href="#">Read More</a>
                        </div>
                    </aside>
                    <div class="wm-courses-started">
                        <h1><?php echo e($lesson->TieuDe); ?></h1>
                        <h3>Nội dung bài đăng: </h3>
                        <p><?php echo e($lesson->ChiTiet); ?></p>
                        <ul class="wm-courses-started-listing">
                            <li>
                                <a href="#" class="wmicon-tool"></a>
                                <div class="wm-courses-started-text">
                                    <span><a href="#" class="wmicon-time2"></a><time datetime="2017-02-14">Ngày tạo:
                                            <?php echo e($lesson->created_at); ?></time></span>
                                    <span><a href="#" class=" wmicon-clock2"></a><time datetime="2017-02-14" >Deadline:
                                            <?php echo e($lesson->HanNop); ?></time></span>
                                </div>
                            </li>
                        </ul>
                        <p><a href="<?php echo e(asset('file')); ?>/<?php echo e($tep->Url); ?>">Dowload file tại đây</a></p>
                        <h2>Loại bài: <?php echo e($view); ?></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--// Main Section \\-->

    <!--// Main Section \\-->
    </div>
    <!--// Main Content \\-->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\BT\Nam3\PHP\484_466_436_PHP\elearning\resources\views/user/class/lesson_detail.blade.php ENDPATH**/ ?>