<?php 
session_start(); // On ouvre la session
// On se connecte a la base de données
require_once($_SERVER['DOCUMENT_ROOT'] . "/public/backend/other/get_db.php"); 

            
// Test si admin. Si n'est pas admin, redirect vers index.php
            if (!isset($_SESSION['user_id']) || $_SESSION['is_admin'] != 1) {
                header("Location: /index.php");
                exit;
            };
?>