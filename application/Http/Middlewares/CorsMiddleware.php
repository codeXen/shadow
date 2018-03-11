<?php 

namespace App\Middlewares;

use Shadow\Authentication\Auth;

class CorsMiddleware
{
	public function __construct() {

	}

	public static function init() {
		$token = null;
		if($checkrequest) { // If its post / patch / put request
			if(input()->get('_csrfToken') == $token) {
				return true;
			}
		}

		throw new Exception('Token missmatch exception');
	}
}