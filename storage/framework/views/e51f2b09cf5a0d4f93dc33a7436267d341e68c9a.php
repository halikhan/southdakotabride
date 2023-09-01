<?php $__env->startSection('content'); ?>
<style>
    .edit-submit-cstmbtn {
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
        color: #fbf7f8;
    }
    .top-tabt-heading {
        color: #d82e6b;
        font-size: 58px;
        font-family: "JA-Hand-Reg";
    }

</style>
    <div class="for-content-tabs">
        <h2 class="top-tabt-heading">Update Social Media</h2>
        <br><br>

        <form action="<?php echo e(route('vendor_social_update',$edit_data->id )); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div class="row">
                <div class="form-group col-md-12">
                    
                    <select name="type" class="form-select" size="1" hidden>
                        <option selected disabled>Select type</option>
                        <option value="1" <?php echo e(( $edit_data->type == '1') ? 'selected' : ''); ?>>Facebook</option>
                        <option value="2" <?php echo e(( $edit_data->type == '2') ? 'selected' : ''); ?>>Instagram</option>
                        <option value="3" <?php echo e(( $edit_data->type == '3') ? 'selected' : ''); ?>>Twitter</option>
                        <option value="4" <?php echo e(( $edit_data->type == '4') ? 'selected' : ''); ?>>Youtube</option>
                     </select>
            </div>
            <div class="form-group col-md-12">
                <label for="exampleFormControlInput10">Social Link.*</label>
                <input name="social_media" class="form-control btn-square" id="exampleFormControlInput10" value="<?php echo e($edit_data->social_media ?? ''); ?>"  type="text" placeholder="Social Links">
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
<?php $__env->startPush('scripts'); ?>
<script type="text/javascript">
    document.getElementById('phone12').addEventListener('input', function(e) {
        var x = e.target.value.replace(/\D/g, '').match(/(\d{0,3})(\d{0,3})(\d{0,4})/);
        e.target.value = !x[2] ? x[1] : '(' + x[1] + ') ' + x[2] + (x[3] ? '-' + x[3] : '');
    });
</script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('user-dashboard.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\south-dakota-bride\resources\views/user-dashboard/vendorProfile/social_edit.blade.php ENDPATH**/ ?>