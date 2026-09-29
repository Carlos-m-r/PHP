<?php
    $alumnos = [
        ["nombre"=> "Alumno 1", "nota"=>4],
        ["nombre"=> "Alumno 2", "nota"=>7],
        ["nombre"=> "Alumno 3", "nota"=>8],
        ["nombre"=> "Alumno 4", "nota"=>6],
        ["nombre"=> "Alumno 5", "nota"=>1]
    ];

    $totalNota=0;

        foreach ($alumnos as $alumno) {
            echo "nombre: " . $alumno["nombre"] . " nota: " . $alumno["nota"] . "\n";

            $totalNota += $alumno["nota"];

            evaluarNota($alumno["nota"]);
        }

        echo "promedio = " . $totalNota/count($alumnos);//longitud
    function evaluarNota($nota) {
        if($nota < 5) {
            echo "Suspenso \n";
        } elseif ($nota < 7) {
            echo "Aprobado \n";
        } elseif ($nota < 9) {
            echo "Notable \n";
        } else {
            echo "Sobresaliente \n";
        }

    }