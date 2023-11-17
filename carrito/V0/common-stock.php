<?php
define ('RUTA_ARCHIVO_STOCK',"stock.data");
define('RUTA_ARCHIVO_PRECIOS',"precios.data");

if (!file_exists(RUTA_ARCHIVO_STOCK) || !($stock = unserialize(file_get_contents(RUTA_ARCHIVO_STOCK)))) {
    // si falla la lectura del stock genero uno por defecto y lo grabo a disco
    echo "Error leyendo archivo " . RUTA_ARCHIVO_STOCK;
    $stock = array( "platanos" => 0, "fresas" => 0, "kiwis" => 0 );
    if (! @file_put_contents(RUTA_ARCHIVO_STOCK,serialize($stock))) {
		echo "<p>Error escribiendo archivo " .  RUTA_ARCHIVO_STOCK . "</p>";
	}
}
if (!file_exists(RUTA_ARCHIVO_PRECIOS) || !($precios = unserialize(file_get_contents(RUTA_ARCHIVO_PRECIOS)))) {
    // si falla la lectura del stock genero uno por defecto y lo grabo a disco
    echo "Error leyendo archivo " . RUTA_ARCHIVO_PRECIOS;

    
    $precios = array( "platanos" => 3, "fresas" => 6, "kiwis" => 4 );



    if (! @file_put_contents(RUTA_ARCHIVO_PRECIOS,serialize($precios))) {
		echo "<p>Error escribiendo archivo " .  RUTA_ARCHIVO_PRECIOS . "</p>";
	}
}

function mapaAHtml($mapa) {
	$res = "<ol>";
	foreach ($mapa as $clave => $valor)
		$res .= "<li>$clave : $valor</li>";
	$res .= "</ol>";
	return $res;
}

function guardaStock($array) {
 if (! file_put_contents(RUTA_ARCHIVO_STOCK,serialize($array))) {
  echo "<p>Error escribiendo archivo " .  RUTA_ARCHIVO_STOCK . "</p>";
 }
 // echo "Guardado: " . mapaAHtml($array);
}


?>

