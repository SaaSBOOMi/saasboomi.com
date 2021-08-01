<?php
/*
* Template Name: Community
*/ ?>

<?php get_header(); ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/annual-events-page.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/community.css">

<div class="event-annual-page community-page">
    <section class="event-banner-section community-banner-section">
        <div class="container container-wrapper">
            <div class="row flex-centered">
                <div class="col-sm-6 col-md-6 col-lg-6 col-12 left-blk">
                    <p class="heading5 pre-title">#IndianSaaStribe <a href="https://slack.com/signin#/signin" target="_blank">Slack</a> Community</p>
                    <h1 class="heading2">Become a part of India’s largest community of SaaS Founders</h1>
                    <ul class="list-inline">
                        <li class="list-inline-item">
                            <a href="<?php echo get_permalink(1146); ?>" class="primary-btn primary-btn-dark btn-large">
                                Join The Community
                            </a>
                        </li>
                    </ul>
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
                            <img class="featured-vedio-img" src="<?php echo get_template_directory_uri(); ?>/img/community_banner.png" alt="community banner"/>
                        <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="why-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="section-title heading3 text-center">Why Join this Community?</h2>
                </div>
            </div>
            <div class="row card-row">
                <div class="col-md-4">
                    <div class="card-item">
                        <img src="<?php echo get_template_directory_uri()?>/img/proactive_support.png" alt="Proactive Support"/>
                        <h3 class="heading4">Proactive Support</h3>
                        <p class="paragraph">You can count on full fledge support from</p>
                        <ul class="list-unstyled">
                            <li class="support-text">Established SaaS Founders</li>
                            <li class="support-text">Peer SaaS Founders</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card-item">
                        <img src="<?php echo get_template_directory_uri()?>/img/mentoring_programs.png" alt="Proactive Support"/>
                        <h3 class="heading4">Mentoring Programs</h3>
                        <p class="paragraph">You’ll get to attend </p>
                        <ul class="list-unstyled">
                            <li class="support-text">Playbook Workshop</li>
                            <li class="support-text">Global SaaS Summits</li>
                            <li class="support-text">Regional Events</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card-item">
                        <img src="<?php echo get_template_directory_uri()?>/img/exclusive_content.png" alt="Proactive Support"/>
                        <h3 class="heading4">Exclusive Content</h3>
                        <p class="paragraph">You’ll get access to</p>
                        <ul class="list-unstyled">
                            <li class="support-text">Blogs</li>
                            <li class="support-text">Podcasts</li>
                            <li class="support-text">Monthly Recurring Reports</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row join-community-row">
                <div class="col-md-12">
                    <div class="slack-wrpper">
                        <img class="pattern-image" src="<?php echo get_template_directory_uri()?>/img/past_events_circle_bg.svg" alt="slack logo" />
                        <div class="row flex-centered">
                            <div class="col-md-9 slack-content-block">
                                <img class="slack-logo" src="<?php echo get_template_directory_uri()?>/img/slack_img.png" alt="slack logo" />
                                <p class="heading5">Ask Questions. Collaborate. Grow.</p>
                                <h4 class="heading2">#IndianSaaStribe Slack Community</h4>
                                <p class="paragraph">Join the conversation with our 100+ "Wicked Smart" Indian SaaS Founders on Slack!</p>
                            </div>
                            <div class="col-md-3 text-right">
                                <a href="<?php echo get_permalink(1146); ?>" class="primary-btn primary-btn-dark btn-large">
                                    Join The Community
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="members-section">
        <div class="container">
            <div class="row title-row">
                <div class="col-md-12">
                    <h2 class="section-title heading2 text-center">Our <span>1000+</span> Indian SaaS tribe Companies</h2>
                </div>
            </div>
            <div class="row airtable-row">
                <div class="col-md-12">
                  <div class="airtable-wrapper">
                    <iframe class="airtable-embed" src="https://airtable.com/embed/shrewNWFeqT9s3oRd?backgroundColor=gray&viewControls=on" frameborder="0" onmousewheel="" width="100%" height="900" style="background: transparent; border: 1px solid #ccc;"></iframe>
                  </div>
                </div>
            </div>
        </div>
    </section>
    <?php get_template_part('templates/template-newsletter'); ?>

</div>

<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/parsley.min.js"></script>


<script type="text/javascript">
  $(document).ready(function () {
    $('#upcomingEventNotifyForm').parsley();
    $('#upcomingEventNotifyForm #fname').attr('required',true).attr('data-parsley-required-message','Please enter Full Name').attr('data-parsley-minlength-message','First Name must be of minimum 3 characters');
    $('#upcomingEventNotifyForm #email').attr('required',true).attr('data-parsley-required-message','Please enter Email Address').attr('data-parsley-type-message','Please enter valid Email');
  });
</script>

<?php get_footer(); ?>
