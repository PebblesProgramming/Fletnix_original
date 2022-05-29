<?php
         include_once 'header.php';
         include_once 'db_connectie.php';
         include_once 'film_info_query.php';
         include_once 'index.php';
      
  

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 <link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/film_pagina.css">
 <link rel="stylesheet" href="normalize.css">
</head>
<body>

    <!--grid indeling film pagina-->
    <section class="filmpagina">
        <?php echo $filmInfo; ?>
        <img src="images/film9.jpg" alt="" class="film_foto"/>
        <section class="film_beschrijving">
            <?php   ?>
            <h1> <?php  echo ";
                print_r($_REQUEST[$titel]);
                 ";
                 ?> </h1>
            <br>
            <h2>Jaar: <?php  echo  $jaarVanUitgave ?> </h2>
            <br>
            <h2>Duur: <?php echo  $duur ?></h2>
            <br>
            <h2>Regisseur:  <?php echo  $titel ?></h2>
            <br>
            <h2>Hoofdrolspelers:  <?php echo  $titel ?></h2>
            <br>
            <h2>Samenvatting:</h2>
            <br>
            <p>
              <?php echo  $omschrijving ?>
            </p>
            <h2>Vorige deel: <?php  echo  $vorigeDeel ?> </h2>
            <br>
            <a href="https://youtu.be/Ba0fm-6q6QQ"><h2>Trailer Link</h2></a>
            <button>Bekijk</button><a class="SpeelKnop" href="#"></a>
        </section>
        <?php


   
    // $alleFilms = $connection -> query(
    //     " SELECT *
    //     FROM Movie
       
    //     "
    // );
    // $r = $alleFilms->fetch();
    // echo'<pre>', print_r($r), '</pre>';
//     $horrorGenre=$connection -> query( 
//     "SELECT M.movie_id, M.cover_image, G.movie_id, G.genre_name 
//     FROM  Movie AS M
//     INNER JOIN Genre as G ON M.movie_id = G.movie_id
//     WHERE G.genre_name = 'Horror' ;
//      ");

// if ($horrorGenre->num_rows > 0) {
//     // output data of each row
//     while($row = $result->fetch_assoc()) {
//         echo '<li class="item"><a href="applicatie/fletnix/index.php?MovieTitle='.$row['Title'].'&PlayingTime='.$row['PlayingTime'].'&PublicationDate='.$row['PublicationDate'].'&Author='.$row['AuthorId'].'&Cast='.$row['Cast'].'&Description='.$row['Description'].'"><img src="'.$row['PreviewImg'].'" title="'.$row['Title'].'" alt="'.$row['Title'].'">';
//   }
// } else {
//     echo "0 results";
//   }
//   $conn->close();
                    ?>

    </section>
   <?php
    include_once 'footer.php';
   ?>
</body>

</html>