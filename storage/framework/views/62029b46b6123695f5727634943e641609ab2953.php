<?php $__env->startSection('title', 'Project List'); ?>
<?php $__env->startSection('title', 'Base Inputs'); ?>

<?php $__env->startSection('css'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/vendors/animate.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/vendors/date-picker.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/vendors/dropzone.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-title'); ?>
<h3>Vendor</h3>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-items'); ?>
<li class="breadcrumb-item">Vendor </li>
<li class="breadcrumb-item active">list</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <h5>Edit</h5>
            </div>
            
                <form class="form theme-form"id="" action="<?php echo e(route("adminVendor-Update",$edit_data->id )); ?>" enctype="multipart/form-data" method="post">
                    <?php echo csrf_field(); ?>
                    <input type="hidden" value="<?php echo e($edit_data->password); ?>" name="prevpassword">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label for="exampleFormControlInput10">Name.*</label>
                                <input name="name" class="form-control btn-square" id="exampleFormControlInput10" type="text" value="<?php echo e($edit_data->name); ?>" placeholder="Name">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label for="exampleFormControlInput10">Bussiness Category.*</label>
                                <select name="bussinessCategory" class="form-select" size="1">
                                    <option selected disabled>Bussiness Category</option>
                                    <?php $__currentLoopData = $getServiceNames; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($value->id); ?>" <?php echo e($value->id == $edit_data->bussinessCategory ? 'selected' : ''); ?>><?php echo e($value->service); ?></option>
                                    
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                 </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label for="exampleFormControlInput10">Email.*</label>
                                <input name="email" class="form-control btn-square"  value="<?php echo e($edit_data->email); ?>" id="exampleFormControlInput10" type="text" placeholder="Email">

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <?php if($edit_data->image != null): ?>
                         <img src="<?php echo e(asset('storage/uploads/cms/' . $edit_data->image)); ?>" alt="image" style="width:120px; height:80px;">
                        <?php else: ?>
                        <img src="<?php echo e((!empty($edit_data->image))?
                            asset('storage/uploads/cms/'.$edit_data->image):asset('storage/uploads/No-image.jpg')); ?>" style="width:80px; height:80px;">
                        <?php endif; ?>
                     </div>
                        <div class="col-md-12">
                            <div class="mb-3 row">
                                <label class="col-sm-3 col-form-label">Upload File</label>
                                <div class="col-sm-9">
                                    <input name="image" id="image" class="form-control" type="file">
                                </div>

                            </div>

                        </div>
                 </div>
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label for="exampleFormControlInput10">Password.*</label>
                                <input name="password" class="form-control btn-square" value="" id="exampleFormControlInput10" type="password" placeholder="Password">

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label for="exampleFormControlInput10">Confirm Password.*</label>
                                <input name="confirm_password" class="form-control btn-square" value="" id="exampleFormControlInput10" type="password" placeholder="Confirm Password">

                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button class="btn btn-primary" type="submit">update</button>
                </div>
            </form>
        </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<script src="<?php echo e(asset('assets/js/datepicker/date-picker/datepicker.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/datepicker/date-picker/datepicker.en.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/datepicker/date-picker/datepicker.custom.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/dropzone/dropzone.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/dropzone/dropzone-script.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/typeahead/handlebars.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/typeahead/typeahead.bundle.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/typeahead/typeahead.custom.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/typeahead-search/handlebars.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/typeahead-search/typeahead-custom.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.simple.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\south-dakota-bride\resources\views/adminVendor/edit.blade.php ENDPATH**/ ?>