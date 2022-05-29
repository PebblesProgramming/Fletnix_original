
<!DOCTYPE html>
<?php
 require_once 'db_connectie.php';
 include_once 'header.php';

?> 

<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Fletnix</title>
<link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="normalize.css"> 
</head>
<body>


<section class="flexbox-container">
    <h2>ACTIE</h2>
    <section class="flexbox-items">
    <?php

  
    $genre=$connection -> query( 
    "SELECT M.movie_id, M.title, M.cover_image, G.movie_id, G.genre_name 
    FROM  Movie AS M
    INNER JOIN Movie_Genre as G ON M.movie_id = G.movie_id
    WHERE G.genre_name = N'Action' ;
     ");
     while($r=$genre->fetch(PDO::FETCH_ASSOC)){
        if($r['cover_image']==0){
            $r['cover_image'] = "images/placeholder.jpg";
        } 
    echo ' <a href = "film_pagina.php" > <img src = "images/actie.jpg" alt = ""class= "flexbox-item"/></a>';
    }
    ?>
    </section>
</section>

<section class="flexbox-container">
    <h2>ADVENTURE</h2>
    <section class="flexbox-items">
    <?php
    $genre=$connection -> query( 
    "SELECT M.movie_id, M.cover_image, G.movie_id, G.genre_name 
    FROM  Movie AS M
    INNER JOIN Movie_Genre as G ON M.movie_id = G.movie_id
    WHERE G.genre_name = N'Adventure' ;
     ");
     while($r=$genre->fetch(PDO::FETCH_ASSOC)){
        if($r['cover_image']==0){
            $r['cover_image'] = "images/placeholder.jpg";
        } 
    echo'<a href = "film_pagina.php" > <img src = "images/adventure.jpg" alt = ""class= "flexbox-item"/></a>';
    }
    ?>
    </section>
</section>

<section class="flexbox-container">
    <h2>ANIMATION</h2>
    <section class="flexbox-items">
    <?php
    $genre=$connection -> query( 
    "SELECT M.movie_id, M.cover_image, G.movie_id, G.genre_name 
    FROM  Movie AS M
    INNER JOIN Movie_Genre as G ON M.movie_id = G.movie_id
    WHERE G.genre_name = N'Animation' ;
     ");
     while($r=$genre->fetch(PDO::FETCH_ASSOC)){
        if($r['cover_image']==0){
            $r['cover_image'] = "images/placeholder.jpg";
        } 
    echo'<a href = "film_pagina.php" > <img src = "images/animation.jpg" alt = ""class= "flexbox-item"/></a>';
    }
    ?>
    </section>
</section>

<section class="flexbox-container">
    <h2>COMEDY</h2>
    <section class="flexbox-items">
    <?php
    $genre=$connection -> query( 
    "SELECT M.movie_id, M.cover_image, G.movie_id, G.genre_name 
    FROM  Movie AS M
    INNER JOIN Movie_Genre as G ON M.movie_id = G.movie_id
    WHERE G.genre_name = N'Comedy' ;
     ");
     while($r=$genre->fetch(PDO::FETCH_ASSOC)){
        if($r['cover_image']==0){
            $r['cover_image'] = "images/placeholder.jpg";
        } 
    echo'<a href = "film_pagina.php" > <img src = "images/comedy.jpg" alt = ""class= "flexbox-item"/></a>';
    }
    ?>
    </section>
</section>

<section class="flexbox-container">
    <h2>CRIME</h2>
    <section class="flexbox-items">
    <?php
    $genre=$connection -> query( 
    "SELECT M.movie_id, M.cover_image, G.movie_id, G.genre_name 
    FROM  Movie AS M
    INNER JOIN Movie_Genre as G ON M.movie_id = G.movie_id
    WHERE G.genre_name = N'Crime' ;
     ");
     while($r=$genre->fetch(PDO::FETCH_ASSOC)){
        if($r['cover_image']==0){
            $r['cover_image'] = "images/placeholder.jpg";
        } 
    echo'<a href = "film_pagina.php" > <img src = "images/crime.jpg" alt = ""class= "flexbox-item"/></a>';
    }
    ?>
    </section>
</section>

<section class="flexbox-container">
    <h2>DOCUMENTARY</h2>
    <section class="flexbox-items">
    <?php
    $genre=$connection -> query( 
    "SELECT M.movie_id, M.cover_image, G.movie_id, G.genre_name 
    FROM  Movie AS M
    INNER JOIN Movie_Genre as G ON M.movie_id = G.movie_id
    WHERE G.genre_name = N'Documentary' ;
     ");
     while($r=$genre->fetch(PDO::FETCH_ASSOC)){
        if($r['cover_image']==0){
            $r['cover_image'] = "images/placeholder.jpg";
        } 
    echo'<a href = "film_pagina.php"> <img src = "images/documentary.jpg" alt = ""class= "flexbox-item"/></a>';
    }
    ?>
    </section>
</section>

<section class="flexbox-container">
    <h2>DRAMA</h2>
    <section class="flexbox-items">
    <?php
    $genre=$connection -> query( 
    "SELECT M.movie_id, M.cover_image, G.movie_id, G.genre_name 
    FROM  Movie AS M
    INNER JOIN Movie_Genre as G ON M.movie_id = G.movie_id
    WHERE G.genre_name = N'Drama' ;
     ");
     while($r=$genre->fetch(PDO::FETCH_ASSOC)){
        if($r['cover_image']==0){
            $r['cover_image'] = "images/placeholder.jpg";
        } 
    echo'<a href = "film_pagina.php" > <img src = "images/drama.jpg" alt = ""class= "flexbox-item"/></a>';
    }
    ?>
    </section>
</section>

<section class="flexbox-container">
    <h2>FAMILY</h2>
    <section class="flexbox-items">
    <?php
    $genre=$connection -> query( 
    "SELECT M.movie_id, M.cover_image, G.movie_id, G.genre_name 
    FROM  Movie AS M
    INNER JOIN Movie_Genre as G ON M.movie_id = G.movie_id
    WHERE G.genre_name = N'Family' ;
     ");
     while($r=$genre->fetch(PDO::FETCH_ASSOC)){
        if($r['cover_image']==0){
            $r['cover_image'] = "images/placeholder.jpg";
        } 
    echo'<a href = "film_pagina.php" > <img src = "images/family.jpg" alt = ""class= "flexbox-item"/></a>';
    }
    ?>
    </section>
</section>

<section class="flexbox-container">
    <h2>FANTASY</h2>
    <section class="flexbox-items">
    <?php
    $genre=$connection -> query( 
    "SELECT M.movie_id, M.cover_image, G.movie_id, G.genre_name 
    FROM  Movie AS M
    INNER JOIN Movie_Genre as G ON M.movie_id = G.movie_id
    WHERE G.genre_name = N'Fantasy' ;
     ");
     while($r=$genre->fetch(PDO::FETCH_ASSOC)){
        if($r['cover_image']==0){
            $r['cover_image'] = "images/placeholder.jpg";
        } 
    echo'<a href = "film_pagina.php"> <img src = "images/fantasy.jpg" alt = ""class= "flexbox-item"/></a>';
    }
    ?>
    </section>
</section>

<section class="flexbox-container">
    <h2>HORROR</h2>
    <section class="flexbox-items">
    <?php
    $genre=$connection -> query( 
    "SELECT M.movie_id, M.cover_image, G.movie_id, G.genre_name 
    FROM  Movie AS M
    INNER JOIN Movie_Genre as G ON M.movie_id = G.movie_id
    WHERE G.genre_name = N'Horror' ;
     ");
     while($r=$genre->fetch(PDO::FETCH_ASSOC)){
        if($r['cover_image']==0){
            $r['cover_image'] = "images/placeholder.jpg";
        } 
    echo'<a href = "film_pagina.php"> <img src = "images/horror.jpg" alt = ""class= "flexbox-item"></a>';
    }
    ?>
    </section>
</section>

<section class="flexbox-container">
    <h2>MUSICAL</h2>
    <section class="flexbox-items">
    <?php
    $genre=$connection -> query( 
    "SELECT M.movie_id, M.cover_image, G.movie_id, G.genre_name 
    FROM  Movie AS M
    INNER JOIN Movie_Genre as G ON M.movie_id = G.movie_id
    WHERE G.genre_name = N'Musical' ;
     ");
     while($r=$genre->fetch(PDO::FETCH_ASSOC)){
        if($r['cover_image']==0){
            $r['cover_image'] = "images/placeholder.jpg";
        } 
    echo'<a href = "film_pagina.php" > <img src = "images/muscial.jpg" alt = ""class= "flexbox-item"/></a>';
    }
    ?>
    </section>
</section>

<section class="flexbox-container">
    <h2>MYSTERY</h2>
    <section class="flexbox-items">
    <?php
    $genre=$connection -> query( 
    "SELECT M.movie_id, M.cover_image, G.movie_id, G.genre_name 
    FROM  Movie AS M
    INNER JOIN Movie_Genre as G ON M.movie_id = G.movie_id
    WHERE G.genre_name = N'Mystery' ;
     ");
     while($r=$genre->fetch(PDO::FETCH_ASSOC)){
        if($r['cover_image']==0){
            $r['cover_image'] = "images/placeholder.jpg";
        } 
    echo'<a href = "film_pagina.php"> <img src = "images/placeholder.jpg" alt = ""class= "flexbox-item"/></a>';
    }
    ?>
    </section>
</section>

<section class="flexbox-container">
    <h2>ROMANCE</h2>
    <section class="flexbox-items">
    <?php
    $genre=$connection -> query( 
    "SELECT M.movie_id, M.cover_image, G.movie_id, G.genre_name 
    FROM  Movie AS M
    INNER JOIN Movie_Genre as G ON M.movie_id = G.movie_id
    WHERE G.genre_name = N'Romance' ;
     ");
     while($r=$genre->fetch(PDO::FETCH_ASSOC)){
        if($r['cover_image']==0){
            $r['cover_image'] = "images/placeholder.jpg";
        } 
    echo'<a href = "film_pagina.php" > <img src = "images/romance.jpg" alt = ""class= "flexbox-item"/></a>';
    }
    ?>
    </section>
</section>

<section class="flexbox-container">
    <h2>Sci-Fi</h2>
    <section class="flexbox-items">
    <?php
    $genre=$connection -> query( 
    "SELECT M.movie_id, M.cover_image, G.movie_id, G.genre_name 
    FROM  Movie AS M
    INNER JOIN Movie_Genre as G ON M.movie_id = G.movie_id
    WHERE G.genre_name = N'Sci-Fi' ;
     ");
     while($r=$genre->fetch(PDO::FETCH_ASSOC)){
        if($r['cover_image']==0){
            $r['cover_image'] = "images/placeholder.jpg";
        } 
    echo'<a href = "film_pagina.php" > <img src = "images/placeholder.jpg" alt = ""class= "flexbox-item"/></a>';
    }
    ?>
    </section>
</section>

<section class="flexbox-container">
    <h2>SHORT</h2>
    <section class="flexbox-items">
    <?php
    $genre=$connection -> query( 
    "SELECT M.movie_id, M.cover_image, G.movie_id, G.genre_name 
    FROM  Movie AS M
    INNER JOIN Movie_Genre as G ON M.movie_id = G.movie_id
    WHERE G.genre_name = N'Short' ;
     ");
     while($r=$genre->fetch(PDO::FETCH_ASSOC)){
        if($r['cover_image']==0){
            $r['cover_image'] = "images/placeholder.jpg";
        } 
    echo'<a href = "film_pagina.php" > <img src = "images/short.jpg" alt = ""class= "flexbox-item"/></a>';
    }
    ?>
    </section>
</section>

<section class="flexbox-container">
    <h2>THRILLER</h2>
    <section class="flexbox-items">
    <?php
    $genre=$connection -> query( 
    "SELECT M.movie_id, M.cover_image, G.movie_id, G.genre_name 
    FROM  Movie AS M
    INNER JOIN Movie_Genre as G ON M.movie_id = G.movie_id
    WHERE G.genre_name = N'Thriller' ;
     ");
     while($r=$genre->fetch(PDO::FETCH_ASSOC)){
        if($r['cover_image']==0){
            $r['cover_image'] = "images/placeholder.jpg";
        } 
    echo'<a href = "film_pagina.php" > <img src = "images/thrillerr.jpg" alt = ""class= "flexbox-item"/></a>';
    }
    ?>
    </section>
</section>

<section class="flexbox-container">
    <h2>WAR</h2>
    <section class="flexbox-items">
    <?php
    $genre=$connection -> query( 
    "SELECT M.movie_id, M.cover_image, G.movie_id, G.genre_name 
    FROM  Movie AS M
    INNER JOIN Movie_Genre as G ON M.movie_id = G.movie_id
    WHERE G.genre_name = N'War' ;
     ");
     while($r=$genre->fetch(PDO::FETCH_ASSOC)){
        if($r['cover_image']==0){
            $r['cover_image'] = "images/placeholder.jpg";
        } 
    echo'<a href = "film_pagina.php" > <img src = "images/war.jpg" alt = ""class= "flexbox-item"/></a>';
    }
    ?>
    </section>
</section>

<section class="flexbox-container">
    <h2>WESTERN</h2>
    <section class="flexbox-items">
    <?php
    $genre=$connection -> query( 
    "SELECT M.movie_id, M.cover_image, G.movie_id, G.genre_name 
    FROM  Movie AS M
    INNER JOIN Movie_Genre as G ON M.movie_id = G.movie_id
    WHERE G.genre_name = N'Western' ;
     ");
     while($r=$genre->fetch(PDO::FETCH_ASSOC)){
        if($r['cover_image']==0){
            $r['cover_image'] = "images/placeholder.jpg";
        } 
    echo'<a href = "film_pagina.php"> <img src = "images/western.jpg" alt = ""class= "flexbox-item"/></a>';
    }
    ?>
    </section>
</section>




<?php
    include_once 'footer.php';
?>
</body>

</html>