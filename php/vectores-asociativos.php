<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Ejercicio 17 - Vectores asociativos</title>
</head>
<body>
  <h1>Ejercicio 17</h1>
<?php
  $persona = [];
  $persona['nombre'] = 'Ana';
  $persona['edad']   = 28;
  $persona['pais']   = 'Argentina';

  echo "Nombre: " . $persona['nombre'] . "<br>";
  echo "Edad: "   . $persona['edad']   . "<br>";
  echo "País: "   . $persona['pais']   . "<br><br>";

  echo "<strong>Recorrido completo:</strong><br>";
  foreach ($persona as $clave => $valor) {
    echo $clave . ": " . $valor . "<br>";
  }
?>
  <p><a href="../index.php">← Volver al menú</a></p>
</body>
</html>
