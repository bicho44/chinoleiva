// @codekit-prepend "transition.js", "carousel.js", "collapse.js", "dropdown.js", "modal.js", "tab.js", "affix.js", "vendor/owl.carousel.min.js"


(function(){
    //caches a jQuery object containing the header element
    var navbar = $(".navbar-default");
    $(window).scroll(function() {
        var scroll = $(window).scrollTop();

        if (scroll >= navbar.outerHeight(true)) {
            navbar.addClass("navbar-fixed-top");
        } else {
            navbar.removeClass("navbar-fixed-top");
        }
    });
}());


(function(){

    $("#SlideShow").owlCarousel({
        autoplayTimeout: 4000,
        autoplayHoverPause: true,
        loop: true,
        autoplay: true,
        items:1

    });

}());