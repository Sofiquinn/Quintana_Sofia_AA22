<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Ejercicio 15 - Pedidos</title>
</head>
<body>
  <h1>Ejercicio 15</h1>

  <form method="post" action="archivo-texto2.php">
    <p>Nombre: <input type="text" name="nombre" size="30"></p>
    <p>Dirección: <input type="text" name="direccion" size="40"></p>

    <p>
      Jamón y Queso:
      <input type="checkbox" name="jamonqueso">
      Cantidad: <input type="text" name="cantjamonqueso" size="3">
    </p>

    <p>
      Napolitana:
      <input type="checkbox" name="napolitana">
      Cantidad: <input type="text" name="cantnapolitana" size="3">
    </p>

    <p>
      Muzzarella:
      <input type="checkbox" name="muzzarella">
      Cantidad: <input type="text" name="cantmuzzarella" size="3">
    </p>

    <p><input type="submit" value="Confirmar"></p>
  </form>

  <p><a href="../index.php">← Volver al menú</a></p>
</body>
</html>
