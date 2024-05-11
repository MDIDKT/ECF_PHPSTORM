<?php
    require_once '../controleur/validLogin.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
    <h1>login</h1>
        <form action="" method="post">
            <label for="mail">email</label>
            <input type="mail" name="mail" id="mail" placeholder="mail" required>
            <br>
            <label for="password">password</label>
            <input type="password" name="password" id="password" placeholder="password" required>
            <br>
            <input type="submit" value="login" name="OK">
            <a href="../vue/Inscription.php">
                <input type="button" value="Inscription">
            </a>
        </form>

</body>
</html>