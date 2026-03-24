<?php 
    include_once('get_db.php');
include_once("is_admin_test.php");
// on récupère l'id de la reservation à partir de l'URL
$id = $_GET['id'];

//  on prépare la requête SQL pour supprimer  le service correspondant à l'ID récupéré. 
//  ":id" est un paramètre nommé qui sera remplacé par la valeur de $id lors de l'exécution de la requête (sécurité contre injection SQL)

$sql = "DELETE FROM services WHERE id_service = :id";
$stmt = $pdo->prepare($sql);
// Supprime le service a l'id ID
$stmt->execute(['id' => $id]);

header('Location: ../../public/dashboard.php');