
<!-- test si admin -->
<?php 

include_once(__DIR__ . "/../backend/other/is_admin_test.php");
// session_destroy(); Destroy la session si besoin
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> dashboard </title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <header>

        <?php require_once("./assets/modules/header.php"); ?>

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
            ?>



<!-- FIN DE LIGNE -->

</div>
<!-- FIN DU TABLEAU -->

</section>

<div class="dashboard">
       <h2>Reservation</h2>
       <div class="table-wrapper">
            <table>
                <thead>
                   <tr>
                       <th>NOM - PRENOM</th>
                       <th>DATE - HEURE</th>
                       <th>STATUS</th>
                       <th>ACTION</th>
                   </tr>
                </thead>
                <tbody>


<?php
while ($reservation = $stmt->fetch()) {
                   echo("<tr>
                        <td>
                            <div class = 'nom_client'>
                                " . $reservation['nom_client'] . "
                            </div>
                        </td>
                        <td>
                            <div class='assignee'>
                                <div class='date'>
                                " . $reservation['date_rdv'] . " | " . $reservation['heure_rdv'] . "
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class = 'status'>
                                " . $reservation['statut'] . "
                            </div>
                        </td>
                        
                        <td>
                           <div class='bouton'>");
                echo("<a href='../backend/other/approve_reservation.php?id=" . $reservation['id_reservation'] . "'>");
                echo("<button class = 'btn_valider'> Y </button>");
                echo("</a>");

                echo("<a href='../backend/other/cancel_reservation.php?id=" . $reservation['id_reservation'] . "'>");
                echo("<button class = 'btn_suprimer'> N </button>");
                echo("</a>
                </div>
                        </td>
                    </tr>");
            };
?>



                </tbody>    
            </table>
       </div>
</div>

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
        echo("<a href='../backend/other/delete_service.php?id=" . $service['id_service'] . "'>");
                echo("<button class = 'btn_suprimer'> Sup </button>");
                echo("</a>");
        echo("</div>");
        echo("</div>");

} 



?>
<a href="create_service.php">
<button>
<div class="card_service box_shadow">
    <div class="card_header">
        <h3 class="title"> AJOUTER UN SERVICE </h3>
    
    </div>
</div>
</button>
</a>




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


