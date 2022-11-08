<?php

  require  __DIR__.'/vendor/autoload.php';

  use Kreait\Firebase\Factory;
  use Kreait\Firebase\Auth;

  $factory = (new Factory)
      ->withServiceAccount('C:\xampp\htdocs\official-tech-algo\tech-algo-firebase-adminsdk-k0glk-a7c6ca1e32.json')
      ->withDatabaseUri('https://tech-algo-default-rtdb.firebaseio.com/');

  $database = $factory->createDatabase();
  $auth = $factory->createAuth();

?>