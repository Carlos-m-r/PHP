<?php
    $name = $_POST["name"];
    $email = $_POST["email"];
    $age = $_POST["age"];
    //$resultField = $_POST["resultField"];
    $resultText = "";

    $emptyName = empty($name);
    $validEmail = filter_var($email, FILTER_VALIDATE_EMAIL);
    $underEighteen = $age < 18;

    if($emptyName|| !$validEmail || $underEighteen){
            if ($emptyName) {
                $resultText = $resultText . "<p>No hay nombre </p>";
            }
            if (!$validEmail) {
                $resultText = $resultText . "<p>Correo electrónico inválido</p>";
            }
            if ($underEighteen) {
                $resultText = $resultText . "<p>Edad es menor a 18</p>";
            }
        } else {
        $resultText = "Bienvenido!";
    }

    echo $resultText;

