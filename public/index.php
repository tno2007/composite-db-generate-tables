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

echo('id created: ' . $contact->id);
echo('<br />');


//Read
$contact = $table->findByPk($contact->id);

//Update
$contact->is_test = true;
$table->save($contact);

//Delete
$table->delete($contact);

echo('id deleted: ' . $contact->id);
echo('<br />');

//Other selects out of the box
$table->findAll();
$table->countAll();

echo('<p>done!</p>');