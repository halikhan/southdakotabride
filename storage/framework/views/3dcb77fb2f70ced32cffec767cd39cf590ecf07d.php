<?php
$getCopyrights = App\Models\Config::all();

// dd($logo_add);
?>

<footer class="footer">
	  <div class="container-fluid">
		    <div class="row">
			      
                  <?php $__currentLoopData = $getCopyrights; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Copyright): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <div class="col-md-12 footer-copyright text-center">
                      <span><?php echo e($Copyright->email_one); ?></span>
                      <br />
                      Design & Development by<a href="https://designprosusa.com/" target="_blank"> Design Pros
                          USA</a>
                  </div>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		    </div>
	  </div>
</footer>
<?php /**PATH C:\xampp\htdocs\south-dakota-bride\resources\views/layouts/simple/footer.blade.php ENDPATH**/ ?>