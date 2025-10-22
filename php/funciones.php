<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Ejercicio 18 - Funciones</title>
</head>
<body>
  <h1>Ejercicio 18</h1>
<?php
  // Función que suma dos valores
  function sumar($a, $b) {
    return $a + $b;
  }

  // Función que determina si un número es par
  function esPar($n) {
    return $n % 2 === 0;
  }

  // Función que devuelve el mayor de tres números
  function mayorDeTres($a, $b, $c) {
    $mayor = $a;
    if ($b > $mayor) $mayor = $b;
    if ($c > $mayor) $mayor = $c;
    return $mayor;
  }

  // Llamadas de ejemplo
  $x = 7; $y = 5; $z = 12;

  echo "Sumar ($x + $y): " . sumar($x, $y) . "<br>";
  echo "¿$z es par?: " . (esPar($z) ? "sí" : "no") . "<br>";
  echo "Mayor de ($x, $y, $z): " . mayorDeTres($x, $y, $z) . "<br>";
?>
  <p><a href="../index.php">← Volver al menú</a></p>
</body>
</html>
