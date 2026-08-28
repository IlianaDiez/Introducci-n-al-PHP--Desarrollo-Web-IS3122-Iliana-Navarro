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

    <h2>Área y perímetro de un círculo</h2>

    <!-- Formulario para ingresar el radio -->
    <form method="post" action="">
        <label>Ingrese el radio del círculo:</label>
        <input type="number" step="any" name="radio" required min="0.01">
        <input type="submit" value="Calcular">
    </form>

    <?php
    // Se ejecuta solo al enviar el formulario por POST
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        // Definimos PI como constante
        define("PI", 3.14159265359);

        // Obtenemos el radio del formulario
        $radio = $_POST['radio'];

        // Fórmulas de área y perímetro
        $area = PI * ($radio ** 2);
        $perimetro = 2 * PI * $radio;

        // Impresión con la clase CSS .resultado
        echo "<div class='resultado'>";
        echo "<strong>Resultados para un radio de $radio:</strong><br>";
        echo "Área = " . round($area, 2) . "<br>";
        echo "Perímetro = " . round($perimetro, 2);
        echo "</div>";
    }
    ?>

</body>
</html>
