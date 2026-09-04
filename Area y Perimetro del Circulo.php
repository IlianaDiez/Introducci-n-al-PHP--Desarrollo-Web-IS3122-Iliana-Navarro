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

        .error {
            margin-top: 15px;
            padding: 10px;
            background-color: #fdecea;
            border: 1px solid #f5c2c0;
            width: 295px;
            border-radius: 5px;
            color: #a94442;
        }

        .diagrama {
            background-color: white;
            padding: 15px;
            border-radius: 5px;
            width: 300px;
            box-shadow: 0 1px 3px rgba(0,0,0,0.15);
            margin-bottom: 15px;
            text-align: center;
        }
    </style>
</head>

<body>

    <h2>Área y perímetro de un círculo</h2>

    <div class="diagrama">
        <svg viewBox="0 0 300 260" width="260" height="225"
             xmlns="http://www.w3.org/2000/svg">

            <circle cx="150" cy="120" r="95"
                    fill="#fde3c8"
                    stroke="#2ecc71"
                    stroke-width="4" />

            <line x1="58" y1="150" x2="242" y2="90"
                  stroke="#e74c3c"
                  stroke-width="3" />

            <line x1="150" y1="120" x2="205" y2="55"
                  stroke="#111111"
                  stroke-width="3" />

            <text x="105" y="105"
                  font-size="34"
                  fill="#e67e22"
                  font-family="Arial"
                  font-weight="bold">A</text>

            <text x="180" y="70"
                  font-size="20"
                  fill="#111111"
                  font-family="Arial"
                  font-style="italic">r</text>

            <text x="205" y="130"
                  font-size="26"
                  fill="#e74c3c"
                  font-family="Arial"
                  font-style="italic">d</text>

            <text x="60" y="235"
                  font-size="30"
                  fill="#2ecc71"
                  font-family="Arial"
                  font-style="italic">c</text>
        </svg>
    </div>

    <form method="post" action="">

        <label for="radio">
            Ingrese el radio del círculo:
        </label>

        <!-- Se recuerda el último radio introducido -->
        <input
            type="number"
            step="any"
            id="radio"
            name="radio"
            required
            min="0.01"
            value="<?php echo htmlspecialchars($_POST['radio'] ?? '', ENT_QUOTES, 'UTF-8'); ?>"
        >

        <input type="submit" value="Calcular">

    </form>

    <?php

    if ($_SERVER["REQUEST_METHOD"] === "POST") {

        // Obtener el radio introducido
        $radioInput = trim($_POST['radio'] ?? '');

        // Validar que sea un número
        $radio = filter_var($radioInput, FILTER_VALIDATE_FLOAT);

        if ($radio === false || $radio <= 0) {

            $valorMostrado = htmlspecialchars(
                $radioInput,
                ENT_QUOTES,
                'UTF-8'
            );

            echo "<div class='error'>";
            echo "El valor ingresado (\"$valorMostrado\") no es un radio válido.<br>";
            echo "Debe ser un número mayor que 0.";
            echo "</div>";

        } else {

            // Valor de PI
            $pi = 3.14159265359;

            // Cálculos
            $area = $pi * ($radio ** 2);
            $perimetro = 2 * $pi * $radio;

            echo "<div class='resultado'>";

            echo "<strong>Resultados para un radio de "
                . htmlspecialchars($radio, ENT_QUOTES, 'UTF-8')
                . ":</strong><br>";

            echo "Área = " . round($area, 2) . "<br>";

            echo "Perímetro = " . round($perimetro, 2);

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
