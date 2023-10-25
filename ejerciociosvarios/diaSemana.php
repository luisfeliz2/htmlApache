<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $dia=array("Lunes","Mates","Miercoles","Jueves","Viernes","Sabado","Domingo");
    foreach ($dia as $k=> $v){
        echo "Clave: $k => Valor: $v <br>";
    }
    ?>
    
</body>
</html>