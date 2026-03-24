<!-- Ceci est un module de header a mettre dans chaque page -->


<?php

include_once($_SERVER['DOCUMENT_ROOT'] . "/public/backend/other/get_db.php"); // Connection a la BDD

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href= "/public/files/assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&family=Roboto+Serif:ital,opsz,wght@0,8..144,100..900;1,8..144,100..900&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="/public/files/assets/images/favicon.ico">
    <title>Document</title>
</head>
<body>

    <header id="header">
        <a href="/index.php" class="logo_link">
            <img class="logo_nav" src="/public/files/assets/images/logo_nav.png" alt="Retour à l'accueil L'Atelier du Barbier">
        </a>

        <nav class="nav_link">
            <a href="/index.php" class="nav_item"> Accueil </a>
            
            <a href="/public/files/reserver.php" class="btn_nav"> Reserver </a>


            <?php
            if (!isset($_SESSION['user_id']) || $_SESSION['is_admin'] == 0) { //Si n'est pas admin, on met le bouton login et l'icone se connecter dans le header 

                echo("<a href='/public/files/login.php' class='btn_nav btn_icon'>");
                echo("<img class='icon_btn' src='/public/files/assets/images/logo_login.png' alt='Se connecter'>");
                echo("</a>");

            }else{ // Si est admin mettre lien vers le dasboard et un bouton de déconnexion
                echo("<a href= '/public/backend/other/logout.php' class='btn_nav'> Déconnexion </a>");
                echo("<a href= 'dashboard.php' class='btn_nav'> Dashboard </a>");
            };
            ?>

                

        </nav>
    </header>

</body>
</html>

