<?php $__env->startSection('content'); ?>
    <style>
       .show-submit-cstmbtn a{
        margin-top: 2rem;
        margin-top: 2rem;
        background-color: #d82e6b;
    font-family: "Solway-Bold";

    color: #ffffff;
        border-radius: 12px;
        padding: 8px 16px;
        font-size: 16px;
    }
    .add-submit-cstmbtn a{
        margin-top: 2rem;
        margin-top: 2rem;
        background-color: #2e61d8;
    font-family: "Solway-Bold";

    color: #ffffff;
        border-radius: 12px;
        padding: 8px 16px;
        font-size: 16px;
    }
    .edit-submit-cstmbtn a{
        margin-top: 2rem;
        margin-top: 2rem;
        background-color: #033160;
    font-family: "Solway-Bold";

    color: #ffffff;
        border-radius: 12px;
        padding: 8px 16px;
        font-size: 16px;
    }

    .delete-submit-cstmbtn a{
        margin-top: 2rem;
        margin-top: 2rem;
        background-color: #a30101;
    font-family: "Solway-Bold";

    color: #ffffff;
        border-radius: 12px;
        padding: 8px 16px;
        font-size: 16px;
    }

    /* .edit-submit-cstmbtn:hover {
        margin-top: 2rem;
        background-color: #d82e6b;
        font-family: "Solway-Bold";
        font-weight: 600;
        color: #ffffff;
    } */
        .top-tabt-heading {
            color: #d82e6b;
            font-size: 58px;
            font-family: "JA-Hand-Reg";
        }

        div.gallery {
          margin: 5px;
          border: 1px solid #ccc;
          float: left;
          width: 80px;
        }

        div.gallery:hover {
          border: 1px solid #777;
        }

        div.gallery img {
          width: 100%;
          height: auto;
        }

        div.desc {
          padding: 2px;
          text-align: center;
        }
        </style>

    <div class="for-content-tabs">
        <h2 class="top-tabt-heading">Ceremony Management</h2>
        <br><br>


                        <div class="col-md-12 add-submit-cstmbtn" align="right">
                            <a type="button" class="btn add-submit-cstmbtn" href="<?php echo e(route('user-wedding-create')); ?>">
                                 Add</a>
                        </div>

                        


                        <br><br>

                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    
                                    <th>Groom</th>
                                    <th>Bride</th>
                                    <th>Type</th>

                                    
                                    <th>Ceremony Date</th>
                                    
                                    
                                    
                                    <th style="text-align: center">Action</th>
                                </tr>
                            </thead>
                            <tbody class="table-striped">
                                <?php $__currentLoopData = $getWeddingdetails; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=> $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        


                                        <td><?php echo e($value->groom); ?></td>

                                        <td><?php echo e($value->bride); ?></td>
                                        
                                        
                                        
                                        <td>
                                            <?php if($value->ceremony == 1 ): ?>
                                                Wedding Ceremony
                                            <?php else: ?>
                                                Engagement Ceremony
                                            <?php endif; ?>
                                            </td>
                                        <td><?php echo e($value->date); ?></td>
                                        
                                        
                                        
                                        <td>
                                            <button class="btn delete-submit-cstmbtn" type="button" data-original-title="btn btn-danger btn-xs" title=""><a  href="<?php echo e(route('user_wedding_destroy', $value->slug)); ?>" id="delete">Delete</a></button>

                                            <button class="btn edit-submit-cstmbtn" type="button" data-original-title="btn btn-danger btn-xs" title=""> <a href="<?php echo e(route('user_wedding_edit', $value->slug)); ?>">Edit</a></button>
                                            
                                            <button class="btn show-submit-cstmbtn" type="button" data-original-title="btn btn-primary btn-xs" title=""> <a href="<?php echo e(route('user_wedding_show', $value->slug)); ?>">Show</a></button>
                                         </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>


                        

        
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>

    <?php if($errors->any()): ?>
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <script>
                toastr.error('<?php echo e($error); ?>')
            </script>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>

    <?php if(Session::has('user_updated')): ?>
        <script>
            swal('User Profile', '<?php echo e(Session::get('user_updated')); ?>', 'success')
        </script>
    <?php endif; ?>

    <?php if(Session::has('user_error')): ?>
        <script>
            swal('User Profile', '<?php echo e(Session::get('user_error')); ?>', 'success')
        </script>
    <?php endif; ?>

<?php $__env->stopPush(); ?>

<?php echo $__env->make('user-dashboard.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\south-dakota-bride\resources\views/user-dashboard/userWedding/index.blade.php ENDPATH**/ ?>