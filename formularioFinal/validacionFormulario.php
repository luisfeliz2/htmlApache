<?php
    $errores =[];

    $patronTexto ="/^[a-zA-Z\s]*$/";
    if(!empty($_POST)){
        echo "formulario recibido";
        if(isset($nombre)){
            if(empty($nombre)){
                $errores[]="<p class='errores'>rellena el nombre porfavor</php>";
            }
            if(strlen($nombre)<3){{

                $errores[]="<p class='errores'>El nombre no puede tener menos 3 letras</php>";
            }
            if(stripos($nombre,".")!==false){
                $errores[]= "El nombre no puede contener un punto (.)";
            }
           
        }
        if(isset($correo)){
            
            if(!filter_var($correo, FILTER_VALIDATE_EMAIL)){
                $errores[]= "<p class='errores'>El correo es incorrecto</php>";

            }
           
        }
        
        if(isset($hobbies)){
            if(count($hobbies)<2){
                $errores[]= "<p class='errores'>seleciona al menos 2 hobies</php>";
                
            }
            if(in_array("Deporte",$hobbies) && in_array("Viajes",$hobbies)){
                $errores[]= "<p class='errores'>No puede selecionar deporte y viaje a la vez</php>";
                unset($hobbies);    
                
            }
        }

        for ($i=0; $i < count($errores); $i++) { 
            echo $errores[$i];
         
        }
    
    }else{
        echo "no eh recibido el el formulario";
    }
     }
?>
