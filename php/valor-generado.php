<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>
<body>
    <?php
    $num=rand(1,100);

    echo "número generado: ";
    echo $num;
    echo "<br>";
    if ($num <= 50) {
        echo "el número es menor o igual a 50";
    } else {
        echo "el número es mayor a 50";
    }
    ?>
    
    <p><a href="../index.php">← Volver</a></p>
</body>
</html>