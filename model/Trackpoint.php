<?php
require_once "Track.php";
require_once "TrackpointPDO.php";

class Track {
    private $codigo;
    private $codigoT;
    private $latitud;
    private $longitud;
    private $tiempo;
    private $heartRate;
    private $elevacion;
    private $calorias;

    public function __construct($codigo, $codigoT, $latitud, $longitud, $tiempo, $heartRate, $elevacion, $calorias) {
        $this->codigo = $codigo;
        $this->codigoT = $codigoT;
        $this->latitud = $latitud;
        $this->longitud = $longitud;
        $this->tiempo = $tiempo;
        $this->heartRate = $heartRate;
        $this->elevacion = $elevacion;
        $this->calorias = $calorias;
    }
    public static function insertarTrackpoint($codigo, $codigoT, $latitud, $longitud, $tiempo, $heartRate, $elevacion, $calorias) {
        $correcto = false;
        if (TrackpointPDO::insertarTrackpoint($codigo)) {
            $correcto = true;
        }
        return $correcto;
    }
}
?>