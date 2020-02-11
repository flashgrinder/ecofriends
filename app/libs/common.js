document.addEventListener('DOMContentLoaded', function(e){

    var mobMenu = document.querySelector('.burger');
    var menuToggle = document.querySelector('.navigation-block');

    // mobMenu.addEventListener('click', function(e) {
    //     menuToggle.classList.toggle('navigation-block_active');
    //     e.preventDefault;
    // })

    var blog = document.querySelector('.blog');
    var single = document.querySelector('.single');
    var menu = document.querySelector('.header');
    var logo = document.querySelector('.logo__text');
    var headerContainer = document.querySelector('.header-container');

    if(blog || single) {
        menu.style.background = '#585858';
        menu.style.paddingBottom = '17px';
        logo.style.display = 'none';
        headerContainer.style.paddingBottom = '0';
    } else if(!blog || !single) {
        menu.paddingBottom = '0'
    }

    var sliderTeam = new Swiper ('.team-block__slider', {
        direction: 'horizontal',
        loop: true,
        slidesPerView: 5,
        slidesPerGroup: 5,
        loopFillGroupWithBlank: true,
        watchSlidesProgress: true,
        speed: 1000,
        autoplay: {
            delay: 4000
        },
        breakpoints: {
            575: {
                slidesPerView: 1,
                slidesPerGroup: 1
            },
            767: {
                slidesPerView: 2,
                slidesPerGroup: 2
            },
            1024: {
                slidesPerView: 3,
                slidesPerGroup: 3
            },
            1280: {
                slidesPerView: 4,
                slidesPerGroup: 4
            }
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        }
    });

    var sliderCenter = new Swiper ('.slider-block__project', {
        direction: 'horizontal',
        loop: true,
        speed: 2000,
        effect: 'fade',
        autoplay: {
            delay: 4000
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        }
    });

    $('[data-fancybox="gallery"]').fancybox({
        afterLoad : function(instance, current) {
            var pixelRatio = window.devicePixelRatio || 1;
    
            if ( pixelRatio > 1.5 ) {
                current.width  = current.width  / pixelRatio;
                current.height = current.height / pixelRatio;
            }
        },
        loop: true,
        selector : '.gallery-block__container a:visible',
        buttons: [
            "share",
            "slideShow",
            "fullScreen",
            "thumbs",
            "close"
        ],
    });

    // $('[data-fancybox="blog"]').fancybox({
    //     afterLoad : function(instance, current) {
    //         var pixelRatio = window.devicePixelRatio || 1;
    
    //         if ( pixelRatio > 1.5 ) {
    //             current.width  = current.width  / pixelRatio;
    //             current.height = current.height / pixelRatio;
    //         }
    //     },
    //     loop: true,
    //     selector : '.galleryMasonry a:visible',
    //     buttons: [
    //         "share",
    //         "slideShow",
    //         "fullScreen",
    //         "thumbs",
    //         "close"
    //     ],
    // });

});