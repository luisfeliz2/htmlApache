<?php
session_start();
include "common-stock.php"; // incluye la lectura del stock y los precios
?>
<html>
<body>

<?php
 if (!isset($_POST["finalizar"])) {
	 echo "Error: no hay compra para realizar.";
	 echo "<a href=carrito.php>Volver al carrito</a>";
	 exit;
 }
 $compraOk = true;
 foreach ($stock as $producto => $units) {
  if (isset($_SESSION["$producto"]) && ($_SESSION["$producto"]>$units)) 
   $compraOk=false; 
 }
 if ($compraOk) {
  echo "<p>Resumen de la compra:</p>";
  $total = 0;
  foreach ($stock as $producto => $units) {
   if (isset($_SESSION["$producto"])) {
	   $compradas = $_SESSION["$producto"];
	   $parcial = $compradas * $precios["$producto"];
	   $total += $parcial;
	   $stock["$producto"] -= $compradas;
	   echo "<p>$producto - $compradas unidades a " . $precios["$producto"] . "€/unidad " . " = $parcial €</p>";
   }
  }
  echo "<p>Total: $total €</p>";
  guardaStock($stock);
  session_destroy();
 }
 else {
	 echo "Error: no hay stock suficiente para realizar la compra";
 }

 echo "<a href=carrito.php>Volver al carrito</a>";

?>


<?php
 if (isset($_POST["actualizar"])) {
    echo "<p>Estado del carrito:</p>";
    foreach($precios as $producto => $precio) {
        $valor = $_SESSION["$producto"] ?? 0;
        $valor = $valor + (intval($_POST["$producto"]) ?? 0);
        echo "<p>$producto : $valor</p>";
        $_SESSION[$producto] = $valor;       
    }
 }
?>



<p>Stock actual:</p>
<?php  
echo mapaAHtml($stock);
?>
</body>
</html>
