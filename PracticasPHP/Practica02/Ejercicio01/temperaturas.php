<?php

$input = readline("Introduzca una temperatura en Celsius: ");

if (is_float($input)){
    //Fº
    echo "Valor en Fahrenheit " . ($input * 9/5) + 32 . "\n";
//Kº
    echo "Valor en Kelvin " . $input + 273.5;
} else {
    echo "el valor introducido no es numerico\n";
}

