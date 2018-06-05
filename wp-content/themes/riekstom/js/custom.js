$(document).ready(function(){
    $(".owl-carousel.baner").owlCarousel({
        items : 1,
        loop : true,
        dots : false,
        nav : true,
    });    
    $(".owl-carousel.owl-reviews").owlCarousel({
        items : 2,
        loop : false,
        dots : false,
        nav : true,
    });    
    $(".reviews p").dotdotdot({
        height : 55,
        ellipsis : "\u2026",
        truncate : "word",
        watch: "word",
    });

    $(window).on("scroll", function() {myFunction()});

    function myFunction() {
        if (window.pageYOffset > 0) {
            $("header").addClass("sticky");
        } else {
            $("header").removeClass("sticky");
        }
    }
});