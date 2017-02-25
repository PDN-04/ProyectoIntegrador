<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="js/main.js"></script>
    <link rel="icon" type="image/png" href="media/images/favicon.png" />
    <link rel="stylesheet" href="css/reset.css" />
    <link rel="stylesheet" href="css/fonts.css" />
    <link rel="stylesheet" href="css/effects.css" />
    <link rel="stylesheet" href="css/elements.css" />
</head>

	<body>
		<?php
	    $layout = "view/vInicio.php";
	    if (isset($_GET['location']) && isset($vistas[$_GET['location']])) {
	        $layout = $vistas[$_GET['location']];
	    }else {
	        $_GET['location'] = 'login';
	        $layout = $vistas[$_GET['location']];
	    }
	    include $layout;
	    ?>
	</body>
</html>