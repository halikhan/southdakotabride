<?php $__env->startSection('content'); ?>
<style>
     .update-submit-cstmbtn {

        background-color: #d82e6b;
    font-family: "Solway-Bold";
    font-weight: 400;
    color: #ffffff;
        border-radius: 12px;
        /* padding: 8px 16px; */
        font-size: 16px;
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
        <h2 class="top-tabt-heading">Social List</h2>
        <br>
        <div class="row">
        <div class="col-md-10">
            </div>
            <?php if($count == 4): ?>
            <div class="col-md-2" align="right">

             </div>
            <?php else: ?>
            <div class="col-md-2" align="right">
                <a type="button"class="btn update-submit-cstmbtn" href="<?php echo e(route('vendor_social_create')); ?>"> Create </a>
             </div>
            <?php endif; ?>
        </div>
        <br>
        <table id="customers">
            <thead>
            <tr>
            <th>#</th>
            <th>Social Type</th>
            <th>Social links</th>
            <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $getVendorSociallinks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key =>$value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($key+1); ?></td>


            <td>
            <?php if($value->type == '1'): ?>
            Facebook
            <?php elseif($value->type == '2'): ?>
            Instagram
            <?php elseif($value->type == '3'): ?>
            Twitter
            <?php elseif($value->type == '4'): ?>
            Youtube
            <?php endif; ?></td>


               <td><?php echo e($value->social_media); ?></td>
               <td>  <a href="<?php echo e(route('vendor_social_edit',$value->slug)); ?>"> <button class="btn update-submit-cstmbtn" type="button" data-original-title="btn btn-danger btn-xs" title="">Update</button></a></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
          </table>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('user-dashboard.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\south-dakota-bride\resources\views/user-dashboard/vendorProfile/social.blade.php ENDPATH**/ ?>