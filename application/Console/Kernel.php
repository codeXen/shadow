<?php 

namespace App\Console;

use Shadow\Console\Kapitan;

class Kernel extends Kapitan
{
	public function fire() {
		$this->application();

		//Register your commands
		$this->register(new GreetCommand());
		$this->register(new CreateControllerCommand());
		$this->register(new CreateModelCommand());
		$this->run();
	}
}