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
    .rating i {
            color: #ebd004;
        }
        .gold_star {
            color: #ebd004 !important;
            font-size: 14px;
        }

        .rating .black_star {
            color: #2c2c2c !important;
            font-size: 14px;
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


        #customers {
        font-family: Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
        }

        #customers td, #customers th {
        border: 1px solid #ddd;
        padding: 8px;
        }

        #customers tr:nth-child(even){background-color: #f2f2f2;}

        #customers tr:hover {background-color: #ddd;}

        #customers th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: #d82e6b;
        color: white;
        }
</style>
    <div class="for-content-tabs">
        <h2 class="top-tabt-heading">Reviews List</h2>
        <br><br>

        <table id="customers">
            <tr>
            <th>#</th>
            <th>Name</th>
            <th>Review</th>
            <th>Stars</th>
            </tr>
            <?php $__currentLoopData = $getVendorRating; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=> $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($key+1); ?></td>
                <td><?php echo e($value->userName); ?></td>
                <td><?php echo e($value->review); ?></td>
                <td>
                    <?php if(!empty($value->stars_rating)): ?>
                    <?php for($i=1; $i <= 5; $i++): ?>
                    <?php if($value->stars_rating >= $i): ?>
                        <i class="fa fa-star gold_star"></i>
                    <?php else: ?>
                        <i class="fa fa-star black_star"></i>
                    <?php endif; ?>
                <?php endfor; ?>
                <?php else: ?>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <?php endif; ?>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

          </table>
          <div class="d-flex justify-content-around align-item-center mt-5 mb-5">
            <?php echo e($getVendorRating->links()); ?>

          </div>
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

<?php echo $__env->make('user-dashboard.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\south-dakota-bride\resources\views/user-dashboard/vendorProfile/review.blade.php ENDPATH**/ ?>