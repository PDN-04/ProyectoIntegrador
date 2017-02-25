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
                    $(".error").css("opacity", "1");
                    $(".error").css("transition", "opacity 0.2s ease-in-out");
                }
            })

    })
});