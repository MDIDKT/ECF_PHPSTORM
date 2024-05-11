<?php
/*
* verifie si la session est active et affiche le mail de 
* l'utilisateur sinon affiche les boutons de connexion et d'inscription 
*/ 
if (isset($_SESSION['users'])) {

    ?><h1>
            <?php echo 'welcome' . ' ' . $_SESSION['users']['mail']; ?>
        </h1>
            <br><br>
    <?php 
?>
        <a href="../modele/deconnexion.php">
            <input type="button" value="Logout">
        </a>
    <?php
        } else {  
            
    ?>  <a href="../modele/deconnexion.php">
            <input type="button" value="Login">
        </a>
    <?php }?>
        
