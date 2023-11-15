<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="actualiza.php" >

<h2>Pecio:</h2>

<h2>Stock</h2>
<?php
include("usuarioContrasenia.php");
$random = uniqId(); 
if (!isset($_SERVER["PHP_AUTH_USER"])){
    header('WWW-Authenticate: Basic realm="Acceso restringuido"');
    header('HTTP/1.0 401 Unauthorized');
    echo "<h1>Acceso denegado 1</h1>";
    // URL entera para quitar parámetros extra:
    echo "<a href=\"logout-hash.php?id=$random\">Volver a intentar</a>";
    exit;
}


if(($_SERVER["PHP_AUTH_USER"]==$user)&& (password_verify( $_SERVER["PHP_AUTH_PW"],$password))){
    echo "Bienvenido";
}else{
   
}


  require ("common-stock.php")  ;


foreach ($precios as $producto => $precio) {
    #ech coecde...
    echo "<label>$producto</label>";
    echo "<input type=\"number\" name=\"$producto\" value=\"$precio\"/></p>";
}


foreach ($stock as $unidades => $value) {
    echo "<p> <label>$unidades</label>";
    
    echo "<input type=\"number\" name=\"$unidades\" value=\"$value\"/></p>";
}

?>
<input type="submit" value="Actualizar">
</form>

</body>
</html>
