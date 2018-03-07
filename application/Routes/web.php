<?php 

$router->middleware('auth', ['AuthMiddleware@init']);

$router->get('/', function() {
	return render('welcome');
});

















//EXAMPLE CRUD /backend/products -->>
$router->get('/backend/login', 'Backend\AuthController@getLogin');
$router->post('/backend/login', 'Backend\AuthController@postLogin');
$router->get('/backend/logout', 'Backend\AuthController@getLogout');

$router->group('backend', ['before' => 'auth'], function($route) {
	$route->get('/products', 'Backend\ProductController@index');
	$route->get('/products/create', 'Backend\ProductController@create');
	$route->post('/products/store', 'Backend\ProductController@store');
	$route->get('/products/{a}/edit', 'Backend\ProductController@edit');
	$route->patch('/products/{a}/update', 'Backend\ProductController@update');
	$route->get('/products/{a}/delete', 'Backend\ProductController@delete');
});

$router->run();
