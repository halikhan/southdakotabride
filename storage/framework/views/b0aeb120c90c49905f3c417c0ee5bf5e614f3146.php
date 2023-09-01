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
<h3>Wedding</h3>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-items'); ?>
<li class="breadcrumb-item">Wedding </li>
<li class="breadcrumb-item active">list</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<style>
    .for-ctm-height{
        max-height:200px !important;
        min-height:200px !important;
    }
    .cke_contents.cke_reset{
        max-height:200px !important;
        min-height:200px !important;
    }
</style>
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <h5>Edit</h5>
            </div>
            
                <form class="form theme-form"id="" action="<?php echo e(route("wedding_update",$edit_data->id )); ?>" enctype="multipart/form-data" method="post">
                    <?php echo csrf_field(); ?>
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label for="exampleFormControlInput10">Groom Name.*</label>
                                <input name="groom" value="<?php echo e($edit_data->groom); ?>"  class="form-control btn-square" id="exampleFormControlInput10" type="text" placeholder="Groom">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label for="exampleFormControlInput10">Bride Name.*</label>
                                <input name="bride" value="<?php echo e($edit_data->bride); ?>" class="form-control btn-square" id="exampleFormControlInput10" type="text" placeholder="Bride">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label for="exampleFormControlInput10">Location.*</label>
                                <input name="location" value="<?php echo e($edit_data->location); ?>"  class="form-control btn-square" id="exampleFormControlInput10" type="text" placeholder="location">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label for="exampleFormControlInput10">Date.*</label>
                                <input name="date" id="txt-appoint_date" value="<?php echo e($edit_data->date); ?>"  class="form-control btn-square" id="exampleFormControlInput10" type="date">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3">
                       <?php if($edit_data->image != null): ?>
                    <img src="<?php echo e(asset('storage/uploads/cms/' . $edit_data->image)); ?>" alt="image" style="width:100px; height:100px;">
                   <?php else: ?>
                   <img src="<?php echo e((!empty($edit_data->image))?
                       asset('storage/uploads/cms/'.$edit_data->image):asset('storage/uploads/No-image.jpg')); ?>" style="width:80px; height:80px;">
                   <?php endif; ?>
                </div>
               </div>
               <div class="row">
                <div class="col">
                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">Update Image.*</label>
                        <div class="col-sm-9">
                            <input name="image" class="form-control" type="file">
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                 <div class="col-md-12">
                    <?php if($getUserWeddingimages->image != null): ?>
                    <?php $__currentLoopData = json_decode($getUserWeddingimages->image); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                 <img src="<?php echo e(asset('storage/uploads/cms/' .$image)); ?>" alt="image" style="width:120px; height:80px;">
                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php else: ?>
                <img src="<?php echo e((!empty($getUserWeddingimages->image))?
                    asset('storage/uploads/cms/'.$getUserWeddingimages->image):asset('storage/uploads/No-image.jpg')); ?>" style="width:80px; height:80px;">
                <?php endif; ?>
             </div>
            </div>
            <br>
            <div class="row">
                <div class="col">
                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">Wedding Images.*</label>
                        <div class="col-sm-9">
                    <input type="file" name="wedding_image[]" class="myfrm form-control" multiple>
                        </div>
                    </div>
                </div>
            </div>
                    <div class="row">
                        <div class="col">
                            <div class="mb-3 mb-0">
                                
                                <label for="exampleFormControlTextarea14">Enter Description</label>
                                <textarea name="content"  class="ckeditor form-control btn-square" id="exampleFormControlTextarea14" rows="3"><?php echo $edit_data->content; ?></textarea>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="card-footer">
                    <button class="btn btn-primary" type="submit">Update</button>
                </div>
            </form>
        </div>
    </div>
  </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

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
<script>
    $(document).ready(function() { //DISABLED PAST DATES IN APPOINTMENT DATE
        // alert('test');
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.simple.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\south-dakota-bride\resources\views/wedding/edit.blade.php ENDPATH**/ ?>