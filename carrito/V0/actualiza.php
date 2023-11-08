<?php
    require("common-stock.php")


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
/*

*/

foreach($precios as $producto=>$precio){
    $stock[$producto]=$_REQUEST["$stock$producto"];
    $precio[$producto]=$_REQUEST["$precio$producto"];
}
echo "precio";
echo mapaAHtml($precio);

echo "stock";
echo mapaAHtml($stock);
guardaStock($stock);



?>



</body>
</html>