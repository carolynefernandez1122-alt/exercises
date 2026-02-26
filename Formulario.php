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
     // Recoge los datos y evita inyección HTML
        $nombre = htmlspecialchars($_POST['nombre']);
        $correo = htmlspecialchars($_POST['correo']);

        // Validar el correo
        if (filter_var($correo, FILTER_VALIDATE_EMAIL)) {
            echo "<p>Hola, <strong>$nombre</strong>, tu correo es <strong>$correo</strong>.</p>";
        } else {
            echo "<p style='color:red;'>El correo <strong>$correo</strong> no es válido. Por favor, ingresa un correo correcto.</p>";
        }
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
