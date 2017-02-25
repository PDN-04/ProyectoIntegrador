$(document).ready(function() {
    $(document).keydown(function(event) {
        if (event.ctrlKey == true && (event.which == '107' || event.which == '109')) {
            event.preventDefault();
        }
    });
    $(window).bind('mousewheel DOMMouseScroll', function(event) {
        if (event.ctrlKey == true) {
            event.preventDefault();
        }
    });
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

    $('#tabs li').click(function(evento) {
        evento.preventDefault();
        $(".opciones div").hide();
        $("#tabs li").attr("id", "");
        $(this).attr("id", "current");
        $('#' + $(this).attr('class')).fadeIn();
    });
    $('.login').click(function(evento) {
        evento.preventDefault();
        $(".login-form").css("top", "15%");
        $(".login-background").css("top", "0%");
        $(".login-form").css("transition", "top .3s ease-in-out");
    });
    $('.login-background').click(function() {
        $(".login-form").css("top", "-100%");
        $(".login-background").css("top", "-100%");
        $(".login-form").css("transition", "top .3s ease-in-out");
    });
    $('.login-form #close').click(function() {
        $(".error").css("opacity", "0");
        $(".login-form").css("top", "-100%");
        $(".login-background").css("top", "-100%");
        $(".login-form").css("transition", "top .3s ease-in-out");
    });

    $('.acordeon .elemento ul').not('.elemento .activo + .elemento ul').hide();
    $('.acordeon .elemento > a').click(function(evento) {
        evento.preventDefault();
        if ($(this).hasClass('activo')) {
            $(this).removeClass('activo');
            $(this).next().slideUp();
        } else {
            $('.acordeon .elemento > a').removeClass('activo');
            $(this).addClass('activo');
            $('.acordeon .elemento ul').slideUp();
            $(this).next().slideDown();
        }
    });
});
