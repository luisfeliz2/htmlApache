     <?php
        $minimo = 1;
        $maximo = 50;
        $aleatorio = rand($minimo, $maximo);
        if (!isset($_POST['numero_aleatorio'])) {
            $aleatorio = rand($minimo, $maximo);
        } else {

            $aleatorio = intval($_POST['numero_aleatorio']);
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $entrada = intval($_POST["numero_usuario"]);

            if ($entrada != $aleatorio) {

                echo "No has adivinado, prueba de nuevo, una pista: ";
                if($entrada<$aleatorio){
                    echo "tu número es menor";
                }else{
                    echo "tu número es mayor";
                }
            } else {
                echo "¡Acertaste! El número aleatorio era $aleatorio.";
                $aleatorio = rand($minimo, $maximo);
            }
        }
        ?>
     <!DOCTYPE html>
     <html lang="en">

     <head>
         <meta charset="UTF-8">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <title>Document</title>
     </head>

     <body>
         <h1>Adivina</h1>
         <p>Ingresa un número entre <?php echo $minimo; ?> y <?php echo $maximo; ?>:</p>
         <form action="adivinanumero.php" method="POST">
             <input type="number" name="numero_usuario">

             <input type="hidden" name="numero_aleatorio" value="<?php echo $aleatorio; ?>">
             <input type="submit" value="Adivinar">
         </form>
     </body>

     </html>