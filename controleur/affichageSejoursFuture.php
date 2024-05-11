<?php
    foreach ($future as $dataFuture) {
        echo '<tr>';
        echo '<td>'.$dataFuture['date_of_entry'].'</td>';
        echo '<td>'.$dataFuture['release_date'].'</td>';
        echo '<td>'.$dataFuture['reason'].'</td>';
        echo '<td>'.$dataFuture['id_doctor'].'</td>';
        echo '<td>'.$dataFuture['id_speciality'].'</td>';
        echo '</tr>';
    }