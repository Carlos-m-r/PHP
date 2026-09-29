<?php
    $input = readline("introduce un número y calcularemos el factorial(!n)\n");

    if($input < 0) {
        echo "el numero es negativo\n";
    } elseif ($input == 0) {
        echo "factorial de " . $input . " = " . 1;
    } else {
        $factorialResult = $input;
        for($i = $input -1; $i > 0; $i--){
            $factorialResult = $factorialResult * $i;
        }
        echo "factorial de " . $input . " = " . $factorialResult . "\n";
    }