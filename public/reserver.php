
<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> RESERVER </title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <header>

        <?php require_once("./assets/modules/header.php");   ?>

    </header>

    <section class = "main_bck">

        <div class = "main_page main_reservation">

            <h1>Réserver</h1>
            <form method="POST" action="reserver.php">
                <div class = "reservation_line">
                    <div class = "reservation_item">
                        <p>Nom complet:</p>            
                        <input type="text" name="nom" placeholder="  Nom Complet" required>
                    </div>
                
                </div>
                <div class = "reservation_line">
                    <div class = "reservation_item">
                        <p>Email:</p>
                        <input type="email" name="email" placeholder="  Email" required>
                    </div>
                    <div class = "reservation_item">
                        <p>Téléphone:</p>
                        <input type="text" name="telephone" placeholder="  Telephone" required> <br>
                    </div>
                </div>
                <div class = "date_horaire">
                    <div class = "reservation_item">
                        <p>Date:</p>
                        <input type="date" name="date" required>
                    </div>
                    <div class = "reservation_item ">
                        <p> <br></p>
                        <select name="horaire" class = "reservation__horaire" required >
                            <option value="">Choisir un horaire</option>
            
                            <!-- Matin -->
                            <option value="08:00">08:00</option>
                            <option value="08:30">08:30</option>
                            <option value="09:00">09:00</option>
                            <option value="09:30">09:30</option>
                            <option value="10:00">10:00</option>
                            <option value="10:30">10:30</option>
                            <option value="11:00">11:00</option>
                            <option value="11:30">11:30</option>
                            <option value="12:00">12:00</option>
            
                            <!-- Après-midi -->
                            <option value="14:00">14:00</option>
                            <option value="14:30">14:30</option>
                            <option value="15:00">15:00</option>
                            <option value="15:30">15:30</option>
                            <option value="16:00">16:00</option>
                            <option value="16:30">16:30</option>
                            <option value="17:00">17:00</option>
                            <option value="17:30">17:30</option>
                            <option value="18:00">18:00</option>
                            <option value="18:30">18:30</option>
                            <option value="19:00">19:00</option>
                            <option value="19:30">19:30</option>
                            <option value="20:00">20:00</option> 
                        </select><br>
                    </div>
                    
                </div>

                <div class = "reservation_line_service">
                        <div class = "reservation_item">
                            <select name="service" class = "reservation_service" required>
                                <option value="">Choisir un service</option>
                                <?php
                                $sql = "SELECT * FROM services";
                                $stmt = $pdo->query($sql);

                                while ($service = $stmt->fetch()) {
                                        echo("<option value=" .$service['id_service'] . ">" . $service['nom'] . "</option>");

                                };
                                ?>
                            </select><br>
                        </div>
                 </div>
                
                <div class = "reservation_line">
                    <button type="submit" name="submit" class="btn_submit">Submit</button>
                </div>    
        
        
            </form>
<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $nom = $_POST['nom'] ?? '';
    $email = $_POST['email'] ?? '';
    $telephone = $_POST['telephone'] ?? '';
    $date = $_POST['date'] ?? '';
    $horaire = $_POST['horaire'] ?? '';
    $service = $_POST['service'] ?? '';

    if (!empty($nom) && !empty($email) && !empty($telephone) && !empty($date) && !empty($horaire) && !empty($service)) {

        $date_rdv = $date;
        $heure_rdv = $horaire . ":00";

        $sql = "INSERT INTO reservations 
        (service_id, date_rdv, heure_rdv, nom_client, email_client, telephone_client, statut) 
        VALUES 
        (:service, :date_rdv, :heure_rdv, :nom, :email, :telephone, :statut)";

        $stmt = $pdo->prepare($sql);

        $stmt->execute([
            ':service' => $service,
            ':date_rdv' => $date_rdv,
            ':heure_rdv' => $heure_rdv,
            ':nom' => $nom,
            ':email' => $email,
            ':telephone' => $telephone,
            ':statut' => 'en_attente'
        ]);

        echo "Réservation ajoutée.";
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