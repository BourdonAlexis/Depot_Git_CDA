<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Modification</title>
</head>
<body class="mx-5">

<?php
require "connexion.php";
$disc_id=$_GET['disc_id'];
$requete = "SELECT * FROM disc JOIN artist ON disc.artist_id = artist.artist_id where disc_id=".$disc_id;
$result = $db->query($requete);
$row = $result->fetch(PDO::FETCH_OBJ);




?>
<h1>Formulaire de modification</h1>
<hr>

<div>
    <form action="script_delete.php?disc_id=<?php echo $row->disc_id ?>" method="post">
        <label for="title">Title  </label>
        <input class="form-control"  type="text" id="title" name="title" value="<?php  echo $row->disc_title;?>" />


        <label for="artist">Artist  </label>
        <input class="form-control"  type="text" id="artist" name="artist" value="<?php  echo $row->artist_name;?>" />

        <label for="year">Year  </label>
        <input class="form-control"  type="date" id="year" name="year" value="<?php  echo $row->disc_year;?>" />

        <label for="genre">Genre  </label>
        <input class="form-control"  type="text" id="genre" name="genre" value="<?php  echo $row->disc_genre;?>" />

        <label for="label">Label  </label>
        <input class="form-control"  type="text" id="label" name="label" value="<?php  echo $row->disc_label;?>" />

        <label for="price">Price  </label>
        <input class="form-control"  type="text" id="price" name="price" value="<?php  echo $row->disc_price;?>" />

        <button type="file" class="btn btn-primary mt-3" >Supprimer</button>
        <button onclick="window.location.href = 'index.php';" type="submit" class="btn btn-primary mt-3">Retour</button>
        <input type="hidden" name="disc_id" value="<?=$row->disc_id?>">
        <input type="hidden" name="artist_id" value="<?=$row->artist_id?>">
    </form>
</div>

<footer>

</footer>

</body>
</html>