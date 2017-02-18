$(document).ready(function() {
    $(".button").click(function() {
        $('body').animate({
            scrollTop: $(".pag2").offset().top
        }, 'slow');
    });
    $(".estatura").on("input", function() {
        variable = this.value;
        if (variable == $(".estatura").prop('max')) {
            $("#estatura").text("> " + variable + " cm");
        } else {
            if (variable == $(".estatura").prop('min')) {
                $("#estatura").text("< " + variable + " cm");
            } else {
                $("#estatura").text(variable + " cm");
            }
        }

    });
    $(".peso").on("input", function() {
        variable = this.value;
        if (variable == $(".peso").prop('max')) {
            $("#peso").text("> " + variable + " kg");
        } else {
            if (variable == $(".peso").prop('min')) {
                $("#peso").text("< " + variable + " kg");
            } else {
                $("#peso").text(variable + " kg");
            }
        }

    });
    $(".opciones div").hide();
    $("#tabs li:first").attr("id", "current");
    $(".opciones div:first").fadeIn();

    $('#tabs a').click(function(evento) {
        evento.preventDefault();
        $(".opciones div").hide();
        $("#tabs li").attr("id", "");
        $(this).parent().attr("id", "current");
        $('#' + $(this).attr('class')).fadeIn();
    });
    $('#calcular').click(function(evento) {
        evento.preventDefault();
        // $('#sprint').val($('#dia').val());
    });
});
