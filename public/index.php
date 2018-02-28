<?php 

require_once __DIR__ .'/../vendor/autoload.php';

session_start();

$app = new Shadow\Core\Application();
$app->run();
