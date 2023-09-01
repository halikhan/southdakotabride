@extends('website.layout.master')
@section('title','South-Dakota-Bride | Payment')
@section('content')
{{-- <?php
$data['VednorReg'] = Session::get('VednorReg');
$data['VednorLocation'] = Session::get('VednorLocation');
$data['package_id'] = Session()->get('package_id');
dd($data);
?> --}}
<style>
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
        <img src="{{asset('frontend/assets/1x/Preloader.gif') }}" alt="processing..." />
    </div>
<body class="body">
<section class="signin-section pt-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 pt-4 mx-auto">
                <h1 class="forget-password-text pt-5 text">Payment Details</h1>
                {{-- <div class="col-lg-8 mb-4 mt-5 mx-auto pt-3">
                    <input class="Artical-input" type="email" placeholder="Card Number">
                </div>
                <div class="col-lg-8 mb-4 mt-5 mx-auto pt-3">
                    <input placeholder="Expire date" class="textbox-n" type="text" onfocus="(this.type='date')"
                        onblur="(this.type='text')" id="date">
                </div>
                <div class="col-lg-8 mb-4 mt-5 mx-auto pt-3">
                    <input placeholder="CV code" class="textbox-n" type="text">
                </div> --}}
                <div class="col-lg-8 mx-auto mt-5 text-center">
                    <div class="paymentWrap d-flex justify-content-center">
                        <div class="btn-group paymentBtnGroup btn-group-justified" data-toggle="buttons">
                            {{-- <label class="btn paymentMethod">
                                <a href="javascript:void(0)">
                                    <div class="method visa"></div>
                                    <input type="radio" name="options" checked>
                                </a>
                            </label>
                            <label class="btn paymentMethod">
                                <a href="javascript:void(0)">
                                    <div class="method master-card"></div>
                                    <input type="radio" name="options">
                                </a>
                            </label>
                            <label class="btn paymentMethod">
                                <a href="javascript:void(0)">
                                    <div class="method amex"></div>
                                    <input type="radio" name="options">
                                </a>
                            </label>
                            <label class="btn paymentMethod">
                                <a href="javascript:void(0)">
                                    <div class="method vishwa"></div>
                                    <input type="radio" name="options">
                                </a>
                            </label> --}}
                            <!-- <label class="btn paymentMethod">
                                <div class="method ez-cash"></div>
                                <input type="radio" name="options">
                            </label> -->
                            <input type="hidden" value="{{ csrf_token() }}" name="_token" id="_token" />
                            <form id="regiterForm">
                                {{ csrf_field() }}
                            <div class="d-flex justify-content-center mt3 mb5 wow bounceIn">
                                <div id="paypal-button-container"></div>
                            </div>
                            </form>

                        </div>
                    </div>

                </div>
                <!-- <div class="col-lg-8 mx-auto mt-5 text-center">
                    <a href=""><button class="change-pwd"> Pay</button></a>
                 </div> -->
                {{-- <div class="col-lg-6 mx-auto mt-4 text-center">
                    <a href="javascript:void(0)"><button class="change-pwd">final Payment</button></a>
                </div> --}}
            </div>
        </div>
    </div>

</section>
</body>
<script src="https://www.paypal.com/sdk/js?client-id=test&currency=USD&intent=capture"></script>
<meta name="csrf-token" content="{{ csrf_token() }}">
<script>

  const paypalButtonsComponent = paypal.Buttons({
      // optional styling for buttons
      // https://developer.paypal.com/docs/checkout/standard/customize/buttons-style-guide/
      style: {
        color: "gold",
        shape: "rect",
        layout: "vertical"
      },

      // set up the transaction
      createOrder: (data, actions) => {
          const createOrderPayload = {
              purchase_units: [
                  {
                      amount: {
                          value:'{{ $package->amount }}'
                      }

                    }
              ]
          };

          return actions.order.create(createOrderPayload);
      },
      onApprove: (data, actions) => {
          const captureOrderHandler = (details) => {
              const payerName = details.payer.name.given_name;

            //   console.log(details);

            // const TOKEN = $("#token").val();
            $("#pageloader").fadeIn();
              $.ajax({
              method:"POST",
              url: "{{ route('store_vendor_payment') }}",
              headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
              dataType: "json",
                //   data: {data: details},
                data: {
                    data: details,
                },
              success: function(data){
                if(data.status==200){
                    console.log(data)
                    window.location.href = "{{ route('home') }}";
                    toastr.success('Successfully registred, Now you can Sign In', 'Success')
                    setTimeout(function() {
                }, 1000);
                };
                }
            });
            console.log('Transaction completed');
            };

        return actions.order.capture().then(captureOrderHandler);

        // success: function(data)
        // {
        // alert(data);
        // }

      },

      // handle unrecoverable errors
      onError: (err) => {
          console.error('An error prevented the buyer from checking out with PayPal');
      }
  });

  paypalButtonsComponent
      .render("#paypal-button-container")
      .catch((err) => {
          console.error('PayPal Buttons failed to render');
      });
    </script>
<script type="text/javascript">
    $("#regiterForm").submit(function() {
    });
    </script>
@endsection
{{-- @push('scripts')

     @endpush --}}

