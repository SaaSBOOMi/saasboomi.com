<?php
/*
* Template Name: Awards Old
*/ ?>

<?php get_header(); ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/annual-events-page.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/global-initiative-page.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/owl.carousel.min.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/animate.css">

<div class="event-annual-page initiative-awards-page">
  <?php
    $current_post = null;
    $is_past_event = false;
    $current_event_completed = false;
    if(isset($_GET['post_slug'])){
      $the_slug = 'my_slug';
      $args = array(
        'name'        => $_GET['post_slug'],
        'post_type'   => 'awards',
        'post_status' => 'publish',
        'numberposts' => 1
      );
      $past_event = wp_get_recent_posts($args);
      if($past_event && count($past_event)){
        $current_post = $past_event;
        $is_past_event = true;
      }else{
        $args = array(
          'post_type' => 'awards',
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
        'post_type' => 'awards',
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
    $current_post_date = date(get_field('event_dates', $current_post["ID"])['from_date']);
    $current_date = date("m/d/Y");
    if($current_date >= $current_post_date && !$is_past_event){
      $current_event_completed = true;
    }
  ?>

  <section class="event-banner-section">
    <div class="container container-wrapper">
      <div class="row flex-centered">
        <div class="col-sm-6 col-md-6 col-lg-6 col-12 left-blk">
          <img src="<?php echo get_template_directory_uri(); ?>/img/awards_logo_black.svg"  alt="Awards" />
          <h1 class="heading2"><?php echo get_the_title($current_post["ID"])?></h1>
          <div class="registration-content">
            <?php if(!$is_past_event && !$current_event_completed):?>
            <p class="heading4">Registrations open for SaaSBOOMi Awards  <?php echo date('Y',strtotime(get_field('event_dates', $current_post["ID"])['from_date'])) ?></p>
            <h2 class="heading2 date"><?php echo date('jS F Y',strtotime(get_field('event_dates', $current_post["ID"])['from_date'])) ?> </h2>
            <?php elseif($current_event_completed): ?>
              <p class="heading4">Register for SaaSBOOMi Awards <?php echo date('Y', strtotime('+1 year')); ?></p>
              <h2 class="heading2 date">Dates To Be Announced Soon!</h2>
            <?php else: ?>
            <h2 class="heading2 date">Thank you for attending awards <?php echo date('Y',strtotime(get_field('event_dates', $current_post["ID"])['to_date']))?>!</h2>
            <?php endif?>
            <ul class="list-inline">
              <?php if(!$is_past_event && !$current_event_completed):?>
              <li class="list-inline-item">
                <a href="javascript:void(0)" class="primary-btn primary-btn-dark btn-small">
                  Apply Now
                </a>
              </li>
              <li class="list-inline-item">
                <a href="javascript:void(0)" class="secondary-btn btn-small">
                  Nominate Others
                </a>
              </li>
              <?php elseif($is_past_event): ?>
                <li class="list-inline-item">
                  <a href="javascript:void(0)" class="primary-btn primary-btn-dark btn-small">
                    WATCH REPLAY
                  </a>
                </li>
              <?php else: ?>
              <?php endif; ?>
            </ul>
          </div>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-6 col-12 right-blk">
          <div class="vedio-blk background-prop" data-toggle="modal" data-target="#vedioModal">
            <svg class="complete-vedio-bg" width="455" height="470" viewBox="0 0 330 341" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" clip-rule="evenodd" d="M294.01 0H0V341H329.579V0H294.01ZM294.01 0C305.425 0 315.386 8.94723 315.975 20.941L329.552 297.513C330.221 311.147 318.436 322.096 304.875 320.439L41.3868 288.249C28.7986 286.711 20.1061 274.899 22.3916 262.435L57.5694 70.5995C59.1337 62.0687 65.5663 55.251 73.9977 53.1878L288.731 0.641046C290.506 0.206772 292.274 0 294.01 0Z" fill="white"/>
              <path d="M40.3552 164.474L3.95611 216.954C-4.24666 228.78 0.841749 245.196 14.2813 250.264L23.9546 253.912L40.3552 164.474Z" fill="#F2F7FC"/>
              <path d="M150.297 301.555L251.127 339.577C263.97 344.42 278.049 336.421 280.523 322.877L281.49 317.582L150.297 301.555Z" fill="#F2F7FC"/>
              <path d="M320.148 105.957L325.946 74.2185C327.536 65.5161 323.863 57.3724 317.528 52.5708L320.148 105.957Z" fill="#F2F7FC"/>
            </svg>
            <div class="featured-img-blk">
              <?php if(get_field('video_video_thumbnail', $current_post['ID'])): ?>
              <img class="featured-vedio-img" src="<?php echo get_field('video_video_thumbnail', $current_post['ID'])["url"]?>" alt="image"/>
              <?php else: ?>
              <img class="featured-vedio-img" src="<?php echo get_template_directory_uri(); ?>/img/awards_featured_img.png"  alt="Awards"/>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php
    $awards = get_field('awards', $current_post["ID"]);
    $counter = 0;
    if($awards && count($awards) && get_field('past_year_awards_available', $current_post["ID"]) == true):
  ?>
  <section class="winners-of-awards-section">
    <div class="container container-wrapper">
      <div class="row content-row">
        <div class="col-sm-12 col-md-4 col-lg-4 col-12 left-blk">
          <h2 class="heading1">Winners of Awards - <?php echo date('Y', strtotime('-1 year')); ?></h2>
          <h3 class="paragraph">
            A year to reflect & recoginize the most deserving Indian SaaS Startups that won everyone over.
          </h3>
          <p>
            <a href="/blog" class="secondary-btn btn-large">
              Read More
            </a>
          </p>
        </div>
        <div class="col-sm-12 col-md-8 col-lg-8 col-12 right-blk">
          <div class="row flex-not-centered awards-row">
            <?php
              foreach($awards as $award):
            ?>
            <div class="col-sm-6 col-md-4 col-lg-3 col-6 flex-not-centered">
                <div class="card-wrapper">
                  <div class="top-wrapper">
                    <?php if(get_the_post_thumbnail_url($award)): ?>
                      <img class="awards-img"  src="<?php echo get_the_post_thumbnail_url($award) ?>"  alt="Image" />
                    <?php else: ?>
                      <img class="awards-img" src="<?php echo get_template_directory_uri(); ?>/img/generic_placeholder.png"  alt="Image" />
                    <?php endif; ?>
                    <p class="support-text">
                      <?php echo $award->post_title?>
                    </p>
                  </div>
                  <div class="bottom-wrapper text-center">
                    <img class="winner-img" src="<?php echo get_field('winner_image', $award->ID)['url']?>" alt="image"/>
                  </div>
                </div>
            </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php endif; ?>

  <section class="introduction-section">
    <?php if(!$current_event_completed): ?>
    <div class="container container-wrapper">
      <div class="tab-list-wrapper">
        <div class="row title-row flex-centered">
          <div class="col-sm-8 col-md-8 col-lg-8 col-12 left-blk">
            <ul class="list-inline tab-list" id="tabsList">
              <li class="active scenario list-inline-item event-logo" id="platform0" style="padding-right:30px;display: none;">
                <img src="<?php echo get_template_directory_uri(); ?>/img/annual_logo_black.svg"  alt="Image" style="margin-top:-4px; height:20px;"/>
              </li>
              <li class="active scenario list-inline-item" id="platform1" data-class="about-section">
                <a href="javascript:void(0)" class="paragraph">About </a>
              </li>
              <li class="scenario list-inline-item" id="platform2" data-class="category-section">
                <a href="javascript:void(0)" class="paragraph">Categories</a>
              </li>
              <li class="scenario list-inline-item" id="platform3" data-class="how-it-works-section">
                <a href="javascript:void(0)" class="paragraph">How It Works</a>
              </li>
              <li class="scenario list-inline-item" id="platform3" data-class="speaker-section">
                <a href="javascript:void(0)" class="paragraph">Jury</a>
              </li>
              <li class="scenario list-inline-item" id="platform4" data-class="team-section">
                <a href="javascript:void(0)" class="paragraph">SaaSBOOMi Team</a>
              </li>
              <li class="scenario list-inline-item" id="platform5" data-class="testimonials-section">
                <a href="javascript:void(0)" class="paragraph">Testimonials</a>
              </li>
            </ul>
          </div>
          <?php if(!$is_past_event): ?>
          <div class="col-sm-4 col-md-4 col-lg-4 col-12 right-blk">
            <ul  class="list-inline text-right">
              <li class="list-inline-item">
                <p>
                  <a href="javascript:void(0)" class="primary-btn primary-btn-dark btn-small">
                    Apply Now
                  </a>
                </p>
              </li>
              <li class="list-inline-item">
                <a href="javascript:void(0)" class="secondary-btn btn-small">
                  Nominate Others
                </a>
              </li>
            </ul>
          </div>
          <?php endif;?>
        </div>
      </div>
    </div>
    <?php endif;?>
  </section>

  <section class="about-section">
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
            <h4 class="heading3">Beyond becoming an aspirational goal</h4>
            <div class="row store-content-row">
              <div class="col-sm-6 col-md-6 col-lg-6 col-12">
                <div class="card-wrapper">
                  <div class="img-blk">
                    <svg width="18" height="15" viewBox="0 0 18 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M6.19378 13.7859L0.506271 8.09835C0.164576 7.75665 0.164576 7.20263 0.506271 6.86091L1.74368 5.62346C2.08537 5.28173 2.63943 5.28173 2.98112 5.62346L6.8125 9.45481L15.0189 1.24846C15.3606 0.906764 15.9146 0.906764 16.2563 1.24846L17.4937 2.4859C17.8354 2.8276 17.8354 3.38161 17.4937 3.72334L7.43122 13.7859C7.08949 14.1276 6.53547 14.1276 6.19378 13.7859Z" fill="#6AA5E2"/>
                    </svg>
                  </div>
                  <div class="content-blk">
                    <p class="support-text">
                      <?php echo get_field('about_goal1_text', $current_post['ID'])?>
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-6 col-12">
                <div class="card-wrapper">
                  <div class="img-blk">
                    <svg width="18" height="15" viewBox="0 0 18 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M6.19378 13.7859L0.506271 8.09835C0.164576 7.75665 0.164576 7.20263 0.506271 6.86091L1.74368 5.62346C2.08537 5.28173 2.63943 5.28173 2.98112 5.62346L6.8125 9.45481L15.0189 1.24846C15.3606 0.906764 15.9146 0.906764 16.2563 1.24846L17.4937 2.4859C17.8354 2.8276 17.8354 3.38161 17.4937 3.72334L7.43122 13.7859C7.08949 14.1276 6.53547 14.1276 6.19378 13.7859Z" fill="#6AA5E2"/>
                    </svg>
                  </div>
                  <div class="content-blk">
                    <p class="support-text">
                      <?php echo get_field('about_goal2_text', $current_post['ID'])?>
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-6 col-12">
                <div class="card-wrapper">
                  <div class="img-blk">
                    <svg width="18" height="15" viewBox="0 0 18 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M6.19378 13.7859L0.506271 8.09835C0.164576 7.75665 0.164576 7.20263 0.506271 6.86091L1.74368 5.62346C2.08537 5.28173 2.63943 5.28173 2.98112 5.62346L6.8125 9.45481L15.0189 1.24846C15.3606 0.906764 15.9146 0.906764 16.2563 1.24846L17.4937 2.4859C17.8354 2.8276 17.8354 3.38161 17.4937 3.72334L7.43122 13.7859C7.08949 14.1276 6.53547 14.1276 6.19378 13.7859Z" fill="#6AA5E2"/>
                    </svg>
                  </div>
                  <div class="content-blk">
                    <p class="support-text">
                      <?php echo get_field('about_goal3_text', $current_post['ID'])?>
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-6 col-12">
                <div class="card-wrapper">
                  <div class="img-blk">
                    <svg width="18" height="15" viewBox="0 0 18 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M6.19378 13.7859L0.506271 8.09835C0.164576 7.75665 0.164576 7.20263 0.506271 6.86091L1.74368 5.62346C2.08537 5.28173 2.63943 5.28173 2.98112 5.62346L6.8125 9.45481L15.0189 1.24846C15.3606 0.906764 15.9146 0.906764 16.2563 1.24846L17.4937 2.4859C17.8354 2.8276 17.8354 3.38161 17.4937 3.72334L7.43122 13.7859C7.08949 14.1276 6.53547 14.1276 6.19378 13.7859Z" fill="#6AA5E2"/>
                    </svg>
                  </div>
                  <div class="content-blk">
                    <p class="support-text">
                      <?php echo get_field('about_goal4_text', $current_post['ID'])?>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-6 col-lg-6 col-12 right-blk">
            <div class="featured-img-blk">
              <svg class="pattern1" width="35" height="25" viewBox="0 0 35 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M0 25L-2.18557e-07 20L25 20L25 25L0 25ZM-8.30516e-07 6L-1.09278e-06 0L16 -6.99382e-07L16 6L-8.30516e-07 6ZM9 11L9 15L35 15L35 11L9 11ZM29 25L29 20L35 20L35 25L29 25ZM-6.11959e-07 11L-4.37107e-07 15L6 15L6 11L-6.11959e-07 11Z" fill="#6AA5E2"/>
              </svg>
              <img class="image1" src="<?php echo get_field('about_image1', $current_post['ID'])["url"]?>"  alt="Image" />
              <div class="image2-wrapper">
                <img class="image2" src="<?php echo get_field('about_image2', $current_post['ID'])["url"]?>"  alt="Image" />
                <svg class="pattern2" width="35" height="25" viewBox="0 0 35 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M0 25L-2.18557e-07 20L25 20L25 25L0 25ZM-8.30516e-07 6L-1.09278e-06 0L16 -6.99382e-07L16 6L-8.30516e-07 6ZM9 11L9 15L35 15L35 11L9 11ZM29 25L29 20L35 20L35 25L29 25ZM-6.11959e-07 11L-4.37107e-07 15L6 15L6 11L-6.11959e-07 11Z" fill="#6AA5E2"/>
                </svg>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <?php
    $awards = get_field('awards', $current_post["ID"]);
    $counter = 0;
    if($awards && count($awards) && !$current_event_completed):
  ?>
  <section class="awards-category-section">
    <div class="container container-wrapper">
      <div class="row title-row">
        <div class="col-12 ">
          <h2 class="heading1">Award Categories</h2>
        </div>
      </div>
      <div class="row flex-not-centered awards-row">
        <?php
          foreach($awards as $award):
        ?>
        <div class="col-sm-6 col-md-4 col-lg-3 col-6 flex-not-centered card-outer-blk">
            <div class="card-wrapper">
              <div class="content-default">
                <?php if(get_the_post_thumbnail_url($award)): ?>
                  <img class="awards-img"  src="<?php echo get_the_post_thumbnail_url($award) ?>"  alt="Image" />
                <?php else: ?>
                  <img class="awards-img" src="<?php echo get_template_directory_uri(); ?>/img/generic_placeholder.png"  alt="Image" />
                <?php endif; ?>
                <p class="heading5">
                  <?php echo $award->post_title?>
                </p>
              </div>
              <div class="content-hover">
                <div class="top-wrapper">
                  <?php if(get_the_post_thumbnail_url($award)): ?>
                    <img class="awards-img"  src="<?php echo get_the_post_thumbnail_url($award) ?>"  alt="Image" />
                  <?php else: ?>
                    <img class="awards-img" src="<?php echo get_template_directory_uri(); ?>/img/generic_placeholder.png"  alt="Image" />
                  <?php endif; ?>
                  <p class="heading5">
                    <?php echo $award->post_title?>
                  </p>
                </div>
                <h4 class="paragraph">
                  <?php echo mb_strimwidth(wp_strip_all_tags($award->post_content),0,150,' ...') ?>
                </h4>
              </div>
            </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>
  <?php endif; ?>

  <?php
    $how_it_works = CFS()->get('how_it_works', $current_post['ID']);
    $post_count = 1;
    if(!$is_past_event && !$current_event_completed && $how_it_works && count($how_it_works)):
  ?>
  <section class="how-it-works-section">
    <div class="container container-wrapper">
      <div class="row title-row">
        <div class="col-12 ">
          <h2 class="heading1">How it Works</h2>
        </div>
      </div>
      <div class="row flex-not-centered content-row">
        <?php foreach($how_it_works as $how_it_work): ?>
        <div class="col-sm-6 col-md-4 col-lg-3 col-6 flex-not-centered card-outer-blk">
            <div class="card-wrapper">
              <div class="img-blk">
                <span class="heading3"><?php echo $post_count; ?></span>
              </div>
              <div class="content-blk">
                <h5 class="heading5"><?php echo $how_it_work["title"] ?></h5>
                <p class="paragraph"><?php echo $how_it_work["description"] ?></p>
                <h6 class="heading5">
                  By: <span><?php echo date('jS F Y',strtotime($how_it_work['deadline_date'])) ?> </span>
                </h6>
              </div>
            </div>
        </div>
        <?php
          $post_count++;
        ?>
        <?php endforeach;?>
      </div>
    </div>
  </section>
  <?php endif; ?>

  <?php if(!$is_past_event && !$current_event_completed): ?>
  <section class="cta-section">
    <div class="container container-wrapper">
      <div class="cta-wrapper">
        <div class="row flex-centered">
          <div class="col-sm-6 col-md-6 col-lg-6 col-12 left-blk">
            <div class="registration-content">
              <h3 class="heading4">Registrations open for SaaSBOOMi Awards <?php echo date('Y',strtotime(get_field('event_dates', $current_post["ID"])['from_date'])) ?></h3>
              <h4 class="heading3 date"><?php echo date('jS F Y',strtotime(get_field('event_dates', $current_post["ID"])['from_date'])) ?></h4>
            </div>
          </div>
          <div class="col-sm-6 col-md-6 col-lg-6 col-12 right-blk">
            <ul class="list-inline apply-btn">
              <li class="list-inline-item">
                <p>
                  <a href="javascript:void(0)" class="primary-btn primary-btn-dark btn-small">
                    Apply Now
                  </a>
                </p>
              </li>
              <li class="list-inline-item">
                <a href="javascript:void(0)" class="secondary-btn btn-small">
                  Nominate Others
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php endif; ?>

  <?php
    $speakers = get_field('speakers', $current_post["ID"]);
    $counter = 0;
    if($speakers && count($speakers) && !$current_event_completed):
  ?>
  <section class="featured-speakers-section speaker-section">
    <div class="container container-wrapper">
      <div class="row title-row">
        <div class="col-12">
            <h2 class="heading1">Jury</h2>
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

  <?php
      $organisers = get_field('organisers', $current_post["ID"]);
      $volunteers = get_field('volunteers', $current_post["ID"]);
      if(!$current_event_completed):
  ?>
  <?php if($organisers || $volunteers): ?>
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
            $organisers = get_field('organisers', $current_post["ID"]);
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
                      <p class="support-text">
                        <?php echo get_field('responsibility', $organiser->ID) ?>, SaaSBOOMi
                      </p>
                    </a>
                  </li>
                <?php endforeach; ?>
            </ul>
          </div>
          <?php endif; ?>
          <?php
            $volunteers = get_field('volunteers', $current_post["ID"]);
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
                    <p class="support-text">
                      <?php echo get_field('responsibility', $volunteer->ID) ?>, SaaSBOOMi
                    </p>
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
  <?php endif;?>
  <?php if($current_event_completed): ?>
  <section class="stay-updated-section">
    <div class="container container-wrapper">
      <div class="stay-updated-wrapper">
        <img class="bg-bottom" src="<?php echo get_template_directory_uri(); ?>/img/stay_updated_bottom_bg_new.svg"  alt="Image" />
        <img class="bg-top" src="<?php echo get_template_directory_uri(); ?>/img/stay_updated_top_bg.svg"  alt="Image" />
        <div class="row content-row">
            <div class="col-sm-6 col-md-6 col-lg-6 col-12 left-blk">
              <svg class="pattern-img" width="35" height="25" viewBox="0 0 35 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M0 25L-2.18557e-07 20L25 20L25 25L0 25ZM-8.30516e-07 6L-1.09278e-06 0L16 -6.99382e-07L16 6L-8.30516e-07 6ZM9 11L9 15L35 15L35 11L9 11ZM29 25L29 20L35 20L35 25L29 25ZM-6.11959e-07 11L-4.37107e-07 15L6 15L6 11L-6.11959e-07 11Z" fill="#6AA5E2"/>
              </svg>
              <h3 class="heading3">Stay Updated</h3>
              <p class="paragraph">
                Fill out the form to stay updated about <br/>
                Awards Event
              </p>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-6 col-12 right-blk">
              <form id="upcomingEventNotifyForm">
                <div class="form-group">
                  <label class="heading4">Name</label>
                  <input type="text" name="fullname"  maxlength="80" minlength="3" class="form-control paragraph" id="fname"  placeholder="Enter Full Name" data-parsley-required>
                </div>
                <div class="form-group">
                  <label class="heading4">Email</label>
                  <input type="email" name="email" class="form-control paragraph" id="email" placeholder="Enter Email Address" data-parsley-required>
                </div>
                <div class="submit-blk">
                  <input type="submit" value="Notify Me" class="primary-btn primary-btn-dark btn-large">
                </div>
              </form>
            </div>
        </div>
      </div>
    </div>
  </section>
  <?php endif;?>
  <?php
    $testimonials = get_field('testimonials', $current_post["ID"]);
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
    <?php if(!$current_event_completed): ?>
    <div class="container container-wrapper">
      <div class="cta-wrapper">
        <div class="row flex-centered">
          <div class="col-sm-6 col-md-6 col-lg-6 col-12 left-blk">
            <div class="registration-content">
              <h3 class="heading4">Registrations open for SaaSBOOMi Awards <?php echo date('Y',strtotime(get_field('event_dates', $current_post["ID"])['from_date'])) ?></h3>
              <h4 class="heading3 date"><?php echo date('jS F Y',strtotime(get_field('event_dates', $current_post["ID"])['from_date'])) ?></h4>
              <p class="support-text">
                <?php echo get_field('events_duration', $current_post["ID"]) ?>
              </p>
            </div>
          </div>
          <div class="col-sm-6 col-md-6 col-lg-6 col-12 right-blk">
            <ul class="list-inline apply-btn">
              <li class="list-inline-item">
                <p>
                  <a href="javascript:void(0)" class="primary-btn primary-btn-dark btn-small">
                    Apply Now
                  </a>
                </p>
              </li>
              <li class="list-inline-item">
                <a href="javascript:void(0)" class="secondary-btn btn-small">
                  Nominate Others
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <?php endif;?>
  </section>
  <?php endif; ?>
  <?php
    $blogs = get_field('blogs', $current_post["ID"]);
    // var_dump(count($blogs));
    $counter = 0;
    if($blogs && count($blogs) && get_field('past_year_awards_available', $current_post["ID"]) == true):
  ?>
      <section class="related-blogs-section">
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
            <div class="col-sm-6 col-md-4 col-lg-4 col-12 flex-not-centered">
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
                  <div class="author-blk flex-centered">
                    <?php if(get_field('author_image', $blog->ID)): ?>
                      <img src="<?php echo get_field('author_image', $blog->ID)['url']?>" alt="image"/>
                    <?php else: ?>
                      <img src="<?php echo get_template_directory_uri(); ?>/img/default_profile_picture.png"  alt="Profile Pic" />
                    <?php endif; ?>
                    <h4 class="support-text">
                      <?php echo get_field('author_name', $blog->ID) ?>
                    </h4>
                  </div>
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

  <?php
    $args = array(
      'post_type' => 'awards',
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
      $upcoming_event_date =  date(get_field('event_dates', $upcoming_event["ID"])['from_date']);
      $current_date = date("m/d/Y");
      if($upcoming_event_date >= $current_date && $is_past_event):
  ?>
  <section class="cta-section">
    <div class="container container-wrapper">
      <div class="cta-wrapper">
        <div class="row flex-centered">
          <div class="col-sm-6 col-md-6 col-lg-6 col-12 left-blk">
            <div class="registration-content">
              <h3 class="heading4">Registrations open for SaaSBOOMi Awards <?php echo date('Y',strtotime(get_field('event_dates', $upcoming_event["ID"])['from_date'])) ?></h3>
              <h4 class="heading3 date"><?php echo date('jS F Y',strtotime(get_field('event_dates', $upcoming_event["ID"])['from_date'])) ?></h4>
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
          <?php echo get_field('video_link', $current_post["ID"]) ?>
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
       loop:false,
       mouseDrag: false,
       autoplay:false,
       autoplayTimeout:3000,
       smartSpeed: 1000,
       autoplayHoverPause:true,
       nav:true,
       margin: 16,
       navText:['<i class="fa fa-chevron-left"></i>','<i class="fa fa-chevron-right"></i>']
    });

    $('#upcomingEventNotifyForm').parsley();
    $('#upcomingEventNotifyForm #fname').attr('required',true).attr('data-parsley-required-message','Please enter Full Name').attr('data-parsley-minlength-message','First Name must be of minimum 3 characters');
    $('#upcomingEventNotifyForm #email').attr('required',true).attr('data-parsley-required-message','Please enter Email Address').attr('data-parsley-type-message','Please enter valid Email');


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

    if($(window).outerWidth() > 767){
      $('#tabsList li').on('click',function(){
        $('#tabsList li').removeClass('active');
        $(this).addClass('active');
        var block = $(this).attr('data-class');
        var offsetTop = 130;
        if($(window).outerWidth() < 992){
          offsetTop = 150;
        }
        $("html, body").animate({
            scrollTop: $('.'+block+'').offset().top - offsetTop
        }, 1000);
      });

      var tabListWidth = $('#tabsList').outerWidth();
      $('#tabsList').css('width',tabListWidth);
      var top = 70;
      if($(window).outerWidth() < 992){
        top = $('.mobile-header').outerHeight();
      }else{
        top = 70;
      }

      $(window).scroll(function(){
          var tabsList = $('.introduction-section');
          if($(window).scrollTop() > $('.about-section').offset().top - 200 && $(window).scrollTop() < $('footer').offset().top - 150){
              tabsList.addClass('block-fixed');
              $('.event-logo').css({'display':'inline-block'});
              $('.introduction-section .tab-list-wrapper').css({
                'border-bottom':'none',
                'margin-bottom':'26px',
              });
              tabsList.css({
                'box-shadow':'0px 2px 10px -1px rgba(161,161,161,0.46)',
                'background': '#ffffff',
                'position':'fixed',
                'top':'0',
                'left':'0',
                'width':'100%',
                'padding-top':'18px',
                'z-index':'9999',
                'margin-bottom':'24px',
                'transition':'all 0.3s ease-in',
                // 'opacity':'1',
                // 'display':'block'
              });
          }else{
              tabsList.removeClass('block-fixed');
              $('.event-logo').css({'display':'none'});
              $('.introduction-section .tab-list-wrapper').css({
                'border-bottom':'1px solid #DDDDDD',
                'margin-bottom':'28px',
              });
              tabsList.css({
                'box-shadow':'none',
                'background': 'transparent',
                'position':'relative',
                'top':'auto',
                'left':'auto',
                'width':'100%',
                'padding-top':'90px',
                'z-index':'99',
                'margin-bottom':'50px',
                'transition':'all 0.1s ease-out',
                // 'opacity':'0',
                // 'display':'none'
              });
          }
          var topOffset = 300;
          if($(window).outerWidth() > 767){
            topOffset = 300;
          }else{
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
    }

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

  });
</script>

<?php get_footer(); ?>
