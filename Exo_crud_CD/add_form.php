<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Ajout</title>
</head>
<?php
require "connexion.php";

$requete = "SELECT * FROM disc JOIN artist ON disc.artist_id = artist.artist_id";
$result = $db->query($requete);
$row = $result->fetch(PDO::FETCH_OBJ);




?>
<body  class="form-group mx-5">


    <form action="add_form_script.php" method="POST" id="ajout"  enctype="multipart/form-data">
        <h1>Ajouter un vinyle</h1>
        <!-- titre -->
        <div>
            <label for="title">Title</label>
            <br>
            <input type="text" class="form-control" id="title" placeholder="Veuillez saisir le titre" name="title">
            <span id="error_title"></span>
            <br>
        </div>
        <!-- Artiste -->
        <div>
            <label for="artist">Artist</label>
            <br>
            <input type="text" class="form-control" id="artist" placeholder="Veuillez saisir le nom de l'artiste" name="artist">
            <span id="error_artist"></span>
            <br>
        </div>
      <!--  Year-->
        <div>
            <label for="year">Year</label>
            <br>
            <input type="number" class="form-control" id="year" name="year" placeholder="Veulliez saisir une année">
            <span id="error_year"></span>
            <br>
        </div>
        <!--  Genre-->
        <div>
            <label for="genre">Genre</label>
            <br>
            <input type="text" class="form-control" id="genre" name="genre" placeholder="Veuillez saisir le genre (Rock,Jazz ect ...)">
            <span id="error_genre"></span>
            <br>
        </div>
        <!--  Label -->
        <div>
            <label for="genre">Label</label>
            <br>
            <input type="text" class="form-control" id="label" name="label" placeholder="Veuillez saisir le label">
            <span id="error_label"></span>
            <br>
        </div>
        <!--  price -->
        <div>
            <label for="price">Price</label>
            <br>
            <input type="text" class="form-control" id="price" name="price" placeholder="Veuillez saisir le prix">
            <span id="error_price"></span>
            <br>
        </div>
        <!-- PICTURE-->
        <div>
            <label for="fichier">Picture</label>
            <br>
            <input type="file" name="fichier" id="fichier">



        </div>
        <input type="hidden" name="disc_id" value="<?=$row->disc_id?>">
        <input type="hidden" name="artist_id" value="<?=$row->artist_id?>">

        <!-- Envoie -->
        <div>
            <button name="upload" type="file" class="btn btn-primary mt-3" >Ajouter</button>
            <button onclick="window.location.href = 'index.php';" type="submit" class="btn btn-primary mt-3">Retour</button>
        </div>
    </form>
    <script src="add_form.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
</body>
</html>