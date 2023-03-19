<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class UserAuth extends Controller
{

    // public function gitHubRedirect(Request $request)
    // {
    //     $user = Socialite::driver('github')->redirect();
    //     return $user;
    // }

    // public function gitHubCallback(Request $request)
    // {
    //     function () {
    //         $githubUser = Socialite::driver('github')->user();

    //         $user = User::updateOrCreate([
    //             'github_id' => $githubUser->id,
    //         ], [
    //             'name' => $githubUser->name,
    //             'email' => $githubUser->email,
    //             'github_token' => $githubUser->token,
    //             'github_refresh_token' => $githubUser->refreshToken,
    //         ]);

    //         Auth::login($user);

    //         return redirect('/dashboard');
    //     };

    // }

    // public function login()
    // {
    //     return Socialite::driver('github')->redirect();

    // }
    // public function logincallback()
    // {
    //     $user = Socialite::driver('github')->user();
    //     dd($user);
    // }
}
