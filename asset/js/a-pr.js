$(document).ready(function() {
    $('.categories ul li').addClass('col-sm-6 col-md-4');
    $('.categories ul li a').append($("<span class='button'></span>"));
    $('.last:nth-child(4)').addClass('visible-sm');

    $('iframe').wrap("<div class='iframe-flexible-container'></div>");

    var x = $('.all-cat-ol li:first-child');
    x.removeClass('col-sm-6 col-md-4 col-lg-3');
    x.addClass('col-sm-12 col-md-8');

});
