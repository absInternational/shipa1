<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\ReviewController;
use App\Http\Controllers\Admin\ServiceCategoryController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\FAQsController;
use App\Http\Controllers\ContactMessageController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\FormVehicleController;
use App\Http\Controllers\QuoteController;
use App\Http\Controllers\OrderFormController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\ReviewSiteController;
use App\Http\Controllers\Admin\UserManagementController;
use App\Http\Controllers\Admin\PortToPortController;
use App\Http\Controllers\Admin\PortDetailController;
use App\Http\Controllers\Admin\NationWideTransportController;

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
// Route::get('/', function () {
//     return view('frontend.index');
//     // return view('welcome');
// });
// home
Route::get('/', [FrontendController::class, 'index'])->name('welcome');
Route::get('/home', [HomeController::class, 'index'])->name('home');
// Blogs
Route::get('/blog', [FrontendController::class, 'blogs'])->name('blogs');
// Blogs
Route::get('/trailers-and-trucks', [FrontendController::class, 'blogsTrailerTruck'])->name('blogs.trailer.truck');
// Blog details
Route::get('/blog/{slug}', [FrontendController::class, 'blogDetails'])->name('blog.details');
// About us
Route::get('/about_us', [FrontendController::class, 'aboutUs'])->name('aboutUs');
// Contact us
Route::get('/contact_us', [FrontendController::class, 'contactUs'])->name('contactUs');
// Service
Route::get('/services', [FrontendController::class, 'services'])->name('services');
Route::prefix('services')->group(function () {
    Route::get('/car-shipping-service', [FrontendController::class, 'carService'])->name('frontend.pages.services.car-service');
    Route::get('/motorcycle-shipping-service', [FrontendController::class, 'bikeService'])->name('frontend.pages.services.bike-service');
    Route::get('/atv-utv-transport', [FrontendController::class, 'atvutvService'])->name('frontend.pages.services.atv-utv-service');
    Route::get('/golf-cart-shipping-service', [FrontendController::class, 'golfcartService'])->name('frontend.pages.services.golf-cart-service');
    Route::get('/boat-service', [FrontendController::class, 'boatService'])->name('frontend.pages.services.boat-service');
    Route::get('/commercial-truck-transport', [FrontendController::class, 'commercialService'])->name('frontend.pages.services.commercial-service');
    Route::get('/construction-equipment-transport-shipping', [FrontendController::class, 'constructionService'])->name('frontend.pages.services.construction-service');
    Route::get('/excavator-shipping-services', [FrontendController::class, 'excavatorService'])->name('frontend.pages.services.excavator-service');
    Route::get('/farm-transport-services', [FrontendController::class, 'farmService'])->name('frontend.pages.services.farm-service');
    Route::get('/freight-service', [FrontendController::class, 'freightService'])->name('frontend.pages.services.freight-service');
    Route::get('/heavy-equipment-shipping-services', [FrontendController::class, 'heavyService'])->name('frontend.pages.services.heavy-service');
    Route::get('/rv-service', [FrontendController::class, 'rvService'])->name('frontend.pages.services.rv-service');
    Route::get('/hazmat-transport', [FrontendController::class, 'hazmatService'])->name('frontend.pages.services.hazmat-service');
    Route::get('/reefer-trucking', [FrontendController::class, 'reeferService'])->name('frontend.pages.services.reefer-service');
    Route::get('/dry-van-transportation', [FrontendController::class, 'dryvanService'])->name('frontend.pages.services.dryvan-service');
    // Service detail
    Route::get('/services/{slug}', [FrontendController::class, 'serviceDetails'])->name('service.details');
});
Route::get('/roro-shipping-international', [FrontendController::class, 'roroService'])->name('frontend.pages.services.roro-service');
Route::get('/nationwide-autotransport', [FrontendController::class, 'nationwideAutotransport'])->name('frontend.pages.nationwide-autotransport');
Route::get('/nationwide-autotransport/{slug}', [FrontendController::class, 'getNationWideData'])->name('get.nation.data');
// Auto Auction
Route::get('/auctions-car-transport', [FrontendController::class, 'autoAuction'])->name('autoAuction');
// news letter add
Route::post('/subscribe', [FrontendController::class, 'subscribe'])->name('newsletter.subscribe');
// contact msgs add
// Route::resource('contact_messages', ContactMessageController::class);
Route::post('contact_messages', [ContactMessageController::class, 'store'])->name('contact_messages.store');
// order tracking page
Route::get('order_tracking', [FrontendController::class, 'orderTracking'])->name('order.tracking');
// terms & conditions
Route::get('/terms_and_conditions', [FrontendController::class, 'termsAndConditions'])->name('termsAndConditions');
// faq
Route::get('/frequently-asked-questions', [FrontendController::class, 'faq'])->name('faq');
// privacy policy
Route::get('/privacy_policy', [FrontendController::class, 'privacyPolicy'])->name('privacyPolicy');
// thank-you
Route::get('/thank-you', [FrontendController::class, 'thankYou'])->name('thankYou');
// vehicle Transportation detail
Route::get('/vehicle-transportation-detail', [FrontendController::class, 'vehicleTransportDetail'])->name('vehicleTransportDetail');
// heavy-transport-detail
Route::get('/heavy-transport-detail', [FrontendController::class, 'heavyTransportDetail'])->name('heavy-transport-detail');
// Freight Transportation Detail
Route::get('/Freight-Transportation-Detail', [FrontendController::class, 'freightTransportDetail'])->name('freighttransport-detail');
Route::get('/Hazmat-Transport', [FrontendController::class, 'hazmatTransport'])->name('frontend.forms.hazmattransport');
Route::get('/Dry-Van-Transport', [FrontendController::class, 'dryVan'])->name('frontend.forms.dryvan');
Route::get('/Reefer-Shipping-Transport', [FrontendController::class, 'reeferTrucking'])->name('frontend.forms.reefertrucking');
// order tracking
Route::post('order/tracking', [MainController::class, 'trackOrder'])->name('track.order');
// Route::prefix('vehicle')->group(function () {
Route::get('/car', [FormVehicleController::class, 'car'])->name('form.vehicle.car');
Route::get('/motorcycle', [FormVehicleController::class, 'motorcycle'])->name('form.vehicle.form.vehicle.car');
Route::get('/golf-cart', [FormVehicleController::class, 'golf_cart'])->name('form.vehicle.golf_cart');
Route::get('/atv-utv', [FormVehicleController::class, 'atv_utv'])->name('form.vehicle.atv_utv');
Route::get('/boat', [FormVehicleController::class, 'boat'])->name('form.vehicle.boat');
Route::get('/heavy', [FormVehicleController::class, 'heavyEquipment'])->name('form.vehicle.heavyEquipment');
Route::get('/freight', [FormVehicleController::class, 'freight'])->name('form.vehicle.freight');
Route::get('/roro-shipping', [FormVehicleController::class, 'roro'])->name('form.vehicle.roro');
Route::get('/recreational-vehicle', [FormVehicleController::class, 'recreationalVehicle'])->name('form.recreational-vehicle');
Route::get('/quote-form', [FormVehicleController::class, 'quoteForm'])->name('quote.form.combine');
Route::get('/commercial-truck-transport', [FormVehicleController::class, 'commercialTruck'])->name('commercial.truck.transport');
Route::get('/construction_transport', [FormVehicleController::class, 'constructionTransport'])->name('frontend.forms.construction_transport');
Route::get('/excavator', [FormVehicleController::class, 'excavator'])->name('frontend.forms.excavator');
Route::get('/farm_transport', [FormVehicleController::class, 'farmTransport'])->name('frontend.forms.farm_transport');
Route::get('/rv_transport', [FormVehicleController::class, 'rvTransport'])->name('frontend.forms.rv_transport');
// });
Route::post('/get-subcategories', [MainController::class, 'get_subcategories'])->name('get.subcategories');
Route::post('/submit/quote', [QuoteController::class, 'store'])->name('submit.quote');
// get models on basis of year n make
Route::get('/get-models', [MainController::class, 'getmodel'])->name('get.models');
// get models on basis of year n make
Route::post('/get-zipcodes', [MainController::class, 'get_zip'])->name('get.zipcodes');
// get partial forms for index
Route::get('/get-partial-form', [MainController::class, 'partialForm'])->name('get.partial.form');
// order form
Route::get('/order-form', [OrderFormController::class, 'index'])->name('order.form');
// verify Email
Route::post('/verifyEmail', [OrderFormController::class, 'verify'])->name('verify.email');
// order.form.store
Route::post('/order-form/store', [OrderFormController::class, 'store'])->name('order.form.store');
// order.form.storeCard
Route::post('/order-form/storeCard', [OrderFormController::class, 'storeCard'])->name('order.form.storeCard');
// order.form.storeCard
Route::get('/zipcode-suggestions', [PortToPortController::class, 'zipcode']);
// get order details
// Route::post('/order-form/{id}/{userid}', [OrderFormController::class, 'getOrderDetails'])->name('get.order.details');
Route::post('/order-form', [OrderFormController::class, 'getOrderDetails'])->name('get.order.details');
// Admin routes
Route::middleware('admin')->prefix('admin')->group(function () {
    // Admin dashboard
    Route::get('/', [AdminController::class, 'index'])->name('admin.index');
    // Blog routes
    Route::prefix('blogs')->group(function () {
        Route::get('/', [BlogController::class, 'index'])->name('blogs.index');
        Route::get('/add', [BlogController::class, 'create'])->name('blogs.create');
        Route::post('/store', [BlogController::class, 'store'])->name('blogs.store');
        Route::get('/edit/{id}', [BlogController::class, 'edit'])->name('blogs.edit');
        Route::put('/update/{id}', [BlogController::class, 'update'])->name('blogs.update');
        Route::delete('/destroy/{blog}', [BlogController::class, 'destroy'])->name('blogs.destroy');
    });
    // Edit Frontend NavBar
    Route::prefix('navbar')->group(function () {
        Route::get('/', [MenuController::class, 'index'])->name('navbar.index');
        Route::get('/add', [MenuController::class, 'create'])->name('navbar.create');
        Route::post('/store', [MenuController::class, 'store'])->name('navbar.store');
        Route::get('/edit/{id}', [MenuController::class, 'edit'])->name('navbar.edit');
        Route::post('/update/{id}', [MenuController::class, 'update'])->name('navbar.update');
        Route::delete('/destroy/{id}', [MenuController::class, 'destroy'])->name('navbar.destroy');
    });
    // Review routes
    Route::resource('reviews', ReviewController::class);
    // User Management routes
    Route::prefix('users')->group(function () {
        Route::get('/', [UserManagementController::class, 'index'])->name('users.index');
        Route::get('/add', [UserManagementController::class, 'create'])->name('users.create');
        Route::post('/store', [UserManagementController::class, 'store'])->name('users.store');
        Route::get('/edit/{id}', [UserManagementController::class, 'edit'])->name('users.edit');
        Route::post('/update/{id}', [UserManagementController::class, 'update'])->name('users.update');
        Route::delete('/destroy/{id}', [UserManagementController::class, 'destroy'])->name('users.destroy');
    });
    // Review Site routes
    Route::prefix('site_review')->group(function () {
        Route::get('/', [ReviewSiteController::class, 'index'])->name('site_review.index');
        Route::get('/add', [ReviewSiteController::class, 'create'])->name('site.review.create');
        Route::post('/store', [ReviewSiteController::class, 'store'])->name('site.review.store');
        Route::get('/edit/{id}', [ReviewSiteController::class, 'edit'])->name('site.review.edit');
        Route::post('/update/{id}', [ReviewSiteController::class, 'update'])->name('site.review.update');
        Route::delete('/destroy/{id}', [ReviewSiteController::class, 'destroy'])->name('site.review.destroy');
    });
    Route::group(['prefix' => 'port'], function () {
        Route::get('/', [PortDetailController::class, 'index'])->name('admin.port');
        Route::get('/create', [PortDetailController::class, 'create'])->name('admin.port.create');
        Route::post('/store', [PortDetailController::class, 'store'])->name('admin.port.store');
        Route::post('/search', [PortDetailController::class, 'find']);
        Route::get('/edit/{id}', [PortDetailController::class, 'edit'])->name('admin.port.edit');
        Route::post('/update/{id}', [PortDetailController::class, 'update'])->name('admin.port.update');
        Route::post('/destroy', [PortDetailController::class, 'destroy'])->name('admin.port.destroy');
        Route::get('/show/{id}', [PortDetailController::class, 'show'])->name('admin.port.show');
        Route::post('/delete', [PortDetailController::class, 'delete'])->name('admin.port.delete');
        Route::post('/show/search', [PortDetailController::class, 'search']);
        Route::get('/search/get', [PortDetailController::class, 'get']);
    });
    // Service categories routes
    Route::resource('service_categories', ServiceCategoryController::class);
    // Service routes
    Route::resource('services', ServiceController::class);
    // faqs
    Route::resource('faqs', FAQsController::class);
    // contact msgs add
    Route::prefix('contact_messages')->group(function () {
        Route::get('/', [ContactMessageController::class, 'index'])->name('contact_messages.index');
        Route::get('/show/{contactMessage}', [ContactMessageController::class, 'show'])->name('contact_messages.show');
        Route::delete('/destroy/{contactMessage}', [ContactMessageController::class, 'destroy'])->name('contact_messages.destroy');
    });
    // mewsletter
    Route::prefix('mews_letter')->group(function () {
        Route::get('/', [AdminController::class, 'indexNewsLetter'])->name('newsLetter.index');
        // Route::get('/show/{newsLetter}', [AdminController::class, 'showNewsLetter'])->name('newsLetter.show');
        Route::delete('/destroy/{newsLetter}', [AdminController::class, 'destroyNewsLetter'])->name('newsLetter.destroy');
    });
    // new_layout
    Route::prefix('service/new_layout')->group(function () {
        Route::get('/', [ServiceController::class, 'new_layout'])->name('service.new_layout.index');
    });
    // port to port
    Route::resource('port-to-ports', PortToPortController::class);
    // nation-wide-transport
    Route::resource('nationwide-transports', NationWideTransportController::class);
});
Auth::routes();
// Blog details
Route::get('/{slug}', [FrontendController::class, 'blogDetailsNoSlug'])
    ->name('blog.details.noSlug')
    ->where('slug', '[^/]+');
