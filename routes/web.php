<?php

use App\Http\Controllers\UserAuth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
 */

Route::get('/', function () {
    return view('welcome');
});

Route::get('/auth/github/redirect', [UserAuth::class, 'login']);

Route::get('/auth/github/callback',[UserAuth::class,'logincallback']);

// Route::get('/auth/github/redirect', function () {
//     return Socialite::driver('github')->redirect();
// });

// Route::get('/auth/github/callback', function () {
//     $user = Socialite::driver('github')->user();

//     // $user->token
// });