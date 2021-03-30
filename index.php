<?php
require __DIR__.'/vendor/autoload.php';
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;
// This assumes that you have placed the Firebase credentials in the same directory
// as this PHP file.
$serviceAccount = ServiceAccount::fromJsonFile(__DIR__ . '/auth-7b857-578bd938bb8f.json');
$firebase = (new Factory)
   ->withServiceAccount($serviceAccount)
   ->withDatabaseUri('https://my-project.firebaseio.com')
   ->create();
$database = $firebase->getDatabase();

var_dump($database);