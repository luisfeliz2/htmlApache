
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    
    <title>Document</title>
</head>
<body>
<table border="1">

    <?php
        define("DEFAULTSIZE",10);
        if(isset($_GET["n"])){
            $n = $_GET["n"];
        }else{
            $n = DEFAULTSIZE;
        }

        for($i=1;$i<=$n;$i++){
            for($j=1;$j<=$n;$j++){
                echo "<tr>";
                echo "<td>",$i*$j,"</td";

            }
            echo "</tr>";
        }
    ?>
</table>
    
</body>
</html>