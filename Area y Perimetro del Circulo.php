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
        }
        input[type="number"] {
            width: 100%;
            padding: 5px;
            margin: 5px 0 10px 0;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 8px;
            border: none;
            width: 100%;
            cursor: pointer;
        }
        .resultado {
            margin-top: 15px;
            padding: 10px;
            background-color: #e7f3fe;
            border: 1px solid #b6d4fe;
            width: 295px;
        }
    </style>
</head>
<body>

    <h2>Conversión de Pulgadas a Centímetros</h2>

    //Formulario
    <form method="post" action="">
        <label>Ingrese las pulgadas:</label>
        <input type="number" step="any" name="pulgadas" required min="0">
        <input type="submit" value="Calcular">
    </form>

    <?php
    // Procesamiento en PHP
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        // Constante del factor de conversión
        define("CM_POR_PULGADA", 2.54);

        // Obtener valor del formulario
        $pulgadas = $_POST['pulgadas'];

        // Cálculo
        $centimetros = $pulgadas * CM_POR_PULGADA;

        // Impresión con la clase CSS .resultado
        echo "<div class='resultado'>";
        echo "<strong>Resultado:</strong><br>";
        echo "$pulgadas pulgadas equivalen a " . round($centimetros, 2) . " cm";
        echo "</div>";
    }
    ?>

</body>
</html>
