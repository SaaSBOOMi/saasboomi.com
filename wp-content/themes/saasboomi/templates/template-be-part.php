<?php
/*
* Template Name: Be Part of SaaSBOOMi
*/ ?>

<?php get_header(); ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/annual-events-page.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/be-part.css">

<div class="event-annual-page be-part-page">
    <section class="event-banner-section be-part-banner-section">
        <div class="container container-wrapper">
            <div class="row flex-centered">
                <div class="col-sm-6 col-md-6 col-lg-6 col-12 left-blk">
                    <h1 class="heading2">Join Us in Building the future of SaaS Ecosystem</h1>
                    <p class="paragraph sub-title">As a community share, learn and grow from our SaaS Ecosystem. Let’s pay it forward!</p>
                    <ul class="list-inline">
                        <li class="list-inline-item">
                            <a href="<?php echo get_permalink(1039); ?>" class="primary-btn primary-btn-dark btn-large">
                                Become a Volunteer
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="<?php echo get_permalink(1037); ?>)" class="secondary-btn btn-large">
                                Partner with us
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-6 col-12 right-blk">
                    <div class="vedio-blk background-prop" data-toggle="modal" data-target="#vedioModal">
                        <svg class="complete-vedio-bg" width="455" height="470" viewBox="0 0 330 341" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M294.01 0H0V341H329.579V0H294.01ZM294.01 0C305.425 0 315.386 8.94723 315.975 20.941L329.552 297.513C330.221 311.147 318.436 322.096 304.875 320.439L41.3868 288.249C28.7986 286.711 20.1061 274.899 22.3916 262.435L57.5694 70.5995C59.1337 62.0687 65.5663 55.251 73.9977 53.1878L288.731 0.641046C290.506 0.206772 292.274 0 294.01 0Z" fill="white"/>
                            <path d="M40.3552 164.474L3.95611 216.954C-4.24666 228.78 0.841749 245.196 14.2813 250.264L23.9546 253.912L40.3552 164.474Z" fill="#FF5860"/>
                            <path d="M150.297 301.555L251.127 339.577C263.97 344.42 278.049 336.421 280.523 322.877L281.49 317.582L150.297 301.555Z" fill="#FF5860"/>
                            <path d="M320.148 105.957L325.946 74.2185C327.536 65.5161 323.863 57.3724 317.528 52.5708L320.148 105.957Z" fill="#FF5860"/>
                        </svg>
                        <div class="featured-img-blk">
                        <?php if(get_field('banner_banner_thumbnail')): ?>
                            <img class="featured-vedio-img" src="<?php echo get_field('banner_banner_thumbnail')["url"]?>" alt="be part banner"/>
                        <?php else: ?>
                            <img class="featured-vedio-img" src="<?php echo get_template_directory_uri(); ?>/img/be_part_banner.png" alt="be part banner"/>
                        <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="features-section">
        <div class="container">
            <div class="row">
                <div class="col-md-4 flex-not-centered">
                    <div class="card-item">
                        <img src="<?php echo get_template_directory_uri()?>/img/network.svg"  alt="Network"/>
                        <h4 class="heading4">Network</h4>
                        <p class="paragraph">Connect with the top SaaS leaders and experts, gain access to potential partners and investors.</p>
                    </div>
                </div>
                <div class="col-md-4 flex-not-centered">
                    <div class="card-item grow-card">
                        <img src="<?php echo get_template_directory_uri()?>/img/grow.svg"  alt="Grow"/>
                        <h4 class="heading4">Grow</h4>
                        <p class="paragraph">Connect with the top SaaS leaders and experts, gain access to potential partners and investors.</p>
                    </div>
                </div>
                <div class="col-md-4 flex-not-centered">
                    <div class="card-item share-card">
                        <img src="<?php echo get_template_directory_uri()?>/img/share.svg"  alt="Share"/>
                        <h4 class="heading4">Share</h4>
                        <p class="paragraph">Connect with the top SaaS leaders and experts, gain access to potential partners and investors.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="be-part-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="heading3 section-title">Be a part of SaaSBOOMi</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 flex-not-centered">
                    <div class="wrapper">
                        <img src="<?php echo get_template_directory_uri()?>/img/volunteer_with_us.png" alt="Volunteer with Us" />
                        <h5 class="heading4">Volunteer with Us</h5>
                        <p class="paragraph">We are team of passionate volunteers who are part of SaaSBOOMi because we truly believe in the ethos of #PayItForward. Interested to be a part of this group? Apply now and we will be in touch with you shortly</p>
                        <p>
                            <a href="<?php echo get_permalink(1039); ?>" class="primary-btn primary-btn-dark btn-large">
                                Apply now
                            </a>
                        </p>
                    </div>
                </div>
                <div class="col-md-6 flex-not-centered">
                    <div class="wrapper">
                        <img src="<?php echo get_template_directory_uri()?>/img/partner_with_us.png" alt="Partner with Us" />
                        <h5 class="heading4">Partner with Us</h5>
                        <p class="paragraph">We need your support in scaling the SaaSBOOMi community and have several sponsorship options for you to choose from. Apply now and we will be in touch with you shortly</p>
                        <p>
                            <a href="<?php echo get_permalink(1037); ?>" class="primary-btn primary-btn-dark btn-large">
                                Apply now
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="code-of-conduct-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="heading3 section-title">Code of Conduct for the SaaSBOOMi Volunteer</h2>
                    <div class="row">
                        <div class="col-md-6">
                            <ul class="list-unstyled">
                                <li class="paragraph">Help foster a safe, inclusive and healthy work environment for all Volunteers and members.</li>
                                <li class="paragraph">We know circumstances change and if you are unable to fulfil your Volunteer commitments, inform at the earliest. Err on the side of stepping aside if you are unsure of whether you can contribute.</li>
                                <li class="paragraph">Be deliberate and offer to volunteer your time and effort only if you are sure of fulfilling the commitment.</li>
                                <li class="paragraph">If you feel someone is not contributing, approach the situation from a place of kindness. Offer help or support if you can. Pushiness tends to not be effective in a Volunteer community.</li>
                                <li class="paragraph">Check your bias. Your way of doing things may not be the only way or even the right way. Think before sharing feedback.</li>
                                <li class="paragraph">Document the work you do, so the Volunteers who come after do not have to start from scratch.</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul class="list-unstyled">
                                <li class="paragraph">Actively seek a variety of views and opinions when taking on a new initiative. Seek diversity and be radically inclusive.</li>
                                <li class="paragraph">Start from a place of trust. Volunteers are altruistically offering time and effort. If work is not getting done or if tasks are being handled incorrectly, focus on the work and not the person when offering feedback. Share feedback respectfully.</li>
                                <li class="paragraph">Be an enthusiastic problem solver and search for long-term, effective and sustainable solutions.</li>
                                <li class="paragraph">Be an enabler and avoid the spotlight. The Founders are at the core of the Community and Volunteers contribute by creating an environment where Founders are supported.</li>
                                <li class="paragraph">Protect the privacy of data and information that has been shared confidentially by Founders and members.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="be-part-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row join-friends-row flex-centered">
                        <div class="col-md-9">
                            <div class="content-block flex-centered">
                                <div class="">
                                    <img class="join-friends" src="<?php echo get_template_directory_uri()?>/img/join_friends.png" alt="join friends image" />
                                    <h4 class="heading4 title">Join Friends of SaaSBOOMi</h4>
                                    <p class="paragraph">Join our telegram group of SaaS founders, enthusiasts and all the ecosystem players to discuss, debate, learn, and help each other on all things SaaS.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 text-right">
                            <a href="https://t.me/joinchat/FXsoPVI1c9Ljc20LjSZ52w" target="_blank" class="primary-btn primary-btn-dark btn-large">
                                Join Now
                            </a>
                        </div>
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
