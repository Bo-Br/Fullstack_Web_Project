<?php
session_start(); // Se connecte a la session
$_SESSION = [];
session_destroy(); // Supprime la session

header("Location: /Fullstack_Web_Project/public/index.php"); //redirect vers la page d'accueil
exit;
?>