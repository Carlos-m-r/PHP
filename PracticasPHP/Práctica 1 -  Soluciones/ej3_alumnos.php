<?php

    $alumnos = [
        "María" => 9.2,
        "Antonio" => 6.5,
        "Lucía" => 4.3,
        "Carlos" => 7.8,
        "Elena" => 10.0
    ];

    function evaluarNota(float $nota): string {
        if ($nota < 5) {
            return "Suspenso";
        } elseif ($nota < 7) {
            return "Aprobado";
        } elseif ($nota < 9) {
            return "Notable";
        } else {
            return "Sobresaliente";
        }
    }

    echo "<h1>Listado de alumnos y calificaciones</h1>";
    echo "<table border='1' cellpadding='8' cellspacing='0'>";
    echo "<tr><th>Alumno</th><th>Nota</th><th>Evaluación</th></tr>";

    $suma = 0;
    foreach ($alumnos as $nombre => $nota) {
        $evaluacion = evaluarNota($nota);
        echo "<tr>
                <td>$nombre</td>
                <td>$nota</td>
                <td>$evaluacion</td>
            </tr>";
        $suma += $nota;
    }
    echo "</table>";

    // Calcular y mostrar promedio
    $promedio = $suma / count($alumnos);
    echo "<p><strong>Promedio del grupo:</strong> " . number_format($promedio, 2) . "</p>";

    // Evaluación general del grupo
    echo "<p><em>Evaluación media del grupo:</em> " . evaluarNota($promedio) . "</p>";
?>
