#!/usr/bin/env php
<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\Commands\EnvCommand;
use App\Commands\PingCommand;
use Symfony\Component\Console\Application;
use Symfony\Component\Dotenv\Dotenv;

$dotenv = new Dotenv();
if (file_exists(__DIR__ . '/.env')) {
    $dotenv->usePutenv()->load(__DIR__ . '/.env');
}

$application = new Application();
$application->add(new PingCommand());
$application->add(new EnvCommand());
$application->run();