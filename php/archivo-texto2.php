<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Ejercicio 15 - Guardado</title>
</head>
<body>
<?php
  $ar = fopen("pedidos.txt", "a") or die("Problemas en la creación");

  fputs($ar, "Nombre: ");
  fputs($ar, $_REQUEST['nombre']);
  fputs($ar, "\n");

  fputs($ar, "Dirección: ");
  fputs($ar, $_REQUEST['direccion']);
  fputs($ar, "\n");

  if (isset($_REQUEST['jamonqueso'])) {
    fputs($ar, "Cantidad de Jamón y Queso: ");
    fputs($ar, $_REQUEST['cantjamonqueso']);
    fputs($ar, "\n");
  }

  if (isset($_REQUEST['napolitana'])) {
    fputs($ar, "Cantidad de Napolitana: ");
    fputs($ar, $_REQUEST['cantnapolitana']);
    fputs($ar, "\n");
  }

  if (isset($_REQUEST['muzzarella'])) {
    fputs($ar, "Cantidad de Muzzarella: ");
    fputs($ar, $_REQUEST['cantmuzzarella']);
    fputs($ar, "\n");
  }

  fputs($ar, "--------------------------------------------------------\n");
  fclose($ar);

  echo "<p>El pedido se cargó correctamente.</p>";
?>
  <p><a href="archivo-texto1.php">← Volver al formulario</a></p>
  <p><a href="../index.php">← Volver al menú</a></p>
</body>
</html>
