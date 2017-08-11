<?php

namespace App;

use Socialite;
use Auth;
use Repositories\UserRepository;


private $users;
private $socialite;
private $auth;

/**
* 
*/
class AuthenticateUser
{	
	public function __construst(UserRepository $users,Socialite $socialite,Auth $auth)
	{
		$this->users = $users;
		$this->auth = $auth;
		$this->socialite = $socialite;
	}

	public function execute($hasCode)
	{
		# code...
	}
}