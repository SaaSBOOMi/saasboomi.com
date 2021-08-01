<?php
/*
* Template Name: Authors Detail
*/ ?>
<?php get_header(); ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/authors.css">

<div class="authors-detail-page">
    <section class="hero-section flex-centered">
       
    </section>
    <section class="authors-detail">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="row profile-row">
                        <div class="col-md-12">
                            <div class="profile-wrapper text-center">
                                <a href="javascript:void(0)" class="back-btn heading5"><img src="<?php echo get_template_directory_uri(); ?>/img/back_arrow.svg" />Back</a>
                                <div class="author-item">
                                    <div class="author-image">
                                        <img src="<?php echo get_template_directory_uri();?>/img/pallav.jpg" alt="author"/>
                                    </div>
                                    <h3 class="heading1 author-name">Pallav Nadhani</h3>
                                    <p class="paragraph designation">
                                        <span>Author, Founder</span>
                                        <span class="post-count">10 Posts</span>
                                    </p>
                                    <ul class="list-inline social-links">
                                        <li class="list-inline-item">
                                            <a href="javascript:void(0)">
                                                <img src="<?php echo get_template_directory_uri()?>/img/twitter.svg" alt="twitter icon"/>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript:void(0)">
                                                <img src="<?php echo get_template_directory_uri()?>/img/linkedin.svg" alt="twitter icon"/>
                                            </a>
                                        </li>
                                    </ul>
                                    <p class="paragraph description">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row blogs-row">
                        <div class="col-md-12">
                            <h3 class="heading3 text-center">Authored Posts</h3>
                            <div class="blogs">
                                <a href="http://localhost:8888/saasboomi_wp/podcasts/a-masterclass-in-bootstrapping-learning-and-staying-happy-with-kumar-vembu/" class="card-wrapper">
                                    <div class="row overview-row flex-not-centered">
                                        <div class="col-sm-12 col-md-5 col-lg-4 col-12 flex-not-centered">
                                            <div class="img-blk">
                                                <img class="featured-img" src="http://localhost:8888/saasboomi_wp/wp-content/uploads/2021/02/Kumar-Vembu-GoFrugal.jpg" alt="A masterclass in bootstrapping, learning and staying happy with Kumar Vembu">
                                                <p class="title support-text">
                                                <img src="http://localhost:8888/saasboomi_wp/wp-content/themes/saasboomi/img/podcast_icon_white.svg" alt="Image">
                                                <span>BLOG</span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-7 col-lg-8 col-12 flex-not-centered">
                                            <div class="content-blk">
                                                <div class="tag-blk">
                                                <ul class="list-inline tags-list">
                                                    <li class="list-inline-item">
                                                        <span class="support-text">Bootstrapped</span>
                                                    </li>
                                                </ul>
                                                </div>
                                                <h3 class="heading4">A masterclass in bootstrapping, learning and staying happy with Kumar Vembu</h3>
                                                <p class="support-text date-info">
                                                <span class="date">
                                                06 Oct 2021                            </span>
                                                <span class="dot-blk">•</span>
                                                <span class="read-time"> 1 hr 4 mins. </span>
                                                </p>
                                                <div class="description support-text">
                                                Kumar Vembu’s&nbsp;journey with Zoho during its early foundational years and later building his own startup,&nbsp;GoFrugal, offers some deep insight into India SaaS’  ...                          
                                                </div>
                                                <div class="author-blk host-blk">
                                                <ul class="list-inline flex-centered">
                                                    <li class="list-inline-item">
                                                        <img src="http://localhost:8888/saasboomi_wp/wp-content/uploads/2021/02/Kumar-Vembu-GoFrugal.jpg" alt="image">
                                                        <h4 class="support-text">
                                                            Kumar Vembu                                    
                                                        </h4>
                                                    </li>
                                                </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php get_template_part('templates/template-newsletter'); ?>
</div>
<?php get_footer(); ?>