<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Trabajar con strings en PHP</title>
</head>
<body>
    <h1>Ejercicio de strings</h1>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $frase = htmlspecialchars($_POST['frase']); // evita inyección HTML
        $palabra = htmlspecialchars($_POST['palabra']); // palabra a buscar

        // 1️⃣ Cantidad de caracteres
        $longitud = strlen($frase);
        echo "<p>La frase tiene <strong>$longitud</strong> caracteres.</p>";

        // 2️⃣ Frase en mayúsculas y minúsculas
        echo "<p>Mayúsculas: <strong>" . strtoupper($frase) . "</strong></p>";
        echo "<p>Minúsculas: <strong>" . strtolower($frase) . "</strong></p>";

        // 3️⃣ Buscar palabra específica
        if (strpos($frase, $palabra) !== false) {
            echo "<p>La palabra '<strong>$palabra</strong>' <strong>sí</strong> se encuentra en la frase.</p>";
        } else {
            echo "<p>La palabra '<strong>$palabra</strong>' <strong>no</strong> se encuentra en la frase.</p>";
        }
    }
    ?>

    <!-- Formulario -->
    <form method="post" action="">
        <label for="frase">Ingresa una frase:</label><br>
        <input type="text" id="frase" name="frase" required size="50"><br><br>

        <label for="palabra">Palabra a buscar:</label><br>
        <input type="text" id="palabra" name="palabra" required><br><br>

        <input type="submit" value="Procesar">
    </form>
</body>
</html>
