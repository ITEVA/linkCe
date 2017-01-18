/**
 * Created by MC 88 on 18/01/2017.
 */

$(document).ready(function() {
    $('.iframeMapa').addClass('scrolloff');
    $('.mapa').on('click', function () {
        $('.iframeMapa').removeClass('scrolloff');
    });

    $(".iframeMapa").mouseleave(function () {
        $('.iframeMapa').addClass('scrolloff');
    });

    $('#aviso').fadeIn().delay(1500).fadeOut(function () {
        $(this).remove()
        window.location.replace("/contato");
    });
});
