<?php 

namespace App\Controllers;

use App\Controllers\Controller;
use Shadow\Mailer\Mail;

class TestController extends Controller
{
	public function index() {
		$session = $_SESSION;
		var_dump($session);
		exit;
		
		$ok = (new Mail())
			->setFrom('Codexen', 'codexen7@gmail.com')
			->addTo('Ruju Bajracharya', 'bajra.ruju@gmail.com')
			->setSubject('Hello')
			->setBody('Hi, Ruju! I <strong>love</strong> you.')
			// ->setFakeFrom('Obama', 'fake@address.com') // if u want, a fake name, a fake email
			// ->addAttachment('host', '/etc/hosts')
			->send();
		var_dump($ok);
	}


}