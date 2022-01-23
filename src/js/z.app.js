$(function() {
    App.init()
}), App = {
    init: function() {
        App.lazyLoad()
    },
    lazyLoad: function() {
        if ("loading" in HTMLImageElement.prototype) {
            document.querySelectorAll('img[loading="lazy"]').forEach(function(o) {
                o.src = o.dataset.src
            })
        } else {
            const o = document.createElement("script");
            o.src = "https://cdnjs.cloudflare.com/ajax/libs/lazysizes/4.1.8/lazysizes.min.js", document.body.appendChild(o)
        }
    }
};

$('.owl-carousel-homepage').owlCarousel({
    loop:true,
    margin:10,
    nav:false,
    dots: false,
    responsive:{
        0:{
            items:1.7
        }, 
        600:{
            items:2.6
        },
        1000:{
            center: true,
            items: 2.75,
            autoplay:true,
            autoplayTimeout:3000,
            autoplayHoverPause:true
        }
    }
})

$('.owl-carousel-sidepage').owlCarousel({
    loop:true,
    margin:10,
    nav:false,
    dots: false,
    responsive:{
        0:{
            items:1.3
        }, 
        600:{
            items:1.4
        },
        1000:{
            items: 1.75,
            autoplay:true,
            autoplayTimeout:3000,
            autoplayHoverPause:true
        }
    }
})

$('.owl-carousel-ordination').owlCarousel({
    loop:true,
    margin:10,
    nav:false,
    dots: false,
    responsive:{
        0:{
            items:1.3
        }, 
        600:{
            items:1.4
        },
        1000:{
            items: 1.8,
            autoplay:true,
            autoplayTimeout:3000,
            autoplayHoverPause:true
        }
    }
})

$('.owl-carousel-laboratory').owlCarousel({
    loop:true,
    margin:10,
    nav:false,
    dots: false,
    responsive:{
        0:{
            items:1.6
        }, 
        600:{
            items:1.4
        },
        1000:{
            items: 1.5,
            autoplay:true,
            autoplayTimeout:3000,
            autoplayHoverPause:true
        }
    }
})

// Disable form submissions if there are invalid fields
(function() {
    'use strict';
    window.addEventListener('load', function() {
      // Get the forms we want to add validation styles to
      var forms = document.getElementsByClassName('needs-validation');
      // Loop over them and prevent submission
      var validation = Array.prototype.filter.call(forms, function(form) {
        form.addEventListener('submit', function(event) {
          if (form.checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
          }
          form.classList.add('was-validated');
        }, false);
      });
    }, false);
  })();