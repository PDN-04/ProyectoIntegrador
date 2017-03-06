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
    if (isset($_GET["formPassword"]) || isset($_GET["formEmail"]) || isset($_GET["formNombre"]) || isset($_GET["formFechaNac"]) || isset($_GET["formEstatura"]) || isset($_GET["formPeso"]) || isset($_GET["formConfirmacion"])) {
        $codigo = $_SESSION['usuario'] -> getCodigo();
        if (isset($_SESSION['password'])) {
        	$password = $_SESSION['password'];
        	$password2 = $_SESSION['password'];
        }
        $email = $_SESSION['usuario'] -> getEmail();
        $nombre = $_SESSION['usuario'] -> getNombre();
        $sexo = $_SESSION['usuario'] -> getSexo();
        $fechaNac = $_SESSION['usuario'] -> getFechaNac();
        $estatura = $_SESSION['usuario'] -> getEstatura();
        $peso = $_SESSION['usuario'] -> getPeso();
        if (isset($_GET["formPassword"])) {
        	$password = $_POST['password'];
        	$password2 = $_POST['password2'];
        }
        if (isset($_GET["formEmail"])) {
        	$email = $_POST['email'];
        }
        if (isset($_GET["formNombre"])) {
        	$nombre = $_POST['nombre'];
        }
        if (isset($_GET["formFechaNac"])) {
        $fechaNac = "";
    	    if (!empty(trim($_POST['dia'])) && !empty(trim($_POST['mes'])) && !empty(trim($_POST['anyo']))) {
    	        $fechaNac = $_POST['dia'] . "-" . $_POST['mes'] . "-" . $_POST['anyo'];
    	    }
        }
        if (isset($_GET["formEstatura"])) {
        	$estatura = $_POST['estatura'];
        }
        if (isset($_GET["formPeso"])) {
        	$peso = $_POST['peso'];
        }
        if (isset($_GET["formConfirmacion"])) {
    	    $passwordConfirmacion = hash('sha256', $_POST['passwordConfirmacion']);
    	    $_SESSION['password'] = $_POST['passwordConfirmacion'];
    	    $usuario = Usuario::validarUsuario($codigo, $passwordConfirmacion);
    	    if (is_null($usuario)) {
    	        echo false;
    	    } else {
    	        $_SESSION['usuario'] = $usuario;
    	        echo true;
    	    }
        }
        else {
        	$errores = Usuario::modificarUsuario($codigo, $password, $password2, $email, $nombre, $sexo, $fechaNac, $estatura, $peso);
        	if ($errores == "||||||") {
    	        $_SESSION['usuario'] = Usuario::validarUsuario($codigo, hash('sha256', $password));
    	    }
        	echo $errores;
        }
    }
    else {
        include 'view/layout.php';
    }
}
?>