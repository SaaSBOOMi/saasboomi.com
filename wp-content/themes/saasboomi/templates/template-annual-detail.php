<?php
/*
* Template Name: Annual Events Detail
*/ ?>

<?php get_header(); ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/annual-events-page.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/owl.carousel.min.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/animate.css">

<div class="event-annual-page">
  <?php
  $current_post = null;
  $is_past_event = false;
  $current_event_completed = false;
  if (isset($_GET['post_slug'])) {
    $the_slug = 'my_slug';
    $args = array(
      'name'        => $_GET['post_slug'],
      'post_type'   => 'annual_events',
      'post_status' => 'publish',
      'numberposts' => 1
    );
    $past_event = wp_get_recent_posts($args);
    if ($past_event && count($past_event)) {
      $current_post = $past_event;
      $is_past_event = true;
    } else {
      $args = array(
        'post_type' => 'annual_events',
        'posts_per_page' => 1,
        'post_status' => 'publish',
        'numberposts' => 1,
        'orderby' => 'meta_value',
        'meta_key' => 'event_dates_to_date',
        'order' => 'DESC'
      );
      $current_post = wp_get_recent_posts($args);
    }
  } else {
    $args = array(
      'post_type' => 'annual_events',
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
  <?php if (count($current_post) > 0) : ?>
    <?php
      $current_post = $current_post[0];
      $current_post_date = date(get_field('event_dates', $current_post["ID"])['from_date']);
      $current_post_end_date = date(get_field('event_dates', $current_post["ID"])['to_date']);
      $current_date = date("m/d/Y");
      if (strtotime($current_date) > strtotime($current_post_end_date) && !$is_past_event) {
        $current_event_completed = true;
      }
      ?>
    <section class="event-banner-section event-detail-banner-section" <?php if ($current_event_completed) : ?> style="margin-bottom:50px" <?php endif; ?>>
      <div class="container container-wrapper">
        <div class="row flex-centered">
          <div class="col-sm-6 col-md-6 col-lg-6 col-12 left-blk">
            <img src="<?php echo get_template_directory_uri(); ?>/img/annual_logo_black.svg" alt="Annual" style="height:32px;" />
            <h1 class="heading2 event-title">Help Indian SaaS founders emerge stronger in the post-COVID era</h1>
            <!-- <div class="registration-content">
            <?php if (!$is_past_event && !$current_event_completed && (get_field('registration_opened', $current_post['ID']) == true)) : ?>
            <p class="heading4">open for SaaSBOOMi Annual  <?php echo date('Y', strtotime(get_field('event_dates', $current_post["ID"])['from_date'])) ?></p>
            <?php if (date(get_field('event_dates', $current_post["ID"])['from_date']) == date(get_field('event_dates', $current_post["ID"])['to_date'])) : ?>
            <h2 class="heading2 date"><?php echo date('jS F Y', strtotime(get_field('event_dates', $current_post["ID"])['from_date'])) ?></h2>
            <?php else : ?>
              <h2 class="heading2 date"><?php echo date('jS', strtotime(get_field('event_dates', $current_post["ID"])['from_date'])) ?> - <?php echo date('jS F Y', strtotime(get_field('event_dates', $current_post["ID"])['to_date'])) ?></h2>
            <?php endif; ?>
            <?php elseif ($current_event_completed && $is_past_event) : ?>
              <p class="heading4">SaaSBOOMi Annual <?php echo date('Y', strtotime('+1 year')); ?></p>
              <h2 class="heading2 date">Coming Soon!</h2>
            <?php else : ?>
              <?php if (!(get_field('registration_opened', $current_post['ID']) == false)) : ?>
                <h2 class="heading2 date">Thank you for attending annual <?php echo date('Y', strtotime(get_field('event_dates', $current_post["ID"])['to_date'])) ?>!</h2>
              <?php endif; ?>
            <?php endif ?>
            <ul class="list-inline">
              <?php if (!$is_past_event && !$current_event_completed && (strtotime($current_date) < strtotime($current_post_date)) && (get_field('registration_opened', $current_post['ID']) == true)) : ?>
              <li class="list-inline-item">
                <a href="<?php echo get_home_url() ?>/annual-registration?title=<?php echo get_the_title($current_post["ID"]) ?>&start_date=<?php echo date('jS F Y', strtotime(get_field('event_dates', $current_post["ID"])['from_date'])) ?>&end_date=<?php echo date('jS F Y', strtotime(get_field('event_dates', $current_post["ID"])['to_date'])) ?>&duration=<?php echo get_field('events_duration', $current_post["ID"]) ?>" class="primary-btn primary-btn-dark btn-small d-none">
                  Apply Now
                </a>
                <a
                  href="
                  <?php if (get_field('registration_form_link', $current_post["ID"])) : ?>
                    <?php echo get_field('registration_form_link', $current_post["ID"]) ?>
                  <?php else : ?>
                    <?php echo get_home_url() ?>/annual-registration?title=<?php echo get_the_title($current_post["ID"]) ?>&start_date=<?php echo date('jS F Y', strtotime(get_field('event_dates', $current_post["ID"])['from_date'])) ?>&end_date=<?php echo date('jS F Y', strtotime(get_field('event_dates', $current_post["ID"])['to_date'])) ?>&duration=<?php echo get_field('events_duration', $current_post["ID"]) ?>
                  <?php endif; ?>"
                  class="primary-btn primary-btn-dark btn-small"
                  <?php if (get_field('registration_form_link', $current_post["ID"])) : ?> target="_blank" <?php endif; ?>
                  >
                  Apply Now
                </a>
              </li>
              <li class="list-inline-item">
                <span class="support-text">
                  <?php echo get_field('events_duration', $current_post["ID"]) ?>
                </span>
              </li>
              <?php elseif ($is_past_event) : ?>
                <li class="list-inline-item hidden">
                  <a href="javascript:void(0)" class="primary-btn primary-btn-dark btn-small" data-toggle="modal" data-target="#vedioModal">
                    WATCH REPLAY
                  </a>
                </li>
              <?php else : ?>
              <?php endif; ?>
            </ul>
            <?php if ($is_past_event || $current_event_completed || (get_field('registration_opened', $current_post['ID']) == false)) : ?>
              <p class="heading4" style="margin-bottom:12px;">
                Stay updated about upcoming Event
                <?php if (!$is_past_event && !$current_event_completed) : ?>
                  <?php if (date(get_field('event_dates', $current_post["ID"])['from_date']) == date(get_field('event_dates', $current_post["ID"])['to_date'])) : ?>
                  <span class="heading4 date"><?php echo date('jS F Y', strtotime(get_field('event_dates', $current_post["ID"])['from_date'])) ?></span>
                  <?php else : ?>
                    <span class="heading4 date"><?php echo date('jS', strtotime(get_field('event_dates', $current_post["ID"])['from_date'])) ?> - <?php echo date('jS F Y', strtotime(get_field('event_dates', $current_post["ID"])['to_date'])) ?></span>
                  <?php endif; ?>
                <?php endif; ?>
              </p>
              <form id="upcomingEventNotifyForm" class="stay-updated-form" data-parsley-validate="">
                <div class="row">
                  <div class="col-12 col-sm-12 col-md-12 col-lg-8">
                    <div class="form-group">
                      <label class="heading4 d-none">Email</label>
                      <input name="entry.751894285" type="email" name="email" class="form-control paragraph" id="email" placeholder="Enter Email Address" data-parsley-required>
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
          </div> -->
            <p class="dates heading3 annual-date-info hidden">
              <img src="<?php echo get_template_directory_uri(); ?>/img/calender.svg" alt="Image" />
              <span>Starts May 1st, 2021. </span>
              <!-- <span class="separator"></span> -->
              <span class="event-subs d-none">Virtual <span class="separator"></span> 1-1 VC Connect <span class="separator"></span> Workshops <span class="separator"></span> Community</span>
            </p>
            <p class="dates heading3 annual-date-info">
              <img src="<?php echo get_template_directory_uri(); ?>/img/time.svg" alt="Image" />
              <span>26th June 2021 - 4th Sep 2021. Saturdays, 9am to 12:30pm.</span>
            </p>
            <!-- <p class="apply-btn"><a href="https://airtable.com/shr7DTIbsUJpgiozA" target="blank">apply now</a></p> -->
            <!-- <p class="registration-end-date hidden">Registrations closed</p> -->
          </div>
          <div class="col-sm-6 col-md-6 col-lg-6 col-12 right-blk hidden">
            <div class="vedio-blk background-prop" <?php if (get_field('video_video_link', $current_post["ID"])) : ?> style="cursor: pointer;" <?php endif; ?>>
              <a href="https://saasboomi.com/we-are-reimagining-saasboomi-annual-2021/">
                <!-- <svg class="vedio-background-bg" width="401" height="359" viewBox="0 0 401 359" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M121.872 38.6598C126.295 32.2984 133.229 28.139 140.917 27.2344L370.779 0.190623C388.854 -1.93594 403.828 14.0541 400.546 31.9772L344.727 336.784C341.686 353.387 324.385 363.192 308.603 357.256L17.5498 247.775C1.0344 241.563 -5.2186 221.44 4.86155 206.943L121.872 38.6598Z" fill="#F2994A"/>
            </svg>
            <img class="vedio-bg-top" src="<?php echo get_template_directory_uri(); ?>/img/vedio_top_bg.svg"  alt="Annual" />
            <img class="vedio-bg-bottom" src="<?php echo get_template_directory_uri(); ?>/img/vedio_bottom_bg.svg"  alt="Annual" /> -->
                <!-- <img class="complete-vedio-bg" src="<?php echo get_template_directory_uri(); ?>/img/complete_vedio_bg.svg"  alt="Annual" /> -->

                <div class="play-vedio d-none">
                  <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M32.1691 42H9.8309C4.40144 42 0 37.5986 0 32.1691V9.8309C0 4.40144 4.40144 0 9.8309 0H32.1691C37.5986 0 42 4.40144 42 9.8309V32.1691C42 37.5986 37.5986 42 32.1691 42Z" fill="#FF9200" />
                    <path d="M16.4736 11.8068L28.2771 18.6215C28.6942 18.8627 29.0406 19.2094 29.2813 19.6267C29.5221 20.0441 29.6488 20.5175 29.6488 20.9993C29.6488 21.4811 29.5221 21.9545 29.2813 22.3718C29.0406 22.7892 28.6942 23.1359 28.2771 23.3771L16.4736 30.1918C16.0561 30.4323 15.5827 30.5588 15.1008 30.5586C14.6189 30.5583 14.1456 30.4313 13.7283 30.1903C13.3111 29.9493 12.9646 29.6027 12.7236 29.1854C12.4826 28.7682 12.3557 28.2948 12.3555 27.813V14.1836C12.356 13.7019 12.4832 13.2288 12.7244 12.8118C12.9655 12.3948 13.312 12.0486 13.7292 11.8078C14.1464 11.567 14.6196 11.4401 15.1013 11.44C15.583 11.4398 16.0563 11.5663 16.4736 11.8068Z" fill="white" />
                  </svg>
                  <!-- <p class="support-text play-vedio-text">Play video</p> -->
                </div>

                <svg class="complete-vedio-bg complete-vedio-bg-annual " width="455" height="470" viewBox="0 0 330 341" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M294.01 0H0V341H329.579V0H294.01ZM294.01 0C305.425 0 315.386 8.94723 315.975 20.941L329.552 297.513C330.221 311.147 318.436 322.096 304.875 320.439L41.3868 288.249C28.7986 286.711 20.1061 274.899 22.3916 262.435L57.5694 70.5995C59.1337 62.0687 65.5663 55.251 73.9977 53.1878L288.731 0.641046C290.506 0.206772 292.274 0 294.01 0Z" fill="white" />
                  <path d="M40.3552 164.474L3.95611 216.954C-4.24666 228.78 0.841749 245.196 14.2813 250.264L23.9546 253.912L40.3552 164.474Z" fill="#FF9200" />
                  <path d="M150.297 301.555L251.127 339.577C263.97 344.42 278.049 336.421 280.523 322.877L281.49 317.582L150.297 301.555Z" fill="#FF9200" />
                  <path d="M320.148 105.957L325.946 74.2185C327.536 65.5161 323.863 57.3724 317.528 52.5708L320.148 105.957Z" fill="#FF9200" />
                </svg>
                <div class="featured-vedio d-none">
                  <video width="1300" autoplay muted>
                    <source src="<?php echo get_template_directory_uri() ?>/videos/saasboomi_annual_2021.mp4" type="video/mp4">
                    <source src="<?php echo get_template_directory_uri() ?>/videos/saasboomi_annual_2021.mp4" type="video/ogg">
                    Your browser does not support the video tag.
                  </video>
                </div>

                <?php if (get_field('video_video_thumbnail', $current_post['ID'])) : ?>
                  <img class="featured-vedio-img" src="<?php echo get_field('video_video_thumbnail', $current_post['ID'])["url"] ?>" alt="image" />
                <?php else : ?>
                  <img class="featured-vedio-img" src="<?php echo get_template_directory_uri(); ?>/img/featured_vedio_img.png" alt="Annual" />
                <?php endif; ?>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- <?php get_template_part('templates/template-annual-banner'); ?> -->
    <br />
    <section class="introduction-section">
      <div class="container container-wrapper">
        <div class="tab-list-wrapper">
          <div class="row title-row flex-centered">
            <div class="col-sm-10 col-md-10 col-lg-10 col-12 left-blk">
              <ul class="list-inline tab-list" id="tabsList">
                <li class="active scenario list-inline-item event-logo" id="platform0" style="padding-right:30px;display: none;">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/annual_logo_black.svg" alt="Image" style="margin-top:-4px; height:28px;" />
                </li>
                <li class="active scenario list-inline-item" id="platform1" data-class="about-section">
                  <a href="javascript:void(0)" class="paragraph">About</a>
                </li>
                <li class="scenario list-inline-item" id="platform1" data-class="how-saasboomi-works">
                  <a href="javascript:void(0)" class="paragraph">How it works</a>
                </li>
                <li class="scenario list-inline-item" id="platform1" data-class="topics-covered-section">
                  <a href="javascript:void(0)" class="paragraph">Topics</a>
                </li>
                <li class="scenario list-inline-item" id="platform1" data-class="speakers">
                  <a href="javascript:void(0)" class="paragraph">Speakers</a>
                </li>
                <li class="scenario list-inline-item" id="platform1" data-class="team-section">
                  <a href="javascript:void(0)" class="paragraph">Team</a>
                </li>
                <li class="scenario list-inline-item" id="platform1" data-class="prv-evnts-highlights">
                  <a href="javascript:void(0)" class="paragraph d-none">Highlights from 2020</a>
                </li>
              </ul>
            </div>
            <div class="col-sm-2 col-md-2 col-lg-2 col-12 right-blk">
              <?php if (!$is_past_event && (strtotime($current_date) < strtotime($current_post_date))) : ?>
                <p class="text-right d-none">
                  <a href="https://airtable.com/shr7SdGKjztEwWQrD" class="primary-btn primary-btn-dark btn-small" target="_blank">
                    Apply Now
                  </a>
                </p>
              <?php endif; ?>
              <?php if ($is_past_event || $current_event_completed) : ?>
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
      <div class="present-info-wrapper">
        <div class="container container-wrapper">
          <div class="row content-row">
            <div class="col-sm-6 col-md-6 col-lg-6 col-12 left-blk">
              <h3 class="heading1">Asia’s biggest SaaS Conference By Founders, For Founders</h3>
              <p class="paragraph description">
                The mission of SaaSBOOMi Annual 2021 <i>OnAir</i> is to help Indian SaaS founders reimagine their Vision, Strategy, and Execution, create organisations that are “built to last”, and emerge stronger in the post-COVID era.
              </p>
              <p class="color-bar yellow-bar">
                <span></span>
              </p>
              <h4 class="heading3 whats-in-store">What's in store?</h4>
              <div class="row store-content-row">
                <div class="col-sm-6 col-md-6 col-lg-6 col-12">
                  <div class="card-wrapper store-wrapper">
                    <div class="img-blk">
                      <img src="<?php echo get_template_directory_uri() ?>/img/workshops.svg" alt="Workshops" />
                    </div>
                    <div class="content">
                      <p class="count heading2">8+</p>
                      <p class="title heading4">Workshops</p>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-6 col-12">
                  <div class="card-wrapper store-wrapper">
                    <div class="img-blk">
                      <img src="<?php echo get_template_directory_uri() ?>/img/event_sessions.svg" alt="Sessions" />
                    </div>
                    <div class="content">
                      <p class="count heading2">6</p>
                      <p class="title heading4">Sessions</p>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-6 col-12">
                  <div class="card-wrapper store-wrapper">
                    <div class="img-blk">
                      <img src="<?php echo get_template_directory_uri() ?>/img/founders_attendance.svg" alt="Founders in Attendance" />
                    </div>
                    <div class="content">
                      <p class="count heading2">1000+</p>
                      <p class="title heading4">Founders in Attendance</p>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-6 col-12">
                  <div class="card-wrapper store-wrapper">
                    <div class="img-blk">
                      <img src="<?php echo get_template_directory_uri() ?>/img/meeting_vcs.svg" alt="Meeting with VCs" />
                    </div>
                    <div class="content">
                      <p class="count heading2">1 - 1</p>
                      <p class="title heading4">Meeting with VCs</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-6 col-12 right-blk">
              <div class="featured-img-blk">
                <svg class="pattern1" width="35" height="25" viewBox="0 0 35 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M0 25L-2.18557e-07 20L25 20L25 25L0 25ZM-8.30516e-07 6L-1.09278e-06 0L16 -6.99382e-07L16 6L-8.30516e-07 6ZM9 11L9 15L35 15L35 11L9 11ZM29 25L29 20L35 20L35 25L29 25ZM-6.11959e-07 11L-4.37107e-07 15L6 15L6 11L-6.11959e-07 11Z" fill="#FF9200" />
                </svg>
                <img class="image1" src="<?php echo get_template_directory_uri(); ?>/img/annual_about_image1.png" alt="Image" />
                <div class="image2-wrapper">
                  <span class="image2-blk">
                    <img class="image2" src="<?php echo get_template_directory_uri(); ?>/img/img_about_2.jpg" alt="Image" />
                  </span>
                  <svg class="pattern2" width="35" height="25" viewBox="0 0 35 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0 25L-2.18557e-07 20L25 20L25 25L0 25ZM-8.30516e-07 6L-1.09278e-06 0L16 -6.99382e-07L16 6L-8.30516e-07 6ZM9 11L9 15L35 15L35 11L9 11ZM29 25L29 20L35 20L35 25L29 25ZM-6.11959e-07 11L-4.37107e-07 15L6 15L6 11L-6.11959e-07 11Z" fill="#FF9200" />
                  </svg>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="features-section how-saasboomi-works">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="heading2 text-center">How SaaSBOOMi works?</h2>
          </div>
          <div class="col-md-4 flex-not-centered">
            <div class="card-item">
              <img src="<?php echo get_template_directory_uri() ?>/img/icon_payitforward.svg" alt="Paying it forward" />
              <h4 class="heading4">Paying it forward</h4>
              <p class="paragraph">
                SaaSBOOMi is built on the philosophy of paying it forward. An exclusive, founder-centric event created by the country’s most successful SaaS leaders who believe in the power of being vulnerable and authentic. They will be transparently sharing their playbooks with the community
              </p>
            </div>
          </div>
          <div class="col-md-4 flex-not-centered">
            <div class="card-item grow-card">
              <img src="<?php echo get_template_directory_uri() ?>/img/icon_limitless.svg" alt="Limitless Learning" />
              <h4 class="heading4">Limitless Learning</h4>
              <p class="paragraph">
                A zero-fluff platform for SaaS founders, packed with deep-dive workshops and learnings shared by founders. With 550+ attendees and an NPS score of 85+, SaaSBOOMi 2020 proved to be a phenomenal hit. Cut to 2021, it is only going to get bigger and better.
              </p>
            </div>
          </div>
          <div class="col-md-4 flex-not-centered">
            <div class="card-item share-card">
              <img src="<?php echo get_template_directory_uri() ?>/img/icon_promise.svg" alt="Promise" />
              <h4 class="heading4">The SaaSBOOMi Promise</h4>
              <p class="paragraph">SaaSBOOMi Annual 2021 <i>OnAir</i> will be an immersive experience that reflects all of the things that you’ve come to love about our previous Annual editions. Save the date, stay tuned, and get ready to reimagine and co-create Asia’s largest SaaS conference with us.</p>
            </div>
          </div>
          <div class="col-md-12">
            <h2 class="heading2 text-center">
              <a href="https://saasboomi.com/announcing-the-saasboomi-annual-edition-20-23rd-april-onair/" class="primary-btn primary-btn-dark btn-small join-btn">More About What’s In Store</a>
            </h2>
          </div>
        </div>
      </div>
    </section>

    <?php
      $event_agenda = get_field('event_agenda', $current_post["ID"]);
      if ($event_agenda && count($event_agenda)) :
        ?>
      <section class="events-agenda-section agenda-section topics-covered-section">
        <div class="container container-wrapper">
          <div class="row title-row">
            <div class="col-12">
              <h2 class="heading1">Event Agenda</h2>
            </div>
          </div>
          <div class="row content-row">
            <div class="col-sm-12 col-md-3 col-lg-3 col-12 left-blk">
              <div class="day-list">
                <?php foreach ($event_agenda as $key => $event) : ?>
                  <div class="day-item <?php if ($key == 0) : ?> active <?php endif; ?>" data-id="<?php echo $key ?>">
                    <a class="card-wrapper">
                      <svg class="pattern-img" width="35" height="25" viewBox="0 0 35 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0 25L-2.18557e-07 20L25 20L25 25L0 25ZM-8.30516e-07 6L-1.09278e-06 0L16 -6.99382e-07L16 6L-8.30516e-07 6ZM9 11L9 15L35 15L35 11L9 11ZM29 25L29 20L35 20L35 25L29 25ZM-6.11959e-07 11L-4.37107e-07 15L6 15L6 11L-6.11959e-07 11Z" fill="#FF9200" />
                      </svg>
                      <h3 class="heading2"><?php echo get_field('day_label', $event->ID) ?></h3>
                      <p class="paragraph date">
                        <?php echo $event->post_title ?>
                      </p>
                      <?php
                            if (get_field('type', $event->ID)) :
                              ?>
                        <p class="paragraph type d-none">
                          <?php echo get_field('type', $event->ID) ?>
                        </p>
                      <?php endif ?>

                      <?php
                            if (get_field('total_duration', $event->ID)) :
                              ?>
                        <p class="total-duration sub-title">
                          <?php echo get_field('total_duration', $event->ID) ?>
                        </p>
                      <?php endif ?>
                    </a>
                  </div>
                <?php endforeach; ?>
              </div>
            </div>
            <div class="col-sm-12 col-md-9 col-lg-9 col-12 right-blk">
              <?php foreach ($event_agenda as $key => $event) : ?>
                <div class="content-wrapper timeline-content-wrapper" <?php if ($key == 0) : ?> style="display:block;" <?php else : ?> style="display:none;" <?php endif; ?> data-id="<?php echo $key ?>">
                  <?php
                        $timelines = CFS()->get('timeline', $event->ID);
                        ?>
                  <?php foreach ($timelines as $timeline) : ?>
                    <div class="day-item-content  <?php foreach ($timeline["session"] as $session) : ?> <?php if (!$session["speaker"][0]) : ?> day-item-content-click-disable  <?php endif; ?><?php endforeach; ?>">
                      <div class="day-item-content-visible day-item-content-wrapper">
                        <!-- //multiple events// -->
                        <?php if (count($timeline["session"]) > 1) : ?>
                          <div class="row card-row multiple-events-row">
                            <div class="col-sm-3 col-md-3 col-lg-3 col-12 left-blk">
                                <?php
                                  if($timeline["duration"]):
                                ?>
                                <h4 class="heading5 time"><?php echo $timeline["duration"] ?> <span>(IST)</span></h4>
                                <?php endif ?>
                              <p>
                                <span class="primary-btn primary-btn-dark btn-small">Multiple Events</span>
                              </p>

                            </div>
                            <div class="col-sm-12 col-md-12 col-lg-12 col-12 right-blk">
                              <?php foreach ($timeline["session"] as $session) : ?>
                                <p class="paragraph">
                                  <?php echo $session['title'] ?>
                                </p>
                              <?php endforeach; ?>
                              <p class="paragraph hidden">
                                <span class="support-text more-btn">+2 More</span>
                              </p>
                            </div>
                          </div>
                        <?php else : ?>
                          <!-- //single events// -->
                          <div class="row card-row single-events-row">
                            <div class="col-sm-3 col-md-3 col-lg-3 col-12 left-blk">
                              <?php
                                if($timeline["duration"]):
                              ?>
                              <h4 class="heading5 time"><?php echo $timeline["duration"] ?> <span>(IST)</span></h4>
                              <?php endif ?>
                            </div>
                            <div class="col-sm-12 col-md-12 col-lg-12 col-12 right-blk">
                              <?php foreach ($timeline["session"] as $session) : ?>
                                <p class="paragraph">
                                  <?php echo $session['title'] ?>
                                </p>
                              <?php endforeach; ?>
                            </div>
                          </div>
                        <?php endif; ?>
                        <?php if ($session["speaker"][0]) : ?>
                          <img class="down-arrow" src="<?php echo get_template_directory_uri(); ?>/img/down_arrow.svg" alt="Image" />
                        <?php endif; ?>
                      </div>
                      <div class="day-item-content-hidden day-item-content-wrapper" style="display:none;">
                        <img class="down-arrow" src="<?php echo get_template_directory_uri(); ?>/img/down_arrow.svg" alt="Image" />
                        <?php foreach ($timeline["session"] as $session) : ?>
                          <div class="card-item">
                            <div class="row card-row">
                              <div class="col-sm-3 col-md-3 col-lg-3 col-12 left-blk">
                                <?php
                                  if($timeline["duration"]):
                                ?>
                                  <h4 class="heading5 time"><?php echo $timeline["duration"] ?> <span>(IST)</span></h4>
                                <?php
                                  endif;
                                ?>
                              </div>
                              <div class="col-sm-12 col-md-12 col-lg-12 col-12 right-blk">
                                <div class="wrapper">
                                  <p class="paragraph">
                                    <?php echo $session['title'] ?>
                                  </p>
                                  <?php if ($session["speaker"][0]) : ?>
                                    <div class="speakers-wrapper">
                                      <h5 class="heading4">Speakers</h5>
                                      <div class="row users-row">
                                        <?php foreach ($session["speaker"] as $speaker) : ?>
                                          <?php
                                                        $speaker = get_post($speaker);
                                                        ?>
                                          <div class="col-sm-6 col-md-6 col-lg-6 col-12 users-blk">
                                            <div class="profile-blk flex-centered">
                                              <div class="img-blk">
                                                <?php if (get_the_post_thumbnail_url($speaker)) : ?>
                                                  <img src="<?php echo get_the_post_thumbnail_url($speaker) ?>" alt="Image" />
                                                <?php else : ?>
                                                  <img src="<?php echo get_template_directory_uri(); ?>/img/default_profile_picture.png" alt="Image" />
                                                <?php endif; ?>
                                              </div>
                                              <div class="content-blk">
                                                <h4 class="heading4"><?php echo $speaker->post_title ?></h4>
                                                <p class="support-text">
                                                  <?php echo get_field('designation', $speaker->ID) ?> <?php if (get_field('company', $speaker->ID)) :  echo ', ' . get_field('company', $speaker->ID);
                                                                                                                    endif ?>
                                                </p>
                                              </div>
                                            </div>
                                          </div>
                                        <?php endforeach; ?>
                                      </div>
                                    </div>
                                  <?php endif; ?>
                                  <?php if ($session["curators"][0]) : ?>
                                    <div class="speakers-wrapper">
                                      <h5 class="heading4">Curators</h5>
                                      <div class="row users-row">
                                        <?php foreach ($session["curators"] as $speaker) : ?>
                                          <?php
                                                        $speaker = get_post($speaker);
                                                        ?>
                                          <div class="col-sm-6 col-md-6 col-lg-6 col-12 users-blk">
                                            <div class="profile-blk flex-centered">
                                              <div class="img-blk">
                                                <?php if (get_the_post_thumbnail_url($speaker)) : ?>
                                                  <img src="<?php echo get_the_post_thumbnail_url($speaker) ?>" alt="Image" />
                                                <?php else : ?>
                                                  <img src="<?php echo get_template_directory_uri(); ?>/img/default_profile_picture.png" alt="Image" />
                                                <?php endif; ?>
                                              </div>
                                              <div class="content-blk">
                                                <h4 class="heading4"><?php echo $speaker->post_title ?></h4>
                                                <p class="support-text">
                                                  <?php echo get_field('designation', $speaker->ID) ?> <?php if (get_field('company', $speaker->ID)) :  echo ', ' . get_field('company', $speaker->ID);
                                                                                                                    endif ?>
                                                </p>
                                              </div>
                                            </div>
                                          </div>
                                        <?php endforeach; ?>
                                      </div>
                                    </div>
                                  <?php endif; ?>
                                </div>
                              </div>
                            </div>
                          </div>
                        <?php endforeach; ?>
                      </div>
                    </div>
                  <?php endforeach; ?>
                </div>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
      </section>
    <?php endif; ?>
    <br />
    <br />
    <br />
    <?php
      $speakers = get_field('speakers', $current_post["ID"]);
      $counter = 0;
      if ($speakers && count($speakers)) :
        ?>
      <section class="featured-speakers-section speaker-section speakers">
        <div class="container container-wrapper">
          <div class="row title-row">
            <div class="col-12">
              <h2 class="heading1">Our Featured <?php if (count($speakers) > 1) : ?>Speakers <?php else : ?> Speaker <?php endif; ?></h2>
            </div>
          </div>
          <div class="row content-row flex-not-centered">
            <?php
                foreach ($speakers as $speaker) :
                  ?>

              <?php
                    $counter++;
                    if ($counter <= 80) :
                      ?>
                <div class="col-sm-4 col-md-4 col-lg-3 col-6 card-outer-wrapper">
                  <a href="<?php if (get_field('linkedin', $speaker->ID)) : ?> <?php echo get_field('linkedin', $speaker->ID) ?> <?php else : ?> javascript:void(0) <?php endif; ?>" class="card-wrapper" <?php if (get_field('linkedin', $speaker->ID)) : ?> target="_blank" <?php endif; ?>>
                    <div class="img-blk">
                      <?php if (get_the_post_thumbnail_url($speaker)) : ?>
                        <img src="<?php echo get_the_post_thumbnail_url($speaker) ?>" alt="Image" />
                      <?php else : ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/placeholder_annual.svg" alt="Image" />
                      <?php endif; ?>
                    </div>
                    <h3 class="heading4"><?php echo $speaker->post_title ?></h3>
                    <p class="support-text">
                      <?php echo get_field('designation', $speaker->ID) ?>, <?php echo get_field('company', $speaker->ID) ?>
                    </p>
                  </a>
                </div>
              <?php else : ?>
                <div class="col-sm-4 col-md-4 col-lg-3 col-6 card-outer-wrapper card-hidden d-none">
                  <a href="<?php if (get_field('linkedin', $speaker->ID)) : ?> <?php echo get_field('linkedin', $speaker->ID) ?> <?php else : ?> javascript:void(0) <?php endif; ?>" class="card-wrapper" <?php if (get_field('linkedin', $speaker->ID)) : ?> target="_blank" <?php endif; ?>>
                    <div class="img-blk">
                      <?php if (get_the_post_thumbnail_url($speaker)) : ?>
                        <img src="<?php echo get_the_post_thumbnail_url($speaker) ?>" alt="Image" />
                      <?php else : ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/placeholder_annual.svg" alt="Image" />
                      <?php endif; ?>
                    </div>
                    <h3 class="heading4"><?php echo $speaker->post_title ?></h3>
                    <p class="support-text">
                      <?php echo get_field('designation', $speaker->ID) ?>, <?php echo get_field('company', $speaker->ID) ?>
                    </p>
                  </a>
                </div>
              <?php endif; ?>
            <?php endforeach; ?>
          </div>
          <?php if (count($speakers) > 8) : ?>
            <div class="row view-all-row d-none">
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

    <?php
      $curators = get_field('curators', $current_post["ID"]);
      $counter = 0;
      if ($curators && count($curators)) :
        ?>
      <section class="featured-speakers-section speaker-section team-section-curators d-none" style="margin-top: 80px">
        <div class="container container-wrapper">
          <div class="row title-row">
            <div class="col-12">
              <h2 class="heading1">Session <?php if (count($curators) > 1) : ?>Curators <?php else : ?> Curator <?php endif; ?></h2>
            </div>
          </div>
          <div class="row content-row flex-not-centered">
            <?php
                foreach ($curators as $speaker) :
                  ?>

              <?php
                    $counter++;
                    if ($counter <= 8) :
                      ?>
                <div class="col-sm-4 col-md-4 col-lg-3 col-6 card-outer-wrapper">
                  <a href="<?php if (get_field('linkedin', $speaker->ID)) : ?> <?php echo get_field('linkedin', $speaker->ID) ?> <?php else : ?> javascript:void(0) <?php endif; ?>" class="card-wrapper" <?php if (get_field('linkedin', $speaker->ID)) : ?> target="_blank" <?php endif; ?>>
                    <div class="img-blk">
                      <?php if (get_the_post_thumbnail_url($speaker)) : ?>
                        <img src="<?php echo get_the_post_thumbnail_url($speaker) ?>" alt="Image" />
                      <?php else : ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/placeholder_annual.svg" alt="Image" />
                      <?php endif; ?>
                    </div>
                    <h3 class="heading4"><?php echo $speaker->post_title ?></h3>
                    <p class="support-text">
                      <?php echo get_field('designation', $speaker->ID) ?>, <?php echo get_field('company', $speaker->ID) ?>
                    </p>
                  </a>
                </div>
              <?php else : ?>
                <div class="col-sm-4 col-md-4 col-lg-3 col-6 card-outer-wrapper card-hidden">
                  <a href="<?php if (get_field('linkedin', $speaker->ID)) : ?> <?php echo get_field('linkedin', $speaker->ID) ?> <?php else : ?> javascript:void(0) <?php endif; ?>" class="card-wrapper" <?php if (get_field('linkedin', $speaker->ID)) : ?> target="_blank" <?php endif; ?>>
                    <div class="img-blk">
                      <?php if (get_the_post_thumbnail_url($speaker)) : ?>
                        <img src="<?php echo get_the_post_thumbnail_url($speaker) ?>" alt="Image" />
                      <?php else : ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/placeholder_annual.svg" alt="Image" />
                      <?php endif; ?>
                    </div>
                    <h3 class="heading4"><?php echo $speaker->post_title ?></h3>
                    <p class="support-text">
                      <?php echo get_field('designation', $speaker->ID) ?>, <?php echo get_field('company', $speaker->ID) ?>
                    </p>
                  </a>
                </div>
              <?php endif; ?>
            <?php endforeach; ?>
          </div>
          <?php if (count($curators) > 8) : ?>
            <div class="row view-all-row">
              <div class="col-md-12">
                <p class="show-more-btn">
                  <a href="javascript:void(0)" class="secondary-btn btn-large" id="showMore">
                    <span>View all curators</span>
                  </a>
                </p>
              </div>
            </div>
          <?php endif; ?>
        </div>
      </section>
    <?php endif ?>

    <?php if (!$is_past_event && !$current_event_completed && (strtotime($current_date) < strtotime($current_post_date)) && (get_field('registration_opened', $current_post['ID']) == true)) : ?>
      <section class="cta-section">
        <div class="container container-wrapper">
          <div class="cta-wrapper">
            <div class="row flex-centered">
              <div class="col-sm-6 col-md-6 col-lg-6 col-12 left-blk">
                <div class="registration-content">
                  <h3 class="heading4">Registrations open for SaaSBOOMi Annual <?php echo date('Y', strtotime(get_field('event_dates', $current_post["ID"])['from_date'])) ?></h3>
                  <h4 class="heading3 date d-none"><?php echo date('jS', strtotime(get_field('event_dates', $current_post["ID"])['from_date'])) ?> - <?php echo date('jS F Y', strtotime(get_field('event_dates', $current_post["ID"])['to_date'])) ?></h4>
                  <?php if (date(get_field('event_dates', $current_post["ID"])['from_date']) == date(get_field('event_dates', $current_post["ID"])['to_date'])) : ?>
                    <h4 class="heading3 date"><?php echo date('jS F Y', strtotime(get_field('event_dates', $current_post["ID"])['from_date'])) ?></h4>
                  <?php else : ?>
                    <h4 class="heading3 date"><?php echo date('jS', strtotime(get_field('event_dates', $current_post["ID"])['from_date'])) ?> - <?php echo date('jS F Y', strtotime(get_field('event_dates', $current_post["ID"])['to_date'])) ?></h4>
                  <?php endif; ?>
                  <p class="support-text">
                    <?php echo get_field('events_duration', $current_post["ID"]) ?>
                  </p>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-6 col-12 right-blk">
                <p class="apply-btn d-none">
                  <a href="
                <?php if (get_field('registration_form_link', $current_post["ID"])) : ?>
                  <?php echo get_field('registration_form_link', $current_post["ID"]) ?>
                <?php else : ?>
                  <?php echo get_home_url() ?>/annual-registration?title=<?php echo get_the_title($current_post["ID"]) ?>&start_date=<?php echo date('jS F Y', strtotime(get_field('event_dates', $current_post["ID"])['from_date'])) ?>&end_date=<?php echo date('jS F Y', strtotime(get_field('event_dates', $current_post["ID"])['to_date'])) ?>&duration=<?php echo get_field('events_duration', $current_post["ID"]) ?>
                <?php endif; ?>" class="primary-btn primary-btn-dark btn-small" <?php if (get_field('registration_form_link', $current_post["ID"])) : ?> target="_blank" <?php endif; ?>>
                    Apply Now
                  </a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>
    <?php endif; ?>

    <section class="events-agenda-section agenda-section topics-covered-section hidden">
      <div class="container container-wrapper">
        <div class="row title-row">
          <div class="col-12">
            <h2 class="heading1">Topics covered</h2>
          </div>
        </div>
        <div class="row content-row">
          <div class="col-sm-12 col-md-3 col-lg-3 col-12 left-blk">
            <div class="day-list">
              <div class="day-item active" data-id="1">
                <a class="card-wrapper">
                  <svg class="pattern-img" width="35" height="25" viewBox="0 0 35 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0 25L-2.18557e-07 20L25 20L25 25L0 25ZM-8.30516e-07 6L-1.09278e-06 0L16 -6.99382e-07L16 6L-8.30516e-07 6ZM9 11L9 15L35 15L35 11L9 11ZM29 25L29 20L35 20L35 25L29 25ZM-6.11959e-07 11L-4.37107e-07 15L6 15L6 11L-6.11959e-07 11Z" fill="#FF9200" />
                  </svg>
                  <h3 class="heading3">Workshops</h3>
                  <img class="arrow-right" src="<?php echo get_template_directory_uri() ?>/img/chevron-right.svg" />
                </a>
              </div>
              <div class="day-item" data-id="2">
                <a class="card-wrapper">
                  <svg class="pattern-img" width="35" height="25" viewBox="0 0 35 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0 25L-2.18557e-07 20L25 20L25 25L0 25ZM-8.30516e-07 6L-1.09278e-06 0L16 -6.99382e-07L16 6L-8.30516e-07 6ZM9 11L9 15L35 15L35 11L9 11ZM29 25L29 20L35 20L35 25L29 25ZM-6.11959e-07 11L-4.37107e-07 15L6 15L6 11L-6.11959e-07 11Z" fill="#FF9200" />
                  </svg>
                  <h3 class="heading3">Talks</h3>
                  <img class="arrow-right" src="<?php echo get_template_directory_uri() ?>/img/chevron-right.svg" />
                </a>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-9 col-lg-9 col-12 right-blk">
            <div class="content-wrapper timeline-content-wrapper" data-id="1">
              <div class="day-item-content">
                <div class="day-item-content-visible day-item-content-wrapper">
                  <div class="row card-row multiple-events-row">
                    <div class="col-sm-12 col-md-12 col-lg-12 col-12 left-blk">
                      <p class="paragraph">B2D: How to get to first $100K ARR & then scale</p>
                    </div>
                  </div>
                </div>
                <div class="day-item-content-visible day-item-content-wrapper">
                  <div class="row card-row multiple-events-row">
                    <div class="col-sm-12 col-md-12 col-lg-12 col-12 left-blk">
                      <p class="paragraph">Global SMB: Pricing for profit & growth</p>
                    </div>
                  </div>
                </div>
                <div class="day-item-content-visible day-item-content-wrapper">
                  <div class="row card-row multiple-events-row">
                    <div class="col-sm-12 col-md-12 col-lg-12 col-12 left-blk">
                      <p class="paragraph">Enterprise: Marketing & selling large deals to global enterprise completely remotely</p>
                    </div>
                  </div>
                </div>
                <div class="day-item-content-visible day-item-content-wrapper">
                  <div class="row card-row multiple-events-row">
                    <div class="col-sm-12 col-md-12 col-lg-12 col-12 left-blk">
                      <p class="paragraph">Getting Unstuck: Going from sub-10% growth to 10Mn</p>
                    </div>
                  </div>
                </div>
                <div class="day-item-content-visible day-item-content-wrapper">
                  <div class="row card-row multiple-events-row">
                    <div class="col-sm-12 col-md-12 col-lg-12 col-12 left-blk">
                      <p class="paragraph">Tax, Cross border, Compliance</p>
                    </div>
                  </div>
                </div>
                <div class="day-item-content-visible day-item-content-wrapper">
                  <div class="row card-row multiple-events-row">
                    <div class="col-sm-12 col-md-12 col-lg-12 col-12 left-blk">
                      <p class="paragraph">10K-100K: Getting ICP Right By The Time You Get To 100K</p>
                    </div>
                  </div>
                </div>
                <div class="day-item-content-visible day-item-content-wrapper">
                  <div class="row card-row multiple-events-row">
                    <div class="col-sm-12 col-md-12 col-lg-12 col-12 left-blk">
                      <p class="paragraph">Marketing for vertical SaaS</p>
                    </div>
                  </div>
                </div>
                <div class="day-item-content-visible day-item-content-wrapper">
                  <div class="row card-row multiple-events-row">
                    <div class="col-sm-12 col-md-12 col-lg-12 col-12 left-blk">
                      <p class="paragraph">Org Design for Growth</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="content-wrapper timeline-content-wrapper" data-id="2" style="display: none">
              <div class="day-item-content">
                <div class="day-item-content-visible day-item-content-wrapper">
                  <div class="row card-row multiple-events-row">
                    <div class="col-sm-12 col-md-12 col-lg-12 col-12 left-blk">
                      <p class="paragraph">Shaping India’s SaaS Landscape - [Report launch]</p>
                    </div>
                  </div>
                </div>
                <div class="day-item-content-visible day-item-content-wrapper">
                  <div class="row card-row multiple-events-row">
                    <div class="col-sm-12 col-md-12 col-lg-12 col-12 left-blk">
                      <p class="paragraph">Services -> SaaS transformation</p>
                    </div>
                  </div>
                </div>
                <div class="day-item-content-visible day-item-content-wrapper">
                  <div class="row card-row multiple-events-row">
                    <div class="col-sm-12 col-md-12 col-lg-12 col-12 left-blk">
                      <p class="paragraph">Success in SE. Asia SaaS</p>
                    </div>
                  </div>
                </div>
                <div class="day-item-content-visible day-item-content-wrapper">
                  <div class="row card-row multiple-events-row">
                    <div class="col-sm-12 col-md-12 col-lg-12 col-12 left-blk">
                      <p class="paragraph">Getting out of India after first $1Mn</p>
                    </div>
                  </div>
                </div>
                <div class="day-item-content-visible day-item-content-wrapper">
                  <div class="row card-row multiple-events-row">
                    <div class="col-sm-12 col-md-12 col-lg-12 col-12 left-blk">
                      <p class="paragraph">Adding a services moat after $500K</p>
                    </div>
                  </div>
                </div>
                <div class="day-item-content-visible day-item-content-wrapper">
                  <div class="row card-row multiple-events-row">
                    <div class="col-sm-12 col-md-12 col-lg-12 col-12 left-blk">
                      <p class="paragraph">Closing a $1Mn deal fully remotely</p>
                    </div>
                  </div>
                </div>
                <div class="day-item-content-visible day-item-content-wrapper">
                  <div class="row card-row multiple-events-row">
                    <div class="col-sm-12 col-md-12 col-lg-12 col-12 left-blk">
                      <p class="paragraph">Building products that sell themselves from Bhopal->Boston</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>



    <?php
      $organisers = get_field('organisers', $current_post["ID"]);
      $volunteers = get_field('volunteers', $current_post["ID"]);
      $curators = get_field('curators', $current_post["ID"]);
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
                  $curators = get_field('curators', $current_post["ID"]);
                  if ($curators && count($curators)) :
                    ?>
                <div class="team-wrapper volunteer-wrapper background-prop">
                  <img class="bg-bottom" src="<?php echo get_template_directory_uri(); ?>/img/volunteer_bottom.svg" alt="Image" />
                  <img class="bg-top" src="<?php echo get_template_directory_uri(); ?>/img/volunteer_right_and_top_bg 1.svg" alt="Image" />
                  <ul class="list-inline flex-not-centered">
                    <li class="list-inline-item">
                      <h3 class="heading3 team-title">Session <?php if (count($curators) > 1) : ?>Curators <?php else : ?> Curator <?php endif; ?></h3>
                    </li>
                    <?php foreach ($curators as $volunteer) : ?>
                      <li class="list-inline-item">
                        <a href="<?php if (get_field('linkedin', $volunteer->ID)) : ?> <?php echo get_field('linkedin', $volunteer->ID) ?> <?php else : ?> javascript:void(0) <?php endif; ?>" class="card-wrapper" <?php if (get_field('linkedin', $volunteer->ID)) : ?> target="_blank" <?php endif; ?>>
                          <?php if (get_the_post_thumbnail_url($volunteer)) : ?>
                            <img src="<?php echo get_the_post_thumbnail_url($volunteer) ?>" alt="Image" />
                          <?php else : ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/img/placeholder_annual.svg" alt="Image" />
                          <?php endif; ?>
                          <h4 class="heading4"><?php echo $volunteer->post_title ?></h4>
                          <h5 class="support-text"><?php echo get_field('designation', $volunteer->ID) ?>, <?php echo get_field('company', $volunteer->ID) ?></h5>
                          <?php if (get_field('responsibility', $volunteer->ID)) : ?>
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
              <?php
                  $organisers = get_field('organisers', $current_post["ID"]);
                  if ($organisers && count($organisers)) :
                    ?>
                <div class="team-wrapper organiser-wrapper" style="margin: 50px 0;">
                  <img class="bg-bottom" src="<?php echo get_template_directory_uri(); ?>/img/organiser_bottom_bg.svg" alt="Image" />
                  <img class="bg-top" src="<?php echo get_template_directory_uri(); ?>/img/organiser_right_and_top_bg.svg" alt="Image" />
                  <ul class="list-inline flex-not-centered">
                    <li class="list-inline-item">
                      <h3 class="heading3 team-title">Program Curators</h3>
                    </li>
                    <?php foreach ($organisers as $organiser) : ?>
                      <li class="list-inline-item">
                        <a href="<?php if (get_field('linkedin', $organiser->ID)) : ?> <?php echo get_field('linkedin', $organiser->ID) ?> <?php else : ?> javascript:void(0) <?php endif; ?>" class="card-wrapper" <?php if (get_field('linkedin', $organiser->ID)) : ?> target="_blank" <?php endif; ?>>
                          <?php if (get_the_post_thumbnail_url($organiser)) : ?>
                            <img src="<?php echo get_the_post_thumbnail_url($organiser) ?>" alt="Image" />
                          <?php else : ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/img/placeholder_annual.svg" alt="Image" />
                          <?php endif; ?>
                          <h4 class="heading4"><?php echo $organiser->post_title ?></h4>
                          <h5 class="support-text"><?php echo get_field('designation', $organiser->ID) ?>, <?php echo get_field('company', $organiser->ID) ?></h5>
                          <?php if (get_field('responsibility', $organiser->ID)) : ?>
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
                  $volunteers = get_field('volunteers', $current_post["ID"]);
                  if ($volunteers && count($volunteers)) :
                    ?>
                <div class="team-wrapper volunteer-wrapper background-prop">
                  <img class="bg-bottom" src="<?php echo get_template_directory_uri(); ?>/img/volunteer_bottom.svg" alt="Image" />
                  <img class="bg-top" src="<?php echo get_template_directory_uri(); ?>/img/volunteer_right_and_top_bg 1.svg" alt="Image" />
                  <ul class="list-inline flex-not-centered">
                    <li class="list-inline-item">
                      <h3 class="heading3 team-title">Volunteers</h3>
                    </li>
                    <?php foreach ($volunteers as $volunteer) : ?>
                      <li class="list-inline-item">
                        <a href="<?php if (get_field('linkedin', $volunteer->ID)) : ?> <?php echo get_field('linkedin', $volunteer->ID) ?> <?php else : ?> javascript:void(0) <?php endif; ?>" class="card-wrapper" <?php if (get_field('linkedin', $volunteer->ID)) : ?> target="_blank" <?php endif; ?>>
                          <?php if (get_the_post_thumbnail_url($volunteer)) : ?>
                            <img src="<?php echo get_the_post_thumbnail_url($volunteer) ?>" alt="Image" />
                          <?php else : ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/img/placeholder_annual.svg" alt="Image" />
                          <?php endif; ?>
                          <h4 class="heading4"><?php echo $volunteer->post_title ?></h4>
                          <h5 class="support-text"><?php echo get_field('designation', $volunteer->ID) ?>, <?php echo get_field('company', $volunteer->ID) ?></h5>
                          <?php if (get_field('responsibility', $volunteer->ID)) : ?>
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
    <?php endif; ?>

    <?php if ($current_event_completed) : ?>
      <section class="stay-updated-section d-none">
        <div class="container container-wrapper">
          <div class="stay-updated-wrapper">
            <img class="bg-bottom" src="<?php echo get_template_directory_uri(); ?>/img/stay_updated_bottom_bg_new.svg" alt="Image" />
            <img class="bg-top" src="<?php echo get_template_directory_uri(); ?>/img/stay_updated_top_bg.svg" alt="Image" />
            <div class="row content-row">
              <div class="col-sm-6 col-md-6 col-lg-6 col-12 left-blk">
                <svg class="pattern-img" width="35" height="25" viewBox="0 0 35 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M0 25L-2.18557e-07 20L25 20L25 25L0 25ZM-8.30516e-07 6L-1.09278e-06 0L16 -6.99382e-07L16 6L-8.30516e-07 6ZM9 11L9 15L35 15L35 11L9 11ZM29 25L29 20L35 20L35 25L29 25ZM-6.11959e-07 11L-4.37107e-07 15L6 15L6 11L-6.11959e-07 11Z" fill="#FF9200" />
                </svg>
                <h3 class="heading3">Stay Updated</h3>
                <p class="paragraph">
                  Fill out the form to stay updated about <br />
                  Annual Event
                </p>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-6 col-12 right-blk">
                <form id="upcomingEventNotifyForm" class="stay-updated-form" data-parsley-validate="">
                  <div class="form-group">
                    <label class="heading4">Name</label>
                    <input name="entry.147730265" type="text" name="fullname" maxlength="80" minlength="3" class="form-control paragraph" id="fname" placeholder="Enter Full Name" data-parsley-required>
                  </div>
                  <div class="form-group">
                    <label class="heading4">Email</label>
                    <input name="entry.751894285" type="email" name="email" class="form-control paragraph" id="email" placeholder="Enter Email Address" data-parsley-required>
                  </div>
                  <div class="submit-blk">
                    <input type="submit" value="Notify Me" class="primary-btn primary-btn-dark btn-large">
                    <span class="form-submission-status paragraph">Submitted</span>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>
    <?php endif; ?>

    <section class="prv-evnts-highlights">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <h2 class="heading2 text-center section-title">Highlights from SaaSBOOMi 2020</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="owl-carousel owl-theme prev-events-slider">
              <div class="item">
                <img src="<?php echo get_template_directory_uri() ?>/img/highlight_1.jpg" />
              </div>
              <div class="item">
                <img src="<?php echo get_template_directory_uri() ?>/img/highlight_2.jpg" />
              </div>
              <div class="item">
                <img src="<?php echo get_template_directory_uri() ?>/img/highlight_3.jpg" />
              </div>
              <div class="item">
                <iframe width="615" height="315" src="https://www.youtube.com/embed/AtYgU_tqb54" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              </div>
              <div class="item">
                <img src="<?php echo get_template_directory_uri() ?>/img/highlight_4.jpg" />
              </div>
              <div class="item">
                <img src="<?php echo get_template_directory_uri() ?>/img/highlight_5.jpg" />
              </div>
              <div class="item">
                <img src="<?php echo get_template_directory_uri() ?>/img/highlight_6.jpg" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="community-section background-prop testimonials-section">
      <div class="container container-wrapper">
        <div class="row content-row flex-centered">
          <div class="col-lg-4 col-md-12 col-sm-12 col-12 flex-not-centered left-blk">
            <h2 class="heading1">Hear from the community</h2>
          </div>
          <div class="col-lg-8 col-md-12 col-sm-12 col-12 flex-not-centered right-blk">
            <div class="community-feed-wrapper owl-carousel owl-theme community-slider">
              <?php
                $args = array(
                  'post_type' => array('home_testimonials', 'testimonials',  'growth_testimonials', 'entprise_testimonial', 'build_testimonials', 'product_testimonials'),
                  'posts_per_page' => 6,
                  'post_status' => 'publish',
                  'order'    => 'Desc',
                );
                $the_query = new WP_Query($args);
                if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post();
                    ?>
                  <div class="item">
                    <div class="card-wrapper" title="<?php echo mb_strimwidth(wp_strip_all_tags(get_the_content()), 0, 240, ' ...') ?>">
                      <h3 class="paragraph">
                        <?php echo mb_strimwidth(wp_strip_all_tags(get_the_content()), 0, 240, ' ...') ?>
                      </h3>
                      <div class="profile-blk">
                        <div class="img-blk">
                          <?php if (get_the_post_thumbnail_url()) : ?>
                            <img src="<?php echo get_the_post_thumbnail_url() ?>" alt="Image" />
                          <?php else : ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/img/default_profile_picture.png" alt="Image" />
                          <?php endif; ?>
                        </div>
                        <div class="content-blk">
                          <h4 class="heading4"><?php echo mb_strimwidth(get_the_title(), 0, 55, ' ...') ?></h4>
                          <p class="support-text">
                            <?php echo get_field('designation') ?>, <?php echo get_field('company') ?>
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                <?php endwhile;
                    wp_reset_postdata();
                  else : ?>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
    </section>

    <?php
      $blogs = get_field('blogs', $current_post["ID"]);
      // var_dump(count($blogs));
      $counter = 0;
      if ($blogs && count($blogs)) :
        ?>
      <section class="related-blogs-section" <?php if ($current_event_completed) : ?> style="padding: 10px 0 80px;" <?php endif; ?>>
        <div class="container container-wrapper">
          <div class="row title-row">
            <div class="col-12">
              <h2 class="heading2">Related Blogs</h2>
            </div>
          </div>
          <div class="row content-row flex-not-centered">
            <?php
                foreach ($blogs as $blog) :
                  ?>
              <div class="col-sm-6 col-md-6 col-lg-4 col-12 flex-not-centered">
                <a href="<?php echo get_permalink($blog); ?>" class="card-wrapper">
                  <div class="img-blk">
                    <?php if (get_the_post_thumbnail_url($blog)) : ?>
                      <img class="featured-img" src="<?php echo get_the_post_thumbnail_url($blog); ?>" alt="<?php echo get_the_title($blog); ?>">
                    <?php else : ?>
                      <img class="featured-img" src="<?php echo get_template_directory_uri(); ?>/img/blog_placeholder.png" alt="Image" />
                    <?php endif; ?>
                    <p class="title support-text">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/blog_icon.svg" alt="Image" />
                      <span>Blog</span>
                    </p>
                  </div>
                  <div class="content-blk">
                    <div class="tag-blk">
                      <?php
                            $categories = get_the_category($blog);
                            ?>
                      <ul class="list-inline tags-list">
                        <?php foreach ($categories as $key => $category) : ?>
                          <?php if (!($category->slug == 'uncategorized')) : ?>
                            <li class="list-inline-item">
                              <span class="support-text"><?php echo $category->name; ?></span>
                            </li>
                          <?php endif; ?>
                        <?php endforeach; ?>
                      </ul>
                    </div>
                    <h3 class="heading4"><?php echo $blog->post_title ?></h3>
                    <p class="support-text date-info">
                      <?php if (get_field('published_date', $blog->ID)) : ?>
                        <span class="date">
                          <?php $date = DateTime::createFromFormat('d/m/Y', get_field('published_date', $blog->ID)); ?>
                          <?php echo $date->format('d M Y'); ?>
                        </span>
                      <?php else : ?>
                        <span class="date">
                          <?php echo get_the_date('d M Y'); ?>
                        </span>
                      <?php endif; ?>
                      <span class="dot-blk">•</span>
                      <span class="read-time"> <?php echo get_field('read_time', $blog->ID); ?></span>
                    </p>
                    <div class="author-blk flex-centered d-none">
                      <?php if (get_field('author_image', $blog->ID)) : ?>
                        <img src="<?php echo get_field('author_image', $blog->ID)['url'] ?>" alt="image" />
                      <?php else : ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/default_profile_picture.png" alt="Profile Pic" />
                      <?php endif; ?>
                      <h4 class="support-text">
                        <?php echo get_field('author_name', $blog->ID) ?>
                      </h4>
                    </div>
                    <ul class="list-inline flex-centered author-info-list">
                      <?php if (get_field('author_image', $blog->ID) || get_field('author_designation', $blog->ID) || get_field('author_company', $blog->ID) || get_field('about_author', $blog->ID) || get_field('author_linkedin_link', $blog->ID)) : ?>
                        <li class="author-blk flex-centered">
                          <?php if (get_field('author_image', $blog->ID)) : ?>
                            <img src="<?php echo get_field('author_image', $blog->ID)['url'] ?>" data-toggle="tooltip" data-placement="bottom" title="<?php echo get_field('author_name', $blog->ID); ?>" alt="image" />
                          <?php else : ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/img/default_profile_picture.png" data-toggle="tooltip" data-placement="bottom" title="<?php echo get_field('author_name', $blog->ID); ?>" alt="Profile Pic" />
                          <?php endif; ?>
                          <h4 class="support-text" <?php if ((!get_field('author_name_2', $blog->ID))) : ?> style="display:block;" <?php endif; ?>>
                            <?php echo get_field('author_name', $blog->ID) ?>
                          </h4>
                        </li>
                      <?php endif; ?>
                      <?php if (get_field('author_image_2', $blog->ID) || get_field('author_designation_2', $blog->ID) || get_field('author_company_2', $blog->ID) || get_field('about_author_2', $blog->ID) || get_field('author_linkedin_link_2', $blog->ID)) : ?>
                        <li class="author-blk flex-centered">
                          <?php if (get_field('author_image_2', $blog->ID)) : ?>
                            <img src="<?php echo get_field('author_image_2', $blog->ID)['url'] ?>" data-toggle="tooltip" data-placement="bottom" title="<?php echo get_field('author_name_2', $blog->ID); ?>" alt="image" />
                          <?php else : ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/img/default_profile_picture.png" data-toggle="tooltip" data-placement="bottom" title="<?php echo get_field('author_name_2', $blog->ID); ?>" alt="Profile Pic" />
                          <?php endif; ?>
                          <h4 class="support-text">
                            <?php echo get_field('author_name_2', $blog->ID) ?>
                          </h4>
                        </li>
                      <?php endif; ?>
                      <?php if (get_field('author_image_3', $blog->ID) || get_field('author_designation_3', $blog->ID) || get_field('author_company_3', $blog->ID) || get_field('about_author_3', $blog->ID) || get_field('author_linkedin_link_3', $blog->ID)) : ?>
                        <li class="author-blk flex-centered">
                          <?php if (get_field('author_image_3', $blog->ID)) : ?>
                            <img src="<?php echo get_field('author_image_3', $blog->ID)['url'] ?>" data-toggle="tooltip" data-placement="bottom" title="<?php echo get_field('author_name_3', $blog->ID); ?>" alt="image" />
                          <?php else : ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/img/default_profile_picture.png" data-toggle="tooltip" data-placement="bottom" title="<?php echo get_field('author_name_3', $blog->ID); ?>" alt="Profile Pic" />
                          <?php endif; ?>
                          <h4 class="support-text">
                            <?php echo get_field('author_name_3', $blog->ID) ?>
                          </h4>
                        </li>
                      <?php endif; ?>
                      <?php if (get_field('author_image_4', $blog->ID) || get_field('author_designation_4', $blog->ID) || get_field('author_company_4', $blog->ID) || get_field('about_author_4', $blog->ID) || get_field('author_linkedin_link_4', $blog->ID)) : ?>
                        <li class="author-blk flex-centered">
                          <?php if (get_field('author_image_4', $blog->ID)) : ?>
                            <img src="<?php echo get_field('author_image_4', $blog->ID)['url'] ?>" data-toggle="tooltip" data-placement="bottom" title="<?php echo get_field('author_name_4', $blog->ID); ?>" alt="image" />
                          <?php else : ?>
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
          <?php if (count($blogs) > 3) : ?>
            <div class="row view-all-row text-center">
              <div class="col-md-12">
                <p class="show-more-btn">
                  <a href="<?php echo get_permalink(663); ?>" class="secondary-btn btn-large" id="exploreMore">
                    Explore More
                  </a>
                </p>
              </div>
            </div>
          <?php endif; ?>
        </div>
      </section>
    <?php endif; ?>

    <section class="cta-section event-banner-block" <?php if ($current_event_completed) : ?> style="padding: 16px 0 100px" <?php endif; ?>>
      <div class="container container-wrapper">
        <div class="row flex-centered">
          <div class="col-sm-12 col-md-12 col-lg-12 col-12">
            <div class="event-banner">
              <a class="poster-image" href="<?php echo get_home_url() ?>/saasboomi-annual-2021/">
                <img src="<?php echo get_template_directory_uri() ?>/img/event_poster.jpg" alt="event poster" />
              </a>
              <div class="event-description">
                <h2 class="heading1"><a href="<?php echo get_home_url() ?>/saasboomi-annual-2021/">SaaSBOOMi Annual 2021</a></h2>
                <ul class="list-inline meeting-highlights">
                  <li class="list-inline-item heading4">Virtual Conference</li>
                  <li class="list-inline-item heading4">Meeting with VCs</li>
                  <li class="list-inline-item heading4">Workshops</li>
                  <li class="list-inline-item heading4">Community</li>
                </ul>
                <ul class="list-inline data-info-list flex-centered">
                  <li class="list-inline-item heading3 hidden">Starts May 1st, 2021</li> <br />
                  <li class="list-inline-item heading3">
                    26th June 2021 - 4th Sep 2021. Saturdays, 9am to 12:30pm.
                  </li>
                  <li class="list-inline-item heading3 hidden">
                    Registrations closed
                  </li>
                  <!-- <li class="list-inline-item">
                  <a href="https://airtable.com/shr7DTIbsUJpgiozA" class="apply-btn support-text" target="_blank" >APPLY NOW</a>
                </li> -->
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <?php if (!$is_past_event) : ?>
      <?php
          $args = array(
            'post_type' => 'annual_events',
            'posts_per_page' => -1,
            'order'    => 'DESC',
            'post_status' => 'publish',
            'post__not_in' => [$current_post["ID"]]
          );
          if (!$current_event_completed) {
            $args['post__not_in'] = [$current_post["ID"]];
          }
          // var_dump($current_post["ID"]);
          $the_query = new WP_Query($args);
          $post_count = 0;
          if ($the_query->have_posts()) :
            ?>
        <section class="past-events-section">
          <div class="container container-wrapper">
            <div class="row title-row">
              <div class="col-12">
                <h2 class="heading2">A glimpse into the past events</h2>
              </div>
            </div>
            <div class="row content-row">
              <?php while ($the_query->have_posts()) : $the_query->the_post();
                      $post_count++; ?>
                <?php
                        if ($post_count <= 2) :
                          ?>
                  <div class="<?php if (count($the_query->posts) > 1) : ?>col-sm-6 col-md-6 col-12 <?php else : ?> col-sm-12 col-md-12 col-12 <?php endif ?>">
                    <a href="<?php echo get_home_url() ?>/annual/?post_slug=<?php echo get_post_field('post_name', get_post()) ?>" class="card-wrapper">
                      <div class="row card-row">
                        <div class="col-sm-6 col-md-6 col-6 card-left-blk">
                          <div class="content-wrapper">
                            <img class="circle-bg" src="<?php echo get_template_directory_uri(); ?>/img/past_events_circle_bg.svg" alt="Annual" />
                            <h3 class="heading2">SaaSBOOMi <?php echo date('Y', strtotime(get_field('event_dates', get_the_ID())['from_date'])) ?></h3>
                            <img class="annual-img" src="<?php echo get_template_directory_uri(); ?>/img/annual_logo_black.svg" alt="Annual" />
                          </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-6 card-right-blk">
                          <div class="img-blk">
                            <?php if (get_the_post_thumbnail_url()) : ?>
                              <img class="featured-image" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Annual" />
                            <?php else : ?>
                              <img class="featured-image" src="<?php echo get_template_directory_uri(); ?>/img/dummy_events.png" alt="Annual" />
                            <?php endif ?>
                            <svg class="shape-bg" width="92" height="284" viewBox="0 0 92 284" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M91.3906 0C84.332 0 78.1055 4.62695 76.0703 11.3867L0.207031 263.387C0.132812 263.637 0.0625 263.887 0 264.137V0H91.3906Z" fill="#FFF2E0" />
                              <path d="M15.5273 284C7.84375 284 1.71875 278.693 0 271.906V284H15.5273Z" fill="#FFF2E0" />
                            </svg>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                <?php else : ?>
                  <div class="<?php if (count($the_query->posts) % 2 == 0) : ?>col-sm-6 col-md-6 col-12 card-hidden <?php else : ?> col-sm-12 col-md-12 col-12 card-hidden<?php endif ?>">
                    <a href="<?php echo get_home_url() ?>/annual/?post_slug=<?php echo get_post_field('post_name', get_post()) ?>" class="card-wrapper">
                      <div class="row card-row">
                        <div class="col-sm-6 col-md-6 col-6 card-left-blk">
                          <div class="content-wrapper">
                            <img class="circle-bg" src="<?php echo get_template_directory_uri(); ?>/img/past_events_circle_bg.svg" alt="Annual" />
                            <h3 class="heading2">SaaSBOOMi <?php echo date('Y', strtotime(get_field('event_dates', get_the_ID())['from_date'])) ?></h3>
                            <img class="annual-img" src="<?php echo get_template_directory_uri(); ?>/img/annual_logo_black.svg" alt="Annual" />
                          </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-6 card-right-blk">
                          <div class="img-blk">
                            <?php if (get_the_post_thumbnail_url()) : ?>
                              <img class="featured-image" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Annual" />
                            <?php else : ?>
                              <img class="featured-image" src="<?php echo get_template_directory_uri(); ?>/img/dummy_events.png" alt="Annual" />
                            <?php endif ?>
                            <svg class="shape-bg" width="92" height="284" viewBox="0 0 92 284" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M91.3906 0C84.332 0 78.1055 4.62695 76.0703 11.3867L0.207031 263.387C0.132812 263.637 0.0625 263.887 0 264.137V0H91.3906Z" fill="#FFF2E0" />
                              <path d="M15.5273 284C7.84375 284 1.71875 278.693 0 271.906V284H15.5273Z" fill="#FFF2E0" />
                            </svg>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                <?php endif; ?>
              <?php endwhile;
                    wp_reset_postdata(); ?>
            </div>
            <?php if ($post_count > 2) : ?>
              <div class="row view-all-row text-center">
                <div class="col-md-12">
                  <p class="show-more-btn">
                    <a href="javascript:void(0)" class="secondary-btn btn-large text-center" id="viewMore">
                      <span>View More</span>
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
        'post_type' => 'annual_events',
        'posts_per_page' => 1,
        'post_status' => 'publish',
        'numberposts' => 1,
        'orderby' => 'meta_value',
        'meta_key' => 'event_dates_to_date',
        'order' => 'DESC'
      );
      $upcoming_event = wp_get_recent_posts($args);
      if ($upcoming_event && count($upcoming_event)) {
        $upcoming_event = $upcoming_event[0];
        // $upcoming_event_date =  date(get_field('event_dates', $upcoming_event["ID"])['from_date']);
        // $current_date = date("m/d/Y");
        // if($upcoming_event_date >= $current_date && $is_past_event):
        $upcoming_event_date = date(get_field('event_dates', $upcoming_event["ID"])['from_date']);
        $current_date = date("m/d/Y");
        if (strtotime($upcoming_event_date) >= strtotime($current_date) && $is_past_event && (get_field('registration_opened', $current_post['ID']) == true)) :
          ?>
        <section class="cta-section <?php if ($is_past_event) : ?> past-cta-section <?php endif; ?>">
          <div class="container container-wrapper">
            <div class="cta-wrapper">
              <div class="row flex-centered">
                <div class="col-sm-6 col-md-6 col-lg-6 col-12 left-blk">
                  <div class="registration-content">
                    <h3 class="heading4">Registrations open for SaaSBOOMi Annual <?php echo date('Y', strtotime(get_field('event_dates', $upcoming_event["ID"])['from_date'])) ?></h3>
                    <?php if (date(get_field('event_dates', $current_post["ID"])['from_date']) == date(get_field('event_dates', $current_post["ID"])['to_date'])) : ?>
                      <h4 class="heading3 date"><?php echo date('jS F Y', strtotime(get_field('event_dates', $current_post["ID"])['from_date'])) ?></h4>
                    <?php else : ?>
                      <h4 class="heading3 date"><?php echo date('jS', strtotime(get_field('event_dates', $current_post["ID"])['from_date'])) ?> - <?php echo date('jS F Y', strtotime(get_field('event_dates', $current_post["ID"])['to_date'])) ?></h4>
                    <?php endif; ?>
                    <p class="support-text">
                      <?php echo get_field('events_duration', $upcoming_event["ID"]) ?>
                    </p>
                  </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-6 col-12 right-blk">
                  <p class="apply-btn">
                    <a href="<?php echo get_home_url(); ?>/annual/" class="primary-btn primary-btn-dark btn-small">
                      View Details
                    </a>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </section>
      <?php elseif ($is_past_event) : ?>
        <section class="cta-section">
          <div class="container container-wrapper">
            <div class="cta-wrapper">
              <div class="row flex-centered">
                <div class="col-sm-12 col-md-12 col-lg-12 col-12 left-blk">
                  <div class="registration-content">
                    <h3 class="heading4">SaaSBOOMi Annual <?php echo date('Y', strtotime('+1 year')); ?></h3>
                    <h4 class="heading3 date">Coming Soon!</h4>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
    <?php endif;
      } ?>
  <?php endif; ?>

  <?php get_template_part('templates/template-newsletter'); ?>


</div>

<div class="modal fade" id="vedioModal" tabindex="-1" aria-labelledby="vedioModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <a class="close" data-dismiss="modal" aria-label="Close">
        <img src="<?php echo get_template_directory_uri(); ?>/img/close.svg" alt="Close" />
      </a>
      <div class="modal-body">
        <div class="vedio-blk">
          <iframe width="900" height="500" src="https://www.youtube.com/embed/nxBBxQM9if8" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/wow.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/parsley.min.js"></script>


<script type="text/javascript">
  $(document).ready(function() {
    // new WOW().init();
    $('.community-slider').owlCarousel({
      items: 2,
      dots: true,
      loop: false,
      mouseDrag: false,
      autoplay: false,
      autoplayTimeout: 3000,
      smartSpeed: 1000,
      autoplayHoverPause: true,
      nav: true,
      margin: 16,
      navText: ['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>'],
      responsive: {
        0: {
          items: 1,
        },
        568: {
          items: 1,
        },
        767: {
          items: 2,
        },
        1024: {
          items: 2
        }
      },
    });

    $('.prev-events-slider').owlCarousel({
      items: 2,
      dots: false,
      nav: true,
      loop: true,
      mouseDrag: false,
      autoplay: false,
      autoplayTimeout: 3000,
      smartSpeed: 1000,
      autoplayHoverPause: true,
      margin: 16,
      center: true,
      navText: ['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>'],
      responsive: {
        0: {
          items: 1,
        },
        568: {
          items: 1,
        },
        767: {
          items: 2,
        },
        1024: {
          center: true,
          items: 2
        },
        1300: {
          center: true,
          items: 4
        }
      },
    });

    $('#upcomingEventNotifyForm').parsley();
    $('#upcomingEventNotifyForm #fname').attr('required', true).attr('data-parsley-required-message', 'Please enter Full Name').attr('data-parsley-minlength-message', 'First Name must be of minimum 3 characters');
    $('#upcomingEventNotifyForm #email').attr('required', true).attr('data-parsley-required-message', 'Please enter Email Address').attr('data-parsley-type-message', 'Please enter valid Email');

    $('#showMore').on('click', function() {
      debugger
      if ($(this).hasClass('show-active')) {
        $('.featured-speakers-section .content-row').find('.card-hidden').css('height', '0').hide().slideUp(300);
        $(this).removeClass('show-active');
        $(this).find('span').text('View all speakers');
      } else {
        $('.featured-speakers-section .content-row').find('.card-hidden').css('height', 'auto').show().slideDown(500);
        $(this).addClass('show-active');
        $(this).find('span').text('View less speakers');
      }
    });

    $('#viewMore').on('click', function() {
      debugger
      if ($(this).hasClass('show-active')) {
        $('.past-events-section .content-row').find('.card-hidden').css('height', '0').hide().slideUp(300);
        $(this).removeClass('show-active');
        $(this).find('span').text('View More');
      } else {
        $('.past-events-section .content-row').find('.card-hidden').css('height', 'auto').show().slideDown(500);
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
          url: "https://docs.google.com/forms/d/1e7Y4UqHV5i3VD4FFbkR0ozKTaYKAJG2dIiFxg6dHPZ0/formResponse",
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

    $('.day-item-content-visible').on('click', function() {
      var $this = $(this);
      var ref = $(this).closest('.content-wrapper .day-item-content');
      if (ref.hasClass('show-active')) {
        ref.find('.day-item-content-hidden').slideUp(300).hide();
        ref.removeClass('show-active');
        // ref.find('.day-item-content-visible').show();
      } else {
        // debugger
        $(".day-item-content-visible").show();
        $(".day-item-content-hidden").hide().slideUp(300);
        $('.day-item-content').removeClass('show-active');
        $this.next(".day-item-content-hidden").slideDown(500).show();
        ref.find('.day-item-content-visible').hide();
        ref.addClass('show-active');
      }
    });

    $('.day-item-content-hidden').on('click', function() {
      var $this = $(this);
      var ref = $(this).closest('.content-wrapper .day-item-content');
      if (ref.hasClass('show-active')) {
        $(".day-item-content-visible").show();
        ref.find('.day-item-content-hidden').slideUp(300).hide();
        ref.find('.day-item-content-visible').show();
        ref.removeClass('show-active')
      } else {
        // debugger
        $this.next(".day-item-content-hidden").slideDown(500).show();
        ref.find('.day-item-content-visible').hide();
        ref.addClass('show-active');
      }
    });

    $('.day-item').on('click', function() {
      var $this = $(this);
      var dataId = $this.attr('data-id');
      $('.day-item').removeClass('active');
      $('.day-item[data-id=' + dataId + ']').addClass('active');
      $('.timeline-content-wrapper').hide();
      $('.timeline-content-wrapper[data-id=' + dataId + ']').show();
    });


    // $('#tabsList li').on('click',function(){
    //   $('#tabsList li').removeClass('active');
    //   $(this).addClass('active');
    //   var block = $(this).attr('data-class');
    //   var offsetTop = 130;
    //   if($(window).outerWidth() < 992){
    //     offsetTop = 150;
    //   }
    //   $("html, body").animate({
    //       scrollTop: $('.'+block+'').offset().top - offsetTop
    //   }, 1000);
    // });
    //
    // var tabListWidth = $('#tabsList').outerWidth();
    // $('#tabsList').css('width',tabListWidth);
    // var top = 70;
    // if($(window).outerWidth() < 992){
    //   top = $('.mobile-header').outerHeight();
    // }else{
    //   top = 70;
    // }

    // $(window).scroll(function(){
    //     var tabsList = $('.introduction-section');
    //     if($(window).outerWidth() > 991){
    //       if($(window).scrollTop() > $('.about-section').offset().top - 200 && $(window).scrollTop() < $('.newsletter-section').offset().top - 250){
    //         var paddingTop = tabsList.outerHeight();
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
    //             // 'position': '-webkit-sticky',
    //             'top':'0',
    //             'left':'0',
    //             'width':'100%',
    //             'padding':'18px 0 2px',
    //             'z-index':'9999',
    //             'margin-bottom':'24px',
    //             'transition':'all 0.2s ease-in',
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
    //         var paddingTop = tabsList.outerHeight();
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
    //     if($(window).outerWidth() > 767){
    //       topOffset = 300;
    //     }else{
    //       topOffset = 100;
    //     }
    //
    //     if($(window).scrollTop() > $('.about-section').offset().top - topOffset && (!$('#tabsList li[data-class="about-section"]').hasClass('active')) && $(window).scrollTop() < $('.speaker-section').offset().top - topOffset){
    //       setTimeout(function(){
    //           $('#tabsList li').removeClass('active');
    //           $('#tabsList li[data-class="about-section"]').addClass('active');
    //       },10);
    //     }
    //
    //     if($(window).scrollTop() > $('.speaker-section').offset().top - topOffset && (!$('#tabsList li[data-class="speaker-section"]').hasClass('active')) && $(window).scrollTop() < $('.agenda-section').offset().top - topOffset){
    //       setTimeout(function(){
    //         $('#tabsList li').removeClass('active');
    //         $('#tabsList li[data-class="speaker-section"]').addClass('active');
    //       },10);
    //     }
    //
    //     if($(window).scrollTop() > $('.agenda-section').offset().top - topOffset && (!$('#tabsList li[data-class="agenda-section"]').hasClass('active')) && $(window).scrollTop() < $('.team-section').offset().top - topOffset){
    //       setTimeout(function(){
    //         $('#tabsList li').removeClass('active');
    //         $('#tabsList li[data-class="agenda-section"]').addClass('active');
    //       },10);
    //     }
    //
    //     if($(window).scrollTop() > $('.team-section').offset().top - topOffset && (!$('#tabsList li[data-class="team-section"]').hasClass('active')) && $(window).scrollTop() < $('.testimonials-section').offset().top - topOffset){
    //       setTimeout(function(){
    //         $('#tabsList li').removeClass('active');
    //         $('#tabsList li[data-class="team-section"]').addClass('active');
    //       },10);
    //     }
    //
    //     if($(window).scrollTop() > $('.testimonials-section').offset().top - topOffset && (!$('#tabsList li[data-class="testimonials-section"]').hasClass('active'))){
    //       setTimeout(function(){
    //         $('#tabsList li').removeClass('active');
    //         $('#tabsList li[data-class="testimonials-section"]').addClass('active');
    //       },10);
    //     }
    //
    // });



  });
</script>

<script type="text/javascript">
  $(document).ready(function() {
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

      if ($(window).outerWidth() > 991) {
        if ($(window).scrollTop() > $('.about-section').offset().top - 200 && $(window).scrollTop() < $('.newsletter-section').offset().top - 150) {
          // var paddingTop = tabsList.outerHeight();
          // if($(window).outerWidth() < 992){
          //   paddingTop = $('.tab-list').outerHeight() + 90;
          // }
          tabsList.addClass('block-fixed');
          $('.event-logo').css({
            'display': 'inline-block'
          });
          $('.introduction-section .tab-list-wrapper').css({
            'border-bottom': '1px solid transparent',
            // 'margin-bottom':'26px',
          });
          tabsList.css({
            'box-shadow': '0px 2px 10px -1px rgba(161,161,161,0.46)',
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
        } else {
          tabsList.removeClass('block-fixed');
          $('.event-logo').css({
            'display': 'none'
          });
          $('.introduction-section .tab-list-wrapper').css({
            'border-bottom': '1px solid #DDDDDD',
            // 'margin-bottom':'28px',
          });
          tabsList.css({
            'box-shadow': 'none',
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

      if ($(window).outerWidth() < 991) {
        if ($(window).scrollTop() > $('.about-section').offset().top - 200 && $(window).scrollTop() < $('.newsletter-section').offset().top - 150) {
          var paddingTop = tabsList.outerHeight();
          // if($(window).outerWidth() < 992){
          //   paddingTop = $('.tab-list').outerHeight() + 90;
          // }
          tabsList.addClass('block-fixed');
          $('.event-logo').css({
            'display': 'inline-block'
          });
          $('.introduction-section .tab-list-wrapper').css({
            'border-bottom': '1px solid transparent',
            'margin-bottom': '0px',
          });
          tabsList.css({
            'box-shadow': '0px 2px 10px -1px rgba(161,161,161,0.46)',
            'background': '#ffffff',
            'position': 'fixed',
            'top': '60px',
            'left': '0',
            'width': '100%',
            'padding-top': '0px',
            'z-index': '9999',
            'margin-bottom': '0px',
            'transition': 'all 0.3s ease-in',
            // 'opacity':'1',
            // 'display':'block'
          });
        } else {
          tabsList.removeClass('block-fixed');
          $('.event-logo').css({
            'display': 'none'
          });
          $('.introduction-section .tab-list-wrapper').css({
            'border-bottom': '1px solid #DDDDDD',
            'margin-bottom': '32px',
          });
          tabsList.css({
            'box-shadow': 'none',
            'background': 'transparent',
            'position': 'relative',
            'top': 'auto',
            'left': 'auto',
            'width': '100%',
            'padding-top': '0px',
            'z-index': '99',
            'margin-bottom': '0px',
            'transition': 'all 0.1s ease-out',
            // 'opacity':'0',
            // 'display':'none'
          });
        }
      }

      // Cache selectors
      var topMenu = $("#top-menu"),
        topMenuHeight = topMenu.outerHeight() + 15,
        // All list items
        menuItems = topMenu.find("a"),
        // Anchors corresponding to menu items
        scrollItems = menuItems.map(function() {
          var item = $($(this).attr("href"));
          if (item.length) {
            return item;
          }
        });

      // Bind to scroll
      $(window).scroll(function() {
        // Get container scroll position
        var fromTop = $(this).scrollTop() + topMenuHeight;

        // Get id of current scroll item
        var cur = scrollItems.map(function() {
          if ($(this).offset().top < fromTop)
            return this;
        });
        // Get the id of the current element
        cur = cur[cur.length - 1];
        var id = cur && cur.length ? cur[0].id : "";
        // Set/remove active class
        menuItems
          .parent().removeClass("active")
          .end().filter("[href='#" + id + "']").parent().addClass("active");
      });


      var topOffset = 300;
      if ($(window).outerWidth() > 767) {
        topOffset = 300;
      } else {
        topOffset = 100;
      }

      if ($(window).scrollTop() > $('.about-section').offset().top - topOffset && (!$('#tabsList li[data-class="about-section"]').hasClass('active')) && $(window).scrollTop() < $('.how-saasboomi-works').offset().top - topOffset) {
        setTimeout(function() {
          $('#tabsList li').removeClass('active');
          $('#tabsList li[data-class="about-section"]').addClass('active');
        }, 10);
      }

      if ($(window).scrollTop() > $('.how-saasboomi-works').offset().top - topOffset && (!$('#tabsList li[data-class="how-saasboomi-works"]').hasClass('active')) && $(window).scrollTop() < $('.topics-covered-section').offset().top - topOffset) {
        setTimeout(function() {
          $('#tabsList li').removeClass('active');
          $('#tabsList li[data-class="how-saasboomi-works"]').addClass('active');
        }, 10);
      }

      if ($(window).scrollTop() > $('.topics-covered-section').offset().top - topOffset && (!$('#tabsList li[data-class="topics-covered-section"]').hasClass('active')) && $(window).scrollTop() < $('.speakers').offset().top - topOffset) {
        setTimeout(function() {
          $('#tabsList li').removeClass('active');
          $('#tabsList li[data-class="topics-covered-section"]').addClass('active');
        }, 10);
      }

      if ($(window).scrollTop() > $('.speakers').offset().top - topOffset && (!$('#tabsList li[data-class="speakers"]').hasClass('active')) && $(window).scrollTop() < $('.team-section-curators').offset().top - topOffset) {
        setTimeout(function() {
          $('#tabsList li').removeClass('active');
          $('#tabsList li[data-class="speakers"]').addClass('active');
        }, 10);
      }

      if ($(window).scrollTop() > $('.team-section-curators').offset().top - topOffset && (!$('#tabsList li[data-class="team-section-curators"]').hasClass('active')) && $(window).scrollTop() < $('.prv-evnts-highlights').offset().top - topOffset) {
        setTimeout(function() {
          $('#tabsList li').removeClass('active');
          $('#tabsList li[data-class="team-section-curators"]').addClass('active');
        }, 10);
      }

      if ($(window).scrollTop() > $('.prv-evnts-highlights').offset().top - topOffset && (!$('#tabsList li[data-class="prv-evnts-highlights"]').hasClass('active'))) {
        setTimeout(function() {
          $('#tabsList li').removeClass('active');
          $('#tabsList li[data-class="prv-evnts-highlights"]').addClass('active');
        }, 10);
      }

    });


    // $(document).on("scroll", onScroll);

  });
</script>
<style>
  .modal-backdrop.show {
    opacity: 0.7 !important;
  }
</style>
<?php get_footer(); ?>