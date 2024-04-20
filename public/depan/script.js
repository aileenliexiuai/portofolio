/*!
* Start Bootstrap - Resume v7.0.6 (https://startbootstrap.com/theme/resume)
* Copyright 2013-2023 Start Bootstrap
* Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-resume/blob/master/LICENSE)

*/
//
// Scripts
// 
//<!-- Bootstrap Bundle dengan Popper -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>


window.addEventListener('DOMContentLoaded', event => {

    // Activate Bootstrap scrollspy on the main nav element
    const sideNav = document.body.querySelector('#sideNav');
    if (sideNav) {
        new bootstrap.ScrollSpy(document.body, {
            target: '#sideNav',
            rootMargin: '0px 0px -40%',
        });
    };

    // Collapse responsive navbar when toggler is visible
    const navbarToggler = document.body.querySelector('.navbar-toggler');
    const responsiveNavItems = [].slice.call(
        document.querySelectorAll('#navbarResponsive .nav-link')
    );
    responsiveNavItems.map(function (responsiveNavItem) {
        responsiveNavItem.addEventListener('click', () => {
            if (window.getComputedStyle(navbarToggler).display !== 'none') {
                navbarToggler.click();
            }
        });
    });
    let prevScrollpos = window.pageYOffset;

    window.onscroll = function() {
      let currentScrollPos = window.pageYOffset;
      if (prevScrollpos > currentScrollPos) {
        document.querySelector(".my-header").style.top = "0"; /* Geser navbar ke atas saat digulir ke bawah */
      } else {
        document.querySelector(".my-header").style.top = "-70px"; /* Sembunyikan navbar saat digulir ke atas */
      }
      prevScrollpos = currentScrollPos;
    }
    document.addEventListener('DOMContentLoaded', function () {
        var carousel = document.getElementById('carouselExampleCaptions');
        var nextButton = carousel.querySelector('.carousel-control-next');

        nextButton.addEventListener('click', function () {
            var activeItem = carousel.querySelector('.carousel-item.active');
            var nextItem = activeItem.nextElementSibling || carousel.querySelector('.carousel-item:first-child');

            activeItem.classList.remove('active');
            nextItem.classList.add('active');
        });
    });
  
$(document).ready(function(){
    var maxHeight = 0;
    $('.gallery-card .card-image img').each(function() {
        if ($(this).height() > maxHeight) {
            maxHeight = $(this).height();
        }
    });
    $('.gallery-card').css('height', maxHeight + 20); // Add some extra padding if needed
});


});
