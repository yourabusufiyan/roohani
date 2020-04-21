/**
 * This file is Javascript file
 * You can do your own code here!
 *
 * @package Roohani
 * @since Roohani 1.0
 */

( function($){

  // Don't run code here ( recommended )

  $('document').ready(function(){


      // Hide Footer if it empty
      var roohaniFooter = $('.footer-widget'),
      roohaniFooterEmpty = [];
      $.each(roohaniFooter.children('.row').children('.col-md-3'), function(index) {
        var colsText = $.trim( $(this).html() ).length;
        roohaniFooterEmpty.push( Number( colsText ) == 0  );
      });
      $.inArray(false, roohaniFooterEmpty) > -1 ? roohaniFooter.show() : roohaniFooter.hide();


      //Post header
      function roohaniRemoveClass($selector = null, $remove = null) {
        if( $selector != null && $remove != null)
          if( $.type($remove) == 'array' ) {
            $.each($remove, function(i,v) {
              $($selector).removeClass(v);
            });
          } else {
            $($selector).removeClass($remove);
          }
      }
      roohaniRemoveClass('span.post-header-meta i', ['fa-4x','fa-border']);


      $('#nav-icon').click(function(){
        $(this).toggleClass('open');
        $('.mobShow').slideToggle('slow');
      });
       /* Every time the window is scrolled ... */
      $(window).scroll( function() {
          /* Check the location of each desired element */
          $('.post-excerpt p, .textwidget, .rssSummary, .textwidget p ').each( function(i){

              var bottom_of_object = $(this).offset().top + $(this).outerHeight();
              var bottom_of_window = $(window).scrollTop() + $(window).height();

              /* If the object is completely visible in the window, fade it it */
              if( bottom_of_window > bottom_of_object ){
                  $(this).animate({'opacity':'1'},500);
              }
          });
      });

      // Scroll Indicator
      var targerpos = $('.scroll-indicator').position();
      function roohaniScrollIndicator() {
        var target = $('.scroll-indicator'),
            winScroll = document.body.scrollTop || document.documentElement.scrollTop,
            height = document.documentElement.scrollHeight - document.documentElement.clientHeight,
            scrolled = ((winScroll / height) * 100) + '%';
        if (winScroll > ( targerpos.top + 10 ) ) {
          target.css('opacity', '1');
        } else {
          target.css('opacity', '0');
        }
        var sdf =  [targerpos.top,winScroll,height];
        // console.log(sdf);
        target.find('.progress-bar').width(scrolled);
      }


      // BOTTOM SCROLL TOP BUTTON
      var scrollTop = $(".topicon");
      $(window).scroll(function() {
          var topPos = $(this).scrollTop();
          // if user scrolls down - show scroll to top button
          if (topPos > 300) {
            $(scrollTop).css("opacity", "1");
          } else {
            $(scrollTop).css("opacity", "0");
          }
          roohaniScrollIndicator();
      }); // scroll END

      //Click event to scroll to top
      $(scrollTop).click(function() {
        $('html, body').animate({
          scrollTop: 0
        }, 800);
        return false;
      }); // click() scroll top EMD

  });

})( jQuery );

let images = document.querySelectorAll("#box img");
new LazyLoad(images);
