<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\WebsiteController;
use Illuminate\Support\Facades\Route;

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

Route::get('websites', [WebsiteController::class, 'getList']);
Route::post('websites', [WebsiteController::class, 'store']);

Route::get('posts', [PostController::class, 'getList']);
Route::post('posts', [PostController::class, 'store']);

Route::post('subscribe', [SubscriptionController::class, 'subscribe']);
Route::post('unsubscribe', [SubscriptionController::class, 'unsubscribe']);
