<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="../controleur/validSejours.php" method="post">
   <label for="date_of_entry"> date_of_entry</label>
    <input type="date" name="date_of_entry" id="date_of_entry" placeholder="date_of_entry" required>
    <br>
    <label for="release_date"> release_date</label>
    <input type="date" name="release_date" id="release_date" placeholder="release_date" required>
    <br>
    <label for="reason"> reason</label>
    <input type="text" name="reason" id="reason" placeholder="reason">
    <label for="id_doctor">id_doctor</label>
    <input type="text" name="id_doctor" id="id_doctor" placeholder="id_doctor" required>
    <br>
    <label for="id_speciality">id_speciality</label>
    <input type="text" name="id_speciality" id="id_speciality" placeholder="id_speciality">
    <br>
    <br>
    <input type="submit" name="OK" value="OK">

    </form>

    <a href="../vue/sejours.php">
        <input type="button" value="afficher les sejour">
    </a>
</body>
</html>