<?php
    session_start();
    if(isset($_SESSION['name'])) {
        echo "<p>Bienvenido " . $_SESSION["name"]  . " tu sesión está activa</p>";
        echo "<button><a href='logout.php'>Cerrar Sesión</a></button>";
    }

