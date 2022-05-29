

<?php

    require_once 'db_connectie.php';
    require_once 'film_pagina.php';

 //$getMovie = $_GET['page'];
 $movieId = 332548; // dit nog wendbaar maken dat ie het voor elke film doet

    $filmMetInfo= $connection ->query
    (
        "SELECT M.movie_id, M.title, M.duration, M.description, M.publication_year, M.cover_image, P.firstname, P.lastname, MD.movie_id, MD.person_id, MC.movie_id, MC.person_id
        FROM Movie as M
        LEFT JOIN Movie_Director AS MD ON M.movie_id = MD.movie_id
        LEFT JOIN Person AS P ON MD.person_id = P.person_id
        LEFT JOIN Movie_Cast AS MC ON P.person_id = MC.person_id
        WHERE M.movie_id = '.$movieId.';
       "
    );

    
$fotos= 'try again bitch';
$niksGevonden= 'Er is geen resultaat';

while($filmInfo= $filmMetInfo ->fetch(PDO::FETCH_ASSOC)){
    global $niksGevonden; // miss GLOBAL ervoor

    If($filmInfo['title']!==NULL){ // de title en description etc moet wss in de html nog geassigned worden niet vergeten
        $titel = $filmInfo['title'];
    } else{
        $titel = $niksGevonden;
    }

    If($filmInfo['duur']!==NULL){ 
        $duur = $filmInfo['duur'];
    } else{
        $duur = $niksGevonden;
    }

    If($filmInfo['omschrijving']!==NULL){ 
        $omschrijving = $filmInfo['omschrijving'];
    } else{
        $omschrijving = $niksGevonden;
    }

    If($filmInfo['jaarVanUitgave']!==NULL){ 
        $jaarVanUitgave = $filmInfo['jaarVanUitgave'];
    } else{
        $jaarVanUitgave = $niksGevonden;
    }

    If($filmInfo['vorigeDeel']!==NULL){ 
        $vorigeDeel = $filmInfo['vorigeDeel'];
    } else{
        $vorigeDeel = $niksGevonden;
    }

    $foto = $filmInfo['cover_image'];
    }

   
        function haalInfoOp(){
            global $filmInfo;
            return $filmInfo;
        }


?>