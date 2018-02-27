<?php 

$router->get('/', function() {
	$debugbar = debugbar();

	return render('welcome', compact('debugbar'));
});

//EXAMPLE CRUD /backend/products -->>
$router->group('backend', null, function($route) {
	$route->get('/products', 'Backend\ProductController@index');
	$route->get('/products/create', 'Backend\ProductController@create');
	$route->post('/products/store', 'Backend\ProductController@store');
	$route->get('/products/{a}/edit', 'Backend\ProductController@edit');
	$route->patch('/products/{a}/update', 'Backend\ProductController@update');
	$route->get('/products/{a}/delete', 'Backend\ProductController@delete');
});

$router->run();
