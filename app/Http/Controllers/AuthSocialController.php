<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Socialite;
// use Laravel\Socialite\Facades\Socialite; // LINE_APP

class AuthSocialController extends Controller
{
   public function redirectToProvider() {
       return Socialite::driver('line')->redirect();
   }

    public function handleLineCallback() {
        dd('liste');
       $user = Socialite::driver('line')->user();
   }
}
