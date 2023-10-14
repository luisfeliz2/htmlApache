<!DOCTYPE html>
<html lang="es">
<head>
    <title>Chat Falso</title>
    <style>
        /* Estilos CSS para dar formato al formulario */
        #chat-container {
            width: 300px;
            margin: 0 auto;
        }

     
        #new-message {
            width: 100%;
            margin-bottom: 10px;
        }
        #prueba{
          
            text-align: center;
        }
    </style>
</head>
<body>
    <div id="chat-container">
        <h2>Chat Falso</h2>

            <?php
            $chatMensaje='';
            $mensaje="";
            if (isset($_POST['nuevo_mensaje'])) { //si existe el input 
                $nuevoMensaje = $_POST["nuevo_mensaje"];
                //obtenemos el mensaje por $_POST
                if (!empty($nuevoMensaje)) {
               //si no está vacio el mensaje que obtenimos por post
                     $chatMensaje .= $chatMensaje. $nuevoMensaje;
                     $area=$_POST["area"];
                     $mensaje .=$chatMensaje."\n".$area;
                }else{
                    echo "El mensaje no puede estar vacio";
                    $mensaje.="".$_POST["area"]; 
                }
     
            }

            ?>

        <div id="prueba" >
            <?php
            echo "<p>hola buenos dias</p>";
            echo "la fecha actual es ".  date('d,M,Y');
            ?>

        </div>
        <form method="post">
            <input type="text"  name="nuevo_mensaje"  placeholder="Nuevo mensaje">
           
            <textarea name="area" id="" cols="30" rows="10" readonly><?php echo $mensaje?> </textarea>

            <button type="submit">Enviar</button>
        </form>
    </div>
</body>
</html>
