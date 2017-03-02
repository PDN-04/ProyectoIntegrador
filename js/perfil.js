$(document).ready(function() {
    var seleccion = "";

    function confirmar() {
        $(".confirmacion-form").css("top", "15%");
        $(".confirmacion-background").css("top", "0%");
        $(".confirmacion-form").css("transition", "top .3s ease-in-out");
    }

    function correcto() {
        $(".confirmacion-form").css("top", "-100%");
        $(".confirmacion-background").css("top", "-100%");
        $(".confirmacion-form").css("transition", "top .3s ease-in-out");
        $(".correcto").css("top", "15%");
        $(".correcto-background").css("top", "0%");
        $(".correcto").css("transition", "top .3s ease-in-out");
    }

    function error() {
        $(".confirmacion-form").css("top", "-100%");
        $(".confirmacion-background").css("top", "-100%");
        $(".confirmacion-form").css("transition", "top .3s ease-in-out");
        $(".formConfirmacion #password").css("background-color", "#fff");

        $(".errores").css("top", "15%");
        $(".errores-background").css("top", "0%");
        $(".errores").css("transition", "top .3s ease-in-out");
    }
    $("form").submit(function(evento) {
        evento.preventDefault();
        confirmar();
    })
    $(".formPassword").submit(function(evento) {
        seleccion = "password";
    })
    $(".formEmail").submit(function(evento) {
        seleccion = "email";
    })
    $(".formNombre").submit(function(evento) {
        seleccion = "nombre";
    })
    $(".formFechaNac").submit(function(evento) {
        seleccion = "fechaNac";
    })
    $(".formEstatura").submit(function(evento) {
        seleccion = "estatura";
    })
    $(".formPeso").submit(function(evento) {
        seleccion = "peso";
    })
    $(".formConfirmacion").submit(function(evento) {
        evento.preventDefault();
        var datos = $(this).serializeArray();
        $.ajax({
                url: "index.php?location=perfil&formConfirmacion=true",
                type: "post",
                data: datos
            })
            .done(function(respuesta) {

                if (respuesta) {
                    if (seleccion == "password") {
                        var datos = $(".formPassword").serializeArray();
                        $.ajax({
                                url: "index.php?location=perfil&formPassword=true",
                                type: "post",
                                data: datos
                            })
                            .done(function(respuesta) {
                                if (respuesta == "||||||") {
                                    correcto();
                                } else {
                                    var errores = [];
                                    errores = respuesta.split("|");
                                    if (errores[0] != "|") {
                                        $('.error').append("<p>" + errores[0] + "</p>");
                                    }
                                    if (errores[1] != "|") {
                                        $('.error').append("<p>" + errores[1] + "</p>");
                                    }
                                    error();
                                }
                            })
                    }
                    if (seleccion == "email") {
                        var datos = $(".formEmail").serializeArray();
                        $.ajax({
                                url: "index.php?location=perfil&formEmail=true",
                                type: "post",
                                data: datos
                            })
                            .done(function(respuesta) {
                                if (respuesta == "||||||") {
                                    correcto();
                                } else {
                                    var errores = [];
                                    errores = respuesta.split("|");
                                    if (errores[0] != "|") {
                                        $('.error').append("<p>" + errores[2] + "</p>");
                                    }
                                    if (errores[1] != "|") {
                                        $('.error').append("<p>" + errores[3] + "</p>");
                                    }
                                    error();
                                }
                            })
                    }
                    if (seleccion == "nombre") {
                        var datos = $(".formNombre").serializeArray();
                        $.ajax({
                                url: "index.php?location=perfil&formNombre=true",
                                type: "post",
                                data: datos
                            })
                            .done(function(respuesta) {
                                if (respuesta == "||||||") {
                                    correcto();
                                } else {
                                    var errores = [];
                                    errores = respuesta.split("|");
                                    $('.error').append("<p>" + errores[4] + "</p>");
                                    error();
                                }
                            })
                    }
                    if (seleccion == "fechaNac") {
                        var datos = $(".formFechaNac").serializeArray();
                        $.ajax({
                                url: "index.php?location=perfil&formFechaNac=true",
                                type: "post",
                                data: datos
                            })
                            .done(function(respuesta) {
                                if (respuesta == "||||||") {
                                    correcto();
                                } else {
                                    var errores = [];
                                    errores = respuesta.split("|");
                                    $('.error').append("<p>" + errores[5] + "</p>");
                                    error();
                                }
                            })
                    }
                    if (seleccion == "estatura") {
                        var datos = $(".formEstatura").serializeArray();
                        $.ajax({
                                url: "index.php?location=perfil&formEstatura=true",
                                type: "post",
                                data: datos
                            })
                            .done(function(respuesta) {
                                if (respuesta == "||||||") {
                                    correcto();
                                }
                            })
                    }
                    if (seleccion == "peso") {
                        var datos = $(".formPeso").serializeArray();
                        $.ajax({
                                url: "index.php?location=perfil&formPeso=true",
                                type: "post",
                                data: datos
                            })
                            .done(function(respuesta) {
                                if (respuesta == "||||||") {
                                    correcto();
                                }
                            })
                    }
                } else {
                    $(".formConfirmacion #password").css("background-color", "#ff9395");
                }
            })

    })


    $('.errores-background').click(function() {
        $(".errores").css("top", "-100%");
        $(".errores-background").css("top", "-100%");
        $(".errores").css("transition", "top .3s ease-in-out");
        $(".error p").remove();
    });
    $('.errores #close').click(function() {
        $(".errores").css("top", "-100%");
        $(".errores-background").css("top", "-100%");
        $(".errores").css("transition", "top .3s ease-in-out");
        $(".error p").remove();
    });
    $('.correcto-background').click(function() {
        $(".correcto").css("top", "-100%");
        $(".correcto-background").css("top", "-100%");
        $(".correcto").css("transition", "top .3s ease-in-out");
    });
    $('.correcto #close').click(function() {
        $(".correcto").css("top", "-100%");
        $(".correcto-background").css("top", "-100%");
        $(".correcto").css("transition", "top .3s ease-in-out");
    });
    $('.confirmacion-background').click(function() {
        $(".confirmacion-form").css("top", "-100%");
        $(".confirmacion-background").css("top", "-100%");
        $(".confirmacion-form").css("transition", "top .3s ease-in-out");
        $(".formConfirmacion #password").css("background-color", "#fff");
    });
    $('.confirmacion-form #close').click(function() {
        $(".confirmacion-form").css("top", "-100%");
        $(".confirmacion-background").css("top", "-100%");
        $(".confirmacion-form").css("transition", "top .3s ease-in-out");
        $(".formConfirmacion #password").css("background-color", "#fff");
    });

});
