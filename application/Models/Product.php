<?php 

namespace App\Models;

use Shadow\Database\Razor;

class Product extends Razor
{
	public static function instance() {
		return parent::instance()->table('products');
	}
}