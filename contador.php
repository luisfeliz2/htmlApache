<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

if (isset($_GET["cuenta"])){
    $_GET["cuenta"] =1;
}else{
    $_GET["cuenta"] = 1+41;
}
    echo "Contador: " . $contador; 
    $_GET["cuenta"]=$contador;
?>

</body>
</html>