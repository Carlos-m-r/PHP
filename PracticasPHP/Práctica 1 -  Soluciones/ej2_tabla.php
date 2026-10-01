<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Tabla de multiplicar</title>
</head>
<body>

<h1>Tabla de multiplicar</h1>

<form method="post">
    <label for="numero">Introduce un número:</label>
    <input type="number" name="numero" id="numero" required>
    <button type="submit">Mostrar tabla</button>
</form>

<?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $numero = (int)$_POST["numero"];
        if ($numero < 0) {
            echo "<p>Error: el número no puede ser negativo.</p>";
        } elseif ($numero === 0) {
            echo "<p>La tabla del 0 siempre es 0.</p>";
        } else {
            echo "<h2>Tabla de multiplicar del $numero</h2>";
            echo "<table>";
            echo "<tr><th>Operación</th><th>Resultado</th></tr>";

            for ($i = 1; $i <= 10; $i++) {
                $resultado = $numero * $i;
                echo "<tr><td>$numero × $i</td><td>$resultado</td></tr>";
            }
            echo "</table>";
        }
    }
?>

</body>
</html>
