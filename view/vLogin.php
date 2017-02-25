<!DOCTYPE html>
<html lang="en">
	<head>
		<link rel="stylesheet" href="css/login.css" />
		<script src="js/login.js"></script>
    	<title>Login</title>
	</head>
	<body>
		<header>
	        <h1><a href="index.php?location=login">ALIMA</a></h1>
	        <a href="index.php?location=registro" class="registrarse">Registrarse</a>
	        <a href="#" class="login"><span>Iniciar Sesión</span><img src="media/images/login-responsive.png" alt=""></a>
	    </header>
	    <div class="login-form">
	        <form>
	            <h1>Iniciar Sesión</h1>
	            <div class="error">
	            	<span></span>
	            </div>
	            <p>
	                <input type="text" id="user" name="user" placeholder="Usuario">
	            </p>
	            <p>
	                <input type="password" id="password" name="password" placeholder="Contraseña">
	            </p>
	            <p>
	                <input type="submit" name="login" value="Iniciar Sesión">
	            </p>
	            <div class="close">
	                <img src="media/images/close.png" id="close" alt="">
	            </div>
	        </form>
	    </div>
	    <div class="login-background">
	    </div>
	    <main>
	        <div class="fondo">
	            <img src="media/images/background.jpg" alt="">
	        </div>
	        <section class="pag1">
	            <div class="fondo1">
	                <img src="media/images/background1.png" alt="">
	            </div>
	            <div class="fondo1-responsive">
	                <img src="media/images/background2-responsive.png" alt="">
	            </div>
	            <div class="contenido">
	                <h1>Hay un millón de razones para correr</h1>
	                <span>Alima es una web donde podrás anotar,ver y analizar estádisticas de tus actividades físicas para ayudarte a mantenerte en forma.</span>
	                <a href="index.php?location=registro">¡Empieza ahora gratis!</a>
	            </div>
	            <div class="down">
	                <img class="button" src="media/images/down.png" alt="">
	            </div>
	        </section>
	        <section class="pag2">
	            <div class="fondo2">
	                <img src="media/images/background2.png" alt="">
	            </div>
	            <div class="fondo2-responsive">
	                <img src="media/images/background2-responsive.png" alt="">
	            </div>
	            <div class="contenido">
	                <div class="parte1">
	                    <div class="texto">
	                        <h1>Hay un millón de razones para correr</h1>
	                        <span>Alima es una web donde podrás anotar,ver y analizar estádisticas de tus actividades físicas para ayudarte a mantenerte en forma.</span>
	                    </div>
	                    <div class="mobile">
	                        <img src="media/images/mobile.png" alt="">
	                    </div>
	                </div>
	                <div class="parte2">
	                    <div class="texto">
	                        <h1>Comparte tus registros con todo el mundo</h1>
	                        <span>Muéstrales a tus amigos tus avances deportivos a traves de redes sociales como Facebook, Twitter e Instagram</span>
	                    </div>
	                    <div class="mobile">
	                        <img src="media/images/mobile1.png" alt="">
	                    </div>
	                </div>
	            </div>
	        </section>
	    </main>
	    <footer>
	        <span>ALIMA</span>
	        <div class="registrarse-footer">
	            <a href="index.php?location=registro">¡Empieza ahora gratis!</a>
	        </div>
	        <span>Entonces... ¿Te apuntas?</span>
	        <span>Contacto: domingueznavarropablo@gmail.com</span>
	        <span>Copyright © 2017 | Pablo Domínguez Navarro</span>
	    </footer>
	</body>
</html>