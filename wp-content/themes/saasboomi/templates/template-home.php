<?php
/*
* Template Name: home
*/ ?>

<?php get_header(); ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/home-page.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/owl.carousel.min.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/animate.css">

<div class="home-page">

    <section class="about-section">
        <!-- <div class="banner-wrapper" style="margin: -60px 0 24px;">
        <img class="banner-image" src="<?php echo get_template_directory_uri(); ?>/img/annual_2021_new.jpg" alt="image" style="width:100%; object-fit:cover;"/>
      </div> -->
        <div class="container">
            <img class="pattern-left" src="<?php echo get_template_directory_uri() ?>/img/circles_pointer_left.png" />
            <img class="pattern-right" src="<?php echo get_template_directory_uri() ?>/img/circles_pointer_right.png" />
            <div class="row about-blk">
                <div class="col-12">
                    <p class="heading5"><?php echo get_field('banner_sub_title') ?></p>
                    <h1 class="heading1"><?php echo get_field('banner_title') ?></h1>
                    <p class="paragraph"><?php echo get_field('banner_description') ?></p>
                    <ul class="list-inline buttons-wrapper">
                        <li class="list-inline-item">
                            <p><a href="<?php echo get_permalink(1146); ?>" class="primary-btn primary-btn-dark btn-large">Join The Community</a></p>
                        </li>
                        <li class="list-inline-item">
                            <p><a href="javascript:void(0)" class="secondary-btn btn-large" data-toggle="modal" data-target="#vedioModal">Watch Video</a></p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row event-card-block">
                <div class="col-md-12">
                    <div class="event-banner">
                        <a class="poster-image" href="<?php echo get_home_url() ?>/saasboomi-annual-2021/">
                            <img src="<?php echo get_template_directory_uri() ?>/img/event_poster.jpg" alt="event poster" />
                        </a>
                        <a href="<?php echo get_home_url() ?>/saasboomi-annual-2021/" class="event-description">
                            <h2 class="heading1">SaaSBOOMi Annual 2021</h2>
                            <h3 class="paragraph">Help Indian SaaS founders emerge stronger in <br /> the post-COVID era
                            </h3>
                            <ul class="list-inline meeting-highlights">
                                <li class="list-inline-item heading4">Virtual Conference</li>
                                <li class="list-inline-item heading4">Meeting with VCs</li>
                                <li class="list-inline-item heading4">Workshops</li>
                                <li class="list-inline-item heading4">Community</li>
                            </ul>
                            <ul class="list-inline data-info-list flex-centered">
                                <!-- <li class="list-inline-item heading3">SaaSBOOMi Annual 2021 is postponed owing to the
                                    impact of Covid-19</li> -->
                                <li class="list-inline-item heading3">26th June 2021 - 4th Sep 2021</li>
                                <!-- <li class="list-inline-item heading3">Saturdays, 9am to 12:30pm</li> -->
                                <!-- <li class="list-inline-item d-none">
                    <a href="https://airtable.com/shr7SdGKjztEwWQrD" class="apply-btn support-text" target="_blank" >APPLY NOW</a>
                  </li> -->
                            </ul>
                            <ul class="list-inline data-info-list day-info-list flex-centered">
                                <li class="list-inline-item paragraph">Saturdays, 9am to 12:30pm</li>
                            </ul>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row gallery-blk">
                <div class="col-sm-6 col-md-6 col-lg-6 col-6 left-blk">
                    <div class="row content-row">
                        <div class="col-sm-5 col-md-5 col-lg-5 col-4 grid-blk">
                            <p class="color-bar yellow-bar text-right top-bar">
                                <span></span>
                            </p>
                            <?php if (get_field('banner_gallery_image1')) : ?>
                                <img class="img1" src="<?php echo get_field('banner_gallery_image1')['url'] ?>" alt="image" />
                            <?php else : ?>
                                <img class="img1" src="<?php echo get_template_directory_uri(); ?>/img/generic_placeholder.png" alt="Image">
                            <?php endif; ?>
                        </div>
                        <div class="col-sm-7 col-md-7 col-lg-7 col-8 grid-blk">
                            <?php if (get_field('banner_gallery_image1')) : ?>
                                <img class="img2" src="<?php echo get_field('banner_gallery_image2')['url'] ?>" alt="image" />
                            <?php else : ?>
                                <img class="img2" src="<?php echo get_template_directory_uri(); ?>/img/generic_placeholder.png" alt="Image">
                            <?php endif; ?>
                            <p class="color-bar blue-bar text-right bottom-bar">
                                <span></span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-6 col-6 right-blk">
                    <div class="row content-row">
                        <div class="col-sm-7 col-md-7 col-lg-7 col-8 grid-blk">
                            <p class="color-bar green-bar text-right top-bar">
                                <span></span>
                            </p>
                            <?php if (get_field('banner_gallery_image3')) : ?>
                                <img class="img3" src="<?php echo get_field('banner_gallery_image3')['url'] ?>" alt="image" />
                            <?php else : ?>
                                <img class="img3" src="<?php echo get_template_directory_uri(); ?>/img/generic_placeholder.png" alt="Image">
                            <?php endif; ?>
                        </div>
                        <div class="col-sm-5 col-md-5 col-lg-5 col-4 grid-blk grid-last">
                            <?php if (get_field('banner_gallery_image4')) : ?>
                                <img class="img4" src="<?php echo get_field('banner_gallery_image4')['url'] ?>" alt="image" />
                            <?php else : ?>
                                <img class="img4" src="<?php echo get_template_directory_uri(); ?>/img/generic_placeholder.png" alt="Image">
                            <?php endif; ?>
                            <p class="color-bar pink-bar text-right bottom-bar">
                                <span></span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="members-section">
        <div class="container">
            <div class="row flex-centered">
                <div class="col-12 col-md-5 col-sm-12 left-blk">
                    <h3 class="heading2 count">1000+</h3>
                    <p class="paragraph">SaaS Companies</p>
                    <h4 class="heading2">Nurturing SaaS Companies of all shapes and sizes</h4>
                    <p class="view-all-members">
                        <a href="<?php echo get_permalink(790); ?>" class="secondary-btn btn-small">VIEW ALL
                            COMPANIES</a>
                    </p>
                </div>
                <div class="col-12 col-md-7 col-sm-12 right-blk">
                    <ul class="companies-list list-one list-inline">
                        <?php if (get_field('member_company_company_image1')) : ?>
                            <li class="list-inline-item">
                                <img class="" src="<?php echo get_field('member_company_company_image1')['url'] ?>" alt="" />
                            </li>
                        <?php endif; ?>
                        <?php if (get_field('member_company_company_image2')) : ?>
                            <li class="list-inline-item">
                                <img class="" src="<?php echo get_field('member_company_company_image2')['url'] ?>" alt="" />
                            </li>
                        <?php endif; ?>
                        <?php if (get_field('member_company_company_image3')) : ?>
                            <li class="list-inline-item">
                                <img class="" src="<?php echo get_field('member_company_company_image3')['url'] ?>" alt="" />
                            </li>
                        <?php endif; ?>
                    </ul>
                    <ul class="companies-list list-two list-inline">
                        <?php if (get_field('member_company_company_image4')) : ?>
                            <li class="list-inline-item">
                                <img class="" src="<?php echo get_field('member_company_company_image4')['url'] ?>" alt="" />
                            </li>
                        <?php endif; ?>
                        <?php if (get_field('member_company_company_image5')) : ?>
                            <li class="list-inline-item">
                                <img class="" src="<?php echo get_field('member_company_company_image5')['url'] ?>" alt="" />
                            </li>
                        <?php endif; ?>
                        <?php if (get_field('member_company_company_image6')) : ?>
                            <li class="list-inline-item">
                                <img class="" src="<?php echo get_field('member_company_company_image6')['url'] ?>" alt="" />
                            </li>
                        <?php endif; ?>
                        <li class="list-inline-item">
                            <img class="" src="<?php echo get_template_directory_uri(); ?>/img/highradius-logo.jpeg" alt="" />
                        </li>
                    </ul>
                    <ul class="companies-list list-three list-inline">
                        <?php if (get_field('member_company_company_image7')) : ?>
                            <li class="list-inline-item">
                                <img class="" src="<?php echo get_field('member_company_company_image7')['url'] ?>" alt="" />
                            </li>
                        <?php endif; ?>
                        <?php if (get_field('member_company_company_image8')) : ?>
                            <li class="list-inline-item">
                                <img class="" src="<?php echo get_field('member_company_company_image8')['url'] ?>" alt="" />
                            </li>
                        <?php endif; ?>
                        <?php if (get_field('member_company_company_image9')) : ?>
                            <li class="list-inline-item">
                                <img class="" src="<?php echo get_field('member_company_company_image9')['url'] ?>" alt="" />
                            </li>
                        <?php endif; ?>
                    </ul>
                    <p class="view-all-members d-block d-sm-none text-center" style="margin-top:24px">
                        <a href="<?php echo get_permalink(790); ?>" class="secondary-btn btn-small">VIEW ALL MEMBERS</a>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <?php
    $current_date = date("m/d/Y");
    $args = array(
        'post_type' => array('annual_events',  'growth_events', 'enterprise_events', 'build_events', 'product_events'),
        'posts_per_page' => 3,
        'meta_key' => 'event_dates_to_date',
        'orderby' => 'meta_value',
        'order' => 'ASC',
        'meta_query' => array(
            // 'relation' => 'AND',
            //   array(
            //     'key' => 'event_dates_from_date',
            //     'compare' => '<=',
            //     'value' => date("Y-m-d"),
            //     'type' => 'DATE'
            //   ),
            array(
                'key' => 'event_dates_to_date',
                'compare' => '>=',
                'value' => date("Y-m-d"),
                'type' => 'DATE'
            ),
        ),
        // 'orderby' => 'date',
        // 'order' => 'DESC'
    );
    $the_query = new WP_Query($args);
    if ($the_query->have_posts()) :
        // var_dump($event_dates_from_date);
    ?>
        <section class="upcoming-events-section">
            <div class="container">
                <div class="row title-row text-center">
                    <div class="col-12">
                        <h2 class="heading2">Events</h2>
                    </div>
                </div>
                <div class="row content-row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-3">
                        <div class="card-list">
                            <?php $post_count = 1;
                            while ($the_query->have_posts()) : $the_query->the_post();
                                $post_count++; 
                                
                            ?>
                                <div class="card-wrapper flex-centered scenario <?php if ($post_count == 2) : ?> active <?php endif; ?>" id="platform<?php echo $post_count ?>">
                                    <?php if (get_post_type() === 'annual_events') : ?>
                                        <div class="day-blk">
                                            <h3 class="heading3">
                                                24
                                            </h3>
                                            <p class="paragraph">
                                               Jul
                                            </p>
                                        </div>
                                    <?php else: ?>
                                    <div class="day-blk">
                                        <?php if (($current_date >= get_field('event_dates')['from_date']) && ($current_date <= get_field('event_dates')['to_date'])) : ?>
                                            <h3 class="heading3">
                                                <?php echo date('d', strtotime(get_field('event_dates')['from_date'])); ?>
                                            </h3>
                                        <?php else : ?>
                                            <h3 class="heading3">
                                                <?php echo date('d', strtotime(get_field('event_dates')['from_date'])) ?></h3>
                                        <?php endif; ?>
                                        <p class="paragraph">
                                            <?php echo date('M', strtotime(get_field('event_dates')['from_date'])) ?>
                                        </p>
                                    </div>
                                    <?php endif?>
                                    <?php if (get_post_type() === 'annual_events') : ?>
                                        <?php 
                                            $agenda = get_field('event_agenda'); 
                                            $upcmg_title = get_field('day_label', $agenda[4]->ID);
                                            $upcmg_duration = get_field('total_duration', $agenda[4]->ID);
                                        ?>
                                        <h4 class="heading4"><?php echo 'Week 5' ?></h4>
                                        <h4 class="heading5" style="text-transform: initial"><?php echo '6:00PM to 8:00PM' ?></h4>
                                    <?php elseif (get_post_type() === 'growth_events') : ?>
                                        <h4 class="heading4">Growth</h4>
                                    <?php elseif (get_post_type() === 'enterprise_events') : ?>
                                        <h4 class="heading4">Enterprise</h4>
                                    <?php elseif (get_post_type() === 'build_events') : ?>
                                        <h4 class="heading4">Build</h4>
                                    <?php elseif (get_post_type() === 'product_events') : ?>
                                        <h4 class="heading4">Product</h4>
                                    <?php else : ?>
                                    <?php endif; ?>
                                    <p class="support-text d-block d-lg-none">
                                        <?php echo date('d M', strtotime(get_field('event_dates')['from_date'])) ?>
                                    </p>
                                </div>
                            <?php endwhile;
                            wp_reset_postdata(); ?>
                        </div>
                    </div>
                    <div class="col-12 col-md-9 col-md-12 col-lg-9 mobile-right-blk">
                        <div class="content-outer-wrapper">
                            <div class="content-wrapper">
                                <div class="row events-row flex-centered platform platform0" style="display:none;">
                                    <div class="col-12 col-sm-5 col-md-5 left-blk">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/playbook_logo_black.svg" alt="Playbook" />
                                        <h5 class="heading5"><?php echo get_the_title(); ?></h5>
                                        <p class="hidden">
                                            <a href="<?php echo get_home_url() ?>/saasboomi-annual-2021/" class="primary-btn primary-btn-dark btn-large">Explore</a>
                                        </p>
                                    </div>
                                    <div class="col-12 col-md-7 col-md-7 right-blk">
                                        <?php if (get_field('event_dates_from_date')) : ?>
                                            <h6 class="heading4">
                                                <?php echo date('jS F Y', strtotime(get_field('event_dates')['from_date'])) ?>
                                                <span class="paragraph d-block d-sm-none">
                                                    Virtual Event
                                                </span>
                                            </h6>
                                        <?php endif; ?>
                                        <div class="speakers-wrapper">
                                            <p class="paragraph virtual-event">
                                                Virtual Event
                                            </p>
                                            <?php
                                            $speakers = get_field('playbook_speaker');
                                            // var_dump($speakers);
                                            $counter = 0;
                                            if ($speakers && count($speakers)) :
                                            ?>
                                                <div class="row speakers-row">
                                                    <?php
                                                    foreach ($speakers as $speaker) :
                                                    ?>
                                                        <?php
                                                        $counter++;
                                                        if ($counter <= 2) :
                                                        ?>
                                                            <div class="col-6 col-sm-6 col-md-6">
                                                                <a href="<?php if (get_field('linkedin', $speaker->ID)) : ?> <?php echo get_field('linkedin', $speaker->ID) ?> <?php else : ?> javascript:void(0) <?php endif; ?>" class="speaker-card-wrapper" target="_blank">
                                                                    <?php if (get_the_post_thumbnail_url($speaker)) : ?>
                                                                        <img src="<?php echo get_the_post_thumbnail_url($speaker) ?>" alt="Image" />
                                                                    <?php else : ?>
                                                                        <img src="<?php echo get_template_directory_uri(); ?>/img/placeholder_annual.svg" alt="Image" />
                                                                    <?php endif; ?>
                                                                    <h4 class="heading4"><?php echo $speaker->post_title ?></h4>
                                                                    <h5 class="support-text">
                                                                        <?php echo get_field('designation', $speaker->ID) ?>,
                                                                        <?php echo get_field('company', $speaker->ID) ?>
                                                                    </h5>
                                                                    <p class="support-text hidden">
                                                                        <?php echo get_field('responsibility', $speaker->ID) ?>,
                                                                        SaaSBOOMi
                                                                    </p>
                                                                </a>
                                                            </div>
                                                        <?php endif; ?>
                                                    <?php endforeach; ?>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                        <?php if (!$counter == 0) : ?>
                                            <p class="support-text speaker-count text-right">
                                                <span class="count"><?php echo $counter - 2; ?></span>+ Speakers
                                            </p>
                                        <?php endif; ?>
                                    </div>
                                </div>

                                <?php $post_count = 1;
                                while ($the_query->have_posts()) : $the_query->the_post();
                                    $post_count++; ?>
                                    <?php if (get_post_type() === 'annual_events') : ?>
                                        <?php 
                                            $agenda = get_field('event_agenda');
                                            $timeline = null;
                                            if($agenda && count($agenda)){
                                                $timeline = CFS()->get('timeline', $agenda[2]->ID);
                                            }
                                            if($timeline && count($timeline)):
                                        ?>
                                            <ul class="list-unstyled annual-info-list">
                                                <?php foreach($timeline   as $key => $anual_data): ?>
                                                    <li class="paragraph">
                                                        <h4 class="heading5"><?php echo $anual_data["duration"]?></h4>
                                                        <p class="paragraph"><?php echo $anual_data["session"][0]["title"]?></p>
                                                    </li>                 
                                                <?php endforeach;?>
                                            </ul>
                                        <?php endif ?>
                                    <?php else: ?>
                                    <div class="row events-row flex-centered platform platform<?php echo $post_count; ?>" <?php if ($post_count == 2) : ?> style="display:flex" <?php endif; ?>>
                                        <div class="col-12 col-sm-5 col-md-5 left-blk">
                                            <?php if (get_post_type() === 'annual_events') : ?>
                                                <img src="<?php echo get_template_directory_uri(); ?>/img/annual_logo_black.svg" alt="Build" />
                                                <h5 class="heading5"><?php echo get_the_title(); ?></h5>
                                                <p class="hidden">
                                                    <a href="<?php echo get_home_url() ?>/saasboomi-annual-2021/" class="primary-btn primary-btn-dark btn-large">Explore</a>
                                                </p>
                                            <?php elseif (get_post_type() === 'growth_events') : ?>
                                                <img src="<?php echo get_template_directory_uri(); ?>/img/growth_logo_black.svg" alt="Build" />
                                                <h5 class="heading5"><?php echo get_the_title(); ?></h5>
                                                <p class="hidden">
                                                    <a href="<?php echo get_permalink(117); ?>" class="primary-btn primary-btn-dark btn-large">Explore</a>
                                                </p>
                                            <?php elseif (get_post_type() === 'enterprise_events') : ?>
                                                <img src="<?php echo get_template_directory_uri(); ?>/img/enterprise_logo_black.svg" alt="Build" />
                                                <h5 class="heading5"><?php echo get_the_title(); ?></h5>
                                                <p class="hidden">
                                                    <a href="<?php echo get_permalink(121); ?>" class="primary-btn primary-btn-dark btn-large">Explore</a>
                                                </p>
                                            <?php elseif (get_post_type() === 'build_events') : ?>
                                                <img src="<?php echo get_template_directory_uri(); ?>/img/build_logo_black.svg" alt="Build" />
                                                <h5 class="heading5"><?php echo get_the_title(); ?></h5>
                                                <p class="hidden">
                                                    <a href="<?php echo get_permalink(119); ?>" class="primary-btn primary-btn-dark btn-large">Explore</a>
                                                </p>
                                            <?php elseif (get_post_type() === 'product_events') : ?>
                                                <img src="<?php echo get_template_directory_uri(); ?>/img/product_logo_black.svg" alt="Build" />
                                                <h5 class="heading5"><?php echo get_the_title(); ?></h5>
                                                <p class="hidden">
                                                    <a href="<?php echo get_permalink(123); ?>" class="primary-btn primary-btn-dark btn-large">Explore</a>
                                                </p>
                                            <?php else : ?>
                                            <?php endif; ?>
                                            <?php if (get_post_type() === 'annual_events') : ?>
                                                <p>
                                                    <a href="<?php echo get_home_url() ?>/saasboomi-annual-2021/" class="primary-btn primary-btn-dark btn-large">Explore</a>
                                                </p>
                                            <?php else : ?>
                                                <p>
                                                    <a href="<?php echo get_permalink(); ?>" class="primary-btn primary-btn-dark btn-large">Explore</a>
                                                </p>
                                            <?php endif; ?>
                                        </div>
                                        <div class="col-12 col-md-7 col-md-7 right-blk">
                                            <?php if (get_field('event_dates_from_date')) : ?>
                                                <h6 class="heading4">
                                                    <?php echo date('jS F Y', strtotime(get_field('event_dates')['from_date'])) ?>
                                                    <span class="paragraph d-block d-sm-none">
                                                        Virtual Event
                                                    </span>
                                                </h6>
                                            <?php endif; ?>
                                            <div class="speakers-wrapper">
                                                <p class="paragraph virtual-event">
                                                    Virtual Event
                                                </p>
                                                <?php
                                                    $speakers = get_field('speakers');
                                                    // var_dump($speakers);
                                                    $counter = 0;
                                                    if ($speakers && count($speakers)) :
                                                ?>
                                                    <div class="row speakers-row">
                                                        <?php
                                                        foreach ($speakers as $speaker) :
                                                        ?>
                                                            <?php
                                                            $counter++;
                                                            if ($counter <= 2) :
                                                            ?>
                                                                <div class="col-6 col-sm-6 col-md-6">
                                                                    <a href="<?php if (get_field('linkedin', $speaker->ID)) : ?> <?php echo get_field('linkedin', $speaker->ID) ?> <?php else : ?> javascript:void(0) <?php endif; ?>" class="speaker-card-wrapper" target="_blank">
                                                                        <?php if (get_the_post_thumbnail_url($speaker)) : ?>
                                                                            <img src="<?php echo get_the_post_thumbnail_url($speaker) ?>" alt="Image" />
                                                                        <?php else : ?>
                                                                            <img src="<?php echo get_template_directory_uri(); ?>/img/placeholder_annual.svg" alt="Image" />
                                                                        <?php endif; ?>
                                                                        <h4 class="heading4"><?php echo $speaker->post_title ?></h4>
                                                                        <h5 class="support-text">
                                                                            <?php echo get_field('designation', $speaker->ID) ?>,
                                                                            <?php echo get_field('company', $speaker->ID) ?>
                                                                        </h5>
                                                                        <p class="support-text hidden">
                                                                            <?php echo get_field('responsibility', $speaker->ID) ?>,
                                                                            SaaSBOOMi
                                                                        </p>
                                                                    </a>
                                                                </div>
                                                            <?php endif; ?>
                                                        <?php endforeach; ?>
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                            <?php $counter = 0; ?>
                                            <?php $counter++;
                                            if ($speakers && count($speakers) > 2) : ?>
                                                <p class="support-text speaker-count text-right">
                                                    <span class="count"><?php echo count($speakers) - 2; ?></span>+ Speakers
                                                </p>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <?php endif; ?>
                                <?php endwhile;
                                wp_reset_postdata(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <section class="by-the-community-section">
        <div class="container">
            <div class="row title-row">
                <div class="col-12">
                    <h3 class="heading2 section-title">By the Community, For the Community</h3>
                </div>
            </div>
            <div class="row content-row flex-not-centered">
                <div class="col-12 col-md-6 col-sm-6 flex-not-centered">
                    <a href="<?php echo get_permalink(348); ?>" class="card-wrapper">
                        <div class="community-point row one">
                            <div class="col-8 col-md-8 col-sm-8">
                                <h3 class="heading4 title">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/menu_icon.svg" />
                                    <span>Awards</span>
                                </h3>
                                <p class="paragraph">Annual awards to recognize deserving Indian SaaS startups</p>
                            </div>
                            <div class="col-4 col-md-4 col-sm-4 img-wrapper text-right">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/awards_featured_img.png" class="icon" />
                            </div>
                        </div>
                        <img class="circle-bg" src="<?php echo get_template_directory_uri(); ?>/img/past_events_circle_bg.svg" />
                    </a>
                </div>
                <div class="col-12 col-md-6 col-sm-6 flex-not-centered">
                    <a href="<?php echo get_permalink(355); ?>" class="card-wrapper">
                        <div class="community-point row two">
                            <div class="col-8 col-md-8 col-sm-8">
                                <h3 class="heading4 title">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/menu_icon.svg" />
                                    <span>Suraksha</span>
                                </h3>
                                <p class="paragraph">Comprehensive and Affordable Employee health Insuarance</p>
                            </div>
                            <div class="col-4 col-md-4 col-sm-4 img-wrapper text-right">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/suraksha_featured_bg.png" class="icon" />
                            </div>
                        </div>
                        <img class="circle-bg" src="<?php echo get_template_directory_uri(); ?>/img/past_events_circle_bg.svg" />
                    </a>
                </div>
                <div class="col-12 col-md-4 col-sm-4 flex-not-centered">
                    <a href="<?php echo get_permalink(350); ?>" class="card-wrapper">
                        <div class="community-point row three">
                            <div class="col-8 col-md-8 col-sm-8">
                                <h3 class="heading4 title">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/menu_icon.svg" />
                                    <span>GrowthX</span>
                                </h3>
                                <p class="support-text">Personalized Coaching Program for SaaS startups</p>
                            </div>
                            <div class="col-4 col-md-4 col-sm-4 img-wrapper text-right">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/growthx_featured_bg.png" class="icon" />
                            </div>
                        </div>
                        <img class="circle-bg" src="<?php echo get_template_directory_uri(); ?>/img/past_events_circle_bg.svg" />
                    </a>
                </div>
                <div class="col-12 col-md-4 col-sm-4 flex-not-centered">
                    <a href="<?php echo get_permalink(357); ?>" class="card-wrapper">
                        <div class="community-point row four">
                            <div class="col-8 col-md-6 col-sm-6">
                                <h3 class="heading4 title">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/menu_icon.svg" />
                                    <span>Saathi</span>
                                </h3>
                                <p class="support-text">With Founders When Nobody Else is</p>
                            </div>
                            <div class="col-4 col-md-6 col-sm-6 img-wrapper text-right">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/saathi_featured_bg.png" class="icon" />
                            </div>
                        </div>
                        <img class="circle-bg" src="<?php echo get_template_directory_uri(); ?>/img/past_events_circle_bg.svg" />
                    </a>
                </div>
                <div class="col-12 col-md-4 col-sm-4 flex-not-centered">
                    <a href="<?php echo get_permalink(353); ?>" class="card-wrapper ">
                        <div class="community-point row five">
                            <div class="col-8 col-md-7 col-sm-7">
                                <h3 class="heading4 title">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/menu_icon.svg" />
                                    <span>Debt Fund</span>
                                </h3>
                                <p class="support-text">Support, Mentor, and Guide SaaS Startups</p>
                            </div>
                            <div class="col-4 col-md-5 col-sm-5 img-wrapper text-right">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/debt_fund_featured_bg.png" class="icon" />
                            </div>
                        </div>
                        <img class="circle-bg" src="<?php echo get_template_directory_uri(); ?>/img/past_events_circle_bg.svg" />
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="culture-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <a href="<?php echo get_home_url()?>/culture" class="image-block background-prop">
                        <h2 class="heading2">What we live by</h2>
                        <p class="paragraph">Discover our 6 core values, and the community ethos of our founders and volunteers</p>
                        <span class="primary-btn primary-btn-light learn-more-btn btn-large">LEARN MORE</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="related-blogs-section">
        <div class="container container-wrapper">
            <div class="row title-row text-center">
                <div class="col-12">
                    <h2 class="heading2">Learn From Experts</h2>
                </div>
            </div>
            <div class="row content-row flex-not-centered">
                <?php
                $args = array(
                    'post_type' => array('post'),
                    'posts_per_page' => 3,
                    'post_status' => 'publish',
                    // 'meta_key'	=> 'published_date',
                    // 'orderby'	=> 'meta_value',
                    // 'order'		=> 'desc',
                    // 'meta_query' => array(
                    //     array(
                    //         'key' => 'featured_blog',
                    //         'compare' => '=',
                    //         'value' => '1',
                    //     )
                    // ),
                );
                $the_query = new WP_Query($args);
                if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post();
                ?>
                        <div class="col-sm-6 col-md-6 col-lg-4 col-12 flex-not-centered">
                            <?php if (get_post_type() === 'post') : ?>
                                <a href="<?php echo get_permalink(); ?>" class="card-wrapper">
                                    <div class="img-blk">
                                        <?php if (get_the_post_thumbnail_url()) : ?>
                                            <img class="featured-img" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_the_title(); ?>">
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
                                            $categories = get_the_terms(get_the_ID(), 'podcasts-category');
                                            if ($categories) :
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
                                            <?php endif; ?>
                                        </div>
                                        <h3 class="heading4"><?php echo get_the_title(); ?></h3>
                                        <p class="support-text date-info">
                                            <?php if (get_field('published_date')) : ?>
                                                <span class="date">
                                                    <?php $date = DateTime::createFromFormat('d/m/Y', get_field('published_date')); ?>
                                                    <?php echo $date->format('d M Y'); ?>
                                                </span>
                                            <?php else : ?>
                                                <span class="date">
                                                    <?php echo get_the_date('d M Y'); ?>
                                                </span>
                                            <?php endif; ?>
                                            <?php if (get_field('read_time')) : ?>
                                                <span class="dot-blk">•</span>
                                                <span class="read-time"> <?php echo get_field('read_time'); ?></span>
                                            <?php endif; ?>
                                        </p>
                                        <ul class="list-inline flex-centered author-info-list">
                                            <?php if (get_field('author_image') || get_field('author_designation') || get_field('author_company') || get_field('about_author') || get_field('author_linkedin_link')) : ?>
                                                <li class="author-blk flex-centered">
                                                    <?php if (get_field('author_image')) : ?>
                                                        <img src="<?php echo get_field('author_image')['url'] ?>" data-toggle="tooltip" data-placement="bottom" title="<?php echo get_field('author_name'); ?>" alt="image" />
                                                    <?php else : ?>
                                                        <img src="<?php echo get_template_directory_uri(); ?>/img/default_profile_picture.png" data-toggle="tooltip" data-placement="bottom" title="<?php echo get_field('author_name'); ?>" alt="Profile Pic" />
                                                    <?php endif; ?>
                                                    <h4 class="support-text" <?php if ((!get_field('author_name_2'))) : ?> style="display:block;" <?php endif; ?>>
                                                        <?php echo get_field('author_name') ?>
                                                    </h4>
                                                </li>
                                            <?php endif; ?>
                                            <?php if (get_field('author_image_2') || get_field('author_designation_2') || get_field('author_company_2') || get_field('about_author_2') || get_field('author_linkedin_link_2')) : ?>
                                                <li class="author-blk flex-centered">
                                                    <?php if (get_field('author_image_2')) : ?>
                                                        <img src="<?php echo get_field('author_image_2')['url'] ?>" data-toggle="tooltip" data-placement="bottom" title="<?php echo get_field('author_name_2'); ?>" alt="image" />
                                                    <?php else : ?>
                                                        <img src="<?php echo get_template_directory_uri(); ?>/img/default_profile_picture.png" data-toggle="tooltip" data-placement="bottom" title="<?php echo get_field('author_name_2'); ?>" alt="Profile Pic" />
                                                    <?php endif; ?>
                                                    <h4 class="support-text">
                                                        <?php echo get_field('author_name_2') ?>
                                                    </h4>
                                                </li>
                                            <?php endif; ?>
                                            <?php if (get_field('author_image_3') || get_field('author_designation_3') || get_field('author_company_3') || get_field('about_author_3') || get_field('author_linkedin_link_3')) : ?>
                                                <li class="author-blk flex-centered">
                                                    <?php if (get_field('author_image_3')) : ?>
                                                        <img src="<?php echo get_field('author_image_3')['url'] ?>" data-toggle="tooltip" data-placement="bottom" title="<?php echo get_field('author_name_3'); ?>" alt="image" />
                                                    <?php else : ?>
                                                        <img src="<?php echo get_template_directory_uri(); ?>/img/default_profile_picture.png" data-toggle="tooltip" data-placement="bottom" title="<?php echo get_field('author_name_3'); ?>" alt="Profile Pic" />
                                                    <?php endif; ?>
                                                    <h4 class="support-text">
                                                        <?php echo get_field('author_name_3') ?>
                                                    </h4>
                                                </li>
                                            <?php endif; ?>
                                            <?php if (get_field('author_image_4') || get_field('author_designation_4') || get_field('author_company_4') || get_field('about_author_4') || get_field('author_linkedin_link_4')) : ?>
                                                <li class="author-blk flex-centered">
                                                    <?php if (get_field('author_image_4')) : ?>
                                                        <img src="<?php echo get_field('author_image_4')['url'] ?>" data-toggle="tooltip" data-placement="bottom" title="<?php echo get_field('author_name_4'); ?>" alt="image" />
                                                    <?php else : ?>
                                                        <img src="<?php echo get_template_directory_uri(); ?>/img/default_profile_picture.png" data-toggle="tooltip" data-placement="bottom" title="<?php echo get_field('author_name_4'); ?>" alt="Profile Pic" />
                                                    <?php endif; ?>
                                                    <h4 class="support-text">
                                                        <?php echo get_field('author_name_4') ?>
                                                    </h4>
                                                </li>
                                            <?php endif; ?>
                                        </ul>
                                    </div>
                                </a>
                            <?php else : ?>
                                <a href="<?php echo get_permalink(); ?>" class="podcast-card-wrapper">
                                    <?php if (get_the_post_thumbnail_url()) : ?>
                                        <img class="speaker-img" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_the_title(); ?>">
                                    <?php else : ?>
                                        <img class="speaker-img" src="<?php echo get_template_directory_uri(); ?>/img/podcast_placeholder.png" alt="Image" />
                                    <?php endif; ?>
                                    <div class="episode-info">
                                        <p>
                                            <span class="heading5">EP.</span> <br />
                                            <?php if (get_field('episode_number')) : ?>
                                                <span class="heading3 episode-no"><?php echo get_field('episode_number') ?></span>
                                            <?php endif; ?>
                                        </p>
                                        <h5 class="heading4">
                                            <?php echo mb_strimwidth(wp_strip_all_tags(get_the_content()), 0, 60, ' ...') ?></h5>
                                    </div>
                                    <div class="content-wrapper">
                                        <div class="img-blk" style="display: none !important">
                                            <img class="speaker-img" src="<?php echo get_template_directory_uri(); ?>/img/default_blog.png" alt="Image" />
                                            <img class="speaker-img" src="<?php echo get_template_directory_uri(); ?>/img/default_profile_picture.png" alt="Image" />
                                            <img class="profile-circle-img" src="<?php echo get_template_directory_uri(); ?>/img/complete_circle_bg.svg" alt="Image" />
                                        </div>
                                        <div class="bottom-blk">
                                            <div class="tag-blk">
                                                <?php
                                                $taxonomies = get_the_terms(get_the_ID(), 'podcasts-category');
                                                if ($taxonomies) :
                                                ?>
                                                    <ul class="list-inline tags-list">
                                                        <li class="list-inline-item">
                                                            <img class="tag-img" src="<?php echo get_template_directory_uri(); ?>/img/tag.svg" alt="Tag" />
                                                        </li>
                                                        <?php foreach ($taxonomies as $key => $taxonomy) : ?>
                                                            <?php if (!($taxonomy->slug == 'uncategorized')) : ?>
                                                                <li class="list-inline-item">
                                                                    <span class="support-text"><?php echo $taxonomy->name; ?></span>
                                                                    <span class="support-text comma">, </span>
                                                                </li>
                                                            <?php endif; ?>
                                                        <?php endforeach; ?>
                                                    </ul>
                                                <?php endif; ?>
                                            </div>
                                            <img class="podcast-video-img" src="<?php echo get_template_directory_uri(); ?>/img/play_podcast.svg" alt="Play Podcasts" />
                                        </div>
                                    </div>
                                    <div class="overlay background-prop" style="background:linear-gradient(rgba(255,243,224,0.75) 10%,rgba(0,0,0,0) 80%, rgba(0,0,0,1) 100%),<?php if (get_the_post_thumbnail_url()) : ?> url('<?php echo get_the_post_thumbnail_url(); ?>'); <?php else : ?> url('<?php echo get_template_directory_uri() ?>/img/podcast_placeholder.png');  <?php endif; ?>">
                                    </div>
                                </a>
                            <?php endif; ?>
                        </div>
                    <?php endwhile;
                    wp_reset_postdata();
                else : ?>
                <?php endif; ?>
            </div>
            <div class="row view-all-row text-center">
                <div class="col-md-12">
                    <p class="show-more-btn">
                        <a href="<?php echo get_permalink(663); ?>" class="secondary-btn btn-large" id="exploreMore">
                            Explore More
                        </a>
                    </p>
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
                            'order'        => 'Desc',
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
                                                <h4 class="heading4"><?php echo mb_strimwidth(get_the_title(), 0, 55, ' ...') ?>
                                                </h4>
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
                    <?php echo get_field('banner_watch_video_link') ?>
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
            stagePadding: 30,
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

        $('.scenario').on('click', function() {
            var id = $(this).attr('id');
            $('.scenario').removeClass('active');
            $(this).addClass('active');
            $('.platform').css('display', 'none');
            $('.' + id).css('display', 'flex');
        });

    });
</script>

<?php get_footer(); ?>