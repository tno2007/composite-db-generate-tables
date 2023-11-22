<?php

declare(strict_types=1);
include 'vendor/autoload.php';

use Composite\Sync\Commands;
use Symfony\Component\Console\Application;

//may be changed with .env file
putenv('CONNECTIONS_CONFIG_FILE=./config.php');
putenv('ENTITIES_DIR=./src');
putenv('MIGRATIONS_DIR=./src/Migrations');
putenv('MIGRATIONS_NAMESPACE=App\Migrations');

$app = new Application();
$app->addCommands([
     new Commands\GenerateEntityCommand(),
     new Commands\GenerateTableCommand(),
     new Commands\MigrateCommand(),
]);
$app->run();