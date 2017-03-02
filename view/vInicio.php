<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDLTCDEhxjL22D2sTBwfaIu5IlK1S68h2Q&callback=initMap" async defer></script>
    <script src="js/maps.js"></script>
    <link rel="stylesheet" href="css/interna.css" />
    <link rel="stylesheet" href="css/icons.css" />
    <title>Inicio</title>
</head>

<body>
    <header>
        <h1><a href="index.php?location=inicio">ALIMA</a></h1>
        <a href="index.php?location=perfil" class="perfil"><img src="media/images/login-responsive.png" alt=""></a>
        <a href="index.php?location=inicio&logoff=true" class="logoff"><img src="media/images/logoff.png" alt=""></a>
    </header>
    <main>
        <div class="fondo">
            <img src="media/images/background.jpg" alt="">
        </div>
        <section class="pag1">
            <div class="fondo1">
                <img src="media/images/background2-responsive.png" alt="">
            </div>
            <div class="fondo1-responsive">
                <img src="media/images/background2-responsive.png" alt="">
            </div>
            <div class="fondo2-responsive">
                <img src="media/images/background2-responsive.png" alt="">
            </div>
            <div class="contenido">
                <div class="parte1">
                    <div class="acordeon">
                        <div class="elemento">
                            <a href="#">Diciembre 2016</a>
                            <ul>
                                <li><a href="#">Subelemento 1</a></li>
                                <li><a href="#">Subelemento 2</a></li>
                                <li><a href="#">Subelemento 3</a></li>
                            </ul>
                        </div>
                        <div class="elemento">
                            <a href="#">Enero 2017</a>
                            <ul>
                                <li><a href="#">Subelemento 1</a></li>
                                <li><a href="#">Subelemento 2</a></li>
                                <li><a href="#">Subelemento 3</a></li>
                            </ul>
                        </div>
                        <div class="elemento">
                            <a href="#">Febrero 2017</a>
                            <ul>
                                <li><a href="#">Subelemento 1</a></li>
                                <li><a href="#">Subelemento 2</a></li>
                                <li><a href="#">Subelemento 3</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="parte2">
                	<div class="track">
                		<div class="titulo">
                			<span>Título de prueba</span>
                		</div>
                		<div class="datos">
                			<div class="informacion">
                				<table cellspacing="0">
                					<tr>
                                        <td><span class="icon-compass"></span></td>
                                        <td>DISTANCIA</td>
                                    </tr>
                                    <tr>
                                        <td><span class="icon-compass"></span></td>
                                        <td>TIEMPO</td>
                                    </tr>
                                    <tr>
                                        <td><span class="icon-compass"></span></td>
                                        <td>VELOCIDAD MEDIA</td>
                                    </tr>
                                    <tr>
                                        <td><span class="icon-compass"></span></td>
                                        <td>PULSACIONES</td>    
                                    </tr> 
                				</table>
                                <div class="opciones">
                                    <a href="#"><img src="media/images/borrar.png" alt=""></a>
                                    <a href="#"><img src="media/images/share.png" alt=""></a>
                                </div>
                			</div>
                			<div class="mapa" id="mapa">
        
                			</div>
                		</div>
                	</div>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <span>ALIMA</span>
        <div class="registrarse-footer">
            <a href="index.php?location=registro&registrar=true">¡Empieza ahora gratis!</a>
        </div>
        <span>Entonces... ¿Te apuntas?</span>
        <span>Contacto: domingueznavarropablo@gmail.com</span>
        <span>Copyright © 2017 | Pablo Domínguez Navarro</span>
    </footer>
</body>

</html>
