<?php
    $errores =[];

    $patronTexto ="/^[a-zA-Z\s]*$/";
    if(!empty($_POST)){
        echo "formulario recibido";
        if(isset($nombre)){
            if(empty($nombre)){
                $errores[]="<p class='errores'>rellena el nombre porfavor</php>";
            }
           
        }
        if(isset($correo)){
            
            if(!filter_var($correo, FILTER_VALIDATE_EMAIL)){
                $errores[]= "<p class='errores'>El correo es incorrecto</php>";

            }
        }

        for ($i=0; $i < count($errores); $i++) { 
            echo $errores[$i];
         
        }
    
    }else{
        echo "no eh recibido el el formulario";
    }
?>
