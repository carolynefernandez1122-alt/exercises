<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario PHP</title>
</head>
<body>
    <h1>Formulario de contacto</h1>

    <?php
    // Verifica si se envió el formulario
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Recoge los valores del formulario
        $nombre = htmlspecialchars($_POST['nombre']); // Evita inyección de HTML
        $correo = htmlspecialchars($_POST['correo']);

        // Muestra el mensaje
        echo "<p>Hola, <strong>$nombre</strong>, tu correo es <strong>$correo</strong>.</p>";
    }
    ?>

    <!-- Formulario HTML -->
    <form method="post" action="">
        <label for="nombre">Nombre:</label><br>
        <input type="text" id="nombre" name="nombre" required><br><br>

        <label for="correo">Correo:</label><br>
        <input type="email" id="correo" name="correo" required><br><br>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>
