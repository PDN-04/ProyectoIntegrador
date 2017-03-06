<?php
if (!strpos(dirname($_SERVER['PHP_SELF']), 'controller')) {
    require_once 'model/Track.php';
}
else {
    require_once '../model/Track.php';
}
if (!isset($_SESSION['usuario'])) {
	header("refresh:0; url = index.php?location=login");
}
else {
	if (isset($_GET['formImportar'])) {
		
		$fichero = $_FILES['fichero']['tmp_name'];
        if (file_exists($fichero)) {
            $usuario = $_SESSION['usuario']->getCodigo();
            $xml = simplexml_load_file($fichero);
            $nombre = $xml->trk->name;
            $fechaInicio = $xml->metadata->time;
            date_default_timezone_set("Europe/Madrid"); 
			$fechaImportacion = date("Y-m-d\TH:i:s\Z", time());
            echo Track::insertarTrack(null, $usuario, true, $nombre, $fechaImportacion, $fechaInicio);
			foreach($xml->trk->trkseg->trkpt as $point){
				$latitud = $point->attributes()->lat;
				$longitud = $point->attributes()->lon;
				$tiempo = $point->time;
				$heartRate = 
				$elevacion = $point->ele;
			}
        }
	}
}
?>