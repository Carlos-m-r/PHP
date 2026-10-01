<?php
    $array = array();
    $array = ["user1" => "04/01/1991", "user2" => "04/01/1992", "user3" => "04/01/1993"];

    $dateFormat = "d/m/Y";
    $dateNow = date($dateFormat);

    foreach ($array as $key => $value) {
        $birthday = date_create($value);

        $daysToBirthday = date_diff($birthday, date($dateFormat))->days;

        echo $daysToBirthday -> format($dateFormat);

        echo "<p> $key días para cumpleaños: " . "" . "</p>";
    }