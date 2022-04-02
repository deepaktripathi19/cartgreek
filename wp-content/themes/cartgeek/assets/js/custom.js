$(document).ready(function() {
         
           $('.trustedCarousel').owlCarousel({
         
             loop: false,
         
             margin: 30,
         
             dot:false,
         
             responsiveClass: true,
         
             responsive: {
         
               0: {
         
                 items: 1,
         
                 nav: true
         
               },
         
               600: {
         
                 items: 2,
         
                 nav: true
         
               },
         
               1000: {
         
                 items: 3,
         
                 nav: true,
         
               }
         
             }
         
           })
         
         
         
           $('#ecommerceCarousel').owlCarousel({
         
             loop: false,
         
             margin: 0,
         
             dot:false,
         
             autoplay:true,
         
             autoplayTimeout:4000,
         
             autoplayHoverPause:true,
         
             responsiveClass: true,
         
             responsive: {
         
               0: {
         
                 items: 1,
         
                 nav: true,
         
               },
         
               600: {
         
                 items: 1,
         
                 nav: true,
         
               },
         
               1000: {
         
                 items: 1,
         
                 nav: true,
         
               }
         
             }
         
           })
         
         
         
           $('.tipsCarousel').owlCarousel({
         
             loop: false,
         
             margin: 40,
         
             dot:false,
         
             autoplay:true,
         
             autoplayTimeout:4000,
         
             autoplayHoverPause:true,
         
             responsiveClass: true,
         
             responsive: {
         
               0: {
         
                 items: 1,
         
                 nav: true,
         
               },
         
               600: {
         
                 items: 1,
         
                 nav: true,
         
               },
         
               1000: {
         
                 items: 2,
         
                 nav: true,
         
               }
         
             }
         
           })
         
         
         
           $('.tabs-nav a').click(function() {
         
         
         
             $('.tabs-nav li').removeClass('active');
         
             $(this).parent().addClass('active');
         
         
         
             let currentTab = $(this).attr('href');
         
             $('.tabs-content .tabsBody').hide();
         
             $(currentTab).show();
         
         
         
             return false;
         
           });
         
         
         
           $('#backtotop').click(function(e) {
         
             e.preventDefault();
         
             $('html, body').animate({scrollTop:0}, '500');
         
           });
         
           
         
         })

         $(document).ready(function () {
          $('.main-header li').click(function(e) {
              $('.main-header li.active').removeClass('active');
              $(this).addClass('active');
              e.preventDefault();
          });
      });