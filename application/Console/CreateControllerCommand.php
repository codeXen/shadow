<?php
namespace App\Console;

use Shadow\Console\Genarators;
use Shadow\Console\KapitanNotify;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class CreateControllerCommand extends Command
{
	protected function configure()
	{
		$this
			->addArgument('controllername', InputArgument::REQUIRED, 'Name Of The Controller to Generate.')
			->addArgument('option', InputArgument::OPTIONAL, 'Want to Generate a Model?')
			->setName('create:controller')
			->setDescription('Creates new Contoller.')
			->setHelp("This command allows you to create new Contoller...")
		;
	}

	protected function execute(InputInterface $input, OutputInterface $output)
	{
		// outputs multiple lines to the console (adding "\n" at the end of each line)
		$generator = Genarators::getInstance();
		$output->writeln([
			"<comment>Executing Command -> create:controller {$input->getArgument('controllername')}</comment>",
			'',
		]);

		$getArgumentOption = $input->getArgument('option');
		if ($getArgumentOption == 'withModel') {
			$generator->generateModel($input->getArgument('controllername'));
			$build = $generator->generateController($input->getArgument('controllername'));
		} else {
			$build = $generator->generateController($input->getArgument('controllername'));
		}

		if ($build['status']) {
			return KapitanNotify::render('success', $build['message'], $output, $this);
		} else {
			return KapitanNotify::render('danger', $build['message'], $output, $this);
		}

	}
}