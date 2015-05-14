jQuery.noConflict();

(function($) {
  "use strict";

  /* Load BX Slider */
  $('.bxslider').bxSlider({
    auto: true,
  	captions: true,
    adaptiveHeight: true
  });

  $('.gallery-slider').bxSlider({
    auto: true
  });

  $('.title p, title-full p', '.background').fitText(0.8, {maxFontSize: '24px' });
  $('.fullscreen .post h2').fitText(0.8, { minFontSize: '24px', maxFontSize: '32px' });
  $('.layout_3_col .standard p.subtitle').fitText(1.8, { minFontSize: '16px', maxFontSize: '26px' });
  $('.portfolio-container .post h2').fitText(0.8, { minFontSize: '24px', maxFontSize: '48px' });
  $('.layout_3_col article blockquote').fitText(0.8, { minFontSize: '20px', maxFontSize: '32px' });
  $('.layout_3_col article .post-meta-alt').fitText(2, { minFontSize: '13px', maxFontSize: '18px' });

  /* Fullscreen post images */
  var entryContent = $('.content .entry-content', '#main'),
      img = entryContent.find('img.alignnone'),
      figure = entryContent.find('figure.alignnone'),
      portfolio = entryContent.find('.portfolio-container'),
      windowWidth = $(window).width();

  img.each(function() {
    $(this).css({ 'max-width' : 'none', 'width': windowWidth, 'margin-left' : ( ( entryContent.width() / 2 ) - ( windowWidth / 2 ) ) });
  });

  figure.each(function() {
    $(this).css({ 'max-width' : 'none', 'width': windowWidth, 'margin-left' : ( ( entryContent.width() / 2 ) - ( windowWidth / 2 ) ) });
  });

  portfolio.each(function() {
    $(this).find('.grid').css({'max-width' : '1650px', 'margin': '0 auto'});
    $(this).css({ 'max-width' : 'none', 'width': windowWidth, 'margin-left' : ( ( entryContent.width() / 2 ) - ( windowWidth / 2 ) ) });
  })

  $(window).resize(function() {
    var windowWidth = $(window).width();

    img.each(function() {
      $(this).css({ 'max-width' : 'none', 'width' : windowWidth, 'margin-left' : ( ( entryContent.width() / 2 ) - ( windowWidth / 2 ) ) });
    });

    figure.each(function() {
      $(this).css({ 'max-width' : 'none', 'width' : windowWidth, 'margin-left' : ( ( entryContent.width() / 2 ) - ( windowWidth / 2 ) ) });
    });

    portfolio.each(function() {
      $(this).css({ 'max-width' : 'none', 'width' : windowWidth, 'margin-left' : ( ( entryContent.width() / 2 ) - ( windowWidth / 2 ) ) });
    });
  });

  /* Responsive Videos */
  $('.post-video').fitVids();

  /* jQuery UI Tabs */
  if( !$('#header').hasClass('header-customizer') ) {
    $('#tabs').tabs();
  } else {
    $('#tabs').css({position: 'relative'});
    $('#tabs div').css({position: 'absolute', top: 0, left: 0, background: '#fff'});
  }

  /* Toggle */
  $('.toggle-title').click(function() {
  	var toggle_id = $(this).attr('id');

  	$('.' + toggle_id).slideToggle('slow');
  });

  /* Lightbox */
  baguetteBox.run('.lightbox');

  /* jQuery Accordion */
  $('#accordion').accordion({ heightStyle: "content" });

  /**
   * Drop Down Menu
   */
  $('#navigation ul li').hover(function() {
    var container = $(this),
        list = container.find('ul'),
        subMenu = list.find('ul'),
        left = container.offset().left,
        width = list.width(),
        pageWidth = $('body').width(),
        isOffscreen = (left + width > pageWidth);

    var subOffscreen = ( left + (width * 2) > pageWidth);

    if( isOffscreen ) {
      $(this).addClass('list-left');
    } else {
      $(this).removeClass('list-left');
    }

    if( subOffscreen ) {
      list.find('li.menu-item-has-children').addClass('list-left-sub');
    } else {
      list.find('li.menu-item-has-children').removeClass('list-left-sub');
    }

    /* Show sub menu and hide child submenu */
    list.fadeIn(100).find('ul').hide();

  }, function() {

    var list = $(this).find('ul');

    /*if( list.parent('li').hasClass('list-left') ) {
      $('body').mousemove( function( event ) {
        if( isNear( list.parent('li'), 40, event ) || isNear( list, 1, event ) || isNear( list.find('ul'), 1, event) ) {
          // do nothing
        } else {
          list.hide();
        }
      });
    } else {
    */
    list.hide();
    

  });

  function isNear( element, distance, event ) {

    var left = element.offset().left - distance,
        top = element.offset().top - distance,
        right = left + element.width() + 2*distance,
        bottom = top + element.height() + 2*distance,
        x = event.pageX,
        y = event.pageY;

    return ( x > left && x < right && y > top && y < bottom );

  };
  
  /* Responsive Menu */
  var menuIcon = '<div class="menu-icon"><i class="fa fa-bars"></i></div>';
  $('nav#navigation').append(menuIcon);
  $('.menu-icon').attr('unselectable','on')
     .css({'-moz-user-select':'none',
           '-o-user-select':'none',
           '-khtml-user-select':'none',
           '-webkit-user-select':'none',
           '-ms-user-select':'none',
           'user-select':'none'
     }).bind('selectstart', function() { return false; });

  var menu = $('.menu').clone();
  $('#header').after( '<div class="responsive-nav"><ul id="menu">' + menu.html() + '</ul></div>' );

  /* Prevent Body scroll when menu is open */
  $('#menu').bind('mousewheel DOMMouseScroll', function(e) {
    var scrollTo = null;

    if (e.type == 'mousewheel') {
        scrollTo = (e.originalEvent.wheelDelta * -1);
    }
    else if (e.type == 'DOMMouseScroll') {
        scrollTo = 40 * e.originalEvent.detail;
    }

    if (scrollTo) {
        e.preventDefault();
        $(this).scrollTop(scrollTo + $(this).scrollTop());
    }
  });

  /* Check if is retina display */
  var isRetina = (
    window.devicePixelRatio > 1 ||
    (window.matchMedia && window.matchMedia("(-webkit-min-device-pixel-ratio: 1.5),(-moz-min-device-pixel-ratio: 1.5),(min-device-pixel-ratio: 1.5)").matches)
  );

  var body = $('body');
  var logo = $('.logo img');
  var retinaLogo = logo.attr('data-logo2x');
  var retinaLogoDark = logo.attr('data-logodark2x');

  /* Update logo url if is retina display */
  if( isRetina ) {
    if( body.hasClass('header-no-bg') ) {
      logo.attr('src', retinaLogoDark);
      logo.attr('data-altsrc', retinaLogo);
    } else {
      logo.attr('src', retinaLogo);
      logo.attr('data-altsrc', retinaLogoDark);
    }
  }

  /* Responsive Menu Toggle */
  $('.menu-icon').click(function() {
    var top = $(document).scrollTop();
    var logo = $('.logo img');
    var currentLogo = logo.attr('src');
    var newLogo = logo.attr('data-altsrc');
    var retinaLogoCurrent = logo.attr('data-logo2x');
    var retinaLogoNew = logo.attr('data-logodark2x');

    $('.responsive-nav').toggle();

    if( isRetina ) {
      logo.attr( 'src', retinaLogoNew ).attr( 'data-altsrc', retinaLogoCurrent );

      if( top > 100 ) {
        logo.attr( 'data-logo2x', retinaLogoCurrent ).attr( 'data-logodark2x', retinaLogoNew );
      } else {
        logo.attr( 'data-logo2x', retinaLogoNew ).attr( 'data-logodark2x', retinaLogoCurrent );
      }
    } else {
      logo.attr( 'src', newLogo ).attr( 'data-altsrc', currentLogo );
    }

    $(this).toggleClass('menu-icon-dark');
    $('#header').toggleClass('menu-header-bg');
  });

  var attr = $('#header').attr('data-style');

  if (! ( typeof attr !== typeof undefined && attr !== false ) ) {
    $('.menu-icon').css('color', '#333333');
  }

  if( $('body').hasClass('header-no-bg') ) {
    $('.menu-icon').css('color', '#333333');
  }

  /* Update logo on window resize */
  var logoSrc = $('.logo img').attr('src');
  var logoAltSrc = $('.logo img').attr('data-altsrc');

  if( isRetina ) {
    logoSrc = $('.logo img').attr('data-logo2x');
    logoAltSrc = $('.logo img').attr('data-logodark2x');
  }

  $(window).resize(function() {
    var windowWidth = $('body').width(),
        menuHeight = $('.main-menu').css('lineHeight');

    if( windowWidth > 800 ) {
      if( $(this).scrollTop() > menuHeight || $(this).scrollTop() == 0 ) {
        $('.logo img').attr( 'src', logoSrc );
        $('.logo img').attr( 'data-altsrc', logoAltSrc );
      }
      $('.responsive-nav').hide();
      $('.menu-icon').removeClass('menu-icon-dark');
      $('#header').removeClass('menu-header-bg');
    }
  });

  if( $('body').hasClass('header-no-bg') ) {
    $('#header').addClass('nontransparent');
  }

  /* Header Animations */
  var header = $('#header'),
      logo = $('.logo img'),
      logoSrc = logo.attr('src'),
      logoAlt = logo.attr('data-altsrc'),
      retinaLogoSrc = logo.attr('data-logo2x'),
      retinaLogoAltSrc = logo.attr('data-logodark2x'),
      menuIcon = $('.menu-icon'),
      headerStyle = $('#header').attr('data-style'),
      headerColor = $('#header').attr('data-color'),
      headerClass = '';

  $(document).scroll(function() {
    var top = $(document).scrollTop();
    
    /* Change to .animate() for smoother transitions */
    if( top > 100 ) {
      header.addClass('short nontransparent');

      if( headerStyle == 'transparent' ) {
        header.addClass('header-shadow').css({ backgroundColor : headerColor }, 250);

        if( isRetina ) {
          logo.attr('src', retinaLogoAltSrc);
        } else {
          logo.attr('src', logoAlt);
        }

        menuIcon.addClass('menu-icon-dark');
      }
    }

    if( top < 100 ) {
      if( $('body').hasClass('header-no-bg') ) {
        headerClass = 'short';
      } else {
        headerClass = 'short nontransparent';
      }

      header.removeClass(headerClass);

      if( headerStyle == 'transparent' ) {
        header.removeClass('header-shadow').css({ backgroundColor : 'transparent' }, 250);

        if( isRetina ) {
          if( $('body').hasClass('header-no-bg') ) {
            logo.attr('src', retinaLogoAltSrc);
          } else {
            logo.attr('src', retinaLogoSrc);
          }
        } else {
          logo.attr('src', logoSrc);
        }

        menuIcon.removeClass('menu-icon-dark');
      }
    }
  });

  /* Parallax Background Image */
  if( ! $('body').hasClass('header-no-bg') ) {

    $(window).bind('scroll', function() {
      var topDistance = $(this).scrollTop(),
          height = $('#background').attr('style'),
          heightVal = '';

      if( height == 'height:100vh' ) {
        heightVal = $(this).height();
      } else {
        heightVal = height.replace( /[^\d.]/g, '' );
      }

      if( ! $('body').hasClass('single') ) {
        if( $('body').hasClass('page') ) {
          parallaxScroll();
        } else {
          if( topDistance <= heightVal ) {
            parallaxScroll();
          }
        }
      } else {
        /* For single posts */
        parallaxScroll();
      }

      return false;
    });

  }
 
  function parallaxScroll(){
    var scrolledY = $(window).scrollTop(),
        image = $('.parallax', '#background');

    image.css('background-position','center -'+((scrolledY*0.2))+'px');

    return false;
  }

  /* Post Hover Effect */
  $('.fullscreen .post', '.wrapper').hover(function() {
    $(this).find('.overlay').stop().animate({'opacity': '.4' });
  }, function() {
    $(this).find('.overlay').stop().animate({'opacity': '.2' });
  });

  /* Portfolio Hover Effect */
  $('.portfolio-container .post', '.wrapper').hover(function() {
    $(this).find('.item-title').stop().fadeIn('medium');
    $(this).find('.overlay').stop().animate({'opacity': '.6' });
  }, function() {
    $(this).find('.item-title').stop().fadeOut('medium');
    $(this).find('.overlay').stop().animate({'opacity': '.2' });
  });

  /* Smooth Scroll */
  if( $('.background:has(.arrow)') ) {

    var target = '',
        offset = 0,
        margin = parseInt( $('.logo').css('marginBottom') );

    if( $('body').hasClass('logged-in') ) {
      offset = - ( $('#header').height() + 28 );
    } else {
      offset = - $('#header').height();
    }

    if( $('#wrapper').hasClass('fullscreen') ) {
      target = '.wrapper';
    } else {
      target = '#container';
    }

    $('.arrow').on('click', function() {
      $.smoothScroll({
        scrollTarget: target,
        offset: offset,
        speed: 1000
      });
      return false;
    });
  }

  $('.top-btn').on('click', function() {
    $.smoothScroll({
      scrollTarget: 'html',
      speed: 1500
    });
    return false;
  });
  
})(jQuery);
