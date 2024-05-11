<?php
require_once '../modele/connexionBDD.php';
require_once '../modele/veriflogin.php';
require_once '../controleur/session.php';


if(isset($_POST['OK'])){
    $user = veriflogin($bdd, $_POST['mail'], $_POST['password']);
      
      if ($user) {
        $_SESSION['users'] = $user;
      header('Location: reponseConnexion.php');
      }
      else {
          echo 'login failed';
      }

  }
?>