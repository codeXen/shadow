<?php 

namespace App\Console;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Shadow\Console\KapitanNotify;

class GenerateAppKeyCommand extends Command
{
	protected $commandName = 'app:generate-key';
	protected $commandDescription = "Generate app key";

	protected function configure()
	{
		$this
			->setName($this->commandName)
			->setDescription($this->commandDescription)
		;
	}

	protected function execute(InputInterface $input, OutputInterface $output)
	{
		$app_key = $this->generateApplicationKey();

		$message = "Application key generated! ". $app_key;

		return KapitanNotify::render('success', $message, $output, $this);
	}

	function generateApplicationKey($length = 40) {
		$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$charactersLength = strlen($characters);
		$randomString = '';
		for ($i = 0; $i < $length; $i++) {
			$randomString .= $characters[rand(0, $charactersLength - 1)];
		}
		return $randomString;
	}
}