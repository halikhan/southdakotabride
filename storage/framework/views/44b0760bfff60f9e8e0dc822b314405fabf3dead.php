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
<h3>Event Management</h3>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-items'); ?>
<li class="breadcrumb-item">Event </li>
<li class="breadcrumb-item active">Details</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <h5>Edit</h5>

            </div>
            
                <form class="form theme-form"id="" action="<?php echo e(route("eventUpdate",$edit_data->id)); ?>" enctype="multipart/form-data" method="post">
                    <?php echo csrf_field(); ?>
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label for="exampleFormControlInput10">Event Title.*</label>
                                <input name="title" class="form-control btn-square" id="exampleFormControlInput10" value="<?php echo e($edit_data->title); ?>" type="text" placeholder="Event Title">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label for="exampleFormControlInput10">Event Date.*</label>
                                <input name="event_date" class="form-control btn-square txt-appoint_date" id="exampleFormControlInput10" id="" value="<?php echo e($edit_data->event_date); ?>" type="date" placeholder="Event Date">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label for="exampleFormControlInput10">Event Time .*</label>
                                <input name="event_time" class="form-control btn-square" id="exampleFormControlInput10" value="<?php echo e($edit_data->event_time); ?>" type="time" placeholder="Event Time ">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label for="exampleFormControlInput10">Location.*</label>
                                <input name="location" class="form-control btn-square" id="exampleFormControlInput10" value="<?php echo e($edit_data->location); ?>" type="text" placeholder="Location">
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
                            <div class="mb-3 mb-0">
                                
                                <label for="exampleFormControlTextarea14">Enter Description</label>
                                <textarea name="description" class="ckeditor form-control btn-square" id="exampleFormControlTextarea14" rows="3"><?php echo e($edit_data->description); ?></textarea>

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

<script type="text/javascript">
    $(document).ready(function(){
      $('#image').change(function(e){
        var reader = new FileReader();
        reader.onload = function(e){
          $('#showImage').attr('src',e.target.result);
        }
        reader.readAsDataURL(e.target.files['0']);
      });
    });
  </script>

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
    $('.txt-appoint_date').attr('min', maxDate);
    });

</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.simple.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\south-dakota-bride\resources\views/event/edit.blade.php ENDPATH**/ ?>