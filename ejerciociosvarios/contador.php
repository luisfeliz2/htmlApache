<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    session_start();
    $_SESSION['contador']++;
    ?>
    <html>
    <a href="contador2.php">Página que muestra el
        contador</a>

    </html>
</body>

</html>