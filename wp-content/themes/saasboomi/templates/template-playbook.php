<?php
/*
* Template Name: Playbook
*/ ?>

<?php get_header(); ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/annual-events-page.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/global-events-page.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/owl.carousel.min.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/animate.css">

<div class="event-annual-page playbook-page">

  <section class="event-banner-section">
    <div class="container container-wrapper">
      <div class="row flex-centered">
        <div class="col-sm-6 col-md-6 col-lg-6 col-12 left-blk">
          <img src="<?php echo get_template_directory_uri(); ?>/img/playbook_logo_black.svg" alt="Playbook" />
          <h1 class="heading2"><?php echo get_field('banner_banner_title'); ?></h1>
          <div class="registration-content">
            <?php if (get_field('event_dates')['from_date'] && ((get_field('event_dates')['from_date']) >= date("m/d/Y"))) : ?>
              <p class="heading4">Registrations open for SaaSBOOMi Playbook for <?php echo date('F', strtotime(get_field('event_dates')['from_date'])) ?></p>
              <h2 class="heading2 date"><?php echo date('jS F Y', strtotime(get_field('event_dates')['from_date'])) ?> </h2>
              <ul class="list-inline">
                <li class="list-inline-item">

                  <a href="<?php echo get_home_url() ?>/playbook-registration" class="primary-btn primary-btn-dark btn-small">
                    Apply Now
                  </a>
                </li>
                <li class="list-inline-item" style="text-transform: uppercase;">
                  <span class="support-text start-time"><?php the_field('event_dates_start_time'); ?></span>
                  <span class="support-text start-time" style="text-transform: lowercase;"> to </span>
                  <span class="support-text end-time"><?php the_field('event_dates_end_time'); ?></span>
                  </a>
                </li>
              </ul>
            <?php elseif (date("m/d/Y") < (get_field('event_dates')['from_date'])) : ?>
              <p class="heading4">Registrations will open for SaaSBOOMi Playbook</p>
              <h2 class="heading2 date">Dates To Be Announced Soon!</h2>
            <?php else : ?>
              <p class="heading4">Registrations will open for SaaSBOOMi Playbook</p>
              <h2 class="heading2 date">Dates To Be Announced Soon!</h2>
            <?php endif; ?>
          </div>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-6 col-12 right-blk">
          <div class="vedio-blk background-prop" <?php if (get_field('banner_vedio_link')) : ?> data-toggle="modal" data-target="#vedioModal" style="cursor: pointer;" <?php endif; ?>>
            <?php if (get_field('banner_vedio_link')) : ?>
              <div class="play-vedio">
                <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M32.1691 42H9.8309C4.40144 42 0 37.5986 0 32.1691V9.8309C0 4.40144 4.40144 0 9.8309 0H32.1691C37.5986 0 42 4.40144 42 9.8309V32.1691C42 37.5986 37.5986 42 32.1691 42Z" fill="#9996FF" />
                  <path d="M16.4736 11.8068L28.2771 18.6215C28.6942 18.8627 29.0406 19.2094 29.2813 19.6267C29.5221 20.0441 29.6488 20.5175 29.6488 20.9993C29.6488 21.4811 29.5221 21.9545 29.2813 22.3718C29.0406 22.7892 28.6942 23.1359 28.2771 23.3771L16.4736 30.1918C16.0561 30.4323 15.5827 30.5588 15.1008 30.5586C14.6189 30.5583 14.1456 30.4313 13.7283 30.1903C13.3111 29.9493 12.9646 29.6027 12.7236 29.1854C12.4826 28.7682 12.3557 28.2948 12.3555 27.813V14.1836C12.356 13.7019 12.4832 13.2288 12.7244 12.8118C12.9655 12.3948 13.312 12.0486 13.7292 11.8078C14.1464 11.567 14.6196 11.4401 15.1013 11.44C15.583 11.4398 16.0563 11.5663 16.4736 11.8068Z" fill="white" />
                </svg>
                <p class="support-text play-vedio-text">Play video</p>
              </div>
            <?php endif; ?>
            <svg class="complete-vedio-bg" width="455" height="470" viewBox="0 0 330 341" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" clip-rule="evenodd" d="M294.01 0H0V341H329.579V0H294.01ZM294.01 0C305.425 0 315.386 8.94723 315.975 20.941L329.552 297.513C330.221 311.147 318.436 322.096 304.875 320.439L41.3868 288.249C28.7986 286.711 20.1061 274.899 22.3916 262.435L57.5694 70.5995C59.1337 62.0687 65.5663 55.251 73.9977 53.1878L288.731 0.641046C290.506 0.206772 292.274 0 294.01 0Z" fill="white" />
              <path d="M40.3552 164.474L3.95611 216.954C-4.24666 228.78 0.841749 245.196 14.2813 250.264L23.9546 253.912L40.3552 164.474Z" fill="#9996FF" />
              <path d="M150.297 301.555L251.127 339.577C263.97 344.42 278.049 336.421 280.523 322.877L281.49 317.582L150.297 301.555Z" fill="#9996FF" />
              <path d="M320.148 105.957L325.946 74.2185C327.536 65.5161 323.863 57.3724 317.528 52.5708L320.148 105.957Z" fill="#9996FF" />
            </svg>
            <div class="featured-img-blk">
              <?php if (get_field('banner_vedio_thumbnail')) : ?>
                <img class="featured-vedio-img" src="<?php echo get_field('banner_vedio_thumbnail')["url"] ?>" alt="image" />
              <?php else : ?>
                <img class="featured-vedio-img" src="<?php echo get_template_directory_uri(); ?>/img/playbook_featured_bg.png" alt="Playbook" />
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
                <img src="<?php echo get_template_directory_uri(); ?>/img/playbook_logo_black.svg" alt="Image" style="margin-top:-4px; height:20px;" />
              </li>
              <li class="active scenario list-inline-item" id="platform1" data-class="about-section">
                <a href="javascript:void(0)" class="paragraph">Overview</a>
              </li>
              <li class="scenario list-inline-item" id="platform2" data-class="playbook-speakers-section">
                <a href="javascript:void(0)" class="paragraph">Speakers</a>
              </li>
              <li class="scenario list-inline-item" id="platform3" data-class="testimonials-section">
                <a href="javascript:void(0)" class="paragraph">Testimonials</a>
              </li>
              </li>
            </ul>
          </div>
          <div class="col-sm-3 col-md-3 col-lg-3 col-12 right-blk">
            <?php if (get_field('event_dates')['from_date'] && ((get_field('event_dates')['from_date']) >= date("m/d/Y"))) : ?>
              <ul class="list-inline text-right">
                <li class="list-inline-item">
                  <p>
                    <a href="<?php echo get_home_url() ?>/playbook-registration" class="primary-btn primary-btn-dark btn-small">
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
            <h3 class="heading1"><?php echo get_field('about_title') ?></h3>
            <p class="paragraph description1">
              <?php echo get_field('about_sub_text') ?>
            </p>
            <p class="color-bar yellow-bar">
              <span></span>
            </p>
            <h4 class="heading4">Key Takeaways</h4>
            <div class="row store-content-row who-can-apply">
              <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="card-wrapper steps-list">
                  <div class="img-blk">
                    <svg width="18" height="15" viewBox="0 0 18 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M6.19378 13.7859L0.506271 8.09835C0.164576 7.75665 0.164576 7.20263 0.506271 6.86091L1.74368 5.62346C2.08537 5.28173 2.63943 5.28173 2.98112 5.62346L6.8125 9.45481L15.0189 1.24846C15.3606 0.906764 15.9146 0.906764 16.2563 1.24846L17.4937 2.4859C17.8354 2.8276 17.8354 3.38161 17.4937 3.72334L7.43122 13.7859C7.08949 14.1276 6.53547 14.1276 6.19378 13.7859Z" fill="#9996FF" />
                    </svg>
                  </div>
                  <div class="content-blk">
                    <h5 class="heading5">
                      <?php echo get_field('about_key_title_1') ?>
                    </h5>
                    <p class="support-text">
                      <?php echo get_field('about_key_description_1') ?>
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="card-wrapper steps-list">
                  <div class="img-blk">
                    <svg width="18" height="15" viewBox="0 0 18 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M6.19378 13.7859L0.506271 8.09835C0.164576 7.75665 0.164576 7.20263 0.506271 6.86091L1.74368 5.62346C2.08537 5.28173 2.63943 5.28173 2.98112 5.62346L6.8125 9.45481L15.0189 1.24846C15.3606 0.906764 15.9146 0.906764 16.2563 1.24846L17.4937 2.4859C17.8354 2.8276 17.8354 3.38161 17.4937 3.72334L7.43122 13.7859C7.08949 14.1276 6.53547 14.1276 6.19378 13.7859Z" fill="#9996FF" />
                    </svg>
                  </div>
                  <div class="content-blk">
                    <h5 class="heading5">
                      <?php echo get_field('about_key_title_2') ?>
                    </h5>
                    <p class="support-text">
                      <?php echo get_field('about_key_description_2') ?>
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="card-wrapper steps-list">
                  <div class="img-blk">
                    <svg width="18" height="15" viewBox="0 0 18 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M6.19378 13.7859L0.506271 8.09835C0.164576 7.75665 0.164576 7.20263 0.506271 6.86091L1.74368 5.62346C2.08537 5.28173 2.63943 5.28173 2.98112 5.62346L6.8125 9.45481L15.0189 1.24846C15.3606 0.906764 15.9146 0.906764 16.2563 1.24846L17.4937 2.4859C17.8354 2.8276 17.8354 3.38161 17.4937 3.72334L7.43122 13.7859C7.08949 14.1276 6.53547 14.1276 6.19378 13.7859Z" fill="#9996FF" />
                    </svg>
                  </div>
                  <div class="content-blk">
                    <h5 class="heading5">
                      <?php echo get_field('about_key_title_3') ?>
                    </h5>
                    <p class="support-text">
                      <?php echo get_field('about_key_description_3') ?>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-6 col-lg-6 col-12 right-blk">
            <div class="featured-img-blk">
              <?php if (get_field('about_image1')) : ?>
                <img src="<?php echo get_field('about_image1')["url"] ?>" alt="Image" />
              <?php else : ?>
                <img src="<?php echo get_template_directory_uri(); ?>/img/playbook_about_featured.png" alt="Image" />
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php
  $speakers = get_field('speakers');
  $counter = 0;
  if ($speakers && count($speakers)) :
  ?>
    <section class="playbook-speakers-section">
      <div class="container container-wrapper">
        <div class="row title-row">
          <div class="col-12">
            <h2 class="heading2">Our Speakers</h2>
          </div>
        </div>
        <div class="row flex-not-centered content-row">
          <?php
          foreach ($speakers as $speaker) :
          ?>
            <?php
            $counter++;
            if ($counter <= 12) :
            ?>
              <div class="col-sm-6 col-md-6 col-lg-6 col-6 card-outer-wrapper">
                <a href="<?php if (get_field('linkedin', $speaker->ID)) : ?> <?php echo get_field('linkedin', $speaker->ID) ?> <?php else : ?> javascript:void(0) <?php endif; ?>" class="card-wrapper" <?php if (get_field('linkedin', $speaker->ID)) : ?> target="_blank" <?php endif; ?>>
                  <div class="row flex-centered">
                    <div class="col-sm-6 col-md-6 col-lg-6 col-12 left-blk">
                      <div class="img-blk">
                        <?php if (get_the_post_thumbnail_url($speaker)) : ?>
                          <img src="<?php echo get_the_post_thumbnail_url($speaker) ?>" alt="Image" />
                        <?php else : ?>
                          <img src="<?php echo get_template_directory_uri(); ?>/img/placeholder_playbook.svg" alt="Image" />
                        <?php endif; ?>
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-6 col-12 right-blk">
                      <div class="content-blk">
                        <h5 class="heading5"><?php echo $speaker->post_title ?></h5>
                        <h6 class="support-text">
                          <?php echo get_field('designation', $speaker->ID) ?>, <?php echo get_field('company', $speaker->ID) ?>
                        </h6>
                        <p class="paragraph">
                          <?php echo wp_strip_all_tags($speaker->post_content); ?>
                        </p>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
            <?php endif; ?>
          <?php endforeach; ?>
        </div>
      </div>
    </section>
  <?php endif ?>

  <?php
  $speakers = get_field('past_speakers');
  $counter = 0;
  if ($speakers && count($speakers)) :
  ?>
    <section class="playbook-speakers-section" style="margin-top:32px;">
      <div class="container container-wrapper">
        <div class="row title-row">
          <div class="col-12">
            <h2 class="heading2">Past Speakers</h2>
          </div>
        </div>
        <div class="row flex-not-centered content-row">
          <?php
          foreach ($speakers as $speaker) :
          ?>
            <?php
            $counter++;
            if ($counter <= 12) :
            ?>
              <div class="col-sm-6 col-md-6 col-lg-6 col-6 card-outer-wrapper">
                <a href="<?php if (get_field('linkedin', $speaker->ID)) : ?> <?php echo get_field('linkedin', $speaker->ID) ?> <?php else : ?> javascript:void(0) <?php endif; ?>" class="card-wrapper" <?php if (get_field('linkedin', $speaker->ID)) : ?> target="_blank" <?php endif; ?>>
                  <div class="row flex-centered">
                    <div class="col-sm-6 col-md-6 col-lg-6 col-12 left-blk">
                      <div class="img-blk">
                        <?php if (get_the_post_thumbnail_url($speaker)) : ?>
                          <img src="<?php echo get_the_post_thumbnail_url($speaker) ?>" alt="Image" />
                        <?php else : ?>
                          <img src="<?php echo get_template_directory_uri(); ?>/img/placeholder_playbook.svg" alt="Image" />
                        <?php endif; ?>
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-6 col-12 right-blk">
                      <div class="content-blk">
                        <h5 class="heading5"><?php echo $speaker->post_title ?></h5>
                        <h6 class="support-text">
                          <?php echo get_field('designation', $speaker->ID) ?>, <?php echo get_field('company', $speaker->ID) ?>
                        </h6>
                        <p class="paragraph">
                          <?php echo wp_strip_all_tags($speaker->post_content); ?>
                        </p>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
            <?php endif; ?>
          <?php endforeach; ?>
        </div>
      </div>
    </section>
  <?php endif ?>

  <section class="cta-section">
    <div class="container container-wrapper">
      <div class="cta-wrapper">
        <div class="row flex-centered">
          <div class="col-sm-6 col-md-6 col-lg-6 col-12 left-blk">
            <div class="registration-content">
              <?php if (get_field('event_dates')['from_date'] && ((get_field('event_dates')['from_date']) >= date("m/d/Y"))) : ?>
                <p class="heading4">Registrations open for SaaSBOOMi Playbook for <?php echo date('F', strtotime(get_field('event_dates')['from_date'])) ?></p>
                <h4 class="heading2 date"><?php echo date('jS F Y', strtotime(get_field('event_dates')['from_date'])) ?> </h4>
                <h5 style="text-transform: uppercase;">
                  <span class="support-text start-time"><?php the_field('event_dates_start_time'); ?></span>
                  <span class="support-text start-time" style="text-transform: lowercase;"> to </span>
                  <span class="support-text end-time"><?php the_field('event_dates_end_time'); ?></span>
                  </a>
                </h5>
              <?php elseif (date("m/d/Y") < (get_field('event_dates')['from_date'])) : ?>
                <p class="heading4">Registrations will open for SaaSBOOMi Playbook</p>
                <h2 class="heading2 date">Dates To Be Announced Soon!</h2>
              <?php else : ?>
                <p class="heading4">Registrations will open for SaaSBOOMi Playbook</p>
                <h2 class="heading2 date">Dates To Be Announced Soon!</h2>
              <?php endif; ?>
            </div>
          </div>
          <div class="col-sm-6 col-md-6 col-lg-6 col-12 right-blk">
            <?php if (get_field('event_dates')['from_date'] && ((get_field('event_dates')['from_date']) >= date("m/d/Y"))) : ?>
              <ul class="list-inline apply-btn">
                <li class="list-inline-item">
                  <p>
                    <a href="<?php echo get_home_url() ?>/playbook-registration" class="primary-btn primary-btn-dark btn-small">
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
  $testimonials = get_field('testimonials');
  if ($testimonials && count($testimonials)) :
  ?>
    <section class="community-section background-prop testimonials-section">
      <div class="container container-wrapper">
        <div class="row content-row flex-centered">
          <div class="col-md-4 col-sm-4 col-12 flex-not-centered left-blk">
            <h2 class="heading1">Hear from the community</h2>
          </div>
          <div class="col-md-8 col-sm-8 col-12 flex-not-centered right-blk">
            <div class="community-feed-wrapper owl-carousel owl-theme community-slider">
              <?php foreach ($testimonials as $testimonial) : ?>
                <div class="item">
                  <div class="card-wrapper" title="<?php echo mb_strimwidth(wp_strip_all_tags($testimonial->post_content), 0, 240, ' ...') ?>">
                    <h3 class="paragraph">
                      <?php echo mb_strimwidth(wp_strip_all_tags($testimonial->post_content), 0, 240, ' ...') ?>
                    </h3>
                    <div class="profile-blk">
                      <div class="img-blk">
                        <?php if (get_the_post_thumbnail_url($testimonial)) : ?>
                          <img src="<?php echo get_the_post_thumbnail_url($testimonial) ?>" alt="Image" />
                        <?php else : ?>
                          <img src="<?php echo get_template_directory_uri(); ?>/img/default_profile_picture.png" alt="Image" />
                        <?php endif; ?>
                      </div>
                      <div class="content-blk">
                        <h4 class="heading4"><?php echo $testimonial->post_title ?></h4>
                        <p class="support-text">
                          <?php echo get_field('designation', $testimonial->ID) ?>, <?php echo get_field('company', $testimonial->ID) ?>
                        </p>
                      </div>
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

  <?php
  $blogs = get_field('blogs');
  // var_dump(count($blogs));
  $counter = 0;
  if ($blogs && count($blogs)) :
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


  <?php get_template_part('templates/template-newsletter'); ?>


</div>

<div class="modal fade" id="vedioModal" tabindex="-1" aria-labelledby="vedioModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <a class="close" data-dismiss="modal" aria-label="Close">
        <img src="<?php echo get_template_directory_uri(); ?>/img/close.svg" alt="Close" />
      </a>
      <div class="modal-body">
        <div class="vedio-blk">
          <?php echo get_field('banner_vedio_link') ?>
        </div>
      </div>
    </div>
  </div>
</div>


<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/wow.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/parsley.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/owl.carousel.min.js"></script>


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


    if ($(window).outerWidth() > 0) {
      $('#tabsList li').on('click', function() {
        $('#tabsList li').removeClass('active');
        $(this).addClass('active');
        var block = $(this).attr('data-class');
        var offsetTop = 130;
        if ($(window).outerWidth() < 992) {
          offsetTop = 150;
        }
        $("html, body").animate({
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
        if ($(window).outerWidth() > 767) {
          topOffset = 300;
        } else {
          topOffset = 100;
        }

        if ($(window).scrollTop() > $('.about-section').offset().top - topOffset && (!$('#tabsList li[data-class="about-section"]').hasClass('active')) && $(window).scrollTop() < $('.playbook-speakers-section').offset().top - topOffset) {
          setTimeout(function() {
            $('#tabsList li').removeClass('active');
            $('#tabsList li[data-class="about-section"]').addClass('active');
          }, 10);
        }

        if ($(window).scrollTop() > $('.playbook-speakers-section').offset().top - topOffset && (!$('#tabsList li[data-class="playbook-speakers-section"]').hasClass('active')) && $(window).scrollTop() < $('.testimonials-section').offset().top - topOffset) {
          setTimeout(function() {
            $('#tabsList li').removeClass('active');
            $('#tabsList li[data-class="playbook-speakers-section"]').addClass('active');
          }, 10);
        }

        if ($(window).scrollTop() > $('.testimonials-section').offset().top - topOffset && (!$('#tabsList li[data-class="testimonials-section"]').hasClass('active'))) {
          setTimeout(function() {
            $('#tabsList li').removeClass('active');
            $('#tabsList li[data-class="testimonials-section"]').addClass('active');
          }, 10);
        }

      });
    }



    $('#upcomingEventNotifyForm').parsley();
    $('#upcomingEventNotifyForm #fname').attr('required', true).attr('data-parsley-required-message', 'Please enter Full Name').attr('data-parsley-minlength-message', 'First Name must be of minimum 3 characters');
    $('#upcomingEventNotifyForm #email').attr('required', true).attr('data-parsley-required-message', 'Please enter Email Address').attr('data-parsley-type-message', 'Please enter valid Email');

  });
</script>

<?php get_footer(); ?>
