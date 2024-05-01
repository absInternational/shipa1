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
Route::get('/', [FrontendController::class, 'index'])->name('/');

Route::get('/home', [HomeController::class, 'index'])->name('home');

// Blogs
Route::get('/blogs', [FrontendController::class, 'blogs'])->name('blogs');

// Blog details
Route::get('/blogs/{slug}', [FrontendController::class, 'blogDetails'])->name('blog.details');

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

// news letter add
Route::resource('contact_messages', ContactMessageController::class);

// order tracking page
Route::get('order_tracking', [FrontendController::class, 'orderTracking'])->name('order.tracking');

// order tracking
Route::post('order/tracking', [MainController::class, 'trackOrder'])->name('track.order');


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
});

Auth::routes();
