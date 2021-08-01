<?php
/*
* Template Name: Terms and Conditions
*/ ?>

<?php get_header(); ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/policy-page.css">

<section class="policy-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h1 class="heading1 title text-center">Terms and Conditions</h1>
        <div class="dynamic-content">
          <?php while ( have_posts() ) : the_post(); ?>
            <?php the_content(); ?>
          <?php endwhile; ?>
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
