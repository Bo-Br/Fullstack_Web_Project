<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Accueil </title>
</head>
<body>
    <header>

        <?php require_once("./assets/modules/header.php");   ?>

    </header>

<!-- ####################################################################### DEBUT DE LA SECTION HERO #########################################################################-->

    <section id = "hero">

        <div id = "image_hero">
            
            <img src="assets/images/bck_image_hero.jpg" alt="">

        </div>

        <div id = texte_hero>
            
            <h1> Un salon a l'ambiance Cozy </h1>

            <p> Venez découvrir des services de coiffure et de barbe de qualité qui allient savoir-faire traditionnel et modernité. En plus de ses différents services de soins, le salon vous offre l'accès à des paires de chaussures rares et exclusives grâce à son Sneakers shop (magasin de chaussures sneakers). </p>

            <a class = "btn_reserver" href=""> Rendez-Vous </a>

        </div>

    </section>

<!-- ############################################################################ FIN DE LA SECTION HERO ########################################################################-->






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
                </div>

            </div>
<!-- FIN DE LIGNE -->

        </div>
<!-- FIN DU TABLEAU -->

    </section>
    
<!-- ####################################################################### FIN DE LA SECTION SERVICES #######################################################################-->







<!-- ######################################################################## DEBUT DE LA SECTION INFO ########################################################################-->

    <section id = "info">
        <h2> Ou se situe le salon?</h2>
        <div id = "info_map">

            <div id = "texte_info_map">
                <img src="assets/images/icn_loc.png" alt="">
                <p> 3 Avenue du Barbier 12345 (Atelier) </p>
            </div>

            <div id = "map">
                <img src="https://placehold.co/600x400" alt="">
            </div>

        </div>

        <div id = "info_horaire">
            <div id = "texte_info_telephone">
                <img src="assets/images/icn_tel.png" alt="">
                <p>06.07.08.09.10</p>
            </div>

            <div id = "tableau_horaire">
                

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


