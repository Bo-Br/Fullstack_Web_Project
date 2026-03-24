<?php
session_start(); // Se connecte a la session
$_SESSION = [];
session_destroy(); // Supprime la session

header("Location: /index.php"); //redirect vers la page d'accueil
exit;
?>