<?php $__env->startSection('title','South-Dakota-Bride | Contact'); ?>
<?php $__env->startSection('content'); ?>
<section class="Home-Section mt-5 pt-5 Gray-overlay">
    <div class="container">
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
                    <div>
                        <div class="couple-img-wed">
                            <img src="<?php echo e(asset('storage/uploads/cms/' . $banner->image)); ?>" alt="">
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-sm-6 mb-5 overlay-image-text wow  animated fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                <h1 class="couple-text pt-5">contact us</h1>

            </div>

        </div>
    </div>
</section>
<!-- ==============================================BANNER  CLOSED============================================== -->
<!-- ===================================================Contact From ========================================== -->
<section class="contact-from">
    <div class="container">
        <div class="row">
            <div class="col-lg-2 none"></div>
            <div class="col-lg-4 pt-5 mt-5 wow  animated fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
               <div>
                <h3 class="couple-text pt-5"><?php echo e($contact_details->title); ?></h3>
                <p class="contact-para"><?php echo $contact_details->description; ?></p>
                    <div class="d-flex justify-content-between flex-column mt-5 con-inf-links">
                        <div class="d-flex mb-5">
                            <div class="p-2 "><i class="fa-solid fa-phone"></i></div>
                            <div class="p-2 "><a href="<?php echo e($contact_details->phone_number); ?>"><?php echo e($contact_details->phone_number); ?></a></div>
                        </div>
                        <div>
                            <div class="d-flex mb-5">
                                <div class="p-2"><i class="fa-solid fa-envelope"></i></div>
                                <div class="p-2"><a href="<?php echo e($contact_details->email); ?>" target="_blank"><?php echo e($contact_details->email); ?></a></div>
                            </div>
                        </div>
                        <div>
                            <div class="d-flex mb-5">
                                <div class="p-2"><i class="fa-solid fa-location-dot"></i></div>
                                <div class="p-2"><a href="https://goo.gl/maps/DKt5kZgULkunrP5MA" target="_blank"><?php echo e($contact_details->location); ?></a></div>
                            </div>
                        </div>
                    </div>
               </div>
            </div>
            <div class="col-lg-6 wow  animated fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                <h5 class="couple-text pt-5"><span>say something</span></h5>
                <form action="<?php echo e(route('contact_process')); ?>" method="POST" id="regiterForm" class="from">
                    <?php echo csrf_field(); ?>
                    <input type="name" name="name" placeholder="Name" >

                    <input type="email" name="email" placeholder="Email Address">

                    <input id="phonebride" class="Artical-input" type="tel" placeholder="Phone No." name="phone_number"  maxlength="14"  pattern="[(][0-9]{3}[)] [0-9]{3}-[0-9]{4}">
                    <textarea type="message"  name="message" id="" cols="85" rows="7" placeholder="Message"></textarea>

                    <div class="d-flex justify-content-around align-item-center mt-5 mb-5">
                        <div class="mt-5"><button type="submit" class="reg-btn wow animated bounceIn" data-wow-duration="1s" data-wow-delay="0.5s">Submit</button></div>
                       </div>
                </form>
            </div>
        </div>
    </div>

</section>
<script type="text/javascript">
    $("#regiterForm").submit(function() {
    $("#pageloader").fadeIn();
    });
    </script>
    <script type="text/javascript">
        document.getElementById('phonebride').addEventListener('input', function(e) {
            var x = e.target.value.replace(/\D/g, '').match(/(\d{0,3})(\d{0,3})(\d{0,4})/);
            e.target.value = !x[2] ? x[1] : '(' + x[1] + ') ' + x[2] + (x[3] ? '-' + x[3] : '');
        });
        document.getElementById('phone13').addEventListener('input', function(e) {
            var x = e.target.value.replace(/\D/g, '').match(/(\d{0,3})(\d{0,3})(\d{0,4})/);
            e.target.value = !x[2] ? x[1] : '(' + x[1] + ') ' + x[2] + (x[3] ? '-' + x[3] : '');
        });
    </script>
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

<?php echo $__env->make('website.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\south-dakota-bride\resources\views/website/contact_us.blade.php ENDPATH**/ ?>