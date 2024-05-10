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

// Blog details
Route::get('/blog/{slug}', [FrontendController::class, 'blogDetails'])->name('blog.details');

// About us
Route::get('/about_us', [FrontendController::class, 'aboutUs'])->name('aboutUs');

// Contact us
Route::get('/contact_us', [FrontendController::class, 'contactUs'])->name('contactUs');

// Service
Route::get('/services', [FrontendController::class, 'services'])->name('services');

// Service detail
Route::get('/services/{slug}', [FrontendController::class, 'serviceDetails'])->name('service.details');

// Auto Auction
Route::get('/auto_auction', [FrontendController::class, 'autoAuction'])->name('autoAuction');

// news letter add
Route::post('/subscribe', [FrontendController::class, 'subscribe'])->name('newsletter.subscribe');

// contact msgs add
// Route::resource('contact_messages', ContactMessageController::class);
Route::post('contact_messages', [ContactMessageController::class, 'store'])->name('contact_messages.store');

// order tracking page
Route::get('order_tracking', [FrontendController::class, 'orderTracking'])->name('order.tracking');

// terms & conditions
Route::get('/terms_and_conditions', [FrontendController::class, 'termsAndConditions'])->name('termsAndConditions');

// privacy policy
Route::get('/privacy_policy', [FrontendController::class, 'privacyPolicy'])->name('privacyPolicy');

// order tracking
Route::post('order/tracking', [MainController::class, 'trackOrder'])->name('track.order');

// Route::prefix('vehicle')->group(function () {
Route::get('/car', [FormVehicleController::class, 'car'])->name('form.vehicle.car');
Route::get('/motorcycle', [FormVehicleController::class, 'motorcycle'])->name('form.vehicle.form.vehicle.car');
Route::get('/golf-cart', [FormVehicleController::class, 'golf_cart'])->name('form.vehicle.golf_cart');
Route::get('/atv-utv', [FormVehicleController::class, 'atv_utv'])->name('form.vehicle.atv_utv');
// });

Route::post('/submit/quote', [QuoteController::class, 'store'])->name('submit.quote');

// get models on basis of year n make
Route::get('/get-models', [MainController::class, 'getmodel'])->name('get.models');

// get models on basis of year n make
Route::post('/get-zipcodes', [MainController::class, 'get_zip'])->name('get.zipcodes');

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

    // Review routes
    Route::resource('reviews', ReviewController::class);

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
});

Auth::routes();

// Blog details
Route::get('/{slug}', [FrontendController::class, 'blogDetailsNoSlug'])
    ->name('blog.details.noSlug')
    ->where('slug', '[^/]+');

