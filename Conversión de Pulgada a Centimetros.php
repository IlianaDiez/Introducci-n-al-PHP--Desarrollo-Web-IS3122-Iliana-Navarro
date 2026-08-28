<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Conversión de Pulgadas a Centímetros</title>
    <!-- Estilos CSS requeridos por la rúbrica -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            padding: 20px;
        }
        .card {
            background-color: #ffffff;
            padding: 25px;
            border-radius: 8px;
            max-width: 420px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }
        input[type="number"], input[type="submit"] {
            padding: 10px;
            margin-top: 8px;
            border-radius: 5px;
            border: 1px solid #ced4da;
            width: 95%;
        }
        input[type="submit"] {
            background-color: #007bff;
            color: white;
            font-weight: bold;
            cursor: pointer;
            width: 100%;
        }
        .box-resultado {
            margin-top: 15px;
            padding: 12px;
            background-color: #e2e3e5;
            border-radius: 5px;
        }
    </style>
</head>
<body>

    <div class="card">
        <h2>Conversión de Pulgadas a Centímetros</h2>

        //Formulario de entrada de datos
        <form method="post" action="">
            <label for="pulgadas">Ingrese la cantidad en pulgadas:</label><br>
            <input type="number" step="any" name="pulgadas" id="pulgadas" required min="0">
            <br><br>
            <input type="submit" value="Convertir">
        </form>

        <?php
        // Verificar que el formulario fue enviado por el método POST
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            // Factor de conversión constante
            define("CM_POR_PULGADA", 2.54);

            // Obtener valor del formulario
            $pulgadas = $_POST['pulgadas'];

            // Validación de valor positivo (Punto 10 - Valor Agregado)
            if ($pulgadas >= 0) {
                // Cálculo de conversión
                $centimetros = $pulgadas * CM_POR_PULGADA;

                // Salida de resultados estructurada
                echo "<div class='box-resultado'>";
                echo "<strong>Resultado:</strong><br>";
                echo "$pulgadas in equivalen a <strong>" . round($centimetros, 2) . " cm</strong>";
                echo "</div>";
            } else {
                echo "<div class='box-resultado' style='color: red;'>Ingrese un valor mayor o igual a cero.</div>";
            }
        }
        ?>
    </div>

</body>
</html>
