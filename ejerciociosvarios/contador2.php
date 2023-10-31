<?php session_start(); ?>
<html>
    <body>
<?php
    echo "contador: " . $_SESSION['contador'];
    
?>
<br><a href="hola.php">[ Volver ]</a>
</body>
</html>