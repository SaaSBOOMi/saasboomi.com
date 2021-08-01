<?php
/*
* Template Name: Awards
*/ ?>

<?php get_header(); ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/annual-events-page.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/global-initiative-page.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/owl.carousel.min.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/animate.css">

<div class="event-annual-page initiative-awards-page">

  <section class="event-banner-section">
    <div class="container container-wrapper">
      <div class="row flex-centered">
        <div class="col-sm-6 col-md-6 col-lg-6 col-12 left-blk">
          <img src="<?php echo get_template_directory_uri(); ?>/img/awards_logo_black.svg"  alt="Awards" />
          <h1 class="heading2"><?php echo get_field('banner_banner_title'); ?></h1>
          <div class="registration-content d-none">
            <?php if(get_field('event_dates')['from_date'] && ((get_field('event_dates')['from_date']) >= date("m/d/Y"))): ?>
            <p class="heading4">Registrations open for SaaSBOOMi Awards  <?php echo date('Y',strtotime(get_field('event_dates')['from_date'])) ?> by</p>
            <h2 class="heading2 date"><?php echo date('jS F Y',strtotime(get_field('event_dates')['from_date'])) ?> </h2>
            <ul class="list-inline">
              <li class="list-inline-item">
                <a href="<?php echo get_permalink(1065); ?>" class="primary-btn primary-btn-dark btn-small">
                  Apply Now
                </a>
              </li>
              <li class="list-inline-item">
                <a href="javascript:void(0)" class="secondary-btn btn-small">
                  Nominate Others
                </a>
              </li>
            </ul>
          <?php elseif(get_field('banner_announcement_subtext') || get_field('banner_announcement_text')): ?>
            <p class="heading4"><?php echo get_field('banner_announcement_subtext'); ?></p>
            <h2 class="heading2 date"><?php echo get_field('banner_announcement_text'); ?></h2>
            <?php elseif( date("m/d/Y") < (get_field('event_dates')['from_date'])): ?>
            <p class="heading4">Registrations open for SaaSBOOMi Awards </p>
            <h2 class="heading2 date">Dates To Be Announced Soon!</h2>
            <?php else: ?>
            <p class="heading4">Registrations open for SaaSBOOMi Awards </p>
            <h2 class="heading2 date">Dates To Be Announced Soon!</h2>
            <?php endif; ?>
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
              <?php if(get_field('banner_banner_thumbnail')): ?>
              <img class="featured-vedio-img" src="<?php echo get_field('banner_banner_thumbnail')["url"]?>" alt="image"/>
              <?php else: ?>
              <img class="featured-vedio-img" src="<?php echo get_template_directory_uri(); ?>/img/awards_featured_img.png"  alt="Awards"/>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="cta-section event-banner-block award-banner-block" style="padding: 90px 0 16px;">
    <div class="container container-wrapper">
      <a href="<?php echo get_permalink(2158); ?>" class="card-wrapper">
        <div class="row flex-centered">
          <div class="col-sm-12 col-md-12 col-lg-12 col-12">
            <div class="event-banner">
              <div class="poster-image">
                <img src="<?php echo get_template_directory_uri()?>/img/award_poster.png" alt="Award poster" />
              </div>
              <div class="row flex-centered">
                <div class="col-sm-12 col-md-6 col-lg-6 col-12">
                  <div class="event-description">
                    <h2 class="heading1">Award winners <br/> for 2020</h2>
                    <p>
                      <span class="apply-btn support-text" target="_blank" >Show winner</span>
                    </p>
                  </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6 col-12">
                  <div class="img-blk text-right">
                    <img src="<?php echo get_template_directory_uri()?>/img/award_image.svg" alt="event poster" />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </a>
    </div>
  </section>

  <?php
    $awards = get_field('awards');
    $counter = 0;
    if($awards && count($awards) && get_field('past_year_awards_available') == true):
  ?>
  <section class="winners-of-awards-section d-none">
    <div class="container container-wrapper">
      <div class="row content-row">
        <div class="col-sm-12 col-md-4 col-lg-4 col-12 left-blk">
          <h2 class="heading1">Winners of Awards - <?php echo date('Y', strtotime('-1 year')); ?></h2>
          <h3 class="paragraph">
            A year to reflect & recoginize the most deserving Indian SaaS Startups that won everyone over.
          </h3>
          <p>
            <a href="<?php echo get_field('winner_read_more_link'); ?>" class="secondary-btn btn-large">
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
    <div class="container container-wrapper">
      <div class="tab-list-wrapper">
        <div class="row title-row flex-centered">
          <div class="col-sm-8 col-md-9 col-lg-9 col-12 left-blk">
            <ul class="list-inline tab-list" id="tabsList">
              <li class="active scenario list-inline-item event-logo" id="platform0" style="padding-right:30px;display: none;">
                <img src="<?php echo get_template_directory_uri(); ?>/img/awards_logo_black.svg"  alt="Image" style="margin-top:-4px; height:20px;"/>
              </li>
              <li class="active scenario list-inline-item" id="platform1" data-class="about-section">
                <a href="javascript:void(0)" class="paragraph">About </a>
              </li>
              <li class="scenario list-inline-item" id="platform2" data-class="awards-category-section">
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
          <div class="col-sm-4 col-md-3 col-lg-3 col-12 right-blk">
            <?php if(get_field('event_dates')['from_date'] && ((get_field('event_dates')['from_date']) >= date("m/d/Y"))): ?>
            <ul  class="list-inline text-right">
              <li class="list-inline-item">
                <p>
                  <a href="<?php echo get_permalink(1065); ?>" class="primary-btn primary-btn-dark btn-small">
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
            <h3 class="heading1"><?php echo get_field('about_title')?></h3>
            <p class="paragraph description">
              <?php echo get_field('about_sub_text')?>
            </p>
            <p class="color-bar yellow-bar">
              <span></span>
            </p>
            <h4 class="heading3">Beyond becoming an aspirational goal</h4>
            <div class="row store-content-row">
              <div class="col-sm-12 col-md-6 col-lg-6 col-12">
                <div class="card-wrapper">
                  <div class="img-blk">
                    <svg width="18" height="15" viewBox="0 0 18 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M6.19378 13.7859L0.506271 8.09835C0.164576 7.75665 0.164576 7.20263 0.506271 6.86091L1.74368 5.62346C2.08537 5.28173 2.63943 5.28173 2.98112 5.62346L6.8125 9.45481L15.0189 1.24846C15.3606 0.906764 15.9146 0.906764 16.2563 1.24846L17.4937 2.4859C17.8354 2.8276 17.8354 3.38161 17.4937 3.72334L7.43122 13.7859C7.08949 14.1276 6.53547 14.1276 6.19378 13.7859Z" fill="#6AA5E2"/>
                    </svg>
                  </div>
                  <div class="content-blk">
                    <p class="support-text">
                      <?php echo get_field('about_goal1_text')?>
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-sm-12 col-md-6 col-lg-6 col-12">
                <div class="card-wrapper">
                  <div class="img-blk">
                    <svg width="18" height="15" viewBox="0 0 18 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M6.19378 13.7859L0.506271 8.09835C0.164576 7.75665 0.164576 7.20263 0.506271 6.86091L1.74368 5.62346C2.08537 5.28173 2.63943 5.28173 2.98112 5.62346L6.8125 9.45481L15.0189 1.24846C15.3606 0.906764 15.9146 0.906764 16.2563 1.24846L17.4937 2.4859C17.8354 2.8276 17.8354 3.38161 17.4937 3.72334L7.43122 13.7859C7.08949 14.1276 6.53547 14.1276 6.19378 13.7859Z" fill="#6AA5E2"/>
                    </svg>
                  </div>
                  <div class="content-blk">
                    <p class="support-text">
                      <?php echo get_field('about_goal2_text')?>
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-sm-12 col-md-6 col-lg-6 col-12">
                <div class="card-wrapper">
                  <div class="img-blk">
                    <svg width="18" height="15" viewBox="0 0 18 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M6.19378 13.7859L0.506271 8.09835C0.164576 7.75665 0.164576 7.20263 0.506271 6.86091L1.74368 5.62346C2.08537 5.28173 2.63943 5.28173 2.98112 5.62346L6.8125 9.45481L15.0189 1.24846C15.3606 0.906764 15.9146 0.906764 16.2563 1.24846L17.4937 2.4859C17.8354 2.8276 17.8354 3.38161 17.4937 3.72334L7.43122 13.7859C7.08949 14.1276 6.53547 14.1276 6.19378 13.7859Z" fill="#6AA5E2"/>
                    </svg>
                  </div>
                  <div class="content-blk">
                    <p class="support-text">
                      <?php echo get_field('about_goal3_text')?>
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-sm-12 col-md-6 col-lg-6 col-12">
                <div class="card-wrapper">
                  <div class="img-blk">
                    <svg width="18" height="15" viewBox="0 0 18 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M6.19378 13.7859L0.506271 8.09835C0.164576 7.75665 0.164576 7.20263 0.506271 6.86091L1.74368 5.62346C2.08537 5.28173 2.63943 5.28173 2.98112 5.62346L6.8125 9.45481L15.0189 1.24846C15.3606 0.906764 15.9146 0.906764 16.2563 1.24846L17.4937 2.4859C17.8354 2.8276 17.8354 3.38161 17.4937 3.72334L7.43122 13.7859C7.08949 14.1276 6.53547 14.1276 6.19378 13.7859Z" fill="#6AA5E2"/>
                    </svg>
                  </div>
                  <div class="content-blk">
                    <p class="support-text">
                      <?php echo get_field('about_goal4_text')?>
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
              <?php if(get_field('about_image1')): ?>
              <img class="image1" src="<?php echo get_field('about_image1')["url"]?>"  alt="Image" />
              <?php else: ?>
                <img class="image1" src="<?php echo get_template_directory_uri(); ?>/img/generic_placeholder.png"  alt="Image" />
              <?php endif; ?>
              <div class="image2-wrapper">
                <svg class="pattern2" width="35" height="25" viewBox="0 0 35 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M0 25L-2.18557e-07 20L25 20L25 25L0 25ZM-8.30516e-07 6L-1.09278e-06 0L16 -6.99382e-07L16 6L-8.30516e-07 6ZM9 11L9 15L35 15L35 11L9 11ZM29 25L29 20L35 20L35 25L29 25ZM-6.11959e-07 11L-4.37107e-07 15L6 15L6 11L-6.11959e-07 11Z" fill="#6AA5E2"/>
                </svg>
                <span class="image2-blk">
                <?php if(get_field('about_image2')): ?>
                    <img class="image2" src="<?php echo get_field('about_image2')["url"]?>"  alt="Image" />
                <?php else: ?>
                    <img class="image2" src="<?php echo get_template_directory_uri(); ?>/img/generic_placeholder.png"  alt="Image" />
                <?php endif; ?>
                </span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php
    $awards = get_field('awards');
    $counter = 0;
    if($awards && count($awards) && get_field('event_dates')['from_date']):
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
          foreach($awards as $key=>$award):
        ?>
        <div class="col-sm-6 col-md-4 col-lg-3 col-12 flex-not-centered card-outer-blk">
            <div class="card-wrapper">
              <div class="content-default" data-slug="<?php echo $key ?>">
                <?php if(get_the_post_thumbnail_url($award)): ?>
                  <img class="awards-img"  src="<?php echo get_the_post_thumbnail_url($award) ?>"  alt="Image" />
                <?php else: ?>
                  <img class="awards-img" src="<?php echo get_template_directory_uri(); ?>/img/generic_placeholder.png"  alt="Image" />
                <?php endif; ?>
                <p class="heading5">
                  <?php echo $award->post_title?>
                </p>
              </div>
              <div class="content-hover" data-img="<?php echo get_the_post_thumbnail_url($award) ?>"   data-title="<?php echo $award->post_title?>" data-slug="<?php echo $award->post_name?>">
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
                  <button class="view-details-btn paragraph view-award-category-btn"
                  >
                    View Details
                    <img src="<?php echo get_template_directory_uri()?>/img/view_details_arrow.svg" />
                  </button>
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
    $how_it_works = CFS()->get('how_it_works');
    $post_count = 1;
    if($how_it_works && count($how_it_works)  && get_field('event_dates')['from_date']):
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
                <h6 class="heading5 hidden">
                <span><?php echo date('jS F Y',strtotime($how_it_work['deadline_date'])) ?> </span>
                </h6>
                <h6 class="heading5">
                 <span><?php echo $how_it_work["deadline_date"] ?></span>
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


  <section class="cta-section d-none">
    <div class="container container-wrapper">
      <div class="cta-wrapper">
        <div class="row flex-centered">
          <div class="col-sm-6 col-md-6 col-lg-6 col-12 left-blk">
            <div class="registration-content">
              <?php if(get_field('event_dates')['from_date'] && ((get_field('event_dates')['from_date']) >= date("m/d/Y"))): ?>
              <h3 class="heading4">Registrations open for SaaSBOOMi Awards <?php echo date('Y',strtotime(get_field('event_dates')['from_date'])) ?></h3>
              <?php $date = DateTime::createFromFormat('d/m/Y', get_field('event_dates')['to_date']); ?>
              <h4 class="heading3 date"><?php echo date('jS F Y',strtotime(get_field('event_dates')['from_date'])) ?></h4>
              <?php elseif(get_field('banner_announcement_subtext') || get_field('banner_announcement_text')): ?>
              <p class="heading4"><?php echo get_field('banner_announcement_subtext'); ?></p>
              <h2 class="heading2 date"><?php echo get_field('banner_announcement_text'); ?></h2>
              <?php elseif( date("m/d/Y") < (get_field('event_dates')['from_date'])): ?>
              <p class="heading4">Registrations open for SaaSBOOMi Awards </p>
              <h2 class="heading2 date">Dates To Be Announced Soon!</h2>
              <?php else: ?>
              <p class="heading4">Registrations open for SaaSBOOMi Awards </p>
              <h2 class="heading2 date">Dates To Be Announced Soon!</h2>
              <?php endif; ?>
            </div>
          </div>
          <div class="col-sm-6 col-md-6 col-lg-6 col-12 right-blk">
            <?php if(get_field('event_dates')['from_date'] && ((get_field('event_dates')['from_date']) >= date("m/d/Y"))): ?>
            <ul class="list-inline apply-btn">
              <li class="list-inline-item">
                <p>
                  <a href="<?php echo get_permalink(1065); ?>" class="primary-btn primary-btn-dark btn-small">
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
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </section>


  <?php
    $speakers = get_field('jury');
    $counter = 0;
    if($speakers && count($speakers)  && get_field('event_dates')['from_date']):
  ?>
  <section class="featured-speakers-section speaker-section" style="padding-top: 50px;">
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
            <div class="col-sm-4 col-md-4 col-lg-3 col-6 card-outer-wrapper">
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
          <div class="col-sm-4 col-md-4 col-lg-3 col-6 card-outer-wrapper card-hidden">
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
      $organisers = get_field('organisers');
      $volunteers = get_field('volunteers');
       if($organisers || $volunteers):
  ?>
  <?php if(get_field('event_dates')['from_date']): ?>
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
  <?php endif;?>

  <?php if(!(get_field('event_dates')['from_date'])): ?>
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

  <section class="cta-section d-none">
    <div class="container container-wrapper">
      <div class="cta-wrapper">
        <div class="row flex-centered">
          <div class="col-sm-6 col-md-6 col-lg-6 col-12 left-blk">
            <div class="registration-content">
              <?php if(get_field('event_dates')['from_date'] && ((get_field('event_dates')['from_date']) >= date("m/d/Y"))): ?>
              <h3 class="heading4">Registrations open for SaaSBOOMi Awards <?php echo date('Y',strtotime(get_field('event_dates')['from_date'])) ?></h3>
              <?php $date = DateTime::createFromFormat('d/m/Y', get_field('event_dates')['to_date']); ?>
              <h4 class="heading3 date"><?php echo date('jS F Y',strtotime(get_field('event_dates')['from_date'])) ?></h4>
              <?php elseif(get_field('banner_announcement_subtext') || get_field('banner_announcement_text')): ?>
              <p class="heading4"><?php echo get_field('banner_announcement_subtext'); ?></p>
              <h2 class="heading2 date"><?php echo get_field('banner_announcement_text'); ?></h2>
              <?php elseif( date("m/d/Y") < (get_field('event_dates')['from_date'])): ?>
              <p class="heading4">Registrations open for SaaSBOOMi Awards </p>
              <h2 class="heading2 date">Dates To Be Announced Soon!</h2>
              <?php else: ?>
              <p class="heading4">Registrations open for SaaSBOOMi Awards </p>
              <h2 class="heading2 date">Dates To Be Announced Soon!</h2>
              <?php endif; ?>
            </div>
          </div>
          <div class="col-sm-6 col-md-6 col-lg-6 col-12 right-blk">
            <?php if(get_field('event_dates')['from_date'] && ((get_field('event_dates')['from_date']) >= date("m/d/Y"))): ?>
            <ul class="list-inline apply-btn">
              <li class="list-inline-item">
                <p>
                  <a href="<?php echo get_permalink(1065); ?>" class="primary-btn primary-btn-dark btn-small">
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
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php
    $blogs = get_field('blogs');
    // var_dump(count($blogs));
    $counter = 0;
    if($blogs && count($blogs) == true):
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
                  <div class="tag-blk">
                    <?php
                      $categories = get_the_category($blog);
                    ?>
                    <ul class="list-inline tags-list">
                      <?php foreach ($categories as $key => $category): ?>
                        <?php if(!($category->slug == 'uncategorized')) : ?>
                        <li class="list-inline-item">
                          <span class="support-text"><?php echo $category->name; ?></span>
                        </li>
                        <?php endif; ?>
                      <?php endforeach; ?>
                    </ul>
                  </div>
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

   <?php get_template_part('templates/template-newsletter'); ?>

</div>

<div class="modal fade award-category-modal" id="awardCategoryModal" tabindex="-1" aria-labelledby="awardCategoryLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <a class="close" data-dismiss="modal" aria-label="Close">
        <img src="<?php echo get_template_directory_uri(); ?>/img/close_grey.svg"  alt="Close" />
      </a>
      <div class="modal-body">
        <div class="row flex-not-centered">
          <div class="col-md-4 flex-not-centered">
            <div class="left-block flex-centered">
              <div>
                <img data-image="" src="http://localhost:8888/saasboomi_wp/wp-content/uploads/2021/01/startup_of_year.svg" />
                <h3 data-title="" class="heading3">SaaS Startup of the year 2020</h3>
              </div>
            </div>
          </div>
          <div class="col-md-8">
            <div class="right-block">
              <h4 class="paragraph title">WINNER</h4>
              <ul class="list-inline flex-not-centered winner-list">
                <li class="list-inline-item flex-not-centered">
                  <div class="item flex-centered">
                    <h4 class="heading4">Outplay</h4>
                  </div>
                </li>
              </ul>
              <div class="nominees-wrapper" style="margin-top:20px; padding-top: 20px;border-top: 1px solid #E9E9E9;">
                <h4 class="paragraph title nominees">NOMINEES</h4>
                <ul class="list-inline flex-not-centered shortlist-list">
                  <!-- <li class="list-inline-item flex-not-centered">
                    <div class="item flex-centered">
                      <h4 class="heading4">Outplay</h4>
                    </div>
                  </li>
                  <li class="list-inline-item flex-not-centered">
                    <div class="item flex-centered">
                      <h4 class="heading4">Outplay Outplay Outplay</h4>
                    </div>
                  </li>
                  <li class="list-inline-item flex-not-centered">
                    <div class="item flex-centered">
                      <h4 class="heading4">Outplay</h4>
                    </div>
                  </li>
                  <li class="list-inline-item flex-not-centered">
                    <div class="item flex-centered">
                      <h4 class="heading4">Outplay Outplay Outplay</h4>
                    </div>
                  </li>
                  <li class="list-inline-item flex-not-centered">
                    <div class="item flex-centered">
                      <h4 class="heading4">Outplay</h4>
                    </div>
                  </li> -->
                </ul>
              </div>
            </div>
          </div>
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

    if($(window).outerWidth() > 0){
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
          if($(window).outerWidth() > 991){
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
          }

          if($(window).outerWidth() < 991){
            if($(window).scrollTop() > $('.about-section').offset().top - 200 && $(window).scrollTop() < $('.related-blogs-section').offset().top - 150){
                tabsList.addClass('block-fixed');
                // $('.event-logo').css({'display':'inline-block'});
                $('.introduction-section .tab-list-wrapper').css({
                  'border-bottom':'none',
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
                // $('.event-logo').css({'display':'none'});
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
          if($(window).outerWidth() > 767){
            topOffset = 300;
          }else{
            topOffset = 100;
          }

          if($(window).scrollTop() > $('.about-section').offset().top - topOffset && (!$('#tabsList li[data-class="about-section"]').hasClass('active')) && $(window).scrollTop() < $('.awards-category-section').offset().top - topOffset){
            setTimeout(function(){
                $('#tabsList li').removeClass('active');
                $('#tabsList li[data-class="about-section"]').addClass('active');
            },10);
          }

          if($(window).scrollTop() > $('.awards-category-section').offset().top - topOffset && (!$('#tabsList li[data-class="awards-category-section"]').hasClass('active')) && $(window).scrollTop() < $('.how-it-works-section').offset().top - topOffset){
            setTimeout(function(){
              $('#tabsList li').removeClass('active');
              $('#tabsList li[data-class="awards-category-section"]').addClass('active');
            },10);
          }

          if($(window).scrollTop() > $('.how-it-works-section').offset().top - topOffset && (!$('#tabsList li[data-class="how-it-works-section"]').hasClass('active')) && $(window).scrollTop() < $('.speaker-section').offset().top - topOffset){
            setTimeout(function(){
              $('#tabsList li').removeClass('active');
              $('#tabsList li[data-class="how-it-works-section"]').addClass('active');
            },10);
          }

          if($(window).scrollTop() > $('.speaker-section').offset().top - topOffset && (!$('#tabsList li[data-class="speaker-section"]').hasClass('active')) && $(window).scrollTop() < $('.team-section').offset().top - topOffset){
            setTimeout(function(){
              $('#tabsList li').removeClass('active');
              $('#tabsList li[data-class="speaker-section"]').addClass('active');
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

    $('.content-hover').on('click', function(){
      var title = $(this).attr('data-title');
      var image = $(this).attr('data-img');
      var slug = $(this).attr('data-slug');
      var award = awardCategoryContent.find((awardcategory) => awardcategory.slug === slug);
      var html = '';
      if(award && award.winner_name){
        $(".winner-list").html('<li class="list-inline-item flex-not-centered"><a href="'+award.winner_website+'" class="item flex-centered" target="_blank"><h4 class="heading4">'+award.winner_name+'</h4></a></li>');
      }
      if(award && award.shortlist && award.shortlist.length){
        $.each(award.shortlist, function( index, company ) {
          html += '<li class="list-inline-item flex-not-centered">';
          html += '<a href="'+company.website+'" class="item flex-centered" target="_blank">';
          html += '<h4 class="heading4">'+company.company_name+'</h4>';
          html += '</a>';
          html += '</li>';
        });
        $('#awardCategoryModal').find('.shortlist-list').html(html);
      }
      if (slug == 'saas-startup-of-the-year'){
        $('.nominees-wrapper').hide();
      } else{
        $('.nominees-wrapper').show();
      }
      $('#awardCategoryModal').find('img[data-image]').attr('src', image);
      $('#awardCategoryModal').find('h3[data-title]').text(title);
      $('#awardCategoryModal').modal('show');
    });


    var awardCategoryContent = [
      {
        slug: 'saas-startup-of-the-year',
        winner_name:'Postman',
        winner_website: 'https://www.postman.com/',
        shortlist: [],
      },
      {
        slug: 'breakout-saas-of-the-year',
        winner_name:'Hubilo',
        winner_website: 'https://hubilo.com/',
        // winnerlist: [
        //   {
        //     name: 'Hubilo',
        //     website: 'https://hubilo.com/'
        //   },
        // ],
        shortlist: [
          // {
          //   company_name: 'Hubilo',
          //   website: 'https://hubilo.com/'
          // },
          {
            company_name: 'Invideo',
            website: 'https://invideo.io/'
          },
          {
            company_name: 'MoEngage',
            website: 'https://www.moengage.com/'
          },
          {
            company_name: 'RBJ Technologies Pvt. Ltd. (Foyr)',
            website: 'https://foyr.com/'
          },
          {
            company_name: 'YellowMessenger',
            website: 'https://yellowmessenger.com/'
          }
        ]
      },
      {
        slug: 'bootstrapped-saas-startup-of-the-year',
        winner_name:'Kovai',
        winner_website: 'https://www.kovai.co/',
        shortlist: [
          {
            company_name: 'Cardinality.ai',
            website: 'https://www.cardinality.ai/'
          },
          {
            company_name: 'Nuclei',
            website: 'https://gonuclei.com/'
          },
          {
            company_name: 'JustCall',
            website: 'https://justcall.io'
          },
          // {
          //   company_name: 'Kovai',
          //   website: 'https://www.kovai.co/'
          // },
          {
            company_name: 'Perceptiviti',
            website: 'http://www.perceptiviti.com'
          }
        ]
      },
      {
        slug: 'deep-tech-saas-startup-of-the-year',
        winner_name:'Agara',
        winner_website: 'https://www.agara.ai',
        shortlist: [
          // {
          //   company_name: 'Agara',
          //   website: 'https://www.agara.ai'
          // },
          {
            company_name: 'Entropik',
            website: 'https://affectlab.io/'
          },
          {
            company_name: 'Haptik',
            website: 'https://www.haptik.ai/'
          },
          {
            company_name: 'Observe.ai',
            website: 'https://www.observe.ai/'
          },
          {
            company_name: 'Vernacular.ai',
            website: 'https://vernacular.ai/'
          }
        ]
      },
      {
        slug: 'category-creator-saas-startup-of-the-year',
        winner_name:'AccelData',
        winner_website: 'https://acceldata.io',
        shortlist: [
          // {
          //   company_name: 'AccelData',
          //   website: 'https://acceldata.io'
          // },
          {
            company_name: 'Hubilo',
            website: 'https://hubilo.com/'
          },
          {
            company_name: 'Nextbillion.ai',
            website: 'https://nextbillion.ai/'
          },
          {
            company_name: 'Servify',
            website: 'https://servify.in/'
          },
          {
            company_name: 'Vernacular.ai',
            website: 'https://vernacular.ai/'
          }
        ]
      },
      {
        slug: 'vertical-saas-startup-of-the-year',
        winner_name:'Cardinality.ai',
        winner_website: 'http://www.cardinality.ai',
        shortlist: [
          // {
          //   company_name: 'Cardinality.ai',
          //   website: 'http://www.cardinality.ai'
          // },
          {
            company_name: 'Facilio',
            website: 'https://facilio.com/'
          },
          {
            company_name: 'LogiNext',
            website: 'http://www.loginextsolutions.com'
          },
          {
            company_name: 'Sibros',
            website: 'http://www.sibros.tech'
          },
          {
            company_name: 'Vinculum Solutions Private Limited',
            website: 'https://www.vinculumgroup.com/'
          }
        ]
      },
      {
        slug: 'moonshot-startup-of-the-year',
        winner_name:'OKCredit',
        winner_website: 'https://okcredit.in/',
        shortlist: [
          {
            company_name: 'Entropik Technologies Private Limited',
            website: 'https://affectlab.io/'
          },
          {
            company_name: 'Invideo',
            website: 'https://invideo.io/'
          },
          {
            company_name: 'Light Information Systems (NLPBots)',
            website: 'https://www.nlpbots.com/'
          },
          // {
          //   company_name: 'OKCredit',
          //   website: 'https://okcredit.in/'
          // },
          {
            company_name: 'Prescinto  Technologies Private Limited',
            website: 'https://prescinto.com/'
          }
        ]
      },
      {
        slug: 'b2d-saas-startup-of-the-year',
        winner_name:'Hasura',
        winner_website: 'http://hasura.io',
        shortlist: [
          {
            company_name: 'AccelData',
            website: 'https://acceldata.io'
          },
          // {
          //   company_name: 'Hasura',
          //   website: 'http://hasura.io'
          // },
          {
            company_name: 'QATTS',
            website: 'https://qatts.com/'
          },
          {
            company_name: 'Sn126,Inc.',
            website: 'https://www.sn126.com'
          },
          {
            company_name: 'Testsigma',
            website: 'https://testsigma.com'
          }
        ]
      },
    ]

  });
</script>

<?php get_footer(); ?>
