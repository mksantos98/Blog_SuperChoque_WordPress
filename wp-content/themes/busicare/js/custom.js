// OWL SLIDER CUSTOM JS
(function ($) {

    // remove box on click 
    $("a").keypress(function() {
     this.blur();
     this.hideFocus = false;
     this.style.outline = null;
      });
      $("a").mousedown(function() {
           this.blur();
           this.hideFocus = true;
           this.style.outline = 'none';
      });

      // remove # on URL
        $(".search-icon").click(function(e){
            e.preventDefault();
         });
        
    $(document).ready(function() {
      setTimeout(function(){
        $('body').addClass('loaded');
      }, 1500);
    


        jQuery(function(){
      jQuery(".video-player").mb_YTPlayer();
    });

    jQuery('#video-play').click(function(event) {
      event.preventDefault();
      if (jQuery(this).hasClass('fa-play')) {
      jQuery('.video-player').playYTP();
      } else {
      jQuery('.video-player').pauseYTP();
      }
      jQuery(this).toggleClass('fa-play fa-pause');
      return false;
    });

    jQuery('#video-volume').click(function(event) {
      event.preventDefault();
      if (jQuery(this).hasClass('fa-volume-off')) {
      jQuery('.video-player').YTPUnmute();
      } else {
      jQuery('.video-player').YTPMute();
      }
      jQuery(this).toggleClass('fa-volume-off fa-volume-up');
      return false;
    });
    });

  /* Preloader */
  $(window).on('load', function() {
    var preloaderFadeOutTime = 500;
    function hidePreloader() {
      var preloader = $('.hp-loader');
      setTimeout(function() {
        preloader.fadeOut(preloaderFadeOutTime);
      }, 500);
    }
    hidePreloader();
  }); 

  //Sticky Header
       jQuery(window).bind('scroll', function () {
          if (jQuery(window).scrollTop() > 100)
          {
                jQuery('.header-sticky').addClass('stickymenu');
                jQuery('.header-sidebar').css('display','none');
          } else {
                jQuery('.header-sticky').removeClass('stickymenu');
                jQuery('.header-sidebar').css('display','');
          }
       });

  // scroll
  $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('.scroll-up').fadeIn();
        } else {
            $('.scroll-up').fadeOut();
        }
    });

    $('a[href="#totop"]').click(function () {
        $('html, body').animate({scrollTop: 0}, 'slow');
        return false;
    });


})(jQuery);
