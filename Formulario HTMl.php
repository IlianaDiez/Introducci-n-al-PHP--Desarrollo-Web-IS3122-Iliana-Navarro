<html>
<head>
  <title>Formulario de entrada del dato</title>
</head>
<body>
  <form method="post" action="">
    Ingrese su nombre:
    <input type="text" name="nombre" id="nombre">
    <br><br>
    Ingrese su Edad:
    <input type="text" name="edad" id="edad">
    <br><br>
    <input type="submit" value="confirmar">
  </form>

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $nombre = $_POST['nombre'];
      $edad = $_POST['edad'];

      echo "El nombre ingresado es: " . $nombre . "<br>";
      echo "La edad ingresada es: " . $edad;
  }
  ?>
</body>
</html>