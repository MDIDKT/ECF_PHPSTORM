<?php
foreach ($inProgresss as $dataInProgress) {
        echo '<tr>';
        echo '<td>'.$dataInProgress['date_of_entry'].'</td>';
        echo '<td>'.$dataInProgress['release_date'].'</td>';
        echo '<td>'.$dataInProgress['reason'].'</td>';
        echo '<td>'.$dataInProgress['id_doctor'].'</td>';
        echo '<td>'.$dataInProgress['id_speciality'].'</td>';
        echo '</tr>';
    }