<?php

try{
    $bdd = new PDO('mysql:host=localhost;dbname=toto;charset=utf8', 'root', 'root');
}
catch(Exception $e){
    die('Erreur : '.$e->getMessage());
}
$past = $bdd->query('SELECT date_of_entry FROM sejours  WHERE release_date < CURDATE()');
$inProgresss = $bdd->query('SELECT date_of_entry FROM sejours Where release_date = CURDATE()');
$future = $bdd->query('SELECT date_of_entry FROM sejours WHERE release_date > CURDATE()');

