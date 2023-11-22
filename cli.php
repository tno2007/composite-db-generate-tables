<?php

declare(strict_types=1);
include 'vendor/autoload.php';

use Composite\Sync\Commands;
use Symfony\Component\Console\Application;

//may be changed with .env file
putenv('CONNECTIONS_CONFIG_FILE=./config.php');

$app = new Application();
$app->addCommands([
     new Commands\GenerateEntityCommand(),
     new Commands\GenerateTableCommand(),
]);
$app->run();