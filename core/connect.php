<?php

$dsn = 'mysql:dbname=functions-php;host=localhost';
$user = 'root';
$password = 'root';


try {
    $bdd = new PDO($dsn, $user, $password);
}
catch (PDOException $e) {
    echo 'Échec lors de la connexion : ' . $e->getMessage();
}