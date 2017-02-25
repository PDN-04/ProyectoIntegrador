<?php
if (!isset($_SESSION['usuario'])) {
	header("refresh:0; url = index.php?location=login");
}
else {
	if (isset($_GET['logoff'])) {
		session_unset();
		session_destroy();
		header("refresh:0; url = index.php?location=login");
	}
	else {
		$usuario = $_SESSION['usuario'];
		include 'view/layout.php';
	}
}
?>