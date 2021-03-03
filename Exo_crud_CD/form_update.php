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
            <form action="script_update.php?disc_id=<?php echo $row->disc_id ?>" method="post" id="update" enctype="multipart/form-data">

                <div>
                    <label for="title">Title  </label>
                    <input class="form-control"  type="text" id="title" name="title" value="<?php  echo $row->disc_title;?>" />
                    <span id="error_title"></span>
                    <br>
                </div>
                <div>
                    <label for="artist">Artist  </label>
                    <input class="form-control"  type="text" id="artist" name="artist" value="<?php  echo $row->artist_name;?>" />
                    <span id="error_artist"></span>
                    <br>
                </div>
                <div>
                    <label for="year">Year  </label>
                    <input class="form-control"  type="number" id="year" name="year" value="<?php  echo $row->disc_year;?>" />
                    <span id="error_year"></span>
                    <br>
                </div>
                <div>
                    <label for="genre">Genre  </label>
                    <input class="form-control"  type="text" id="genre" name="genre" value="<?php  echo $row->disc_genre;?>" />
                    <span id="error_genre"></span>
                    <br>
                </div>
                <div>
                    <label for="label">Label  </label>
                    <input class="form-control"  type="text" id="label" name="label" value="<?php  echo $row->disc_label;?>" />
                    <span id="error_label"></span>
                    <br>
                </div>
                <div>
                    <label for="price">Price  </label>
                    <input class="form-control"  type="text" id="price" name="price" value="<?php  echo $row->disc_price;?>" />
                    <span id="error_price"></span>
                    <br>
                </div>
                <div>
                    <label for="fichier">Picture</label>
                    <br>
                    <input type="file" name="fichier" id="fichier">
                    <div><img src= 'IMG/<?php  echo $row->disc_picture; ?>' width="40%" /><br></div>
                </div>

                <button type="file" class="btn btn-primary mt-3" name="upload">Modifier</button>
                <button onclick="window.location.href = 'index.php';" type="submit" class="btn btn-primary mt-3">Retour</button>
                <input type="hidden" name="disc_id" value="<?=$row->disc_id?>">
                <input type="hidden" name="artist_id" value="<?=$row->artist_id?>">
            </form>
        </div>


<script src="form_update.js"></script>
</body>
</html>