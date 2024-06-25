<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Socialite;
use App\Models\User;

class SocialController extends Controller
{
    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function handleProviderCallback($provider)
    {
        $userSocial = Socialite::driver($provider)->stateless()->user();
        $user = User::where('email', $userSocial->getEmail())->first();

        if ($user) {
            Auth::login($user);
        } else {
            $user = User::create([
                'name' => $userSocial->getName(),
                'email' => $userSocial->getEmail(),
                'password' => bcrypt(str_random(16)), // or you can generate a random password
                'provider' => $provider,
                'provider_id' => $userSocial->getId(),
            ]);

            Auth::login($user);
        }

        return redirect()->route('home'); // Redirect to your desired route
    }
}