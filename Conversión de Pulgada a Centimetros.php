<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Área y Perímetro de un Círculo</title>
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
        }
        input[type="number"] {
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
        /* Nuevo estilo para mostrar errores de validación */
        .error {
            margin-top: 15px;
            padding: 10px;
            background-color: #fdecea;
            border: 1px solid #f5c2c0;
            width: 295px;
            border-radius: 5px;
            color: #a94442;
        }
    </style>
</head>
<body>
    <h2>Área y perímetro de un círculo</h2>

    <!-- Formulario para ingresar el radio -->
    <form method="post" action="">
        <label for="radio">Ingrese el radio del círculo:</label>
        <input type="number" step="any" id="radio" name="radio" required min="0.01">
        <input type="submit" value="Calcular">
    </form>

    <?php
    // Se ejecuta solo cuando el formulario se envía por POST
    if ($_SERVER["REQUEST_METHOD"] === "POST") {

        // 1) Saneamiento: quitamos espacios en blanco sobrantes antes de validar
        $radioInput = trim($_POST['radio'] ?? '');

        // 2) Validación: comprobamos que realmente sea un número
        $radio = filter_var($radioInput, FILTER_VALIDATE_FLOAT);

        if ($radio === false || $radio <= 0) {
    
            $valorMostrado = htmlspecialchars($radioInput, ENT_QUOTES, 'UTF-8');
            echo "<div class='error'>";
            echo "El valor ingresado (\"$valorMostrado\") no es un radio válido. ";
            echo "Debe ser un número mayor que 0.";
            echo "</div>";
        } else {
            // Definimos PI como constante
            define("PI_VALOR", 3.14159265359);

            // Fórmulas de área y perímetro
            $area = PI_VALOR * ($radio ** 2);
            $perimetro = 2 * PI_VALOR * $radio;

            echo "<div class='resultado'>";
            echo "<strong>Resultados para un radio de " . htmlspecialchars($radio) . ":</strong><br>";
            echo "Área = " . round($area, 2) . "<br>";
            echo "Perímetro = " . round($perimetro, 2);
            echo "</div>";
        }
    }
    ?>
</body>
</html>
