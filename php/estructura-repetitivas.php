<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio - 8</title>
</head>
<body>

  <?php
    echo "<h2>Tabla del 2 con for</h2>";
    for ($f = 2; $f <= 20; $f = $f + 2) {
      echo $f, " ";
    }

    echo "<h2>Tabla del 2 con while</h2>";
    $w = 2;
    while ($w <= 20) {
      echo $w, " ";
      $w = $w + 2;
    }

    echo "<h2>Tabla del 2 con do/while</h2>";
    $d = 2;
    do {
      echo $d, " ";
      $d = $d + 2;
    } while ($d <= 20);
  ?>

    <p><a href="../index.php">← Volver</a></p>

</body>
</html>
