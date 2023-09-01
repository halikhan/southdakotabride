<?php
$logo_add = App\Models\LogoManager::where('title','favicon')->first();
$logo_main = App\Models\LogoManager::where('title','logo')->first();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="icon" href="<?php echo e((!empty($logo_add->image))?
        asset('storage/uploads/logo/'.$logo_add->image):asset('storage/uploads/No-image.jpg')); ?>" style="width:10px; height:10px;" type="image/x-icon">
    <link rel="shortcut icon" href="<?php echo e((!empty($logo_add->image))?
        asset('storage/uploads/logo/'.$logo_add->image):asset('storage/uploads/No-image.jpg')); ?>" style="width:10px; height:10px;" type="image/x-icon">
    <!-- Bootstrap 5 -->
    <link rel="stylesheet" href="<?php echo e(asset('website/css/bootstrap.min.css')); ?>" />
    <!-- Font Awesome 6 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- SWIPER SLIDER CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('website/css/swiper-bundle.css')); ?>" />
    <!-- Butter JS -->
    <link rel="stylesheet" href="<?php echo e(asset('website/css/butter.css')); ?>">
    <!--WOW JS  -->
    <link rel="stylesheet" href="<?php echo e(asset('website/css/wow.css')); ?>">
    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('website/css/stylesheet.css')); ?>">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css"  />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <title><?php echo $__env->yieldContent('title'); ?></title>
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
.error{
    color: red;
}
.logo {
    padding: 0px !important;
}
header.header {
   padding: 12px !important;
}
</style>
<script>
    toastr.options = {
        "positionClass": "toast-top-right",
        "showDuration": "9000",
        "hideDuration": "9000",
        "timeOut": "9000",
        "extendedTimeOut": "9000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    };
</script>
    <div id="pageloader">
      <img src="<?php echo e(asset('frontend/assets/1x/Preloader.gif')); ?>" alt="processing..." />
  </div>
</head>
<body>
 <!--Header open--->
    <!-- ==============================================HEADER OPEN=========================================== -->
    <header class="header" id="navbar-fixed-top">
        <div class="container">
            <nav class="destop-nav-bar">
                <div class="d-flex justify-content-between">
                    <div class="logo">

                        <a href="<?php echo e(route('home')); ?>"> <img src="<?php echo e((!empty($logo_main->image))?
                            asset('storage/uploads/logo/'.$logo_main->image):asset('storage/uploads/No-image.jpg')); ?>"
                            style="width:120px; height:80px;" alt="">
                        </a>
                    </div>
                    <div class="link">
                        <div class="d-flex justify-content-center">

                            <a class="<?php echo e(Request::is('/') ? 'active' : ''); ?>" href="<?php echo e(route('home')); ?>" class="header_links active">Home</a>
                            <a class="<?php echo e(Request::is('wedding') ? 'active' : ''); ?>" href="<?php echo e(route('wedding')); ?>" class="header_links">Weddings</a>
                            <a class="<?php echo e(Request::is('engagement') ? 'active' : ''); ?>" href="<?php echo e(route('engagement')); ?>" class="header_links">Engagements</a>
                            <a class="<?php echo e(Request::is('popular_vendors') ? 'active' : ''); ?>" href="<?php echo e(route('popular_vendors')); ?>" class="header_links">Vendors</a>
                            <a class="<?php echo e(Request::is('planners') ? 'active' : ''); ?>" href="<?php echo e(route('planners')); ?>" class="header_links">Planner</a>
                            <a  class="<?php echo e(Request::is('blog') ? 'active' : ''); ?>" href="<?php echo e(route('blog')); ?>" class="header_links">Blog</a>
                            <a  class="<?php echo e(Request::is('events') ? 'active' : ''); ?>" href="<?php echo e(route('events')); ?>" class="header_links">Events</a>

                            <?php if(Auth::check() && Auth::user()->type == 3): ?>
                            <a  class="<?php echo e(Request::is('user-dashboard') ? 'active' : ''); ?>"   href="<?php echo e(route('user-dashboard')); ?>" class="header_links">My Account</a>

                            <?php elseif(Auth::check() && Auth::user()->type == 2): ?>
                            <a  class="<?php echo e(Request::is('vendor-dashboard') ? 'active' : ''); ?>"   href="<?php echo e(route('vendor-dashboard')); ?>" class="header_links">My Account</a>
                            <?php endif; ?>
                            <a  class="<?php echo e(Request::is('user-logout') ? 'active' : ''); ?> link_header"   href="<?php echo e(route('user-logout')); ?>" class="header_links">Log
                                Out</a>

                            

                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <!-- moblie navbar -->
        <div id="main-content">
            <div id="title"><a href="<?php echo e(route('home')); ?>">
                <img src="<?php echo e((!empty($logo_main->image))?
                    asset('storage/uploads/logo/'.$logo_main->image):asset('storage/uploads/No-image.jpg')); ?>"
                    style="width:120px; height:80px;" alt="">
            </a></div>
        </div>
        <div id="btn" class="">
            <div id="top"></div>
            <div id="middle"></div>
            <div id="bottom"></div>
        </div>
        <div id="box" class="">
            <div id="items">
                <div class="imglogo"><img src="<?php echo e(asset('website/images/SVG/logo.svg')); ?>" alt=""></div>
                <div class="item"><a class="<?php echo e(Request::is('home') ? 'active' : ''); ?>" href="<?php echo e(route('home')); ?>" class="header_links active">Home</a></div>
                <div class="item"><a class="<?php echo e(Request::is('wedding') ? 'active' : ''); ?>" href="<?php echo e(route('wedding')); ?>" class="header_links">Weddings</a></div>
                <div class="item"><a class="<?php echo e(Request::is('engagement') ? 'active' : ''); ?>" href="<?php echo e(route('engagement')); ?>" class="header_links">Engagements</a>
                </div>
                <div class="item"><a  class="<?php echo e(Request::is('popular_vendors') ? 'active' : ''); ?>" href="<?php echo e(route('popular_vendors')); ?>" class="header_links">vendors</a>
                </div>
                <div class="item"><a class="<?php echo e(Request::is('planners') ? 'active' : ''); ?>" href="<?php echo e(route('planners')); ?>" class="header_links">Planner</a></div>
                <div class="item"><a class="<?php echo e(Request::is('blog') ? 'active' : ''); ?>" href="<?php echo e(route('blog')); ?>" class="header_links">Blog</a></div>
                <div class="item"><a class="<?php echo e(Request::is('events') ? 'active' : ''); ?>" href="<?php echo e(route('events')); ?>" class="header_links">Events</a></div>

               <div class="item">
                    <?php if(Auth::check() && Auth::user()->type == 3): ?>
                    <a  class="<?php echo e(Request::is('user-dashboard') ? 'active' : ''); ?>"   href="<?php echo e(route('user-dashboard')); ?>" class="header_links">My Account</a>
                    <a  class="<?php echo e(Request::is('user-logout') ? 'active' : ''); ?> link_header"   href="<?php echo e(route('user-logout')); ?>" class="header_links">Log
                        Out</a>

                    <?php elseif(Auth::check() && Auth::user()->type == 2): ?>
                    <a  class="<?php echo e(Request::is('vendor-dashboard') ? 'active' : ''); ?>"   href="<?php echo e(route('vendor-dashboard')); ?>" class="header_links">My Account<</a>
                    <a  class="<?php echo e(Request::is('user-logout') ? 'active' : ''); ?> link_header"   href="<?php echo e(route('user-logout')); ?>" class="header_links">Log
                        Out</a>
                        <?php else: ?>
                        <a class="<?php echo e(Request::is('signin') ? 'active' : ''); ?>" href="<?php echo e(route('signin')); ?>" class="header_links modal-dialog-centered" data-bs-toggle="modal"
                        data-bs-target="#exampleModal">Sign In</a>
                            <a  class="<?php echo e(Request::is('signup') ? 'active' : ''); ?>"   href="<?php echo e(route('signup')); ?>" class="header_links">Sign Up</a>
                        <?php endif; ?>
                    </div>

                        


                <!-- <div class="item"><a href="register.html" class="header_links"><button
                            class="reg-btn">Register</button></a></div> -->
            </div>
        </div>
    </header>

    <!-- ==============================================HEADER CLOSED========================================= -->
 <!-- ====Jquery JS ==== -->
 <script src="<?php echo e(asset('website/js/jquery.min.js')); ?>"> </script>
 <!-- ===Boostrap Bundle JS ====-->
 <script src="<?php echo e(asset('website/js/bootstrap.bundle.min.js')); ?>"> </script>
 <!-- swiper slider js -->
 <script src="<?php echo e(asset('website/js/swiper-bundle.min.js')); ?>"></script>
 <!-- Butter JS -->
 <script src="<?php echo e(asset('website/js/butter.js')); ?>"></script>
 <!--WOW JS   -->
 <script src="<?php echo e(asset('website/js/wow.js')); ?>"></script>
 <!-- Custom Js -->
 <script src="<?php echo e(asset('website/js/main.js')); ?>"></script>
 <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
<?php /**PATH C:\xampp\htdocs\south-dakota-bride\resources\views/user-dashboard/layouts/navbar.blade.php ENDPATH**/ ?>