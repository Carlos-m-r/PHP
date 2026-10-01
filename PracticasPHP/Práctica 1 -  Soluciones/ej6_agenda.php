<?php

    session_start();

    if (!isset($_SESSION['agenda'])) {
        $_SESSION['agenda'] = [
            ['nombre' => 'María López',  'telefono' => '600123123', 'correo' => 'maria@example.com'],
            ['nombre' => 'Carlos Ruiz',  'telefono' => '611222333', 'correo' => 'carlos@example.com'],
            ['nombre' => 'Elena Martín', 'telefono' => '699888777', 'correo' => 'elena@example.com'],
        ];
    }

    $errores = [];
    $nombre = $telefono = $correo = '';

    // Si llega el formulario por POST, validar y añadir
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nombre   = $_POST['nombre'];
        $telefono = $_POST['telefono'];
        $correo   = $_POST['correo'];

        if ($nombre === '') {
            $errores[] = 'El nombre no puede estar vacío.';
        }
        if ($telefono === '') {
            $errores[] = 'El teléfono no puede estar vacío.';
        } elseif (!preg_match('/^\+?\d{7,15}$/', $telefono)) {
            $errores[] = 'El teléfono debe contener solo dígitos (7-15) y opcionalmente un + inicial.';
        }
        if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
            $errores[] = 'El correo no tiene un formato válido.';
        }

        
        if (empty($errores)) {
            $_SESSION['agenda'][] = [
                'nombre'   => $nombre,
                'telefono' => $telefono,
                'correo'   => $correo,
            ];
        }
    }
?>

<!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Agenda (Ejercicio 6)</title>
    </head>
    <body>

    <h1>Agenda de contactos</h1>

    <div class="wrap">
        <div class="card">
            <h2>Añadir contacto</h2>

            <form method="post" action="">
                <label for="nombre">Nombre</label>
                <input type="text" id="nombre" name="nombre" required>

                <label for="telefono">Teléfono</label>
                <input type="tel" id="telefono" name="telefono" required>

                <label for="correo">Correo</label>
                <input type="email" id="correo" name="correo" required>

                <button type="submit">Guardar contacto</button>
            </form>
        </div>

        <div>
            <h2>Contactos guardados (<?= count($_SESSION['agenda']) ?>)</h2>
            <?php if (empty($_SESSION['agenda'])): ?>
                <p>No hay contactos todavía.</p>
            <?php else: ?>
                <table>
                    <tr>
                        <th>Nombre</th>
                        <th>Teléfono</th>
                        <th>Correo</th>
                    </tr>
                    <?php foreach ($_SESSION['agenda'] as $c): ?>
                        <tr>
                            <td><?=
                                htmlspecialchars($c['nombre'], ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8')
                            ?></td>
                            <td><?=
                                htmlspecialchars($c['telefono'], ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8')
                            ?></td>
                            <td><?=
                                htmlspecialchars($c['correo'], ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8')
                            ?></td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            <?php endif; ?>
        </div>
    </div>

    </body>
</html>
