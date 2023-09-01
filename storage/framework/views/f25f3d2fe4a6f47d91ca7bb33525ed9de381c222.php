<?php $__env->startSection('title','South-Dakota-Bride | Engagegement-Details'); ?>
<?php $__env->startSection('content'); ?>
<style>
    .card a {
        height: 340px;
        margin-top: 1rem;
    }

    .card a img {
        height: 100%;
        width: 100%;
        margin-top: 1rem;
    }

    .cstm-card-height img {

        width: 50%;
        height: 50%;

    }

    .swiper {
        width: 100%;
        height: 100%;
    }

    .swiper-slide {
        text-align: center;
        font-size: 18px;
        background: #fff;

        /* Center slide text vertically */
        display: -webkit-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-justify-content: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        -webkit-align-items: center;
        align-items: center;
    }


    .swiper-slide img {
            /* margin-top: 5rem; */
            display: block;
            width: 100%;
            height: 100px;
            /* object-fit: center; */
        }
        .weds-banner-img.for-fit-to-content img{
            object-fit: none !important;
            object-position: top;
        }
</style>
<section class="mt-5 pt-5 pb-5 image-change">
    <div class="container  CstDivs mt-5">
        <div class="row">
            <div class="col-lg-6 wow  animated fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
                <div class="weds-banner-img for-fit-to-content" id="featured_img">
                    <img src="<?php echo e(asset('storage/uploads/cms/'.$details->image)); ?>" alt="" id="img">
                </div>
            </div>
            <div class="col-lg-6 wow  animated fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                <h1 class="weds-text pt-3"><?php echo e($details->groom); ?></h1>
                <h1 class="weds-text">and</h1>
                <h1 class="weds-text"><?php echo e($details->bride); ?></h1>
                <p class="weds-para pt-3"><?php echo e($details->location); ?></p>
                <h4 class="weds-text pt-3">the day we said yes</h4>
                
                <p class="weds-para pt-3"><?php echo e($details->date); ?></p>
                <h4 class="weds-text pt-3">our love story</h4>
                <p class="weds-para-p pt-5 pb-2"><?php echo $details->content; ?>

                </p>
                <div class="d-flex justify-content-around mt-5" id="thumb_img">

                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            <?php if($engagement): ?>
                                <?php $__currentLoopData = json_decode($engagement->image ?? ''); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="swiper-slide">
                                        <img class="active" src="<?php echo e(!empty($image)
                                            ? asset('storage/uploads/cms/' . $image)
                                            : asset('storage/uploads/No-image.jpg')); ?>"
                                            onclick="changeimg('<?php echo e(asset('storage/uploads/cms/' . $image)); ?>',this)">
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php else: ?>
                                <div class="swiper-slide">
                                    <img src="<?php echo e(asset('storage/uploads/No-image.jpg')); ?>"
                                        onclick="changeimg('<?php echo e(asset('storage/uploads/No-image.jpg')); ?>',this)">
                                </div>
                                <div class="swiper-slide">
                                    <img src="<?php echo e(asset('storage/uploads/No-image.jpg')); ?>"
                                        onclick="changeimg('<?php echo e(asset('storage/uploads/No-image.jpg')); ?>',this)">
                                </div>
                                <div class="swiper-slide">
                                    <img src="<?php echo e(asset('storage/uploads/No-image.jpg')); ?>"
                                        onclick="changeimg('<?php echo e(asset('storage/uploads/No-image.jpg')); ?>',this)">
                                </div>
                            <?php endif; ?>
                            

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>

</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('website.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\south-dakota-bride\resources\views/website/engagement_details.blade.php ENDPATH**/ ?>