<?php 

namespace App\Models;

use Shadow\Database\Razor;

class User extends Razor 
{
	public static function instance() {
		return parent::instance()->table('users');
	}
	
}