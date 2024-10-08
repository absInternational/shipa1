<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\QuoteApiController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\PaymentController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('/submit/quote', [QuoteApiController::class, 'store']);
Route::get('/get=models', [MainController::class, 'getmodel']);
Route::get('/categories', [QuoteApiController::class, 'index']);
Route::get('/categories/{category}/subcategories', [QuoteApiController::class, 'getSubcategories']);
Route::post('/process-payment', [PaymentController::class, 'processPayment']);