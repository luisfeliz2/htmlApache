<?php
session_start();
define("TOPE",50);

//aleatoriio ?? $_SESSION[""]

if(isset($_SESSION["aleatorio"])){
    $aleatorio=$_SESSION["aleatorio"];
    $intentos=$_SESSION ["intentos"];
}else{
    $aleatorio=rand(1,TOPE);
    $_SESSION["aleatorio"]=$aleatorio;   
    $intentos=0;
    $_SESSION["intentos"]=0;
    
}
if (isset($_REQUEST["numero"])){

    $_SESSION["intentos"]=++$aleatorio;
    $numero =$_REQUEST["numero"];
    if($numero == $aleatorio){
        echo"<p>Enhorabueana, lo has acertado en $intentos intentos";
        session_destroy();
        exit;
    }elseif($numero > $aleatorio){
        echo "<p>Mi numero es menor</p>";
    }else{
        echo "<p>Mi numero es menor</p>";
    }
}else{
    $intentos=0;
    $_SESSION["intentos"]= 0;
    

}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Intenta adivinar mi numero </p>
    <form action="" method="post"></form>
    <input type="number" name="" value="numero" id="">    
    <input type="submit" value="Enviar">
    <p>LLevas <?=$intentos ?>intentos </p>
    <p>Mi numero es <?= $aleatorio ?> </p>
</body>
</html>