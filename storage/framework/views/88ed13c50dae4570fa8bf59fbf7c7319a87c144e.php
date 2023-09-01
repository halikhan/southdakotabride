<?php $__env->startSection('title', 'Project List'); ?>

<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/vendors/datatables.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/vendors/owlcarousel.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/vendors/rating.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-title'); ?>
    <h3>Vendors</h3>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-items'); ?>
    <li class="breadcrumb-item">Vendors </li>
    <li class="breadcrumb-item active">list </li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<style type="text/css">
    #pageloader {
  background:rgb(129 129 129 / 17%);
  display: none;
  height: 100%;
  position: fixed;
  width: 100%;
  z-index: 9999;
  top: 0;
  left: 0;
}

#pageloader img {
  left: 50%;
  /* margin-left: -32px;
          margin-top: -32px; */
  position: absolute;
  top: 50%;
  transform: translate(-50%, -50%);
  filter: grayscale(1);
}
</style>
<div id="pageloader">
    <img src="<?php echo e(asset('frontend/assets/1x/Preloader.gif')); ?>" alt="processing..." width="30%" height="60%"/>
</div>
    <div class="container-fluid">
        <div class="row">
            <!-- Individual column searching (text inputs) Starts -->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-8">
                                <h5>Vendors list</h5>
                            </div>
                            <div class="col-md-4" align="right">
                                <a type="button" class="btn btn-primary" href="<?php echo e(route('adminVendor-Create')); ?>">
                                     Add</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive product-table">
                            <table class="display" id="basic-1">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Bussiness Category</th>
                                        <th>Email</th>
                                        <th>Status</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $getCMS; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($key+1); ?></td>
                                            <td><?php echo e($value->name); ?></td>
                                            <td><?php echo e($value->get_vednorbusinesscategory->service ?? ''); ?></td>
                                            <td><?php echo e($value->email); ?></td>

                                            <td><a href="<?php echo e(route('vendor_status', ['id' => $value->id])); ?>">
                                                <?php if($value->status == 1): ?>
                                                    <button class="btn btn-info btn-sm regiterForm"><i class="fa fa-thumbs-up"></i></button>
                                                <?php else: ?>
                                                    <button class="btn btn-danger btn-sm regiterForm"><i class="fa fa-thumbs-down"></i></button>
                                                <?php endif; ?>
                                            </a></td>
                                            <td>
                                                <?php if($value->image != null): ?>
                                                <img src="<?php echo e(asset('storage/uploads/cms/' . $value->image)); ?>" alt="image" style="width:40%;">
                                                <?php else: ?>
                                                <img src="<?php echo e((!empty($Value->image))?
                                                    asset('storage/uploads/cms/'.$Value->image):asset('storage/uploads/No-image.jpg')); ?>"
                                                   style="width:40%;">
                                                <?php endif; ?>
                                            </td>
                                            <td>
                                                <a  href="<?php echo e(route('adminVendor-destroy', $value->slug)); ?>" id="delete"><button class="btn btn-danger btn-xs for-font-color" type="button" data-original-title="btn btn-danger btn-xs" title="">Delete</button></a>
                                                <a href="<?php echo e(route('adminVendor-Edit', $value->slug)); ?>"> <button class="btn btn-success btn-xs for-font-color" type="button" data-original-title="btn btn-danger btn-xs" title=""> Edit</button></a>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Individual column searching (text inputs) Ends-->
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <script src="<?php echo e(asset('assets/js/datatable/datatables/jquery.dataTables.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/rating/jquery.barrating.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/rating/rating-script.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/owlcarousel/owl.carousel.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/ecommerce.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/product-list-custom.js')); ?>"></script>

    <script type="text/javascript">
        $("#regiterForm").on('click',function() {
             $("#pageloader").fadeIn();
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.simple.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\south-dakota-bride\resources\views/adminVendor/index.blade.php ENDPATH**/ ?>