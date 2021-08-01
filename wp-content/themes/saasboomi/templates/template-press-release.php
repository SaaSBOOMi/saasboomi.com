<?php
/*
* Template Name: Press release
*/ ?>

<?php get_header(); ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/annual-events-page.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/knowledge-hub-page.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/animate.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/owl.carousel.min.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/select2.min.css">
<!-- flush_rewrite_rules() -->
<div class="event-annual-page knowledge-hub-page press-release-page">
  <section class="banner-section">
    <div class="container container-wrapper">
      <div class="row title-row flex-centered">
        <div class="col-sm-6 col-md-6 col-lg-6 col-12 ">
          <h1 class="heading1">Press Release</h1>
          <p class="paragraph">
            Know all the updates and the informations from us.
          </p>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-6 col-12 ">
          <div class="img-blk text-right">
            <img class="featured-img" src="<?php echo get_template_directory_uri(); ?>/img/press_release_featured_img.png"  alt="Knowledge Hub" />
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="related-blogs-section related-press-section">
    <div class="container container-wrapper">
      <div class="row title-row hidden">
        <div class="col-12">
          <h2 class="heading2">Featured Blog Posts</h2>
        </div>
      </div>
      <div class="row content-row flex-not-centered">
        <?php
                $args = array(
                    'post_type' => 'press_release',
                    'posts_per_page' => -1,
                    'post_status' => 'publish',
                    'order'		=> 'desc',
                );
                $the_query = new WP_Query( $args );
                if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();
        ?>
        <div class="col-sm-6 col-md-6 col-lg-4 col-12 flex-not-centered">
          <a href="<?php echo get_permalink(); ?>" class="card-wrapper">
            <div class="img-blk">
              <?php if(get_the_post_thumbnail_url()): ?>
                  <img class="featured-img" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_the_title(); ?>">
              <?php else: ?>
                <img class="featured-img" src="<?php echo get_template_directory_uri(); ?>/img/press_release_placeholder.png"  alt="Image" />
              <?php endif; ?>
            </div>
            <div class="content-blk">
              <?php
              $tags = get_the_tags();
              if($tags):
              ?>
              <div class="tag-blk hidden">
                  <ul class="list-inline tags-list">
                      <?php foreach($tags as $tag): ?>
                      <li class="list-inline-item">
                          <span class="support-text"><?php echo $tag->name ?></span>
                      </li>
                      <?php endforeach; ?>
                  </ul>
              </div>
              <?php endif; ?>
              <h3 class="heading4"><?php echo get_the_title(); ?></h3>
              <p class="support-text date-info">
                <?php if(get_field('published_date')): ?>
                <span class="date">
                  <?php $date = DateTime::createFromFormat('d/m/Y', get_field('published_date')); ?>
                  <?php echo $date->format('d M Y'); ?>
                </span>
                <?php else: ?>
                  <span class="date">
                  <?php echo get_the_date( 'd M Y' ); ?>
                  </span>
                <?php endif; ?>
              </p>
            </div>
          </a>
        </div>
        <?php endwhile; wp_reset_postdata(); else : ?>
        <?php endif; ?>
      </div>
    </div>
  </section>

  <?php get_template_part('templates/template-newsletter'); ?>


</div>

<?php get_footer(); ?>
