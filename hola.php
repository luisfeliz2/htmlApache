<html>
<head>
<title>hola mundo PHP</title>
</head>
<body>

<?php echo "hola mundo PHP";

/*
for ($i=0;$i<10;$i++){
    echo "hola mundo PHP $i<br>";
}
*/

//print("Hola ". $_GET["nombre"]);

if(isset($_GET["nombre"])) {
    print("hola ". $_GET["nombre"] );
}else {
    print ("Hola anonimo");
}

?>


</body>
</html
