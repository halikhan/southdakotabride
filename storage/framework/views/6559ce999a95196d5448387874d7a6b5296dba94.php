<?php $__env->startSection('title','South-Dakota-Bride | Event-Details'); ?>
<?php $__env->startSection('content'); ?>
<section class="Home-Section mt-5 pt-5">
    <div class="container mt-5 ">
        <div class="row">

            <div class="col-lg-6 col-sm-12 wow  animated fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
                <div class="d-flex flex-row justify-content-around">
                    <div>
                        <div class="d-flex flex-column translate">
                            <div class="line-after">
                                <div class="line-after1"></div>
                            </div>
                            <div class="line-center">
                                <ul>
                                    <li><a href="<?php echo e($facebook[0]->social_media ?? ''); ?>" target="_blank"><i
                                                class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a href="<?php echo e($instagram[0]->social_media ?? ''); ?>" target="_blank"><i
                                                class="fa-brands fa-instagram"></i></a></li>
                                    <li><a href="<?php echo e($twitter[0]->social_media ?? ''); ?>" target="_blank"><i
                                                class="fa-brands fa-twitter"></i></a></li>
                                    <li><a href="<?php echo e($youtube[0]->social_media ?? ''); ?>" target="_blank"><i
                                                class="fa-brands fa-youtube"></i></a></li>
                                </ul>
                            </div>
                            <div class="line-before">
                                <div class="line-before2"></div>
                            </div>
                        </div>
                    </div>
                    <div class="Wed-Art-Div">
                        <div class="couple-img-wed">
                            <img src="<?php echo e(asset('storage/uploads/cms/' . $event_details->image)); ?>" alt="">
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-sm-12 mb-5 add-font">
                <h1 class="couple-text pt-5 wow  animated fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s"><?php echo e($event_details->title); ?></h1>
                <div class=" wow  animated fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                <p class="art-inner-para wow  animated fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s"> <?php echo $event_details->description; ?>

                </p>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- ==============================================BANNER  CLOSED============================================== -->
<!-- ==============================================google map open ============================================== -->
<section>
    <div class="container">
        <div class="row">
            <div class="contact-info ">
                <div class="col-lg-8 col-sm-8 wow  animated fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                    <div class="d-flex justify-content-around con-inf-links mt-3">
                        <div class="d-flex justify-content-start">
                            <div class="p-2"><img src="<?php echo e(asset('website/images/1x/location.png')); ?>" alt=""></div>
                            <div class="p-2"><a href="https://goo.gl/maps/DKt5kZgULkunrP5MA" target="_blank"><?php echo e($event_details->location); ?></a></div>
                        </div>

                        <div class="d-flex justify-content-start">

                            <div class="p-2"><img src="<?php echo e(asset('website/images/1x/datetime-icons.png')); ?>" alt=""></div>

                            <div>
                                <div class="pt-2"> <?php echo e($event_details->event_time); ?> <?php echo e($event_details->event_date); ?></div>
                            </div>


                        </div>

                    </div>

                </div>


            </div>
            <div class="col-lg-11 mx-auto mt-3">
                <div class="map p-3 wow  animated bounceIn">
                    <img src="<?php echo e(asset('website/images/1x/map.png')); ?>" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('website.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\south-dakota-bride\resources\views/website/event_details.blade.php ENDPATH**/ ?>