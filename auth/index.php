<?php
$validoUser="pepe";
$validPass= "\$2y\$10\$l0JifWYDCyqjIZBlgU.EzedcMCdzR.1bsdN6HS/ltwL/nfVCuxxeC";
if (!isset($_SERVER['PHP_AUTH_USER'])|| (isset($_REQUEST["logout"]))) {
    header('WWW-Authenticate: Basic realm="My Realm"');
    header('HTTP/1.0 401 Unauthorized');
    echo 'HAs cancelado';
    exit;
} 



if (($_SERVER['PHP_AUTH_USER'] == $validoUser) &&
    password_verify($_SERVER["PHP_AUTH_PW"],$validPass)) {

        echo "<h1>   BIENVENIDO</h1>";
        echo "<a href=\"http://otro:o@localhost/web/auth/\">Cerrar sesión</a>";
    }elseif(isset($_REQUEST["logout"])) {

    header('WWW-Authenticate: Basic realm="Accesoo restringido"');
    header('HTTP/1.0 401 Unauthorized');
    header("Location:http://localhost/luisdaw/htmlApache/htmlApache/auth/");
}else{
    echo "<h1>ACESSO DENEGADO</h1>";
    echo "<a href=\"http://localhost/luisdaw/htmlApache/htmlApache/auth/?logout=si\">Volver a intentar</a>";

}





?>

