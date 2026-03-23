
<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title> Accueil </title>
</head>
<body>
    <header>

        <?php require_once("./assets/modules/header.php");   ?>

    </header>

<!-- ####################################################################### DEBUT DE LA SECTION HERO #########################################################################-->

    <section id="hero">
        <div class="hero_content">
            <img class="logo_hero" src="assets/images/logo.png" alt="Logo L'Atelier du Barbier">
            <div class="texte_hero">
                <h1>Un salon à l'ambiance Cozy</h1>
                <p>Venez découvrir des services de coiffure et de barbe de qualité qui allient savoir-faire traditionnel et modernité. En plus de ses différents services de soins, le salon vous offre l'accès à des paires de chaussures rares et exclusives grâce à son Sneakers shop.</p>
                <a class="btn_nav" href="reserver.php">Prenez rendez-vous</a>
            </div>
        </div>
    </section>

<!-- ############################################################################ FIN DE LA SECTION HERO ########################################################################-->






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
<!-- ############################################################################ FIN DE LA SECTION HERO ########################################################################-->

<section class = 'creation'>
    <h2>Nos créations</h2>
    <div class = "gallery_contenair">
        <div class="gallery">
            <img src="https://image.noelshack.com/fichiers/2026/13/1/1774279343-coupe1.png" alt="Coupe lune">
            <img src="https://image.noelshack.com/fichiers/2026/13/1/1774280313-coupe-2.png" alt="La coupe toilette">
            <img src="https://image.noelshack.com/fichiers/2026/13/1/1774279343-coupe-3.png" alt="La coupe Airbag">
            <img src="https://image.noelshack.com/fichiers/2026/13/1/1774280335-coupe-4.png" alt="La coupe visage">
            <img src="https://image.noelshack.com/fichiers/2026/13/1/1774279480-coupe-5.png" alt="Le dégradé inversée">
        </div>
        <div class="gallery">
            <img src="https://image.noelshack.com/fichiers/2026/13/1/1774280313-coupe-2.png" alt="La coupe toilette">
            <img src="https://image.noelshack.com/fichiers/2026/13/1/1774279343-coupe-3.png" alt="La coupe Airbag">
            <img src="https://image.noelshack.com/fichiers/2026/13/1/1774280335-coupe-4.png" alt="La coupe visage">
            <img src="https://image.noelshack.com/fichiers/2026/13/1/1774279480-coupe-5.png" alt="Le dégradé inversée">
            <img src="https://image.noelshack.com/fichiers/2026/13/1/1774279343-coupe1.png" alt="Coupe lune">
        </div>
        <div class="gallery">
            <img src="https://image.noelshack.com/fichiers/2026/13/1/1774279343-coupe-3.png" alt="La coupe Airbag">
            <img src="https://image.noelshack.com/fichiers/2026/13/1/1774280335-coupe-4.png" alt="La coupe visage">
            <img src="https://image.noelshack.com/fichiers/2026/13/1/1774279480-coupe-5.png" alt="Le dégradé inversée">
            <img src="https://image.noelshack.com/fichiers/2026/13/1/1774279343-coupe1.png" alt="Coupe lune">
            <img src="https://image.noelshack.com/fichiers/2026/13/1/1774280313-coupe-2.png" alt="La coupe toilette">
        </div>
    </div>
</section>





<!-- ####################################################################### DEBUT DE LA SECTION SERVICES #######################################################################-->
   

    <section id = "info">
        <h2> Où se situe le salon?</h2>
       
                
                <div class ="map_heure">
                    <div class = "info_salon">
                        <div class = "info_texte">
                            <div class = "texte_info">
                                <img src="assets/images/icn_loc.png" alt="">
                                <p> 3 Avenue du Barbier 12345 (Atelier) </p>
                            </div>
                            <div class = "texte_info">
                                <img src="assets/images/icn_tel.png" alt="">
                                <p>06.07.08.09.10</p>
                            </div>
                        </div> 
                        <div id = "map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2783.4556298684247!2d4.91467997684396!3d45.76205831351497!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f4c123ff192f4f%3A0xcfe8fb5781412a1b!2sAvenue%20du%20Barbier!5e0!3m2!1sfr!2sfr!4v1774105528196!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>


                   <div class="horaires_card">
                        <h2 class="horaires_titre">Horaire</h2>
                        <ul class="horaires_liste">
                            <li class="horaires_ligne">
                                <span class="jour">Lundi</span>
                                <span class="heures">10H00 - 20H00</span>
                            </li>
                            <li class="horaires_ligne">
                                <span class="jour">Mardi</span>
                                <span class="heures">10H00 - 20H00</span>
                            </li>
                            <li class="horaires_ligne">
                                <span class="jour">Mercredi</span>
                                <span class="heures">10H00 - 20H00</span>
                            </li>
                            <li class="horaires_ligne">
                                <span class="jour">Jeudi</span>
                                <span class="heures">10H00 - 20H00</span>
                            </li>
                            <li class="horaires_ligne">
                                <span class="jour">Vendredi</span>
                                <span class="heures">10H00 - 20H00</span>
                            </li>
                            <li class="horaires_ligne">
                                <span class="jour">Samedi</span>
                                <span class="heures">10H00 - 20H00</span>
                            </li>
                            <li class="horaires_ligne">
                                <span class="jour">Dimanche</span>
                                <span class="heures">14H00 - 18H00</span>
                            </li>
                        </ul>
                    </div>
        
    </section>
<!-- ############################################################################ FIN DE LA SECTION HERO ########################################################################-->



    <footer> 

        <?php require_once("./assets/modules/footer.php");   ?> 

    </footer>
</body>
</html>


