<?php get_header(); ?>

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/owl.carousel.min.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/detail-page.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/animate.css">

<div class="detail-page podcast-detail-page podcast-series-page">

  <?php
    $cat = get_query_var('term');
    $cat_name = get_queried_object()->name;
    $cat_count = get_queried_object()->count;
    $cat_slug = get_queried_object()->slug;
    // var_dump($cat_slug);
    $term_id = get_queried_object()->term_id;
  ?>

	<section class="banner-section">
    <div class="container">
      <div class="row">
        <div class="col-md-10 offset-md-1 offset-lg-2 col-lg-8 col-sm-12 col-12">
          <p class="back-btn">
            <a class="support-text" href="javascript:history.back()">
							<img src="<?php echo get_template_directory_uri(); ?>/img/prev_arrow.svg" alt="back">
              <span class="back">Back</span>
            </a>
          </p>
          <div class="tag-blk hidden">
            <?php
               $taxonomies = get_the_terms(get_the_ID(),'podcasts-category');
               if($taxonomies):
            ?>
            <ul class="list-inline tags-list">
              <?php foreach ($taxonomies as $key => $taxonomy): ?>
                <?php if(!($taxonomy->slug == 'uncategorized')) : ?>
                <li class="list-inline-item">
                  <span class="support-text"><?php echo $taxonomy->name; ?></span>
                </li>
                <?php endif; ?>
              <?php endforeach; ?>
            </ul>
            <?php endif; ?>
          </div>

          <h1 class="heading3">Series: <span><?php echo $cat_name?></span></h1>
				  <div class="row author-info-row flex-centered">
						<div class="col-md-6 col-12 col-sm-6">
              <p class="support-text date-info">
    						<span class="count"><?php echo $cat_count; ?></span>
                <span>Episodes</span>
    					</p>
						</div>
						<div class="col-md-6 col-12 col-sm-6">
							<div class="social-media-wrapper text-right">
				        <?php echo do_shortcode('[addtoany]') ?>
				      </div>
						</div>
					</div>
			  </div>
      </div>
    </div>
	</section>

	<section class="explore-content-section">
    <div class="container">
  		<div class="row blog-detail-row">
  			<div class="col-md-10 offset-md-1 offset-lg-2 col-lg-8 col-sm-12 col-12">
          <h2 class="heading4">All episodes</h2>
  				<div class="social-media-blk">
            <?php echo do_shortcode('[addtoany]') ?>
  	      </div>
          <div class="overview-wrapper">
            <?php
                    $args = array(
                        'post_type' => array('podcasts' ),
                        'posts_per_page' => -1,
                        'post_status' => 'publish',
                        'meta_key'	=> 'published_date',
                        'orderby'	=> 'meta_value',
                        'order'		=> 'Desc',
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'podcasts-series-category', //or tag or custom taxonomy
                                'field' => $cat,
                                'terms' => $term_id,
                            )
                        )
                    );
                    $the_query = new WP_Query( $args );
                    $post_count = 0;
                    if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();
                    $post_count++;
            ?>
              <?php
                if ($post_count <= 4):
              ?>
              <a href="<?php echo get_permalink(); ?>" class="card-wrapper">
                <div class="row overview-row flex-not-centered">
                  <div class="col-sm-12 col-md-5 col-lg-4 col-12 flex-not-centered">
                    <div class="img-blk">
                      <?php if(get_the_post_thumbnail_url()): ?>
                          <img class="featured-img" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_the_title(); ?>">
                      <?php else: ?>
                        <img class="featured-img" src="<?php echo get_template_directory_uri(); ?>/img/blog_placeholder.png"  alt="Image" />
                      <?php endif; ?>
                      <p class="title support-text">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/podcast_icon_white.svg"  alt="Image" />
                        <span>PODCAST</span>
                      </p>
                    </div>
                  </div>
                  <div class="col-sm-12 col-md-7 col-lg-8 col-12 flex-not-centered">
                    <div class="content-blk">
                      <div class="tag-blk">
                        <?php
                           $taxonomies = get_the_terms(get_the_ID(),'podcasts-category');
                           if($taxonomies):
                        ?>
                        <ul class="list-inline tags-list">
                          <?php foreach ($taxonomies as $key => $taxonomy): ?>
                            <?php if(!($taxonomy->slug == 'uncategorized')) : ?>
                            <li class="list-inline-item">
                              <span class="support-text"><?php echo $taxonomy->name; ?></span>
                            </li>
                            <?php endif; ?>
                          <?php endforeach; ?>
                        </ul>
                        <?php endif; ?>
                      </div>
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
                        <?php if(get_field('listen_time')): ?>
                          <span class="dot-blk">•</span>
                          <span class="read-time"> <?php echo get_field('listen_time'); ?></span>
                        <?php endif; ?>
                      </p>
                      <div class="description support-text">
                        <?php echo mb_strimwidth(wp_strip_all_tags(get_the_content()),0,160,' ...') ?>
                      </div>
                      <div class="author-blk host-blk">
                          <ul class="list-inline flex-centered">
                            <?php
                              $hosts = CFS()->get('host_details');
                              if($hosts && count($hosts)):
                            ?>
                            <?php foreach($hosts as $host): ?>
                            <li class="list-inline-item">
                                <?php if($host['profile_picture']): ?>
                                  <img src="<?php echo $host['profile_picture']?>" alt="image"/>
                                <?php else: ?>
                                  <img src="<?php echo get_template_directory_uri(); ?>/img/default_profile_picture.png"  alt="Profile Pic" />
                                <?php endif; ?>
                                <h4 class="support-text">
                                  <?php echo $host["name"] ?>
                                </h4>
                            </li>
                            <?php endforeach;?>
                            <?php endif; ?>
                          </ul>
                        </div>
                    </div>
                  </div>
                </div>
              </a>
              <?php else: ?>
              <a href="<?php echo get_permalink(); ?>" class="card-wrapper card-hidden">
                <div class="row overview-row flex-not-centered">
                  <div class="col-sm-12 col-md-5 col-lg-4 col-12 flex-not-centered">
                    <div class="img-blk">
                      <?php if(get_the_post_thumbnail_url()): ?>
                          <img class="featured-img" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_the_title(); ?>">
                      <?php else: ?>
                        <img class="featured-img" src="<?php echo get_template_directory_uri(); ?>/img/blog_placeholder.png"  alt="Image" />
                      <?php endif; ?>
                      <p class="title support-text">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/podcast_icon_white.svg"  alt="Image" />
                        <span>PODCAST</span>
                      </p>
                    </div>
                  </div>
                  <div class="col-sm-12 col-md-7 col-lg-8 col-12 flex-not-centered">
                    <div class="content-blk">
                      <div class="tag-blk">
                        <?php
                           $taxonomies = get_the_terms(get_the_ID(),'podcasts-category');
                           if($taxonomies):
                        ?>
                        <ul class="list-inline tags-list">
                          <?php foreach ($taxonomies as $key => $taxonomy): ?>
                            <?php if(!($taxonomy->slug == 'uncategorized')) : ?>
                            <li class="list-inline-item">
                              <span class="support-text"><?php echo $taxonomy->name; ?></span>
                            </li>
                            <?php endif; ?>
                          <?php endforeach; ?>
                        </ul>
                        <?php endif; ?>
                      </div>
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
                        <?php if(get_field('listen_time')): ?>
                          <span class="dot-blk">•</span>
                          <span class="read-time"> <?php echo get_field('listen_time'); ?></span>
                        <?php endif; ?>
                      </p>
                      <div class="description support-text">
                        <?php echo mb_strimwidth(wp_strip_all_tags(get_the_content()),0,160,' ...') ?>
                      </div>
                      <div class="author-blk host-blk">
                          <ul class="list-inline flex-centered">
                            <?php
                              $hosts = CFS()->get('host_details');
                              if($hosts && count($hosts)):
                            ?>
                            <?php foreach($hosts as $host): ?>
                            <li class="list-inline-item">
                                <?php if($host['profile_picture']): ?>
                                  <img src="<?php echo $host['profile_picture']?>" alt="image"/>
                                <?php else: ?>
                                  <img src="<?php echo get_template_directory_uri(); ?>/img/default_profile_picture.png"  alt="Profile Pic" />
                                <?php endif; ?>
                                <h4 class="support-text">
                                  <?php echo $host["name"] ?>
                                </h4>
                            </li>
                            <?php endforeach;?>
                            <?php endif; ?>
                          </ul>
                        </div>
                    </div>
                  </div>
                </div>
              </a>
              <?php endif; ?>
              <?php
                if ($post_count > 4):
              ?>
              <div class="row view-all-row text-center">
                <div class="col-md-12">
                  <p class="show-more-btn">
                    <a href="javascript:void(0)" class="secondary-btn btn-large" id="showMore">
                      <span>VIEW MORE</span>
                    </a>
                  </p>
                </div>
              </div>
              <?php endif; ?>
            <?php endwhile; wp_reset_postdata(); else : ?>
            <?php endif; ?>
          </div>
  			</div>
  		</div>
    </div>
  </section>

  <section class="other-podcast-section podcast-series-section">
    <div class="container">
      <div class="row title-row">
        <div class="col-12">
          <h4 class="heading3">Other Podcast Series</h4>
        </div>
      </div>
      <div class="row content-row">
        <div class="col-12">
          <div class="podcast-series-wrapper">
            <div class="row podcast-series-row">
              <div class="col-sm-4 col-md-3 col-lg-3 col-12 ">
                <p class="podcast-title">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/podcast_series_icon.svg"  alt="Image" />
                  <span class="support-text">podcast series</span>
                </p>
                <h3 class="heading3">Check Out our <br/> Inspiring Series</h3>
              </div>
              <div class="col-sm-8 col-md-9 col-lg-9 col-12 ">
                <?php
                   $podcastseries = get_categories('taxonomy=podcasts-series-category&type=podcast_series');
                   // $podcast_id = $podcastseries->cat_ID;
                   // var_dump($podcastseries);
                   if($podcastseries):
                ?>
                <div class="podcast-series-slider-wrapper owl-carousel owl-theme podcast-series-slider">
                  <?php foreach ($podcastseries as $key => $podcast):
                      $podcastseries_link = get_term_link($podcast->cat_ID);
                  ?>
                    <?php if(!($podcast->slug == 'uncategorized' || $podcast->name == $cat_name)) : ?>
                      <div class="item">
                        <a href="<?php echo $podcastseries_link  ?>" class="card-wrapper" style="">
                          <?php $image = get_field('pattern_image', 'category_'. $podcast->cat_ID); //'category_image' is our field name
                            if($image):
                          ?>
                          <img class="pattern-img" src="<?php echo $image['url']; ?>" alt="image"/>
                          <?php else: ?>
                          <img class="pattern-img" src="<?php echo get_template_directory_uri(); ?>/img/product_masterclass.svg"  alt="Image" />
                          <?php endif; ?>

                          <h3 class="heading3"><?php echo $podcast->name; ?></h3>
                          <div class="content-blk">
                            <h3 class="heading3 count"><?php echo $podcast->count; ?></h3>
                            <p class="support-text">
                              EPISODES
                            </p>
                          </div>
                        </a>
                      </div>
                    <?php endif; ?>
                  <?php endforeach; ?>
                </div>
                <?php endif; ?>
              </div>
            </div>
            <img class="pattern-bg" src="<?php echo get_template_directory_uri(); ?>/img/other_podcast_series_pattern_img.svg"  alt="Image" />
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php get_template_part('templates/template-newsletter'); ?>

</div>

<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery-scrolltofixed-min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/wow.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/owl.carousel.min.js"></script>

<script type="text/javascript">
  $(document).ready(function () {

		new WOW().init();

    $('.podcast-series-slider').owlCarousel({
       items:2,
       dots:true,
       loop:false,
       mouseDrag: false,
       autoplay:false,
       autoplayTimeout:3000,
       smartSpeed: 1000,
       autoplayHoverPause:true,
       nav:true,
       margin: 16,
       stagePadding: 80,
       margin: 25,
       navText:['<img class="next-arrow" src="<?php echo get_template_directory_uri(); ?>/img/prev_arrow.svg"  alt="Play Podcasts" />','<img class="prev-arrow" src="<?php echo get_template_directory_uri(); ?>/img/next_arrow.svg"  alt="Next" />'],
       responsive:{
           0:{
              items:1,
              stagePadding: 20,
              margin: 16,
           },
           568:{
             items:1,
             stagePadding: 20,
             margin: 16,
           },
           767:{
               items:2,
               stagePadding: 30
           },
           1024:{
               items:2
           }
       },
    });

    $('#showMore').on('click',function(){
      debugger
        if($(this).hasClass('show-active')){
          $('.explore-content-section .overview-wrapper').find('.card-hidden').css('height','0').css('display','none').slideUp(300);
            $(this).removeClass('show-active');
            $(this).find('span').text('View More');
        }
        else{
            $('.explore-content-section .overview-wrapper').find('.card-hidden').css('height','auto').css('display','block').slideDown(500);
            $(this).addClass('show-active');
            $(this).find('span').text('View Less');
        }
    });


		if ($(window).outerWidth() > 767) {
			$('.social-media-blk').scrollToFixed({
					marginTop: 130,
					zIndex: 0,
					limit: $('.other-podcast-section').offset().top - 400
			});
		}

  });
</script>

<?php get_footer(); ?>
