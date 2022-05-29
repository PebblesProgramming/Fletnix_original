
<?php

require_once 'db_connectie.php';


function legeInputRegistratie($email, $uid, $pwd, $pwdRepeat){
    $resultaat = false;
    if(empty($email)|| empty($uid)|| empty($pwd)|| empty($pwdRepeat)){
        $resultaat = true;
    }
    else{
        $resultaat = false;
    }
    return $resultaat;
}

function ongeldigeUid($uid){
    $resultaat = false;
    if(!preg_match("/^[a-zA-Z0-9]*$/" ,$uid)){ // als de uid niet overeen komt met de preg_match, ofwel de requirements die ik stel voor een Uid
        $resultaat = true;// dan geeft die een error
    }
    else{
        $resultaat = false;
    }
    return $resultaat;
}

function ongeldigeEmail($email){
    $resultaat = false;
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){ // check of de email correct is
        $resultaat = true;
    }
    else{
        $resultaat = false;
    }
    return $resultaat;
}

function wachtwoordKomtOvereen($pwd, $pwdRepeat){
    $resultaat = false;
    if($pwd!==$pwdRepeat){ // check of wachtwoord overeen komt
        $resultaat = true;
    }
    else{
        $resultaat = false;
    }
    return $resultaat;
}

// function gebruikteUid($connection,$uid, $email){ // check of de Uid al in de database staat
//     $query = "SELECT * FROM fletnix_user WHERE username = '".$_POST['uid']."' OR email ='".$_POST['email']."';";  // check of zowel de Uid als de email al bestaat
//     $sql= $connection->prepare($query);
//     if(!$sql->prepare( $query)){ // als er iets fout gaat word de gebruiker terug gestuurd
//         header("location:registratie.php?error=databasefout");
//         die(); // 1:13:24
//     }

//     $sql ->bindParam("ss", $uid, $email);
//     $sql->excecute();

//     $dataResultaat = $sql ->get_result();
//     if($row = $dataResultaat->fetch(PDO::FETCH_ASSOC)){
//         return $row; // dit heeft een dubbel doel, checken of de uid en email in de datbase staat
//     } else{ // maar dit gebruik ik ook voor het inloggen want ik return het resultaat als die WEL in de database staat
//         $resultaat = false;
//         return $resultaat;
//     }

//     $sql->close();
// }

function maakGebruiker($connection, $uid, $pwd, $email){ // als alles klopt word de user hier aangemaakt
    $query = "INSERT INTO fletnix_user (username, password, email) VALUES(?, ?, ?) ;"; // dit zijn placeholders
    $sql= $connection->prepare($query);
    if(!$sql->prepare( $query)){ // als er iets fout gaat word de gebruiker terug gestuurd
        header("location:registratie.php?error=databasefout");
        die(); 
    }

    $hashedpwd = password_hash($pwd, PASSWORD_DEFAULT);

    $sql ->bindParam("sss", $uid, $hashedpwd, $email);
    $sql->excecute();
    $sql->close();

    header("location:index.php?error=none");
}
