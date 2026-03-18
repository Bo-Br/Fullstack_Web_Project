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
        <form method="POST" action="reservation.php">

            <input type="text" name="nom" placeholder="Nom" required>
            <input type="text" name="prenom" placeholder="Prenom" required>

            <input type="email" name="email" placeholder="Email" required>
            <input type="text" name="telephone" placeholder="Telephone" required>

            <input type="date" name="date" required>
            
            <select name="horaire" required>
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
            </select>
        

            <select name="service" required>
                <option value="">Choisir un service</option>
                <option value="coupe">Coupe</option>
                <option value="barbe">Barbe</option>
                <option value="combo">Coupe + Barbe</option>
            </select>

    <button type="submit">Submit</button>

        </form>
        
    </section>



    <footer> 

        <?php require_once("./assets/modules/footer.php");   ?> 

    </footer>
</body>
</html>