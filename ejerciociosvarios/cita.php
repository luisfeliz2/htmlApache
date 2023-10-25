<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <meta http-equiv="refresh" content="1">
</head>
<body>
    
<?php
    
$cita = array(
    "hoy es lunes",
    "hoy es martes",
    "hoy miercoles",
    "Cuando todo parece ir en tu contra, recuerda que el avión despega con viento en contra, no a favor  Henry Ford"

);
    echo $cita [ random_int(0,count($cita)-1)];
?>
    
</body>
</html>
