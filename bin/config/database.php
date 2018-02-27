<?php 

return [

	'type' => remote('database', 'DB_TYPE'),

	'host'=> remote('database', 'DB_HOST'),

	'name'=> remote('database', 'DB_NAME'),

	'user'=> remote('database', 'DB_USER'),

	'password'=> remote('database', 'DB_PASSWORD'),
];