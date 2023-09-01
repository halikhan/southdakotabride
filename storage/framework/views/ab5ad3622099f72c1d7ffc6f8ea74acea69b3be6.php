<?php $__env->startSection('title','South-Dakota-Bride | Engagement'); ?>
<?php $__env->startSection('content'); ?>
<style>

    .card a img {
        height: 100%;
        width: 100%;
        margin-top: 1rem;
    }

    .cstm-card-height a img {

        height: 100%;
        width: 100%;

    }

</style>
<section class="Home-Section  pt-5 Gray-overlay mt-5">
    <div class="container pt-5">
        <div class="row">
            <div class="col-lg-6 overlay-image-text wow  animated fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
                <div class="d-flex flex-row justify-content-around">
                    <div>
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
                    <div class="Wed-Art-Div">
                        <div class="couple-img-wed">
                            <img src="<?php echo e(asset('storage/uploads/cms/' . $engagement_banner->image)); ?>" alt="">
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-sm-6 mb-5 overlay-image-text wow  animated fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                <h1 class="couple-text pt-5"><?php echo e($engagement_banner->title1); ?></h1>
                <h1 class="couple-text"><?php echo e($engagement_banner->title2); ?> <span><?php echo e($engagement_banner->title3); ?></span></h1>
                     <form action="<?php echo e(route('engagement')); ?>" method="GET">
                            <div>
                                <input placeholder="Engagement Date" name="search" class="textbox-n" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" id="date" />
                         
                            </div>
                            <br />
                            <div class="reg-div">
                                <a href="javascript:void(0)">
                                    <button type="submit" class="sign-btn button wow animated bounceIn animate__delay-1s" >Search</button>
                                </a>
                            </div>
                    </form>
                            <div class="d-flex align-item-center pt-4 ">
                            <div class="reg-div">
                                <a href="<?php echo e(route('register')); ?>" >
                                    <button class="reg-btn button  wow animated bounceIn animate__delay-1s">Register</button>
                                </a>
                            </div>
                        </div>
        </div>
            </div>
        </div>
    </div>
</section>
<!-- ==============================================BANNER  CLOSED============================================== -->
<!-- ==============================================COUPLE SECTION  OPEN============================================== -->
<section class="Couple-Section mt-5">
    <div class="d-flex justify-content-center">
    <div class="CstDivs container">
       <div class="row mt-5">
        <?php $__currentLoopData = $engagementCeremony; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <div class="col-lg-4 col-sm-6 mt-4 wow animate__delay-1s animated fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">

                <div class="cstm-card-height">
                    <a href="<?php echo e(route('engagement-details', $item->slug)); ?>">
                        <div class="cstm-height">
                            <img src="<?php echo e(asset('storage/uploads/cms/'.$item->image ??'')); ?>" class="card-img-top" alt="...">
                        </div>
                    </a>
                    <div class="card-body">
                      <h6 class="card-text"><?php echo e($item->groom); ?></h6>
                      <h6 class="card-text">And</h6>
                      <h6 class="card-text"><?php echo e($item->bride); ?></h6>

                    </div>
                   </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <div class="d-flex justify-content-around align-item-center mt-5 mb-5">
                <?php echo e($engagementCeremony->links()); ?>


                        
                    </div>
        </div>
       </div>
    </div>
</section>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>

<?php if($errors->any()): ?>
<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <script>toastr.error('<?php echo e($error); ?>')</script>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>

<?php if(Session::has('user_updated')): ?>
    <script>swal('User Profile','<?php echo e(Session::get('user_updated')); ?>','success')</script>
<?php endif; ?>

<?php if(Session::has('user_error')): ?>
    <script>swal('User Profile','<?php echo e(Session::get('user_error')); ?>','success')</script>
<?php endif; ?>

<?php $__env->stopPush(); ?>

<?php echo $__env->make('website.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\south-dakota-bride\resources\views/website/engagement.blade.php ENDPATH**/ ?>