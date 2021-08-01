<?php
/*
* Template Name: SaaSTreasure
*/ ?>
<?php get_header(); ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/treasure.css">

<!-- flush_rewrite_rules() -->
<div class="treasure-page">
    <section class="hero-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="heading1 text-center">SaaSTreasure</h1>
                    <p class="paragraph text-center">This document is password protected. To gain access join our slack community</p>
                </div>
            </div>
        </div>
    </section>
    <section class="treasure-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="treasure-wrapper">
                        <img class="lock" src="<?php echo get_template_directory_uri()?>/img/lock.svg" alt="lock" />
                        <div class="row flex-centered">
                            <div class="col-md-9">
                                <h2 class="heading2">The Treasure</h2>
                                <a href="<?php echo get_home_url()?>/join-community-form/" class="primary-btn primary-btn-dark btn-small join-btn">Join The Community</a>
                            </div>
                            <div class="col-md-3 right-blk">
                                <img src="<?php echo get_template_directory_uri() ?>/img/treasure.svg" alt="treasure"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="companies-section text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="heading1 text-center section-title">Companies providing Perks</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="companies-wrapper">
                        <ul class="companies-list list-one list-inline">
                            <li class="list-inline-item">
                                <img src="<?php echo get_template_directory_uri() ?>/img/freshworks.png" alt="freshwork" />
                            </li>
                            <li class="list-inline-item">
                                <img src="<?php echo get_template_directory_uri() ?>/img/github.png" alt="github" />
                            </li>
                        </ul>
                        <ul class="companies-list list-two list-inline">
                            <li class="list-inline-item">
                                <img src="<?php echo get_template_directory_uri() ?>/img/kodo.png" alt="kodo" />
                            </li>
                            <li class="list-inline-item">
                                <img src="<?php echo get_template_directory_uri() ?>/img/msstartups.png" alt="microsoft for startups" />
                            </li>
                            <li class="list-inline-item">
                                <img src="<?php echo get_template_directory_uri() ?>/img/notion.png" alt="notion" />
                            </li>
                            <li class="list-inline-item">
                                <img src="<?php echo get_template_directory_uri() ?>/img/browserstack.png" alt="freshwork" />
                            </li>
                        </ul>
                        <ul class="companies-list list-three list-inline">
                            <li class="list-inline-item">
                                <img src="<?php echo get_template_directory_uri() ?>/img/twilio.png" alt="freshwork" />
                            </li>
                            <li class="list-inline-item">
                                <img src="<?php echo get_template_directory_uri() ?>/img/brex.png" alt="freshwork" />
                            </li>
                        </ul>
                    </div>
                    <div class="companies-wrapper">
                        <ul class="companies-list list-one list-inline">
                            <li class="list-inline-item">
                                <img src="<?php echo get_template_directory_uri() ?>/img/chargebee.png" alt="freshwork" />
                            </li>
                            <li class="list-inline-item">
                                <img src="<?php echo get_template_directory_uri() ?>/img/mercury.png" alt="freshwork" />
                            </li>
                        </ul>
                        <ul class="companies-list list-two list-inline">
                            <li class="list-inline-item">
                                <img src="<?php echo get_template_directory_uri() ?>/img/signeasy.png" alt="freshwork" />
                            </li>
                            <li class="list-inline-item">
                                <img src="<?php echo get_template_directory_uri() ?>/img/stripe.png" alt="freshwork" />
                            </li>
                            <li class="list-inline-item">
                                <img src="<?php echo get_template_directory_uri() ?>/img/vwo.png" alt="freshwork" />
                            </li>
                        </ul>
                        <ul class="companies-list list-three list-inline">
                            <li class="list-inline-item">
                                <img src="<?php echo get_template_directory_uri() ?>/img/hubspot.png" alt="hubspot" />
                            </li>
                            <li class="list-inline-item">
                                <img src="<?php echo get_template_directory_uri() ?>/img/svb.png" alt="svb" />
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <iframe class="airtable-embed" src="https://airtable.com/embed/shrmTwohFJAVTxFMq?backgroundColor=yellow&viewControls=on" frameborder="0" onmousewheel="" width="100%" height="533" style="background: transparent; border: 1px solid #ccc;"></iframe>
                </div>
            </div>
        </div>
    </section>
    <br/>
    <br/>
    <br/>
    <br/>
</div>

<?php get_footer(); ?>
