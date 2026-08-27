<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Problema #2 Laboratorio - Calculadora</title>
</head>
<body>

    <h2>Calculadora PHP</h2>

    <form method="post" action="">
        Ingrese el primer número:
        <input type="number" step="any" name="num1" required>
        <br><br>
        Ingrese el segundo número:
        <input type="number" step="any" name="num2" required>
        <br><br>
        <input type="submit" value="Calcular">
    </form>

    <br>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];

        // Operaciones
        $suma = $num1 + $num2;
        $resta = $num1 - $num2;
        $multiplicacion = $num1 * $num2;

        echo "<h3>Resultados:</h3>";
        
        // Suma
        echo "Suma: $suma <br>";
        echo "Suma redondeada: " . round($suma) . "<br><br>";

        // Resta
        echo "Resta: $resta <br>";
        echo "Resta redondeada: " . round($resta) . "<br><br>";

        // Multiplicación
        echo "Multiplicación: $multiplicacion <br>";
        echo "Multiplicación redondeada: " . round($multiplicacion) . "<br>";
    }
    ?>

</body>
</html>