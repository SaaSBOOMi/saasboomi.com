<?php
/*
* Template Name: Our Story
*/ ?>

<?php get_header(); ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/about-us-page.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/owl.carousel.min.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/animate.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/timeline.css">

<div class="about-us-page">

  <section class="about-section">
      <div class="container">
          <div class="row about-row text-center">
              <div class="col-12 col-md-10 offset-md-1 col-sm-0 offset-sm-1">
                  <p class="heading4">Our Mission</p>
                  <h2 class="heading2"><?php echo get_field('about_our_mission') ?></h2>
              </div>
          </div>
      </div>
  </section>

  <section class="gallery-section">
    <div class="container-fluid">
      <?php
        $gallery = CFS()->get('images');
        $images = [];
        if($gallery && count($gallery)-1):
        foreach ($gallery as $key => $image) {
          array_push($images, $image['image']);
        }
      ?>
      <div class="past-events-gallery-wrapper">
        <div class="row gallery-row">
          <div class="col-sm-12 col-md-5 col-lg-5 col-12 left-blk">
            <div class="row content-row">
              <div class="col-sm-6 col-md-6 col-lg-6 col-12 grid-blk">
                <p class="color-bar yellow-bar text-right top-bar">
                  <span></span>
                </p>
                <?php if($images[0]): ?>
                  <img class="img1" src="<?php echo $images[0]?>"  alt="Image" />
                <?php else: ?>
                  <img class="img1" src="<?php echo get_template_directory_uri(); ?>/img/generic_placeholder.png"  alt="Image" />
                <?php endif;?>
                <?php if($images[1]): ?>
                  <img class="img2" src="<?php echo $images[1]?>"  alt="Image" />
                <?php else: ?>
                  <img class="img2" src="<?php echo get_template_directory_uri(); ?>/img/generic_placeholder.png"  alt="Image" />
                <?php endif;?>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-6 col-12 grid-blk">
                <?php if($images[2]): ?>
                  <img class="img3" src="<?php echo $images[2]?>"  alt="Image" />
                <?php else: ?>
                  <img class="img3" src="<?php echo get_template_directory_uri(); ?>/img/generic_placeholder.png"  alt="Image" />
                <?php endif;?>
                <?php if($images[3]): ?>
                  <img class="img4" src="<?php echo $images[3]?>"  alt="Image" />
                <?php else: ?>
                  <img class="img4" src="<?php echo get_template_directory_uri(); ?>/img/generic_placeholder.png"  alt="Image" />
                <?php endif;?>
                <p class="color-bar green-bar text-right bottom-bar">
                  <span></span>
                </p>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-7 col-lg-7 col-12 left-blk">
            <div class="row content-row">
              <div class="col-sm-7 col-md-7 col-lg-7 col-12 grid-blk">
                <p class="color-bar blue-bar text-right top-bar">
                  <span></span>
                </p>
                <?php if($images[4]): ?>
                  <img class="img5" src="<?php echo $images[4]?>"  alt="Image" />
                <?php else: ?>
                  <img class="img5" src="<?php echo get_template_directory_uri(); ?>/img/generic_placeholder.png"  alt="Image" />
                <?php endif;?>
                <?php if($images[5]): ?>
                  <img class="img6" src="<?php echo $images[5]?>"  alt="Image" />
                <?php else: ?>
                  <img class="img6" src="<?php echo get_template_directory_uri(); ?>/img/generic_placeholder.png"  alt="Image" />
                <?php endif;?>
                <?php if($images[6]): ?>
                  <img class="img7" src="<?php echo $images[6]?>"  alt="Image" />
                <?php else: ?>
                  <img class="img7" src="<?php echo get_template_directory_uri(); ?>/img/generic_placeholder.png"  alt="Image" />
                <?php endif;?>
              </div>
              <div class="col-sm-5 col-md-5 col-lg-5 col-12 grid-blk">
                <?php if($images[7]): ?>
                  <img class="img8" src="<?php echo $images[7]?>"  alt="Image" />
                <?php else: ?>
                  <img class="img8" src="<?php echo get_template_directory_uri(); ?>/img/generic_placeholder.png"  alt="Image" />
                <?php endif;?>
                <div class="event-blk">
                  <p class="color-bar pink-bar text-right bottom-bar">
                    <span></span>
                  </p>
                  <h1 class="heading1 count">
                    <?php echo get_field('about_events_count') ?><span>+</span>
                  </h1>
                  <h2 class="heading1">Events</h2>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php endif;?>
    </div>
  </section>

  <section class="beginning-of-our-story-section">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-4 col-sm-5 ">
              <h3 class="heading2">The Beginning  <br/> of Our Story </h3>
            </div>
            <div class="col-12 col-md-8 col-sm-7 ">
                <p class="paragraph"><?php echo get_field('about_beginning_story_description') ?></p>
            </div>
        </div>
    </div>
  </section>

  <section class="our-story-so-far-section">
      <div class="container">
          <div class="row title-row text-center">
              <div class="col-12">
                  <h4 class="heading1">Our Journey so far</h4>
              </div>
          </div>
          <div class="row content-row text-center">
              <div class="col-12">
                <div class="cd-h-timeline js-cd-h-timeline margin-bottom-md">

                  <div class="cd-h-timeline__container container">
                    <div class="cd-h-timeline__dates">
                      <div class="cd-h-timeline__line month-list">
                        <ol>
                          <?php
                                  $args = array(
                                      'post_type' => 'our_journey',
                                      'posts_per_page' => -1,
                                      'post_status' => 'publish',
                                      'meta_key'	=> 'month',
              	                      'orderby'	=> 'meta_value',
                                      'order'		=> 'ASC',
                                  );
                                  $the_query = new WP_Query( $args );
                                  $postCount = 0;
                                  if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();
                                  $postCount++;
                          ?>
                          <?php if(get_field('month')): ?>
                            <?php $date = DateTime::createFromFormat('d/m/Y', get_field('month')); ?>
                            <li>
                                <a href="javascript:void(0)" data-date="<?php echo $date->format('d/m/y'); ?>" class="cd-h-timeline__date support-text <?php if($postCount == 1): ?>cd-h-timeline__date--selected <?php endif; ?>" >
                                  <?php echo $date->format('M Y'); ?>
                                </a>
                            </li>
                          <?php endif; ?>
                          <?php endwhile; wp_reset_postdata(); else : ?>
                          <?php endif; ?>
                        </ol>
                        <span class="cd-h-timeline__filling-line" aria-hidden="true"></span>
                      </div> <!-- .cd-h-timeline__line -->
                    </div> <!-- .cd-h-timeline__dates -->

                    <ul class="list-unstyled timeline-navigation-list">
                      <li><a href="javascript:void(0)" class="text-replace cd-h-timeline__navigation cd-h-timeline__navigation--prev cd-h-timeline__navigation--inactive"></a></li>
                      <li><a href="javascript:void(0)" class="text-replace cd-h-timeline__navigation cd-h-timeline__navigation--next"></a></li>
                    </ul>
                  </div> <!-- .cd-h-timeline__container -->

                  <div class="cd-h-timeline__events timeline-content-wrapper">
                    <div class="content-list">
                      <?php
                              $args = array(
                                  'post_type' => 'our_journey',
                                  'posts_per_page' => -1,
                                  'post_status' => 'publish',
                                  'meta_key'	=> 'month',
                                  'orderby'	=> 'meta_value',
                                  'order'		=> 'ASC',
                              );
                              $the_query = new WP_Query( $args );
                              $postCount == 0;
                              if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();
                              $postCount++;
                      ?>
                      <div class="cd-h-timeline__event text-component content-list-item show <?php if($postCount == 1): ?>cd-h-timeline__event--selected<?php endif; ?>">
                        <div class="cd-h-timeline__event-content container card-wrapper">
                          <div class="row flex-centered">
                            <div class="col-12 col-md-8 col-sm-7">
                              <div class="img-blk img-blk-mobile d-block d-sm-none">
                                <?php if(get_the_post_thumbnail_url()): ?>
                                  <img src="<?php echo get_the_post_thumbnail_url() ?>"  alt="Image" />
                                <?php else: ?>
                                  <img src="<?php echo get_template_directory_uri(); ?>/img/generic_placeholder.png"  alt="Image" />
                                <?php endif; ?>
                              </div>
                              <div class="content-blk">
                                <?php if(get_field('month')): ?>
                                  <?php $date = DateTime::createFromFormat('d/m/Y', get_field('month')); ?>
                                    <h3 class="cd-h-timeline__event-date heading5">  <?php echo $date->format('M Y'); ?></h3>
                                <?php endif; ?>
                                <h2 class="cd-h-timeline__event-title heading1"><?php echo mb_strimwidth(get_the_title(),0,50,' ...') ?></h2>
                                <h4 class="cd-h-timeline__event-description color-contrast-medium paragraph">
                                    <?php echo mb_strimwidth(wp_strip_all_tags(get_the_content()),0,240,' ...') ?>
                                </h4>
                                <p>
                                  <a href="<?php echo get_field('read_more_link')?>" class="secondary-btn btn-large" target="_blank">
                                    Read More
                                  </a>
                                </p>
                              </div>
                            </div>
                            <div class="col-12 col-md-4 col-sm-5">
                              <div class="img-blk img-blk-desktop">
                                <?php if(get_the_post_thumbnail_url()): ?>
                                  <img src="<?php echo get_the_post_thumbnail_url() ?>"  alt="Image" />
                                <?php else: ?>
                                  <img src="<?php echo get_template_directory_uri(); ?>/img/generic_placeholder.png"  alt="Image" />
                                <?php endif; ?>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <?php endwhile; wp_reset_postdata(); else : ?>
                      <?php endif; ?>

                    </div>
                  </div> <!-- .cd-h-timeline__events -->
                </div>
              </div>
          </div>
      </div>
  </section>

  <section class="creating-buzz-section">
    <div class="container">
        <div class="row title-row">
            <div class="col-12">
                <h4 class="heading1">Creating buzz all around</h4>
            </div>
        </div>
        <div class="row content-row flex-not-centered">
          <?php
                  $args = array(
                      'post_type' => 'buzz',
                      'posts_per_page' => 3,
                      'post_status' => 'publish',
                      'order'		=> 'Desc',
                  );
                  $the_query = new WP_Query( $args );
                  if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();
          ?>
            <div class="col-12 col-lg-4 col-md-6 col-sm-6 flex-not-centered">
                <a href="<?php echo get_field('buzz_link') ?>" class="card-wrapper" target="_blank">
                  <div class="img-blk">
                    <?php if(get_the_post_thumbnail_url()): ?>
                        <img class="featured-img" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_the_title(); ?>">
                    <?php else: ?>
                      <img class="featured-img" src="<?php echo get_template_directory_uri(); ?>/img/generic_placeholder.png"  alt="Image" />
                    <?php endif; ?>
                  </div>
                  <div class="content-blk">
                    <h3 class="heading5"> <?php echo mb_strimwidth(wp_strip_all_tags(get_the_title()),0,88,' ...') ?></h3>
                    <div class="row flex-centered">
                      <?php if(get_field('company_logo')): ?>
                        <div class="col-6">
                          <img class="img1" src="<?php echo get_field('company_logo')['url']?>" alt="image"/>
                        </div>
                      <?php endif; ?>
                      <div class="col-6">
                        <?php if(get_field('published_date')): ?>
                        <p class="support-text date text-right">
                          <?php $date = DateTime::createFromFormat('d/m/Y', get_field('published_date')); ?>
                          <?php echo $date->format('d M Y'); ?>
                        </p>
                        <?php else: ?>
                          <p class="support-text date <?php if(get_field('published_date')): ?>text-right <?php endif; ?>">
                          <?php echo get_the_date( 'd M Y' ); ?>
                          </p>
                        <?php endif; ?>
                      </div>
                    </div>
                  </div>
                </a>
            </div>
          <?php endwhile; wp_reset_postdata(); else : ?>
          <?php endif; ?>
        </div>
    </div>
  </section>

  <?php
      $core_team = get_field('core_team');
      $volunteers = get_field('volunteers');
       if($core_team || $volunteers):
  ?>
  <section class="saasboomi-team-section team-section">
    <div class="container container-wrapper">
      <div class="row title-row">
        <div class="col-12">
            <h2 class="heading1">The SaaSBOOMi team</h2>
        </div>
      </div>
      <div class="row content-row">
        <div class="col-12">
          <?php
            $core_team = get_field('core_team');
            if($core_team && count($core_team)):
          ?>
          <div class="team-wrapper organiser-wrapper">
            <img class="bg-bottom" src="<?php echo get_template_directory_uri(); ?>/img/organiser_bottom_bg.svg"  alt="Image" />
            <img class="bg-top" src="<?php echo get_template_directory_uri(); ?>/img/organiser_right_and_top_bg.svg"  alt="Image" />
            <ul class="list-inline flex-not-centered">
              <li class="list-inline-item">
                <h3 class="heading3 team-title">Core Team</h3>
              </li>
                <?php foreach($core_team as $core): ?>
                  <li class="list-inline-item">
                    <a href="<?php if(get_field('linkedin', $core->ID)):?> <?php echo get_field('linkedin', $core->ID) ?> <?php else: ?> javascript:void(0) <?php endif;?>" class="card-wrapper" <?php if(get_field('linkedin', $core->ID)):?> target="_blank" <?php endif;?>>
                      <?php if(get_the_post_thumbnail_url($core)): ?>
                        <img src="<?php echo get_the_post_thumbnail_url($core) ?>"  alt="Image" />
                      <?php else: ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/placeholder_annual.svg"  alt="Image" />
                      <?php endif; ?>
                      <h4 class="heading4"><?php echo $core->post_title?></h4>
                      <h5 class="support-text"><?php echo get_field('designation', $core->ID) ?>, <?php echo get_field('company', $core->ID) ?></h5>
                      <?php if(get_field('responsibility', $core->ID)): ?>
                      <p class="support-text">
                        <?php echo get_field('responsibility', $core->ID) ?>, SaaSBOOMi
                      </p>
                      <?php endif; ?>
                    </a>
                  </li>
                <?php endforeach; ?>
            </ul>
          </div>
          <?php endif; ?>
          <?php
            $volunteers = get_field('volunteers');
            if($volunteers && count($volunteers)):
          ?>
          <div class="team-wrapper volunteer-wrapper background-prop">
            <img class="bg-bottom" src="<?php echo get_template_directory_uri(); ?>/img/volunteer_bottom.svg"  alt="Image" />
            <img class="bg-top" src="<?php echo get_template_directory_uri(); ?>/img/volunteer_right_and_top_bg 1.svg"  alt="Image" />
            <ul class="list-inline flex-not-centered">
              <li class="list-inline-item">
                <h3 class="heading3 team-title">Volunteers</h3>
              </li>
              <?php foreach($volunteers as $volunteer): ?>
                <li class="list-inline-item">
                  <a href="<?php if(get_field('linkedin', $volunteer->ID)):?> <?php echo get_field('linkedin', $volunteer->ID) ?> <?php else: ?> javascript:void(0) <?php endif;?>" class="card-wrapper" <?php if(get_field('linkedin', $volunteer->ID)):?> target="_blank" <?php endif;?>>
                    <?php if(get_the_post_thumbnail_url($volunteer)): ?>
                      <img src="<?php echo get_the_post_thumbnail_url($volunteer) ?>"  alt="Image" />
                    <?php else: ?>
                      <img src="<?php echo get_template_directory_uri(); ?>/img/placeholder_annual.svg"  alt="Image" />
                    <?php endif; ?>
                    <h4 class="heading4"><?php echo $volunteer->post_title?></h4>
                    <h5 class="support-text"><?php echo get_field('designation', $volunteer->ID) ?>, <?php echo get_field('company', $volunteer->ID) ?></h5>
                    <?php if(get_field('responsibility', $volunteer->ID)): ?>
                    <p class="support-text">
                      <?php echo get_field('responsibility', $volunteer->ID) ?>, SaaSBOOMi
                    </p>
                    <?php endif; ?>
                  </a>
                </li>
              <?php endforeach; ?>
            </ul>
          </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </section>
  <?php endif;?>

  <?php get_template_part('templates/template-newsletter'); ?>


</div>

<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/wow.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/util.js"></script> <!-- util functions included in the CodyHouse framework -->
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/swipe-content.js"></script> <!-- A Vanilla JavaScript plugin to detect touch interactions -->
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>

<script type="text/javascript">
  $(document).ready(function () {
    // new WOW().init();
    $('.community-slider').owlCarousel({
       items:2,
       dots:true,
       loop:false,
       mouseDrag: false,
       autoplay:false,
       autoplayTimeout:3000,
       smartSpeed: 1000,
       autoplayHoverPause:true,
       nav:true,
       margin: 16,
       stagePadding: 30,
       navText:['<i class="fa fa-chevron-left"></i>','<i class="fa fa-chevron-right"></i>']
    });
    // $('.cd-h-timeline__line ul li:first-child a').addClass('cd-h-timeline__date--selected');
    // $('.timeline-content-wrapper .content-list .content-list-item:first-child').addClass('cd-h-timeline__event--selected ');

    // $('.cd-h-timeline__line ul li a').on('click',function(){
    //   var id = $(this).attr('data-date');
    //   $('.cd-h-timeline__line ul li a').removeClass('cd-h-timeline__date--selected');
    //   $(this).addClass('cd-h-timeline__date--selected');
    //   // $('.platform').hide();
    //   // $('.'+id).show();
    // });
    //
    // $('.cd-h-timeline__line ul li a').click(function(e) {
    //
    //     $('.cd-h-timeline__line ul li a.active').removeClass('cd-h-timeline__date--selected');
    //
    //     var $parent = $(this).parent();
    //     $parent.addClass('cd-h-timeline__date--selected');
    //     e.preventDefault();
    // });

  });
</script>

<?php get_footer(); ?>
