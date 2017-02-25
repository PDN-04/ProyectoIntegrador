<?php
require_once 'model/Usuario.php';
require_once 'config/config.php';

session_start();

$controlador = 'controller/cInicio.php';

if (isset($_GET['location']) && isset($controladores[$_GET['location']])) {
    // if ($_GET['location'] == "login") {
    // 	$_GET['location'] = 'inicio';
    // }
    // else {
    	$controlador = $controladores[$_GET['location']];
	// }
}
else {
    $_GET['location'] = 'inicio';
}
include $controlador;
?>