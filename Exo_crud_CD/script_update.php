<?php
// Dans ce fichier, nous récupérons les informations pour réaliser la requête de modification : UPDATE
require "connexion.php";
// Récupération des informations passées en POST, nécessaires à la modification


$disc_id=$_POST['disc_id'];
$disc_title=$_POST['title'];
$disc_year=$_POST['year'];
$disc_genre=$_POST['genre'];
$disc_label=$_POST['label'];
$disc_price=$_POST['price'];
$artist_name=$_POST['artist'];
$artist_id=$_POST['artist_id'];
$image = $_FILES['fichier']['name'];//récupère le nom de l'image




// Construction de la requête UPDATE sans injection SQL
try {

    $requete = $db->prepare("UPDATE disc SET disc_title=:disc_title, disc_year=:disc_year,disc_genre=:disc_genre,disc_label=:disc_label,disc_price=:disc_price,disc_picture=".$image." where disc_id=".$disc_id);
    $requete2 = $db->prepare("UPDATE artist SET artist_name=:artist_name where artist_id=".$artist_id);


    $requete->bindValue(':disc_title', $disc_title, PDO::PARAM_STR);
    $requete->bindValue(':disc_year', $disc_year, PDO::PARAM_INT);
    $requete->bindValue(':disc_genre', $disc_genre, PDO::PARAM_STR);
    $requete->bindValue(':disc_label', $disc_label, PDO::PARAM_STR);
    $requete->bindValue(':disc_price', $disc_price, PDO::PARAM_STR);
    $requete2->bindValue(':artist_name', $artist_name, PDO::PARAM_STR);

}

// Gestion des erreurs
catch (Exception $e) {

    echo "La connexion à la base de données a échoué ! <br>";
    echo "Merci de bien vérifier vos paramètres de connexion ...<br>";
    echo "Erreur : " . $e->getMessage() . "<br>";
    echo "N° : " . $e->getCode();
    die("Fin du script");
}

// upload si click sur le bouton
if (isset($_POST['upload'])) {

    // redirection de l'image
    $target = "IMG/".basename($image);

    // execution de la requête

    $requete->execute();
    $requete->closeCursor();
    $requete2->execute();
    $requete2->closeCursor();

    if (move_uploaded_file($_FILES['fichier']['tmp_name'], $target)) {
        $msg = "Image uploaded successfully";
    }else{
        $msg = "Failed to upload image";
    }
}

// Redirection vers la page index.php
//header("Location: index.php");
exit;

?>



