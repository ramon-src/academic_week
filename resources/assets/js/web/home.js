/**
 * Created by ramon on 26/09/16.
 */

$(document).ready(function () {
    $('span').click(function (e) {
        var id = $(this).attr('slide-target');
        $.slideWhenClick(id);
    });
});

jQuery.slideWhenClick = function (id) {
    $('html, body').animate({
        scrollTop: $(id).offset().top
    }, 2000);
};