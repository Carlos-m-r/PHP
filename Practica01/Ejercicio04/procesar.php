<?php
    $name = $_POST["name"];
    $email = $_POST["email"];
    $age = $_POST["age"];
    //$resultField = $_POST["resultField"];
    $resultText = "";

    $emptyName = is_empty($name);
    $validEmail = filter_var($email, FILTER_VALIDATE_EMAIL);
    $underEighteen = $age < 18;

    if($emptyName|| !$validEmail || $underEighteen){
            if ($emptyName) {
                $resultText = $resultText . "No hay nombre\n";
            } elseif (!$validEmail) {
                $resultText = $resultText . "Correo electronico inválido\n";
            } elseif ($underEighteen) {
                $resultText = $resultText . "Edad es menor a 18\n";
            }
        } else {
        $resultText = "Bienvenido!";
    }
   // echo `<p>${resultText}</p>`; ¿?¿?

