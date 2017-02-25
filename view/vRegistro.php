<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <script src="js/registro.js"></script>
    <link rel="stylesheet" href="css/registro.css" />
    <title>Registro</title>
</head>

<body>
    <header>
        <h1>ALIMA</h1>
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
            <div class="horizontal">
                <p>Por favor, coloque su dispositivo verticalmente para seguir con el registro</p>
            </div>
            <div class="contenido">
                <h1>Registrarse</h1>
                <form>
                    <div class="parte1">
                        <p>
                            <label>Datos personales</label>
                            <input type="text" name="usuario" id="usuario" placeholder="Usuario">
                            <br>
                            <input type="password" name="password" id="password" placeholder="Contraseña">
                            <br>
                            <input type="password" name="password2" id="password2" placeholder="Repetir contraseña">
                            <br>
                            <input type="text" name="email" id="email" placeholder="E-mail">
                            <br>
                            <input type="text" name="nombre" id="nombre" placeholder="Nombre y Apellidos">
                            <br>
                            <label>Sexo</label>
                            <select name="sexo">
                                <option value="H">Hombre</option>
                                <option value="M">Mujer</option>
                            </select>
                        </p>
                        <p>
                            <label>Fecha de nacimiento</label>
                            <input id="dia" type="number" name="dia" min="1" max="31" placeholder="DD">
                            <input id="mes" type="number" name="mes" min="1" max="12" placeholder="MM">
                            <input id="anyo" type="number" name="anyo" min="1900" placeholder="AAAA">
                        </p>
                        <p>
                            <label>Estatura</label>
                            <input class="estatura" type="range" name="estatura" min="100" max="250" value="175"><span id="estatura">175 cm</span>
                        </p>
                        <p>
                            <label>Peso</label>
                            <input class="peso" type="range" name="peso" min="30" max="250" value="75"><span id="peso">75 kg</span>
                        </p>
                    </div>
                    <div class="parte2">
                        <div class="corredor">
                            <label>¿Qué tipo de corredor eres? (Opcional)</label>
                            <ul id="tabs">
                                <li class="tab1">Casual</li>
                                <li class="tab2">Medio fondo</li>
                                <li class="tab3">Fondo</li>
                                <li class="tab4">Trail</li>
                            </ul>
                            <div class="opciones">
                                <div id="tab1">¿Nuevo en esto?</div>
                                <div id="tab2">
                                    <label>¿Mejor tiempo en 5 Km?</label>
                                    <input type="text" placeholder="Tu tiempo en minutos">
                                    <label>¿Mejor tiempo en 10 Km?</label>
                                    <input type="text" placeholder="Tu tiempo en minutos">
                                    <label>¿Mejor tiempo en media maratón?</label>
                                    <input type="text" placeholder="Tu tiempo en minutos">
                                </div>
                                <div id="tab3">
                                    <label>¿Mejor tiempo en media maratón?</label>
                                    <input type="text" placeholder="Tu tiempo en minutos">
                                    <label>¿Mejor tiempo en maratón?</label>
                                    <input type="text" placeholder="Tu tiempo en minutos">
                                </div>
                                <div id="tab4">
                                    <label>¿Nombre de la carrera más larga?</label>
                                    <input type="text" placeholder="Nombre de la carrera">
                                    <label>¿Distancia?</label>
                                    <input type="text" placeholder="Distancia de la en km">
                                    <label>¿Tiempo empleado?</label>
                                    <input type="text" placeholder="Tu tiempo en minutos">
                                    <label>¿Desnivel?</label>
                                    <input type="text" placeholder="Desnivel en metros">
                                </div>
                            </div>
                        </div>
                        <div class="cardio">
                            <label>Zonas de frecuencia cardiaca (Opcional)</label>
                            <div class="zonas">
                                <label>Sprint</label>
                                <input type="text" id="sprint" value="">
                                <label>Velocidad</label>
                                <input type="text">
                                <label>Cardio</label>
                                <input type="text">
                                <label>Fitness</label>
                                <input type="text">
                                <label>Sencillo</label>
                                <input type="text">
                            </div>
                        </div>
                        <div class="registrarse">
                            <input type="submit" class="registro" name="registrarse" value="¡Registrarse!">
                        </div>
                    </div>
                </form>
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