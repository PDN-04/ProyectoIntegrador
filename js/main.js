$(document).ready(function() {
    $(".button").click(function() {
        $('body').animate({
            scrollTop: $(".pag2").offset().top
        }, 'slow');
    });
});
