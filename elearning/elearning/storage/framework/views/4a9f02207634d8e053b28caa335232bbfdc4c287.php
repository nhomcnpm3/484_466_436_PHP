

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

                    <aside class="col-md-3">
                        <div class="widget wm-search-course">
                            <h3 class="wm-short-title wm-color">Find Your Class</h3>
                            <p>Find your class here:</p>
                            <form action="<?php echo e(route('joinclass')); ?>" method="post">
                                <?php echo csrf_field(); ?>
                                <ul>
                                    <li>
                                        <div class="wm-radio">
                                            <div class="wm-radio-partition">
                                                <label for="male">Class code</label>
                                            </div>
                                        </div>
                                    </li>
                                    <li> <input type="text" name="joinclass" value="Course Name"
                                            onblur="if(this.value == '') { this.value ='Course Name'; }"
                                            onfocus="if(this.value =='Course Name') { this.value = ''; }"> <i
                                            class="wmicon-search"></i> </li>
                                    <li> <input type="submit" value="Search class"> </li>
                                </ul>
                            </form>
                        </div>

                    </aside>

                    <div class="col-md-9">
                        <div class="wm-filter-box">
                            <div class="wm-apply-select">
                                <form action="<?php echo e(route('showpersonalclass')); ?>" method="POST">
                                    <?php echo csrf_field(); ?>

                                    <select name="order" onchange='this.form.submit()'>
                                        <option value="1">Joined class</option>
                                        <option <?php if($order==2): ?>selected="selected"<?php endif; ?> value="2">Personal class</option>
                                    </select>
                                </form>

                            </div>
                            <div class="wm-normal-btn">
                                <a href="#" class="active">Free</a>
                                <a href="#">Paid</a>
                            </div>
                            <div class="wm-view-btn">
                                <a href="#" class="wmicon-squares active"></a>
                                <a href="#" class="wmicon-signs"></a>
                            </div>
                        </div>
                        <?php if(auth()->user()->ID_LoaiTaiKhoan != 2): ?>
                            <a href="<?php echo e(route('showCreateClass')); ?>" class="btn  btn-lg"
                                style="background-color:#b99663;color:white">
                                <span class="glyphicon glyphicon-plus" style="color:white"></span>More class
                            </a>
                        <?php endif; ?>

                        <div class="wm-courses wm-courses-popular wm-courses-mediumsec">
                            <ul class="row">
                                <?php if($order == 1): ?>
                                    <?php $__empty_1 = true; $__currentLoopData = $classlist->DSLop; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $class): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                        <li class="col-md-12">
                                            <div class="wm-courses-popular-wrap">
                                                <figure> <a href="<?php echo e(route('classdetail', ['id' => $class->id])); ?>"><img
                                                            src="<?php echo e(asset('extra-images')); ?>/<?php echo e($class->Logo); ?>"
                                                            style="width:265px;height:155px;" alt=""> <span
                                                            class="wm-popular-hover"> <small>see class</small> </span> </a>
                                                    <figcaption>
                                                        <h6><a
                                                                href="<?php echo e(route('classdetail', ['id' => $class->id])); ?>"><?php echo e($class->TaiKhoan->Ten); ?></a>
                                                        </h6>
                                                    </figcaption>
                                                </figure>
                                                <div class="wm-popular-courses-text">
                                                    <h6><a
                                                            href="<?php echo e(route('classdetail', ['id' => $class->id])); ?>"><?php echo e($class->TenLop); ?></a>
                                                    </h6>
                                                    <p><?php echo e($class->mota); ?></p>
                                                </div>
                                            </div>
                                        </li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                        <p>Khong co du lieu</p>
                                    <?php endif; ?>
                                <?php elseif($order ==2): ?>
                                    <?php $__empty_1 = true; $__currentLoopData = $classlist->DanhsachLop; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $class): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                        <li class="col-md-12">
                                            <div class="wm-courses-popular-wrap">
                                                <figure> <a href="<?php echo e(route('classdetail', ['id' => $class->id])); ?>"><img
                                                            src="<?php echo e(asset('extra-images')); ?>/<?php echo e($class->Logo); ?>"
                                                            style="width:265px;height:155px;" alt=""> <span
                                                            class="wm-popular-hover"> <small>see class</small> </span> </a>
                                                    <figcaption>
                                                        <h6><a
                                                                href="<?php echo e(route('classdetail', ['id' => $class->id])); ?>"><?php echo e($class->TaiKhoan->Ten); ?></a>
                                                        </h6>
                                                    </figcaption>
                                                </figure>
                                                <div class="wm-popular-courses-text">
                                                    <h6><a
                                                            href="<?php echo e(route('classdetail', ['id' => $class->id])); ?>"><?php echo e($class->TenLop); ?></a>
                                                    </h6>
                                                    <p><?php echo e($class->mota); ?></p>
                                                </div>
                                            </div>
                                        </li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                        <p>Khong co du lieu</p>
                                    <?php endif; ?>
                                <?php endif; ?>
                            </ul>
                        </div>
                        <div class="wm-pagination">
                            <ul>
                                <li><a href="#" aria-label="Previous"> <i class="wmicon-arrows4"></i> Previous</a></li>
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li>...</li>
                                <li><a href="#">18</a></li>
                                <li><a href="#" aria-label="Next"> <i class="wmicon-arrows4"></i> Next</a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!--// Main Section \\-->

    </div>
    <!--// Main Content \\-->

    <!--// Footer \\-->
    <footer id="wm-footer" class="wm-footer-one">

        <!--// FooterNewsLatter \\-->
        <div class="wm-footer-newslatter">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <form>
                            <i class="wmicon-interface2"></i>
                            <input type="text" value="Enter your e-mail address"
                                onblur="if(this.value == '') { this.value ='Enter your e-mail address'; }"
                                onfocus="if(this.value =='Enter your e-mail address') { this.value = ''; }">
                            <input type="submit" value="Subscribe to our newsletter">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--// FooterNewsLatter \\-->

        <!--// FooterWidgets \\-->
        <div class="wm-footer-widget">
            <div class="container">
                <div class="row">
                    <aside class="widget widget_contact_info col-md-3">
                        <a href="index-2.html" class="wm-footer-logo"><img src="images/logo-1.png" alt=""></a>
                        <ul>
                            <li><i class="wm-color wmicon-pin"></i> 195 Cooks Mine Road Espanola, NM 87532</li>
                            <li><i class="wm-color wmicon-phone"></i> +1 505-753-5656 <br> +1 505-753-4437</li>
                            <li><i class="wm-color wmicon-letter"></i> <a
                                    href="mailto:name@email.com">info@university.com</a> <a
                                    href="mailto:name@email.com">support@university.com</a></li>
                        </ul>
                        <div class="wm-footer-icons">
                            <a href="#" class="wmicon-social5"></a>
                            <a href="#" class="wmicon-social4"></a>
                            <a href="#" class="wmicon-social3"></a>
                            <a href="#" class="wmicon-vimeo"></a>
                        </div>
                    </aside>
                    <aside class="widget widget_archive col-md-2">
                        <div class="wm-footer-widget-title">
                            <h5>Quick Links</h5>
                        </div>
                        <ul>
                            <li><a href="#">Our Latest Events</a></li>
                            <li><a href="#">Our Courses</a></li>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">FAQ</a></li>
                            <li><a href="#">404 Page</a></li>
                            <li><a href="#">Gallery</a></li>
                            <li><a href="#">All Instructors</a></li>
                        </ul>
                    </aside>
                    <aside class="widget widget_twitter col-md-4">
                        <div class="wm-footer-widget-title">
                            <h5><i class="wmicon-social2"></i> @enrollcampus</h5>
                        </div>
                        <ul>
                            <li>
                                <p>Check Youniverse - Multipurpose PSD Template @ThemeForest: <a
                                        href="#">pic.twitter.com/xcVlqJySjq</a></p>
                                <time datetime="2008-02-14 20:00" class="wm-color">2 hrs ago</time>
                            </li>
                            <li>
                                <p>Check out my New PSD: FashionPlus - Fashion eCommerce: <a
                                        href="#">pic.twitter.com/xc445Ghyt</a></p>
                                <time datetime="2008-02-14 20:00" class="wm-color">4 hrs ago</time>
                            </li>
                            <li>
                                <p>MedicAid - Medical Template @ThemeForest: <a href="#">pic.twitter.com/xcVlq542wfER</a>
                                </p>
                                <time datetime="2008-02-14 20:00" class="wm-color">1 day ago</time>
                            </li>
                        </ul>
                    </aside>
                    <aside class="widget widget_gallery col-md-3">
                        <div class="wm-footer-widget-title">
                            <h5>Our Instructors</h5>
                        </div>
                        <ul class="gallery">
                            <li><a title="" data-rel="prettyPhoto[gallery1]"
                                    href="extra-images/widget-galleryfull-1.jpg"><img
                                        src="extra-images/widget-gallery-1.jpg" alt=""></a></li>
                            <li><a title="" data-rel="prettyPhoto[gallery1]"
                                    href="extra-images/widget-galleryfull-2.jpg"><img
                                        src="extra-images/widget-gallery-2.jpg" alt=""></a></li>
                            <li><a title="" data-rel="prettyPhoto[gallery1]"
                                    href="extra-images/widget-galleryfull-3.jpg"><img
                                        src="extra-images/widget-gallery-3.jpg" alt=""></a></li>
                            <li><a title="" data-rel="prettyPhoto[gallery1]"
                                    href="extra-images/widget-galleryfull-4.jpg"><img
                                        src="extra-images/widget-gallery-4.jpg" alt=""></a></li>
                            <li><a title="" data-rel="prettyPhoto[gallery1]"
                                    href="extra-images/widget-galleryfull-5.jpg"><img
                                        src="extra-images/widget-gallery-5.jpg" alt=""></a></li>
                            <li><a title="" data-rel="prettyPhoto[gallery1]"
                                    href="extra-images/widget-galleryfull-6.jpg"><img
                                        src="extra-images/widget-gallery-6.jpg" alt=""></a></li>
                            <li><a title="" data-rel="prettyPhoto[gallery1]"
                                    href="extra-images/widget-galleryfull-7.jpg"><img
                                        src="extra-images/widget-gallery-7.jpg" alt=""></a></li>
                            <li><a title="" data-rel="prettyPhoto[gallery1]"
                                    href="extra-images/widget-galleryfull-8.jpg"><img
                                        src="extra-images/widget-gallery-8.jpg" alt=""></a></li>
                            <li><a title="" data-rel="prettyPhoto[gallery1]"
                                    href="extra-images/widget-galleryfull-9.jpg"><img
                                        src="extra-images/widget-gallery-9.jpg" alt=""></a></li>
                        </ul>
                    </aside>
                </div>
            </div>
        </div>
        <!--// FooterWidgets \\-->

        <!--// FooterCopyRight \\-->
        <div class="wm-copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-6"> <span><i class="wmicon-nature"></i> Barcelona, Spain 2°F / -17°C</span>
                    </div>
                    <div class="col-md-6">
                        <p><a target="_blank" href="https://www.templateshub.net">Templates Hub</a></p>
                    </div>
                </div>
            </div>
        </div>
        <!--// FooterCopyRight \\-->

    </footer>
    <!--// Footer \\-->

    <div class="clearfix"></div>
    </div>
    <!--// Main Wrapper \\-->

    <!-- ModalLogin Box -->
    <div class="modal fade" id="ModalLogin" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">

                    <div class="wm-modallogin-form wm-login-popup">
                        <span class="wm-color">Login to Your Account</span>
                        <form>
                            <ul>
                                <li> <input type="text" value="Your Username"
                                        onblur="if(this.value == '') { this.value ='Your Username'; }"
                                        onfocus="if(this.value =='Your Username') { this.value = ''; }"> </li>
                                <li> <input type="password" value="password"
                                        onblur="if(this.value == '') { this.value ='password'; }"
                                        onfocus="if(this.value =='password') { this.value = ''; }"> </li>
                                <li> <a href="#" class="wm-forgot-btn">Forgot Password?</a> </li>
                                <li> <input type="submit" value="Sign In"> </li>
                            </ul>
                        </form>
                        <span class="wm-color">or try our socials</span>
                        <ul class="wm-login-social-media">
                            <li><a href="#"><i class="wmicon-social5"></i> Facebook</a></li>
                            <li class="wm-twitter-color"><a href="#"><i class="wmicon-social4"></i> twitter</a></li>
                            <li class="wm-googleplus-color"><a href="#"><i class="fa fa-google-plus-square"></i> Google+</a>
                            </li>
                        </ul>
                        <p>Not a member yet? <a href="#">Sign-up Now!</a></p>
                    </div>
                    <div class="wm-modallogin-form wm-register-popup">
                        <span class="wm-color">create Your Account today</span>
                        <form>
                            <ul>
                                <li> <input type="text" value="Your Username"
                                        onblur="if(this.value == '') { this.value ='Your Username'; }"
                                        onfocus="if(this.value =='Your Username') { this.value = ''; }"> </li>
                                <li> <input type="text" value="Your E-mail"
                                        onblur="if(this.value == '') { this.value ='Your E-mail'; }"
                                        onfocus="if(this.value =='Your E-mail') { this.value = ''; }"> </li>
                                <li> <input type="password" value="password"
                                        onblur="if(this.value == '') { this.value ='password'; }"
                                        onfocus="if(this.value =='password') { this.value = ''; }"> </li>
                                <li> <input type="text" value="Confirm Password"
                                        onblur="if(this.value == '') { this.value ='Confirm Password'; }"
                                        onfocus="if(this.value =='Confirm Password') { this.value = ''; }"> </li>
                                <li> <input type="submit" value="Create Account"> </li>
                            </ul>
                        </form>
                        <span class="wm-color">or signup with your socials:</span>
                        <ul class="wm-login-social-media">
                            <li><a href="#"><i class="wmicon-social5"></i> Facebook</a></li>
                            <li class="wm-twitter-color"><a href="#"><i class="wmicon-social4"></i> twitter</a></li>
                            <li class="wm-googleplus-color"><a href="#"><i class="fa fa-google-plus-square"></i> Google+</a>
                            </li>
                        </ul>
                        <p>Already a member? <a href="#">Sign-in Here!</a></p>
                    </div>

                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <!-- ModalLogin Box -->

    <!-- ModalSearch Box -->
    <div class="modal fade" id="ModalSearch" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">

                    <div class="wm-modallogin-form">
                        <span class="wm-color">Search Your KeyWord</span>
                        <form>
                            <ul>
                                <li> <input type="text" value="Keywords..."
                                        onblur="if(this.value == '') { this.value ='Keywords...'; }"
                                        onfocus="if(this.value =='Keywords...') { this.value = ''; }"> </li>
                                <li> <input type="submit" value="Search"> </li>
                            </ul>
                        </form>
                    </div>

                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <!-- ModalSearch Box -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\BT\Nam3\PHP\484_466_436_PHP\elearning\resources\views/user/class/classlist.blade.php ENDPATH**/ ?>