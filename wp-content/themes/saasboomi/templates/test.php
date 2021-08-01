<?php
/*
* Template Name: test
*/ ?>

<?php get_header(); ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/home-page.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/owl.carousel.min.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/animate.css">

<?php
  $current_post = null;
  $args = array(
    'post_type' => 'annual_events',
    'posts_per_page' => 1,
    'post_status' => 'publish',
    'numberposts' => 1,
  );
  $current_post = wp_get_recent_posts($args);
?>

<section class="event-banner-section">
  <div class="container container-wrapper">
    <div class="row flex-centered">
      <div class="col-sm-6 col-md-6 col-lg-6 col-12 left-blk">
        <img src="<?php echo get_template_directory_uri(); ?>/img/annual_orange.svg"  alt="Annual" />
        <h1 class="heading2">Asia’s Largest SaaS Conference, for Founders, by Founders</h1>
        <div class="registration-content">
          <p class="heading4">Registrations open for SaaSBOOMi Annual 2021</p>
          <h2 class="heading2 date">19th - 20th December 2020</h2>
          <ul class="list-inline">
            <li class="list-inline-item">
              <a href="javascript:void(0)" class="primary-btn primary-btn-dark btn-small">
                Apply Now
              </a>
            </li>
            <li class="list-inline-item">
              <span class="support-text">
                2 day virtual event
              </span>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-sm-6 col-md-6 col-lg-6 col-12 right-blk">
        <div class="img-blk">
          <img src="<?php echo get_template_directory_uri(); ?>/img/annual_featured_img.png"  alt="Annual" />
        </div>
      </div>
    </div>
  </div>
</section>

<section class="introduction-section">
  <div class="container container-wrapper">
    <div class="tab-list-wrapper">
      <div class="row title-row flex-centered">
        <div class="col-sm-6 col-md-6 col-lg-6 col-12 left-blk">
          <ul class="list-inline tab-list">
            <li class="active scenario list-inline-item" id="platform1">
              <a href="javascript:void(0)" class="paragraph">About </a>
            </li>
            <li class="scenario list-inline-item" id="platform2">
              <a href="javascript:void(0)" class="paragraph">Speakers</a>
            </li>
            <li class="scenario list-inline-item" id="platform3">
              <a href="javascript:void(0)" class="paragraph">Agenda</a>
            </li>
            <li class="scenario list-inline-item" id="platform4">
              <a href="javascript:void(0)" class="paragraph">SaaSBOOMi Team</a>
            </li>
            <li class="scenario list-inline-item" id="platform5">
              <a href="javascript:void(0)" class="paragraph">Testimonials</a>
            </li>
          </ul>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-6 col-12 right-blk">
            <p class="text-right">
              <a href="javascript:void(0)" class="primary-btn primary-btn-dark btn-small">
                Apply Now
              </a>
            </p>
        </div>
      </div>
    </div>
    <div class="platform platform1">
      <div class="row content-row">
        <div class="col-sm-6 col-md-6 col-lg-6 col-12 left-blk">
          <h3 class="heading1">Home to asias <br/> SaaS Community</h3>
          <p class="paragraph description">
            The brightest SaaS minds come together for 3 days where they shared candid stories, learnt hard-won lessons from the trenches, and forged connections that matter.
          </p>
          <p class="yellow-bar">
            <span></span>
          </p>
          <h4 class="heading3">Whats in store</h4>
          <div class="row store-content-row">
            <div class="col-sm-6 col-md-6 col-lg-4 col-12">
              <div class="card-wrapper">
                <div class="img-blk">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/roundtable.svg"  alt="Roundtable" />
                </div>
                <h5 class="heading4">Roundtable</h5>
                <p class="support-text">
                  Knowledge sharing and close quarters learning from founders over a cup of tea
                </p>
              </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-4 col-12">
              <div class="card-wrapper">
                <div class="img-blk">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/networking.svg"  alt="Networking" />
                </div>
                <h5 class="heading4">Networking</h5>
                <p class="support-text">
                  Great conversations, debates, discussions with fellow founders. No jargon, no ...
                </p>
              </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-4 col-12">
              <div class="card-wrapper">
                <div class="img-blk">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/curated_events.svg"  alt="Curated Events" />
                </div>
                <h5 class="heading4">Curated Events</h5>
                <p class="support-text">
                  Events hand-picked by SaaS leaders that is foster focused and action-oriented ...
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-6 col-12 right-blk">
          <div class="featured-img-blk">
            <img class="image1" src="<?php echo get_template_directory_uri(); ?>/img/annual_about_image1.png"  alt="Image" />
            <div class="image2-wrapper">
              <img class="image2" src="<?php echo get_template_directory_uri(); ?>/img/annual_about_image1.png"  alt="Image" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="cta-section">
  <div class="container container-wrapper">
    <div class="cta-wrapper">
      <div class="row flex-centered">
        <div class="col-sm-6 col-md-6 col-lg-6 col-12 left-blk">
          <div class="registration-content">
            <h3 class="heading4">Registrations open for SaaSBOOMi Annual 2021</h3>
            <h4 class="heading3 date">19th - 20th December 2020</h4>
            <p class="support-text">
              2 day virtual event
            </p>
          </div>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-6 col-12 right-blk">
          <p class="apply-btn">
            <a href="javascript:void(0)" class="primary-btn primary-btn-dark btn-small">
              Apply Now
            </a>
          </p>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="trial-section">
  <h2>Organisers</h2>
  <?php
    $the_query = p2p_type( 'organisers_to_team' )->get_connected( $current_post[0][ID]);
    if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();
  ?>
  <div class="card-wrapper">
    <!-- <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Digital"/> -->
    <h3 class="heading3"><?php echo get_the_title(); ?></h3>
    <!-- <p class="paragraph"><?php the_title(); ?></p> -->
  </div>
  <?php endwhile; wp_reset_postdata(); else : ?>
  <?php endif; ?>

</section>
<br/>
<br/>
<hr/>
<br/>
<br/>
<section class="trial-section">
  <h2>Volunteers</h2>
  <?php
    $the_query = p2p_type( 'volunteers' )->get_connected( $current_post[0][ID]);
    if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();
  ?>
  <div class="card-wrapper">
    <h3 class="heading3"><?php echo get_the_title(); ?></h3>
  </div>
  <?php endwhile; wp_reset_postdata(); else : ?>
  <?php endif; ?>

</section>

<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/wow.min.js"></script>


<script type="text/javascript">
  $(document).ready(function () {
    // new WOW().init();
    $('.scenario').on('click',function(){
      var id = $(this).attr('id');
      $('.scenario').removeClass('active');
      $(this).addClass('active');
      $('.platform').hide();
      $('.'+id).show();
    });

  });
</script>

<?php get_footer(); ?>
