<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>El área y perímetro de un círculo</title>
</head>
<body>

    <h2>Área y perímetro de un círculo</h2>

    <!-- Formulario para ingresar el radio -->
    <form method="post" action="">
        Ingrese el radio del círculo:
        <input type="number" step="any" name="radio" id="radio" required>
        <br><br>
        <input type="submit" value="Calcular">
    </form>

    <br>

    <?php
    // Se ejecuta solo cuando el usuario envía el formulario
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        // Definimos PI como una constante
        define("PI", 3.14159265359);

        // Leemos el radio ingresado por el usuario
        $radio = $_POST['radio'];

        // Fórmulas
        $area = PI * ($radio ** 2);
        $perimetro = 2 * PI * $radio;

        // Mostrar los resultados en pantalla
        echo "<strong>Resultados para un radio de $radio:</strong><br>";
        echo "Área = " . round($area, 2) . "<br>";
        echo "Perímetro = " . round($perimetro, 2) . "<br>";
    }
    ?>

</body>
</html>