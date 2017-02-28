<?php
if (!strpos(dirname($_SERVER['PHP_SELF']), 'controller')) {
    require_once 'model/Usuario.php';
    require_once 'model/LibreriaValidacion.php';
}
else {
    require_once '../model/Usuario.php';
    require_once '../model/LibreriaValidacion.php';
}
if (!isset($_SESSION['usuarioNuevo'])) {
    header("refresh:0; url = index.php?location=login");
}
else {
	if (isset($_GET['aceptar'])) {	
	    $codigo = $_SESSION["usuarioNuevo"][0];
	    $password = hash('sha256', $_SESSION["usuarioNuevo"][1]);
	    $usuario = Usuario::validarUsuario($codigo, $password);
	    $_SESSION['usuario'] = $usuario;
	    header("refresh:0; url = index.php?location=inicio");
	}
}
?>