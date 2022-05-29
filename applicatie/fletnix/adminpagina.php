<?php
    require_once "header.php";

    require_once "registratie.php";

    session_start(); // NIET VERGETEN!

    if (isset($_SESSION['name'])) {
        $ingelogd = true;
        $username = $_SESSION['name'];
    } else {
        $ingelogd = false;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hoofdpagina</title>
    <link rel="stylesheet" href="css/style.css"> 
    <link rel="stylesheet" href="normalize.css">
</head>
<body>
    <?php
       // gebruik dit scherm voor de registratie als het proces compleet is
    ?>

    <h1>Welkom<?php {$_POST['uid'];}?>!</h1>
    
    <p>Welkom op Fletnix, klik hieronder voor een overzicht van de films.</p>
    <form action="index.php" method="get">
    <p><button type="submit" name="submit">Begin met kijken!</button>
    <!-- <a class="begin_met_kijken" href=""></a> -->
    </p></form>
    <!-- <p><a href="index.php">Begin met kijken!</a></p> -->
</body>
</html>

<?php
    require_once "footer.php";
?>