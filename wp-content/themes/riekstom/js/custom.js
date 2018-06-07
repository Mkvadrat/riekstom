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

    $(window).on("scroll", function() {myFunction()});
    function myFunction() {
        if (window.pageYOffset > 0) {
            $("header").addClass("sticky");
        } else {
            $("header").removeClass("sticky");
        }
    }

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
});