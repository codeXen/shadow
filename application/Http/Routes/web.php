<?php 

/* Web Routes -------------------------------------------------------------------------- */

$router->get('/', function() {
	return view('welcome');
});

$router->run();