<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Ejercicio 13 - Resultado</title>
</head>
<body>
<?php
  $contrato = isset($_POST['contrato']) ? $_POST['contrato'] : '';
  echo nl2br(htmlspecialchars($contrato, ENT_QUOTES, 'UTF-8'));
?>
  <p><a href="textarea1.php">← Volver al formulario</a></p>
  <p><a href="../index.php">← Volver al menú</a></p>
</body>
</html>
