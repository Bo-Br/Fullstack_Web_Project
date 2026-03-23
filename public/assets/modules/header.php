<?php
include_once(__DIR__ . "/../../../backend/other/get_db.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&family=Roboto+Serif:ital,opsz,wght@0,8..144,100..900;1,8..144,100..900&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>

    <header id="header">
        <a href="index.php" class="logo_link">
            <img class="logo_nav" src="assets/images/logo_nav.png" alt="Retour à l'accueil L'Atelier du Barbier">
        </a>

        <nav class="nav_link">
            <a href="index.php" class="nav_item">Accueil</a>
            
            <a href="reserver.php" class="btn_nav">Rendez-Vous</a>
            <a href="login.php" class="btn_nav btn_icon">
                <img class="icon_btn" src="assets/images/logo_login.png" alt="Se connecter">
            </a>
        </nav>
    </header>

</body>
</html>

