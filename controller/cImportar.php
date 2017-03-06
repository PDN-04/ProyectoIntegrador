<?php
if (!isset($_SESSION['usuario'])) {
	header("refresh:0; url = index.php?location=login");
}
else {
	if (isset($_GET['formImportar'])) {
		
		$fichero = $_FILES['fichero']['tmp_name'];
        if (file_exists($fichero)) {
        	echo "El fichero se ha cargado correctamente pero debido a la falta de tiempo está opción no está implementada, así que vuelve a la pestaña anterior. Mala suerte ¯\_(ツ)_/¯";
   //          $xml = simplexml_load_file($fichero);
			// foreach($xml->trk->trkseg->trkpt as $point){
			// 	$latitud = $point->attributes()->lat;
			// 	$longitud = $point->attributes()->lon;
			// 	$tiempo = $point->time;
			// 	$heartRate = 
			// 	$elevacion = $point->ele;
			// }
        }
	}
}
?>