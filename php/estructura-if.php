<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio - 7</title>
</head>
<body>
    <?php
    $num = rand(1,3);
    if ($num==1) {
        echo "El número es uno";
    } else {
        if ($num==2) {
            echo "El número es dos";
        } else {
          echo "El número es tres";  
        }
    }
    ?>

    <p><a href="../index.php">← Volver</a></p>

</body>
</html>