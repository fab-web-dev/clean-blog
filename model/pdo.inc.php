<?php

// permet d'accèder à la base de donnée mysql en définissant le domaine et le nom de la base de donnée.
// 
try {

    $dns = 'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME;
    $options = array(
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES " . DB_CHARSET,
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    );

    $pdo = new PDO($dns, DB_USER, DB_PASSWORD, $options);
    //var_dump($pdo);
} catch (Exception $e) {
    die("Connexion impossible : " . $e->getMessage());
}
