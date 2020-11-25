require('./bootstrap');

require('alpinejs');
import 'owl.carousel/dist/assets/owl.carousel.css';
import 'owl.carousel';


$(document).ready(function () {
    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        responsiveClass: true,
        responsive: {
            980: {
                items: 3,
            },
            768: {
                items: 2,
            },
            375: {
                items: 1,
            },
        }
    });
});
