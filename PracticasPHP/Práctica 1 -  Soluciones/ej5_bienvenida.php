<?php
    session_start();

    if (!isset($_SESSION["usuario"])) {
        header("Location: ej5_registro.html");
        exit;
    }

    $nombre = htmlspecialchars($_SESSION["usuario"]);
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Bienvenida</title>
    </head>
    <body>

    <div>
        <h2>Bienvenido, <?= $nombre ?></h2>
        <p>Tu sesión está activa.</p>
        <a href="ej5_logout.php">Cerrar sesión</a>
    </div>

    </body>
</html>
