<?php

$host = 'localhost';
$dbname = 'fullstack_web';
$username = 'root';
$password = '';
$port = '3306';

try {
    // 1 - on créé l'instance PDO (La tentative de connexion)
    $pdo = new PDO("mysql:host=$host;port=$port;dbname=$dbname", $username, $password);

    // 2 - on configure mode d'erreur
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Connexion réussie!";
} catch (PDOException $e) {
    // 3 - on gère les erreurs
    echo "Erreur de connexion : " . $e->getMessage();
}

?>