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
    
   
    $precios[$precio]=$_REQUEST["$producto"];

}

foreach($stock as $producto=>$precio){
    $stock[$producto]=$_REQUEST["$producto"];
}
echo "precio";
echo mapaAHtml($precios);

echo "stock";
echo mapaAHtml($stock);
guardaStock($stock);



?>



</body>
</html>