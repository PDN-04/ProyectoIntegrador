<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDLTCDEhxjL22D2sTBwfaIu5IlK1S68h2Q&callback=initMap" async defer></script>
    <script src="js/inicio.js"></script>
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
                    <form method="post" action="index.php?location=importar&formImportar=true" id="formImportar" enctype="multipart/form-data"> 
                        <label>
                            <img src="media/images/plus.png"/>
                            <input id="fichero" name="fichero" type="file"/>
                        </label> 
                   </form>
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
                			<span>
                                <a href="#"></a>
                                <a href="#"></a>
                                Título de prueba
                            </span>
                		</div>
                		<div class="datos">
                			<div class="informacion">
                				<div class="valores">
                                    <div class="valor">
                                        <span class="icon-compass"></span>
                                        <span>DISTANCIA TOTAL</span>
                                        <span>10.2<div class="unidad"> KM</div></span>
                                    </div>
                                    <div class="valor">
                                        <span class="icon-alarm"></span>
                                        <span>TIEMPO TOTAL</span>
                                        <span>01:12:32</span>
                                    </div>
                                    <div class="valor">
                                        <span class="icon-speed"></span>
                                        <span>DISTANCIA MEDIA</span>
                                        <span>5<div class="unidad"> M/S</div></span>
                                    </div>
                                    <div class="valor">
                                        <span class="icon-maxheart"></span>
                                        <span>PULSACIONES MÁX</span>
                                        <span>115</span>
                                    </div>
                                    <div class="valor">
                                        <span class="icon-heart"></span>
                                        <span>PULSACIONES MED</span>
                                        <span>75</span>
                                    </div>
                                    <div class="valor">
                                        <span class="icon-ascdes"></span>
                                        <span>DESNIVEL ACUM</span>
                                        <span>115<div class="unidad"> M</div></span>
                                    </div>
                                    <div class="valor">
                                        <span class="icon-ascent"></span>
                                        <span>ASCENSO</span>
                                        <span>145<div class="unidad"> M</div></span>
                                    </div>
                                    <div class="valor">
                                        <span class="icon-descent"></span>
                                        <span>DESCENSO</span>
                                        <span>196<div class="unidad"> M</div></span>
                                    </div>
                                    <div class="valor">
                                        <span class="icon-fire"></span>
                                        <span>CALORIAS</span>
                                        <span>752<div class="unidad"> KCAL</div></span>
                                    </div>
                                </div>
                			</div>
                			<div class="mapa" id="mapa"></div>
                		</div>
                	</div>
                    <div class="pulsaciones">
                        <canvas class="grafico">
                            
                        </canvas>
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
