<div class="page-header">
  <div class="header-wrapper row m-0">
    <form class="form-inline search-full col" action="#" method="get">
      <div class="mb-3 w-100">
        <div class="Typeahead Typeahead--twitterUsers">
          <div class="u-posRelative">
            <input class="demo-input Typeahead-input form-control-plaintext w-100" type="text" placeholder="Search Cuba .." name="q" title="" autofocus>
            <div class="spinner-border Typeahead-spinner" role="status"><span class="sr-only">Loading...</span></div>
            <i class="close-search" data-feather="x"></i>
          </div>
          <div class="Typeahead-menu"></div>
        </div>
      </div>
    </form>
    <div class="header-logo-wrapper col-auto p-0">
      <div class="logo-wrapper"><a href=""><img class="img-fluid" src="<?php echo e(asset('assets/images/logo/logo.png')); ?>" alt=""></a></div>
      <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="align-center"></i></div>
    </div>
    <div class="left-header col horizontal-wrapper ps-0">

    </div>
    <div class="nav-right col-8 pull-right right-header p-0">
      <ul class="nav-menus">
        <li class="language-nav">
          <div class="translate_wrapper">
            
            <div class="more_lang">
              <a href="<?php echo e(route('lang', 'en' )); ?>" class="<?php echo e((App::getLocale()  == 'en') ? 'active' : ''); ?>">
                <div class="lang <?php echo e((App::getLocale()  == 'en') ? 'selected' : ''); ?>" data-value="en"><i class="flag-icon flag-icon-us"></i> <span class="lang-txt">English</span><span> (US)</span></div>
              </a>
              <a href="<?php echo e(route('lang' , 'de' )); ?>" class="<?php echo e((App::getLocale()  == 'de') ? 'active' : ''); ?> ">
                <div class="lang <?php echo e((App::getLocale()  == 'de') ? 'selected' : ''); ?>" data-value="de"><i class="flag-icon flag-icon-de"></i> <span class="lang-txt">Deutsch</span></div>
              </a>
              <a href="<?php echo e(route('lang' , 'es' )); ?>" class="<?php echo e((App::getLocale()  == 'en') ? 'active' : ''); ?>">
                <div class="lang <?php echo e((App::getLocale()  == 'es') ? 'selected' : ''); ?>" data-value="es"><i class="flag-icon flag-icon-es"></i> <span class="lang-txt">Español</span></div>
              </a>
              <a href="<?php echo e(route('lang' , 'fr' )); ?>" class="<?php echo e((App::getLocale()  == 'fr') ? 'active' : ''); ?>">
                <div class="lang <?php echo e((App::getLocale()  == 'fr') ? 'selected' : ''); ?>" data-value="fr"><i class="flag-icon flag-icon-fr"></i> <span class="lang-txt">Français</span></div>
              </a>
              <a href="<?php echo e(route('lang' , 'pt' )); ?>" class="<?php echo e((App::getLocale()  == 'pt') ? 'active' : ''); ?>">
                <div class="lang <?php echo e((App::getLocale()  == 'pt') ? 'selected' : ''); ?>" data-value="pt"><i class="flag-icon flag-icon-pt"></i> <span class="lang-txt">Português</span><span> (BR)</span></div>
              </a>
              <a href="<?php echo e(route('lang' , 'cn' )); ?>" class="<?php echo e((App::getLocale()  == 'cn') ? 'active' : ''); ?>">
                <div class="lang <?php echo e((App::getLocale()  == 'cn') ? 'selected' : ''); ?>" data-value="cn"><i class="flag-icon flag-icon-cn"></i> <span class="lang-txt">简体中文</span></div>
              </a>
              <a href="<?php echo e(route('lang' , 'ae' )); ?>" class="<?php echo e((App::getLocale()  == 'ae') ? 'active' : ''); ?>">
                <div class="lang <?php echo e((App::getLocale()  == 'ae') ? 'selected' : ''); ?>" data-value="en"><i class="flag-icon flag-icon-ae"></i> <span class="lang-txt">لعربية</span> <span> (ae)</span></div>
              </a>
            </div>
          </div>
        </li>
        
        <li class="onhover-dropdown">
          
          <ul class="notification-dropdown onhover-show-div">
            
            <li>
              <p><i class="fa fa-circle-o me-3 font-primary"> </i>Delivery processing <span class="pull-right">10 min.</span></p>
            </li>
            <li>
              <p><i class="fa fa-circle-o me-3 font-success"></i>Order Complete<span class="pull-right">1 hr</span></p>
            </li>
            <li>
              <p><i class="fa fa-circle-o me-3 font-info"></i>Tickets Generated<span class="pull-right">3 hr</span></p>
            </li>
            <li>
              <p><i class="fa fa-circle-o me-3 font-danger"></i>Delivery Complete<span class="pull-right">6 hr</span></p>
            </li>
            <li><a class="btn btn-primary" href="#">Check all notification</a></li>
          </ul>
        </li>

        <li class="maximize"><a class="text-dark" href="#!" onclick="javascript:toggleFullScreen()"><i data-feather="maximize"></i></a></li>
        <li class="profile-nav onhover-dropdown p-0 me-0">
          <div class="media profile-media">
            
                <img class="b-r-10" src="<?php echo e(asset('storage/uploads/No-image.jpg')); ?>" style="width:40px; height:40px;" alt="">
            <div class="media-body">
              <span><?php echo e(Auth::user()->name ?? ''); ?></span>
              <p class="mb-0 font-roboto"><?php if(Auth::user()->type == '1' ?? ''): ?>
                   Admin <?php else: ?> User  <?php endif; ?><i class="middle fa fa-angle-down"></i></p>
            </div>
          </div>
            <ul class="profile-dropdown onhover-show-div">
                <form class="theme-form" method="POST" action="<?php echo e(route('logout')); ?>">
                    <?php echo csrf_field(); ?>
                     <li>
                        <button class="form-control" type="submit">
                            <i data-feather="log-out"> </i><span>Log Out</span>
                        </button>
                    </li>
                </form>
              </ul>
        </form>
        </li>
      </ul>
    </div>
    <script class="result-template" type="text/x-handlebars-template">
      <div class="ProfileCard u-cf">
      <div class="ProfileCard-avatar"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay m-0"><path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path><polygon points="12 15 17 21 7 21 12 15"></polygon></svg></div>
      <div class="ProfileCard-details">
      <div class="ProfileCard-realName">{{name}}</div>
      </div>
      </div>
    </script>
    <script class="empty-template" type="text/x-handlebars-template"><div class="EmptyMessage">Your search turned up 0 results. This most likely means the backend is down, yikes!</div></script>
  </div>
</div>
<?php /**PATH C:\xampp\htdocs\south-dakota-bride\resources\views/layouts/simple/header.blade.php ENDPATH**/ ?>