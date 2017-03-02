<?php
require_once "UsuarioPDO.php";
require_once "LibreriaValidacion.php";

class Usuario {
    protected $codigo;
    protected $password;
    protected $email;
    protected $nombre;
    protected $sexo;
    protected $fechaNac;
    protected $estatura;
    protected $peso;

    public function __construct($codigo, $password, $email, $nombre, $sexo, $fechaNac, $estatura, $peso){
        $this -> codigo = $codigo;
        $this -> password = $password;
        $this -> email = $email;
        $this -> nombre = $nombre;
        $this -> sexo = $sexo;
        $this -> fechaNac = $fechaNac;
        $this -> estatura = $estatura;
        $this -> peso = $peso;
    }
    public static function validarUsuario($codigo, $password) {
    	$usuarioObjeto = null;
    	$usuario = UsuarioPDO::validarUsuario($codigo, $password);
    	if ($usuario) {
    		$usuarioObjeto = new Usuario($codigo, $password, $usuario['email'], $usuario['nombre'], $usuario['sexo'], $usuario['fechaNac'], $usuario['estatura'], $usuario['peso']);
    	}
    	return $usuarioObjeto;
    }
    public static function crearUsuario($codigo, $password, $password2, $email, $nombre, $sexo, $fechaNac, $estatura, $peso) {
        $errores = "";
        $errores = $errores . LibreriaValidacion::comprobarUsuario($codigo);
        $errores = $errores . LibreriaValidacion::comprobarPassword($password);
        $errores = $errores . LibreriaValidacion::compararPasswords($password, $password2);
        $errores = $errores . LibreriaValidacion::comprobarEmail($email);
        $errores = $errores . LibreriaValidacion::existeEmail($email);
        $errores = $errores . LibreriaValidacion::comprobarNombre($nombre);
        $errores = $errores . LibreriaValidacion::comprobarFechaNacimiento($fechaNac);
        if ($errores == "|||||||") {
            $usuario = UsuarioPDO::crearUsuario($codigo, hash('sha256', $password), $email, $nombre, $sexo, $fechaNac, $estatura, $peso);
        }
        return $errores;
    }
    public static function modificarUsuario($codigo, $password, $password2, $email, $nombre, $sexo, $fechaNac, $estatura, $peso) {
        $errores = "";
        $errores = $errores . LibreriaValidacion::comprobarPassword($password);
        $errores = $errores . LibreriaValidacion::compararPasswords($password, $password2);
        $errores = $errores . LibreriaValidacion::comprobarEmail($email);
        $errores = $errores . LibreriaValidacion::existeEmailModificar($email, $codigo);
        $errores = $errores . LibreriaValidacion::comprobarNombre($nombre);
        $errores = $errores . LibreriaValidacion::comprobarFechaNacimiento($fechaNac);
        if ($errores == "||||||") {
            UsuarioPDO::modificarUsuario($codigo, hash('sha256', $password), $email, $nombre, $sexo, $fechaNac, $estatura, $peso);
        }
        return $errores;
    }
    public function getCodigo() {
        return $this->codigo;
    }
    public function getPassword() {
        return $this->password;
    }
    public function getPassword2() {
        return $this->password2;
    }
    public function getEmail() {
        return $this->email;
    }
    public function getNombre() {
        return $this->nombre;
    }
    public function getSexo() {
        return $this->sexo;
    }
    public function getFechaNac() {
        return $this->fechaNac;
    }
    public function getEstatura() {
        return $this->estatura;
    }
    public function getPeso() {
        return $this->peso;
    }
}
?>