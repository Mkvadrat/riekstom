$(document).ready(function(){
    $(".owl-carousel.baner").owlCarousel({
        items : 1,
        loop : false,
        dots : false,
        nav : true,
    });    

    $('.reviews-slider .reviews p, .examples div p a').dotdotdot({
        height : 55,
        ellipsis : "\u2026",
        truncate : "word",
        watch: "word",
    });
    $('.article p').dotdotdot({
        height : 120,
        ellipsis : "\u2026",
        truncate : "word",
        watch: "word",
    });
    $('.article a.sub-title, .shares p').dotdotdot({
        height : 65,
        ellipsis : "\u2026",
        truncate : "word",
        watch: "word",
    });
    /* $('aside.right-side-links a').dotdotdot({
        height : 102,
        ellipsis : "\u2026",
        truncate : "word",
        watch: "word",
    }); */

    $(window).on("scroll", function() {
        if (window.pageYOffset > 200) {
            $("header").addClass("sticky");
        } else {
            $(".sticky").animate({'top':'0'},1500,$("header").removeClass("sticky"));
        }
    });

    $('.services-list span').on('click', function() {
        if($(this).is('.active-rubric')) {
            $('.services-list span').removeClass('active-rubric');
            return $('.services-list ul').slideUp();
        }
        $('.services-list span').removeClass('active-rubric');
        if($(this).next('ul')) {
            $(this).toggleClass('active-rubric');
            $('.services-list ul').slideUp();
            return $(this).next().slideToggle();
        }
    });
   
    $('form .accept label').on('click', function(){
        $('.check-arrow').toggle();
    });

    $(".phone").mask("+7(999) 999-9999");
    
    $('.accept label').on('click', function(){
        $('.check-arrow').toggle();
        return Attreb();
    });
    function Attreb() {
        return ($('.accept input').prop('checked')) ? $('.accept button').attr('disabled', true) : $('.accept button').attr('disabled', false);
    }

    if($('.menu a+.drop-menu').is('a+.drop-menu')) {
        $('a+.drop-menu').parent('li').addClass('drop');
    }


    $('section:not(header+section)').addClass('faden-section');
    $('.faden-section').each(function(i) {
        var $winows = ($(window).innerHeight() + $(window).scrollTop());
        var $targer = ($(this).offset().top + 200);
        if($winows > $targer) {
            $(this).animate({'opacity':'1'},500);
        }
    });
    $(window).on("scroll", function() {
        $('.faden-section').each( function(i) {
            var $winows = ($(window).innerHeight() + $(window).scrollTop());
            var $targer = ($(this).offset().top + 200);
            if($winows > $targer) {
                $(this).animate({'opacity':'1'},500);
            }
        });
            /* if(($(window).innerHeight() + $(window).scrollTop()) >= $('section.faden-section:first').offset().top ) {
                $('section.faden-section:first').fadeIn().removeClass('faden-section');
            } */
    });
});