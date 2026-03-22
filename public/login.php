
<?php

session_start();

/* SESSION ERASE
            $_SESSION['user_id'] = '';
            $_SESSION['email'] = '';
            $_SESSION['is_admin'] = '';
*/

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <header>

        <?php require_once("./assets/modules/header.php");   ?>

    </header>

    <section class = "main_bck">
        <div class = "login main_page" >
            <h1>Login</h1>
            <form method="POST" action="login.php">
                <label for="username">Identifiant :</label><br>
                <input type="text" id="username" name="username" required><br><br>

                <label for="password">Mot de passe :</label><br>
                <input type="password" id="password" name="password" required><br><br>
                <div class = "btn_login">
                    <button type="submit" class = "btn_submit">Se connecter</button>
                </div>
            </form>
        </div>
    </section>

<?php
var_dump($_SESSION);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['username']); // your form uses "username" field
    $password = $_POST['password'];

    // Fetch user
    $stmt = $pdo->prepare("SELECT * FROM users WHERE email_user = ?");
    $stmt->execute([$email]);
    $user = $stmt->fetch();

    if ($user) {
        if (password_verify($password, $user['password_user'])) {

            $_SESSION['user_id'] = $user['id_user'];
            $_SESSION['email'] = $user['email_user'];
            $_SESSION['is_admin'] = $user['is_admin'];
            

            if ($user['is_admin']) {
                header("Location: dashboard.php");
            } else {
                header("Location: index.php");
            }
            exit;
        } else {
            echo "Mot de passe incorrect.";
        }
    }
};
?>

    <footer> 

        <?php require_once("./assets/modules/footer.php");   ?> 

    </footer>
    <script src="assets/js/validation_login.js"></script>
</body>
</html>