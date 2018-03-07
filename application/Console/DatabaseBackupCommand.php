<?php
namespace App\Console;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Formatter\OutputFormatterStyle;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class DatabaseBackupCommand extends Command
{
  protected function configure()
  {
    $this
    ->addArgument('backupname', InputArgument::OPTIONAL, 'Name of The backup file generated.')
    ->addArgument('option', InputArgument::OPTIONAL, 'Optional params')
    ->setName('database:backup')
    ->setDescription('Backup database.')
    ->setHelp("This command allows you to backup database...");
  }

  protected function execute(InputInterface $input, OutputInterface $output)
  {
    $output->writeln([
      "<comment>Executing Command -> database:backup </comment>",
      '**************************************************',
    ]);

    $dbhost = remote('database', 'DB_HOST');
    $dbuser = remote('database', 'DB_USER');
    $dbpass = remote('database', 'DB_PASSWORD');
    $dbname = remote('database', 'DB_NAME');
    $backupname = $input->getArgument('backupname') ?: $dbname;
	$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

	$tables = array();
	$result = mysqli_query($con,"SHOW TABLES");
	while ($row = mysqli_fetch_row($result)) {
		$tables[] = $row[0];
	}
	$return = '';

	foreach ($tables as $table) {
		$result = mysqli_query($con, "SELECT * FROM ".$table);
		$num_fields = mysqli_num_fields($result);

		$return .= 'DROP TABLE '.$table.';';
		$row2 = mysqli_fetch_row(mysqli_query($con, 'SHOW CREATE TABLE '.$table));
		$return .= "\n\n".$row2[1].";\n\n";

		for ($i=0; $i < $num_fields; $i++) { 
			while ($row = mysqli_fetch_row($result)) {
				$return .= 'INSERT INTO '.$table.' VALUES(';
				for ($j=0; $j < $num_fields; $j++) { 
					$row[$j] = mysqli_real_escape_string($con, $row[$j]);
					if (isset($row[$j])) {
						$return .= "'".$row[$j]."'";
					} else { 
						$return .= "''";
					}
					if($j<$num_fields-1) { 
						$return .= ','; 
					}
				}
			$return .= ");\n";
			}
		}
		$return .= "\n\n\n";
	}

	$handle = fopen('bin/database/backups/'.$backupname.'.sql', 'w+');
	fwrite($handle, $return);
	fclose($handle);

    // $output->writeln(["<bg=green;options=bold>Success</>"]);

	$successStyle = new OutputFormatterStyle('white', 'green');
	$output->getFormatter()->setStyle('success', $successStyle);

	$infoStyle = new OutputFormatterStyle('white', 'blue');
	$output->getFormatter()->setStyle('info', $infoStyle);
	/**
	 * Declaring the formatter
	 */
	$formatter = $this->getHelper('formatter');

	/**
	 * The output to the console
	 */
	$infoMessage = array('INFO:', 'Database backup successfull.');
	$formattedInfoBlock = $formatter->formatBlock($infoMessage, 'success', TRUE);
	$output->writeln($formattedInfoBlock);

  }
}