$((function(){App.init()})),App={init:function(){App.lazyLoad()},lazyLoad:function(){if("loading"in HTMLImageElement.prototype)document.querySelectorAll('img[loading="lazy"]').forEach((function(e){e.src=e.dataset.src}));else{const e=document.createElement("script");e.src="https://cdnjs.cloudflare.com/ajax/libs/lazysizes/4.1.8/lazysizes.min.js",document.body.appendChild(e)}}},$(".owl-carousel-homepage").owlCarousel({loop:!0,margin:10,nav:!1,dots:!1,responsive:{0:{items:1.7},600:{items:2.6},1e3:{center:!0,items:2.75,autoplay:!0,autoplayTimeout:3e3,autoplayHoverPause:!0}}}),$(".owl-carousel-sidepage").owlCarousel({loop:!0,margin:10,nav:!1,dots:!1,responsive:{0:{items:1.3},600:{items:1.4},1e3:{items:1.75,autoplay:!0,autoplayTimeout:3e3,autoplayHoverPause:!0}}}),$(".owl-carousel-ordination").owlCarousel({loop:!0,margin:10,nav:!1,dots:!1,responsive:{0:{items:1.3},600:{items:1.4},1e3:{items:1.8,autoplay:!0,autoplayTimeout:3e3,autoplayHoverPause:!0}}}),$(".owl-carousel-laboratory").owlCarousel({loop:!0,margin:10,nav:!1,dots:!1,responsive:{0:{items:1.6},600:{items:1.4},1e3:{items:1.5,autoplay:!0,autoplayTimeout:3e3,autoplayHoverPause:!0}}})((function(){"use strict";window.addEventListener("load",(function(){var e=document.getElementsByClassName("needs-validation");Array.prototype.filter.call(e,(function(e){e.addEventListener("submit",(function(o){!1===e.checkValidity()&&(o.preventDefault(),o.stopPropagation()),e.classList.add("was-validated")}),!1)}))}),!1)}))();