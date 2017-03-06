<?php
if (!strpos(dirname($_SERVER['PHP_SELF']), 'controller')) {
    require_once 'model/Usuario.php';
}
else {
    require_once '../model/Usuario.php';
}
if (!isset($_SESSION['usuario'])) {
    header("refresh:0; url = index.php?location=login");
}
else {
    if (isset($_GET["formBorrar"])) {
        $codigo = $_SESSION['usuario'] -> getCodigo();
        if (Usuario::borrarUsuario($codigo)) {
            session_unset();
            session_destroy();
            echo true;
        }
        else {
            echo false;
        }
    }
    else {
        include 'view/layout.php';
    }
}
?>