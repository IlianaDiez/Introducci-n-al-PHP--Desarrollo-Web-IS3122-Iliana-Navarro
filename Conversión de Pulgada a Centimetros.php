<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>El área y perímetro de un círculo</title>
    
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            padding: 20px;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            max-width: 400px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        input[type="number"], input[type="submit"] {
            padding: 8px;
            margin-top: 5px;
            border-radius: 4px;
            border: 1px solid #ccc;
        }
        input[type="submit"] {
            background-color: #28a745;
            color: white;
            cursor: pointer;
        }
        .resultado {
            margin-top: 15px;
            padding: 10px;
            background-color: #e9ecef;
            border-radius: 4px;
        }
    </style>
</head>
<body>

    <div class="container">
        <h2>Área y perímetro de un círculo</h2>

      // Formulario Radio
        <form method="post" action="">
            <label for="radio">Ingrese el radio del círculo:</label><br>
            <input type="number" step="any" name="radio" id="radio" required min="0.01">
            <br><br>
            <input type="submit" value="Calcular">
        </form>

        <?php
        // Se ejecuta solo cuando el usuario envía el formulario
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            // Definimos PI como una constante
            define("PI", 3.14159265359);

            // Leemos el radio ingresado por el usuario
            $radio = $_POST['radio'];

            // Validar que el radio sea positivo (Valor agregado / Validación adicional)
            if ($radio > 0) {
                // Fórmulas
                $area = PI * ($radio ** 2);
                $perimetro = 2 * PI * $radio;

                // Mostrar los resultados en pantalla con formato CSS
                echo "<div class='resultado'>";
                echo "<strong>Resultados para un radio de $radio:</strong><br>";
                echo "Área = " . round($area, 2) . "<br>";
                echo "Perímetro = " . round($perimetro, 2) . "<br>";
                echo "</div>";
            } else {
                echo "<div class='resultado' style='color: red;'>Por favor, ingrese un radio mayor a 0.</div>";
            }
        }
        ?>
    </div>

</body>
</html>
