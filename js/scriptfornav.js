/* =========================================
              Navigation
============================================ */

/* Show & Hide White Navigation */
$(function () {

  // show/hide nav on page load
  showHideNav();

  $(window).scroll(function () {

      // show/hide nav on window's scroll
      showHideNav();
  });

  function showHideNav() {

      if ($(window).scrollTop() > 50) {

          // Show white nav
          $("nav").addClass("white-nav-top");

          // Show back to top button
        //   $("#back-to-top").fadeIn();

      } else {

          // Hide white nav
          $("nav").removeClass("white-nav-top");

          // Hide back to top button
        //   $("#back-to-top").fadeOut();

      }
  }
});

/* =========================================
              Mobile Menu
============================================ */
$(function () {

    // Show mobile nav
    $("#mobile-nav-open-btn").click(function () {
        $("#mobile-nav").css("height", "100%");
    });
  
    // Hide mobile nav
    $("#mobile-nav-close-btn, #mobile-nav a").click(function () {
        $("#mobile-nav").css("height", "0%");
    });
  
  });
