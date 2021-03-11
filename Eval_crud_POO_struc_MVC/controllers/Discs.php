<?php

/**
 * Class Discs
 */
class Discs extends AbstractController
{
    /**
     * affichage de la liste des discs
     */
    public function index()
    {
        // accès à la méthode loadModel() de abstractController, qui permet de charger le model voulu
        $disque = $this->loadModel('disc');
        // appel de la méthode getDiscInformations()
        $diqueList = $disque->getDiscInformations();
        // envoie des données vers la vue
        $this->render('index', ['Discs' => $diqueList]);
    }

    /**
     * affichage du détail d'un disque selon son id
     * validation du formulaire
     * @param $id
     */
    public function updateDisc($id)
    {
        // définition variable de confirmation et tableau d'erreur
        $formError = [];
        $imgError = [];
        $success = '';
        // chargement des models
        $disc = $this->loadModel('disc');
        $artist = $this->loadModel('Artist');
        //appel des méthodes permettant l'affichage des différentes données
        $allArtist = $artist->getAll();
        $oneDisc = $disc->getOneDiscById($id);
        // si le formulaire est validé
        if (isset($_POST['update'])) {

            // définition d'un tableau associatif contenant les regex
            $regex = [
                'title' => '/^[a-zA-Z\s]+$/',
                'artist' => '/^[0-9]+$/',
                'year' => '/^([0-9][0-9][0-9][0-9])$/',
                'genre' => '/^[a-zA-Z\s]+$/',
                'label' => '/^[a-zA-Z\s]+$/',
                'price' => '/^[0-9]{0,9}.[0-9]{2}$/'
            ];
            // appel de la méthode valideForm de l'abstractController permettant la validation du formulaire et la génération d'éventuels message d'erreur, stockage du retour
            // dans une variable
            $formError = $this->validForm($regex, $_POST);
            // appel de la méthode validePicture de l'abstractController permettant la validation du formulaire et la génération d'éventuels message d'erreur, stockage du retour
            // dans une variable
            if($_FILES['picture']['name'] != '') {
                $imgError = $this->validPicture($_FILES);
            } else {
                $imgError['picture'] = 'champs vide';
            }
            // s'il n'y a pas d'erreur
            if (count($formError) === 0 && count($imgError) === 0) {
                // accès aux accesseur
                $disc->setDiscTitle($_POST['title']);
                $disc->setArtist($_POST['artist']);
                $disc->setYear($_POST['year']);
                $disc->setGenre($_POST['genre']);
                $disc->setLabel($_POST['label']);
                $disc->setDiscPrice($_POST['price']);
                $disc->setDiscPicture($_FILES['picture']['name']);
                $disc->updateDisc($id);
                $success = 'Update success !!!';
            }
        }
        // appel de la fonction render de l'abstractController permettant l'affichage d'une vue
        $this->render('updateDisc', [
            'disc' => $oneDisc,
            'artist' => $allArtist,
            'error' => $formError,
            'success' => $success,
            'imgError' => $imgError
        ]);
    }

    public function addDisc()
    {
        // définition variable de confirmation et tableau d'erreur
        $formError = [];
        $imgError = [];
        $success = '';
        // chargement des models
        $disc = $this->loadModel('disc');
        $artist = $this->loadModel('Artist');
        $allArtist = $artist->getAll();

        if (isset($_POST['add'])) {
            // définition d'un tableau associatif contenant les regex
            $regex = [

                'title' => '/^[a-zA-Z\s]+$/',
                'artist' => '/^[0-9]+$/',
                'year' => '/^([0-9][0-9][0-9][0-9])$/',
                'genre' => '/^[a-zA-Z\s]+$/',
                'label' => '/^[a-zA-Z\s]+$/',
                'price' => '/^[0-9]{0,9}.[0-9]{2}$/',
            ];
            // appel de la méthode valideForm de l'abstractController permettant la validation du formulaire et la génération d'éventuels message d'erreur, stockage du retour
            // dans une variable
            $formError = $this->validForm($regex, $_POST);
            // appel de la méthode validePicture de l'abstractController permettant la validation du formulaire et la génération d'éventuels message d'erreur, stockage du retour
            // dans une variable
            if($_FILES['picture']['name'] != '') {
                $imgError = $this->validPicture($_FILES);
            } else {
                $imgError['picture'] = 'champs vide';
            }
            // s'il n'y a pas d'erreur
            if (count($formError) === 0 && count($imgError) === 0) {
                $disc->setDiscTitle($_POST['title']);
                $disc->setArtist($_POST['artist']);
                $disc->setYear($_POST['year']);
                $disc->setGenre($_POST['genre']);
                $disc->setLabel($_POST['label']);
                $disc->setDiscPrice($_POST['price']);
                $disc->setDiscPicture($_FILES['picture']['name']);
                $disc->addDisc();
                $success = 'Add success !!!';
            }
        }
        $this->render('addDisc', [

            'artist' => $allArtist,
            'error' => $formError,
            'success' => $success,
            'imgError' => $imgError
        ]);
    }

    public function delDisc($id)
    {
        $success = '';
        $error = '';
        // accès à la méthode loadModel() de abstractController, qui permet de charger le model voulu
        $disc = $this->loadModel('disc');
        if ($disc->delDisc($id)) {
            $success = 'disc supprimée avec succès';
        } else {
            $error = 'Erreur lors de la suppression';
        }
        // appel de la méthode getDiscInformations()
        $discList = $disc->getDiscInformations();
        // envoie des données vers la vue
        $this->render('index', [
            'Discs' => $discList,
            'success' => $success,
            'error' => $error
        ]);
    }
}