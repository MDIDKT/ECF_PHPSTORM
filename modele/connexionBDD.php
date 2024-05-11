<?php
try{
    $bdd = new PDO('mysql:host=localhost;dbname=toto;charset=utf8', 'root', 'root');
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}

catch(Exception $e){
    die('Erreur : '.$e->getMessage());
}

try
{
    $pdo = new PDO("mysql:dbname=toto;host=localhost;charset=utf8mb4", "root", "root");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}