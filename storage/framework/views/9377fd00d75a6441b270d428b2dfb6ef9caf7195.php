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
        <h2 class="top-tabt-heading">About Vendor</h2>
        <br><br>

        <form action="<?php echo e(route('about_vendor_profile', ['id' => Auth::id()])); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div class="row">
                <div class="form-group col-md-12">
                    <label for="exampleFormControlTextarea14">About Vendor</label>
                    <textarea name="aboutvendor" class="ckeditor form-control btn-square"   id="exampleFormControlTextarea14" rows="3"><?php echo e($getvendorabout->aboutvendor ??''); ?></textarea>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-12">
                    <label for="inputState">Vendor Stoplight</label>
                    <input type="text" class="form-control" name="stoplight" value="<?php echo e($getvendorabout->stoplight ??''); ?>"
                        placeholder="stoplight" >
                </div>

                    <div class="form-group col-md-12">
                        <label for="inputImage"> Select File</label>
                        <input type="file" name="image" class="form-control" id="inputImage" placeholder="Name">
                    </div>

                <div class="form-group col-md-12">
                    <label for="inputState">Vendor Reviews </label>
                    <input type="text" class="form-control" name="reviews" value="<?php echo e($getvendorabout->reviews ?? ''); ?>"
                        placeholder="Vendor reviews">
                </div>

                    <div class="form-group col-md-12">
                        <label for="inputImage"> Select File</label>
                        <input type="file" name="image2" class="form-control" id="inputImage" placeholder="Name">
                    </div>

            </div>

            <br>
            <button type="submit" class="btn edit-submit-cstmbtn">Update</button>
        </form>
    </div>
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

<?php echo $__env->make('user-dashboard.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\south-dakota-bride\resources\views/user-dashboard/vendorProfile/about.blade.php ENDPATH**/ ?>