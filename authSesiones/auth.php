<?php
 session_start();
 define("NOMBREOK","Pepe");
 define("PASSOK","1234");
include("passwdhash.php");
 if (! isset($_REQUEST["nombre"]) ||  ! isset($_REQUEST["contrasena"])) {
    //echo $_REQUEST["nombre"] . ":" . $_REQUEST["contrasena"];
    header("Location: index.php?redir=si");
 } elseif ( $_REQUEST["nombre"]  != NOMBREOK 
            || password_verify( $_SERVER["PHP_AUTH_PW"],$passwd)) {
//    echo $_REQUEST["nombre"] . ":" . $_REQUEST["contrasena"];
     header("Location: index.php?redir=si");
 }
 else {
    echo "<p>Autenticación correcta. Acceso concedido.</p>";
    echo "<p><a href=app.php>Acceso a la aplicación</a></p>";
    $_SESSION["authok"] = 1;
 }
?>

