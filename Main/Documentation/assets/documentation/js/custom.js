(function ($) {
    "use strict"; // Start of use strict

// Preloader Start
    $(window).on('load',function () {
        // Onload Scroll To Top
        $(window).scrollTop(0);
    });
// Preloader End

// Change Menu Background Color Start
var navbar = document.querySelector('.main-menu nav')

window.onscroll = function() {

    // pageYOffset or scrollY or Scroll to top on load Start
    if (window.pageYOffset > 0) {
        navbar.classList.add('sticky')
    } else {
        navbar.classList.remove('sticky')
    };
    // pageYOffset or scrollY or Scroll to top on load End
}
// Change Menu Background Color End

})(jQuery); // End of use strict