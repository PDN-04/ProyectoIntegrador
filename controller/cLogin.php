<?php
if (!strpos(dirname($_SERVER['PHP_SELF']), 'controller')) {
    require_once 'model/Usuario.php';
}
else {
    require_once '../model/Usuario.php';
}

if (isset($_GET['login'])) {
    $usuario = $_POST["user"];
    $password = hash('sha256', $_POST['password']);
    $usuario = Usuario::validarUsuario($usuario, $password);
    if (is_null($usuario)) {
        echo false;
    } else {
        $_SESSION['usuario'] = $usuario;
        echo true;
    }
}
else {
    include 'view/layout.php';
}
?>