<?php $__env->startSection('title','South-Dakota-Bride | Forget-Password'); ?>
<style type="text/css">
    #pageloader {
  background:rgb(129 129 129 / 17%);
  display: none;
  height: 50px;
  position: fixed;
  width: 50px;
  z-index: 9999;
  top: 0;
  left: 0;
}

#pageloader img {
  left: 30%;
  /* margin-left: -32px;
          margin-top: -32px; */
  position: absolute;
  top: 30%;
  transform: translate(-50%, -50%);
  filter: grayscale(1);
}
</style>
<?php $__env->startSection('content'); ?>
<body class="body">
<section class="forget-password-section pt-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 pt-4 mx-auto">
             <h1 class="forget-password-text pt-5 text wow  animated fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">forget password</h1>
                    <div class="col-lg-8 mb-4 mt-5 mx-auto pt-3  wow  animated fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
                <form method="POST" action="<?php echo e(route('forget_password_process')); ?>" id="regiterForm">
                            <?php echo csrf_field(); ?>
                    <input class="Artical-input" type="email" name="email" placeholder="Email">

                    </div>
                    <div class="col-lg-8 mx-auto mt-5 text-center">
                        <button type="submit" class="change-pwd wow  animated bounceIn">Send</button>
                    </div>
             </form>
            </div>
        </div>
    </div>
</section>
</body>
<?php $__env->stopSection(); ?>

<script type="text/javascript">
    $("#regiterForm").submit(function() {
    $("#pageloader").fadeIn();
    });
    </script>

<?php echo $__env->make('website.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\south-dakota-bride\resources\views/website/forget_password.blade.php ENDPATH**/ ?>