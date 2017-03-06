<?php
require_once "Usuario.php";
require_once "TrackPDO.php";

class Track {
    private $codigo;
    private $codigoU;
    private $visibilidad;
    private $nombre;
    private $fechaImportacion;
    private $fechaInicio;

    public function __construct($codigo, $codigoU, $visibilidad, $nombre, $fechaImportacion, $fechaInicio) {
        $this->codigo = $codigo;
        $this->codigoU = $codigoU;
        $this->visibilidad = $visibilidad;
        $this->nombre = $nombre;
        $this->fechaImportacion = $fechaImportacion;
        $this->fechaInicio = $fechaInicio;
    }
    public static function insertarTrack($codigo, $codigoU, $visibilidad, $nombre, $fechaImportacion, $fechaInicio) {
        $correcto = false;
        if (TrackPDO::insertarTrack($codigo, $codigoU, $visibilidad, $nombre, $fechaImportacion, $fechaInicio)) {
            $correcto = true;
        }
        return $correcto;
    }
}
?>