<?php 
session_start();

require_once("get_db.php"); 

            
// Test si admni
            if (!isset($_SESSION['user_id']) || $_SESSION['is_admin'] != 1) {
                header("Location: index.php");
                exit;
            };
?>