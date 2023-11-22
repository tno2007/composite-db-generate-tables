<?php declare(strict_types=1);
return [
     'sqlite' => [
         'driver' => 'pdo_sqlite',
         'path' => __DIR__ . '/tests/runtime/sqlite/database.db',
     ],
     'mysql' => [
         'driver' => 'pdo_mysql',
         'dbname' => 'compositedb',
         'user' => 'root',
         'password' => 'my-secret-pw',
         'host' => '127.0.0.1',
     ],
     'postgres' => [
         'driver' => 'pdo_pgsql',
         'dbname' => 'test',
         'user' => 'test',
         'password' => 'test',
         'host' => '127.0.0.1',
     ],
];