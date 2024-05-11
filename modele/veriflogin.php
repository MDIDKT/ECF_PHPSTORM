<?php
    function veriflogin(PDO $bdd, string $mail, string $password)
    {

            $pdostat = $bdd->prepare('SELECT * FROM users WHERE mail = :mail AND password = :password');
            $pdostat->bindValue(':mail', $mail, PDO::PARAM_STR);
            $pdostat->bindValue(':password', $password, PDO::PARAM_STR);
            $pdostat->execute();
            $user = $pdostat->fetch(PDO::FETCH_ASSOC);
            
            if ($user !== false){
                return $user;
            } else {
                return false;
            }

    }