<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Conversión de Pulgadas a Centímetros</title>
</head>
<body>

    <h2>Conversión de Pulgadas a Centímetros</h2>

    
    <form method="post" action="">
        Ingrese las pulgadas:
        <input type="number" step="any" name="pulgadas" required>
        <input type="submit" value="Calcular">
    </form>

    <br>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

      
        define("CM_POR_PULGADA", 2.54);

        $pulgadas = $_POST['pulgadas'];

        $centimetros = $pulgadas * CM_POR_PULGADA;

    
        echo "<strong>Resultado:</strong><br>";
        echo "$pulgadas pulgadas equivalen a " . round($centimetros, 2) . " cm<br>";
    }
    ?>

</body>
</html>
