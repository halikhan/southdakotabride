<!DOCTYPE html>
<html lang="en">

<head>
    <?php echo $__env->make('user-dashboard.layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>

<body>
    <div>
        
        <?php echo $__env->make('user-dashboard.layouts.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <section class="mt7">
            <?php echo $__env->make('user-dashboard.layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <?php echo $__env->yieldContent('content'); ?>
        </section>
        <?php echo $__env->make('user-dashboard.layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
 
    <?php echo $__env->make('user-dashboard.layouts.footer-scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\south-dakota-bride\resources\views/user-dashboard/layouts/master.blade.php ENDPATH**/ ?>