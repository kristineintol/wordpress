function digital_books_openNav() {
  jQuery(".sidenav").addClass('show');
}
function digital_books_closeNav() {
  jQuery(".sidenav").removeClass('show');
}

( function( window, document ) {
  function digital_books_keepFocusInMenu() {
    document.addEventListener( 'keydown', function( e ) {
      const digital_books_nav = document.querySelector( '.sidenav' );

      if ( ! digital_books_nav || ! digital_books_nav.classList.contains( 'show' ) ) {
        return;
      }

      const elements = [...digital_books_nav.querySelectorAll( 'input, a, button' )],
        digital_books_lastEl = elements[ elements.length - 1 ],
        digital_books_firstEl = elements[0],
        digital_books_activeEl = document.activeElement,
        tabKey = e.keyCode === 9,
        shiftKey = e.shiftKey;

      if ( ! shiftKey && tabKey && digital_books_lastEl === digital_books_activeEl ) {
        e.preventDefault();
        digital_books_firstEl.focus();
      }

      if ( shiftKey && tabKey && digital_books_firstEl === digital_books_activeEl ) {
        e.preventDefault();
        digital_books_lastEl.focus();
      }
    } );
  }

  digital_books_keepFocusInMenu();
} )( window, document );

var slider_loop = jQuery('#top-slider').attr('slider-loop');
jQuery(document).ready(function() {
	var owl = jQuery('#top-slider .owl-carousel');
		owl.owlCarousel({
			margin: 25,
			nav: true,
			autoplay:true,
			autoplayTimeout:500,
			autoplayHoverPause:true,
			loop: slider_loop == 0 ? false : slider_loop,
      rtl: true,
			navText : ['<i class="fa fa-lg fa-chevron-left" aria-hidden="true"></i>','<i class="fa fa-lg fa-chevron-right" aria-hidden="true"></i>'],
			responsive: {
			  0: {
			    items: 1
			  },
			  600: {
			    items: 1
			  },
			  1024: {
			    items: 1
			}
		}
	})
  window.addEventListener('load', (event) => {
    jQuery(".loading").delay(2000).fadeOut("slow");
  });
})

jQuery(document).ready(function(){
  jQuery('.search-box span a').click(function(){
    jQuery(".serach_outer").toggle();
  });
});

var btn = jQuery('#button');

jQuery(window).scroll(function() {
  if (jQuery(window).scrollTop() > 300) {
    btn.addClass('show');
  } else {
    btn.removeClass('show');
  }
});

btn.on('click', function(e) {
  e.preventDefault();
  jQuery('html, body').animate({scrollTop:0}, '300');
});

jQuery(window).scroll(function() {
  var data_sticky = jQuery('.main_header').attr('data-sticky');

  if (data_sticky == "true") {
    if (jQuery(this).scrollTop() > 1){
      jQuery('.main_header').addClass("stick_header");
    } else {
      jQuery('.main_header').removeClass("stick_header");
    }
  }
});
