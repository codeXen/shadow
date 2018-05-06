<?php 

namespace App\Middlewares;

use Exception;

class WebMiddleware
{
	public function __construct() {

	}

	public function init() {
		// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		// 	if(!isset($_SESSION['_csrfToken'])) {	
		// 		$_SESSION['_csrfToken'] = $this->generateCsrfToken();
		// 	}
		// } else {
		// 	unset($_SESSION['_csrfToken']);
		// 	$_SESSION['_csrfToken'] = $this->generateCsrfToken();
		// }

		if (!isset($_SESSION['_csrfToken'])) {
			$_SESSION['_csrfToken'] = bin2hex(random_bytes(32));;
			$_SESSION['_csrfTokenTime'] = time();
		} else {
			$token = $_SESSION['_csrfToken'];
		}

	}

}