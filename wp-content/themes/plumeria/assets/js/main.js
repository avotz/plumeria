;(function($){

 /* var movementStrength = 50;
  var height = movementStrength / $(window).height();
  var width = movementStrength / $(window).width();
  $(".layer").mousemove(function(e){
            //var pageX = e.pageX - ($(window).width() / 2);
            var pageY = e.pageY - ($(window).height() / 2);
           // var newvalueX = width * pageX * -1 - 25;
            var newvalueX = 0;
            var newvalueY = height * pageY * -1 - 50;
            $(this).css("background-position", newvalueX+"px     "+newvalueY+"px");
  });*/
  var isMobile = {
          Android: function() {
              return navigator.userAgent.match(/Android/i);
          },
          BlackBerry: function() {
              return navigator.userAgent.match(/BlackBerry/i);
          },
          iOS: function() {
              return navigator.userAgent.match(/iPhone|iPad|iPod/i);
          },
          Opera: function() {
              return navigator.userAgent.match(/Opera Mini/i);
          },
          Windows: function() {
              return navigator.userAgent.match(/IEMobile/i);
          },
          any: function() {
              return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
          }
      };


  $('.lazy').Lazy({
        // your configuration goes here
        scrollDirection: 'vertical',
        effect: 'fadeIn',
        effectTime: 500,
        threshold : 200,
        //visibleOnly: true,
        onError: function(element) {
            console.log('error loading ' + element.data('src'));
        },
        afterLoad: function(element) {
            
            if( ! isMobile.any() ) {
        
               element.interactive_bg({
                 strength: 25,
                 scale: 1.05,
                 animationSpeed: "100ms",
                 contain: true,
                 wrapContent: false
               });         
            }
      
            
        },
        onFinishedAll: function() {
            
            /*$(".layer").interactive_bg({
             strength: 25,
             scale: 1.05,
             animationSpeed: "100ms",
             contain: true,
             wrapContent: false
           });*/

        }
    });

  // Pretty simple huh?
   

  var $btnMenu = $('#btn-menu'),
      $menu = $('.nav-container');
      $body = $('body');

 
  
  //new WOW().init();

  $('.view-more').click(function(e) {
      e.preventDefault();
      $('.content-description').css({
          'height': '100%'
      });
      $('.view-less').show();
      $('.view-more').hide();
  });
  $('.view-less').click(function(e) {
     e.preventDefault();
      $('.content-description').css({
          'height': '350px'
      });
      $('.view-more').show();
      $('.view-less').hide();
  });

  

  $btnMenu.on('click', function (e) {
    
      $body.toggleClass('nav-is-open');

  });

 $menu.find(".menu-item-has-children").hoverIntent({
      over: function() {
            $(this).find(">.sub-menu").slideDown(200 );
          },
      out:  function() {
            $(this).find(">.sub-menu").slideUp(200);
          },
      timeout: 200

       });

 $(".owl-carousel").owlCarousel({
      animateOut: 'fadeOut',
      items : 1,
      autoplay : true,
      loop : true,
      nav : true,
      navText : ['','']
      /*onChange : function (e) {
        console.log(e.target);
        $('.owl-item.active span').addClass('animated');
        $('.owl-item.active h1').addClass('animated');
      }*/
      /*slideSpeed : 300,
      paginationSpeed : 400,*/
      /*singleItem:true*/
  });

 // SMOOTH ANCHOR SCROLLING
    var $root = jQuery('html, body');
    jQuery('a.anchor').click(function(e) {
        var href = jQuery.attr(this, 'href');

        if (typeof(jQuery(href)) != 'undefined' && jQuery(href).length > 0) {
            var anchor = '';

            if (href.indexOf("#") != -1) {
                anchor = href.substring(href.lastIndexOf("#"));
            }
           
            if (anchor.length > 0) {
                /*console.log(jQuery(anchor).offset().top);
                console.log(anchor);*/


                $root.animate({
                    scrollTop: jQuery(anchor).offset().top-75
                }, 500, function() {
                    window.location.hash = anchor;
                });
                e.preventDefault();
            }
        }else{ // si no esta la seccion se va al home
           window.location.replace('/' + href);
        }
    });

     //SCROLL WINDOW FUNCTIONALITY

    $(window).scroll(function () {
          if ($(this).scrollTop() > 250) {
              $('.header').addClass("header-scroll");
              
          } else {
              $('.header').removeClass("header-scroll");
              
          }
          /*if ($(this).scrollTop() > 300) {
              
              $('.scroll-top').addClass("on");
          } else {
             
              $('.scroll-top').removeClass("on");
          }*/
      });

 $(window).load(function() {
     
     
      resizes();

    });

    $(window).resize(resizes);

    function resizes()
     {
      
      
        

          $('.tours-img').height($(".tours").height());
        
        
       
      

     }
  

    
})(jQuery);