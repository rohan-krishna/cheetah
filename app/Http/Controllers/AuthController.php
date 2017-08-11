<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Socialite;
use App\AuthenticateUser;

class AuthController extends Controller
{
    //
    public function login(AuthenticateUser $authenticateUser, Request $request)
    {
    	$authenticateUser->execute($request->has('code'));
    	// return Socialite::with('graph')->redirect();
    }
}
