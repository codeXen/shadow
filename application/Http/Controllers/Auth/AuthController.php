<?php 

namespace App\Controllers\Auth;

use App\Controllers\Controller;
use Shadow\Authentication\Auth;

class AuthController extends Controller
{
	public function __construnct() {
		parent::construct();
	}

	public function getLogin() {
		return render('auth/login');
	}

	public function postLogin() {
		$username = input()->get('username');
		$password = input()->get('password');

		Auth::login(['username' => $username, 'password' => $password], function() {
			return redirect('/');
		});
	}

	public function getLogout() {
		Auth::logout();

		return redirect('auth/login');
	}
}