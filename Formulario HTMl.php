<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario de entrada del dato</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            padding: 20px;
        }

        form {
            background-color: white;
            padding: 15px;
            border-radius: 5px;
            width: 300px;
            box-shadow: 0 1px 3px rgba(0,0,0,0.15);
        }

        label {
            font-weight: bold;
            display: block;
            margin-top: 10px;
        }

        input[type="text"] {
            width: 100%;
            padding: 5px;
            margin: 5px 0 10px 0;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 8px;
            border: none;
            width: 100%;
            cursor: pointer;
            border-radius: 3px;
            margin-top: 5px;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        .resultado {
            margin-top: 15px;
            padding: 10px;
            background-color: #e7f3fe;
            border: 1px solid #b6d4fe;
            width: 295px;
            border-radius: 5px;
        }

        .error {
            margin-top: 15px;
            padding: 10px;
            background-color: #fdecea;
            border: 1px solid #f5c2c0;
            width: 295px;
            border-radius: 5px;
            color: #a94442;
        }

        .error ul {
            margin: 5px 0 0 20px;
            padding: 0;
        }
    </style>
</head>

<body>

    <h2>Formulario de entrada del dato</h2>

    <form method="post" action="">

        <label for="nombre">Ingrese su nombre:</label>
        <input type="text" name="nombre" id="nombre">

        <label for="edad">Ingrese su edad:</label>
        <input type="text" name="edad" id="edad">

        <input type="submit" value="Confirmar">

    </form>

    <?php

    if ($_SERVER["REQUEST_METHOD"] === "POST") {

        // Guardamos aquí los mensajes de error
        $errores = [];

        // 1) Saneamiento del nombre: quitamos espacios sobrantes
        $nombre = trim($_POST['nombre'] ?? '');

        // 2) Validación del nombre: comprobamos que no esté vacío
        if (empty($nombre) || !is_string($nombre)) {

            $errores[] = "El nombre no puede estar vacío.";

        }

        // 2.1) Validación adicional: comprobamos que solo tenga letras y espacios
        elseif (!preg_match("/^[\p{L}\s]+$/u", $nombre)) {

            $errores[] = "El nombre solo debe contener letras (sin números ni símbolos).";

        }

        // 2.2) LO QUE AGREGAMOS:
        // Convierte la primera letra de cada palabra del nombre en mayúscula.
        // Por ejemplo: "juan perez" se convierte en "Juan Perez".
        // mb_convert_case permite trabajar correctamente con letras que tienen tilde.
        else {

            $nombre = mb_convert_case($nombre, MB_CASE_TITLE, "UTF-8");

        }

        // 3) Saneamiento de la edad: quitamos espacios sobrantes
        $edadInput = trim($_POST['edad'] ?? '');

        // 4) Validación de la edad: debe ser un número entero válido
        $edad = filter_var($edadInput, FILTER_VALIDATE_INT);

        if ($edad === false || $edad < 0 || $edad > 120) {

            $errores[] = "La edad debe ser un número entero válido (0 a 120).";

        }

        // 5) Si hay errores, los mostramos
        if (!empty($errores)) {

            echo "<div class='error'>";

            echo "<strong>Se encontraron los siguientes errores:</strong>";

            echo "<ul>";

            foreach ($errores as $error) {

                echo "<li>" . htmlspecialchars($error) . "</li>";

            }

            echo "</ul>";

            echo "</div>";

        } else {

            // Si no hay errores, mostramos el resultado
            echo "<div class='resultado'>";

            echo "El nombre ingresado es: " . htmlspecialchars($nombre) . "<br>";

            echo "La edad ingresada es: " . htmlspecialchars($edad);

            echo "</div>";

        }
    }

    ?>

</body>
</html>
