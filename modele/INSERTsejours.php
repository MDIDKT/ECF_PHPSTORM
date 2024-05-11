<?php
require_once('../modele/connexionBDD.php');

    if (isset($_POST['OK'])) {
        $date_of_entry = $_POST['date_of_entry'];
        $release_date = $_POST['release_date'];
        $reason = $_POST['reason'];
        $id_doctor = $_POST['id_doctor'];
        $id_speciality = $_POST['id_speciality'];
        $req = $bdd->prepare('INSERT INTO sejours(date_of_entry, release_date, reason, id_doctor, id_speciality) VALUES(:date_of_entry, :release_date, :reason, :id_doctor, :id_speciality)');
        $req->execute(array(
            'date_of_entry' => $date_of_entry,
            'release_date' => $release_date,
            'reason' => $reason,
            'id_doctor' => $id_doctor,
            'id_speciality' => $id_speciality
        ));
    }