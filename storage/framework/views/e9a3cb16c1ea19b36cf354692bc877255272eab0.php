
<?php


$logo_add = App\Models\LogoManager::where('title','logo')->first();

// dd($logo_add);
?>

<style>
/* width */
sidebar-wrapper::-webkit-scrollbar {
  width: 10px;
}
.page-wrapper.compact-wrapper .page-body-wrapper div.sidebar-wrapper{
    height: 100vh;
}

/* Track */
sidebar-wrapper::-webkit-scrollbar-track {
  background: grey;
}

/* Handle */
sidebar-wrapper::-webkit-scrollbar-thumb {
  background: grey;
}

/* Handle on hover */
sidebar-wrapper::-webkit-scrollbar-thumb:hover {
  background: #555;
}
</style>
<div class="sidebar-wrapper">
	<div>
		<div class="logo-wrapper">
			<a href="<?php echo e(route('index')); ?>"><img class="img-fluid for-light" src="<?php echo e((!empty($logo_add->image))?
                asset('storage/uploads/logo/'.$logo_add->image):asset('storage/uploads/No-image.jpg')); ?>"
                style="width:120px; height:80px;" alt="">
                <img class="img-fluid for-dark" src="<?php echo e(asset('assets/images/logo/logo_dark.png')); ?>" alt=""></a>
			<div class="back-btn"><i class="fa fa-angle-left"></i></div>
			<div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid"> </i></div>
		</div>
		<div class="logo-icon-wrapper">
            <a href="<?php echo e(route('index')); ?>"><img class="img-fluid" src="<?php echo e((!empty($logo_add->image))?
            asset('storage/uploads/logo/'.$logo_add->image):asset('storage/uploads/No-image.jpg')); ?>" alt="" style="height:40px;width:60px;"></a>
        </div>
		<nav class="sidebar-main">
			<div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
			<div id="sidebar-menu">
				<ul class="sidebar-links" id="simple-bar">

					<li class="back-btn">
						<a href=""><img class="img-fluid" src="<?php echo e(asset('assets/images/logo/logo-icon.png')); ?>" alt=""></a>
						<div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
					</li>


                    <br>
					<li class="sidebar-main-title">
						<div>
                            <a href="<?php echo e(route('index')); ?>">
							<h6 class="lan-3"><?php echo e(trans('lang.Dashboards')); ?> </h6>
                     		<p class="lan-2"><?php echo e(trans('lang.Dashboards,widgets & layout.')); ?></p>
                        </a>
						</div>
					</li>
                    

					<li class="sidebar-list">
						
						<a class="sidebar-link sidebar-title <?php echo e(request()->route()->getPrefix() == '/' ? 'active' : ''); ?>" target="_blank" href="<?php echo e(route('home')); ?>">
							<i data-feather="box"></i><span><?php echo e(trans('Go to Website')); ?> </span>
							
						</a>
					</li>

                     

					<li class="sidebar-list">
						
						<a class="sidebar-link sidebar-title <?php echo e(request()->route()->getPrefix() == '/project' ? 'active' : ''); ?>" href="#">
							<i data-feather="layout"></i><span><?php echo e(trans('CMS')); ?> </span>
							<div class="according-menu"><i class="fa fa-angle-<?php echo e(request()->route()->getPrefix() == '/project' ? 'down' : 'right'); ?>"></i></div>
						</a>
						<ul class="sidebar-submenu" style="display: <?php echo e(request()->route()->getPrefix() == '/project' ? 'block;' : 'none;'); ?>">
		                    
		                    <li><a href="<?php echo e(route('logo')); ?>" class="<?php echo e(Route::currentRouteName()=='logo' ? 'active' : ''); ?>">Logo Management</a></li>
                            
                            <li><a href="<?php echo e(route('PageContent')); ?>" class="<?php echo e(Route::currentRouteName()=='PageContent' ? 'active' : ''); ?>">Page Content</a></li>
                            
                            <li><a href="<?php echo e(route('privacy')); ?>" class="<?php echo e(Route::currentRouteName()=='privacy' ? 'active' : ''); ?>"><?php echo e(trans('Privacy Policy')); ?></a></li>
                            <li><a href="<?php echo e(route('terms')); ?>" class="<?php echo e(Route::currentRouteName()=='terms' ? 'active' : ''); ?>"><?php echo e(trans('Terms and Conditions')); ?></a></li>
		                </ul>
					</li>

                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title <?php echo e(request()->route()->getPrefix() == '/event' ? 'active' : ''); ?>" href="#"><i data-feather="music"></i><span><?php echo e(trans('Event Management')); ?></span>
                            <div class="according-menu"><i class="fa fa-angle-<?php echo e(request()->route()->getPrefix() == '/event' ? 'down' : 'right'); ?>"></i></div>
                        </a>
                        <ul class="sidebar-submenu" style="display: <?php echo e(request()->route()->getPrefix() == '/event' ? 'block' : 'none;'); ?>;">
                            <li><a href="<?php echo e(route('event')); ?>" class="<?php echo e(Route::currentRouteName()=='event' ? 'active' : ''); ?>">Manage Events</a></li>

                        </ul>
                    </li>
                    

                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title <?php echo e(request()->route()->getPrefix() == '/contact' ? 'active' : ''); ?>" href="#"><i data-feather="phone"></i><span><?php echo e(trans('Contact Management')); ?></span>
                            <div class="according-menu"><i class="fa fa-angle-<?php echo e(request()->route()->getPrefix() == '/contact' ? 'down' : 'right'); ?>"></i></div>
                        </a>
                        <ul class="sidebar-submenu" style="display: <?php echo e(request()->route()->getPrefix() == '/contact' ? 'block' : 'none;'); ?>;">
                            <li><a href="<?php echo e(route('contact')); ?>"  class="<?php echo e(Route::currentRouteName()=='contact' ? 'active' : ''); ?>">Contact Details</a></li>
                        </ul>
                    </li>


                    <li class="sidebar-list">
						<a class="sidebar-link sidebar-title <?php echo e(request()->route()->getPrefix() == '/blog' ? 'active' : ''); ?>" href="#"><i data-feather="image"></i><span><?php echo e(trans('Blog Management')); ?></span>
							<div class="according-menu"><i class="fa fa-angle-<?php echo e(request()->route()->getPrefix() == '/blogs' ? 'down' : 'right'); ?>"></i></div>
						</a>
						<ul class="sidebar-submenu" style="display: <?php echo e(request()->route()->getPrefix() == '/blog' ? 'block' : 'none;'); ?>;">
							<li><a href="<?php echo e(route('blogs')); ?>"  class="<?php echo e(Route::currentRouteName()=='blog' ? 'active' : ''); ?>">Blogs</a></li>
                            <li><a href="<?php echo e(route('testimonial')); ?>"  class="<?php echo e(Route::currentRouteName()=='testimonial' ? 'active' : ''); ?>">Testimonials</a></li>
						</ul>
					</li>
                    <li class="sidebar-list">
						<a class="sidebar-link sidebar-title <?php echo e(request()->route()->getPrefix() == '/adminVendor' ? 'active' : ''); ?>" href="#"><i data-feather="image"></i><span><?php echo e(trans('Vendor Management')); ?></span>
							<div class="according-menu"><i class="fa fa-angle-<?php echo e(request()->route()->getPrefix() == '/blogs' ? 'down' : 'right'); ?>"></i></div>
						</a>
						<ul class="sidebar-submenu" style="display: <?php echo e(request()->route()->getPrefix() == '/adminVendor' ? 'block' : 'none;'); ?>;">
							<li><a href="<?php echo e(route('adminVendor')); ?>"  class="<?php echo e(Route::currentRouteName()=='adminVendor' ? 'active' : ''); ?>">Vendors</a></li>
						</ul>
					</li>





                    

                            

                    

                    <li class="sidebar-list">
						<a class="sidebar-link sidebar-title <?php echo e(request()->route()->getPrefix() == '/Package' ? 'active' : ''); ?>" href="#">
							<i data-feather="package"></i> <span> <?php echo e(trans('Package Management')); ?> </span>
							<div class="according-menu"><i class="fa fa-angle-<?php echo e(request()->route()->getPrefix() == '/Package' ? 'down' : 'right'); ?>"></i></div>
						</a>
						<ul class="sidebar-submenu" style="display: <?php echo e(request()->route()->getPrefix() == '/Package' ? 'block;' : 'none;'); ?>">
		                    <li><a href="<?php echo e(route('Package')); ?>" class="<?php echo e(Route::currentRouteName()=='Package' ? 'active' : ''); ?>"><?php echo e(trans('Package List')); ?></a></li>

		                </ul>
					</li>
                        
                    <li class="sidebar-list">
						<a class="sidebar-link sidebar-title <?php echo e(request()->route()->getPrefix() == '/services' ? 'active' : ''); ?>" href="#">
							<i data-feather="package"></i> <span> <?php echo e(trans('services Management')); ?> </span>
							<div class="according-menu"><i class="fa fa-angle-<?php echo e(request()->route()->getPrefix() == '/Package' ? 'down' : 'right'); ?>"></i></div>
						</a>
						<ul class="sidebar-submenu" style="display: <?php echo e(request()->route()->getPrefix() == '/services' ? 'block;' : 'none;'); ?>">
		                    <li><a href="<?php echo e(route('services')); ?>" class="<?php echo e(Route::currentRouteName()=='services' ? 'active' : ''); ?>"><?php echo e(trans('services List')); ?></a></li>
                            <li><a href="<?php echo e(route('location')); ?>" class="<?php echo e(Route::currentRouteName()=='location' ? 'active' : ''); ?>"><?php echo e(trans('location List')); ?></a></li>

		                </ul>
					</li>

                    
                    <li class="sidebar-list">
						<a class="sidebar-link sidebar-title <?php echo e(request()->route()->getPrefix() == '/ceremony' ? 'active' : ''); ?>" href="#">
							<i data-feather="package"></i> <span> <?php echo e(trans('ceremony Management')); ?> </span>
							<div class="according-menu"><i class="fa fa-angle-<?php echo e(request()->route()->getPrefix() == '/ceremony' ? 'down' : 'right'); ?>"></i></div>
						</a>
						<ul class="sidebar-submenu" style="display: <?php echo e(request()->route()->getPrefix() == '/ceremony' ? 'block;' : 'none;'); ?>">
		                    <li><a href="<?php echo e(route('admin_wedding')); ?>" class="<?php echo e(Route::currentRouteName()=='admin_wedding' ? 'active' : ''); ?>"><?php echo e(trans('Wedding List')); ?></a></li>
                            <li><a href="<?php echo e(route('admin_engagement')); ?>" class="<?php echo e(Route::currentRouteName()=='admin_engagement' ? 'active' : ''); ?>"><?php echo e(trans('Engagement List')); ?></a></li>

		                </ul>
					</li>
                     

                     <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title <?php echo e(request()->route()->getPrefix() == '/user' ? 'active' : ''); ?>" href="#">
                            <i data-feather="users"></i><span> <?php echo e(trans('Users Management')); ?> </span>
                            <div class="according-menu"><i class="fa fa-angle-<?php echo e(request()->route()->getPrefix() == '/user' ? 'down' : 'right'); ?>"></i></div>
                        </a>
                        <ul class="sidebar-submenu" style="display: <?php echo e(request()->route()->getPrefix() == '/user' ? 'block;' : 'none;'); ?>">
                            <li><a href="<?php echo e(route('user')); ?>" class="<?php echo e(Route::currentRouteName()=='user' ? 'active' : ''); ?>"><?php echo e(trans('Users List')); ?></a></li>
                        </ul>
                    </li>

                        

                        <li class="sidebar-list">
                            
                            <a class="sidebar-link sidebar-title <?php echo e(request()->route()->getPrefix() == '/general' ? 'active' : ''); ?>" href="#">
                                <i data-feather="settings"></i><span><?php echo e(trans('General Setting')); ?> </span>
                                <div class="according-menu"><i class="fa fa-angle-<?php echo e(request()->route()->getPrefix() == '/general' ? 'down' : 'right'); ?>"></i></div>
                            </a>
                            <ul class="sidebar-submenu" style="display: <?php echo e(request()->route()->getPrefix() == '/general' ? 'block;' : 'none;'); ?>">
                                <li><a href="<?php echo e(route('social')); ?>" class="<?php echo e(Route::currentRouteName()=='social' ? 'active' : ''); ?>"><?php echo e(trans('Social Links')); ?></a></li>
                                <li><a href="<?php echo e(route('congfigration')); ?>" class="<?php echo e(Route::currentRouteName()=='congfigration' ? 'active' : ''); ?>">Congfigration</a></li>
                            </ul>
                        </li>



                    

                    <li class="sidebar-list">
						<a class="sidebar-link sidebar-title <?php echo e(request()->route()->getPrefix() == '/Subcription' ? 'active' : ''); ?>" href="#">
							<i data-feather="plus-square"></i> <span><?php echo e(trans('Subscription')); ?> </span>
							<div class="according-menu"><i class="fa fa-angle-<?php echo e(request()->route()->getPrefix() == '/Subcription' ? 'down' : 'right'); ?>"></i></div>
						</a>
						<ul class="sidebar-submenu" style="display: <?php echo e(request()->route()->getPrefix() == '/Subcription' ? 'block;' : 'none;'); ?>">
		                    <li><a href="<?php echo e(route('Subcription')); ?>" class="<?php echo e(Route::currentRouteName()=='Subcription' ? 'active' : ''); ?>"><?php echo e(trans('Subscription List')); ?></a></li>
		                </ul>
					</li>


                    

                    <li class="sidebar-list">
						<a class="sidebar-link sidebar-title <?php echo e(request()->route()->getPrefix() == '/Inquiry' ? 'active' : ''); ?>" href="#"><i data-feather="phone-forwarded"></i><span><?php echo e(trans('Inquiry')); ?></span>
							<div class="according-menu"><i class="fa fa-angle-<?php echo e(request()->route()->getPrefix() == '/Inquiry' ? 'down' : 'right'); ?>"></i></div>
						</a>
						<ul class="sidebar-submenu" style="display: <?php echo e(request()->route()->getPrefix() == '/Inquiry' ? 'block' : 'none;'); ?>;">
							<li><a href="<?php echo e(route('Inquiry')); ?>" class="<?php echo e(Route::currentRouteName()=='Inquiry' ? 'active' : ''); ?>">Inquiry Details</a></li>

						</ul>
					</li>

					

					

				</ul>
			</div>
			<div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
		</nav>
	</div>
</div>
<?php /**PATH C:\xampp\htdocs\south-dakota-bride\resources\views/layouts/simple/sidebar.blade.php ENDPATH**/ ?>