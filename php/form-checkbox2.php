<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Ejercicio 11 - Resultado</title>
</head>
<body>
<?php
  $nombre = isset($_POST['nombre']) ? trim($_POST['nombre']) : '';
  $cant = 0;
  if (isset($_POST['check1'])) $cant++;
  if (isset($_POST['check2'])) $cant++;
  if (isset($_POST['check3'])) $cant++;
  if (isset($_POST['check4'])) $cant++;

  echo htmlspecialchars($nombre, ENT_QUOTES, 'UTF-8') . " practica $cant deporte(s).";
?>
  <p><a href="form-checkbox1.php">← Volver al formulario</a></p>
  <p><a href="../index.php">← Volver al menú</a></p>
</body>
</html>
