<?php
if (!strpos(dirname($_SERVER['PHP_SELF']), 'controller')) {
    require_once 'model/Usuario.php';
}
else {
    require_once '../model/Usuario.php';
}

if (isset($_GET['aceptar'])) {
    print_r($_SESSION["usuarioNuevo"]);
    // $usuario = Usuario::validarUsuario($usuario, $password);
}
?>