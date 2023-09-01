<?php $__env->startSection('title','South-Dakota-Bride | Signup'); ?>
<?php $__env->startSection('content'); ?>
<style type="text/css">
    #pageloader {
  background:rgb(129 129 129 / 17%);
  display: none;
  height: 100%;
  position: fixed;
  width: 100%;
  z-index: 9999;
  top: 0;
  left: 0;
}

#pageloader img {
  left: 50%;
  /* margin-left: -32px;
          margin-top: -32px; */
  position: absolute;
  top: 50%;
  transform: translate(-50%, -50%);
  filter: grayscale(1);
}
.error{
color: red;
}
</style>
<div id="pageloader">
    <img src="<?php echo e(asset('frontend/assets/1x/Preloader.gif')); ?>" alt="processing..." />
</div>
<section class="Sign-Up-section pt-4">
    <div class="sign-up-form">
        <div class="container pb-5">
            <div class="row">
                <div class="col-lg-12 pt-5 mx-auto mt-5">
                    <div class="z-index1">
                         <h1 class="couple-text mt-5 text-center pt-3 wow  animated bounceIn" data-wow-duration="1s" data-wow-delay="0.5s">sign up</h1>
                         <div class="col-lg-11 mx-auto">
                            <form action="<?php echo e(route('client_signup')); ?>" id="regiterForm" method="POST" class="validatedForm">
                                <?php echo csrf_field(); ?>
                            <div class="from mt-5">
                                <div class="row">
                                        <input type="hidden" name="type" value="3">
                                    <div class="col-lg-6 mb-4">
                                       <input type="date" id="txt-appoint_date" name="date" class="Artical-input"  placeholder="Wedding Date" >

                                    </div>
                                    <div class="col-lg-6 mb-4">
                                       <input class="Artical-input" name="city"  placeholder="What City is Your Wedding in?">

                                    </div>
                                    <label for="" class="pb-2">Bride Info</label>
                                    <div class="col-lg-6 mb-4">
                                        <input class="Artical-input" name="bride_first_name" type="name" placeholder="First Name">

                                     </div>
                                     <div class="col-lg-6 mb-4">
                                        <input class="Artical-input" name="bride_last_name" type="name" placeholder="Last Name">

                                     </div>
                                     <div class="col-lg-6 mb-4">
                                        <input class="Artical-input" name="bride_email" type="email" placeholder="Email">

                                     </div>
                                     <div class="col-lg-6 mb-4">

                                        <input id="phonebride" class="form-control" type="tel" placeholder="Phone No." name="bride_phone"  maxlength="14"  pattern="[(][0-9]{3}[)] [0-9]{3}-[0-9]{4}">

                                     </div>
                                     <label for="" class="pb-2">groom Info</label>
                                    <div class="col-lg-6 mb-4">
                                        <input class="Artical-input" name="groom_first_name" type="name" placeholder="First Name">

                                     </div>
                                     <div class="col-lg-6 mb-4">
                                        <input class="Artical-input" name="groom_last_name" type="name" placeholder="Last Name">

                                     </div>
                                     <div class="col-lg-6 mb-4">
                                        <input class="Artical-input" name="groom_email" type="email" placeholder="Email">

                                     </div>
                                     <div class="col-lg-6 mb-4">

                                        <input id="phone13" class="form-control" type="tel" placeholder="Phone No." name="groom_phone"  maxlength="14"  pattern="[(][0-9]{3}[)] [0-9]{3}-[0-9]{4}">

                                     </div>
                                     <div class="col-lg-6 mb-4">
                                        <input class="Artical-input" name="password" type="password" placeholder="Password">

                                     </div>
                                     <div class="col-lg-6 mb-4">
                                        <input class="Artical-input" name="confirm_password" type="password" placeholder="Confirm Password">

                                     </div>

                                     <div class="mt-5">
                                        <p class="form-para pt-5">Which services are you still looking to hire or research for your wedding?(please check all that apply)</p>
                                     </div>
                                     <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                     <div class="col-lg-4">
                                        <div class="form-check mb-4">
                                            <input type="checkbox" name="services[]" value="<?php echo e($item->id); ?>" class="checkbox">

                                            <label for="" class="pb-2 pr-2"><?php echo e($item->service); ?></label>
                                        </div>
                                     </div>
                                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                     <div class="mt-2">
                                        <p class="form-para ">Do you wish to subscribe to our news letter and exclusive offers from our wedding vendors?</p>
                                     </div>
                                     <div class="col-lg-5">
                                        <div class="form-check mb-4">
                                            <input type="radio"  value="1" class="checkbox" name="subscribe" id="yessuffer">
                                            <label for="" class="pb-2 pr-2 " for="yessuffer">yes - sign me up</label>
                                        </div>
                                     </div>
                                     <div class="col-lg-5">
                                        <div class="form-check mb-4">
                                            <input type="radio"  value="0" class="checkbox" name="subscribe" id="yessuffer">
                                            <label for="" class="pb-2 pr-2" for="nosuffer">no thank you</label>
                                        </div>
                                     </div>
                                     <div class="col-lg-6 mx-auto pb-5 mt-3">
                                       <button type="submit" class="reg-btn-button">Register</button>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script type="text/javascript">
    $("#regiterForm").submit(function() {
    $("#pageloader").fadeIn();
    });
    </script>
     <script>
        $(document).ready(function() { 
        var dateToday = new Date();
        var month = dateToday.getMonth() + 1;
        var day = dateToday.getDate();
        var year = dateToday.getFullYear();

        if (month < 10)
            month = '0' + month.toString();
        if (day < 10)
            day = '0' + day.toString();

        var maxDate = year + '-' + month + '-' + day;
        $('#txt-appoint_date').attr('min', maxDate);
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





<?php echo $__env->make('website.navbar.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\south-dakota-bride\resources\views/website/signup.blade.php ENDPATH**/ ?>