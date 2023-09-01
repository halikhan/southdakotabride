<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CmsController;
use App\Http\Controllers\ConfigurationController;
use App\Http\Controllers\ContactManagementController;
use App\Http\Controllers\EngagementController;
use App\Http\Controllers\EventManagementController;
use App\Http\Controllers\FAQController;
use App\Http\Controllers\Frontend\WebsiteController;
use App\Http\Controllers\Frontend\WeddingController;

use App\Http\Controllers\InquiryController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\LogoManagerController;
use App\Http\Controllers\PackageManagementController;
use App\Http\Controllers\PageNameController;
use App\Http\Controllers\PrivacyPolicyController;
use App\Http\Controllers\RatingController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\SocialController;
use App\Http\Controllers\SubcriptionController;
use App\Http\Controllers\TermsConditionController;
use App\Http\Controllers\TestimonialController;

use App\Http\Controllers\UserManagement;
use App\Http\Controllers\UserWeddingController;
use App\Http\Controllers\VednorsController;
use App\Http\Controllers\VendorRegisterationController;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Artisan;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


require __DIR__.'/auth.php';

// Route::view('admin', 'auth.login')->name('admin');
Route::get('/admin', function () {
    return view('auth.login');
});

Route::prefix('dashboard')->group(function () {

    Route::view('index', 'dashboard.index')->name('index');

});

Route::post('/login',[WebsiteController::class,'userlogin'])->name('login');


/*
|--------------------------------------------------------------------------
| Admin Theme Made Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::middleware(['preventBackHistory','isAdmin'])->group(function () {


    Route::get('/dashboard', function () {
        return view('dashboard.index');
    });


    Route::prefix('admin')->group(function () {

        Route::get('admin', [AdminController::class, 'index'])->name('admin');
        Route::get('admin_create', [AdminController::class, 'create'])->name('admin_create');
        Route::post('admin_store', [AdminController::class, 'store'])->name('admin_store');
        Route::get('admin_edit/{id}', [AdminController::class, 'edit'])->name('admin_edit');
        Route::post('admin_update/{id}', [AdminController::class, 'update'])->name('admin_update');
        Route::get('admin_destroy/{id}', [AdminController::class, 'destroy'])->name('admin_destroy');

    });

    Route::prefix('user')->group(function () {

        Route::get('user', [UserManagement::class, 'index'])->name('user');
        Route::get('user_create', [UserManagement::class, 'create'])->name('backend.user.create');
        Route::post('user_store', [UserManagement::class, 'store'])->name('user_store');
        Route::get('user_show/{id}', [UserManagement::class, 'show'])->name('user_show');
        Route::get('user_edit/{slug}', [UserManagement::class, 'edit'])->name('user_edit');
        Route::post('user_update/{id}', [UserManagement::class, 'update'])->name('user_update');
        Route::get('user_destroy/{slug}', [UserManagement::class, 'destroy'])->name('user_destroy');
        Route::get('/user_status/{id?}',[UserManagement::class,'user_status'])->name('user_status');

    });

    Route::prefix('Subcription')->group(function () {

        Route::get('Subcription', [SubcriptionController::class, 'index'])->name('Subcription');
        Route::get('Subcription_create', [SubcriptionController::class, 'create'])->name('Subcription_create');
        Route::post('Subcription_store', [SubcriptionController::class, 'store'])->name('Subcription_store');
        Route::get('Subcription_edit/{id}', [SubcriptionController::class, 'edit'])->name('Subcription_edit');
        Route::post('Subcription_update/{id}', [SubcriptionController::class, 'update'])->name('Subcription_update');
        Route::get('Subcription_destroy/{id}', [SubcriptionController::class, 'destroy'])->name('Subcription_destroy');

    });


    Route::prefix('Package')->group(function () {

        Route::get('Package', [PackageManagementController::class, 'index'])->name('Package');
        Route::get('Package_create', [PackageManagementController::class, 'create'])->name('Package_create');
        Route::post('Package_store', [PackageManagementController::class, 'store'])->name('Package_store');
        Route::get('Package_edit/{slug}', [PackageManagementController::class, 'edit'])->name('Package_edit');
        Route::post('Package_update/{id}', [PackageManagementController::class, 'update'])->name('Package_update');
        Route::get('Package_destroy/{slug}', [PackageManagementController::class, 'destroy'])->name('Package_destroy');

    });

    Route::prefix('FAQ')->group(function () {

        Route::get('FAQ', [FAQController::class, 'index'])->name('FAQ');
        Route::get('FAQ_create', [FAQController::class, 'create'])->name('FAQ_create');
        Route::post('FAQ_store', [FAQController::class, 'store'])->name('FAQ_store');
        Route::get('FAQ_edit/{id}', [FAQController::class, 'edit'])->name('FAQ_edit');
        Route::post('FAQ_update/{id}', [FAQController::class, 'update'])->name('FAQ_update');
        Route::get('FAQ_destroy/{id}', [FAQController::class, 'destroy'])->name('FAQ_destroy');

    });


    Route::prefix('project')->group(function () {

        Route::get('projects', [CmsController::class, 'projects_Index'])->name('projects');
        Route::get('projectcreate', [CmsController::class, 'project_create'])->name('projectcreate');
        Route::post('projectadd', [CmsController::class, 'project_add'])->name('projectadd');
        Route::get('project-edit/{slug}', [CmsController::class, 'project_edit'])->name('project_edit');
        Route::post('project-update/{id}', [CmsController::class, 'project_update'])->name('project_update');
        Route::get('projectdestroy/{id}', [CmsController::class, 'project_destroy'])->name('project_destroy');

        Route::get('PageName', [PageNameController::class, 'index'])->name('PageName');
        Route::get('PageName_create', [PageNameController::class, 'create'])->name('PageName_create');
        Route::post('PageName_store', [PageNameController::class, 'store'])->name('PageName_store');
        Route::get('PageName_edit/{id}', [PageNameController::class, 'edit'])->name('PageName_edit');
        Route::post('PageName_update/{id}', [PageNameController::class, 'update'])->name('PageName_update');
        Route::get('PageName_destroy/{id}', [PageNameController::class, 'destroy'])->name('PageName_destroy');


        Route::get('PageContent', [CmsController::class, 'projects_Index'])->name('PageContent');
        Route::get('PageContent_create', [CmsController::class, 'project_create'])->name('PageContent_create');
        Route::post('PageContent_store', [CmsController::class, 'project_add'])->name('PageContent_store');
        Route::get('PageContent_edit/{id}', [CmsController::class, 'project_edit'])->name('PageContent_edit');
        Route::post('PageContent_update/{id}', [CmsController::class, 'project_update'])->name('PageContent_update');
        Route::get('PageContent_destroy/{id}', [CmsController::class, 'project_destroy'])->name('PageContent_destroy');

        Route::get('logo', [LogoManagerController::class, 'logo_Index'])->name('logo');
        Route::get('logoCreate', [LogoManagerController::class, 'logo_create'])->name('logoCreate');
        Route::post('logoAdd', [LogoManagerController::class, 'logo_add'])->name('logoAdd');
        Route::get('logoEdit/{slug}', [LogoManagerController::class, 'logo_edit'])->name('logoEdit');
        Route::post('logoUpdate/{id}', [LogoManagerController::class, 'logo_update'])->name('logoUpdate');
        Route::get('logodestroy/{id}', [LogoManagerController::class, 'logo_destroy'])->name('logodestroy');

        Route::get('privacy', [PrivacyPolicyController::class, 'privacy_Index'])->name('privacy');
        Route::get('privacyCreate', [PrivacyPolicyController::class, 'privacy_create'])->name('privacyCreate');
        Route::post('privacyAdd', [PrivacyPolicyController::class, 'privacy_add'])->name('privacyAdd');
        Route::get('privacyEdit/{slug}', [PrivacyPolicyController::class, 'privacy_edit'])->name('privacyEdit');
        Route::post('privacyUpdate/{id}', [PrivacyPolicyController::class, 'privacy_update'])->name('privacyUpdate');
        Route::get('privacydestroy/{id}', [PrivacyPolicyController::class, 'privacy_destroy'])->name('privacydestroy');

        Route::get('terms', [TermsConditionController::class, 'terms_Index'])->name('terms');
        Route::get('termsCreate', [TermsConditionController::class, 'terms_create'])->name('termsCreate');
        Route::post('termsAdd', [TermsConditionController::class, 'terms_add'])->name('termsAdd');
        Route::get('termsEdit/{id}', [TermsConditionController::class, 'terms_edit'])->name('termsEdit');
        Route::post('termsUpdate/{id}', [TermsConditionController::class, 'terms_update'])->name('termsUpdate');
        Route::get('termsdestroy/{id}', [TermsConditionController::class, 'terms_destroy'])->name('termsdestroy');


    });


    Route::prefix('general')->group(function () {

        Route::get('social', [SocialController::class, 'index'])->name('social');
        Route::get('socialCreate', [SocialController::class, 'create'])->name('socialCreate');
        Route::post('socialAdd', [SocialController::class, 'store'])->name('socialAdd');
        Route::get('socialEdit/{slug}', [SocialController::class, 'edit'])->name('socialEdit');
        Route::post('socialUpdate/{id}', [SocialController::class, 'update'])->name('socialUpdate');
        Route::get('socialdestroy/{id}', [SocialController::class, 'destroy'])->name('socialdestroy');

        Route::get('congfigration', [ConfigurationController::class, 'index'])->name('congfigration');
        Route::get('congfigrationCreate', [ConfigurationController::class, 'create'])->name('congfigrationCreate');
        Route::post('congfigrationAdd', [ConfigurationController::class, 'store'])->name('congfigrationAdd');
        Route::get('congfigrationEdit/{slug}', [ConfigurationController::class, 'edit'])->name('congfigrationEdit');
        Route::post('congfigrationUpdate/{id}', [ConfigurationController::class, 'update'])->name('congfigrationUpdate');
        Route::get('congfigrationdestroy/{id}', [ConfigurationController::class, 'destroy'])->name('congfigrationdestroy');

    });


    Route::prefix('blog')->group(function () {

        Route::get('blogs', [BlogController::class, 'index'])->name('blogs');
        Route::get('blogCreate', [BlogController::class, 'create'])->name('blogCreate');
        Route::post('blogAdd', [BlogController::class, 'store'])->name('blogAdd');
        Route::get('blogEdit/{slug}', [BlogController::class, 'edit'])->name('blogEdit');
        Route::post('blogUpdate/{id}', [BlogController::class, 'update'])->name('blogUpdate');
        Route::get('blogdestroy/{slug}', [BlogController::class, 'destroy'])->name('blogdestroy');

        Route::get('testimonial', [TestimonialController::class, 'index'])->name('testimonial');
        Route::get('testimonialCreate', [TestimonialController::class, 'create'])->name('testimonialCreate');
        Route::post('testimonialStore', [TestimonialController::class, 'store'])->name('testimonialStore');
        Route::get('testimonialEdit/{id}', [TestimonialController::class, 'edit'])->name('testimonialEdit');
        Route::post('testimonialUpdate/{id}', [TestimonialController::class, 'update'])->name('testimonialUpdate');
        Route::get('testimonialdestroy/{id}', [TestimonialController::class, 'destroy'])->name('testimonialdestroy');

    });


    Route::prefix('adminVendor')->group(function () {

        Route::get('adminVendor', [VednorsController::class, 'index'])->name('adminVendor');
        Route::get('adminVendor-Create', [VednorsController::class, 'create'])->name('adminVendor-Create');
        Route::post('adminVendor-store', [VednorsController::class, 'store'])->name('adminVendor-store');
        Route::get('adminVendor-Edit/{slug}', [VednorsController::class, 'edit'])->name('adminVendor-Edit');
        Route::post('adminVendor-Update/{id}', [VednorsController::class, 'update'])->name('adminVendor-Update');
        Route::get('adminVendor-destroy/{slug}', [VednorsController::class, 'destroy'])->name('adminVendor-destroy');
        Route::get('/vendor_status/{id?}',[VednorsController::class,'vendor_status'])->name('vendor_status');

    });

    Route::prefix('services')->group(function () {


        Route::get('services', [ServicesController::class, 'index'])->name('services');
        Route::get('services_create', [ServicesController::class, 'create'])->name('services_create');
        Route::post('services_store', [ServicesController::class, 'store'])->name('services_store');
        Route::get('services_edit/{slug}', [ServicesController::class, 'edit'])->name('services_edit');
        Route::post('services_update/{id}', [ServicesController::class, 'update'])->name('services_update');
        Route::get('services_destroy/{slug}', [ServicesController::class, 'destroy'])->name('services_destroy');

        Route::get('location', [LocationController::class, 'index'])->name('location');
        Route::get('location_create', [LocationController::class, 'create'])->name('location_create');
        Route::post('location_store', [LocationController::class, 'store'])->name('location_store');
        Route::get('location_edit/{slug}', [LocationController::class, 'edit'])->name('location_edit');
        Route::post('location_update/{id}', [LocationController::class, 'update'])->name('location_update');
        Route::get('location_destroy/{slug}', [LocationController::class, 'destroy'])->name('location_destroy');


    });


    Route::prefix('ceremony')->group(function () {


            Route::get('admin_wedding',[WeddingController::class,'index'])->name('admin_wedding');
            Route::get('wedding_create', [WeddingController::class, 'create'])->name('wedding_create');
            Route::post('wedding_store', [WeddingController::class, 'store'])->name('wedding_store');
            Route::get('wedding_edit/{id}', [WeddingController::class, 'edit'])->name('wedding_edit');
            Route::get('wedding_show/{slug}', [WeddingController::class, 'show'])->name('wedding_show');
            Route::post('wedding_update/{id}', [WeddingController::class, 'update'])->name('wedding_update');
            Route::get('wedding_destroy/{id}', [WeddingController::class, 'destroy'])->name('wedding_destroy');

            Route::get('admin_engagement', [EngagementController::class, 'index'])->name('admin_engagement');
            Route::get('engagement_create', [EngagementController::class, 'create'])->name('engagement_create');
            Route::post('engagement_store', [EngagementController::class, 'store'])->name('engagement_store');
            Route::get('engagement_show/{slug}', [EngagementController::class, 'show'])->name('engagement_show');

            Route::get('engagement_edit/{slug}', [EngagementController::class, 'edit'])->name('engagement_edit');
            Route::post('engagement_update/{id}', [EngagementController::class, 'update'])->name('engagement_update');
            Route::get('engagement_destroy/{slug}', [EngagementController::class, 'destroy'])->name('engagement_destroy');


    });

    Route::prefix('contact')->group(function () {

        Route::get('contact', [ContactManagementController::class, 'index'])->name('contact');
        Route::get('contactCreate', [ContactManagementController::class, 'create'])->name('contactCreate');
        Route::post('contactAdd', [ContactManagementController::class, 'store'])->name('contactAdd');
        Route::get('contactEdit/{slug}', [ContactManagementController::class, 'edit'])->name('contactEdit');
        Route::post('contactUpdate/{id}', [ContactManagementController::class, 'update'])->name('contactUpdate');
        Route::get('contactdestroy/{id}', [ContactManagementController::class, 'destroy'])->name('contactdestroy');
    });

    Route::prefix('Inquiry')->group(function () {

        Route::get('Inquiry', [InquiryController::class, 'index'])->name('Inquiry');
        Route::get('InquiryCreate', [InquiryController::class, 'create'])->name('InquiryCreate');
        Route::post('InquiryAdd', [InquiryController::class, 'store'])->name('InquiryAdd');
        Route::get('InquiryEdit/{id}', [InquiryController::class, 'edit'])->name('InquiryEdit');
        Route::post('InquiryUpdate/{id}', [InquiryController::class, 'update'])->name('InquiryUpdate');
        Route::get('InquiryShow/{slug}', [InquiryController::class, 'show'])->name('InquiryShow');
        Route::get('Inquiryldestroy/{slug}', [InquiryController::class, 'destroy'])->name('Inquirydestroy');

    });


    Route::prefix('event')->group(function () {

        Route::get('event', [EventManagementController::class, 'index'])->name('event');
        Route::get('eventCreate', [EventManagementController::class, 'create'])->name('eventCreate');
        Route::post('eventAdd', [EventManagementController::class, 'store'])->name('eventAdd');
        Route::get('eventEdit/{slug}', [EventManagementController::class, 'edit'])->name('eventEdit');
        Route::post('eventUpdate/{id}', [EventManagementController::class, 'update'])->name('eventUpdate');
        Route::get('eventdestroy/{slug}', [EventManagementController::class, 'destroy'])->name('eventdestroy');
    });

});




    /*
|--------------------------------------------------------------------------
| User Dashboard Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/clear-cache', function() {
    Artisan::call('config:cache');
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('view:clear');
    Artisan::call('route:clear');
    return "Cache is cleared";
})->name('clear.cache');


Route::middleware(['preventBackHistory','UserCheck'])->group(function () {


    Route::get('user-dashboard',[WebsiteController::class,'userIndex'])->name('user-dashboard');
    Route::get('edit-user-profile',[WebsiteController::class,'editprofile'])->name('edit-user-profile');
    Route::post('user_profile_update',[WebsiteController::class,'profileupdate'])->name('user_profile_update');

    Route::get('vendor-dashboard',[WebsiteController::class,'vendorIndex'])->name('vendor-dashboard');
    Route::get('vendor-gallery',[WebsiteController::class,'vendor_gallery'])->name('vendor_gallery');
    Route::post('vendor_gallery_update',[WebsiteController::class,'vendor_galleryUpdate'])->name('vendor_gallery_update');
    Route::get('about-vendor',[WebsiteController::class,'about_vendor'])->name('about_vendor');
    Route::get('contact-vendor',[WebsiteController::class,'contact_vendor'])->name('contact_vendor');
    Route::get('contact-delete/{id}',[WebsiteController::class,'contactDelete'])->name('contact_delete');

    Route::get('vendor-social',[WebsiteController::class,'vendor_social'])->name('vendor_social');
    Route::get('vendor-social-create',[WebsiteController::class,'social_create'])->name('vendor_social_create');
    Route::post('vendor_social_store',[WebsiteController::class,'social_store'])->name('vendor_social_store');
    Route::get('vendor_social_edit/{slug}',[WebsiteController::class,'vendor_social_edit'])->name('vendor_social_edit');
    Route::post('vendor_social_update/{id}',[WebsiteController::class,'social_update'])->name('vendor_social_update');
    Route::get('vendor-reviews',[WebsiteController::class,'vendor_reviews'])->name('vendor_reviews');
    Route::get('vendor-packageUpdate',[WebsiteController::class,'packageUpdate'])->name('vendor_packageUpdate');
    Route::get('vendor_payment_package',[WebsiteController::class,'vendor_payment'])->name('vendor_payment_package');
    Route::get('vendor_payment_pay',[WebsiteController::class,'pay_payment'])->name('vendor_payment_pay');

    Route::get('edit-vendor-profile',[WebsiteController::class,'editVendorProfile'])->name('edit-vendor-profile');
    Route::post('vendor_profile_update',[WebsiteController::class,'VendorProfileUpdate'])->name('vendor_profile_update');
    Route::post('about_vendor_profile/{id}',[WebsiteController::class,'about_vendor_profile'])->name('about_vendor_profile');

    Route::get('user-wedding',[UserWeddingController::class,'Index'])->name('user-wedding');
    Route::get('user-wedding-create',[UserWeddingController::class,'create'])->name('user-wedding-create');
    Route::post('user_wedding_store',[UserWeddingController::class,'store'])->name('user_wedding_store');
    Route::get('user_wedding_edit/{slug}',[UserWeddingController::class,'edit'])->name('user_wedding_edit');
    Route::post('user_wedding_update/{id}',[UserWeddingController::class,'update'])->name('user_wedding_update');
    Route::get('user_wedding_destroy/{slug}',[UserWeddingController::class,'destroy'])->name('user_wedding_destroy');
    Route::get('user_wedding_show/{slug}',[UserWeddingController::class,'show'])->name('user_wedding_show');
    Route::post('user_gallery_store',[UserWeddingController::class,'gallerystore'])->name('user_gallery_store');
    Route::get('wedding_gallery',[UserWeddingController::class,'gallery'])->name('wedding_gallery');

    Route::post('services_type_status',[UserWeddingController::class,'services_type_status'])->name('services_type_status');
    Route::get('change-password',[WebsiteController::class,'changepassword'])->name('change-password');
    Route::post('user_update_password',[WebsiteController::class,'updatepassword'])->name('user_update_password');


});

/*
|--------------------------------------------------------------------------
| Front End Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

    Route::post('VendorRegisteration', [VendorRegisterationController::class, 'store'])->name('VendorRegisteration');
    Route::post('vendor-store-Registeration', [VendorRegisterationController::class, 'vendor_store'])->name('vendor_store_Registeration');
    Route::GET('store_vendor_payment', [VendorRegisterationController::class, 'store_vendor_payment'])->name('store_vendor_payment');
    Route::GET('update_vendor_payment', [VendorRegisterationController::class, 'update_vendor_payment'])->name('update_vendor_payment');
    Route::post('user-rating/{id}', [RatingController::class, 'userRating'])->name('user_rating');
    Route::post('vendor_contact/{id}', [WebsiteController::class, 'vendorContactprocess'])->name('vendor_contact');


    //Frontend Routes
    Route::get('/',[WebsiteController::class,'index'])->name('home');
    Route::get('/wedding',[WebsiteController::class,'wedding'])->name('wedding');
    Route::get('/wedding-details/{slug}',[WebsiteController::class,'weddingDetails'])->name('wedding-details');
    Route::get('/engagement',[WebsiteController::class,'engagement'])->name('engagement');
    Route::get('/engagement-details/{slug}',[WebsiteController::class,'engagementDetails'])->name('engagement-details');
    Route::get('/popular-vendors',[WebsiteController::class,'popularVendors'])->name('popular_vendors');
    Route::get('/vendorlist/{slug}',[WebsiteController::class,'vendorlist'])->name('vendorlist');
    Route::get('/vendor-details/{slug}',[WebsiteController::class,'vendorDetails'])->name('vendor-details');
    Route::get('/planners',[WebsiteController::class,'planners'])->name('planners');
    Route::get('/blog',[WebsiteController::class,'blog'])->name('blog');
    Route::get('/blog-details/{slug}',[WebsiteController::class,'blogDetails'])->name('blog-details');
    Route::get('/events',[WebsiteController::class,'events'])->name('events');
    Route::get('/event-details/{slug}',[WebsiteController::class,'eventDetails'])->name('event-details');
    Route::get('/event_more',[WebsiteController::class,'event_more'])->name('event_more');
    Route::get('/signin',[WebsiteController::class,'signin'])->name('signin');

    Route::post('/user-signin',[WebsiteController::class,'userlogin'])->name('user-signin');
    Route::get('/user-logout',[WebsiteController::class,'userlogout'])->name('user-logout');
    Route::get('/signup',[WebsiteController::class,'signup'])->name('signup');
    Route::post('/client_signup',[WebsiteController::class,'clientSgnup'])->name('client_signup');
    Route::get('/about-us',[WebsiteController::class,'aboutus'])->name('about-us');
    Route::get('/register',[WebsiteController::class,'register'])->name('register');
    Route::get('/terms-conditions',[WebsiteController::class,'termsConditions'])->name('terms-conditions');
    Route::get('/privacy-policy',[WebsiteController::class,'privacyPolicy'])->name('privacy-policy');
    Route::get('/contact-us',[WebsiteController::class,'contact'])->name('contact-us');
    Route::post('/contact_process',[WebsiteController::class,'contactprocess'])->name('contact_process');
    Route::get('/packages',[WebsiteController::class,'packages'])->name('packages');
    Route::get('/payment',[WebsiteController::class,'payment'])->name('payment');
    Route::get('/pay-amount',[WebsiteController::class,'pay_amount'])->name('pay_amount');
    Route::post('user_subcription', [WebsiteController::class, 'user_subcription'])->name('user_subcription');
    Route::get('/forget-password',[WebsiteController::class,'forgetPassword'])->name('forget-password');
    Route::post('/forget_password_process',[WebsiteController::class,'forgetPasswordProcess'])->name('forget_password_process');
    Route::get('/reset-password/{token}',[WebsiteController::class,'getPassword'])->name('reset-password');
    Route::post('/update_password',[WebsiteController::class,'updateforgetpassword'])->name('update_password');

/*
|--------------------------------------------------------------------------
| Theme made Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Language Change
Route::get('lang/{locale}', function ($locale) {

    if (! in_array($locale, ['en', 'de', 'es','fr','pt', 'cn', 'ae'])) {
        abort(400);
    }
    Session()->put('locale', $locale);
    Session::get('locale');
    return redirect()->back();

})->name('lang');

// Redirect to error page  when no any route found
Route::any('{url}', function(){
    return view('errors.404');
})->where('url', '.*');













