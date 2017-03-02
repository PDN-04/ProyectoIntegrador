$(document).ready(function() {
    $("form").submit(function(evento) {
        evento.preventDefault();
        var datos = $(this).serializeArray();
        $.ajax({
                url: "index.php?location=login&login=true",
                type: "post",
                data: datos
            })
            .done(function(respuesta) {
                if (respuesta) {
                    window.location.href = "index.php?location=inicio";
                }
                else {
                    $(".error span").html("Usuario y/o contraseña incorrectos");
                    $(".error").css("display", "block");
                    $(".error").css("opacity", "1");
                    $(".error").css("transition", "opacity .2s ease-in-out");
                }
            })

    })

    $('.login-background').click(function() {
        $(".login-form .error").css("opacity", "0");
        $(".login-form .error").css("display", "none");
        $(".login-form").css("top", "-100%");
        $(".login-background").css("top", "-100%");
        $(".login-form").css("transition", "top .3s ease-in-out");
    });
    $('.login-form #close').click(function() {
        $(".login-form .error").css("opacity", "0");
        $(".login-form .error").css("display", "none");
        $(".login-form").css("top", "-100%");
        $(".login-background").css("top", "-100%");
        $(".login-form").css("transition", "top .3s ease-in-out");
    });
});