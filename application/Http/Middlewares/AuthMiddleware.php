<?php 

namespace App\Http\Middlewares;

use Shadow\Authentication\Auth;

class AuthMiddleware
{
	public function __construct() {

	}

    public function init() {		
		if(Auth::checkSession()) {
			return true;
		}
		
		return redirect('backend/login');
	}
}
