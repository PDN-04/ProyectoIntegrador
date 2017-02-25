<?php

class LibreriaValidacion {

    public static function comprobarNombre($valor) {
    	$error = "|";
    	$patron = "/^[a-zA-ZáéíóúÁÉÍÓÚñÑ ]+$/";
		if (empty(trim($valor))) {
			$error = "Debe insertar su nombre y apellidos.|"; 
		}
		else {
			if (!preg_match($patron, $valor)) {
				$error = "Ha introducido caracteres incorrectos en el nombre y apellidos.|"; 
			}
		}
		return $error;
    }

	public static function comprobarUsuario($valor) { 
		$error = "|";
		$patron = "/^[a-zA-Z0-9]+$/";
		if (empty(trim($valor))) {
			$error = "Debe insertar un nombre de usuario.|"; 
		}
		else {
			if (!preg_match($patron, $valor)) {
				$error = "El nombre de usuario sólo permite letras y/o números.|";
			}
			else {
				if (strlen($valor) < 8) {
					$error = "El nombre de usuario es demasiado corto.|";
				}
				if (strlen($valor) > 15) {
					$error = "El nombre de usuario es demasiado largo.|";
				}
			}
		}
		return $error;
	}

	public static function comprobarPassword($valor) { 
		$error = "|";
		$patron = "/^[a-zA-Z0-9]+$/";
		if (empty(trim($valor))) {
			$error = "Debe insertar una contraseña.|"; 
		}
		else {
			if (!preg_match($patron, $valor)) {
				$error = "La contraseña sólo permite letras y/o números.|";
			}
			else {
				if (strlen($valor) < 8) {
					$error = "La contraseña es demasiado corta.|";
				}
				if (strlen($valor) > 15) {
					$error = "La contraseña es demasiado larga.|";
				}
			}
		}
		return $error;
	}

	public static function compararPasswords($valor1, $valor2) { 
		$error = "|";
		if ($valor1 != $valor2) {
			$error = "Las contraseñas no coinciden.|";
		}
		return $error;
	}

	public static function comprobarEmail($valor) {
		$error = "|";
		if (empty(trim($valor))) {
			$error = "Debe insertar un e-mail.|"; 
		}
		else {
			if(!filter_var($valor, FILTER_VALIDATE_EMAIL)) {
				$error = "El E-mail introducido no es válido.|";
			}
		}
		return $error;
	}

	public static function comprobarFechaNacimiento($fecha) {
		$error = "|";
		$patron = "/\d{1,2}\-\d{1,2}\-\d{4}/";
		if (empty(trim($fecha))) {
			$error = "Debe introducir su fecha de nacimiento.|"; 
		}
		else {
			if (!preg_match($patron, $fecha)) {
				$error = "El formato de la fecha debe ser DD-MM-AAAA.|";
			}
			else {
				$campofecha = explode ("-", $fecha);
				if(!checkdate($campofecha[1], $campofecha[0], $campofecha[2])){
					$error = "La fecha introducida no es válida.|";
				}
				else {
					if($campofecha[2] > date("Y") || $campofecha[2] < "1900") {
						$error = "La fecha introducida no es válida.|";
					}
					else {
						if($campofecha[2] == date("Y") && $campofecha[1] > date("m")) {
							$error = "La fecha introducida no es válida.|";
						}
						else {
							if($campofecha[2] >= date("Y") && $campofecha[1] == date("m") && $campofecha[0] > date("d")) {
								$error = "La fecha introducida no es válida.|";
							}
						}
					}
				}
			}
		}
		return $error;
	}
}
?>