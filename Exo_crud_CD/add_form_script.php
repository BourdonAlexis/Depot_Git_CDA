<?php
// récupération de la connexion
require "connexion.php";

// déclaration des "variables"
$msg = "";
$disc_title=$_POST['title'];
$artist_name=$_POST['artist'];
$disc_year=$_POST['year'];
$disc_genre=$_POST['genre'];
$disc_label=$_POST['label'];
$disc_price=$_POST['price'];
$image = $_FILES['fichier']['name'];//récupère le nom de l'image
$artist_id = $db->prepare("");


//requête insertion table artiste

$requete2 = $db->prepare("INSERT INTO artist(artist_name) VALUES (:artist_name)");
$requete2->bindValue(':artist_name', $artist_name, PDO::PARAM_STR);
$requete2->execute();
$requete2->closeCursor();

//requête selection id max

$rep1=$db->query('SELECT MAX(artist_id) AS idmax FROM artist');
$donnee = $rep1->fetch();
$donnee1=$donnee["idmax"];

//requête d'insertion info disque
$requete =  $db->prepare("INSERT INTO disc(disc_picture,disc_title,disc_year,disc_genre,disc_label,disc_price,artist_id) VALUES ('$image',:disc_title,:disc_year,:disc_genre,:disc_label,:disc_price,'$donnee1')");

//recupération des données

$requete->bindValue(':disc_title', $disc_title, PDO::PARAM_STR);
$requete->bindValue(':disc_year', $disc_year, PDO::PARAM_INT);
$requete->bindValue(':disc_genre', $disc_genre, PDO::PARAM_STR);
$requete->bindValue(':disc_label', $disc_label, PDO::PARAM_STR);
$requete->bindValue(':disc_price', $disc_price, PDO::PARAM_INT);

// upload si click sur le bouton
if (isset($_POST['upload'])) {

    // redirection de l'image
    $target = "IMG/".basename($image);

    // execution de la requête

    $requete->execute();
    $requete->closeCursor();

    if (move_uploaded_file($_FILES['fichier']['tmp_name'], $target)) {
        $msg = "Image uploaded successfully";
    }else{
        $msg = "Failed to upload image";
    }
}
// Redirection vers la page index.php
header("Location: index.php");
exit;
?>