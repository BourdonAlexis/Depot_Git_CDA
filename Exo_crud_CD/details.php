<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Détails</title>
</head>
<body class="mx-5">

    <?php

    require "connexion.php";
    $disc_id=$_GET['disc_id'];
    $requete = "SELECT * FROM disc JOIN artist ON disc.artist_id = artist.artist_id where disc_id=".$disc_id;
    $result = $db->query($requete);
    $row = $result->fetch(PDO::FETCH_OBJ);




    ?>
    <h1>La page de détails</h1>
    <hr>
    <div class="container-fluid">
        <div class="row">
            <div class="col-6">
                <label for="title">Title  </label>
                <input class="form-control"  type="text" id="title" name="title" value="<?php  echo $row->disc_title;?>" readonly/>
            </div>
            <div class="col-6">
                <label for="artist">Artist  </label>
                <input class="form-control"  type="text" id="artist" name="artist" value="<?php  echo $row->artist_name;?>" readonly/>
            </div>
            <div class="col-6 mt-2">
                <label for="year">Year  </label>
                <input class="form-control"  type="text" id="year" name="year" value="<?php  echo $row->disc_year;?>" readonly/>
            </div>
            <div class="col-6 mt-2">
                <label for="genre">Genre  </label>
                <input class="form-control"  type="text" id="genre" name="genre" value="<?php  echo $row->disc_genre;?>" readonly/>
            </div>
            <div class="col-6 mt-2">
                <label for="label">Label  </label>
                <input class="form-control"  type="text" id="label" name="label" value="<?php  echo $row->disc_label;?>" readonly/>
            </div>
            <div class="col-6 mt-2">
                <label for="price">Price  </label>
                <input class="form-control"  type="text" id="price" name="price" value="<?php  echo $row->disc_price;?>" readonly/>
            </div>
            <div><img src= 'IMG/<?php  echo $row->disc_picture; ?>' width="40%" /><br></div>

        </div>
    </div>

    <footer>
        <button onclick="window.location.href = 'form_update.php?disc_id=<?php echo $row->disc_id ?>';" type="submit" class="btn btn-primary mt-3" >Modifier</button>
        <button onclick="window.location.href = 'delete_form.php?disc_id=<?php echo $row->disc_id ?>';" type="submit" class="btn btn-primary mt-3" >Supprimer</button>
        <button onclick="window.location.href = 'index.php';" type="submit" class="btn btn-primary mt-3">Retour</button>
    </footer>

</body>
</html>


