<?php 

return [
	
	'driver' => remote('mail', 'MAIL_DRIVER') ?: 'smtp',

	'host' => remote('mail', 'MAIL_HOST') ?: 'smtp.gmail.com',
	
	'port'=> remote('mail', 'MAIL_PORT') ?: 587,
	
	'username' => remote('mail', 'MAIL_USERNAME') ?: '',
	
	'password' => remote('mail', 'MAIL_PASSWORD') ?: '',
	
	'encryption' => remote('mail', 'MAIL_ENCRYPTION') ?: 'tls',

];