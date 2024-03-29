(function ($) {
   "use strict";
  
   //------- OWL carousle init  ---------------
    jQuery(document).ready(function(){
      function init_carousel_owl(){
        $('.init-carousel-owl').each(function(){
          var items = $(this).data('items') ? $(this).data('items') : 5;
          var items_lg = $(this).data('items_lg') ? $(this).data('items_lg') : 4;
          var items_md = $(this).data('items_md') ? $(this).data('items_md') : 3;
          var items_sm = $(this).data('items_sm') ? $(this).data('items_sm') : 2;
          var items_xs = $(this).data('items_xs') ? $(this).data('items_xs') : 1;
          var loop = $(this).data('loop') ? $(this).data('loop') : true;
          var speed = $(this).data('speed') ? $(this).data('speed') : 200;
          var auto_play = $(this).data('auto_play') ? $(this).data('auto_play') : false;
          var auto_play_speed = $(this).data('auto_play_speed') ? $(this).data('auto_play_speed') : false;
          var auto_play_timeout = $(this).data('auto_play_timeout') ? $(this).data('auto_play_timeout') : 1000;
          var auto_play_hover = $(this).data('auto_play_hover') ? $(this).data('auto_play_hover') : true;
          var navigation = $(this).data('navigation') ? $(this).data('navigation') : false;
          var rewind_nav = $(this).data('rewind_nav') ? $(this).data('rewind_nav') : true;
          var pagination = $(this).data('pagination') ? $(this).data('pagination') : false;
          var mouse_drag = $(this).data('pagination') ? $(this).data('mouse_drag') : true;
          var touch_drag = $(this).data('touch_drag') ? $(this).data('touch_drag') : true;

          $(this).owlCarousel({
              nav: navigation,
              autoplay: auto_play,
              autoplayTimeout: auto_play_timeout,
              autoplaySpeed: auto_play_speed,
              autoplayHoverPause: auto_play_hover,
              navText: [ '<i class="gv-icon-158"></i>', '<i class="gv-icon-159"></i>' ],
              autoHeight: false,
              loop: loop, 
              dots: pagination,
              rewind: rewind_nav,
              smartSpeed: speed,
              mouseDrag: mouse_drag,
              touchDrag: touch_drag,
              responsive : {
                0 : {
                  items: 1,
                  nav: false
                },
                640 : {
                  items : items_xs
                },
                768 : {
                  items : items_sm
                },
                992: {
                  items : items_md
                },
                1200: {
                  items: items_lg
                },
                1400: {
                  items: items
                }
              }
          });
       }); 
    }  

    init_carousel_owl();
    
  });

//===== WOW ============
 new WOW().init();

//====== OWL Carousel width thumbnail ==============
$(document).ready(function () {

  // ============================================================================
  // Text Typer
  // ============================================================================
  $("[data-typer-targets]", ".rotate-text").typer();

    var owl = $(".init-carousel-owl.carousel-thumbnail.image");
    owl.owlCarousel({
        items: 1,
        nav: true, 
        slideSpeed: 300,
        paginationSpeed: 400,
        singleItem: true,
        loop: true,
        navText: [ '<i class="gv-icon-158"></i>', '<i class="gv-icon-159"></i>' ],
    });
    var i = 0;
    owl.find('.owl-item').not('.cloned').each(function() {
      var $src_thumbnail = $(this).find('.item-thumb').first().data('thumbs');
      owl.find('.owl-dots .owl-dot').eq(i).html('<img src="'+$src_thumbnail+'" />');
      i++;
    }); 

    var owl = $(".carousel-thumbnail.text");
    owl.each(function(){
      var $this = $(this);
      $(this).owlCarousel({
        items: 1,
        nav: true, 
        slideSpeed: 300,
        paginationSpeed: 400,
        singleItem: true,
        loop: true,
        navText: [ '<i class="gv-icon-158"></i>', '<i class="gv-icon-159"></i>' ],
      });
      var i = 0;
      $(this).find('.owl-item').not('.cloned').each(function() {
        var $text = $(this).find('.item').first().data('thumbs');
        $this.find('.owl-dots .owl-dot').eq(i).html('<span>'+ $text +'</span>');
        i++;
      }); 
    })  

    if ($(window).width() > 780) {
      if ( $.fn.jpreLoader ) {
        var $preloader = $( '.js-preloader' );
        $preloader.jpreLoader({
          autoClose: true,
        }, function() {
          $preloader.addClass( 'preloader-done' );
          $( 'body' ).trigger( 'preloader-done' );
          $( window ).trigger( 'resize' );
        });
      }
    }else{
      $('body').removeClass('js-preloader');
    };

});

jQuery(document).ready(function () {
  
  $(document).imagesLoaded( function(){
    $('.gavias-parallax').each(function(){
      $(this).parallax("50%", 0.1);
    });
  })

  var $container = $('.post-masonry-style');
  $container.imagesLoaded( function(){
      $container.masonry({
          itemSelector : '.item-masory',
          gutterWidth: 0,
          columnWidth: 1,
      }); 
  });

  $('.gva-search-region .icon').on('click',function(e){
    if($(this).parent().hasClass('show')){
        $(this).parent().removeClass('show');
    }else{
        $(this).parent().addClass('show');
    }
    e.stopPropagation();
  })

   //===== Gallery ============
    $("a[data-rel^='prettyPhoto[g_gal]']").prettyPhoto({
        animation_speed:'normal',
        social_tools: false,
    });

      /*-------------Milestone Counter----------*/
      jQuery('.milestone-block').each(function() {
        jQuery(this).appear(function() {
          var $endNum = parseInt(jQuery(this).find('.milestone-number').text());
          jQuery(this).find('.milestone-number').countTo({
            from: 0,
            to: $endNum,
            speed: 4000,
            refreshInterval: 60,
          });
        },{accX: 0, accY: 0});
      });
  
  // ==================================================================================
  // Offcavas
  // ==================================================================================
  $('#menu-bar').on('click',function(e){
    if($('.gva-offcanvas-inner').hasClass('show-view')){
        $(this).removeClass('show-view');
        $('.gva-offcanvas-inner').removeClass('show-view');
    }else{
        $(this).addClass('show-view');
       $('.gva-offcanvas-inner').addClass('show-view'); 
    }
    e.stopPropagation();
  })

  $('.close-offcanvas').on('click', function(e){
    $('#gva-offcanvas-inner').removeClass('show-view');
    $('#menu-bar').removeClass('show-view');
  });

  /*========== Click Show Sub Menu ==========*/
 
  $('.gva-navigation a').on('click','.nav-plus',function(){
      if($(this).hasClass('nav-minus') == false){
          $(this).parent('a').parent('li').find('> ul').slideDown();
          $(this).addClass('nav-minus');
      }else{
          $(this).parent('a').parent('li').find('> ul').slideUp();
          $(this).removeClass('nav-minus');
      }
      return false;
  });

  /* ============ Isotope ==============*/
    if ( $.fn.isotope ) {
      $( '.isotope-items' ).each(function() {
        
        var _pid = $(this).data('pid');
        
        var $el = $( this ),
            $filter = $( '.portfolio-filter a.' + _pid ),
            $loop =  $( this );

        $loop.isotope();

        $loop.imagesLoaded(function() {
          $loop.isotope( 'layout' );
        });

        if ( $filter.length > 0 ) {
          $filter.on( 'click', function( e ) {
            e.preventDefault();
            var $a = $(this);
            $filter.removeClass( 'active' );
            $a.addClass( 'active' );
            $loop.isotope({ filter: $a.data( 'filter' ) });
          });
        };

      });
    };

    $('.isotope-items').bind('DOMNodeInserted', function(event) {
      $('.dh-container').directionalHover({
        overlay: ".dh-overlay",
        speed: 300,
        padding: 30
      });
    });
  
   //==== Customize =====
    $('.help .control-panel').click(function(){
      if($(this).parents('.help').hasClass('show')){
          $(this).parents('.help').removeClass('show');
      }else $(this).parents('.help').addClass('show');
    });

    $('.gavias-skins-panel .control-panel').click(function(){
        if($(this).parents('.gavias-skins-panel').hasClass('active')){
            $(this).parents('.gavias-skins-panel').removeClass('active');
        }else $(this).parents('.gavias-skins-panel').addClass('active');
    });

    $('.gavias-skins-panel .layout').click(function(){
        $('body').removeClass('wide-layout').removeClass('boxed');
        $('body').addClass($(this).data('layout'));
        $('.gavias-skins-panel .layout').removeClass('active');
        $(this).addClass('active');
        var $container = $('.post-masonry-style');
        $container.imagesLoaded( function(){
            $container.masonry({
                itemSelector : '.item-masory',
                gutterWidth: 0,
                columnWidth: 1,
            }); 
        });
    });

 /*----------- Animation Progress Bars --------------------*/
  $("[data-progress-animation]").each(function() {
    var $this = $(this);
    $this.appear(function() {
      var delay = ($this.attr("data-appear-animation-delay") ? $this.attr("data-appear-animation-delay") : 1);
      if(delay > 1) $this.css("animation-delay", delay + "ms");
      setTimeout(function() { $this.animate({width: $this.attr("data-progress-animation")}, 800);}, delay);
    }, {accX: 0, accY: -50});
  });
  
  /*----------------------------------------------------*/
  /*  Pie Charts
  /*----------------------------------------------------*/
  
  var pieChartClass = 'pieChart', pieChartLoadedClass = 'pie-chart-loaded';
  function initPieCharts() {
    var chart = $('.' + pieChartClass);
    chart.each(function() {
      $(this).appear(function() {
        var $this = $(this),
          chartBarColor = ($this.data('bar-color')) ? $this.data('bar-color') : "#F54F36",
          chartBarWidth = ($this.data('bar-width')) ? ($this.data('bar-width')) : 150
        if( !$this.hasClass(pieChartLoadedClass) ) {
          $this.easyPieChart({
            animate: 2000,
            size: chartBarWidth,
            lineWidth: 8,
            scaleColor: false,
            trackColor: "#eee",
            barColor: chartBarColor,
          }).addClass(pieChartLoadedClass);
        }
      });
    });
  }
  initPieCharts();

  /*-------------------------------------------------------*/
      /* Video box
  /*-------------------------------------------------------*/

  $('.modal-video-box').each(function(){
     $(this).on('hidden.bs.modal', function () {
        var clone = $(this).find('.modal-body').html();
        $(this).find('.modal-body').html('');
        $(this).find('.modal-body').html(clone);
    })
  })

  /*-------------------------------------------------------*/
      /* Gmap
  /*-------------------------------------------------------*/
  if($('.gsc-gmap').length > 0){
        $('.gsc-gmap').on('click', function () { 
            $('.gsc-gmap iframe').css("pointer-events", "auto"); 
        }); 

        $( ".gsc-gmap" ).mouseleave(function() { 
            $('.gsc-gmap iframe').css("pointer-events", "none"); 
        });
    }

  // ============================================================================
  // mb_YTPlayer video background
  // ============================================================================

    if (!jQuery.browser.mobile){
      $(".youtube-bg").mb_YTPlayer();
    }

  // ============================================================================
  // Fixed top Menu Bar
  // ============================================================================
  if($('.gv-sticky-menu').length > 0){
      var sticky = new Waypoint.Sticky({
        element: $('.gv-sticky-menu')[0]
    });
  }  
});

$(window).on('load', function(){
  $('.dh-container').directionalHover({
    overlay: ".dh-overlay",
    speed: 300,
    padding: 30
  });
});

})(jQuery);
