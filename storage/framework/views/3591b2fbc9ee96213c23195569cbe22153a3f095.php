<?php $__env->startSection('content'); ?>
<style>
    .edit-submit-cstmbtn {
        margin-top: 2rem;
        margin-top: 2rem;
        background-color: #d82e6b;
    font-family: "Solway-Bold";
    font-weight: 600;
    color: #ffffff;
        border-radius: 12px;
        padding: 8px 16px;
        font-size: 16px;
    }

    .edit-submit-cstmbtn:hover {
        margin-top: 2rem;
        background-color: #d82e6b;
        font-family: "Solway-Bold";
        font-weight: 600;
        color: #ffffff;
    }
    .top-tabt-heading {
        color: #d82e6b;
        font-size: 58px;
        font-family: "JA-Hand-Reg";
    }

</style>

    <div class="for-content-tabs">
        
        <h2 class="top-tabt-heading">Vendor Dashboard</h2>
        <br><br>

        <form action="" method="POST">
            <?php echo csrf_field(); ?>
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="inputName">Vendor Name</label>
                    <input type="text" name="name" value="<?php echo e(Auth::user()->name ?? ''); ?>" class="form-control"
                        id="inputAddress" placeholder="Name" readonly>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Vendor Email</label>
                    <input type="email" name="email" value="<?php echo e(Auth::user()->email ?? ''); ?>" class="form-control"
                        id="inputEmail4" placeholder="Email" readonly>
                </div>

            </div>
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="inputState">Vendor Phone </label>
                    <input type="text" class="form-control" name="contact" value="<?php echo e(Auth::user()->contact ?? ''); ?>" placeholder="State" readonly>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputState">Vendor Bussiness Category </label>
                    <input type="text" class="form-control" name="contact" value="<?php echo e($getVednorprofile['get_vednorbusinesscategory']['service']); ?>" placeholder="State" readonly>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputState">Vendor company </label>
                    <input type="text" class="form-control" name="company" value="<?php echo e(Auth::user()->company ?? ''); ?>" placeholder="State" readonly>
                </div>

            </div>
            <br>

            <div class="d-flex justify-content-end">
                <a href="<?php echo e(route('edit-vendor-profile')); ?>" class="edit-submit-cstmbtn">Edit</a>
            </div>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>

    <?php if($errors->any()): ?>
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <script>
                toastr.error('<?php echo e($error); ?>')
            </script>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>

    <?php if(Session::has('user_updated')): ?>
        <script>
            swal('User Profile', '<?php echo e(Session::get('user_updated')); ?>', 'success')
        </script>
    <?php endif; ?>

    <?php if(Session::has('user_error')): ?>
        <script>
            swal('User Profile', '<?php echo e(Session::get('user_error')); ?>', 'success')
        </script>
    <?php endif; ?>

<?php $__env->stopPush(); ?>

<?php echo $__env->make('user-dashboard.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\south-dakota-bride\resources\views/user-dashboard/vendorProfile/profile.blade.php ENDPATH**/ ?>