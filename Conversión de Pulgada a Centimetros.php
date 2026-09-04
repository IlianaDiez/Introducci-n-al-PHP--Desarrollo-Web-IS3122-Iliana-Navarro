<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Conversión de Pulgadas a Centímetros</title>

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
        /* Estilo para mostrar errores de validación */
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

    <h2>Conversión de Pulgadas a Centímetros</h2>

    <!-- Formulario -->
    <form method="post" action="">
        <label for="pulgadas">Ingrese las pulgadas:</label>
        <input type="number" step="any" id="pulgadas" name="pulgadas" required min="0">
        <input type="submit" value="Calcular">
    </form>

    <?php
    // Procesamiento en PHP, solo si el formulario se envió por POST
    if ($_SERVER["REQUEST_METHOD"] === "POST") {

        // Constante del factor de conversión
        define("CM_POR_PULGADA", 2.54);

        // 1) Saneamiento: quitamos espacios en blanco sobrantes antes de validar
        $pulgadasInput = trim($_POST['pulgadas'] ?? '');

        // 2) Validación: comprobamos que realmente sea un número, en lugar de
        $pulgadas = filter_var($pulgadasInput, FILTER_VALIDATE_FLOAT);

        //Las pulgadas deben ser un número y no negativas
        if ($pulgadas === false || $pulgadas < 0) {
            
            // htmlspecialchars
            $valorMostrado = htmlspecialchars($pulgadasInput, ENT_QUOTES, 'UTF-8');
            echo "<div class='error'>";
            echo "El valor ingresado (\"$valorMostrado\") no es válido. ";
            echo "Debe ser un número mayor o igual a 0.";
            echo "</div>";
        } else {
            // Cálculo
            $centimetros = $pulgadas * CM_POR_PULGADA;

            // resultado
            echo "<div class='resultado'>";
            echo "<strong>Resultado:</strong><br>";
            echo htmlspecialchars($pulgadas) . " pulgadas equivalen a " . round($centimetros, 2) . " cm";
            echo "</div>";
        }
    }
    ?>

</body>
</html>
    }
    ?>
</body>
</html>
