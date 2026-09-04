<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Imprimir Cadenas en PHP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            padding: 20px;
        }
        .contenedor {
            background-color: white;
            padding: 15px;
            border-radius: 5px;
            width: 320px;
            box-shadow: 0 1px 3px rgba(0,0,0,0.15);
        }
        h1 {
            font-size: 22px;
        }
        .resultado {
            margin-top: 10px;
            padding: 8px;
            background-color: #e7f3fe;
            border: 1px solid #b6d4fe;
            border-radius: 5px;
        }
        .resultado strong {
            display: inline-block;
            width: 170px;
        }
    </style>
</head>
<body>
    <h1>Ejemplo simple</h1>
    <p>Primer ejemplo de código PHP embebido dentro de código HTML.</p>

    <div class="contenedor">
        <?php
        // Cadena original
        $cadena = "  hola Mundo desde PHP  ";

        // trim() elimina los espacios en blanco al inicio y al final
        $sinEspacios = trim($cadena);

        // ucfirst() convierte el primer caracter a mayúscula
        $primeraMayuscula = ucfirst($sinEspacios);

        // strtoupper() convierte toda la cadena a mayúsculas
        $mayusculas = strtoupper($sinEspacios);

        // strtolower() convierte toda la cadena a minúsculas
        $minusculas = strtolower($sinEspacios);

        // strlen() cuenta la cantidad de caracteres de la cadena
        $longitud = strlen($sinEspacios);

        // htmlspecialchars() protege la salida por si la cadena
        // llegara a contener caracteres HTML especiales
        echo "<div class='resultado'>";
        echo "<strong>Original:</strong> \"" . htmlspecialchars($cadena) . "\"<br>";
        echo "<strong>Sin espacios (trim):</strong> \"" . htmlspecialchars($sinEspacios) . "\"<br>";
        echo "<strong>Primera en mayúscula:</strong> " . htmlspecialchars($primeraMayuscula) . "<br>";
        echo "<strong>Todo en mayúsculas:</strong> " . htmlspecialchars($mayusculas) . "<br>";
        echo "<strong>Todo en minúsculas:</strong> " . htmlspecialchars($minusculas) . "<br>";
        echo "<strong>Longitud (strlen):</strong> " . $longitud . " caracteres<br>";
        echo "<strong>Saludo final:</strong> Hola Mundo";
        echo "</div>";
        ?>
    </div>
</body>
</html>
