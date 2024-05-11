<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sejours</title>
</head>
<body>
    <H1>Sejours</H1>
    <br><br>
    <table>
        <h2>In progress</h2>
        <tr>
            <th>date_of_entry</th>
            <th>release_date</th>
            <th>reason</th>
            <th>id_doctor</th>
            <th>id_speciality</th>
        </tr>
        <?php
        
        require_once('../modele/SELECThisto.php');
        require_once('../controleur/affichageSejoursEnCours.php');

        ?>
    </table>
<br>
    <table>
        <h2>Future</h2>
        <tr>
            <th>date_of_entry</th>
            <th>release_date</th>
            <th>reason</th>
            <th>id_doctor</th>
            <th>id_speciality</th>
        </tr>
        <?php
        
        require_once('../modele/SELECThisto.php');
        require_once('../controleur/affichageSejoursFuture.php');

        ?>
    </table>
<br>
    <table>
        <h2>Past</h2>
        <tr>
            <th>date_of_entry</th>
            <th>release_date</th>
            <th>reason</th>
            <th>id_doctor</th>
            <th>id_speciality</th>
        </tr>
        <?php
        
        require_once('../modele/SELECThisto.php');
        require_once('../controleur/affichageSejoursPasse.php');

        ?>
    </table>
    <br>
    <a href="index.php">
        <input type="button" value="Retour à l'accueil">
    </a>
    <br>
    <a href="CreationSejours.php">
        <input type="button" value="Créer un séjour">
    </a>

</body>
</html>