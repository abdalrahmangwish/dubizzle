<?php

use App\Http\Controllers\PhotoController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
 */

// Route::get('/auth/redirect', [UserAuth::class, 'gitHubRedirect']);
// Route::get('/Auth/git/Callback', [UserAuth::class, 'gitHubCallback']);

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {

// });

// -->not register yet  onle user can see posts in app
// Route::get('add', [PostController::class, 'tryIt']);
Route::controller(PostController::class)->group(function () {
    Route::get('show/property', [PostController::class, 'getProperty']); //show all property
    Route::get('show/job', [PostController::class, 'getJob']);
    Route::get('show/healt', [PostController::class, 'getHealth']);
    Route::get('show/TaxiOffic', [PostController::class, 'getTaxioffic']);
    Route::get('show/mobile', [PostController::class, 'getMobile']);
    Route::get('show/table', [PostController::class, 'getTable']);
    Route::get('show/classified', [PostController::class, 'getcClassified']);
    Route::get('show/car', [PostController::class, 'getCar']);

});
Route::post('/show', [PhotoController::class, 'uploadPhoto']);