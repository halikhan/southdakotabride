<?php $__env->startSection('title','South-Dakota-Bride | Planner'); ?>
<?php $__env->startSection('content'); ?>
<section class="Home-Section mt-5 pt-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 ">
                <div class="d-flex flex-row justify-content-around">
                    <div class="banner-links wow  animated fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
                        <div class="d-flex flex-column translate">
                            <div class="line-after">
                                <div class="line-after1"></div>
                            </div>
                            <div class="line-center">
                                <ul>
                                    <li><a href="<?php echo e($facebook[0]->social_media ?? ''); ?>" target="_blank"><i class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a href="<?php echo e($instagram[0]->social_media ?? ''); ?>" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
                                    <li><a href="<?php echo e($twitter[0]->social_media ?? ''); ?>" target="_blank"><i class="fa-brands fa-twitter"></i></a></li>
                                    <li><a href="<?php echo e($youtube[0]->social_media ?? ''); ?>" target="_blank"><i class="fa-brands fa-youtube"></i></a></li>
                                </ul>
                            </div>
                            <div class="line-before">
                                <div class="line-before2"></div>
                            </div>
                        </div>
                    </div>

                    <div class="banner-photo-text wow policy-para pt-5 animated fadeInLeft add-font" data-wow-duration="1s" data-wow-delay="0.5s">
                        <h1 class="banner-photo-text pt-5"><?php echo e($pdf->title); ?></h1>
                        <p class="privacy-policy-para pt-5"><?php echo $pdf->description3; ?>

                        </p>
                        <div class="d-flex align-item-center pt-4 Home-Button">
                            <div class="reg-div">
                                <a href="<?php echo e(route('signup')); ?>">
                                    <button class="reg-btn button  wow  bounceIn animate__delay-1s" style="visibility: visible; animation-name: bounceIn;">Sign
                                        Up</button></a></div>
                            <div class="sign-div">
                                <a href="<?php echo e(asset('storage/uploads/cms/' . $pdf->pdf)); ?>" target="_blank">
                                    <button class="sign-btn button wow  bounceIn animate__delay-1s" style="visibility: visible; animation-name: bounceIn;">Pdf version </button></a></div>
                        </div>

                    </div>

                </div>

            </div>
            <div class="col-lg-10  mx-auto animated fadeInLeft add-font" >
                <h1 class="planner-photo-text pt-5 wow  animated fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s"><?php echo e($start->title); ?></h1>
                <div class=" privacy-policy-para pt-3 wow  animated fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                <p class="privacy-policy-para pt-3 wow  animated fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s"><?php echo $start->description3; ?>

                </p>
            </div>
                <h4 class="couple-text pt-5 wow  animated fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s"><a href="<?php echo e(asset('storage/uploads/cms/' . $timeline->pdf)); ?>" target="_blank"><span><?php echo e($timeline->title); ?></span></a></h4>
                <div class="privacy-policy-para pt-3 wow  animated fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
                <p class="privacy-policy-para pt-3 wow  animated fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s"><?php echo $timeline->description3; ?>

                </p>
                </div>
                <h4 class="couple-text pt-5 wow  animated fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s"><a href="<?php echo e(asset('storage/uploads/cms/' . $finance->pdf)); ?>" target="_blank"><span><?php echo e($finance->title); ?></span></a></h4>
                <div class=" privacy-policy-para pt-3 wow  animated fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s" >
                <p class="privacy-policy-para pt-3 wow  animated fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s"><?php echo $finance->description3; ?>

                </p>
                </div>
                <h4 class="couple-text pt-5 wow  animated fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s"><a href="<?php echo e(asset('storage/uploads/cms/' . $budget->pdf)); ?>" target="_blank"><span><?php echo e($budget->title); ?></span></a></h4>
                <div class=" privacy-policy-para pt-3 wow  animated fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s" >
                <p class="privacy-policy-para pt-3 wow  animated fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s"><?php echo $budget->description3; ?>

                </p>
                </div>
                <h1 class="couple-text pt-5 wow  animated fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s"><?php echo e($fun_begins->title); ?></h1>
                <div class=" privacy-policy-para pt-3 wow animated fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s" >
                <p class="privacy-policy-para pt-3 wow  animated fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s"><?php echo $fun_begins->description3; ?>

                </p>
                </div>
                <h4 class="couple-text pt-5 wow  animated fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s"><a href="<?php echo e(asset('storage/uploads/cms/' . $reception->pdf)); ?>" target="_blank"><span><?php echo e($reception->title); ?></span></a></h4>
                <div class="privacy-policy-para pt-3 wow  animated fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s" >
                <p class="privacy-policy-para pt-3 wow  animated fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s"><?php echo $reception->description3; ?>

                </p>
                </div>
                <h4 class="couple-text pt-5 wow  animated fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s"><a href="<?php echo e(asset('storage/uploads/cms/' . $ceremony->pdf)); ?>" target="_blank"><span><?php echo e($ceremony->title); ?></span></a></h4>
                <div class="privacy-policy-para pt-3 wow  animated fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s" >
                <p class="privacy-policy-para pt-3 wow  animated fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s"><?php echo $ceremony->description3; ?>

                </p>
                </div>
                <h4 class="couple-text pt-5 wow  animated fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s"><a href="<?php echo e(asset('storage/uploads/cms/' . $reception_details->pdf)); ?>" target="_blank"><span><?php echo e($reception_details ->title); ?></span></a></h4>
                <div class="privacy-policy-para pt-3 wow  animated fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s" >
                <p class="privacy-policy-para pt-3 wow  animated fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s"><?php echo $reception_details->description3; ?>

                </p>
                </div>
                <h4 class="couple-text pt-5 wow  animated fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s"><a href="<?php echo e(asset('storage/uploads/cms/' . $payment_records->pdf)); ?>" target="_blank"><span><?php echo e($payment_records->title); ?></span></a></h4>
                <div class="privacy-policy-para pt-3 wow  animated fadeInRight"  data-wow-duration="1s" data-wow-delay="0.5s">
                <p class="privacy-policy-para pt-3 wow  animated fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s"><?php echo $payment_records->description3; ?>

                </p>
                </div>
                <h4 class="couple-text pt-5 wow  animated fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s"><a href="<?php echo e(asset('storage/uploads/cms/' . $wedding_party->pdf)); ?>" target="_blank"><span><?php echo e($wedding_party->title); ?></span></a></h4>
                <div class="privacy-policy-para pt-3 wow  animated fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
                <p class="privacy-policy-para pt-3 wow  animated fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s"><?php echo $wedding_party->description3; ?>

                </p>
                </div>
                <h4 class="couple-text pt-5 wow  animated fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s"><a href="<?php echo e(asset('storage/uploads/cms/' . $wedding_day->pdf)); ?>" target="_blank"><span><?php echo e($wedding_day->title); ?></span></a></h4>
                <div class="privacy-policy-para pt-3 wow  animated fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s" >
                <p class="privacy-policy-para pt-3 wow  animated fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s"><?php echo $wedding_day->description3; ?>

                </p>
                </div>
                <h4 class="couple-text pt-5 wow  animated fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s"><a href="<?php echo e(asset('storage/uploads/cms/' . $check_list->pdf)); ?>" target="_blank"><span><?php echo e($check_list->title); ?></span></a></h4>
                <div class="privacy-policy-para pt-3 wow  animated fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
                <p class="privacy-policy-para pt-3 wow  animated fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s"><?php echo $check_list->description3; ?>

                </p>
                </div>
                <h1 class="planner-photo-text pt-5 wow  animated fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s"><?php echo e($calenders->title); ?></h1>
                <h4 class="couple-text wow  animated fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s"><span><?php echo e($calenders->title); ?></span></h4>
                <h1 class="planner-photo-text pt-5 wow  animated fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s"><?php echo e($planner_guide->title); ?></h1>
                <h4 class="couple-text wow  animated fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s"><span><?php echo e($planner_guide->title); ?></span></h4>
                <div class="wow  animated fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s" >
                <p class="privacy-policy-para pt-3 wow  animated fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s"><?php echo $planner_guide->description3; ?>

                </p>
                </div>
            </div>

        </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('website.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\south-dakota-bride\resources\views/website/planner.blade.php ENDPATH**/ ?>