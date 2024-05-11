<?php

    foreach ($past as $dataPast) {
        echo '<tr>';
        echo '<td>'.$dataPast['date_of_entry'].'</td>';
        echo '<td>'.$dataPast['release_date'].'</td>';
        echo '<td>'.$dataPast['reason'].'</td>';
        echo '<td>'.$dataPast['id_doctor'].'</td>';
        echo '<td>'.$dataPast['id_speciality'].'</td>';
        echo '</tr>';
    }


