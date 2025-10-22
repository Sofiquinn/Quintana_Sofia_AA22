<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Ejercicio 12 - Select</title>
</head>
<body>
  <h1>Ejercicio 12</h1>

  <form method="post" action="form-select2.php">
    <p>Ingrese el nombre: <input type="text" name="nombre"></p>

    <p>Seleccione el rango de ingresos mensuales:</p>
    <p>
      <select name="ingresos">
        <option value="1">1-1000</option>
        <option value="2">1001-3000</option>
        <option value="3">&gt;3000</option>
      </select>
    </p>

    <p><input type="submit" value="Confirmar"></p>
  </form>

  <p><a href="../index.php">← Volver al menú</a></p>
</body>
</html>
