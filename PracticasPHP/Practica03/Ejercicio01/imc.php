<?php

$height = $_POST["height"];
$weight = $_POST["weight"];
//Formula del IMC = peso / altura^2

$imc = number_format($weight / ($height*$height), 2);


switch ($imc) {
    case $imc < 18.5:
        echo "Bajo peso (" . $imc . ")";
        break;
    case $imc >= 18.5 && $imc < 25:
        echo "Peso Normal (" . $imc . ")" ;
        break;
    default:
        echo "Obesidad (" . $imc . ")";
        break;
}




