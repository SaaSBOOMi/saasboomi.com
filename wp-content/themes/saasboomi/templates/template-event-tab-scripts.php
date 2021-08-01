<?php
/*
* Template Name: event-tab-scripts
*/ ?>

<script type="text/javascript">
  $(document).ready(function () {
      $('#tabsList li').on('click', function() {
        $('#tabsList li').removeClass('active');
        $(this).addClass('active');
        var block = $(this).attr('data-class');
        var offsetTop = 130;
        if ($(window).outerWidth() < 992) {
          offsetTop = 150;
        }
        $("html, body").animate({
          // debugger
          scrollTop: $('.' + block + '').offset().top - offsetTop
        }, 1000);
      });

      var tabListWidth = $('#tabsList').outerWidth();
      $('#tabsList').css('width', tabListWidth);
      var top = 70;
      if ($(window).outerWidth() < 992) {
        top = $('.mobile-header').outerHeight();
      } else {
        top = 70;
      }

      $(window).scroll(function() {
        var tabsList = $('.introduction-section');

        if($(window).outerWidth() > 991){
          if($(window).scrollTop() > $('.about-section').offset().top - 200 && $(window).scrollTop() < $('.newsletter-section').offset().top - 150){
              // var paddingTop = tabsList.outerHeight();
              // if($(window).outerWidth() < 992){
              //   paddingTop = $('.tab-list').outerHeight() + 90;
              // }
              tabsList.addClass('block-fixed');
              $('.event-logo').css({'display':'inline-block'});
              $('.introduction-section .tab-list-wrapper').css({
                'border-bottom':'1px solid transparent',
                // 'margin-bottom':'26px',
              });
              tabsList.css({
                'box-shadow':'0px 2px 10px -1px rgba(161,161,161,0.46)',
                'background': '#ffffff',
                // 'position':'fixed',
                // 'top':'0',
                // 'left':'0',
                // 'width':'100%',
                // 'padding-top':'18px',
                // 'z-index':'9999',
                // 'margin-bottom':'24px',
                // 'transition':'all 0.3s ease-in',
                // 'opacity':'1',
                // 'display':'block'
              });
          }else{
              tabsList.removeClass('block-fixed');
              $('.event-logo').css({'display':'none'});
              $('.introduction-section .tab-list-wrapper').css({
                'border-bottom':'1px solid #DDDDDD',
                // 'margin-bottom':'28px',
              });
              tabsList.css({
                'box-shadow':'none',
                'background': 'transparent',
                // 'position':'relative',
                // 'top':'auto',
                // 'left':'auto',
                // 'width':'100%',
                // 'padding-top':'90px',
                // 'z-index':'99',
                // 'margin-bottom':'50px',
                // 'transition':'all 0.1s ease-out',
                // 'opacity':'0',
                // 'display':'none'
              });
          }
        }

        if($(window).outerWidth() < 991){
          if($(window).scrollTop() > $('.about-section').offset().top - 200 && $(window).scrollTop() < $('.newsletter-section').offset().top - 150){
            var paddingTop = tabsList.outerHeight();
            // if($(window).outerWidth() < 992){
            //   paddingTop = $('.tab-list').outerHeight() + 90;
            // }
              tabsList.addClass('block-fixed');
              $('.event-logo').css({'display':'inline-block'});
              $('.introduction-section .tab-list-wrapper').css({
                'border-bottom':'1px solid transparent',
                'margin-bottom':'0px',
              });
              tabsList.css({
                'box-shadow':'0px 2px 10px -1px rgba(161,161,161,0.46)',
                'background': '#ffffff',
                'position':'fixed',
                'top':'60px',
                'left':'0',
                'width':'100%',
                'padding-top':'0px',
                'z-index':'9999',
                'margin-bottom':'0px',
                'transition':'all 0.3s ease-in',
                // 'opacity':'1',
                // 'display':'block'
              });
          }else{
              tabsList.removeClass('block-fixed');
              $('.event-logo').css({'display':'none'});
              $('.introduction-section .tab-list-wrapper').css({
                'border-bottom':'1px solid #DDDDDD',
                'margin-bottom':'32px',
              });
              tabsList.css({
                'box-shadow':'none',
                'background': 'transparent',
                'position':'relative',
                'top':'auto',
                'left':'auto',
                'width':'100%',
                'padding-top':'0px',
                'z-index':'99',
                'margin-bottom':'0px',
                'transition':'all 0.1s ease-out',
                // 'opacity':'0',
                // 'display':'none'
              });
          }
        }

        var topOffset = 300;
        if ($(window).outerWidth() > 767) {
          topOffset = 300;
        } else {
          topOffset = 100;
        }
        if($(window).scrollTop() > $('.about-section').offset().top - topOffset && (!$('#tabsList li[data-class="about-section"]').hasClass('active')) && $(window).scrollTop() < $('.speaker-section').offset().top - topOffset){
          setTimeout(function(){
              $('#tabsList li').removeClass('active');
              $('#tabsList li[data-class="about-section"]').addClass('active');
          },10);
        }

        if($(window).scrollTop() > $('.speaker-section').offset().top - topOffset && (!$('#tabsList li[data-class="speaker-section"]').hasClass('active')) && $(window).scrollTop() < $('.agenda-section').offset().top - topOffset){
          setTimeout(function(){
            $('#tabsList li').removeClass('active');
            $('#tabsList li[data-class="speaker-section"]').addClass('active');
          },10);
        }

        if($(window).scrollTop() > $('.agenda-section').offset().top - topOffset && (!$('#tabsList li[data-class="agenda-section"]').hasClass('active')) && $(window).scrollTop() < $('.team-section').offset().top - topOffset){
          setTimeout(function(){
            $('#tabsList li').removeClass('active');
            $('#tabsList li[data-class="agenda-section"]').addClass('active');
          },10);
        }

        if($(window).scrollTop() > $('.team-section').offset().top - topOffset && (!$('#tabsList li[data-class="team-section"]').hasClass('active')) && $(window).scrollTop() < $('.testimonials-section').offset().top - topOffset){
          setTimeout(function(){
            $('#tabsList li').removeClass('active');
            $('#tabsList li[data-class="team-section"]').addClass('active');
          },10);
        }

        if($(window).scrollTop() > $('.testimonials-section').offset().top - topOffset && (!$('#tabsList li[data-class="testimonials-section"]').hasClass('active'))){
          setTimeout(function(){
            $('#tabsList li').removeClass('active');
            $('#tabsList li[data-class="testimonials-section"]').addClass('active');
          },10);
        }

      });


      // $(document).on("scroll", onScroll);

  });

  // function onScroll(event){
  //     debugger
  //   var scrollPos = $(document).scrollTop();
  //   $('#tabsList li').each(function () {
  //     debugger
  //       var currLink = $(this);
  //       var refElement = $(currLink.attr('data-class'));
  //       if ($('.' + refElement + '').position().top <= scrollPos && $('.' + refElement + '').position().top + $('.' + refElement + '').height() > scrollPos) {
  //           // $('#tabsList li').removeClass("active");
  //           // currLink.addClass("active");
  //           $('#tabsList li').removeClass('active');
  //           $('#tabsList li[data-class="testimonials-section"]').addClass('active');
  //       }
  //       else{
  //           currLink.removeClass("active");
  //       }
  //   });
  // }
</script>
