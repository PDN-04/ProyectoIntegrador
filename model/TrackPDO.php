<?php
require_once "DBPDO.php";

class TrackPDO {
	public static function insertarTrack($codigo, $codigoU, $visibilidad, $nombre, $fechaImportacion, $fechaInicio) {
        $sentenciaSQL = "insert into Track values (?,?,?,?,?,?)";
        $parametros = [$codigo, $codigoU, $visibilidad, $nombre, $fechaImportacion, $fechaInicio];
        $correcto = false;
        if (DBPDO::ejecutaConsulta($sentenciaSQL, $parametros)) {
            $correcto = true;
        }
        return $correcto;
    }
}
?>