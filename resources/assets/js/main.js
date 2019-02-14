$(window).scroll(function(e){
    parallax();
});

function parallax(){
    var scrolled = $(window).scrollTop();
    $('#bimg2').css('background-position-y',-(scrolled * 0.4)+'px');
    $('#bimg3').css('background-position-y',-(scrolled * 0.3)+'px');
    $('#bimg4').css('background-position-y',-(scrolled * 0.1)+'px');
}


