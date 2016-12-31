<?php

namespace App\Http\Controllers\master_home;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\SocialAccountService;
use Illuminate\Support\Facades\Auth;
use Socialite;

class SocialAuthController extends Controller
{
    public function redirect($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function callback(SocialAccountService $service, $provider)
    {
        $user = $service->createOrGetUser(Socialite::driver($provider));
        Auth::login($user);
        return redirect('/login');
    }
}
