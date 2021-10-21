<?php

$dsn = 'mysql:dbname=beanies;port=3306;host=127.0.0.1';
$user = 'root';
$password = '';

try{
    $connection = new PDO($dsn, $user, $password, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);
} catch (PDOException $e) {
    exit('Connexion echouée : ' . $e->getMessage());
}