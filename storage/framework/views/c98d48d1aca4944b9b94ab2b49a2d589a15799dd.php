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
<h3>Page</h3>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-items'); ?>
<li class="breadcrumb-item">Page </li>
<li class="breadcrumb-item active">list</li>
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
            
                <form class="form theme-form"id="" action="<?php echo e(route("PageContent_update",$edit_data->id)); ?>" enctype="multipart/form-data" method="post">
                    <?php echo csrf_field(); ?>
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">

                                 
                                 <input  name="page" readonly value="<?php echo e($edit_data->page); ?>" class="form-control btn-square" id="exampleFormControlInput10" type="hidden" placeholder="Title" required>
                                
                            </div>
                        </div>
                    </div>
                    <?php if($edit_data->id == '3' || '5' && $edit_data->id !='1' &&  $edit_data->id !='6'  ): ?>
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label for="exampleFormControlInput10">Title </label>
                                <input name="title" value="<?php echo e($edit_data->title); ?>" class="form-control btn-square" id="exampleFormControlInput10" type="text" placeholder="Title" required>
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>
                    <?php if($edit_data->id != '3' && $edit_data->id !='5' &&  $edit_data->id !='7' &&  $edit_data->id !='8' &&  $edit_data->id !='9' &&  $edit_data->id !='10' &&  $edit_data->id !='11' &&  $edit_data->id !='12'&&  $edit_data->id !='13'
                   &&  $edit_data->id != '17' &&  $edit_data->id != '18' &&  $edit_data->id != '19' &&  $edit_data->id != '20' &&  $edit_data->id != '21' &&  $edit_data->id != '22'&&  $edit_data->id != '23'&&  $edit_data->id != '24'
                   &&  $edit_data->id != '25'&&  $edit_data->id != '26'&&  $edit_data->id != '27'&&  $edit_data->id != '28' && $edit_data->id != '29' &&  $edit_data->id != '30' && $edit_data->id != '31' && $edit_data->id != '32'  && $edit_data->id != '33'&& $edit_data->id != '34'
                    ): ?>
                    <?php if($edit_data->id != '4'): ?>
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label for="exampleFormControlInput10">Title 1</label>
                                <input name="title1" value="<?php echo e($edit_data->title1); ?>" class="form-control btn-square" id="exampleFormControlInput10" type="text" placeholder="Title" required >
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label for="exampleFormControlInput10">Title 2</label>
                                <input name="title2" value="<?php echo e($edit_data->title2); ?>" class="form-control btn-square" id="exampleFormControlInput10" type="text" placeholder="Title" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label for="exampleFormControlInput10">Title 3</label>
                                <input name="title3" value="<?php echo e($edit_data->title3); ?>" class="form-control btn-square" id="exampleFormControlInput10" type="text" placeholder="Title" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label for="exampleFormControlInput10">Title 4</label>
                                <input name="title4" value="<?php echo e($edit_data->title4); ?>" class="form-control btn-square" id="exampleFormControlInput10" type="text" placeholder="Title" required>

                            </div>
                        </div>
                    </div>
                    <?php endif; ?>
                    <?php endif; ?>
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label for="exampleFormControlInput10">Section Name.*</label>
                                <input name="section_name" class="form-control btn-square" value="<?php echo e($edit_data->section_name); ?>" id="exampleFormControlInput10" type="text" placeholder="Section Name" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <?php if($edit_data->image != null): ?>
                         <img src="<?php echo e(asset('storage/uploads/cms/' . $edit_data->image)); ?>" alt="image" style="width:100px; height:80px;">
                        <?php else: ?>
                        <img src="<?php echo e((!empty($edit_data->image))?
                            asset('storage/uploads/cms/'.$edit_data->image):asset('storage/uploads/No-image.jpg')); ?>" style="width:100px; height:80px;">
                        <?php endif; ?>
                     </div>
                     <?php if($edit_data->id != '1' && $edit_data->id !='3' &&  $edit_data->id !='4' &&  $edit_data->id !='5' && $edit_data->id != '6' && $edit_data->id !='7' &&
                     $edit_data->id !='8' &&  $edit_data->id !='9' &&  $edit_data->id !='10' &&  $edit_data->id !='11' &&  $edit_data->id !='12'  &&  $edit_data->id !='13' && $edit_data->id !='30' && $edit_data->id !='31'  && $edit_data->id !='33'   && $edit_data->id !='34'): ?>
                     <div class="col-md-12">
                        <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Upload PDF</label>
                            <div class="col-sm-9">
                                <input name="pdf" id="pdf" class="form-control" type="file">
                                <div class="row justify-content-center">
                                    <object data="your_url_to_pdf" type="application/pdf">
                                        <iframe src="<?php echo e(asset('storage/uploads/cms/' .$edit_data->pdf)); ?>"></iframe>
                                    </object>
                                </div>

                            </div>
                        </div>
                    </div>
                     <?php elseif($edit_data->id !='10' && $edit_data->id !='12' && $edit_data->id !='30' && $edit_data->id !='31'): ?>
                        <div class="col-md-12">
                            <div class="mb-3 row">
                                <label class="col-sm-3 col-form-label"> Image</label>
                                <div class="col-sm-9">
                                    <input name="image" id="image" class="form-control" type="file">
                                </div>
                            </div>
                        </div>
                        <?php endif; ?>
                        </div>
                     <?php if($edit_data->id == '3'): ?>

                        <div class="row">
                            <div class="col-md-12">
                                <?php if($edit_data->image2 != null): ?>
                            <img src="<?php echo e(asset('storage/uploads/cms/' .$edit_data->image2)); ?>" alt="image" style="width:100px; height:80px;">
                            <?php else: ?>
                            <img src="<?php echo e((!empty($edit_data->image2))?
                                asset('storage/uploads/cms/'.$edit_data->image2):asset('storage/uploads/No-image.jpg')); ?>" style="width:100px; height:80px;">
                            <?php endif; ?>
                        </div>
                            <div class="col-md-12">
                                <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label">Upload File</label>
                                    <div class="col-sm-9">
                                        <input name="image2" id="image" class="form-control" type="file">
                                    </div>
                                </div>
                            </div>
                            </div>
                        <?php endif; ?>
                        <?php if($edit_data->id == '3' ): ?>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3 mb-0">
                                        <label for="exampleFormControlTextarea14">Enter Short Description</label>
                                        <textarea value="" name="content" class="ckeditor form-control btn-square" id="exampleFormControlTextarea14" rows="3" required><?php echo e($edit_data->content); ?></textarea>

                                    </div>
                                </div>
                            </div>
                         <?php endif; ?>
                 <?php if( $edit_data->id != '1'  && $edit_data->id != '3' && $edit_data->id != '4' && $edit_data->id != '5'  && $edit_data->id != '6'  && $edit_data->id != '7'  && $edit_data->id != '8'  && $edit_data->id != '9' && $edit_data->id != '10'
                   && $edit_data->id != '11'  && $edit_data->id != '12'  && $edit_data->id != '13'  && $edit_data->id != '17'  && $edit_data->id != '18'  && $edit_data->id != '20'  && $edit_data->id != '21'  && $edit_data->id != '22'  && $edit_data->id != '23'
                   && $edit_data->id != '24'  && $edit_data->id != '26'  && $edit_data->id != '27'  && $edit_data->id != '28'  && $edit_data->id != '29' && $edit_data->id !='30' && $edit_data->id !='31' &&  $edit_data->id !='32' && $edit_data->id != '33'  && $edit_data->id != '34' && $edit_data->id != '25'): ?>
                    <div class="row">
                        <div class="col">
                            <div class="mb-3 mb-0">
                                
                                <label for="exampleFormControlTextarea14">Enter Description</label>
                                <textarea name="description2" class="ckeditor form-control btn-square" id="exampleFormControlTextarea14" rows="3" required><?php echo e($edit_data->description2); ?></textarea>

                            </div>
                        </div>
                    </div>
                    <?php endif; ?>

                    <?php if($edit_data->id !='13' && $edit_data->id !='3' && $edit_data->id !='30'  ): ?>
                        <div class="row">
                            <div class="col">
                                <div class="mb-3 mb-0">
                                    
                                    <?php if($edit_data->id != '1' && $edit_data->id != '4' && $edit_data->id != '5' &&  $edit_data->id != '6'  && $edit_data->id != '8' && $edit_data->id != '9' ): ?>
                                    <label for="exampleFormControlTextarea14">Enter Description</label>
                                    <textarea name="description3" class="ckeditor form-control btn-square" id="exampleFormControlTextarea14" rows="3" required><?php echo e($edit_data->description3); ?></textarea>

                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>

                </div>
                <div class="card-footer" id="submit">
                    <button class="btn btn-primary" name="submit" type="submit">Update</button>
                    
                </div>
            </form>
        </div>
    </div>
  </div>
</div>

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
    editor.on( 'required', function( evt ) {
        editor.showNotification( 'This field is required.', 'warning' );
        evt.cancel();
    } );
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.simple.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\south-dakota-bride\resources\views/pagecontent/edit.blade.php ENDPATH**/ ?>