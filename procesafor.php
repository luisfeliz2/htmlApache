<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
   if(! isset($_REQUEST["eviar"])){
    ?>

    <form action="" method="post">

    <input type="text" name="texto" id="">
    <input type="submit" value="enviar">

    </form>
<?php

?>


}else{
    echo "<p> Gracias</p>";
    echo
} 
</body>
</html>