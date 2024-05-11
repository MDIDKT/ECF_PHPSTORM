<?php
require_once '../modele/INSERTutilisateurs.php';

if ($req) {
    header('Location: ../vue/inscriptionUtilisateur.php');
}
else {
    echo 'Inscription échouée';
}