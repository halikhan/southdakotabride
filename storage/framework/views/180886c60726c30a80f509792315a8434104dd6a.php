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


        .top-tabt-heading {
            color: #d82e6b;
            font-size: 58px;
            font-family: "JA-Hand-Reg";
        }

    </style>

    <div class="for-content-tabs">
        <h2 class="top-tabt-heading">User Dashboard</h2>
        <br><br>
        <form action="#" method="POST">
            <?php echo csrf_field(); ?>
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="inputName">Groom Name</label>
                    <input type="text" name="name" value="<?php echo e(Auth::user()->name ?? ''); ?>" class="form-control"
                        id="inputAddress" placeholder="Name" readonly>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Groom Email</label>
                    <input type="email" name="email" value="<?php echo e(Auth::user()->email ?? ''); ?>" class="form-control"
                        id="inputEmail4" placeholder="Email" readonly>
                </div>

            </div>
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="inputState">Groom Phone </label>
                    <input type="text" class="form-control" name="groom_phone" value="<?php echo e(Auth::user()->groom_phone ?? ''); ?>"
                        placeholder="State" readonly>
                </div>
            <div class="form-group col-md-6">
                <label for="inputAddress">Bride Name</label>
                <input type="text" class="form-control" name="bride_name" value="<?php echo e(Auth::user()->bride_first_name ?? ''); ?>"
                    id="inputAddress" placeholder="1234 Main St" readonly>
            </div>

                <div class="form-group col-md-6">
                    <label for="inputCountry">Bride Email</label>
                    <input type="text" class="form-control" name="bride_email" value="<?php echo e(Auth::user()->bride_email ?? ''); ?>"
                        placeholder="Country" readonly>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputState">Bride Phone </label>
                    <input type="text" class="form-control" name="bride_phone" value="<?php echo e(Auth::user()->bride_phone ?? ''); ?>"
                        placeholder="State" readonly>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputCity">City</label>
                    <input type="text" class="form-control" name="city" value="<?php echo e(Auth::user()->city ?? ''); ?>" id="inputCity"
                        readonly>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputZip">Wedding date </label>
                    <input type="text" class="form-control" name="date" value="<?php echo e(Auth::user()->date ?? ''); ?>" id="inputZip"
                        readonly>
                </div>
                
            </div>
            <br>

            <div class="d-flex justify-content-end">
                <a href="<?php echo e(route('edit-user-profile')); ?>" class="btn edit-submit-cstmbtn">Edit</a>
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

<?php echo $__env->make('user-dashboard.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\south-dakota-bride\resources\views/user-dashboard/profile/userProfile.blade.php ENDPATH**/ ?>