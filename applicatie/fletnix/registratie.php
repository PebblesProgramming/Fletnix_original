<!DOCTYPE html>
<?php

include_once 'header.php';
require_once 'db_connectie.php';

// session_start();

if(isset($_SESSION['uid'])){ // als de user ingelogd is word die naar de homepagina gestuurd
    header("location:index.php");
}

if(isset($_REQUEST['submit'])){ //inlog knop
   
    $username= filter_var($_REQUEST['uid'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $password= strip_tags($_REQUEST['pwd']);

    if(empty($username)){
        $errorMsg[] = 'Voer username in';
    } else if(empty($password)){
        $errorMsg[] = 'Voer wachtwoord in';
    }
    try{
        $sql = $connection->prepare("SELECT * FROM fletnix_user WHERE username = :username "); // limit 1 omdat ie er maar 1 hoeft terug te geven
        $sql->execute([
            ':username' =>$username
        ]);

        $row = $sql->fetch(PDO::FETCH_ASSOC);
        if($sql->rowCount() > 0){

            if(password_verify($password, $row['pwd'])){
                $_SESSION['uid'] = $row['uid']; // dit is wat er aan de sessie word laten zien als je succesvol bent ingelogd
                $_SESSION['email'] = $row['email'];
                $_SESSION['id'] = $row['id'];

                header('location: index.php');
            }
            else{
                $errorMsg[]= 'Verkeerde gebruiksnaam of wachtwoord';
            }

        } else{
            $errorMsg[] = 'Verkeerde gebruiksnaam of wachtwoord';
        }
    }
    catch(PDOException $e){
        echo $e->getMessage();
    }
    
      
    

}

if(isset($_REQUEST['submit2'])){ // als er op de registratie knop word gedrukt 
    
    // echo "<pre>";
    // print_r($_REQUEST);
    // echo "</pre>";
    
    
    $email= filter_var($_REQUEST['email'],FILTER_SANITIZE_EMAIL);
    $username= filter_var(strtolower($_REQUEST['uid']),FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $password= strip_tags($_REQUEST['pwd']);

    if(empty($email)){
        $errorMsg[0][] = 'Email is vereist';
    }
    if(empty($username)){
        $errorMsg[1][] = 'Username is vereist';
    }
    if(empty($password)){
        $errorMsg[2][] = 'Wachtwoord is vereist';
    }
    if(strlen($password)< 6){
        $errorMsg[2][] = 'Moet minimaal 6 karakters zijn!';
    }


    if(empty($errorMsg)){
        try{
            $sql = $connection->prepare("SELECT username, email FROM fletnix_user WHERE email = :email");
            $sql->execute([':email'=>$email]); // checkt of deze al bestaat
            $row= $sql->fetch(PDO::FETCH_ASSOC);

            if(isset($row['email']) == $email){
                $errorMsg[0][] = "Email Bestaat al";
            } else{
                $hashed_password = password_hash($password, PASSWORD_DEFAULT);
               $insert = $connection->prepare("INSERT INTO fletnix_user(username,password,email) VALUES(:username, :pwd, :email)");
                if(
                    $insert->execute(
                        [
                            ':uid'=> $username,
                            ':pwd' => $hashed_password,
                            ':email' => $email
                        ]
                        )
                ){
                    header("location index.php?msg=".urlencode('Click the verification email'));// dit is optioneel
                }
            }
    }
    catch(PDOException $e){
        $pdoError = $e->getMessage();// als er iets mis gaat met de database laat ik dat hier zien
    }
}}

 ?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Registreren</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/registratie.css">
    <link rel="stylesheet" href="normalize.css">
</head>
<body>
   

    <section class="description"> Maak nu een account aan en krijg de eerste 7 dagen gratis!
            <br>Volg in de voetstappen van onze 6 miljard klanten en geniet van de beste films en series.
    </section>

    <section class="registratie">
     
 
      <section class="grid-container2">
          <h1>Heeft u al een account? log dan in!</h1>
          <form action="registratie.php" method="post">
              <?php if(isset($_REQUEST['msg'])){
                  echo "<p>".$_REQUEST['msg']."</p>";
              }
              
              ?>
          <input type="text" name="uid" placeholder="Gebruikersnaam">
          <br>
          <?php
          if(isset($errorMsg)){
                foreach($errorMsg as $inlogError){
                    echo "<p class = 'waarschuwingsMelding'>".$inlogError."</p>";
                }
        }
        ?>
          <input type="password" name="pwd" placeholder="Wachtwoord">
          <br>
          
          <button type="submit" name="submit">Log In</button><a class="nu_inloggen" href="#"></a>
          </form>
     
      
      
        </section>    
  
        <section class="gegevens" > 
            <h1>Registreer Uw Account</h1> <!-- zet deze nog naar index.php als de gebruiker is ingelogd -->
            <form action="registratie.php" method="post">
           
            <ul><li> <input type="text" name="email" placeholder="Email"></li></ul>
            <br>
            <?php  
            if(isset($errorMsg[0])){
                foreach($errorMsg[0] as $emailError){
                    echo "<p class = 'waarschuwingsMelding'>".$emailError."</p>";
                }
        }
                ?>
            <ul><li> <input type="text" name="uid" placeholder="Gebruikersnaam" ></li></ul>
            <br>
            <?php  
            if(isset($errorMsg[1])){
                foreach($errorMsg[1] as $uidError){
                    echo "<p class = 'waarschuwingsMelding'>".$uidError."</p>";
                }
        }
                ?>
            <ul><li> <input type="password" name="pwd" placeholder="Wachtwoord" > </li></ul>
            <br>
            <?php  
            if(isset($errorMsg[2])){
                foreach($errorMsg[2] as $passwordError){
                    echo "<p class = 'waarschuwingsMelding'>".$passwordError."</p>";
                }
            }
                ?>
            <!-- <ul><li><input type="password" name="pwdRepeat" placeholder="Herhaal Wachtwoord"></li></ul>
            <br> -->
            <button type="submit2" name="submit2">Registreer Nu!</button><a class="RegistreerButton" href="#"></a>
        </form>
       
    </section>

    <?php
    include_once 'footer.php';
?>
</body>


</html>