

<?php $__env->startSection('title', 'Home Page'); ?>

<?php $__env->startSection('sidebar'); ?>
    ##parent-placeholder-19bd1503d9bad449304cc6b4e977b74bac6cc771##
<?php $__env->stopSection(); ?>
<style>
    ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
    }

    li {
        display: inline;
    }

    li>a {
        color: blue;
        padding-left: 10px;
        padding-right: 10px;
        font-size: 17px;
    }

</style>
<?php $__env->startSection('content'); ?>
    <!--// Mini Header \\-->
    <div class="wm-mini-header">
        <span class="wm-blue-transparent"></span>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="wm-mini-title">
                        <h1>Class Detail</h1>
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
                                        src="<?php echo e(asset('extra-images')); ?>/<?php echo e($classdetail->taikhoan->AVT); ?>" alt=""></a>

                            </figure>
                            <div class="wm-Professor-info">
                                <h6><a href="#"><?php echo e($classdetail->taikhoan->Ten); ?></a></h6>
                                <span><?php echo e($classdetail->taikhoan->Email); ?></span>
                            </div>
                            <p><?php echo e($classdetail->mota); ?></p>
                            <a class="wm-read-more" href="#">Read More</a>
                        </div>

                    </aside>
                    <div class="col-md-9">
                        <div class="wm-blog-single wm-courses">
                            <div class="wm-blog-author wm-ourcourses">
                                <div class="wm-blogauthor-left">
                                    <a class="wm-authorpost" href="#"><?php echo e($classdetail->taikhoan->Ten); ?></a>
                                </div>
                            </div>
                        </div>
                        <ul>
                            <li><a style="border-right:solid 1px blue;color:#424242" href="#">Post</a></li>
                            <li><a style="border-right:solid 1px blue;" href="#">Exercise</a></li>
                            <li><a href="<?php echo e(route('everyone', ['id' => $classdetail->id])); ?>">Everyone</a></li>
                        </ul>
                        <?php if(auth()->user()->id == $classdetail->ID_TaiKhoan): ?>
                            <a href="<?php echo e(route('showaddlesson', ['id' => $classdetail->id])); ?>" class="btn  btn-lg"
                                style="background-color:#b99663;color:white">
                                <span class="glyphicon glyphicon-plus" style="color:white"></span> Add Lesson
                            </a>
                        <?php endif; ?>
                        <div class="wm-courses-getting-started">
                            <div class="wm-title-full">
                                <h2>Getting Started</h2>
                            </div>
                            <?php $__empty_1 = true; $__currentLoopData = $dsBaiDang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $baidang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <div class="wm-courses-started">
                                    <span>Tiêu đề: <?php echo e($baidang->TieuDe); ?></span>
                                    <ul class="wm-courses-started-listing">
                                        <li>
                                            <a href="#" class="wmicon-tool"></a>
                                            <div class="wm-courses-started-text">
                                                <span><a href="#" class="wmicon-time2"></a><time
                                                        datetime="2017-02-14">Ngày tạo: <?php echo e($baidang->created_at); ?></time></span>
                                                <span><a href="#" class=" wmicon-clock2"></a><time
                                                        datetime="2017-02-14">Deadline: <?php echo e($baidang->HanNop); ?></time></span>
                                            </div>
                                            <div class="wm-courses-preview">
                                                <a class="previe" href="<?php echo e(route('showdetaillesson', ['id' => $baidang->id])); ?>">Preview</a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <tr>
                                    <td colspan="6">Không có dữ liệu</td>
                                </tr>
                            <?php endif; ?>
                        </div>

                        <div class="wm-form">
                            <div class="wm-widgettitle">
                                <h2>Leave <span>Your Review</span></h2>
                            </div>
                            <form>
                                <ul>
                                    <li><input type="text" value="Your Name"
                                            onblur="if(this.value == '') { this.value ='Your Name'; }"
                                            onfocus="if(this.value =='Your Name') { this.value = ''; }"></li>
                                    <li>
                                        <div class="wm-select-two">
                                            <select>
                                                <option>1 Star Review</option>
                                                <option>1 Star Review1</option>
                                                <option>1 Star Review2</option>
                                                <option>1 Star Review3</option>
                                            </select>
                                        </div>
                                    </li>
                                    <li class="wm-full-form">
                                        <textarea placeholder="Your Comment"></textarea>
                                    </li>
                                    <li class="wm-full-form">
                                        <input type="submit" value="Submit now">
                                    </li>
                                </ul>
                            </form>
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

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\BT\Nam3\PHP\484_466_436_PHP\elearning\resources\views/user/class/class_detail.blade.php ENDPATH**/ ?>