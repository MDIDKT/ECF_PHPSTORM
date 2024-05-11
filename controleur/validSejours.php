<?php
require_once('../modele/INSERTsejours.php');

    if ($req) {
        header('Location: ../vue/validationSejours.php');
    } else {
        echo 'erreur';
    }
