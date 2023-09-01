<?php $__env->startSection('title','South-Dakota-Bride | Register'); ?>
<?php $__env->startSection('content'); ?>
<section class="vendors-register-section">
    <div class="vendors-register-upper-div">
        <div class="container pb-5">
            <div class="container pt-5">
                <h3 class="Testimonials-heading text-center text-white pt-5 mt-5">Testimonials</h3>
                <div class="swiper mySwiper mt-5 mb-5">
                    <div class="swiper-wrapper">
                        <?php $__currentLoopData = $getTestimonials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="swiper-slide">
                            <div>

                            <?php if($value->image != null): ?>
                            <img src="<?php echo e(asset('storage/uploads/cms/' . $value->image)); ?>" alt="image" style="width:120px; height:120px;" class="mx-auto d-block user" alt="member" class="client-image">
                            <?php else: ?>
                            <img src="<?php echo e((!empty($Value->image))?
                                asset('storage/uploads/cms/'.$Value->image):asset('storage/uploads/No-image.jpg')); ?>"
                                style="width:120px; height:120px;" class="mx-auto d-block user" class="client-image">
                            <?php endif; ?>
                                <div class="choose-card shadow-lg mr-3 ml-3 pt-5">
                                    <div class="d-flex justify-content-start">
                                        <img src="<?php echo e(Asset('website/images/1x/inverted-commas.png')); ?>" alt="">
                                    </div>
                                    <h6 class="choose-card-heading pt-3"><?php echo e($value->title); ?></h6>
                                    <p class="choose-card-para"><?php echo Str::limit($value->content, 40); ?></p>
                                    <div class="d-flex justify-content-end">
                                        <img src="<?php echo e(asset('website/images/1x/inverted-commas1.png')); ?>" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



                    </div>

                </div>
            </div>
            <!-- ==============================================SLIDER CLOSED============================================== -->
            <div class="row">
                <div class="col-lg-12 pt-5">
                    <div class="z-index">
                        <h1 class="couple-text text-white mt-5 text-center pt-5 wow  animated bounceIn"
                            data-wow-duration="1s" data-wow-delay="0.5s">Vendors registration</h1>
                        <div class="col-lg-8 mx-auto">
                            <form class="form theme-form" id="" action="<?php echo e(route("vendor_store_Registeration")); ?>" enctype="multipart/form-data" method="post">
                                <?php echo csrf_field(); ?>
                                <div class="from mt-5">
                                    <div class="row">
                                        <div class="col-lg-6 mb-4 wow animate__delay-1s animated fadeInLeft"
                                            data-wow-duration="1s" data-wow-delay="0.5s">
                                            <input class="Artical-input" type="name" name="name" placeholder="Full Name">

                                        </div>
                                        <div class="col-lg-6 mb-4 wow animate__delay-1s animated fadeInRight"
                                            data-wow-duration="1s" data-wow-delay="0.5s">
                                            <input class="Artical-input" type="email" name="email" placeholder="Email Address">

                                        </div>
                                        <div class="col-lg-6 mb-4 wow animate__delay-1s animated fadeInLeft"
                                            data-wow-duration="1s" data-wow-delay="0.5s">
                                            <input class="Artical-input" type="text" name="company" placeholder="Company">

                                        </div>
                                        <div class="col-lg-6 mb-4 wow animate__delay-1s animated fadeInRight"
                                            data-wow-duration="1s" data-wow-delay="0.5s">

                                            <select name="bussinessCategory" type="text" class="form-select" id="validationDefault03"
                                             placeholder="Bussiness Category">
                                            <option selected disabled>Bussiness Category</option>
                                            <?php $__currentLoopData = $getServiceNames; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($value->id); ?>"><?php echo e($value->service); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                             </select>

                                        </div>
                                        <div class="col-lg-6 mb-4 wow animate__delay-1s animated fadeInLeft"
                                            data-wow-duration="1s" data-wow-delay="0.5s">
                                            <input id="phonebride" class="Artical-input" type="tel" placeholder="Phone No." name="contact"  maxlength="14"  pattern="[(][0-9]{3}[)] [0-9]{3}-[0-9]{4}">

                                        </div>

                                        <div class="col-lg-6 mb-4 wow animate__delay-1s animated fadeInRight comeForward">
                                            <select name="locations[]" id="choices-multiple-remove-button"
                                                placeholder="Location" multiple>
                                                <?php $__currentLoopData = $getLocationNames; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($value->id); ?>"><?php echo e($value->location); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>

                                        </div>
                                        <div class="col-lg-6 mb-4">
                                            <input class="Artical-input" name="password" type="password" placeholder="Password">

                                         </div>
                                         <div class="col-lg-6 mb-4">
                                            <input class="Artical-input" name="confirm_password" type="password" placeholder="Confirm Password">

                                         </div>
                                        <div class="col-lg-6 mx-auto pb-5 mt-4 reg-index wow animate__delay-1s animated bounceIn"
                                        data-wow-duration="1s" data-wow-delay="0.5s">
                                        
                                        <button type="submit" class="reg-btn-button btn">Register</button>

                                    </div>
                                        
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php echo $__env->make('website.include.copyright', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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

<?php echo $__env->make('website.navbar.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\south-dakota-bride\resources\views/website/register.blade.php ENDPATH**/ ?>