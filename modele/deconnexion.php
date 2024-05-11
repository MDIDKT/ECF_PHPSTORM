<?php
require_once '../modele/connexionBDD.php';
require_once '../controleur/session.php';
session_regenerate_id();
session_destroy();
unset($_SESSION['users']);
header('Location: ../vue/Connexion.php');
?>