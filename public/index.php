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
        <div>
            <div id = "hero_contenair">
                <div class = "hero_content">
                    <img class="logo_hero" src="assets/images/logo_hero.png" alt="">
                    <div class = "texte_hero">
                        <h1> Un salon à l'ambiance Cozy </h1>
                        <p> Venez découvrir des services de coiffure et de barbe de qualité qui allient savoir-faire traditionnel et modernité. En plus de ses différents services de soins, le salon vous offre l'accès à des paires de chaussures rares et exclusives grâce à son Sneakers shop (magasin de chaussures sneakers). </p>
                        <a class = "btn_nav" href=""> Rendez-Vous </a>
                    </div>
                </div>
            </div>
        </div>



    </section>

<!-- ############################################################################ FIN DE LA SECTION HERO ########################################################################-->






<!-- ####################################################################### DEBUT DE LA SECTION SERVICES #######################################################################-->

    <section id = "services">
        <h2> Nos prestations </h2> <br>



<!-- DEBUT DU TABLEAU -->
        <div id = "services_tableau" class = "main_page">

<!-- DEBUT DE LIGNE -->
            <div class = "services_ligne">

                <div class = "service_description">
                    <h3>Coupe + Taille de Barbe</h3>
                    <h3>30min - 24€</h3>
                    <p>Lorem Ipsum machin truc bidule description</p>
                </div>

            </div>
<!-- FIN DE LIGNE -->

        </div>
<!-- FIN DU TABLEAU -->

    </section>
    
<!-- ####################################################################### FIN DE LA SECTION SERVICES #######################################################################-->







<!-- ######################################################################## DEBUT DE LA SECTION INFO ########################################################################-->

    <section id = "info">
        <h2> Où se situe le salon?</h2>
        <div class = "info_salon">
            <div id = "texte_info_adresse">
                <img src="assets/images/icn_loc.png" alt="">
                <p> 3 Avenue du Barbier 12345 (Atelier) </p>
            </div>
            <div id = "texte_info_telephone">
                <img src="assets/images/icn_tel.png" alt="">
                <p>06.07.08.09.10</p>
            </div>
        </div>
        <div class ="map_heure">
            <div id = "map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2783.4556298684247!2d4.91467997684396!3d45.76205831351497!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f4c123ff192f4f%3A0xcfe8fb5781412a1b!2sAvenue%20du%20Barbier!5e0!3m2!1sfr!2sfr!4v1774105528196!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
            </div>
        </div>

    </section>

<!-- ####################################################################### FIN DE LA SECTION INFO #######################################################################-->



























    <footer> 

        <?php require_once("./assets/modules/footer.php");   ?> 

    </footer>
</body>
</html>


