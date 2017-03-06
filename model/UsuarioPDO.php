<?php
require_once "DBPDO.php";

class UsuarioPDO {
	public static function validarUsuario($codigo, $password) {
		$sentenciaSQL = "select * from Usuario where codigo=? AND password=?";
		$parametros = [$codigo, $password];
		$arrayUser = [];
        $resultSet = DBPDO::ejecutaConsulta($sentenciaSQL, $parametros);
		$usuario = $resultSet -> fetchObject();
		if ($resultSet -> rowCount()) {
    		$arrayUser['codigo'] = $usuario -> codigo;
            $arrayUser['password'] = $usuario -> password;
            $arrayUser['email'] = $usuario -> email;
            $arrayUser['nombre'] = $usuario -> nombre;
            $arrayUser['sexo'] = $usuario -> sexo;
            $arrayUser['fechaNac'] = $usuario -> fechaNac;
            $arrayUser['estatura'] = $usuario -> estatura;
            $arrayUser['peso'] = $usuario -> peso;
        }
		return $arrayUser;
	}
    public static function crearUsuario($codigo, $password, $email, $nombre, $sexo, $fechaNac, $estatura, $peso) {
        $sentenciaSQL = "insert into Usuario values (?,?,?,?,?,?,?,?)";
        $parametros = [$codigo, $password, $email, $nombre, $sexo, $fechaNac, $estatura, $peso];
        $correcto = false;
        if (DBPDO::ejecutaConsulta($sentenciaSQL, $parametros)) {
            $correcto = true;
        }
        return $correcto;
    }
    public static function buscarUsuario($codigo) {
        $sentenciaSQL = "select * from Usuario where codigo=?";
        $parametros = [$codigo];
        $arrayUser = [];
        $resultSet = DBPDO::ejecutaConsulta($sentenciaSQL, $parametros);
        $usuario = $resultSet -> fetchObject();
        if ($resultSet -> rowCount()) {
            $arrayUser['codigo'] = $usuario -> codigo;
            $arrayUser['password'] = $usuario -> password;
            $arrayUser['email'] = $usuario -> email;
            $arrayUser['nombre'] = $usuario -> nombre;
            $arrayUser['sexo'] = $usuario -> sexo;
            $arrayUser['fechaNac'] = $usuario -> fechaNac;
            $arrayUser['estatura'] = $usuario -> estatura;
            $arrayUser['peso'] = $usuario -> peso;
        }
        return $arrayUser;
    }
    public static function buscarEmail($email) {
        $sentenciaSQL = "select * from Usuario where email=?";
        $parametros = [$email];
        $arrayUser = [];
        $resultSet = DBPDO::ejecutaConsulta($sentenciaSQL, $parametros);
        $usuario = $resultSet -> fetchObject();
        if ($resultSet -> rowCount()) {
            $arrayUser['codigo'] = $usuario -> codigo;
            $arrayUser['password'] = $usuario -> password;
            $arrayUser['email'] = $usuario -> email;
            $arrayUser['nombre'] = $usuario -> nombre;
            $arrayUser['sexo'] = $usuario -> sexo;
            $arrayUser['fechaNac'] = $usuario -> fechaNac;
            $arrayUser['estatura'] = $usuario -> estatura;
            $arrayUser['peso'] = $usuario -> peso;
        }
        return $arrayUser;
    }
    public static function modificarUsuario($codigo, $password, $email, $nombre, $sexo, $fechaNac, $estatura, $peso) {
        $sentenciaSQL = "update Usuario set password=?, email=?, nombre=?, sexo=?, fechaNac=?, estatura=?, peso=? WHERE codigo=?";
        $parametros = [$password, $email, $nombre, $sexo, $fechaNac, $estatura, $peso, $codigo];
        $correcto = false;
        if (DBPDO::ejecutaConsulta($sentenciaSQL, $parametros)) {
            $correcto = true;
        }
        return $correcto;
    }
    public static function borrarUsuario($codigo) {
        $sentenciaSQL = "delete from Usuario where codigo=?";
        $parametros = [$codigo];
        $correcto = false;
        if (DBPDO::ejecutaConsulta($sentenciaSQL, $parametros)) {
            $correcto = true;
        }
        return $correcto;
    }
}
?>