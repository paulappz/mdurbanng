    $(document).ready(function() {
        $(window).scroll(function() {
            if (($(document).scrollTop() > 100) && ($(window).width() > 768)) {
                $('.navbar').addClass('shrink');
            } else {
                $('.navbar').removeClass('shrink');
            }
        });

    });
    $('ul.nav').find('a').click(function() {
        var $href = $(this).attr('href');
        var $anchor = $($href).offset();
        // window.scrollTo($anchor.left, $anchor.top);
        $('html,body').animate({
            scrollTop: $anchor.top
        }, 'slow');
        return false;
    });