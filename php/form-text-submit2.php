<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Ejercicio 9 - Resultado</title>
</head>
<body>
<?php
  $nombre = isset($_POST['nombre']) ? trim($_POST['nombre']) : '';
  $edad   = isset($_POST['edad'])   ? trim($_POST['edad'])   : '';

  if ($nombre === '' || $edad === '') {
    echo "<p>Faltan datos. Volvé y completá el formulario.</p>";
    echo '<p><a href="ej09_form.php">← Volver al formulario</a></p>';
    exit;
  }

  echo "<h1>Resultado</h1>";
  echo "<p>Nombre: <strong>" . htmlspecialchars($nombre, ENT_QUOTES, 'UTF-8') . "</strong></p>";
  echo "<p>Edad: <strong>" . (int)$edad . "</strong></p>";

  if ((int)$edad >= 18) {
    echo "<p>Es mayor de edad.</p>";
  } else {
    echo "<p>No es mayor de edad.</p>";
  }
?>
  <p><a href="form-text-submit1.php">← Volver al formulario</a></p>
  <p><a href="../index.php">← Volver al menú</a></p>
</body>
</html>
