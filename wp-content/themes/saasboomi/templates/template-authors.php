<?php
/*
* Template Name: Authors
*/ ?>
<?php get_header(); ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/authors.css">

<div class="authors-page">
    <section class="hero-section flex-centered">
        <div class="container">
            <div class="row">
                <div class="col-md-6 flex-centered">
                    <h1 class="heading1">Authors</h1> 
                </div>
                <div class="col-md-6 hero-right">
                    <img class="hero-image" src="<?php echo get_template_directory_uri();?>/img/author_hero.png" alt="hero"/>
                </div>
            </div>
        </div>
    </section>
    <section class="authors-listing">
        <div class="container">
            <div class="row">
                <?php for($i=0; $i<7; $i++): ?>
                <div class="col-md-4">
                    <a class="author-item">
                        <div class="author-image">
                            <img src="<?php echo get_template_directory_uri();?>/img/pallav.jpg" alt="author"/>
                        </div>
                        <h3 class="heading3">Pallav Nadhani</h3>
                        <p class="paragraph">Fusioncharts</p>
                    </a>
                </div>
                <?php endfor; ?>
            </div>
        </div>
    </section>
    <?php get_template_part('templates/template-newsletter'); ?>
</div>
<?php get_footer(); ?>