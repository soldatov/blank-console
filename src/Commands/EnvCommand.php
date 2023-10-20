<?php

namespace App\Commands;

use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

#[AsCommand(
    name: 'env',
    description: 'Print env values'
)]
class EnvCommand extends AppCommand
{
    public function execute(InputInterface $input, OutputInterface $output): int
    {
        $output->writeln('APP_ENV=' . getenv('APP_ENV'));
        return 0;
    }
}