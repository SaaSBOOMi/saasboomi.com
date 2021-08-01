<?php
/*
* Template Name: newsletter
*/ ?>

<section class="newsletter-section">
    <div class="container container-wrapper">
      <div class="newsletter-wrapper">
        <div class="row content-row">
          <div class="col-sm-6 col-md-6 col-12 left-blk">
            <img class="bg-img" src="<?php echo get_template_directory_uri(); ?>/img/newsletter_bg.svg"  alt="Awards" />
            <div class="content-wrapper">
              <h5 class="heading4">SaaSBOOMi MRR</h5>
              <h6 class="paragraph">Subscribe to our newsletter and read stunning SaaS stories, stay up-to-date with your Indian SaaS ecosystem.</h6>
              <p>
                <a href="https://us4.campaign-archive.com/home/?u=f0c1ea2e5d5294061fbc56119&id=19698a1d4b" target="_blank" class="support-text">View Previous MRR &gt; </a>
              </p>
            </div>
          </div>
          <div class="col-sm-6 col-md-6 col-12 right-blk">
            <?php echo do_shortcode('[contact-form-7 id="1050" title="Newsletter"]'); ?>
          </div>
        </div>
      </div>
    </div>
</section>
<script type="text/javascript">
  $(document).ready(function () {
    $('.newsletter-section form').attr({
          'id': 'newsletterForm',
          'parsley-validate' : true
    });
    $('#newsletterForm').parsley();
    $('#newsletterForm #fname').attr('required',true).attr('data-parsley-required-message','Please enter Full Name').attr('data-parsley-minlength-message','First Name must be of minimum 3 characters');
    $('#newsletterForm #email').attr('required',true).attr('data-parsley-required-message','Please enter Email Address').attr('data-parsley-type-message','Please enter valid Email');
    $('.wpcf7-submit').on('click',function(e){
        var $this = $(this);
        if($('#newsletterForm').parsley().isValid()){
            e.stopPropagation();
            e.preventDefault();
            $this.css('pointer-events','none');
            $this.val('SUBMITTING...');
            $this.submit();
        }
    });
    document.addEventListener( 'wpcf7mailsent', function( event ) {
        $('#newsletterForm input[type="submit"]').css('pointer-events','auto');
        $('#newsletterForm input[type="submit"]').val('Subscribe');
        setTimeout( "$('.wpcf7-response-output').hide();", 3000);
    }, false );
    if($(window).outerWidth() > 991){
        $(window).scroll(function () {
            if($(window).scrollTop() > 100){
                // $('.height-block').show();
                $('.primary-header').addClass('header-fixed');
                $('.primary-header .header-bottom').css('background','#ffffff');
                $('.primary-header .header-bottom').css('box-shadow','rgba(95, 95, 95, 0.1) 0px 20px 40px 0px;');
                $('.primary-header .header-bottom .img-blk img').css('height','60px');
            }
            if($(window).scrollTop() < 100){
                // $('.height-block').hide();
                $('.primary-header').removeClass('header-fixed');
                $('.primary-header .header-bottom').css('background','transparent');
                $('.primary-header .header-bottom').css('box-shadow','none');
                $('.primary-header .header-bottom .img-blk img').css('height','80px');
            }
        });
    }
  });
</script>
