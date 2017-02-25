$(document).ready(function() {
    $("form").submit(function(evento) {
        evento.preventDefault();
        var datos = $(this).serializeArray();
        $.ajax({
                url: "index.php?location=registro&registro=true",
                type: "post",
                data: datos
            })
            .done(function(respuesta) {
                if (respuesta == "||||||") {
                    $( ".errores h1").remove();
                    $( ".error").remove();
                    $('.errores').append("<h1>Usuario dado de alta correctamente</h1>");
                    $('.errores').append("<a href='index.php?location=postRegistro&aceptar=true'>Aceptar</a>");
                }
                else {
                    var errores = [];
                    errores = respuesta.split("|");
                    if (errores[0] != "") {
                        $('.error').append("<p>" + errores[0] + "</p>");
                        $('#usuario').css("background-color","#ff9395");
                    }
                    else {
                        $('#usuario').css("background-color","#fff");
                    }
                    if (errores[1] != "") {
                        $('.error').append("<p>" + errores[1] + "</p>");
                        $('#password').css("background-color","#ff9395");
                        $('#password2').css("background-color","#ff9395");
                    }
                    if (errores[2] != "") {
                        $('.error').append("<p>" + errores[2] + "</p>");
                        $('#password').css("background-color","#ff9395");
                        $('#password2').css("background-color","#ff9395");
                    }
                    if (errores[1] == "" && errores[2] == "") {
                        $('#password').css("background-color","#fff");
                        $('#password2').css("background-color","#fff");
                    }
                    if (errores[3] != "") {
                        $('.error').append("<p>" + errores[3] + "</p>");
                        $('#email').css("background-color","#ff9395");
                    }
                    else {
                        $('#email').css("background-color","#fff");
                    }
                    if (errores[4] != "") {
                        $('.error').append("<p>" + errores[4] + "</p>");
                        $('#nombre').css("background-color","#ff9395");
                    }
                    else {
                        $('#nombre').css("background-color","#fff");
                    }
                    if (errores[5] != "") {
                        $('.error').append("<p>" + errores[5] + "</p>");
                        $('#dia').css("background-color","#ff9395");
                        $('#mes').css("background-color","#ff9395");
                        $('#anyo').css("background-color","#ff9395");
                    }
                    else {
                        $('#dia').css("background-color","#fff");
                        $('#mes').css("background-color","#fff");
                        $('#anyo').css("background-color","#fff");
                    }
                    
                }
                $(".errores").css("top", "15%");
                    $(".errores-background").css("top", "0%");
                    $(".errores").css("transition", "top .3s ease-in-out");
                    $('.errores-background').click(function() {
                        $(".errores").css("top", "-100%");
                        $(".errores-background").css("top", "-100%");
                        $(".errores").css("transition", "top .3s ease-in-out");
                        $( ".error p" ).remove();
                    });
                    $('.errores #close').click(function() {
                        $(".errores").css("top", "-100%");
                        $(".errores-background").css("top", "-100%");
                        $(".errores").css("transition", "top .3s ease-in-out");
                        $( ".error p" ).remove();
                    });
            })

    })
});
