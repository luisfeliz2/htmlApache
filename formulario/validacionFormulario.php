<?php
    $patronTexto ="/^[a-zA-Z\s]*$/";
    if(!empty($_POST)){
        echo "formulario recibido";
        if(isset($_POST['nombre'])){
            echo($_POST['nombre']);
            echo (preg_match($patronTexto,$_POST['nombre']));
        }
    
    }else{
        echo "no eh recibido el el formulario";
    }
?>
