<?php
namespace App\Console;

use Shadow\Console\Genarators;
use Shadow\Console\KapitanNotify;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class ServerCommand extends Command
{
    protected function configure()
    {
        $this
            ->addArgument('option', InputArgument::OPTIONAL, 'Enter port.')
            ->setName('server')
            ->setDescription('Starts development server.')
            ->setHelp("This command starts development server...")
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $port = $input->getArgument('option') ?: '8000';

        KapitanNotify::render("success", "Listening on {$port}", $output, $this);

        exec("php -S localhost:{$port} -t public");
        
        return true;

    }
}