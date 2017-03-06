<?php
    $codigo = $_SESSION["usuario"] -> getCodigo();
    $email = $_SESSION["usuario"] -> getEmail();
    $nombre = $_SESSION["usuario"] -> getNombre();
    $fechaNac = $_SESSION["usuario"] -> getFechaNac();
    list($dia, $mes, $anyo) = explode('-', $fechaNac);
    $estatura = $_SESSION["usuario"] -> getEstatura();
    $peso = $_SESSION["usuario"] -> getPeso();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <script src="js/perfil.js"></script>
    <link rel="stylesheet" href="css/perfil.css" />
    <title>Perfil</title>
</head>

<body>
    <header>
        <h1><a href="index.php?location=login">ALIMA</a></h1>
    </header>
    <div class="errores">
        <h1>Se han encontrado los siguientes errores</h1>
        <div class="error"></div>
        <div class="close">
            <img src="media/images/close.png" id="close" alt="">
        </div>
    </div>
    <div class="errores-background">
    </div>
    <div class="correcto">
        <h1>El campo se ha modificado correctamente</h1>
        <div class="close">
            <img src="media/images/close.png" id="close" alt="">
        </div>
    </div>
    <div class="correcto-background">
    </div>
    <div class="confirmacion-form">
        <form class="formConfirmacion">
            <span>Introduzca su contraseña</span>
            <p>
                <input type="password" id="password" name="passwordConfirmacion" placeholder="Contraseña">
            </p>
            <p>
                <input type="submit" id="enviar" name="enviar" value="Enviar">
            </p>
            <div class="close">
                <img src="media/images/close.png" id="close" alt="">
            </div>
        </form>
    </div>
    <div class="confirmacion-background">
    </div>
    <main>
        <div class="fondo">
            <img src="media/images/background.jpg" alt="">
        </div>
        <section class="pag1">
            <div class="fondo1">
                <img src="media/images/background-login.png" alt="">
            </div>
            <div class="fondo1-responsive">
                <img src="media/images/background2-responsive.png" alt="">
            </div>
            <div class="fondo2-responsive">
                <img src="media/images/background2-responsive.png" alt="">
            </div>
            <div class="contenido">
                <h1>Modificar el perfil de <?php echo $codigo ?></h1>
                <div class="parte1">
                    <form class="formPassword">
                        <p>
                            <label>Contraseña</label>
                            <input type="password" name="password" id="password" placeholder="Contraseña">
                            <br>
                            <input type="password" name="password2" id="password2" placeholder="Repetir contraseña">
                            <br>
                            <div class="boton">
                                <input type="submit" class="registro" name="cambiarPassword" value="Cambiar contraseña">
                            </div>
                        </p>
                    </form>
                    <form class="formEmail">
                        <p>
                            <label>E-mail</label>
                            <input type="text" name="email" id="email" placeholder="E-mail" value="<?php echo $email ?>">
                            <div class="boton">
                                <input type="submit" class="registro" name="cambiarEmail" value="Cambiar E-mail">
                            </div>
                        </p>
                    </form>
                    <form class="formNombre">
                        <p>
                            <label>Nombre y apellidos</label>
                            <input type="text" name="nombre" id="nombre" placeholder="Nombre y Apellidos" value="<?php echo $nombre ?>">
                            <div class="boton">
                                <input type="submit" class="registro" name="cambiarNombre" value="Cambiar nombre">
                            </div>
                        </p>
                    </form>
                </div>
                <div class="parte2">
                    <form class="formFechaNac">
                        <p>
                            <label>Fecha de nacimiento</label>
                            <input id="dia" type="number" name="dia" min="1" max="31" placeholder="DD" value="<?php echo $dia ?>">
                            <input id="mes" type="number" name="mes" min="1" max="12" placeholder="MM" value="<?php echo $mes ?>">
                            <input id="anyo" type="number" name="anyo" min="1900" placeholder="AAAA" value="<?php echo $anyo ?>">
                            <div class="boton">
                                <input type="submit" class="registro" name="cambiarFecha" value="Cambiar fecha nacimiento">
                            </div>
                        </p>
                    </form>
                    <form class="formEstatura">
                        <p>
                            <label>Estatura</label>
                            <input class="estatura" type="range" name="estatura" min="100" max="250" value="<?php echo $estatura ?>"><span id="estatura"><?php echo $estatura ?> cm</span>
                            <div class="boton">
                                <input type="submit" class="registro" name="cambiarEstatura" value="Cambiar estatura">
                            </div>
                        </p>
                    </form>
                    <form class="formPeso">
                        <p>
                            <label>Peso</label>
                            <input class="peso" type="range" name="peso" min="30" max="250" value="<?php echo $peso ?>"><span id="peso"><?php echo $peso ?> kg</span>
                            <div class="boton">
                                <input type="submit" class="registro" name="cambiarPeso" value="Cambiar peso">
                            </div>
                        </p>
                    </form>
                    <form class="formBorrar">
                        <p>
                            <div class="boton">
                                <input type="submit" class="registro" name="borrarUsuario" value="Borrar usuario">
                            </div>
                        </p>
                    </form>
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