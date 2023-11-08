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
  require ("common-stock.php")  ;


foreach ($precios as $producto => $precio) {
    #ech coecde...
    echo "<label>$producto</label>";
    echo "input type=number name=$producto value=$precio/></p>";
}


foreach ($stock as $unidades => $value) {
    echo "<p> <label>$stock</label>";
    echo "input type=number name=$stock$producto value=$unidades/></p>";
}

?>
<input type="submit" value="Actualizar">
</form>

</body>
</html>
