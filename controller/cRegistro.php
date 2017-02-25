<?php
if (!strpos(dirname($_SERVER['PHP_SELF']), 'controller')) {
    require_once 'model/Usuario.php';
}
else {
    require_once '../model/Usuario.php';
}

if (isset($_GET['registro'])) {
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];
    $password2 = $_POST['password2'];
    $email = $_POST['email'];
    $nombre = $_POST['nombre'];
    $sexo = $_POST['sexo'];
    $fechaNac = "";
    if (!empty(trim($_POST['dia'])) && !empty(trim($_POST['mes'])) && !empty(trim($_POST['anyo']))) {
        $fechaNac = $_POST['dia'] . "-" . $_POST['mes'] . "-" . $_POST['anyo'];
    }
    $estatura = $_POST['estatura'];
    $peso = $_POST['peso'];

    $errores = Usuario::crearUsuario($usuario, $password, $password2, $email, $nombre, $sexo, $fechaNac, $estatura, $peso);
    if ($errores == "||||||") {
        $_SESSION['usuarioNuevo'] = [$usuario, $password];
    }
    echo $errores;
}
else {
    include 'view/layout.php';
}
?>