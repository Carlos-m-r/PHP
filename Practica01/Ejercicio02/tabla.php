<?php
    $input = readline("Introduzca un número: ");
    $a = $input;
    if($a < 0) {
        echo "El número es negativo";
    } elseif($a == 0) {
      echo "La tabla del 0 siempre es 0";
    } else {
        for ($i = 0; $i <= 10; $i++) {
            echo $i . " x " . $a . " = " . $i*$a ."\n";
        }
    }