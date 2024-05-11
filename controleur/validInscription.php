<?php
require_once '../modele/INSERTutilisateurs.php';

if ($req) {
    header('Location: ../vue/reponseInscription.php');
}
else {
    echo 'Inscription échouée';
}