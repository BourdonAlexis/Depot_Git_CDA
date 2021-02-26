<?php

require "connexion.php";
$artist_id = $_POST['artist_id'];
$disc_id = $_POST['disc_id'];

try {

    $requete = $db->prepare("DELETE FROM disc WHERE disc_id=:disc_id");
    $requete->bindValue(':disc_id', $disc_id, PDO::PARAM_INT);
    $requete->execute();
    $requete->closeCursor();
    $requete2 = $db->prepare("DELETE FROM artist WHERE artist_id=:artist_id");
    $requete2->bindValue(':artist_id', $artist_id, PDO::PARAM_INT);
    $requete2->execute();
    $requete2->closeCursor();



}

// Gestion des erreurs
catch (Exception $e) {

    echo "La connexion à la base de données a échoué ! <br>";
    echo "Merci de bien vérifier vos paramètres de connexion ...<br>";
    echo "Erreur : " . $e->getMessage() . "<br>";
    echo "N° : " . $e->getCode();
    die("Fin du script");
}

// Redirection vers la page index.php

header("Location: index.php");
exit;

?>