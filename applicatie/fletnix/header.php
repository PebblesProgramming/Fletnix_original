<?php 
    require_once 'db_connectie.php';
    
    session_start();

?>


<!DOCTYPE html>
<section class="grid-container">
        <header>
            <section class="grid-item1">
            <a class="Logo" href="index.php"><img src="images/FletnixLogo2.png" alt="Fletnix"></a>
            </section>
            <nav>
                <section class="grid-item2">
                <ul class="navigatieBarlinks">
                 
                    <form action="search_bar.php" method="get">
                <input type="text" name="text" placeholder="Zoek Films en Series..."> <!-- search bar nog mooi zetten -->
                <input type="submit" name="submit" value="Zoek">
                <li><a href="over_ons.php">Over Ons</a></li>
                <?php
        include_once 'search_bar.php';
?>
            </form>
              
                  
                
                </section>
            </nav>
            <section class="grid-item3">
            <a class="Registratie" href="registratie.php">Aanmelden</a>
            <?php 
            echo "<button> ".$_SESSION['uid']."</button><a class='ProfielButton' href=''></a>";
            print_r($_SESSION);
            ?>
            
            </section>
        </header>
</section>

        </html>