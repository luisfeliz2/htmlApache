<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <h2>P2-UD2 Validación avanzada de formulario Requisitos de finalización</h2>


    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <label for="nombre">Nombre: </label>
        <input type="text" name="nombre" id="nombre" value="<?php
         if (isset($nombre)) {
            if(!empty($nombre)) {
                echo "$nombre";
            }
        }
        ?>"/>
        <label for="">Correo: </label>
        <input type="text" name="correo" id="" value="<?php
         if (isset($correo)) {
            if(!empty($correo)) {
                echo "$correo";
            }
        }
        ?>" ><br>
        <br>
        <label for="">Cual es tu lenguaje favorito</label><br>
        <input type="radio" id="html" name="fav_language" value="HTML">
        <label for="html">HTML</label><br>
        <input type="radio" id="css" name="fav_language" value="CSS">
        <label for="css">CSS</label><br>    
        <input type="radio" id="javascript" name="fav_language" value="JavaScript">
        <label for="javascript">JavaScript</label>
        <br>
        <input type="submit" name="enviar" value="Enviar">
        <input type="submit" name="borrar" value="Borrar">
        <input type="submit" name="confir" value="confirmar">

        <?php

            if(isset($_REQUEST["enviar"])){
            
                $nombre = $_POST["nombre"];
                $correo = $_POST["correo"];
            
            } 
            if(isset($_REQUEST["borrar"])){
                $nombre = "";//ponemos en blanco
                $correo = "";
            }
            if(isset($_REQUEST["confir"])){
                echo "<a href='formulario.php' >Volver a empezaar</a>";
            }

            function mostrar(){
                if (isset($nombre)) {
                    if(!empty($nombre)) {
                        $nombre=$_REQUEST("nombre");
                        echo "$nombre";
                    }
                
            }
        }
        ?>
       
        
        <?php
        mostrar();

        include("validacionFormulario.php");

        ?>  
           
    </form>


   
</body>
</html>
