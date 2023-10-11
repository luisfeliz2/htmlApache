<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Falso</title>
</head>

<body>
    <h1>Blog Falso</h1>

    <form action="blogi.php" method="POST">
        <label for="nuevoMensaje">Nuevo mensaje:</label>
        <input type="text" id="nuevoMensaje" name="nuevoMensaje">
        <input type="submit" name="enviar">
        <h2>Historial de Mensajes:</h2>
        <textarea readonly rows='300' cols='500' name="historialMensajes" id="historialMensajes">

        <?php
        $nuevoMensaje = ""; 
        $historialMensajes = ""; 

        if (isset($_REQUEST["enviar"])) {
            $nuevoMensaje = $_REQUEST["nuevoMensaje"];
            $historialMensajes = $_REQUEST["historialMensajes"];
            echo $nuevoMensaje . $historialMensajes;
        }
        ?>


        </textarea>

    </form>


</body>

</html>