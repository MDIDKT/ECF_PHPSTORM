<?php

require_once 'connexionBDD.php';
if (isset($_POST['OK']) && !empty($_POST['name']) && !empty($_POST['firstname']) && !empty($_POST['mail']) && !empty($_POST['password']) && !empty($_POST['password2'])){
    $name = htmlspecialchars($_POST['name']);
    $firstname = htmlspecialchars($_POST['firstname']);
    $mail = htmlspecialchars($_POST['mail']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $password2 = password_hash($_POST['password2'], PASSWORD_DEFAULT);

    if ($_POST['password'] != $_POST['password2']){
        echo "Les mots de passe ne correspondent pas";
        $req = $pdo->prepare('INSERT INTO users (name, firstname, mail, password, password2) VALUES (:name, :firstname, :mail, :password, :password2)');
        $req->execute(array(
            'name' => $name,
            'firstname' => $firstname,
            'mail' => $mail,
            'password' => $password,
            'password2' => $password2
        ));
    }
    else{
        echo "Les mots de passe correspondent";
    }

    //$reponse = $req->fetchAll(PDO::FETCH_ASSOC);
  
}