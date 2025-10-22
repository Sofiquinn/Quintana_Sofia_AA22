<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Ejercicio 16 - Ver pedidos</title>
</head>
<body>
  <h1>Ejercicio 16</h1>
<?php
  $ar = fopen("pedidos.txt", "r") or die("No se pudo abrir el archivo");
  while (!feof($ar)) {
    $linea = fgets($ar);
    $lineaConBr = nl2br($linea);
    echo $lineaConBr;
  }
  fclose($ar);
?>
  <p><a href="../index.php">← Volver al menú</a></p>
</body>
</html>
