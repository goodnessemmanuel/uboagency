'use strict';
$(window).on('load', function () {
    $(".load").fadeOut();
    $("#preloader").delay(400).fadeOut("slow");
})

function showPassword() {
    $("span.eye>i").toggleClass("fa-eye-slash fa-eye");
    let x = document.getElementById("password");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}

//document.ready function.
$(function ($) {
    if ($.fn.classyNav) {//note fn is an aliase for jquery prototype.
        $("#navMenu").classyNav();
    }

    //search area wrapper code
    var searchButton = $(".btnsearch");
    var searchWrapper = $(".search_wrapper");
    var closeSearch = $(".close_icon");

    searchButton.on("click", function () {
        refreshStates();//refresh states in the select tag dropdown of class "on" to default
        searchWrapper.toggleClass('on');

    });

    closeSearch.on("click", function () {
        searchWrapper.removeClass('on');
    });

    //banner slider effect code
    if ($.fn.owlCarousel) {
        var bannerSlide = $(".banner");
        bannerSlide.owlCarousel({
            items: 1,
            margin: 0,
            loop: true,
            nav: true,
            navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
            dots: true,
            autoplay: true,
            autoplayTimeout: 5000,
            smartSpeed: 800
        });

        bannerSlide.on('translate.owl.carousel', function () {
            var slideLayer = $("[data-animation]");
            slideLayer.each(function () {
                var anim_name = $(this).data('animation');
                $(this).removeClass('animated ' + anim_name).css('opacity', '0');
            });
        });

        bannerSlide.on('translated.owl.carousel', function () {
            var slideLayer = bannerSlide.find('.owl-item.active').find("[data-animation]");
            slideLayer.each(function () {
                var anim_name = $(this).data('animation');
                $(this).addClass('animated ' + anim_name).css('opacity', '1');
            });
        });

        $("[data-delay]").each(function () {
            var anim_del = $(this).data('delay');
            $(this).css('animation-delay', anim_del);
        });

        $("[data-duration]").each(function () {
            var anim_dur = $(this).data('duration');
            $(this).css('animation-duration', anim_dur);
        });

        //banner slider dots
        var dot = $('.banner  .owl-dot');
        dot.each(function () {
            var index = $(this).index();
            if (index < 5) {
                $(this).append('<i class="fa fa-circle"></i>');
            } else {
                $(this).html(index);
            }
        });

        var slideTestimonial = $('.testi_slider');
        if (slideTestimonial.length) {
            slideTestimonial.owlCarousel({
                loop: true,
                margin: 30,
                nav: false,
                dots: true,
                autoplay: false,
                smartSpeed: 1500,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    768: {
                        items: 2
                    }
                }
            });
        }
    }

    if ($.fn.sticky) {//note fn is an aliase for jquery prototype.
        $("nav").sticky({
            topSpacing: 0
        });
    }
    
});