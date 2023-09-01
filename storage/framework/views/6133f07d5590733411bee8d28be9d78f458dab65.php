<?php $__env->startSection('content'); ?>

<style>
    .edit-submit-cstmbtn {
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
        color: #fbf7f8;
    }
    .top-tabt-heading {
        color: #d82e6b;
        font-size: 58px;
        font-family: "JA-Hand-Reg";
    }

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
        <img src="<?php echo e(asset('frontend/assets/1x/Preloader.gif')); ?>" alt="processing..." />
    </div>
    <div class="for-content-tabs">
        <h2 class="top-tabt-heading">Update Package</h2>
        <br><br>

        <div class="col-lg-8 mx-auto mt-5 text-center">
            <div class="paymentWrap d-flex justify-content-center">
                <div class="btn-group paymentBtnGroup btn-group-justified" data-toggle="buttons">

                    <input type="hidden" value="<?php echo e(csrf_token()); ?>" name="_token" id="_token" />
                    <form id="regiterForm">
                        <?php echo e(csrf_field()); ?>

                    <div class="d-flex justify-content-center mt3 mb5 wow bounceIn">
                        <div id="paypal-button-container"></div>
                    </div>
                    </form>

                </div>
            </div>

        </div>
    </div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


<script src="https://www.paypal.com/sdk/js?client-id=AZLf352Ql3-xaeiKLHFWBYgIvesPkjhm5NKx0dZEszTKHBfyeJEMK5u6SNXG0AAlJ7JDo8hMILgRR_yl&components=buttons&vault=true&intent=subscription"></script>

<script>
    var planLocalId = '<?php echo e($package->id); ?>';
    var plan_id_array = [null,'P-1YD55427BD319140BMK7AWWI','P-9PB43417RX150235TMK7AXHY','P-7HG69069LF586945GMK7AY7Q','P-40C121225K372280AMK7AZMQ'];

    paypal.Buttons({
      createSubscription: function(data, actions) {
        return actions.subscription.create({
          'plan_id': plan_id_array[planLocalId]
        });
      },
      onApprove: function(data, actions) {
            //   console.log(details);

        $.ajax({
                url: '<?php echo e(route('update_vendor_payment')); ?>',
                type: 'GET',
                data: data,
                success: function(data) {
                    $("#pageloader").fadeIn();
                    if(data.status == 200){
                        console.log(data)
                        location.href = '<?php echo e(route("vendor-dashboard")); ?>';
                        // swal({
                        //     title: "Dear User!",
                        //     text: 'You have successfully purchased the plan',
                        //     type: "success",
                        //     icon: "success",
                        // }).then(function(){
                        //     location.href = "<?php echo e(route('vendor-dashboard')); ?>";
                        // });
                    }
                    else{
                        swal({
                            title: "Dear User!",
                            text: 'Something went wrong!, Please try again',
                            type: "error",
                            icon: "error",
                        });

                    }


                }

            });
            console.log('Transaction completed');
      }
    }).render('#paypal-button-container');
  </script>



<script type="text/javascript">
    $("#regiterForm").submit(function() {
    });
    </script>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('user-dashboard.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\south-dakota-bride\resources\views/user-dashboard/vendorProfile/vednorPayment.blade.php ENDPATH**/ ?>