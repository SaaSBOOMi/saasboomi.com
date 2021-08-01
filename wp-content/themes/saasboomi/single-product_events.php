<?php get_header(); ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/annual-events-page.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/global-events-page.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/owl.carousel.min.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/animate.css">

<div class="event-annual-page event-product-page">
  <?php
    $current_post = null;
    $is_past_event = false;
    $current_event_completed = false;
    if(isset($_GET['post_slug'])){
      $the_slug = 'my_slug';
      $args = array(
        'name'        => $_GET['post_slug'],
        'post_type'   => 'product_events',
        'post_status' => 'publish',
        'numberposts' => 1
      );
      $past_event = wp_get_recent_posts($args);
      if($past_event && count($past_event)){
        $current_post = $past_event;
        $is_past_event = true;
      }else{
        $args = array(
          'post_type' => 'product_events',
          'posts_per_page' => 1,
          'post_status' => 'publish',
          'numberposts' => 1,
          'orderby' => 'meta_value',
          'meta_key' => 'event_dates_to_date',
          'order' => 'DESC'
        );
        $current_post = wp_get_recent_posts($args);
      }
    }else{
      $args = array(
        'post_type' => 'product_events',
        'posts_per_page' => 1,
        'post_status' => 'publish',
        'numberposts' => 1,
        'orderby' => 'meta_value',
        'meta_key' => 'event_dates_to_date',
        'order' => 'DESC'
      );
      $current_post = wp_get_recent_posts($args);
    }
  ?>
  <?php if(count($current_post) > 0): ?>
  <?php
    $current_post = $current_post[0];
    $current_post_date = date(get_field('event_dates')['from_date']);
    $current_post_end_date = date(get_field('event_dates', $current_post["ID"])['to_date']);
    $current_date = date("m/d/Y");
    if(strtotime($current_date) > strtotime($current_post_end_date) && !$is_past_event){
      $current_event_completed = true;
    }
  ?>
  <section class="event-banner-section">
    <div class="container container-wrapper">
      <div class="row flex-centered">
        <div class="col-sm-6 col-md-6 col-lg-6 col-12 left-blk">
          <img src="<?php echo get_template_directory_uri(); ?>/img/product_logo_black.svg"  alt="Product" />
          <h1 class="heading2"><?php echo get_the_title()?></h1>
          <div class="registration-content">
            <?php if(!$is_past_event && !$current_event_completed):?>
            <p class="heading4" style="font-size:14px;">Registrations open for <?php echo get_the_title($current_post["ID"]) ?></p>
            <?php if(date(get_field('event_dates')['from_date']) == date(get_field('event_dates')['to_date'])): ?>
            <h2 class="heading2 date"><?php echo date('jS F Y',strtotime(get_field('event_dates')['from_date'])) ?></h2>
            <?php else: ?>
            <h2 class="heading2 date"><?php echo date('jS',strtotime(get_field('event_dates')['from_date'])) ?> - <?php echo date('jS F Y',strtotime(get_field('event_dates')['to_date'])) ?></h2>
            <?php endif; ?>
            <?php elseif($current_event_completed && $is_past_event): ?>
              <p class="heading4">SaaSBOOMi Product <?php echo date('Y', strtotime('+1 year')); ?></p>
              <h2 class="heading2 date">Coming Soon!</h2>
            <?php else: ?>
            <h2 class="heading2 date">Thank you for attending product <?php echo date('Y',strtotime(get_field('event_dates')['to_date']))?>!</h2>
            <?php endif?>
            <ul class="list-inline">
              <?php if(!$is_past_event && !$current_event_completed && (strtotime($current_date) < strtotime($current_post_date))):?>
              <li class="list-inline-item">
                <a href="<?php echo get_home_url() ?>/product-registration?title=<?php echo get_the_title($current_post["ID"]) ?>&start_date=<?php echo date('jS F Y', strtotime(get_field('event_dates', $current_post["ID"])['from_date'])) ?>&end_date=<?php echo date('jS F Y', strtotime(get_field('event_dates', $current_post["ID"])['to_date'])) ?>&duration=<?php echo get_field('events_duration', $current_post["ID"]) ?>" class="primary-btn primary-btn-dark btn-small d-none">
                  Apply Now
                </a>
                <a
                  href="
                  <?php if (get_field('registration_form_link')) : ?>
                    <?php echo get_field('registration_form_link') ?>
                  <?php else : ?>
                    <?php echo get_home_url() ?>/product-registration?title=<?php echo get_the_title($current_post["ID"]) ?>&start_date=<?php echo date('jS F Y', strtotime(get_field('event_dates', $current_post["ID"])['from_date'])) ?>&end_date=<?php echo date('jS F Y', strtotime(get_field('event_dates', $current_post["ID"])['to_date'])) ?>&duration=<?php echo get_field('events_duration', $current_post["ID"]) ?>
                  <?php endif; ?>"
                  class="primary-btn primary-btn-dark btn-small"
                  <?php if (get_field('registration_form_link')): ?> target="_blank" <?php endif; ?>
                  >
                  Apply Now
                </a>
              </li>
              <li class="list-inline-item">
                <span class="support-text">
                  <?php echo get_field('events_duration') ?>
                </span>
              </li>
              <?php elseif($is_past_event): ?>
                <li class="list-inline-item hidden">
                  <a href="javascript:void(0)" class="primary-btn primary-btn-dark btn-small">
                    WATCH REPLAY
                  </a>
                </li>
              <?php else: ?>
              <?php endif; ?>
            </ul>
            <?php if($is_past_event || $current_event_completed): ?>
                <p class="heading4" style="margin-bottom:8px;">
                  Stay updated about upcoming Event
                </p>
                <form id="upcomingEventNotifyForm" class="stay-updated-form" data-parsley-validate="">
                  <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-8">
                      <div class="form-group">
                        <label class="heading4 d-none">Email</label>
                        <input name="entry.1488770450" type="email" name="email" class="form-control paragraph" id="email" placeholder="Enter Email Address" data-parsley-required>
                      </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                      <div class="submit-blk">
                        <input type="submit" value="Notify Me" class="primary-btn primary-btn-dark btn-large">
                      </div>
                    </div>
                  </div>
                  <span class="form-submission-status paragraph">Submitted</span>
                </form>
            <?php endif; ?>
          </div>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-6 col-12 right-blk">
          <div class="vedio-blk background-prop" <?php if (get_field('video_video_link', $current_post["ID"])) : ?> data-toggle="modal" data-target="#vedioModal" style="cursor: pointer;" <?php endif; ?>>
            <?php if (get_field('video_video_link', $current_post["ID"])) : ?>
              <div class="play-vedio">
                <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M32.1691 42H9.8309C4.40144 42 0 37.5986 0 32.1691V9.8309C0 4.40144 4.40144 0 9.8309 0H32.1691C37.5986 0 42 4.40144 42 9.8309V32.1691C42 37.5986 37.5986 42 32.1691 42Z" fill="#FF6699" />
                  <path d="M16.4736 11.8068L28.2771 18.6215C28.6942 18.8627 29.0406 19.2094 29.2813 19.6267C29.5221 20.0441 29.6488 20.5175 29.6488 20.9993C29.6488 21.4811 29.5221 21.9545 29.2813 22.3718C29.0406 22.7892 28.6942 23.1359 28.2771 23.3771L16.4736 30.1918C16.0561 30.4323 15.5827 30.5588 15.1008 30.5586C14.6189 30.5583 14.1456 30.4313 13.7283 30.1903C13.3111 29.9493 12.9646 29.6027 12.7236 29.1854C12.4826 28.7682 12.3557 28.2948 12.3555 27.813V14.1836C12.356 13.7019 12.4832 13.2288 12.7244 12.8118C12.9655 12.3948 13.312 12.0486 13.7292 11.8078C14.1464 11.567 14.6196 11.4401 15.1013 11.44C15.583 11.4398 16.0563 11.5663 16.4736 11.8068Z" fill="white" />
                </svg>
                <p class="support-text play-vedio-text">Play video</p>
              </div>
            <?php endif; ?>
            <svg class="complete-vedio-bg" width="455" height="470" viewBox="0 0 330 341" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" clip-rule="evenodd" d="M294.01 0H0V341H329.579V0H294.01ZM294.01 0C305.425 0 315.386 8.94723 315.975 20.941L329.552 297.513C330.221 311.147 318.436 322.096 304.875 320.439L41.3868 288.249C28.7986 286.711 20.1061 274.899 22.3916 262.435L57.5694 70.5995C59.1337 62.0687 65.5663 55.251 73.9977 53.1878L288.731 0.641046C290.506 0.206772 292.274 0 294.01 0Z" fill="white"/>
              <path d="M40.3552 164.474L3.95611 216.954C-4.24666 228.78 0.841749 245.196 14.2813 250.264L23.9546 253.912L40.3552 164.474Z" fill="#FF6699"/>
              <path d="M150.297 301.555L251.127 339.577C263.97 344.42 278.049 336.421 280.523 322.877L281.49 317.582L150.297 301.555Z" fill="#FF6699"/>
              <path d="M320.148 105.957L325.946 74.2185C327.536 65.5161 323.863 57.3724 317.528 52.5708L320.148 105.957Z" fill="#FF6699"/>
            </svg>
            <?php if(get_field('video_video_thumbnail', $current_post['ID'])): ?>
            <img class="featured-vedio-img" src="<?php echo get_field('video_video_thumbnail', $current_post['ID'])["url"]?>" alt="image"/>
            <?php else: ?>
            <img class="featured-vedio-img" src="<?php echo get_template_directory_uri(); ?>/img/featured_vedio_img.png"  alt="Product" />
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="introduction-section">
    <div class="container container-wrapper">
      <div class="tab-list-wrapper">
        <div class="row title-row flex-centered">
          <div class="col-sm-10 col-md-10 col-lg-10 col-12 left-blk">
            <ul class="list-inline tab-list" id="tabsList">
              <li class="active scenario list-inline-item event-logo" id="platform0" style="padding-right:30px;display: none;">
                <img src="<?php echo get_template_directory_uri(); ?>/img/product_logo_black.svg"  alt="Image" style="margin-top:-4px; height:28px;"/>
              </li>
              <li class="active scenario list-inline-item" id="platform1" data-class="about-section">
                <?php if($current_event_completed || $is_past_event): ?>
                  <a href="javascript:void(0)" class="paragraph">Highlights <?php echo date('Y',strtotime(get_field('event_dates', $current_post["ID"])['from_date'])) ?></a>
                <?php else: ?>
                  <a href="javascript:void(0)" class="paragraph">About</a>
                <?php endif; ?>
              </li>
              <?php
              $speakers = get_field('speakers');
              if ($speakers && count($speakers)) :
              ?>
              <li class="scenario list-inline-item" id="platform2" data-class="speaker-section">
                <a href="javascript:void(0)" class="paragraph">Speakers</a>
              </li>
              <?php endif; ?>
              <?php
              $event_agenda = get_field('event_agenda');
              if ($event_agenda && count($event_agenda)) :
              ?>
              <li class="scenario list-inline-item" id="platform3" data-class="agenda-section">
                <a href="javascript:void(0)" class="paragraph">Agenda</a>
              </li>
              <?php endif; ?>

              <?php
                  $organisers = get_field('organisers');
                  $volunteers = get_field('volunteers');
              ?>
              <?php if( $organisers || $volunteers): ?>
              <li class="scenario list-inline-item" id="platform4" data-class="team-section">
                <a href="javascript:void(0)" class="paragraph">SaaSBOOMi Team</a>
              </li>
              <?php endif; ?>

              <?php
              $testimonials = get_field('testimonials');
              if ($testimonials && count($testimonials)) :
              ?>
              <li class="scenario list-inline-item" id="platform5" data-class="testimonials-section">
                <a href="javascript:void(0)" class="paragraph">Testimonials</a>
              </li>
              <?php endif; ?>
            </ul>
          </div>
          <div class="col-sm-2 col-md-2 col-lg-2 col-12 right-blk">
            <?php if(!$is_past_event && (strtotime($current_date) < strtotime($current_post_date))): ?>
              <p class="text-right">
                <a
                  href="
                  <?php if (get_field('registration_form_link')) : ?>
                    <?php echo get_field('registration_form_link') ?>
                  <?php else : ?>
                    <?php echo get_home_url() ?>/product-registration?title=<?php echo get_the_title($current_post["ID"]) ?>&start_date=<?php echo date('jS F Y', strtotime(get_field('event_dates', $current_post["ID"])['from_date'])) ?>&end_date=<?php echo date('jS F Y', strtotime(get_field('event_dates', $current_post["ID"])['to_date'])) ?>&duration=<?php echo get_field('events_duration', $current_post["ID"]) ?>
                  <?php endif; ?>"
                  class="primary-btn primary-btn-dark btn-small"
                  <?php if (get_field('registration_form_link')): ?> target="_blank" <?php endif; ?>
                  >
                  Apply Now
                </a>
              </p>
            <?php endif;?>
            <?php if($is_past_event || $current_event_completed): ?>
              <p class="text-right">
                <a href="javascript:void(0)" class="primary-btn primary-btn-dark btn-small" data-toggle="modal" data-target="#vedioModal">
                  WATCH REPLAY
                </a>
              </p>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="about-section">
    <?php if(!$current_event_completed && !$is_past_event): ?>
    <div class="present-info-wrapper">
      <div class="container container-wrapper">
        <div class="row content-row">
          <div class="col-sm-6 col-md-6 col-lg-6 col-12 left-blk">
            <h3 class="heading1"><?php echo get_field('about_title', $current_post['ID'])?></h3>
            <p class="paragraph description">
              <?php echo get_field('about_sub_text', $current_post['ID'])?>
            </p>
            <p class="color-bar yellow-bar">
              <span></span>
            </p>
            <h4 class="heading3">What's in store?</h4>
            <div class="row store-content-row">
              <div class="
                <?php if (get_field('about_store_3_image', $current_post['ID']) || get_field('about_store_3_title', $current_post['ID']) || get_field('about_store_3_subtext', $current_post['ID'])) : ?>
                  col-sm-6 col-md-6 col-lg-4 col-12
                <?php elseif(get_field('about_store_2_image', $current_post['ID']) || get_field('about_store_2_title', $current_post['ID']) || get_field('about_store_2_subtext', $current_post['ID'])) :?>
                  col-sm-6 col-md-6 col-lg-6 col-12
                <?php else: ?>
                  col-12
                <?php endif; ?>">
                <div class="card-wrapper">
                  <?php if (get_field('about_store_1_image', $current_post['ID'])) : ?>
                  <div class="img-blk">
                    <img src="<?php echo get_field('about_store_1_image', $current_post['ID'])["url"]?>"  alt="Roundtable" />
                  </div>
                  <?php endif; ?>
                  <h5 class="heading4"><?php echo get_field('about_store_1_title', $current_post['ID'])?></h5>
                  <p class="support-text">
                    <?php echo get_field('about_store_1_subtext', $current_post['ID'])?>
                  </p>
                </div>
              </div>
              <div class="<?php if (get_field('about_store_3_image', $current_post['ID']) || get_field('about_store_3_title', $current_post['ID']) || get_field('about_store_3_subtext', $current_post['ID'])) : ?>col-sm-6 col-md-6 col-lg-4 col-12 <?php else: ?> col-sm-6 col-md-6 col-lg-6 <?php endif; ?>">
                <div class="card-wrapper">
                  <?php if (get_field('about_store_2_image', $current_post['ID'])) : ?>
                  <div class="img-blk">
                    <img src="<?php echo get_field('about_store_2_image', $current_post['ID'])["url"]?>"  alt="Networking" />
                  </div>
                  <?php endif; ?>
                  <h5 class="heading4"><?php echo get_field('about_store_2_title', $current_post['ID'])?></h5>
                  <p class="support-text">
                    <?php echo get_field('about_store_2_subtext', $current_post['ID'])?>
                  </p>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-4 col-12">
                <div class="card-wrapper">
                  <?php if (get_field('about_store_3_image', $current_post['ID'])) : ?>
                  <div class="img-blk">
                    <img src="<?php echo get_field('about_store_3_image', $current_post['ID'])["url"]?>"  alt="Curated Events" />
                  </div>
                  <?php endif; ?>
                  <h5 class="heading4"><?php echo get_field('about_store_3_title', $current_post['ID'])?></h5>
                  <p class="support-text">
                    <?php echo get_field('about_store_3_subtext', $current_post['ID'])?>
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-6 col-lg-6 col-12 right-blk">
            <div class="featured-img-blk">
              <svg class="pattern1" width="35" height="25" viewBox="0 0 35 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M0 25L-2.18557e-07 20L25 20L25 25L0 25ZM-8.30516e-07 6L-1.09278e-06 0L16 -6.99382e-07L16 6L-8.30516e-07 6ZM9 11L9 15L35 15L35 11L9 11ZM29 25L29 20L35 20L35 25L29 25ZM-6.11959e-07 11L-4.37107e-07 15L6 15L6 11L-6.11959e-07 11Z" fill="#FF6699" />
              </svg>
              <?php if (get_field('about_image1', $current_post['ID'])) : ?>
                <img class="image1" src="<?php echo get_field('about_image1', $current_post['ID'])["url"] ?>" alt="Image" />
              <?php else : ?>
                <img class="image1" src="<?php echo get_template_directory_uri(); ?>/img/generic_placeholder.png" alt="Image" />
              <?php endif; ?>
              <div class="image2-wrapper">
                <span class="image2-blk">
                  <?php if (get_field('about_image2', $current_post['ID'])) : ?>
                    <img class="image2" src="<?php echo get_field('about_image2', $current_post['ID'])["url"] ?>" alt="Image" />
                  <?php else : ?>
                    <img class="image2" src="<?php echo get_template_directory_uri(); ?>/img/generic_placeholder.png" alt="Image" />
                  <?php endif; ?>
                </span>
                <svg class="pattern2" width="35" height="25" viewBox="0 0 35 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M0 25L-2.18557e-07 20L25 20L25 25L0 25ZM-8.30516e-07 6L-1.09278e-06 0L16 -6.99382e-07L16 6L-8.30516e-07 6ZM9 11L9 15L35 15L35 11L9 11ZM29 25L29 20L35 20L35 25L29 25ZM-6.11959e-07 11L-4.37107e-07 15L6 15L6 11L-6.11959e-07 11Z" fill="#FF6699" />
                </svg>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php else:?>
    <div class="past-info-wrapper">
      <div class="container container-wrapper">
        <div class="row title-row flex-centered">
          <div class="col-sm-6 col-md-5 col-lg-5 col-12 left-blk">
            <h3 class="heading1"><?php echo get_field('about_title', $current_post['ID'])?></h3>
          </div>
          <div class="col-sm-6 col-md-7 col-lg-7 col-12 left-blk">
            <p class="paragraph description">
              <?php echo get_field('about_sub_text', $current_post['ID'])?>
            </p>
          </div>
        </div>
        <div class="row content-row">
          <div class="col-md-10 col-lg-10 col-sm-12 col-12 offset-md-1 offset-lg-1 offset-sm-0">
            <div class="row features-row">
              <div class="col-sm-4 col-md-4 col-lg-4 col-12">
                <div class="card-wrapper flex-centered">
                  <div class="img-blk">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/startups.svg"  alt="Startups" />
                  </div>
                  <div class="content-blk">
                    <h5 class="heading1 count"><?php echo get_field('startups', $current_post['ID'])?>+</h5>
                    <h6 class="heading5">
                      Startups
                    </h6>
                  </div>
                </div>
              </div>
              <div class="col-sm-4 col-md-4 col-lg-4 col-12">
                <div class="card-wrapper flex-centered">
                  <div class="img-blk">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/audience.svg"  alt="Audience" />
                  </div>
                  <div class="content-blk">
                    <h5 class="heading1 count"><?php echo get_field('audience', $current_post['ID'])?>+</h5>
                    <h6 class="heading5">
                      Audience
                    </h6>
                  </div>
                </div>
              </div>
              <div class="col-sm-4 col-md-4 col-lg-4 col-12">
                <div class="card-wrapper flex-centered">
                  <div class="img-blk">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/sessions.svg"  alt="Sessions" />
                  </div>
                  <div class="content-blk">
                    <h5 class="heading1 count"><?php echo get_field('sessions', $current_post['ID'])?>+</h5>
                    <h6 class="heading5">
                      Sessions
                    </h6>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php
      $gallery = CFS()->get('images', $current_post['ID']);
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
              <p class="color-bar yellow-bar text-right bottom-bar">
                <span></span>
              </p>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-7 col-lg-7 col-12 left-blk">
          <div class="row content-row">
            <div class="col-sm-7 col-md-7 col-lg-7 col-12 grid-blk">
              <p class="color-bar yellow-bar text-right top-bar">
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
              <?php if($images[8]): ?>
                <img class="img9" src="<?php echo $images[8]?>"  alt="Image" />
              <?php else: ?>
                <img class="img9" src="<?php echo get_template_directory_uri(); ?>/img/generic_placeholder.png"  alt="Image" />
              <?php endif;?>
              <p class="color-bar yellow-bar text-right bottom-bar">
                <span></span>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php endif;?>
    <?php endif;?>
  </section>

  <?php
    $speakers = get_field('speakers');
    $counter = 0;
    if($speakers && count($speakers)):
  ?>
  <section class="featured-speakers-section speaker-section">
    <div class="container container-wrapper">
      <div class="row title-row">
        <div class="col-12">
            <h2 class="heading1">Our Featured <?php if(count($speakers) > 1 ): ?>Speakers <?php else: ?> Speaker <?php endif; ?></h2>
        </div>
      </div>
      <div class="row content-row flex-not-centered">
          <?php
            foreach($speakers as $speaker):
          ?>

          <?php
            $counter++;
            if ($counter <= 8):
          ?>
            <div class="col-sm-4 col-md-4 col-lg-3 col-12 card-outer-wrapper">
              <a href="<?php if(get_field('linkedin', $speaker->ID)):?> <?php echo get_field('linkedin', $speaker->ID) ?> <?php else: ?> javascript:void(0) <?php endif;?>" class="card-wrapper" <?php if(get_field('linkedin', $speaker->ID)):?> target="_blank" <?php endif;?>>
                <div class="img-blk">
                  <?php if(get_the_post_thumbnail_url($speaker)): ?>
                    <img src="<?php echo get_the_post_thumbnail_url($speaker) ?>"  alt="Image" />
                  <?php else: ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/placeholder_annual.svg"  alt="Image" />
                  <?php endif; ?>
                </div>
                <h3 class="heading4"><?php echo $speaker->post_title?></h3>
                <p class="support-text">
                  <?php echo get_field('designation', $speaker->ID) ?>, <?php echo get_field('company', $speaker->ID) ?>
                </p>
              </a>
            </div>
          <?php else: ?>
          <div class="col-sm-4 col-md-4 col-lg-3 col-12 card-outer-wrapper card-hidden">
            <a href="<?php if(get_field('linkedin', $speaker->ID)):?> <?php echo get_field('linkedin', $speaker->ID) ?> <?php else: ?> javascript:void(0) <?php endif;?>" class="card-wrapper" <?php if(get_field('linkedin', $speaker->ID)):?> target="_blank" <?php endif;?>>
              <div class="img-blk">
                <?php if(get_the_post_thumbnail_url($speaker)): ?>
                  <img src="<?php echo get_the_post_thumbnail_url($speaker) ?>"  alt="Image" />
                <?php else: ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/placeholder_annual.svg"  alt="Image" />
                <?php endif; ?>
              </div>
              <h3 class="heading4"><?php echo $speaker->post_title?></h3>
              <p class="support-text">
                <?php echo get_field('designation', $speaker->ID) ?>, <?php echo get_field('company', $speaker->ID) ?>
              </p>
            </a>
          </div>
          <?php endif; ?>
          <?php endforeach; ?>
      </div>
      <?php if(count($speakers) > 8 ): ?>
      <div class="row view-all-row">
        <div class="col-md-12">
          <p class="show-more-btn">
            <a href="javascript:void(0)" class="secondary-btn btn-large" id="showMore">
              <span>View all speakers</span>
            </a>
          </p>
        </div>
      </div>
      <?php endif; ?>
    </div>
  </section>
  <?php endif ?>

  <?php if(!$is_past_event && !$current_event_completed && (strtotime($current_date) < strtotime($current_post_date))): ?>
  <section class="cta-section">
    <div class="container container-wrapper">
      <div class="cta-wrapper">
        <div class="row flex-centered">
          <div class="col-sm-6 col-md-6 col-lg-6 col-12 left-blk">
            <div class="registration-content">
              <h3 class="heading4">Registrations open for <?php echo get_the_title($current_post["ID"]) ?></h3>
              <?php if(date(get_field('event_dates')['from_date']) == date(get_field('event_dates')['to_date'])): ?>
              <h4 class="heading3 date"><?php echo date('jS F Y',strtotime(get_field('event_dates')['from_date'])) ?></h4>
              <?php else: ?>
              <h4 class="heading3 date"><?php echo date('jS',strtotime(get_field('event_dates')['from_date'])) ?> - <?php echo date('jS F Y',strtotime(get_field('event_dates')['to_date'])) ?></h4>
              <?php endif; ?>
              <h4 class="heading3 date hidden"><?php echo date('jS',strtotime(get_field('event_dates')['from_date'])) ?> - <?php echo date('jS F Y',strtotime(get_field('event_dates')['to_date'])) ?></h4>
              <p class="support-text">
                <?php echo get_field('events_duration') ?>
              </p>
            </div>
          </div>
          <div class="col-sm-6 col-md-6 col-lg-6 col-12 right-blk">
            <p class="apply-btn">
              <a
                href="
                <?php if (get_field('registration_form_link')) : ?>
                  <?php echo get_field('registration_form_link') ?>
                <?php else : ?>
                  <?php echo get_home_url() ?>/product-registration?title=<?php echo get_the_title($current_post["ID"]) ?>&start_date=<?php echo date('jS F Y', strtotime(get_field('event_dates', $current_post["ID"])['from_date'])) ?>&end_date=<?php echo date('jS F Y', strtotime(get_field('event_dates', $current_post["ID"])['to_date'])) ?>&duration=<?php echo get_field('events_duration', $current_post["ID"]) ?>
                <?php endif; ?>"
                class="primary-btn primary-btn-dark btn-small"
                <?php if (get_field('registration_form_link')): ?> target="_blank" <?php endif; ?>
                >
                Apply Now
              </a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php endif; ?>
  <?php
    $event_agenda = get_field('event_agenda');
    if($event_agenda && count($event_agenda)):
  ?>
  <section class="events-agenda-section agenda-section">
    <div class="container container-wrapper">
      <div class="row title-row">
        <div class="col-12">
            <h2 class="heading1">Event Agenda</h2>
        </div>
      </div>
      <div class="row content-row">
        <div class="col-sm-3 col-md-3 col-lg-3 col-12 left-blk">
          <div class="day-list">
            <?php foreach($event_agenda as $key=>$event): ?>
            <div class="day-item <?php if($key == 0): ?> active <?php endif;?>" data-id="<?php echo $key ?>">
              <a class="card-wrapper">
                <svg class="pattern-img" width="35" height="25" viewBox="0 0 35 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M0 25L-2.18557e-07 20L25 20L25 25L0 25ZM-8.30516e-07 6L-1.09278e-06 0L16 -6.99382e-07L16 6L-8.30516e-07 6ZM9 11L9 15L35 15L35 11L9 11ZM29 25L29 20L35 20L35 25L29 25ZM-6.11959e-07 11L-4.37107e-07 15L6 15L6 11L-6.11959e-07 11Z" fill="#FF6699"/>
                </svg>
                <h3 class="heading2"><?php echo get_field('day_label', $event->ID)?></h3>
                <p class="paragraph date">
                  <?php echo $event->post_title?>
                </p>
              </a>
            </div>
            <?php endforeach; ?>
          </div>
        </div>
        <div class="col-sm-9 col-md-9 col-lg-9 col-12 right-blk">
          <?php foreach($event_agenda as $key=>$event): ?>
          <div class="content-wrapper timeline-content-wrapper" <?php if($key==0):?> style="display:block;" <?php else: ?> style="display:none;" <?php endif;?> data-id="<?php echo $key?>">
            <?php
              $timelines = CFS()->get('timeline', $event->ID);
            ?>
            <?php foreach($timelines as $timeline): ?>
            <div class="day-item-content">
              <div class="day-item-content-visible day-item-content-wrapper">
                <!-- //multiple events// -->
                <?php if(count($timeline["session"]) > 1): ?>
                <div class="row card-row multiple-events-row">
                  <div class="col-sm-3 col-md-3 col-lg-3 col-12 left-blk text-center">
                    <h4 class="heading5 time"><?php echo $timeline["duration"] ?> <span>(IST)</span></h4>
                    <p>
                      <span class="primary-btn primary-btn-dark btn-small">Multiple Events</span>
                    </p>
                  </div>
                  <div class="col-sm-9 col-md-9 col-lg-9 col-12 right-blk">
                    <?php foreach($timeline["session"] as $session): ?>
                      <p class="paragraph">
                        <?php echo $session['title']?>
                      </p>
                    <?php endforeach;?>
                    <p class="paragraph hidden">
                      <span class="support-text more-btn">+2 More</span>
                    </p>
                  </div>
                </div>
                <?php else: ?>
                <!-- //single events// -->
                <div class="row card-row single-events-row">
                  <div class="col-sm-3 col-md-3 col-lg-3 col-12 left-blk text-center">
                    <h4 class="heading5 time"><?php echo $timeline["duration"] ?> <span>(IST)</span></h4>
                  </div>
                  <div class="col-sm-9 col-md-9 col-lg-9 col-12 right-blk">
                    <?php foreach($timeline["session"] as $session): ?>
                      <p class="paragraph">
                        <?php echo $session['title']?>
                      </p>
                    <?php endforeach;?>
                  </div>
                </div>
                <?php endif; ?>
                <img class="down-arrow" src="<?php echo get_template_directory_uri(); ?>/img/down_arrow.svg"  alt="Image" />
              </div>
              <div class="day-item-content-hidden day-item-content-wrapper" style="display:none;">
                <img class="down-arrow" src="<?php echo get_template_directory_uri(); ?>/img/down_arrow.svg"  alt="Image" />
                <?php foreach($timeline["session"] as $session): ?>
                <div class="card-item">
                  <div class="row card-row">
                    <div class="col-sm-3 col-md-3 col-lg-3 col-12 left-blk text-center">
                      <h4 class="heading5 time"><?php echo $timeline["duration"] ?> <span>(IST)</span></h4>
                    </div>
                    <div class="col-sm-9 col-md-9 col-lg-9 col-12 right-blk">
                      <div class="wrapper">
                        <p class="paragraph">
                          <?php echo $session['title']?>
                        </p>
                        <div class="speakers-wrapper">
                          <h5 class="heading4">Speakers</h5>
                          <div class="row users-row">
                            <?php foreach($session["speaker"] as $speaker ): ?>
                            <?php
                              $speaker = get_post($speaker);
                            ?>
                            <div class="col-sm-6 col-md-6 col-lg-6 col-12 users-blk">
                              <div class="profile-blk flex-centered">
                                <div class="img-blk">
                                <?php if(get_the_post_thumbnail_url($speaker)): ?>
                                  <img src="<?php echo get_the_post_thumbnail_url($speaker) ?>"  alt="Image" />
                                <?php else:?>
                                  <img src="<?php echo get_template_directory_uri(); ?>/img/default_profile_picture.png"  alt="Image" />
                                <?php endif;?>
                                </div>
                                <div class="content-blk">
                                  <h4 class="heading4"><?php echo $speaker->post_title?></h4>
                                  <p class="support-text">
                                    <?php echo get_field('designation', $speaker->ID)?>, <?php echo get_field('company', $speaker->ID)?>
                                  </p>
                                </div>
                              </div>
                            </div>
                            <?php endforeach;?>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <?php endforeach;?>
              </div>
            </div>
            <?php endforeach;?>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </section>
  <?php endif; ?>
  <?php
    $organisers = get_field('organisers', $current_post["ID"]);
    $volunteers = get_field('volunteers', $current_post["ID"]);
  ?>
  <?php if ($organisers || $volunteers) : ?>
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
            $organisers = get_field('organisers');
            if($organisers && count($organisers)):
          ?>
          <div class="team-wrapper organiser-wrapper">
            <img class="bg-bottom" src="<?php echo get_template_directory_uri(); ?>/img/organiser_bottom_bg.svg"  alt="Image" />
            <img class="bg-top" src="<?php echo get_template_directory_uri(); ?>/img/organiser_right_and_top_bg.svg"  alt="Image" />
            <ul class="list-inline flex-not-centered">
              <li class="list-inline-item">
                <h3 class="heading3 team-title">Organisers</h3>
              </li>
                <?php foreach($organisers as $organiser): ?>
                  <li class="list-inline-item">
                    <a href="<?php if(get_field('linkedin', $organiser->ID)):?> <?php echo get_field('linkedin', $organiser->ID) ?> <?php else: ?> javascript:void(0) <?php endif;?>" class="card-wrapper" <?php if(get_field('linkedin', $organiser->ID)):?> target="_blank" <?php endif;?>>
                      <?php if(get_the_post_thumbnail_url($organiser)): ?>
                        <img src="<?php echo get_the_post_thumbnail_url($organiser) ?>"  alt="Image" />
                      <?php else: ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/placeholder_annual.svg"  alt="Image" />
                      <?php endif; ?>
                      <h4 class="heading4"><?php echo $organiser->post_title?></h4>
                      <h5 class="support-text"><?php echo get_field('designation', $organiser->ID) ?>, <?php echo get_field('company', $organiser->ID) ?></h5>
                      <?php if(get_field('responsibility', $organiser->ID)):?>
                      <p class="support-text">
                        <?php echo get_field('responsibility', $organiser->ID) ?>, SaaSBOOMi
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
                    <?php if(get_field('responsibility', $volunteer->ID)):?>
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

  <?php if($current_event_completed): ?>
  <section class="stay-updated-section d-none">
    <div class="container container-wrapper">
      <div class="stay-updated-wrapper">
        <img class="bg-bottom" src="<?php echo get_template_directory_uri(); ?>/img/stay_updated_bottom_bg_new.svg"  alt="Image" />
        <img class="bg-top" src="<?php echo get_template_directory_uri(); ?>/img/stay_updated_top_bg.svg"  alt="Image" />
        <div class="row content-row">
            <div class="col-sm-6 col-md-6 col-lg-6 col-12 left-blk">
              <svg class="pattern-img" width="35" height="25" viewBox="0 0 35 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M0 25L-2.18557e-07 20L25 20L25 25L0 25ZM-8.30516e-07 6L-1.09278e-06 0L16 -6.99382e-07L16 6L-8.30516e-07 6ZM9 11L9 15L35 15L35 11L9 11ZM29 25L29 20L35 20L35 25L29 25ZM-6.11959e-07 11L-4.37107e-07 15L6 15L6 11L-6.11959e-07 11Z" fill="#FF6699"/>
              </svg>
              <h3 class="heading3">Stay Updated</h3>
              <p class="paragraph">
                Fill out the form to stay updated about <br/>
                Product Event
              </p>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-6 col-12 right-blk">
              <!-- <form id="upcomingEventNotifyForm">
                <div class="form-group">
                  <label class="heading4">Name</label>
                  <input name="entry.2014028659" type="text" name="fullname" maxlength="80" minlength="3" class="form-control paragraph" id="fname" placeholder="Enter Full Name" data-parsley-required>
                </div>
                <div class="form-group">
                  <label class="heading4">Email</label>
                  <input name="entry.1488770450" type="email" name="email" class="form-control paragraph" id="email" placeholder="Enter Email Address" data-parsley-required>
                </div>
                <div class="submit-blk">
                  <input type="submit" value="Notify Me" class="primary-btn primary-btn-dark btn-large">
                  <span class="form-submission-status paragraph">Submitted</span>
                </div>
              </form> -->
            </div>
        </div>
      </div>
    </div>
  </section>
  <?php endif;?>

  <?php
    $testimonials = get_field('testimonials');
    if($testimonials && count($testimonials)):
  ?>
  <section class="community-section background-prop testimonials-section">
    <div class="container container-wrapper">
      <div class="row content-row flex-centered">
        <div class="col-md-4 col-sm-4 col-12 flex-not-centered left-blk">
            <h2 class="heading1">Hear from the community</h2>
        </div>
        <div class="col-md-8 col-sm-8 col-12 flex-not-centered right-blk">
          <div class="community-feed-wrapper owl-carousel owl-theme community-slider">
            <?php foreach($testimonials as $testimonial): ?>
            <div class="item">
              <div class="card-wrapper" title="<?php echo mb_strimwidth(wp_strip_all_tags($testimonial->post_content),0,240,' ...') ?>">
                <h3 class="paragraph">
                  <?php echo mb_strimwidth(wp_strip_all_tags($testimonial->post_content),0,240,' ...') ?>
                </h3>
                <div class="profile-blk">
                  <div class="img-blk">
                    <?php if(get_the_post_thumbnail_url($testimonial)): ?>
                      <img src="<?php echo get_the_post_thumbnail_url($testimonial) ?>"  alt="Image" />
                    <?php else: ?>
                      <img src="<?php echo get_template_directory_uri(); ?>/img/default_profile_picture.png"  alt="Image" />
                    <?php endif; ?>
                  </div>
                  <div class="content-blk">
                    <h4 class="heading4"><?php echo $testimonial->post_title ?></h4>
                    <p class="support-text">
                      <?php echo get_field('designation', $testimonial->ID)?>, <?php echo get_field('company', $testimonial->ID)?>
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <?php endforeach ;?>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php endif; ?>

  <?php if(!$is_past_event): ?>
  <section class="cta-section" <?php if($current_event_completed): ?> style="padding-bottom: 0" <?php endif;?>>
    <?php if(!$current_event_completed && (strtotime($current_date) < strtotime($current_post_date))): ?>
    <div class="container container-wrapper">
      <div class="cta-wrapper">
        <div class="row flex-centered">
          <div class="col-sm-6 col-md-6 col-lg-6 col-12 left-blk">
            <div class="registration-content">
              <h3 class="heading4">Registrations open for <?php echo get_the_title($current_post["ID"]) ?></h3>
              <?php if(date(get_field('event_dates')['from_date']) == date(get_field('event_dates')['to_date'])): ?>
              <h4 class="heading3 date"><?php echo date('jS F Y',strtotime(get_field('event_dates')['from_date'])) ?></h4>
              <?php else: ?>
              <h4 class="heading3 date"><?php echo date('jS',strtotime(get_field('event_dates')['from_date'])) ?> - <?php echo date('jS F Y',strtotime(get_field('event_dates')['to_date'])) ?></h4>
              <?php endif; ?>
              <p class="support-text">
                <?php echo get_field('events_duration') ?>
              </p>
            </div>
          </div>
          <div class="col-sm-6 col-md-6 col-lg-6 col-12 right-blk">
            <p class="apply-btn">
              <a
                href="
                <?php if (get_field('registration_form_link')) : ?>
                  <?php echo get_field('registration_form_link') ?>
                <?php else : ?>
                  <?php echo get_home_url() ?>/product-registration?title=<?php echo get_the_title($current_post["ID"]) ?>&start_date=<?php echo date('jS F Y', strtotime(get_field('event_dates', $current_post["ID"])['from_date'])) ?>&end_date=<?php echo date('jS F Y', strtotime(get_field('event_dates', $current_post["ID"])['to_date'])) ?>&duration=<?php echo get_field('events_duration', $current_post["ID"]) ?>
                <?php endif; ?>"
                class="primary-btn primary-btn-dark btn-small"
                <?php if (get_field('registration_form_link')): ?> target="_blank" <?php endif; ?>
                >
                Apply Now
              </a>
            </p>
          </div>
        </div>
      </div>
    </div>
    <?php endif;?>
  </section>
  <?php endif; ?>

  <?php if(!$is_past_event): ?>
  <?php
    $args = array(
        'post_type' => 'product_events',
        'posts_per_page' => -1,
        'order'		=> 'DESC',
        'post_status' => 'publish',
        'post__not_in' => [$current_post["ID"]]
    );
    if(!$current_event_completed){
      $args['post__not_in'] = [$current_post["ID"]];
    }
    $the_query = new WP_Query( $args );
    $post_count = 0;
    if ( $the_query->have_posts() ) :
  ?>
  <section class="past-events-section">
    <div class="container container-wrapper">
      <div class="row title-row">
        <div class="col-12">
            <h2 class="heading2">A glimpse into the past events</h2>
        </div>
      </div>
      <div class="row content-row">
        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); $post_count++;?>
          <?php
          if($post_count <= 2):
          ?>
          <div class="<?php if(count($the_query->posts) > 1):?>col-sm-6 col-md-6 col-12 <?php else: ?> col-sm-12 col-md-12 col-12 <?php endif?>">
            <a href="<?php echo get_home_url()?>/product/?post_slug=<?php echo get_post_field('post_name', get_post())?>" class="card-wrapper">
              <div class="row card-row">
                <div class="col-sm-6 col-md-6 col-6 card-left-blk">
                  <div class="content-wrapper">
                    <img class="circle-bg" src="<?php echo get_template_directory_uri(); ?>/img/past_events_circle_bg.svg"  alt="Product" />
                    <h3 class="heading2"><?php echo get_the_title(); ?></h3>
                    <img class="annual-img" src="<?php echo get_template_directory_uri(); ?>/img/product_logo_black.svg"  alt="Product" />
                  </div>
                </div>
                <div class="col-sm-6 col-md-6 col-6 card-right-blk">
                  <div class="img-blk">
                    <?php if(get_the_post_thumbnail_url()): ?>
                      <img class="featured-image" src="<?php echo get_the_post_thumbnail_url(); ?>"  alt="Product" />
                    <?php else :?>
                      <img class="featured-image" src="<?php echo get_template_directory_uri(); ?>/img/dummy_events.png"  alt="Product" />
                    <?php endif ?>
                    <svg class="shape-bg" width="92" height="284" viewBox="0 0 92 284" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M91.3906 0C84.332 0 78.1055 4.62695 76.0703 11.3867L0.207031 263.387C0.132812 263.637 0.0625 263.887 0 264.137V0H91.3906Z" fill="#FFF0F5"/>
                      <path d="M15.5273 284C7.84375 284 1.71875 278.693 0 271.906V284H15.5273Z" fill="#FFF0F5"/>
                    </svg>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <?php else : ?>
          <div class="<?php if(count($the_query->posts) % 2 == 0):?>col-sm-6 col-md-6 col-12 card-hidden <?php else: ?> col-sm-12 col-md-12 col-12 card-hidden<?php endif?>">
              <a href="<?php echo get_home_url()?>/product/?post_slug=<?php echo get_post_field('post_name', get_post())?>" class="card-wrapper">
                <div class="row card-row">
                  <div class="col-sm-6 col-md-6 col-6 card-left-blk">
                    <div class="content-wrapper">
                      <img class="circle-bg" src="<?php echo get_template_directory_uri(); ?>/img/past_events_circle_bg.svg"  alt="Product" />
                      <h3 class="heading2"><?php echo get_the_title(); ?></h3>
                      <img class="annual-img" src="<?php echo get_template_directory_uri(); ?>/img/product_logo_black.svg"  alt="Product" />
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-6 col-6 card-right-blk">
                    <div class="img-blk">
                      <?php if(get_the_post_thumbnail_url()): ?>
                        <img class="featured-image" src="<?php echo get_the_post_thumbnail_url(); ?>"  alt="Product" />
                      <?php else :?>
                        <img class="featured-image" src="<?php echo get_template_directory_uri(); ?>/img/dummy_events.png"  alt="Product" />
                      <?php endif ?>
                      <svg class="shape-bg" width="92" height="284" viewBox="0 0 92 284" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M91.3906 0C84.332 0 78.1055 4.62695 76.0703 11.3867L0.207031 263.387C0.132812 263.637 0.0625 263.887 0 264.137V0H91.3906Z" fill="#FFF0F5"/>
                        <path d="M15.5273 284C7.84375 284 1.71875 278.693 0 271.906V284H15.5273Z" fill="#FFF0F5"/>
                      </svg>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          <?php endif; ?>
          <?php endwhile; wp_reset_postdata();?>
      </div>
      <?php if($post_count > 2): ?>
      <div class="row view-all-row text-center">
        <div class="col-md-12">
          <p class="show-more-btn">
            <a href="javascript:void(0)" class="secondary-btn btn-large" id="viewMore">
              <span>View More</span>
            </a>
          </p>
        </div>
      </div>
      <?php endif;?>
    </div>
  </section>
  <?php endif; ?>
  <?php endif; ?>

  <?php if($is_past_event  || $current_event_completed): ?>
    <?php
      $blogs = get_field('blogs');
      // var_dump(count($blogs));
      $counter = 0;
      if($blogs && count($blogs)):
    ?>
        <section class="related-blogs-section" <?php if($current_event_completed): ?> style="padding: 10px 0 80px;"<?php endif; ?>>
          <div class="container container-wrapper">
            <div class="row title-row">
              <div class="col-12">
                <h2 class="heading2">Related Blogs</h2>
              </div>
            </div>
            <div class="row content-row flex-not-centered">
              <?php
                foreach($blogs as $blog):
              ?>
              <div class="col-sm-6 col-md-6 col-lg-4 col-12 flex-not-centered">
                <a href="<?php echo get_permalink($blog); ?>" class="card-wrapper">
                  <div class="img-blk">
                    <?php if(get_the_post_thumbnail_url($blog)): ?>
                        <img class="featured-img" src="<?php echo get_the_post_thumbnail_url($blog); ?>" alt="<?php echo get_the_title($blog); ?>">
                    <?php else: ?>
                      <img class="featured-img" src="<?php echo get_template_directory_uri(); ?>/img/blog_placeholder.png"  alt="Image" />
                    <?php endif; ?>
                    <p class="title support-text">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/blog_icon.svg"  alt="Image" />
                      <span>Blog</span>
                    </p>
                  </div>
                  <div class="content-blk">
                    <?php
                    $tags = get_the_tags($blog);
                    if($tags):
                    ?>
                    <div class="tag-blk">
                        <ul class="list-inline tags-list">
                            <?php foreach($tags as $tag): ?>
                            <li class="list-inline-item">
                                <span class="support-text"><?php echo $tag->name ?></span>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <?php endif; ?>
                    <h3 class="heading4"><?php echo $blog->post_title?></h3>
                    <p class="support-text date-info">
                      <?php if(get_field('published_date', $blog->ID)): ?>
                      <span class="date">
                        <?php $date = DateTime::createFromFormat('d/m/Y', get_field('published_date', $blog->ID)); ?>
                        <?php echo $date->format('d M Y'); ?>
                      </span>
                      <?php else: ?>
                        <span class="date">
                        <?php echo get_the_date( 'd M Y' ); ?>
                        </span>
                      <?php endif; ?>
                      <span class="dot-blk">•</span>
                      <span class="read-time"> <?php echo get_field('read_time', $blog->ID); ?></span>
                    </p>
                    <ul class="list-inline flex-centered author-info-list">
                      <?php if(get_field('author_image', $blog->ID) || get_field('author_designation', $blog->ID) || get_field('author_company', $blog->ID) || get_field('about_author', $blog->ID) || get_field('author_linkedin_link', $blog->ID)): ?>
                      <li class="author-blk flex-centered">
                        <?php if(get_field('author_image', $blog->ID)): ?>
                          <img src="<?php echo get_field('author_image', $blog->ID)['url']?>" data-toggle="tooltip" data-placement="bottom" title="<?php echo get_field('author_name', $blog->ID); ?>" alt="image"/>
                        <?php else: ?>
                          <img src="<?php echo get_template_directory_uri(); ?>/img/default_profile_picture.png" data-toggle="tooltip" data-placement="bottom" title="<?php echo get_field('author_name', $blog->ID); ?>" alt="Profile Pic" />
                        <?php endif; ?>
                        <h4 class="support-text"  <?php if((!get_field('author_name_2', $blog->ID))): ?> style="display:block;" <?php endif;?>>
                          <?php echo get_field('author_name', $blog->ID) ?>
                        </h4>
                      </li>
                      <?php endif; ?>
                      <?php if(get_field('author_image_2', $blog->ID) || get_field('author_designation_2', $blog->ID) || get_field('author_company_2', $blog->ID) || get_field('about_author_2', $blog->ID) || get_field('author_linkedin_link_2', $blog->ID)): ?>
                      <li class="author-blk flex-centered">
                        <?php if(get_field('author_image_2', $blog->ID)): ?>
                          <img src="<?php echo get_field('author_image_2', $blog->ID)['url']?>" data-toggle="tooltip" data-placement="bottom" title="<?php echo get_field('author_name_2', $blog->ID); ?>" alt="image"/>
                        <?php else: ?>
                          <img src="<?php echo get_template_directory_uri(); ?>/img/default_profile_picture.png"  data-toggle="tooltip" data-placement="bottom" title="<?php echo get_field('author_name_2', $blog->ID); ?>" alt="Profile Pic" />
                        <?php endif; ?>
                        <h4 class="support-text">
                          <?php echo get_field('author_name_2', $blog->ID) ?>
                        </h4>
                      </li>
                      <?php endif; ?>
                      <?php if(get_field('author_image_3', $blog->ID) || get_field('author_designation_3', $blog->ID) || get_field('author_company_3', $blog->ID) || get_field('about_author_3', $blog->ID) || get_field('author_linkedin_link_3', $blog->ID)): ?>
                      <li class="author-blk flex-centered">
                        <?php if(get_field('author_image_3', $blog->ID)): ?>
                          <img src="<?php echo get_field('author_image_3', $blog->ID)['url']?>" data-toggle="tooltip" data-placement="bottom" title="<?php echo get_field('author_name_3', $blog->ID); ?>" alt="image"/>
                        <?php else: ?>
                          <img src="<?php echo get_template_directory_uri(); ?>/img/default_profile_picture.png"  data-toggle="tooltip" data-placement="bottom" title="<?php echo get_field('author_name_3', $blog->ID); ?>" alt="Profile Pic" />
                        <?php endif; ?>
                        <h4 class="support-text">
                          <?php echo get_field('author_name_3', $blog->ID) ?>
                        </h4>
                      </li>
                      <?php endif; ?>
                      <?php if(get_field('author_image_4', $blog->ID) || get_field('author_designation_4', $blog->ID) || get_field('author_company_4', $blog->ID) || get_field('about_author_4', $blog->ID) || get_field('author_linkedin_link_4', $blog->ID)): ?>
                      <li class="author-blk flex-centered">
                        <?php if(get_field('author_image_4', $blog->ID)): ?>
                          <img src="<?php echo get_field('author_image_4', $blog->ID)['url']?>" data-toggle="tooltip" data-placement="bottom" title="<?php echo get_field('author_name_4', $blog->ID); ?>" alt="image"/>
                        <?php else: ?>
                          <img src="<?php echo get_template_directory_uri(); ?>/img/default_profile_picture.png" data-toggle="tooltip" data-placement="bottom" title="<?php echo get_field('author_name_4', $blog->ID); ?>" alt="Profile Pic" />
                        <?php endif; ?>
                        <h4 class="support-text">
                          <?php echo get_field('author_name_4', $blog->ID) ?>
                        </h4>
                      </li>
                      <?php endif; ?>
                    </ul>
                  </div>
                </a>
              </div>
              <?php
                $counter++;
                if ($counter == 3) {
                  break;
                }
              ?>
              <?php endforeach; ?>
            </div>
            <?php if(count($blogs) > 3 ): ?>
            <div class="row view-all-row text-center">
              <div class="col-md-12">
                <p class="show-more-btn">
                  <a href="javascript:void(0)" class="secondary-btn btn-large" id="exploreMore">
                    Explore More
                  </a>
                </p>
              </div>
            </div>
            <?php endif; ?>
          </div>
        </section>
     <?php endif; ?>
  <?php endif; ?>

  <?php
    $args = array(
      'post_type' => 'product_events',
      'posts_per_page' => 1,
      'post_status' => 'publish',
      'numberposts' => 1,
      'orderby' => 'meta_value',
      'meta_key' => 'event_dates_to_date',
      'order' => 'DESC'
    );
    $upcoming_event = wp_get_recent_posts($args);
    if($upcoming_event && count($upcoming_event)){
      $upcoming_event = $upcoming_event[0];
      $upcoming_event_date = date(get_field('event_dates', $upcoming_event["ID"])['from_date']);
      $current_date = date("m/d/Y");
      if(strtotime($upcoming_event_date) >= strtotime($current_date) && $is_past_event):
  ?>
  <section class="cta-section">
    <div class="container container-wrapper">
      <div class="cta-wrapper">
        <div class="row flex-centered">
          <div class="col-sm-6 col-md-6 col-lg-6 col-12 left-blk">
            <div class="registration-content">
              <h3 class="heading4">Registrations open  for <?php echo get_the_title($current_post["ID"]) ?></h3>
              <?php if(date(get_field('event_dates')['from_date']) == date(get_field('event_dates')['to_date'])): ?>
              <h4 class="heading3 date"><?php echo date('jS F Y',strtotime(get_field('event_dates')['from_date'])) ?></h4>
              <?php else: ?>
              <h4 class="heading3 date"><?php echo date('jS',strtotime(get_field('event_dates')['from_date'])) ?> - <?php echo date('jS F Y',strtotime(get_field('event_dates')['to_date'])) ?></h4>
              <?php endif; ?>
              <p class="support-text">
                <?php echo get_field('events_duration', $upcoming_event["ID"]) ?>
              </p>
            </div>
          </div>
          <div class="col-sm-6 col-md-6 col-lg-6 col-12 right-blk">
            <p class="apply-btn">
              <a href="<?php echo get_home_url();?>/annual/" class="primary-btn primary-btn-dark btn-small">
                View Details
              </a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php elseif($is_past_event): ?>
    <section class="cta-section">
      <div class="container container-wrapper">
        <div class="cta-wrapper">
          <div class="row flex-centered">
            <div class="col-sm-12 col-md-12 col-lg-12 col-12 left-blk">
              <div class="registration-content">
                <h3 class="heading4">SaaSBOOMi Product <?php echo date('Y', strtotime('+1 year')); ?></h3>
                <h4 class="heading3 date">Coming Soon!</h4>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  <?php endif; }?>
  <?php endif; ?>

  <?php get_template_part('templates/template-newsletter'); ?>


  </div>

  <div class="modal fade" id="vedioModal" tabindex="-1" aria-labelledby="vedioModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <a class="close" data-dismiss="modal" aria-label="Close">
        <img src="<?php echo get_template_directory_uri(); ?>/img/close.svg"  alt="Close" />
      </a>
      <div class="modal-body">
        <div class="vedio-blk">
          <?php echo get_field('video_video_link') ?>
        </div>
      </div>
    </div>
  </div>
  </div>

  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/owl.carousel.min.js"></script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/wow.min.js"></script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/parsley.min.js"></script>


  <script type="text/javascript">
  $(document).ready(function () {
    // new WOW().init();
    $('.community-slider').owlCarousel({
       items:2,
       dots:true,
       loop:true,
       mouseDrag: false,
       autoplay:false,
       autoplayTimeout:3000,
       smartSpeed: 1000,
       autoplayHoverPause:true,
       nav:true,
       margin: 16,
       navText:['<i class="fa fa-chevron-left"></i>','<i class="fa fa-chevron-right"></i>'],
       responsive:{
           0:{
               items:1,
           },
           568:{
             items:1,
           },
           767:{
               items:2,
           },
           1024:{
               items:2
           }
       },
    });

    $('#upcomingEventNotifyForm').parsley();
    $('#upcomingEventNotifyForm #fname').attr('required',true).attr('data-parsley-required-message','Please enter Full Name').attr('data-parsley-minlength-message','First Name must be of minimum 3 characters');
    $('#upcomingEventNotifyForm #email').attr('required',true).attr('data-parsley-required-message','Please enter Email Address').attr('data-parsley-type-message','Please enter valid Email');

    $('.day-item-content:first-child').addClass('show-active');

    $('.day-item-content-visible').on('click',function(){
      var $this = $(this);
      var ref = $(this).closest('.content-wrapper .day-item-content');
        if(ref.hasClass('show-active')){
            ref.find('.day-item-content-hidden').slideUp(300).hide();
            ref.removeClass('show-active');
            // ref.find('.day-item-content-visible').show();
        }
        else{
            // debugger
            $(".day-item-content-visible").show();
            $(".day-item-content-hidden").hide().slideUp(300);
            $('.day-item-content').removeClass('show-active');
            $this.next(".day-item-content-hidden").slideDown(500).show();
            ref.find('.day-item-content-visible').hide();
            ref.addClass('show-active');
        }
    });

    $('.day-item-content-hidden').on('click',function(){
      var $this = $(this);
      var ref = $(this).closest('.content-wrapper .day-item-content');
        if(ref.hasClass('show-active')){
          $(".day-item-content-visible").show();
          ref.find('.day-item-content-hidden').slideUp(300).hide();
          ref.find('.day-item-content-visible').show();
          ref.removeClass('show-active')
        }
        else{
            // debugger
            $this.next(".day-item-content-hidden").slideDown(500).show();
            ref.find('.day-item-content-visible').hide();
            ref.addClass('show-active');
        }
    });

    $('.day-item').on('click', function(){
      var $this = $(this);
      var dataId = $this.attr('data-id');
      $('.day-item').removeClass('active');
      $('.day-item[data-id='+dataId+']').addClass('active');
      $('.timeline-content-wrapper').hide();
      $('.timeline-content-wrapper[data-id='+dataId+']').show();
    });

    $('#showMore').on('click',function(){
      debugger
        if($(this).hasClass('show-active')){
          $('.featured-speakers-section .content-row').find('.card-hidden').css('height','0').hide().slideUp(300);
            $(this).removeClass('show-active');
            $(this).find('span').text('View all speakers');
        }
        else{
            $('.featured-speakers-section .content-row').find('.card-hidden').css('height','auto').show().slideDown(500);
            $(this).addClass('show-active');
            $(this).find('span').text('View less speakers');
        }
    });

    $('#viewMore').on('click',function(){
      debugger
        if($(this).hasClass('show-active')){
          $('.past-events-section .content-row').find('.card-hidden').css('height','0').hide().slideUp(300);
            $(this).removeClass('show-active');
            $(this).find('span').text('View More');
        }
        else{
            $('.past-events-section .content-row').find('.card-hidden').css('height','auto').show().slideDown(500);
            $(this).addClass('show-active');
            $(this).find('span').text('View Less');
        }
    });

    $('#upcomingEventNotifyForm').on('submit', function(e) {
      e.preventDefault();
      if ($('#upcomingEventNotifyForm').parsley().isValid()) {
        var $this = $(this);
        $this.find('input[type="submit"]').val('Submitting....');
        $this.find('input[type="submit"]').addClass('primary-btn-disabled');
        var datastring = $("#upcomingEventNotifyForm").serialize();
        $.ajax({
          headers: {
            "Accept": "application/json"
          },
          url: "https://saasboomi.com:8080/https://docs.google.com/forms/d/19q7K-GZB2ZZEJ8ZKodpb1oTcOEbWcKY19TiZ9fDbuzE/formResponse",
          data: datastring,
          type: "post",
          dataType: "jsonp",
          statusCode: {
            0: function() {
              $this.find('input[type="submit"]').val('Notify Me');
              $this.find('input[type="submit"]').removeClass('primary-btn-disabled');
              $('#upcomingEventNotifyForm').trigger("reset");
            },
            200: function() {
              $this.find('input[type="submit"]').val('Notify Me');
              $this.find('input[type="submit"]').removeClass('primary-btn-disabled');
              $('#upcomingEventNotifyForm').trigger("reset");
              $('.form-submission-status').show();
              setTimeout(() => {
                $('.form-submission-status').hide();
              }, 1000);
            }
          }
        });
      }
    });

    // if ($(window).outerWidth() > 0) {
    //   $('#tabsList li').on('click', function() {
    //     $('#tabsList li').removeClass('active');
    //     $(this).addClass('active');
    //     var block = $(this).attr('data-class');
    //     var offsetTop = 130;
    //     if ($(window).outerWidth() < 992) {
    //       offsetTop = 150;
    //     }
    //     $("html, body").animate({
    //       scrollTop: $('.' + block + '').offset().top - offsetTop
    //     }, 1000);
    //   });
    //
    //   var tabListWidth = $('#tabsList').outerWidth();
    //   $('#tabsList').css('width', tabListWidth);
    //   var top = 70;
    //   if ($(window).outerWidth() < 992) {
    //     top = $('.mobile-header').outerHeight();
    //   } else {
    //     top = 70;
    //   }
    //
    //   $(window).scroll(function() {
    //     var tabsList = $('.introduction-section');
    //
    //     if($(window).outerWidth() > 991){
    //       if($(window).scrollTop() > $('.about-section').offset().top - 200 && $(window).scrollTop() < $('footer').offset().top - 150){
    //           tabsList.addClass('block-fixed');
    //           $('.event-logo').css({'display':'inline-block'});
    //           $('.introduction-section .tab-list-wrapper').css({
    //             'border-bottom':'none',
    //             'margin-bottom':'26px',
    //           });
    //           tabsList.css({
    //             'box-shadow':'0px 2px 10px -1px rgba(161,161,161,0.46)',
    //             'background': '#ffffff',
    //             'position':'fixed',
    //             'top':'0',
    //             'left':'0',
    //             'width':'100%',
    //             'padding-top':'18px',
    //             'z-index':'9999',
    //             'margin-bottom':'24px',
    //             'transition':'all 0.3s ease-in',
    //             // 'opacity':'1',
    //             // 'display':'block'
    //           });
    //       }else{
    //           tabsList.removeClass('block-fixed');
    //           $('.event-logo').css({'display':'none'});
    //           $('.introduction-section .tab-list-wrapper').css({
    //             'border-bottom':'1px solid #DDDDDD',
    //             'margin-bottom':'28px',
    //           });
    //           tabsList.css({
    //             'box-shadow':'none',
    //             'background': 'transparent',
    //             'position':'relative',
    //             'top':'auto',
    //             'left':'auto',
    //             'width':'100%',
    //             'padding-top':'90px',
    //             'z-index':'99',
    //             'margin-bottom':'50px',
    //             'transition':'all 0.1s ease-out',
    //             // 'opacity':'0',
    //             // 'display':'none'
    //           });
    //       }
    //     }
    //
    //     if($(window).outerWidth() < 991){
    //       if($(window).scrollTop() > $('.about-section').offset().top - 200 && $(window).scrollTop() < $('.newsletter-section').offset().top - 150){
    //           tabsList.addClass('block-fixed');
    //           // $('.event-logo').css({'display':'inline-block'});
    //           $('.introduction-section .tab-list-wrapper').css({
    //             'border-bottom':'none',
    //             'margin-bottom':'0px',
    //           });
    //           tabsList.css({
    //             'box-shadow':'0px 2px 10px -1px rgba(161,161,161,0.46)',
    //             'background': '#ffffff',
    //             'position':'fixed',
    //             'top':'60px',
    //             'left':'0',
    //             'width':'100%',
    //             'padding-top':'0px',
    //             'z-index':'9999',
    //             'margin-bottom':'0px',
    //             'transition':'all 0.3s ease-in',
    //             // 'opacity':'1',
    //             // 'display':'block'
    //           });
    //       }else{
    //           tabsList.removeClass('block-fixed');
    //           // $('.event-logo').css({'display':'none'});
    //           $('.introduction-section .tab-list-wrapper').css({
    //             'border-bottom':'1px solid #DDDDDD',
    //             'margin-bottom':'32px',
    //           });
    //           tabsList.css({
    //             'box-shadow':'none',
    //             'background': 'transparent',
    //             'position':'relative',
    //             'top':'auto',
    //             'left':'auto',
    //             'width':'100%',
    //             'padding-top':'0px',
    //             'z-index':'99',
    //             'margin-bottom':'0px',
    //             'transition':'all 0.1s ease-out',
    //             // 'opacity':'0',
    //             // 'display':'none'
    //           });
    //       }
    //     }
    //
    //     var topOffset = 300;
    //     if ($(window).outerWidth() > 767) {
    //       topOffset = 300;
    //     } else {
    //       topOffset = 100;
    //     }
    //
    //     if ($(window).scrollTop() > $('.about-section').offset().top - topOffset && (!$('#tabsList li[data-class="about-section"]').hasClass('active')) && $(window).scrollTop() < $('.speaker-section').offset().top - topOffset) {
    //       setTimeout(function() {
    //         $('#tabsList li').removeClass('active');
    //         $('#tabsList li[data-class="about-section"]').addClass('active');
    //       }, 10);
    //     }
    //
    //     if ($(window).scrollTop() > $('.speaker-section').offset().top - topOffset && (!$('#tabsList li[data-class="speaker-section"]').hasClass('active')) && $(window).scrollTop() < $('.agenda-section').offset().top - topOffset) {
    //       setTimeout(function() {
    //         $('#tabsList li').removeClass('active');
    //         $('#tabsList li[data-class="speaker-section"]').addClass('active');
    //       }, 10);
    //     }
    //
    //     if ($(window).scrollTop() > $('.agenda-section').offset().top - topOffset && (!$('#tabsList li[data-class="agenda-section"]').hasClass('active')) && $(window).scrollTop() < $('.team-section').offset().top - topOffset) {
    //       setTimeout(function() {
    //         $('#tabsList li').removeClass('active');
    //         $('#tabsList li[data-class="agenda-section"]').addClass('active');
    //       }, 10);
    //     }
    //
    //     if ($(window).scrollTop() > $('.team-section').offset().top - topOffset && (!$('#tabsList li[data-class="team-section"]').hasClass('active')) && $(window).scrollTop() < $('.testimonials-section').offset().top - topOffset) {
    //       setTimeout(function() {
    //         $('#tabsList li').removeClass('active');
    //         $('#tabsList li[data-class="team-section"]').addClass('active');
    //       }, 10);
    //     }
    //
    //     if ($(window).scrollTop() > $('.testimonials-section').offset().top - topOffset && (!$('#tabsList li[data-class="testimonials-section"]').hasClass('active'))) {
    //       setTimeout(function() {
    //         $('#tabsList li').removeClass('active');
    //         $('#tabsList li[data-class="testimonials-section"]').addClass('active');
    //       }, 10);
    //     }
    //
    //   });
    // }



  });
  </script>

  <?php get_template_part('templates/template-event-tab-scripts'); ?>

  <?php get_footer(); ?>
