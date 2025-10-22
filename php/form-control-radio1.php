<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Ejercicio 10 - Radio</title>
</head>
<body>
  <h1>Ejercicio 10</h1>

  <form action="form-control-radio2.php" method="post">
    <p>Seleccione su nivel de estudios:</p>

    <p>
      <label>
        <input type="radio" name="estudios" value="Primario">
        Primario
      </label>
    </p>
    <p>
      <label>
        <input type="radio" name="estudios" value="Secundario">
        Secundario
      </label>
    </p>
    <p>
      <label>
        <input type="radio" name="estudios" value="Terciario">
        Terciario
      </label>
    </p>

    <p>
      <input type="submit" value="Enviar">
    </p>
  </form>

  <p><a href="../index.php">← Volver al menú</a></p>
</body>
</html>
