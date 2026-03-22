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

        <?php require_once("./assets/modules/header.php");   ?>

    </header>

<!-- ####################################################################### DEBUT DE LA SECTION RESERVATIONS #########################################################################-->
    <section id = "reservations_dasboard">
        <h2> Reservations </h2>



<!-- DEBUT DU TABLEAU -->
        <div id = "reservations_tableau_dashboard">

<!-- DEBUT DE LIGNE -->
            <div class = "reservations_ligne_dashboard">

                <div class = "reservation_nom_dashboard">
                    <h3>Michel</h3>
                </div>

                <div class = "reservation_date_dashboard">
                    <h3>20/03/2026 | 14:30</h3>
                </div>

                <div class = "reservation_status_dashboard">
                    <h3>en_attente</h3>
                </div>


                <div class = "action">
                    <button> Y </button>
                    <button> N </button>
                </div>

            </div>
<!-- FIN DE LIGNE -->

        </div>
<!-- FIN DU TABLEAU -->

    </section>
    

<!-- ############################################################################ FIN DE LA SECTION RESERVATIONS ########################################################################-->






<!-- ####################################################################### DEBUT DE LA SECTION SERVICES #######################################################################-->

    <section id = "services">
        <h2> Nos prestations </h2>



<!-- DEBUT DU TABLEAU -->
        <div id = "services_tableau">

<!-- DEBUT DE LIGNE -->
            <div class = "services_ligne">

                <div class = "service_description">
                    <h3>Coupe + Taille de Barbe</h3>
                    <p>Lorem Ipsum machin truc bidule description</p>
                </div>

                <div class = "service_prix">
                    <h3>30min - 24€</h3>
                    <button> x </button>
                </div>
                <button> Ajouter Service </button>
            </div>
<!-- FIN DE LIGNE -->

        </div>
<!-- FIN DU TABLEAU -->

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


