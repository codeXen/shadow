<?php 

namespace App\Middlewares;

use Shadow\Authentication\Auth;

class AuthMiddleware
{
	public function __construct() {

	}

	public static function init() {
		
		// if(Auth::checkSession()) {
			return true;
		// }
		
		return redirect('backend/login');
	}
}