<?php

$host = 'sql104.infinityfree.com';
$dbname = 'if0_41343328_fullstack_web';
$username = 'if0_41343328';
$password = 'rjw8p95Gcxvd';
$port = '3306';

try {
    // 1 - on créé l'instance PDO (La tentative de connexion)
    $pdo = new PDO("mysql:host=$host;port=$port;dbname=$dbname", $username, $password);

    // 2 - on configure mode d'erreur
    $pdo->setAttribute(
        PDO::ATTR_ERRMODE, //Mode d'erreur
        PDO::ERRMODE_EXCEPTION // throw (lancer) une exception si il y a une erreur de BDD
        );

    // echo "Connexion réussie!";
} catch (PDOException $e) {
    // 3 - on gère les erreurs
    echo "Erreur de connexion : " . $e->getMessage();
}

?>