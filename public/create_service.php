<!-- test si admin -->
<?php include_once(__DIR__ . "/../backend/other/is_admin_test.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> ajout service </title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <header>

        <?php require_once("./assets/modules/header.php");   ?>

    </header>

    <section class = "main_bck">

        <div class = "main_page main_reservation">

            <h1> Créer un service </h1>
            <form method="POST" action="">
                <div class = "reservation_line">
                    <div class = "reservation_item">
                        <p>Titre du service :</p>            
                        <input type="text" name="title" placeholder="Titre" required>
                    </div>
                
                </div>
                <div class = "reservation_line">
                    <div class = "reservation_item">
                        <p>description du service :</p>
                        <input type="text" name="description" placeholder="description" required>
                    </div>
                    <div class = "reservation_item">
                        <p>Durée (en min)</p>
                        <input type="number" name="duration" placeholder="XX" required> <br>
                    </div>
                </div>

                    <div class = "reservation_item">
                        <p>Prix (en euros)</p>
                        <input type="number" name="price" placeholder="XX" required> <br>
                    </div>
                


                <div class = "reservation_line">
                    <div class = "btn_login"> 
                    <button type="submit" name="submit" class="btn_submit">Ajouter Service</button>
                    </div>
                </div>    
        
        
            </form>
<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $title = $_POST['title'] ?? '';
    $description = $_POST['description'] ?? '';
    $duration = $_POST['duration'] ?? '';
    $price = $_POST['price'] ?? '';
    

    if (!empty($title) && !empty($description) && !empty($duration) && !empty($price)){


        $sql = "INSERT INTO services 
        (nom, description, duree_minutes, prix_euros) 
        VALUES (:nom, :description, :duree_minutes, :prix_euros)";

        $stmt = $pdo->prepare($sql);

        $stmt->execute([
            ':prix_euros' => $price,
            ':description' => $description,
            ':duree_minutes' => $duration,
            ':nom' => $title
        ]);

        echo "Service ajoute.";
    } else {
        echo "Remplis tous les champs.";
    };
};
?>
        </div>
        
    </section>



    <footer> 

        <?php require_once("./assets/modules/footer.php");   ?> 

    </footer>
</body>
</html>