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
    <?php
    if ($_SERVER) {
        echo "<h3>Datos del Servidor</h3>";
        echo "Dirección IP Remota: " . $_SERVER['REMOTE_ADDR'] . "<br>";
       
        echo "Cabeceras HTTP:";
        echo "<pre>";
        $cabeceras = apache_request_headers();
        print_r($cabeceras);
        echo "</pre>";
    }
    ?>

    <?php
      $ciudad ="";
      $hobbies= [];
      if(isset($_POST["ciudad"]) || isset($_POST["enviar"])){
          $ciudad = $_POST["ciudad"];
        
      }

      if(isset($_POST["hobbies"])){
        $hobbies = $_POST["hobbies"];

        }else{
            $hobbies =[];
        }
    ?>

    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <label for="nombre">Nombre: </label>
        <input type="text" name="nombre" id="nombre" value="<?php echo si_existe("nombre", ""); ?>"/>
        <label for="">Correo: </label>
        <input type="text" name="correo" id="" value="<?php echo si_existe("correo", ""); ?>" ><br>
        <br>


        <label for="">Cual es tu lenguaje favorito</label><br>
        <input type="radio" id="html" name="fav_language" value="HTML" <?php 
        echo radio("fav_language","HTML");
        ?> >
        <label for="html">HTML</label><br>
        <input type="radio" id="css" name="fav_language" value="CSS" 
        <?php echo radio("fav_language","CSS");
        ?>
        >
        <label for="css">CSS</label><br>    
        <input type="radio" id="javascript" name="fav_language" value="JavaScript"
        <?php echo radio("fav_language","JavaScript");
        ?>
        >
        <label for="javascript">JavaScript</label>
        <br>


        <label for="ciudad">Ciudad:</label>
        <select id="ciudad" name="ciudad" >
            <option value="" selected>OPCIONES</option>
            <option value="Madrid"  <?php if(si_existe("ciudad", "") === "Madrid") echo "selected"; ?>>Madrid</option>
            <option value="Caceres"   <?php if(si_existe("ciudad", "") === "Caceres") echo "selected"; ?> >Caceres</option>
            <option value="Oporto"  <?php if($ciudad == "Oporto") echo "selected"; ?> >Oporto</option>
            <option value="Murcia" <?php if($ciudad === "Murcia") echo "selected"; ?>>Murcia</option>
        </select><br><br>
        <br>



        <label>Hobbies:</label><br>
        <input type="checkbox" id="deporte" name="hobbies[]" value="Deporte" <?php
        if(in_array("Deporte",$hobbies)) echo "checked";
            
        
        ?>>
        <label for="deporte">Deporte</label><br>
        <input type="checkbox" id="lectura" name="hobbies[]" value="Lectura"
        <?php
        if(in_array("Lectura",$hobbies)) echo "checked";
            
        
        ?>
        >
        <label for="lectura">Lectura</label><br>
        <input type="checkbox" id="viajes" name="hobbies[]" value="Viajes"
        <?php
        if(in_array("Viajes",$hobbies)) echo "checked";
            
        
        ?>
        >
        <label for="viajes">Viajes</label><br>
        <input type="submit" name="enviar" value="Enviar">
        <input type="submit" name="borrar" value="Borrar">
        <input type="submit" name="confir" value="confirmar">

        <?php
           

            if(si_existe("enviar","")){
                $nombre = $_POST["nombre"];
                $correo = $_POST["correo"];
               
            }

            if(si_existe("borrar","")){
                $nombre = "";//ponemos en blanco
                $correo = "";
            }
          
            if(si_existe("confir","")){
                echo "<a href='formulario.php' >Volver a empezaar</a>";
            }
          
            function radio($nombre, $valor) {
                if (isset($_REQUEST[$nombre]) && $_REQUEST[$nombre] === $valor) {
                    return "checked";
                } else {
                    return "";
                }
            }
          

            function cheked($nombre){
                
            }
           
            function si_existe($clave, $valor_por_defecto) {
                if (isset($_REQUEST[$clave])) {
                    return $_REQUEST[$clave];
                } else {
                    return $valor_por_defecto;
                }
            }
            
        ?>
       
        
        <?php
       

        include("validacionFormulario.php");

        if(isset($_POST["enviar"])) {
            if(count($errores)<1){
                echo "<p>Nombre= $nombre</p> ";
                echo "<p>Correo= $correo</p> ";
                echo "<p>Tu Ciudad es=";
                echo si_existe('ciudad',"")."<p/>";
                echo "<p>Tu lenguaje favorito es=";
                echo si_existe('fav_language',"")."<p/>";
                echo "<p><Nombre=></Nombre= $nombre</p> <br>";
    
                $cadena="";
                for($i=0;$i<count($hobbies);$i++){
                    $cadena.=$hobbies[$i]." y ";
                }
                $cadena=rtrim($cadena," y ");
                echo "tus hobbies son:".$cadena;
            }

        }

        

        ?>  
           
    </form>
</body>
</html>
