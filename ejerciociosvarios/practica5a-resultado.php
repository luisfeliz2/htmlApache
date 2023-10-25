<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Conversor de euro a pesetas</h1>
  
</body>
</html>

<?php 
if(isset($_POST["euros"])){//si existe entramo al if 
    
    if(empty($_POST["euros"])){//si esta vacio mostramos debe introducir una cant 
        
        echo "debe introducir una cantidad";
        echo "<a href='practica5a.php'>Volver</a>";//un a para volver ala pagina anterior



   }else{
    $cant =intval( $_POST["euros"]);
    if($cant ==0){
        echo "tiene que se mayor a 0";
    }else{
        $pesetas = $cant *166.386;
        echo $cant. "euros(s) equivale(n) a ". $pesetas. " pesetas";
        echo "<a href='practica5a.php'>Volver</a>";
    }
   }
}

?>