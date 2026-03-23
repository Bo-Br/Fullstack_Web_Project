
<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Accueil </title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <header>

        <?php require_once("./assets/modules/header.php"); 

            
// Test si admni
            if (!isset($_SESSION['user_id']) || $_SESSION['is_admin'] != 1) {
                header("Location: index.php");
                exit;
            }
            ?>
    </header>

<!-- ####################################################################### DEBUT DE LA SECTION RESERVATIONS #########################################################################-->
    <section id = "reservations_dasboard">
        <h2> Reservations </h2>



<!-- DEBUT DU TABLEAU -->
        <div id = "reservations_tableau_dashboard">

<!-- DEBUT DE LIGNE -->
<?php
$sql = "SELECT * FROM reservations";
$stmt = $pdo->query($sql);

while ($reservation = $stmt->fetch()) {

            echo("<div class = 'reservations_ligne_dashboard'>");
            echo("<div class = 'reservation_nom_dashboard'>");
            echo("<h3>" . $reservation['nom_client'] . "</h3>");
            echo("</div>");
            echo("<div class = 'reservation_date_dashboard'>");
            echo("<h3>" . $reservation['date_rdv'] . " | " . $reservation['heure_rdv'] . "</h3>");
            echo("</div>");
            echo("<div class = 'reservation_status_dashboard'>");
            echo("<h3>" . $reservation['statut'] . "</h3>");
            echo("</div>");
                echo("<div class='action'>");

                echo("<a href='../backend/other/approve_reservation.php?id=" . $reservation['id_reservation'] . "'>");
                echo("<button> Y </button>");
                echo("</a>");

                echo("<a href='../backend/other/cancel_reservation.php?id=" . $reservation['id_reservation'] . "'>");
                echo("<button> N </button>");
                echo("</a>");

                echo("</div>");
            echo("</div>");

};
?>


<!-- FIN DE LIGNE -->

        </div>
<!-- FIN DU TABLEAU -->

    </section>
    

<!-- ############################################################################ FIN DE LA SECTION RESERVATIONS ########################################################################-->






<!-- ####################################################################### DEBUT DE LA SECTION SERVICES #######################################################################-->

<section id = "services">
    <h2> Nos prestations </h2> <br>

    <div class = "card_content">
        <div class = "card_line">

<?php
$sql = "SELECT * FROM services";
$stmt = $pdo->query($sql);

while ($service = $stmt->fetch()) {

        echo("<div class='card_service box_shadow'>");
        echo("    <div class='card_header'>");
        echo("        <h3 class='title'>".$service['nom'] . "</h3>");
        echo("        <span class='price'>".$service['duree_minutes'] . "min - ".$service['prix_euros'] . "€ </span>");
        echo("</div>");
              
        echo("<div class='card_img'>");
        echo("        <img src='assets/images/card-coiffe.png' alt='Illustration coupe et coiffage'>");
        echo("</div>");
            
        echo("    <div class='card_description'>");
        echo("        <p>".$service['description'] . "</p>");
        echo("</div>");
        echo("</div>");

} 
?>

        </div>
        
    </div>



    </section>
<!-- ####################################################################### FIN DE LA SECTION SERVICES #######################################################################-->







<!-- ######################################################################## DEBUT DE LA SECTION INFO ########################################################################-->

<!-- DEBUT DU TABLEAU -->
        <div id = "horaires_tableau">

<!-- DEBUT DE LIGNE -->
            <div class = "horaires_ligne">

                <div class = "jour">
                    <h3>Lundi</h3>
                </div>

                <div class = "horaire">
                    <h3>08H00 - 20H00</h3>
                </div>

            </div>
<!-- FIN DE LIGNE -->

        </div>
<!-- FIN DU TABLEAU -->



            </div>

        </div>

    </section>

<!-- ####################################################################### FIN DE LA SECTION INFO #######################################################################-->

    <footer> 

        <?php require_once("./assets/modules/footer.php");   ?> 

    </footer>
</body>
</html>


