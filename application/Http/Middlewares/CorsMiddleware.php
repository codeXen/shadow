<?php 

namespace App\Middlewares;

use Exception;

class CorsMiddleware
{
	public function __construct() {

	}

	public function init() {
		$token = $_SESSION['_csrfToken'];
		$_csrfToken = input()->get('_csrfToken');

		if ($_SERVER['REQUEST_METHOD'] === 'POST') {
			if(!empty($_csrfToken) && $_csrfToken == $token) {
				// echo "token matched";
				return true;
			}

			throw new Exception('Token missmatch exception.');
		}
		return true;
	}
}