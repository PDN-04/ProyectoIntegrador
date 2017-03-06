<?php
require_once "DBPDO.php";

class TrackpointPDO {
	public static function insertarTrackpoint($codigo, $codigoT, $latitud, $longitud, $tiempo, $heartRate, $elevacion, $calorias) {
        $sentenciaSQL = "insert into Trackpoint values (?,?,?,?,?,?,?,?)";
        $parametros = [$codigo, $codigoT, $latitud, $longitud, $tiempo, $heartRate, $elevacion, $calorias];
        $correcto = false;
        if (DBPDO::ejecutaConsulta($sentenciaSQL, $parametros)) {
            $correcto = true;
        }
        return $correcto;
    }
}
?>