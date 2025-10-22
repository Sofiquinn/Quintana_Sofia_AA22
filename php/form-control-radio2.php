<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Ejercicio 10 - Resultado</title>
</head>
<body>
<?php
  $estudios = isset($_POST['estudios']) ? $_POST['estudios'] : '';

  if ($estudios === '') {
    echo "<p>No seleccionó una opción. Vuelva al formulario y elija una.</p>";
    echo '<p><a href="ej10_form_radio.php">← Volver al formulario</a></p>';
    exit;
  }

  echo "<h1>Resultado</h1>";
  echo "<p>Nivel seleccionado: <strong>" . htmlspecialchars($estudios, ENT_QUOTES, 'UTF-8') . "</strong></p>";
?>
  <p><a href="form-control-radio1.php">← Volver al formulario</a></p>
  <p><a href="../index.php">← Volver al menú</a></p>
</body>
</html>
