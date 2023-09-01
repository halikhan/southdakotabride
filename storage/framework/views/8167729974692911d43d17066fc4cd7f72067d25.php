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
        <h2 class="top-tabt-heading">Change Password</h2>
        <br><br>

        <form action="<?php echo e(route('user_update_password', ['id' => Auth::id()])); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Password</label>
                    <input type="password" name="password" value="<?php echo e(old('password')); ?>" class="form-control" id="inputPassword4" placeholder="Password">
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-6">
                    <label for="inputConfirmPassword4">Confirm Password</label>
                    <input type="password" name="confirm_password" value="<?php echo e(old('confirm_password')); ?>" class="form-control" id="inputConfirmPassword4" placeholder="Confirm Password">
                </div>
            </div>

            <br>
            <button type="submit" class="btn edit-submit-cstmbtn">Update Password</button>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>

<?php if($errors->any()): ?>
<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <script>toastr.error('<?php echo e($error); ?>')</script>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>

<?php if(Session::has('password_updated')): ?>
    <script>swal('Password','<?php echo e(Session::get('password_updated')); ?>','success')</script>
<?php endif; ?>

<?php if(Session::has('password_error')): ?>
    <script>swal('Password','<?php echo e(Session::get('password_error')); ?>','success')</script>
<?php endif; ?>

<?php $__env->stopPush(); ?>

<?php echo $__env->make('user-dashboard.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\south-dakota-bride\resources\views/user-dashboard/change_password.blade.php ENDPATH**/ ?>