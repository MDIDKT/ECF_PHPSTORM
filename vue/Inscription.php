<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inscription</title>
</head>
<body>
    <h1>inscription</h1>
    <form action="../controleur/validInscription.php" method="post">
        <label for="name">name</label>
        <input type="text" name="name" id="name" placeholder="name" required>
        <br>
        <label for="firstname">firstname</label>
        <input type="text" name="firstname" id="firstname" placeholder="firstname" required>
        <br>
        <label for="mail">mail</label>
        <input type="email" name="mail" id="mail" placeholder="mail" required>
        <br>
        <label for="password">password</label>
        <input type="password" name="password" id="password" placeholder="password" required>
        <br>
        <label for="password2">password2</label>
        <input type="password" name="password2" id="password2" placeholder="password2" required>
        <br><br>
        <input type="submit" value="OK" name="OK">
        <br><br>
        <a href="index.php">
        <input type="button" value="Accueil">
        </a>
    </form>
</body>
</html>