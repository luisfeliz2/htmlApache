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

        #chat-area {
            width: 100%;
            height: 300px;
            border: 1px solid #ccc;
            overflow-y: scroll;
            padding: 10px;
            background-color: blue;
        }

        #new-message {
            width: 100%;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div id="chat-container">
        <h2>Chat Falso</h2>
        <div id="chat-area">
   
            <?php
            $chatMessages='';
            if (isset($_POST['new_message'])) {
                $newMessage = $_POST["new_message"];

                if (!empty($newMessage)) {
                     $chatMessages.= "<p>$newMessage</p>";
                  
                }else{
                    echo "el mensaje no puede estar vacio";
                }
                
                
            }
        
                echo $chatMessages;
            
            ?>
           

          
        </div>

        <div>
            <?php
            echo "<p>hola buenos dias</p>";
            echo "la fecha actual es ".  date('d,M,Y');
            ?>

        </div>
        <form method="post">
            <input type="text" name="new_message" id="new-message" placeholder="Nuevo mensaje">
            <input type="text"  name="recuperar"  value="" id="">

            <button type="submit">Enviar</button>
        </form>
    </div>
</body>
</html>
