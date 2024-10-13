var menu = [];
jQuery('.home_renovation_workswiper-slide').each( function(index){
    menu.push( jQuery(this).find('.home_renovation_workslide-inner').attr("data-text") );
});
var interleaveOffset = 0.5;
var swiperOptions = {
    loop: true,
    speed: 1000,
    parallax: true,
    autoplay: {
        delay: 6500,
        disableOnInteraction: false,
    },
    watchSlidesProgress: true,
    pagination: {
        el: '.home_renovation_workswiper-pagination',
        clickable: true,
    },
    navigation: {
        nextEl: '.home_renovation_workswiper-button-next',
        prevEl: '.home_renovation_workswiper-button-prev',
    },
    on: {
        progress: function() {
            var swiper = this;
            for (var i = 0; i < swiper.slides.length; i++) {
                var slideProgress = swiper.slides[i].progress;
                var innerOffset = swiper.width * interleaveOffset;
                var innerTranslate = slideProgress * innerOffset;
                swiper.slides[i].querySelector(".home_renovation_workslide-inner").style.transform =
                "translate3d(" + innerTranslate + "px, 0, 0)";
            }      
        },

        touchStart: function() {
          var swiper = this;
          for (var i = 0; i < swiper.slides.length; i++) {
            swiper.slides[i].style.transition = "";
          }
        },

        setTransition: function(speed) {
            var swiper = this;
            for (var i = 0; i < swiper.slides.length; i++) {
                swiper.slides[i].style.transition = speed + "ms";
                swiper.slides[i].querySelector(".home_renovation_workslide-inner").style.transition =
                speed + "ms";
            }
        }
    }
};
var swiper = new Swiper(".home_renovation_workswiper-container", swiperOptions);


document.getElementById("scroll-down-btn").addEventListener("click", function() {
    document.querySelector("#ourservice-section").scrollIntoView({ 
        behavior: 'smooth' 
    });
});

