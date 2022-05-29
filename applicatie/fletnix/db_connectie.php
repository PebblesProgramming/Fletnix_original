<?php

// defined in 'variables.env'
$db_host = 'host.docker.internal,1434'; // de database server 
$db_name = 'movies';                    // naam van database

// defined in sql-script 'movies.sql'
$db_user    = 'applicatie';                 // db user
$db_password = 'testpassword!Hallo-1244!';  // wachtwoord db user

try {
$connection = new PDO('sqlsrv:Server=' . $db_host . ';Database=' . $db_name . ';ConnectionPooling=0;', $db_user, $db_password);
$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
  echo $e->getMessage();
  unset($db_password);
  die();
}

// // Zorg ervoor dat eventuele fouttoestanden ook echt als fouten (exceptions) gesignaleerd worden door PHP.
// $verbinding->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Functie om in andere files toegang te krijgen tot de verbinding.
function maakVerbinding() {
  global $connection;
  return $connection;
}

unset($db_password);

?> 