<?php

try {
    // Connexion à la base de données DSN
    $dsn = "mysql:dbname="._DB_NAME_.";host="._DB_HOST_.";charset=utf8";
    //options de connexion PDO, mode erreur et exception
    $option = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ];

    // Nouvelle instance de PDO
    $pdo = new PDO($dsn,_DB_USER_, _DB_PASSWORD_,  $option);

} catch (PDOException $e) {
    die ('Connexion échouée : ' . $e->getMessage());
}