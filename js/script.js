
jQuery(function($){

/* Telephone Mask */
   $("input[name=your-phone]").mask("+38 (999) - 999 - 99 - 99",{placeholder:"+38 (___) - ___ - __ - __"});

   $('.grid').isotope({
     layoutMode: 'packery'
    });

    $('.also').owlCarousel({
      //items: 5,

      responsive: {
        0: {
          items: 1
        },
        600 : {
          items: 2
        },
        767 : {
          items: 3
        },
        1191: {
          items: 4
        }
      },
      nav: true
    });
});
