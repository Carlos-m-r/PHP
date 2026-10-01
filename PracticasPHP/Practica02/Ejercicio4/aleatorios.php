<?php

    //Creamos un array
    $randomArray = array();

    for ($i = 0; $i < 10; $i++) {
        //Generamos valor aleatorio entre 1 y 100;
        $randomValue = rand(1,100);
        //Pusheamos el valor aleatorio al array;
        array_push($randomArray, $randomValue);
    }

    //Imprimimos todos los numeros
echo "<p>Valores del array: ";
foreach ($randomArray as $value) {
    echo "$value ";
}
echo "</p>";

echo "<p>Valor máximo: " . max($randomArray) . "</p>";
echo "<p>Valor mínimo: " . min($randomArray) . "</p>";
echo "<p>Promedio: " . array_sum($randomArray)/count($randomArray) . "</p>";