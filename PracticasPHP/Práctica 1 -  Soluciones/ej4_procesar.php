<?php

    // Obtener los valores enviados por POST
    $nombre = trim($_POST["nombre"] ?? "");
    $correo = trim($_POST["correo"] ?? "");
    $edad = $_POST["edad"] ?? "";

    // Array para guardar posibles errores
    $errores = [];

    // Validar nombre
    if (empty($nombre)) {
        $errores[] = "El nombre no puede estar vacío.";
    }

    // Validar correo electrónico
    if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
        $errores[] = "El correo electrónico no tiene un formato válido.";
    }

    // Validar edad
    if (!is_numeric($edad) || $edad < 18) {
        $errores[] = "Debes ser mayor o igual a 18 años.";
    }

    // Mostrar resultados
    echo "<!DOCTYPE html><html lang='es'><head><meta charset='UTF-8'><title>Resultado</title></head><body>";

    if (!empty($errores)) {
        echo "<h2>Errores en el formulario:</h2><ul>";
        foreach ($errores as $error) {
            echo "<li style='color:red;'>$error</li>";
        }
        echo "</ul><p><a href='registro.html'>Volver al formulario</a></p>";
    } else {
        echo "<h2>Registro completado con éxito</h2>";
        echo "<p><strong>Nombre:</strong> $nombre</p>";
        echo "<p><strong>Correo:</strong> $correo</p>";
        echo "<p><strong>Edad:</strong> $edad</p>";
        echo "<p><a href='ej4_registro.html'>Registrar otro usuario</a></p>";
    }

    echo "</body></html>";
?>
