<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
    <header>

        <?php require_once("./assets/modules/header.php");   ?>

    </header>

    <section class = "main_bck">
        <h1>Login</h1>
        <form method="POST" action="traitement.php" onsubmit="return validateForm()" >
        <label for="username">Identifiant :</label><br>
        <input type="text" id="username" name="username" required><br><br>

        <label for="password">Mot de passe :</label><br>
        <input type="password" id="password" name="password" required><br><br>

        <button type="submit">Se connecter</button>
        </form>
    </section>



    <footer> 

        <?php require_once("./assets/modules/footer.php");   ?> 

    </footer>
    <script src="assets/js/validation_login.js"></script>
</body>
</html>