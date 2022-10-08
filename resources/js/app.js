// BOOTSTRAP JS
require('./bootstrap');

// JQUERY JS
import $ from 'jquery';
window.$ = window.jQuery = $;
import 'jquery-ui/ui/widgets/datepicker.js';

// SWIPER JS
import { Autoplay, Navigation, Pagination } from "swiper";
import Swiper from "swiper";
Swiper.use([Autoplay, Navigation, Pagination]);

// CAMPAIGNS AREA JS
let swiper = new Swiper(".campaigns-swiper", {
    slidesPerView: 3,
    spaceBetween: 20,
    slidesPerGroup: 3,
    loop: true,
    loopFillGroupWithBlank: true,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    breakpoints: {
        320: {
            slidesPerView: 1,
            spaceBetween: 0,
        },
        768: {
            slidesPerView: 2,
            spaceBetween: 20,
        },
        1024: {
            slidesPerView: 3,
            spaceBetween: 20,
        }
    },
});
