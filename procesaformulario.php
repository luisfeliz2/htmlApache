<?php

if(isset($_REQUEST["Enviar"])){
    echo "<br> Tu nombre es: ".$_REQUEST["nombre"];
    echo "<br> Tu Equipo es: ".$_REQUEST["equipo"];
    echo "<br><a href=>Volver meter datos</a> ";
}else{
    ?>
    
    <form method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre">
        <label for="equipo">Equipo:</label>
        <input type="text" name="equipo">
        <input type="submit" value="Enviar" name="Enviar">
<?php        
}
?>


