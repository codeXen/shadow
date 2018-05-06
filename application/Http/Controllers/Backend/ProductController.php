<?php 

namespace App\Controllers\Backend;

// Models -->>
use App\Models\Product;

use App\Controllers\Controller;

class ProductController extends Controller 
{
	private $notify_message = null;
	private $notify_type = 'success';

	public function index() {
		$products = Product::instance()->orderBy('id', 'desc')->getAll();

		// return $this->view('welcome', compact('debugbar'));
		return render('backend/products/index', compact('products'));
	}

	public function create() {
		return render('backend/products/create');
	}

	public function store() {
		$validate = validator()->check(input()->all(), [
			'title' => ['required' => true, 'min' => 2, 'max' => 100], 
			'price' => ['required' => true],
			'description' => ['required' => true], 
			'image' => ['required' => true]
		]);

		if($validate->passed()) {
			try {
				$newproduct = input()->all();
				$newproduct['image'] = $this->saveProductsImage();
				$product = Product::instance()->insert($newproduct);
			} catch (Exception $e) {

			}
		} else {
			$errors = $validate->errors();
			
			return render('backend/products/create', compact('errors'));
		}

		return redirect('backend/products');
	}

	public function edit($id) {
		$product = Product::instance()->where('id', $id)->get();

		return render('backend/products/edit', compact('product'));
	}

	public function update($id) {
		try {
			$product = Product::instance()->where('id', $id);
			$product->update([
				'title' => input()->get('title'),
				'price' => input()->get('price'),
				'description' => input()->get('description'),
				'image' => input()->get('image')
			]);
		} catch (Exception $e) {}

		return redirect('backend/products');
	}

	public function delete($id) {
		$product = Product::instance()->where('id', $id);
		$product->delete();
	
		return redirect('backend/products');
	}


	private function saveProductsImage() {
		return "default.png";
	}

}