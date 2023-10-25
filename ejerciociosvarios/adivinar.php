<?php
session_start();    
$randomNumber = null;
$attempts = 0;
$message = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!isset($_SESSION['randomNumber'])) {
        // Generar un número aleatorio si no se ha generado aún
        $randomNumber = rand(1, 100);
        $attempts = 0;
    } else {
        $randomNumber = intval($_POST['randomNumber']);
        $guess = intval($_POST['guess']);
        $attempts = intval($_POST['attempts']) + 1;

        if ($guess < 1 || $guess > 100) {
            $message = "Por favor, introduce un número válido entre 1 y 100.";
        } elseif ($guess < $randomNumber) {
            $message = "El número es mayor. Intenta de nuevo.";
        } elseif ($guess > $randomNumber) {
            $message = "El número es menor. Intenta de nuevo.";
        } else {
            $message = "¡Felicitaciones! Adivinaste el número en $attempts intentos.";
            $randomNumber = null; // Reiniciar el juego
        }
    }
} else {
    // Generar un número aleatorio al cargar la página por primera vez
    $randomNumber = rand(1, 100);
    $attempts = 0;
    $message = "Adivina un número entre 1 y 100.";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juego de Adivinar el Número</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Juego de Adivinar el Número</h1>
    <p><?php echo $message; ?></p>
    <?php if ($randomNumber !== null) : ?>
    <form action="" method="post">

        <!-- <input type="hidden" name="randomNumber" value="<?php echo $randomNumber; ?>">
        <input type="hidden" name="attempts" value="<?php echo $attempts; ?>"> -->

        <p>Introduce un número entre 1 y 100:</p>
        <input type="number" name="guess" required>
        <button type="submit">Adivinar</button>
    </form>
    <?php endif; ?>
</body>
</html>
