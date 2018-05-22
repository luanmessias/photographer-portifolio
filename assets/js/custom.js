$(document).ready(function() {
    var bodyheight = $(window).height();
    $(".home-front").height(bodyheight);
    $('.bxslider').bxSlider();
    $(window).on("resize", function() {
        $(".home-front").height(bodyheight);
    });
});

$('.bt-aside').click(function(event) {
    $('.aside').toggleClass("open");
    $('.wrapp').toggleClass("open");
    if ($('span', this).hasClass('glyphicon-minus')) {
        $('span', this).removeClass('glyphicon-minus').addClass('glyphicon-plus');
        $('.col-logo .logo').fadeTo("slow", 1);
        $('.aside-logo img').fadeTo("slow", 0);
    } else {
        $('span', this).removeClass('glyphicon-plus').addClass('glyphicon-minus');
        $('.col-logo .logo').fadeTo("slow", 0);
        $('.aside-logo img').fadeTo("slow", 1);
    }
});



$(window).load(function() {
    if (window.innerWidth < 700) {
        $('.bt-aside').click();
        $('span', this).removeClass('glyphicon-minus').addClass('glyphicon-plus');
    };
});


$(document).on('click', '[data-toggle="lightbox"]', function(event) {
    event.preventDefault();
    $(this).ekkoLightbox();
});

$('a').click(function(event) {
    var linkStr = $(this).attr('href');
    if (linkStr.indexOf('#') == 0) {
        event.preventDefault();
        $('html,body').animate({ scrollTop: $(this.hash).offset().top }, 1000);
    }
})