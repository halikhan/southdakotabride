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
        <h2  class="top-tabt-heading">Change Profile</h2>
        <br><br>

        <form action="<?php echo e(route('user_profile_update', ['id' => Auth::id()])); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div class="row">
                <div class="form-group col-md-12">
                    <label for="inputImage">Profile Image</label>
                    <input type="file" name="image" class="form-control" id="inputImage" placeholder="Name">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputName">Groom Name</label>
                    <input type="text" name="name" value="<?php echo e(Auth::user()->name); ?>" class="form-control" id="inputAddress" placeholder="Name">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Groom Email</label>
                    <input type="email" name="groom_email" value="<?php echo e(Auth::user()->email); ?>" class="form-control" id="inputEmail4" placeholder="Email" readonly>
                </div>
            </div>
            
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="inputAddress">Groom Phone</label>
                    <input type="text" class="form-control" name="groom_phone" value="<?php echo e(Auth::user()->groom_phone == '' ? old('groom_phone') : Auth::user()->groom_phone); ?>" id="inputAddress" placeholder="Phone">
                </div>

                <div class="form-group col-md-6">
                    <label for="inputCountry">City</label>
                    <input type="text" class="form-control" name="city" value="<?php echo e(Auth::user()->city == '' ? old('city') : Auth::user()->city); ?>" placeholder="Country">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputState">Bride name</label>
                    <input type="text" class="form-control" name="bride_first_name" value="<?php echo e(Auth::user()->bride_first_name == '' ? old('bride_first_name') : Auth::user()->bride_first_name); ?>" placeholder="Bride Name">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputCity">Bride Email</label>
                    <input type="text" class="form-control" name="bride_email" value="<?php echo e(Auth::user()->bride_email == '' ? old('bride_email') : Auth::user()->bride_email); ?>" >
                </div>
                <div class="form-group col-md-6">
                    <label for="inputZip">Bride Phone</label>

                    <input id="phone12" class="form-control" type="tel" placeholder="Phone No." name="bride_phone" value="<?php echo e(Auth::user()->bride_phone ?? ''); ?>"  maxlength="14"  pattern="[(][0-9]{3}[)] [0-9]{3}-[0-9]{4}">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputZip">Wedding Date</label>
                    <input type="date" class="form-control" id="txt-appoint_date" name="date" value="<?php echo e(Auth::user()->date); ?>" id="inputZip">
                </div>
            </div>
            <br>
            <button type="submit" class="btn edit-submit-cstmbtn">Update</button>
        </form>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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
<script>
    $(document).ready(function() { //DISABLED PAST DATES IN APPOINTMENT DATE
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
<?php $__env->stopPush(); ?>

<?php echo $__env->make('user-dashboard.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\south-dakota-bride\resources\views/user-dashboard/profile/edit.blade.php ENDPATH**/ ?>