<?php $__env->startSection('title','South-Dakota-Bride | Packages'); ?>
<?php $__env->startSection('content'); ?>

 
<section class="Home-Section mt-5 pt-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="d-flex flex-row justify-content-around position-relative">
                    <div class="banner-links wow  animated fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
                        <div class="d-flex flex-column translates">
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
                    <div class="banner-photo-text pt-5">
                        <h1 class="banner-photo-text pt-5 wow  animated fadeInLeft text-center wow animated fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">packages</h1>
                        <section class="Couple-Section-weddings">
                            <div class="container pt-5">
                            <div class="row">

                                <?php $__currentLoopData = $getPackages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                <div class="col-lg-3 col-sm-6  mb-5">
                                    <label  for="p<?php echo e($value->id); ?>" class="w-100">
                                        <input type="hidden" name="package_id" id="packageId" />
                                        <input type="radio" name="package" id="p<?php echo e($value->id); ?>" hidden>
                                        <div class="card Package-card p-card">
                                            <h1 class="package-title pt-4"><?php echo e($value->title); ?></h1>
                                            <span class="package-price">$ <?php echo e($value->amount); ?></span>
                                        <div class="pt-4 pb-5">
                                            <p class="package-p">&#10004; <?php echo e($value->type); ?><p>
                                            <p class="package-p">&#10004; <?php echo e($value->deatails); ?></p>
                                            <p class="package-p">&#10004; <?php echo e($value->mid_details); ?></p>
                                        </div>
                                        <div class="pb-5 mb-5 text-center">
                                            <a  onclick="get_package('<?php echo e($value->id); ?>')" type="button" class="reg-btn-vendors-package wow bounceIn animated">Choos e Pakage</a>
                                            
                                        </div>
                                        </div>
                                    </label>
                                </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <div class="text-center pt-5 mt-5 mb-5">
                                        <a id="payment_redirect">
                                            <button class="reg-btn-vendors wow   bounceIn animated" data-wow-duration="1s" data-wow-delay="0.5s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.5s; animation-name: bounceIn;">next</button></a>
                                    </div>
                                 </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
</section>

<script>
    function get_package(package_id){
            // $("#packageId").val(package_id);
            $.ajax({
            type: 'get',
            url: '<?php echo e(route('payment')); ?>',
            data: {'id' : package_id},
            success: function(response){
                // alert(response.status)
                if(response.status == 200){
                    toastr.success('Package ('+ response.title +' '+ response.amount +') has been selected, successfully!','success');
                    $("#payment_redirect").attr("href","<?php echo e(route('pay_amount')); ?>");

                }
            },
        });

        }

        $("#payment_redirect").on("click",function(){
            console.alert("payment");
            if(!$("#payment_redirect").attr("href")){
                toastr.info('Please Select any Package first');
            }
        });

</script>
<?php $__env->stopSection(); ?>





<?php echo $__env->make('website.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\south-dakota-bride\resources\views/website/packages.blade.php ENDPATH**/ ?>