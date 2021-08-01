<?php
/*
* Template Name: GrowthX
*/ ?>

<?php get_header(); ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/annual-events-page.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/global-initiative-page.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/animate.css">

<div class="event-annual-page initiative-growthx-page">
  <section class="event-banner-section">
    <div class="container container-wrapper">
      <div class="row flex-centered">
        <div class="col-sm-6 col-md-6 col-lg-6 col-12 left-blk">
          <img src="<?php echo get_template_directory_uri(); ?>/img/growthx_logo_black.svg"  alt="GrowthX" />
          <h1 class="heading2"><?php echo get_field('banner_banner_title'); ?></h1>
          <div class="registration-content">
            <?php
              $enable = get_field('enable_apply_form');
              if($enable == true):
            ?>
            <p class="heading4">Registrations open for GrowthX till march 6th</p>
            <?php else: ?>
            <p class="heading4">Registrations will open soon for GrowthX</p>
            <?php endif; ?>
            <h2 class="paragraph">A 16 week unique personalised, implementation focused program</h2>
            <?php
              $enable = get_field('enable_apply_form');
              if($enable == true):
            ?>
            <ul class="list-inline">
              <li class="list-inline-item">
                <a href="https://forms.gle/D1ijR4bCvV6Bcifj9" target="_blank" class="primary-btn primary-btn-dark btn-small" >
                  Apply Now
                </a>
              </li>
            </ul>
            <?php endif; ?>
          </div>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-6 col-12 right-blk">
          <div class="vedio-blk background-prop" data-toggle="modal" data-target="#vedioModal">
            <?php if(get_field('banner_video_link')): ?>
            <div class="play-vedio" style="padding-top: 8px; cursor:pointer;">
              <svg  width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M32.1691 42H9.8309C4.40144 42 0 37.5986 0 32.1691V9.8309C0 4.40144 4.40144 0 9.8309 0H32.1691C37.5986 0 42 4.40144 42 9.8309V32.1691C42 37.5986 37.5986 42 32.1691 42Z" fill="#98AD90"/>
                <path d="M16.4736 11.8068L28.2771 18.6215C28.6942 18.8627 29.0406 19.2094 29.2813 19.6267C29.5221 20.0441 29.6488 20.5175 29.6488 20.9993C29.6488 21.4811 29.5221 21.9545 29.2813 22.3718C29.0406 22.7892 28.6942 23.1359 28.2771 23.3771L16.4736 30.1918C16.0561 30.4323 15.5827 30.5588 15.1008 30.5586C14.6189 30.5583 14.1456 30.4313 13.7283 30.1903C13.3111 29.9493 12.9646 29.6027 12.7236 29.1854C12.4826 28.7682 12.3557 28.2948 12.3555 27.813V14.1836C12.356 13.7019 12.4832 13.2288 12.7244 12.8118C12.9655 12.3948 13.312 12.0486 13.7292 11.8078C14.1464 11.567 14.6196 11.4401 15.1013 11.44C15.583 11.4398 16.0563 11.5663 16.4736 11.8068Z" fill="white"/>
              </svg>
              <p class="support-text play-vedio-text">Play video</p>
            </div>
            <?php endif; ?>
            <svg class="complete-vedio-bg" width="455" height="470" viewBox="0 0 330 341" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" clip-rule="evenodd" d="M294.01 0H0V341H329.579V0H294.01ZM294.01 0C305.425 0 315.386 8.94723 315.975 20.941L329.552 297.513C330.221 311.147 318.436 322.096 304.875 320.439L41.3868 288.249C28.7986 286.711 20.1061 274.899 22.3916 262.435L57.5694 70.5995C59.1337 62.0687 65.5663 55.251 73.9977 53.1878L288.731 0.641046C290.506 0.206772 292.274 0 294.01 0Z" fill="white"/>
              <path d="M40.3552 164.474L3.95611 216.954C-4.24666 228.78 0.841749 245.196 14.2813 250.264L23.9546 253.912L40.3552 164.474Z" fill="#EFFAEA"/>
              <path d="M150.297 301.555L251.127 339.577C263.97 344.42 278.049 336.421 280.523 322.877L281.49 317.582L150.297 301.555Z" fill="#EFFAEA"/>
              <path d="M320.148 105.957L325.946 74.2185C327.536 65.5161 323.863 57.3724 317.528 52.5708L320.148 105.957Z" fill="#EFFAEA"/>
            </svg>
            <div class="featured-img-blk">
              <?php if(get_field('banner_banner_thumbnail')): ?>
              <img class="featured-vedio-img" src="<?php echo get_field('banner_banner_thumbnail')["url"]?>" alt="image"/>
              <?php else: ?>
              <img class="featured-vedio-img" src="<?php echo get_template_directory_uri(); ?>/img/growthx_featured_bg.png"  alt="GrowthX"/>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="introduction-section">
    <div class="container container-wrapper">
      <div class="tab-list-wrapper">
        <div class="row title-row flex-centered">
          <div class="col-sm-9 col-md-9 col-lg-9 col-12 left-blk">
            <ul class="list-inline tab-list" id="tabsList">
              <li class="active scenario list-inline-item event-logo" id="platform0" style="padding-right:30px;display: none;">
                <img src="<?php echo get_template_directory_uri(); ?>/img/growthx_logo_black.svg"  alt="Image" style="margin-top:-4px; height:20px;"/>
              </li>
              <li class="active scenario list-inline-item" id="platform1" data-class="about-section">
                <a href="javascript:void(0)" class="paragraph">About </a>
              </li>
              <li class="scenario list-inline-item" id="platform2" data-class="how-to-apply-section">
                <a href="javascript:void(0)" class="paragraph">Selection Process</a>
              </li>
              <li class="scenario list-inline-item" id="platform3" data-class="team-section">
                <a href="javascript:void(0)" class="paragraph">SaaSBOOMi Team</a>
              </li>
              <li class="scenario list-inline-item" id="platform4" data-class="partners-section">
                <a href="javascript:void(0)" class="paragraph">GrowthX Cohort</a>
              </li>
            </ul>
          </div>
          <div class="col-sm-3 col-md-3 col-lg-3 col-12 right-blk">
            <?php
              $enable = get_field('enable_apply_form');
              if($enable == true):
            ?>
            <ul  class="list-inline text-right">
              <li class="list-inline-item">
                <p>
                  <a href="https://forms.gle/D1ijR4bCvV6Bcifj9" target="_blank" class="primary-btn primary-btn-dark btn-small">
                    Apply Now
                  </a>
                </p>
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
            <p class="paragraph description1">
              <?php echo get_field('about_sub_text_1')?>
            </p>
            <p class="paragraph description2">
              <?php echo get_field('about_sub_text_2')?>
            </p>
            <p class="color-bar yellow-bar">
              <span></span>
            </p>
            <?php
              $steps = CFS()->get('who_can_apply');
              if($steps && count($steps)):
            ?>
            <h4 class="heading2">Who can Apply?</h4>
            <div class="row store-content-row who-can-apply">
              <div class="col-12">
                <?php foreach($steps as $step): ?>
                  <div class="card-wrapper steps-list">
                    <div class="img-blk">
                      <svg width="18" height="15" viewBox="0 0 18 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.19378 13.7859L0.506271 8.09835C0.164576 7.75665 0.164576 7.20263 0.506271 6.86091L1.74368 5.62346C2.08537 5.28173 2.63943 5.28173 2.98112 5.62346L6.8125 9.45481L15.0189 1.24846C15.3606 0.906764 15.9146 0.906764 16.2563 1.24846L17.4937 2.4859C17.8354 2.8276 17.8354 3.38161 17.4937 3.72334L7.43122 13.7859C7.08949 14.1276 6.53547 14.1276 6.19378 13.7859Z" fill="#98AD90"/>
                      </svg>
                    </div>
                    <div class="content-blk">
                      <p class="paragraph">
                        <?php echo $step["text"] ?>
                      </p>
                    </div>
                  </div>
                <?php endforeach;?>
              </div>
            </div>
            <?php endif; ?>
          </div>
          <div class="col-sm-6 col-md-6 col-lg-6 col-12 right-blk">
            <div class="featured-img-blk">
              <svg class="pattern1" width="35" height="25" viewBox="0 0 35 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M0 25L-2.18557e-07 20L25 20L25 25L0 25ZM-8.30516e-07 6L-1.09278e-06 0L16 -6.99382e-07L16 6L-8.30516e-07 6ZM9 11L9 15L35 15L35 11L9 11ZM29 25L29 20L35 20L35 25L29 25ZM-6.11959e-07 11L-4.37107e-07 15L6 15L6 11L-6.11959e-07 11Z" fill="#CCF0BE"/>
              </svg>
              <?php if(get_field('about_image1')): ?>
              <img class="image1" src="<?php echo get_field('about_image1')["url"]?>"  alt="Image" />
              <?php else: ?>
                <img class="image1" src="<?php echo get_template_directory_uri(); ?>/img/generic_placeholder.png"  alt="Image" />
              <?php endif; ?>
              <div class="image2-wrapper">
                <svg class="pattern2" width="35" height="25" viewBox="0 0 35 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M0 25L-2.18557e-07 20L25 20L25 25L0 25ZM-8.30516e-07 6L-1.09278e-06 0L16 -6.99382e-07L16 6L-8.30516e-07 6ZM9 11L9 15L35 15L35 11L9 11ZM29 25L29 20L35 20L35 25L29 25ZM-6.11959e-07 11L-4.37107e-07 15L6 15L6 11L-6.11959e-07 11Z" fill="#CCF0BE"/>
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
          <div class="col-12">
            <h4 class="heading2">What's the Need?</h4>
            <div class="row store-content-row who-can-apply">
              <div class="col-12">
                  <div class="card-wrapper steps-list">
                    <div class="img-blk">
                      <svg width="18" height="15" viewBox="0 0 18 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.19378 13.7859L0.506271 8.09835C0.164576 7.75665 0.164576 7.20263 0.506271 6.86091L1.74368 5.62346C2.08537 5.28173 2.63943 5.28173 2.98112 5.62346L6.8125 9.45481L15.0189 1.24846C15.3606 0.906764 15.9146 0.906764 16.2563 1.24846L17.4937 2.4859C17.8354 2.8276 17.8354 3.38161 17.4937 3.72334L7.43122 13.7859C7.08949 14.1276 6.53547 14.1276 6.19378 13.7859Z" fill="#98AD90"/>
                      </svg>
                    </div>
                    <div class="content-blk">
                      <p class="paragraph">
                        SaaS is a sunrise sector in India and lots of deserving companies in India now
                      </p>
                    </div>
                  </div>
                  <div class="card-wrapper steps-list">
                    <div class="img-blk">
                      <svg width="18" height="15" viewBox="0 0 18 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.19378 13.7859L0.506271 8.09835C0.164576 7.75665 0.164576 7.20263 0.506271 6.86091L1.74368 5.62346C2.08537 5.28173 2.63943 5.28173 2.98112 5.62346L6.8125 9.45481L15.0189 1.24846C15.3606 0.906764 15.9146 0.906764 16.2563 1.24846L17.4937 2.4859C17.8354 2.8276 17.8354 3.38161 17.4937 3.72334L7.43122 13.7859C7.08949 14.1276 6.53547 14.1276 6.19378 13.7859Z" fill="#98AD90"/>
                      </svg>
                    </div>
                    <div class="content-blk">
                      <p class="paragraph">
                        Most of the companies have some part of Growth right but teams need hand holding to take them through the various stages of setting up scalable systems and processes
                      </p>
                    </div>
                  </div>
                  <div class="card-wrapper steps-list">
                    <div class="img-blk">
                      <svg width="18" height="15" viewBox="0 0 18 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.19378 13.7859L0.506271 8.09835C0.164576 7.75665 0.164576 7.20263 0.506271 6.86091L1.74368 5.62346C2.08537 5.28173 2.63943 5.28173 2.98112 5.62346L6.8125 9.45481L15.0189 1.24846C15.3606 0.906764 15.9146 0.906764 16.2563 1.24846L17.4937 2.4859C17.8354 2.8276 17.8354 3.38161 17.4937 3.72334L7.43122 13.7859C7.08949 14.1276 6.53547 14.1276 6.19378 13.7859Z" fill="#98AD90"/>
                      </svg>
                    </div>
                    <div class="content-blk">
                      <p class="paragraph">
                        Many seasoned SaaS mentors and guides now available in India who wish to help founder on (pay-it-forward) models
                      </p>
                    </div>
                  </div>
                  <div class="card-wrapper steps-list">
                    <div class="img-blk">
                      <svg width="18" height="15" viewBox="0 0 18 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.19378 13.7859L0.506271 8.09835C0.164576 7.75665 0.164576 7.20263 0.506271 6.86091L1.74368 5.62346C2.08537 5.28173 2.63943 5.28173 2.98112 5.62346L6.8125 9.45481L15.0189 1.24846C15.3606 0.906764 15.9146 0.906764 16.2563 1.24846L17.4937 2.4859C17.8354 2.8276 17.8354 3.38161 17.4937 3.72334L7.43122 13.7859C7.08949 14.1276 6.53547 14.1276 6.19378 13.7859Z" fill="#98AD90"/>
                      </svg>
                    </div>
                    <div class="content-blk">
                      <p class="paragraph">
                        Lots of ‘gyan’ available, but no structured peer based program to truly move the needle.
                      </p>
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
    $how_to_apply_steps = CFS()->get('selection_process');
    $post_count = 1;
    if($how_to_apply_steps && count($how_to_apply_steps)):
  ?>
  <section class="how-it-works-section how-to-apply-section">
    <div class="container container-wrapper">
      <div class="row title-row">
        <div class="col-12 ">
          <h2 class="heading1">Selection Process</h2>
        </div>
      </div>
      <div class="row flex-not-centered content-row">
        <?php foreach($how_to_apply_steps as $how_to_apply_step): ?>
        <div class="col-sm-6 col-md-4 col-lg-3 col-6 flex-not-centered card-outer-blk">
            <div class="card-wrapper">
              <div class="img-blk">
                <span class="heading3"><?php echo $post_count; ?></span>
              </div>
              <div class="content-blk">
                <h5 class="heading5"><?php echo $how_to_apply_step["title"] ?></h5>
                <p class="paragraph"><?php echo $how_to_apply_step["description"] ?></p>
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

  <section class="cta-section">
    <div class="container container-wrapper">
      <div class="cta-wrapper">
        <div class="row flex-centered">
          <div class="col-sm-8 col-md-8 col-lg-8 col-12 left-blk">
            <div class="registration-content">
              <?php
                $enable = get_field('enable_apply_form');
                if($enable == true):
              ?>
              <h3 class="heading4">Registrations open for GrowthX</h3>

              <?php else: ?>
                <h3 class="heading4">Registrations will open soon for GrowthX</h3>
              <?php endif; ?>
                <h4 class="paragraph">A 16 week unique personalised, implementation focused program</h4>
            </div>
          </div>
          <div class="col-sm-4 col-md-4 col-lg-4 col-12 right-blk">
            <?php
              $enable = get_field('enable_apply_form');
              if($enable == true):
            ?>
            <ul class="list-inline apply-btn">
              <li class="list-inline-item">
                <p>
                  <a href="https://forms.gle/D1ijR4bCvV6Bcifj9" target="_blank" class="primary-btn primary-btn-dark btn-small">
                    Apply Now
                  </a>
                </p>
              </li>
            </ul>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php
      $experts = get_field('experts');
      if($experts):
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
            $experts = get_field('experts');
            if($experts && count($experts)):
          ?>
          <div class="team-wrapper organiser-wrapper">
            <img class="bg-bottom" src="<?php echo get_template_directory_uri(); ?>/img/organiser_bottom_bg.svg"  alt="Image" />
            <img class="bg-top" src="<?php echo get_template_directory_uri(); ?>/img/organiser_right_and_top_bg.svg"  alt="Image" />
            <ul class="list-inline flex-not-centered">
              <li class="list-inline-item">
                <h3 class="heading3 team-title">Experts</h3>
              </li>
                <?php foreach($experts as $expert): ?>
                  <li class="list-inline-item">
                    <a href="<?php if(get_field('linkedin', $expert->ID)):?> <?php echo get_field('linkedin', $expert->ID) ?> <?php else: ?> javascript:void(0) <?php endif;?>" class="card-wrapper" <?php if(get_field('linkedin', $expert->ID)):?> target="_blank" <?php endif;?>>
                      <?php if(get_the_post_thumbnail_url($expert)): ?>
                        <img src="<?php echo get_the_post_thumbnail_url($expert) ?>"  alt="Image" />
                      <?php else: ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/placeholder_annual.svg"  alt="Image" />
                      <?php endif; ?>
                      <h4 class="heading4"><?php echo $expert->post_title?></h4>
                      <h5 class="support-text"><?php echo get_field('designation', $expert->ID) ?>, <?php echo get_field('company', $expert->ID) ?></h5>
                    </a>
                  </li>
                <?php endforeach; ?>
            </ul>
          </div>
          <?php endif; ?>
          <?php
            $experts = get_field('sarathi');
            if($experts && count($experts)):
          ?>
          <div class="team-wrapper volunteer-wrapper background-prop">
            <img class="bg-bottom" src="<?php echo get_template_directory_uri(); ?>/img/volunteer_bottom.svg"  alt="Image" />
            <img class="bg-top" src="<?php echo get_template_directory_uri(); ?>/img/volunteer_right_and_top_bg 1.svg"  alt="Image" />
            <ul class="list-inline flex-not-centered">
              <li class="list-inline-item">
                <h3 class="heading3 team-title">Sarathi</h3>
              </li>
                <?php foreach($experts as $expert): ?>
                  <li class="list-inline-item">
                    <a href="<?php if(get_field('linkedin', $expert->ID)):?> <?php echo get_field('linkedin', $expert->ID) ?> <?php else: ?> javascript:void(0) <?php endif;?>" class="card-wrapper" <?php if(get_field('linkedin', $expert->ID)):?> target="_blank" <?php endif;?>>
                      <?php if(get_the_post_thumbnail_url($expert)): ?>
                        <img src="<?php echo get_the_post_thumbnail_url($expert) ?>"  alt="Image" />
                      <?php else: ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/placeholder_annual.svg"  alt="Image" />
                      <?php endif; ?>
                      <h4 class="heading4"><?php echo $expert->post_title?></h4>
                      <h5 class="support-text"><?php echo get_field('designation', $expert->ID) ?>, <?php echo get_field('company', $expert->ID) ?></h5>
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

  <?php
    $growthx_cohort = CFS()->get('growthx_cohort');
    if($growthx_cohort && count($growthx_cohort)):
  ?>
  <section class="partners-section growthx-cohort-section">
    <div class="container container-wrapper">
      <div class="row title-row">
        <div class="col-12 ">
          <h2 class="heading1">GrowthX Cohort</h2>
        </div>
      </div>
      <div class="row content-row flex-centered">
        <div class="col-sm-4 col-md-4 col-lg-4 col-12 left-blk">
          <?php if($growthx_cohort[0]['image']): ?>
            <div class="img-blk">
              <a href="<?php if($growthx_cohort[0]['link']): ?> <?php echo $growthx_cohort[0]['link']?> <?php else: ?> javascript:void(0) <?php endif; ?>" <?php if($growthx_cohort[0]['link']): ?>target="_blank" <?php endif; ?>>
                <img class="img1" src="<?php echo $growthx_cohort[0]['image']?>" alt="image"/>
              </a>
            </div>
          <?php endif;?>
          <?php if($growthx_cohort[1]['image']): ?>
            <div class="img-blk">
              <a href="<?php if($growthx_cohort[1]['link']): ?> <?php echo $growthx_cohort[1]['link']?> <?php else: ?> javascript:void(0) <?php endif; ?>" <?php if($growthx_cohort[1]['link']): ?>target="_blank" <?php endif; ?>>
                <img class="img1" src="<?php echo $growthx_cohort[1]['image']?>" alt="image"/>
              </a>
            </div>
          <?php endif;?>
        </div>
        <div class="col-sm-4 col-md-4 col-lg-4 col-12 middle-blk">
          <?php if($growthx_cohort[2]['image']): ?>
            <div class="img-blk">
              <a href="<?php if($growthx_cohort[2]['link']): ?> <?php echo $growthx_cohort[2]['link']?> <?php else: ?> javascript:void(0) <?php endif; ?>" <?php if($growthx_cohort[2]['link']): ?>target="_blank" <?php endif; ?>>
                <img class="img1" src="<?php echo $growthx_cohort[2]['image']?>" alt="image"/>
              </a>
            </div>
          <?php endif;?>
          <?php if($growthx_cohort[3]['image']): ?>
            <div class="img-blk">
              <a href="<?php if($growthx_cohort[3]['link']): ?> <?php echo $growthx_cohort[3]['link']?> <?php else: ?> javascript:void(0) <?php endif; ?>" <?php if($growthx_cohort[3]['link']): ?>target="_blank" <?php endif; ?>>
                <img class="img1" src="<?php echo $growthx_cohort[3]['image']?>" alt="image"/>
              </a>
            </div>
          <?php endif;?>
          <?php if($growthx_cohort[4]['image']): ?>
            <div class="img-blk">
              <a href="<?php if($growthx_cohort[4]['link']): ?> <?php echo $growthx_cohort[4]['link']?> <?php else: ?> javascript:void(0) <?php endif; ?>" <?php if($growthx_cohort[4]['link']): ?>target="_blank" <?php endif; ?>>
                <img class="img1" src="<?php echo $growthx_cohort[4]['image']?>" alt="image"/>
              </a>
            </div>
          <?php endif;?>
        </div>
        <div class="col-sm-4 col-md-4 col-lg-4 col-12 center-blk">
          <?php if($growthx_cohort[5]['image']): ?>
            <div class="img-blk">
              <a href="<?php if($growthx_cohort[5]['link']): ?> <?php echo $growthx_cohort[5]['link']?> <?php else: ?> javascript:void(0) <?php endif; ?>" <?php if($growthx_cohort[5]['link']): ?>target="_blank" <?php endif; ?>>
                <img class="img1" src="<?php echo $growthx_cohort[5]['image']?>" alt="image"/>
              </a>
            </div>
          <?php endif;?>
          <?php if($growthx_cohort[6]['image']): ?>
            <div class="img-blk">
              <a href="<?php if($growthx_cohort[6]['link']): ?> <?php echo $growthx_cohort[6]['link']?> <?php else: ?> javascript:void(0) <?php endif; ?>" <?php if($growthx_cohort[6]['link']): ?>target="_blank" <?php endif; ?>>
                <img class="img1" src="<?php echo $growthx_cohort[6]['image']?>" alt="image"/>
              </a>
            </div>
          <?php endif;?>
        </div>
      </div>
    </div>
  </section>
  <?php endif;?>

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
          <?php echo get_field('banner_video_link') ?>
        </div>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/wow.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/parsley.min.js"></script>


<script type="text/javascript">
  $(document).ready(function () {
    // new WOW().init();

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
            if($(window).scrollTop() > $('.about-section').offset().top - 200 && $(window).scrollTop() < $('.newsletter-section').offset().top - 150){
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

          if($(window).scrollTop() > $('.about-section').offset().top - topOffset && (!$('#tabsList li[data-class="about-section"]').hasClass('active')) && $(window).scrollTop() < $('.how-to-apply-section').offset().top - topOffset){
            setTimeout(function(){
                $('#tabsList li').removeClass('active');
                $('#tabsList li[data-class="about-section"]').addClass('active');
            },10);
          }

          if($(window).scrollTop() > $('.how-to-apply-section').offset().top - topOffset && (!$('#tabsList li[data-class="how-to-apply-section"]').hasClass('active')) && $(window).scrollTop() < $('.team-section').offset().top - topOffset){
            setTimeout(function(){
              $('#tabsList li').removeClass('active');
              $('#tabsList li[data-class="how-to-apply-section"]').addClass('active');
            },10);
          }

          if($(window).scrollTop() > $('.team-section').offset().top - topOffset && (!$('#tabsList li[data-class="team-section"]').hasClass('active')) && $(window).scrollTop() < $('.partners-section').offset().top - topOffset){
            setTimeout(function(){
              $('#tabsList li').removeClass('active');
              $('#tabsList li[data-class="team-section"]').addClass('active');
            },10);
          }

          if($(window).scrollTop() > $('.partners-section').offset().top - topOffset && (!$('#tabsList li[data-class="partners-section"]').hasClass('active'))){
            setTimeout(function(){
              $('#tabsList li').removeClass('active');
              $('#tabsList li[data-class="partners-section"]').addClass('active');
            },10);
          }

      });
    }

    $('#upcomingEventNotifyForm').parsley();
    $('#upcomingEventNotifyForm #fname').attr('required',true).attr('data-parsley-required-message','Please enter Full Name').attr('data-parsley-minlength-message','First Name must be of minimum 3 characters');
    $('#upcomingEventNotifyForm #email').attr('required',true).attr('data-parsley-required-message','Please enter Email Address').attr('data-parsley-type-message','Please enter valid Email');

  });
</script>

<?php get_footer(); ?>
