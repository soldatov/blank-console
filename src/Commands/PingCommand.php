<?php

namespace App\Commands;

use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

#[AsCommand(
    name: 'ping',
    description: 'Ping command for hello word.'
)]
class PingCommand extends AppCommand
{
    public function execute(InputInterface $input, OutputInterface $output): int
    {
        $output->writeln('pong');
        return 0;
    }
}