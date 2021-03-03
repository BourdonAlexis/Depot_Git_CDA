<?php
$control = 0;

//déclaration regex et error

$formError = [];
// déclaration des regex
$titlePattern = '/^[a-zA-Z]+$/';
$artistPattern = '/^[a-zA-Z]+$/';
$yearPattern = '/^([0-9][0-9][0-9][0-9])$/';
$genrePattern = '/^[a-zA-Z]+$/';
$labelPattern = '/^[a-zA-Z]+$/';
$pricePattern = '/^[0-9]{0,9}.[0-9]{2}$/';
// upload si click sur le bouton
if (isset($_POST['upload'])) {

//vérif title
    if (!empty($_POST['title'])) {
        // si la valeur passe la regex
        if (preg_match($titlePattern, $_POST['title'])) {
            // on stock le post dans une variable

            $control++;
        } else {
            // génération d'un message d'erreur
            $formError['title'] = 'Le champ title n\'est pas correct';

        }
    } else {
        // génération d'un message d'erreur
        $formError['title'] = 'le champ title est vide';

    }

    //vérif artiste
    if (!empty($_POST['artist'])) {
        // si la valeur passe la regex
        if (preg_match($artistPattern, $_POST['artist'])) {
            // on stock le post dans une variable

            $control++;

        } else {
            // génération d'un message d'erreur
            $formError['artist'] = 'Le champ artist n\'est pas correct';

        }
    } else {
        // génération d'un message d'erreur
        $formError['artist'] = 'le champ artist est vide';
    }

    //vérif year
    if (!empty($_POST['year'])) {
        // si la valeur passe la regex
        if (preg_match($yearPattern, $_POST['year'])) {
            // on stock le post dans une variable

            $control++;

        } else {
            // génération d'un message d'erreur
            $formError['year'] = 'Le champ year n\'est pas correct';

        }
    } else {
        // génération d'un message d'erreur
        $formError['year'] = 'le champ year est vide';
    }

    //vérif genre
    if (!empty($_POST['genre'])) {
        // si la valeur passe la regex
        if (preg_match($genrePattern, $_POST['genre'])) {
            // on stock le post dans une variable

            $control++;

        } else {
            // génération d'un message d'erreur
            $formError['genre'] = 'Le champ genre n\'est pas correct';

        }
    } else {
        // génération d'un message d'erreur
        $formError['genre'] = 'le champ genre est vide';
    }

    //vérif label
    if (!empty($_POST['label'])) {
        // si la valeur passe la regex
        if (preg_match($labelPattern, $_POST['label'])) {
            // on stock le post dans une variable

            $control++;

        } else {
            // génération d'un message d'erreur
            $formError['label'] = 'Le champ label n\'est pas correct';

        }
    } else {
        // génération d'un message d'erreur
        $formError['label'] = 'le champ label est vide';
    }
    //vérif price
    if (!empty($_POST['price'])) {
        // si la valeur passe la regex
        if (preg_match($pricePattern, $_POST['price'])) {
            // on stock le post dans une variable

            $control++;

        } else {
            // génération d'un message d'erreur
            $formError['price'] = 'Le champ price n\'est pas correct';

        }
    } else {
        // génération d'un message d'erreur
        $formError['price'] = 'le champ price est vide';
    }

    //picture
    $msg = "";
    $disc_picture = $_FILES['fichier']['name'];//récupère le nom de l'image
    $target = "IMG/".basename($disc_picture);



    if (!empty(move_uploaded_file($_FILES['fichier']['tmp_name'], $target))) {
        $msg = "Image upload correctement";
        $control++;
    }else{
        $msg = "erreur lors de l'upload de l'image";
        $formError['fichier'] = 'Le champ fichier n\'est pas correct';
    }

}
// lancement script si correct
    if($control===7){
        include 'add_form_script.php';

    }
    else{
        $control=0;
    }
?>

