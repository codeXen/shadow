<?php 

namespace App\Console;

use Shadow\Console\Kapitan;

class Kernel extends Kapitan
{
	public function fire() {
		$this->application();

		//Register your commands
		$this->register(new GreetCommand()); //app:greet
		$this->register(new GenerateAppKeyCommand()); //app:generate-key
		$this->register(new CreateControllerCommand()); //create:controller
		$this->register(new CreateModelCommand()); //create:model
		$this->register(new DatabaseBackupCommand()); //database:backup
		$this->register(new ServerCommand()); //server
		$this->run();
	}
}