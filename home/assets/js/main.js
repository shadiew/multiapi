/*
 * Copyright (c) 2019 ThemesHolder
 * Author: ThemesHolder
 * This file is made for CURRENT TEMPLATE
*/
jQuery(document).ready(function($){

    "use strict";


        //=================
        // Scroll It active
        //=================
        $.scrollIt({
            upKey: 38, // key code to navigate to the next section
            downKey: 40, // key code to navigate to the previous section
            easing: 'linear', // the easing function for animation
            scrollTime: 1300, // how long (in ms) the animation takes
            activeClass: 'active', // class given to the active nav element
            onPageChange: null, // function(pageIndex) that is called when page is changed
            topOffset: -70, // offste (in px) for fixed top navigation
        });
       
        //==================
        // Sticky Menu
        //==================
        $(window).on('scroll', function() {
            if ($(this).scrollTop() > 400) {
                $('.sticky-header').addClass("sticky animated fadeInDown");
            } else {
                $('.sticky-header').removeClass("sticky animated fadeInDown");
            }
        });
       
        //==============
        // Mobile mneu
        //==============
        $('.main-menu').slicknav({
            prependTo: '#mobile-menu',
            label: '',
        });
      
       
        //=================
        // Testimonial
        //==================
        $("#testimonial-active").owlCarousel({
            items:3,
            smartSpeed:1000,
            loop: true,
            margin: 30,
            dots: false,
            center: true,
            nav: false,
            navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
            autoplay: true,
            autoplayTimeout: 4000,
            responsive : {

                0 : {
                    items:1
                },
                768 : {
                    items:1
                },
                992 : {
                    items:3
                }
            }

        });


       
        //================
        // Client Logo Carousel
        //===============
        $(".client-logo-carousel").owlCarousel({
            loop:true,
            nav:false,
            smartSpeed:1000,
            margin: 30,
            dots: false,
            autoplay:true,
            autoplayTimeout: 3000,
            responsive:{
                0:{
                    items: 2,
                    margin: 0,
                },
                480:{
                    items: 3
                },
                768:{
                    items: 5
                },
                992:{
                    items: 5
                }
            }
        });
       
        //================
        // Video Popup
        //===============
        $(".video-play-button").magnificPopup({
            type: 'video'
        }); 


        //======================
        // Apps Screenshot Slide
        //======================
        function getSlide() {
            var wW = $(window).width();
            if (wW < 901) {
                return 1;
            }
            return 3;
        }
        var mySwiper = $(".screen_carousel").swiper({
            mode:'horizontal',
            loop: true,
            speed: 1000,
            autoplay: 1000,
            effect: 'coverflow',
            slidesPerView: getSlide(),
            grabCursor: true,
            pagination: '.screen-pagination',
            paginationClickable: true,
            keyboardControl: true,
            coverflow: {
                rotate: 10,
                stretch: 90,
                depth: 300,
                modifier: 1,
                slideShadows : true
            },
            observer: true, 
            observeParents: true,

        }); 
       

 
    });
 
    $(window).on ('load', function (){
        //================
        //  Preloader
        //================
        setTimeout(function() {
            $('.main-site').addClass('loaded');
        }, 500);
    });

     //================
        // Scroll To Top
        //===============

         $(window).on ('scroll', function () {
	        if ($(this).scrollTop() > 300) {
	            $('.scrollup').fadeIn();
	        } else {
	            $('.scrollup').fadeOut();
	        }
	    });

	    $('.scrollup').on ('click', function () {
	        $("html, body").animate({
	            scrollTop: 0
	        }, 1500);
	        return false;
	    });
 
