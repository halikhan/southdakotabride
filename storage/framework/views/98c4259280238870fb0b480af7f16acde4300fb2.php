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
<?php
$getservice = new App\Models\service;
$getvendor = new App\Models\User;
// dd($getvendor);
?>

<style>
   .for-ctm-height{
    max-height:200px !important;
    min-height:200px !important;
}
.cke_contents.cke_reset{
    max-height:200px !important;
    min-height:200px !important;
}
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


.mySlides {display: none}
img {
    vertical-align: middle;
    height: 100%;
  width: 100%;

}

/* Slideshow container */
.slideshow-container {
  max-width: 600px;
  position: relative;
  margin: auto;

}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 1.5s;
}

@keyframes  fade {
  from {opacity: .4}
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media  only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}
</style>
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <h5>Show</h5>
            </div>

                <div class="card-body">


                        <div class="slideshow-container">
                            <?php if($getUserWeddingimages): ?>
                            <?php $__currentLoopData = json_decode($getUserWeddingimages->image); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="mySlides">
                                <img src="<?php echo e(asset('storage/uploads/cms/'.$image)); ?>" width="300px;" height="200px;">
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php else: ?>
                                <div class="mySlides">
                                    <img src="<?php echo e((!empty($image))?
                                        asset('storage/uploads/cms/'.$image):asset('storage/uploads/No-gallery.png')); ?>">
                                </div>

                            <?php endif; ?>
                            <a class="prev" onclick="plusSlides(-1)">❮</a>
                            <a class="next" onclick="plusSlides(1)">❯</a>

                            </div>
                            <br>

                            <div style="text-align:center">
                              <span class="dot" onclick="currentSlide(1)"></span>
                              <span class="dot" onclick="currentSlide(2)"></span>
                              <span class="dot" onclick="currentSlide(3)"></span>
                            </div>

                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label for="exampleFormControlInput10">Groom Name.*</label>
                                <input name="groom" value="<?php echo e($edit_data->groom); ?>"  class="form-control btn-square" id="exampleFormControlInput10" type="text" placeholder="Groom" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label for="exampleFormControlInput10">Bride Name.*</label>
                                <input name="bride" value="<?php echo e($edit_data->bride); ?>" class="form-control btn-square" id="exampleFormControlInput10" type="text" placeholder="Bride" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label for="exampleFormControlInput10">Location.*</label>
                                <input name="location" value="<?php echo e($edit_data->location); ?>"  class="form-control btn-square" id="exampleFormControlInput10" type="text" placeholder="location" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label for="exampleFormControlInput10">Date.*</label>
                                <input name="date" value="<?php echo e($edit_data->date); ?>"  class="form-control btn-square" id="exampleFormControlInput10" type="date" readonly>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col">
                            <div class="mb-3 mb-0">
                                
                                <label for="exampleFormControlTextarea14">Enter Description</label>
                                <textarea name="content" readonly class="form-control btn-square" id="exampleFormControlTextarea14" rows="3"><?php echo strip_tags($edit_data->content); ?></textarea>

                            </div>
                        </div>
                    </div>

                </div>

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
<script>
    let slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
      showSlides(slideIndex += n);
    }

    function currentSlide(n) {
      showSlides(slideIndex = n);
    }

    function showSlides(n) {
      let i;
      let slides = document.getElementsByClassName("mySlides");
      let dots = document.getElementsByClassName("dot");
      if (n > slides.length) {slideIndex = 1}
      if (n < 1) {slideIndex = slides.length}
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex-1].style.display = "block";
      dots[slideIndex-1].className += " active";
    }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.simple.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\south-dakota-bride\resources\views/wedding/show.blade.php ENDPATH**/ ?>