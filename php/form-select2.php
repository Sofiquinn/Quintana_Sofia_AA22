<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Ejercicio 12 - Resultado</title>
</head>
<body>
<?php
  $nombre = isset($_POST['nombre']) ? trim($_POST['nombre']) : '';
  $ingresos = isset($_POST['ingresos']) ? (int)$_POST['ingresos'] : 0;

  echo htmlspecialchars($nombre, ENT_QUOTES, 'UTF-8');
  if ($ingresos === 3) {
    echo " debe pagar impuestos.";
  } else {
    echo " no debe pagar impuestos a las ganancias.";
  }
?>
  <p><a href="form-select1.php">← Volver al formulario</a></p>
  <p><a href="../index.php">← Volver al menú</a></p>
</body>
</html>
