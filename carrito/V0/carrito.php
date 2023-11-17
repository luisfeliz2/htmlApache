<?php
session_start();
include "common-stock.php";
?>
<html>
<body>
<form METHOD="POST">
<p>Modificar carrito:</p>
<?php
 foreach ($precios as $producto => $precio) {
	 echo "<p><label for=\"$producto\">$producto (${precio}€)</label>";
	 // Calculo el máximo a añadir:
	 if (isset($_POST["$producto"])) {
       	 	$valor = $_SESSION["$producto"] ?? 0;
	        $valor = $valor + (intval($_POST["$producto"]) ?? 0);
	 		$max = $stock["$producto"] - $valor;
	 }
	 else $max = $stock["$producto"];
	 echo "<input type=\"number\" name=\"$producto\" max=\"$max\"/></p>";
 }
?>
<input type="submit" name="actualizar" value="Actualizar" />
</form>
<form ACTION="fin-compra.php" METHOD="POST">
<input type="submit" name="finalizar" value="Finalizar compra" />
</form>


<?php
 if (isset($_POST["actualizar"])) {
    echo "<p>Estado del carrito:</p>";
    $total = 0;
    foreach($precios as $producto => $precio) {
        $valor = $_SESSION["$producto"] ?? 0;
        $valor = $valor + (intval($_POST["$producto"]) ?? 0);
	if ($valor>0) {
         echo "<p>$producto : $valor unidades = " . ($valor * $precio) . "€</p>";
         $_SESSION[$producto] = $valor;       
	 $total += ($valor * $precio);
	}
    }
    echo "<p>Total compra: $total €</p>";
 }
?>



<p>Stock actual:</p>
<?php  
echo mapaAHtml($stock);
?>
</body>
</html>
