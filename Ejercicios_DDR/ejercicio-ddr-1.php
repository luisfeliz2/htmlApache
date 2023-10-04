<!DOCTYPE html>
-<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

if(isset($_POST['Enviar'])){
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $suma = $num1+$num2;
}
?>

dsa
    <form action="" method="post">
    <label for="num1">inserta numero 1</label>
    <input type="number" name="num1" id="num1">
    <label for="num2">inserta numero 2</label>
    <input type="number" name="num1" id="num2">
    <input type="submit" value="Enviar">
    </form>
    
</body>
</html>