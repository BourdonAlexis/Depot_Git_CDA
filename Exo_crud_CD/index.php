<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Disque</title>
</head>
<body class="mx-5 mt-5">
<?php
require "connexion.php";
$requete = "SELECT * FROM disc JOIN artist ON disc.artist_id = artist.artist_id";
$result = $db->query($requete);
$row = $result->fetchAll(PDO::FETCH_OBJ);


$cpt = "SELECT disc_id FROM disc";
$cpt = $db->query($cpt);
$nbLigne = $cpt->rowCount(); // Nombre de lignes retournées par la requête
?>
    <!-- HEADER*********************************************** -->

    <header class="container"> 
    <form action="add_form.php" method="post" enctype="multipart/form-data">
        <div class="row">

            <div class="col-11"> <h1>liste des disque(<?php echo  $nbLigne ?>)</h1></div>
            <div class="col-1"> <button type="file" class="btn btn-primary">Ajouter</button></div>
        </div>
    </form>

        <br>
    </header>
    <!--Appel infos ---------->



    <div class="container">
        <div class="row">

             <?php


   if ($nbLigne > 1) {
               foreach($row as $disc) // Tant qu'il y a des lignes à afficher :
                { ?>

            <div class="col-6">

                <img src= 'IMG/<?php  echo $disc->disc_picture; ?>' width="80%" /><br>
                <span ><b>Title : </b><?php  echo $disc->disc_title."<br>"; ?></span>
                <span><b>Artist : </b><?php  echo $disc->artist_name."<br>"; ?></span>
                <span><b>Year : </b><?php  echo $disc->disc_year."<br>"; ?></span>
                <span><b>Genre : </b><?php  echo $disc->disc_genre."<br>"; ?></span>
                <span><b>Label : </b><?php  echo $disc->disc_label."<br>"; ?></span>
                <span><b>Price : </b><?php  echo $disc->disc_price; ?></span>
                <form action="details.php?disc_id=<?php echo $disc->disc_id ?>" method="post" enctype="multipart/form-data">
                    <button class="btn btn-primary mb-5 mt-1">Détails</button>
                </form>

            </div>
            <?php
            }

            $result->closeCursor(); // Libère la connexion au serveur

            }

            ?>

        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
</body>
</html>