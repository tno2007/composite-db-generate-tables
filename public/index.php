<?php

declare(strict_types=1);

use App\Application\Contact;
use App\Tables\ContactTable;

require __DIR__ . '/../vendor/autoload.php';

putenv('CONNECTIONS_CONFIG_FILE=../config.php');

//$cm = new ConnectionManager();
//$cm::getConnection('sqlite');

$table = new ContactTable();

//Create    
$contact = new Contact(
    email: 'user@example.com',
    name: 'John',
    languages: ['en', 'fr'],
);
$table->save($contact);

//Read
$user = $table->findByPk(123);

//Update
// $user->status = Status::BLOCKED;
$table->save($user);

//Delete
$table->delete($user);

//Other selects out of the box
$table->findAll();
$table->countAll();

echo 'done';