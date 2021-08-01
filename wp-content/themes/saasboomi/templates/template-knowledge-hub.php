<?php
/*
* Template Name: Knowledge Hub
*/ ?>

<?php get_header(); ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/annual-events-page.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/knowledge-hub-page.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/animate.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/owl.carousel.min.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/select2.min.css">

<div class="event-annual-page knowledge-hub-page">

  <section class="banner-section">
    <div class="container container-wrapper">
      <div class="row title-row flex-centered">
        <div class="col-sm-6 col-md-6 col-lg-6 col-12 ">
          <h1 class="heading1">Knowledge Hub</h1>
          <p class="paragraph">
            Explore exclusive content straight from our SaaS Ecosystem.
          </p>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-6 col-12 ">
          <div class="img-blk text-right">
            <img class="featured-img" src="<?php echo get_template_directory_uri(); ?>/img/knowledge_hub_featured_img.png"  alt="Knowledge Hub" />
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="related-blogs-section">
    <div class="container container-wrapper">
      <div class="row title-row">
        <div class="col-12">
          <h2 class="heading2">Featured Blog Posts</h2>
        </div>
      </div>
      <div class="row content-row flex-not-centered">
        <?php
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 3,
                    'post_status' => 'publish',
                    'order'		=> 'desc',
                    'meta_query' => array(
                        array(
                            'key' => 'featured_blog',
                            'compare' => '=',
                            'value' => '1',
                        )
                    ),
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
                <img class="featured-img" src="<?php echo get_template_directory_uri(); ?>/img/blog_placeholder.png"  alt="Image" />
              <?php endif; ?>
              <p class="title support-text">
                <img src="<?php echo get_template_directory_uri(); ?>/img/blog_icon.svg"  alt="Image" />
                <span>Blog</span>
              </p>
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

              <div class="tag-blk">
                <?php
                  $categories = get_the_terms(get_the_ID(),'podcasts-category');
                  if($categories):
                ?>
                <ul class="list-inline tags-list">
                  <?php foreach ($categories as $key => $category): ?>
                    <?php if(!($category->slug == 'uncategorized')) : ?>
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
                <span class="dot-blk">•</span>
                <span class="read-time"> <?php echo get_field('read_time'); ?></span>
              </p>
              <ul class="list-inline flex-centered author-info-list">
                <?php if(get_field('author_image') || get_field('author_designation') || get_field('author_company') || get_field('about_author') || get_field('author_linkedin_link')): ?>
                <li class="author-blk flex-centered">
                  <?php if(get_field('author_image')): ?>
                    <img src="<?php echo get_field('author_image')['url']?>" data-toggle="tooltip" data-placement="bottom" title="<?php echo get_field('author_name'); ?>" alt="image"/>
                  <?php else: ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/default_profile_picture.png" data-toggle="tooltip" data-placement="bottom" title="<?php echo get_field('author_name'); ?>" alt="Profile Pic" />
                  <?php endif; ?>
                  <h4 class="support-text"  <?php if((!get_field('author_name_2'))): ?> style="display:block;" <?php endif;?>>
                    <?php echo get_field('author_name') ?>
                  </h4>
                </li>
                <?php endif; ?>
                <?php if(get_field('author_image_2') || get_field('author_designation_2') || get_field('author_company_2') || get_field('about_author_2') || get_field('author_linkedin_link_2')): ?>
                <li class="author-blk flex-centered">
                  <?php if(get_field('author_image_2')): ?>
                    <img src="<?php echo get_field('author_image_2')['url']?>" data-toggle="tooltip" data-placement="bottom" title="<?php echo get_field('author_name_2'); ?>" alt="image"/>
                  <?php else: ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/default_profile_picture.png"  data-toggle="tooltip" data-placement="bottom" title="<?php echo get_field('author_name_2'); ?>" alt="Profile Pic" />
                  <?php endif; ?>
                  <h4 class="support-text">
                    <?php echo get_field('author_name_2') ?>
                  </h4>
                </li>
                <?php endif; ?>
                <?php if(get_field('author_image_3') || get_field('author_designation_3') || get_field('author_company_3') || get_field('about_author_3') || get_field('author_linkedin_link_3')): ?>
                <li class="author-blk flex-centered">
                  <?php if(get_field('author_image_3')): ?>
                    <img src="<?php echo get_field('author_image_3')['url']?>" data-toggle="tooltip" data-placement="bottom" title="<?php echo get_field('author_name_3'); ?>" alt="image"/>
                  <?php else: ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/default_profile_picture.png"  data-toggle="tooltip" data-placement="bottom" title="<?php echo get_field('author_name_3'); ?>" alt="Profile Pic" />
                  <?php endif; ?>
                  <h4 class="support-text">
                    <?php echo get_field('author_name_3') ?>
                  </h4>
                </li>
                <?php endif; ?>
                <?php if(get_field('author_image_4') || get_field('author_designation_4') || get_field('author_company_4') || get_field('about_author_4') || get_field('author_linkedin_link_4')): ?>
                <li class="author-blk flex-centered">
                  <?php if(get_field('author_image_4')): ?>
                    <img src="<?php echo get_field('author_image_4')['url']?>" data-toggle="tooltip" data-placement="bottom" title="<?php echo get_field('author_name_4'); ?>" alt="image"/>
                  <?php else: ?>
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
        </div>
        <?php endwhile; wp_reset_postdata(); else : ?>
        <?php endif; ?>
      </div>
    </div>
  </section>

  <section class="podcasts-section">
    <div class="container container-wrapper">
      <div class="podcast-outer-wrapper">
        <img class="circle-bg" src="<?php echo get_template_directory_uri(); ?>/img/past_events_circle_bg_new.svg"  alt="Annual" />
        <div class="row title-row">
          <div class="col-sm-12 col-md-3 col-lg-3 col-12 ">
            <div class="podcast-title-wrapper">
              <p class="podcast-title">
                <img class="icon" src="<?php echo get_template_directory_uri(); ?>/img/podcast_icon.svg"  alt="Image" />
                <span class="support-text">podcast</span>
              </p>
              <h3 class="heading3">Listen to the latest Episodes</h3>
              <p>
                <a href="<?php echo get_permalink(670); ?>" class="primary-btn primary-btn-dark btn-large">Explore Podcasts</a>
              </p>
            </div>
          </div>
          <div class="col-sm-12 col-md-9 col-lg-9 col-12 ">
            <div class="podcast-content-wrapper owl-carousel owl-theme podcast-slider">
              <?php
                      $args = array(
                          'post_type' => 'podcasts',
                          'posts_per_page' => 3,
                          'post_status' => 'publish',
                          'meta_key'	=> 'published_date',
                          'orderby'	=> 'meta_value',
                          'order'		=> 'Desc',
                      );
                      $the_query = new WP_Query( $args );
                      if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();
              ?>
              <div class="item">
                <a href="<?php echo get_permalink(); ?>" class="card-wrapper" >
                  <?php if(get_the_post_thumbnail_url()): ?>
                    <img class="speaker-img" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_the_title(); ?>">
                  <?php else: ?>
                    <img class="speaker-img" src="<?php echo get_template_directory_uri(); ?>/img/podcast_placeholder.png"  alt="Image" />
                  <?php endif; ?>
                  <div class="episode-info">
                    <p>
                      <span class="heading5">EP.</span> <br/>
                      <?php if(get_field('episode_number')): ?>
                      <span class="heading3 episode-no"><?php echo get_field('episode_number') ?></span>
                      <?php endif; ?>
                    </p>
                    <h5 class="heading4">  <?php echo mb_strimwidth(wp_strip_all_tags(get_the_title()),0,60,' ...') ?></h5>
                  </div>
                  <div class="content-wrapper">
                    <div class="img-blk" style="display: none !important">
                      <img class="speaker-img" src="<?php echo get_template_directory_uri(); ?>/img/default_blog.png"  alt="Image" />
                      <img class="speaker-img" src="<?php echo get_template_directory_uri(); ?>/img/default_profile_picture.png"  alt="Image" />
                      <img class="profile-circle-img" src="<?php echo get_template_directory_uri(); ?>/img/complete_circle_bg.svg"  alt="Image" />
                    </div>
                    <div class="bottom-blk">
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
                              <span class="support-text comma">, </span>
                            </li>
                            <?php endif; ?>
                          <?php endforeach; ?>
                        </ul>
                        <?php endif; ?>
                      </div>
                      <img class="podcast-video-img" src="<?php echo get_template_directory_uri(); ?>/img/play_podcast.svg"  alt="Play Podcasts" />
                    </div>
                  </div>
                  <div class="overlay background-prop" style="background:linear-gradient(rgba(255,243,224,0.75) 10%,rgba(0,0,0,0) 80%, rgba(0,0,0,1) 100%),<?php if(get_the_post_thumbnail_url()): ?> url('<?php echo get_the_post_thumbnail_url(); ?>'); <?php else: ?> url('<?php echo get_template_directory_uri()?>/img/podcast_placeholder.png');  <?php endif; ?>"></div>
                </a>
              </div>
              <?php endwhile; wp_reset_postdata(); else : ?>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="explore-content-section" id="exploreContentSection">
    <div class="container container-wrapper">
      <div class="row title-row">
        <div class="col-12">
          <h2 class="heading2">Explore Content</h2>
        </div>
      </div>
      <div class="row content-row">
        <div class="col-12">
          <div class="row filter-main-row">
            <div class="col-sm-5 col-md-4 col-lg-3 col-12 ">
              <div class="filter-wrapper">
                <h5 class="heading5">CONTENT TYPE</h5>
                <form>
                  <?php
                    $args = array(
                      'post_type' => array( 'post', 'podcasts' ),
                      'posts_per_page' => -1,
                      'post_status' => 'publish',
                      'meta_key'	=> 'published_date',
                      'orderby'	=> 'meta_value',
                      'order'		=> 'Desc',
                    );
                    $all = new WP_Query( $args );
                  ?>
                  <div class="custom-checkbox content-type" data-category-slug="all">
                    <input type="checkbox" <?php if(!isset($_GET['content-type']) || !in_array($_GET['content-type'], ['post', 'podcasts'])){?> checked <?php }?> class="custom-control-input">
                    <label class="custom-control-label paragraph" for="contentType1"><span>All</span></label>
                    <span class="count paragraph"><?php echo $all->post_count ?></span>
                  </div>
                  <div class="custom-checkbox content-type" data-category-slug="post">
                    <input type="checkbox" <?php if(isset($_GET['content-type']) && in_array($_GET['content-type'], ['post'])){?> checked <?php }?> class="custom-control-input">
                    <label class="custom-control-label paragraph" for="contentType2"><span>Blog</span></label>
                    <span class="count paragraph">
                      <?php
                        $count = wp_count_posts('post')->publish;
                        echo $count;
                      ?>
                    </span>
                  </div>
                  <div class="custom-checkbox content-type" data-category-slug="podcasts">
                    <input type="checkbox" <?php if(isset($_GET['content-type']) && in_array($_GET['content-type'], ['podcasts'])){?> checked <?php }?> class="custom-control-input">
                    <label class="custom-control-label paragraph" for="contentType3"><span>Podcasts</span></label>
                    <span class="count paragraph">
                      <?php
                        $count = wp_count_posts('podcasts')->publish;
                        echo $count;
                      ?>
                    </span>
                  </div>
                </form>
                <h5 class="heading5 content-type">CATEGORY</h5>
                <form>
                  <div class="custom-checkbox category" data-category-slug="all">
                    <input type="checkbox" <?php if(!isset($_GET['category']) || $_GET['category'] =='all'){?> checked <?php }?> class="custom-control-input" >
                    <label class="custom-control-label paragraph" for="customCheck1"><span>All</span></label>
                    <span class="count paragraph"><?php echo $all->post_count ?></span>
                  </div>
                  <?php
                    $categories = get_terms('podcasts-category');
                    if($categories):
                    foreach($categories as $category):
                  ?>
                    <div class="custom-checkbox category" data-category-slug="<?php echo $category->slug ?>">
                      <input type="checkbox" <?php if(isset($_GET['category']) && $_GET['category'] == $category->slug) {?> checked <?php }?> class="custom-control-input">
                      <label class="custom-control-label paragraph" for="customCheck1"><span><?php echo $category->name ?></span></label>
                      <span class="count paragraph"><?php echo $category->count?></span>
                    </div>
                    <?php endforeach; endif; ?>
                </form>

              </div>
            </div>
            <div class="col-sm-7 col-md-8 col-lg-9 col-12 ">
              <div class="row filter-row">
                <div class="col-sm-12 col-md-5 col-lg-6 col-12">
                  <div class="search-blk">
                    <div class="form-group has-search">
                      <input id="searchInput" type="text" class="form-control paragraph" placeholder="Search">
                      <span class="fa fa-search form-control-feedback"></span>
                    </div>
                  </div>
                </div>
                <div class="col-sm-12 col-md-7 col-lg-6 col-12">
                  <div class="sort-by-filter-wrapper">
                    <ul class="list-inline flex-centered">
                      <li class="list-inline-item paragraph">
                        <span class="sort-by-title">Sort By</span>
                      </li>
                      <li class="list-inline-item paragraph">
                        <select class="form-group paragraph" name="sortByFilter" id="sortByFilter" placeholder="Professions">
                          <option value="">Latest </option>
                          <option value="alphabetical" <?php if(isset($_GET['sort']) && $_GET['sort'] == 'alphabetical'):?>selected<?php endif;?>>Alphabetical </option>
                        </select>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="overview-wrapper">
                <?php
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    if(isset($_GET['content-type']) && in_array($_GET['content-type'], ['post', 'podcasts'])){
                      $args = array(
                        'post_type' => $_GET['content-type'],
                        'posts_per_page' => 4,
                        'post_status' => 'publish',
                        'meta_key'	=> 'published_date',
	                      'orderby'	=> 'meta_value',
                      	'order'		=> 'Desc',
                        'paged'=> $paged,
                      );
                      $args['tax_query'] = array();
                      if(isset($_GET['category']) && $_GET['category'] != 'all'){
                        $args['tax_query']['relation'] = 'AND';
                        $category = array(
                            'taxonomy' => 'podcasts-category',
                            'field' => 'slug',
                            'terms' => $_GET['category'],
                            'operator' => 'IN',
                        );
                        array_push($args['tax_query'],$category);
                      }
                      if(isset($_GET['sort']) && $_GET['sort']){
                        $args['orderby'] = 'title';
                        $args['order'] = 'asc';
                      }
                      $the_query = new WP_Query( $args );
                    }
                    else if(isset($_GET['content-type']) && in_array($_GET['content-type'], ['all'])){
                      $args = array(
                        'post_type' => array( 'post', 'podcasts' ),
                        'posts_per_page' => 4,
                        'post_status' => 'publish',
                        'order'		=> 'Desc',
                        'meta_key'	=> 'published_date',
	                      'orderby'	=> 'meta_value',
                        'paged'=> $paged,
                      );
                      $args['tax_query'] = array();
                      if(isset($_GET['category']) && $_GET['category'] != 'all'){
                        $args['tax_query']['relation'] = 'AND';
                        $category = array(
                            'taxonomy' => 'podcasts-category',
                            'field' => 'slug',
                            'terms' => $_GET['category'],
                            'operator' => 'IN',
                        );
                        array_push($args['tax_query'],$category);
                      }
                      if(isset($_GET['sort']) && $_GET['sort']){
                        $args['orderby'] = 'title';
                        $args['order'] = 'asc';
                      }
                      $the_query = new WP_Query( $args );
                    }else{
                      $args = array(
                        'post_type' => array( 'post', 'podcasts' ),
                        'posts_per_page' => 4,
                        'post_status' => 'publish',
                        'meta_key'	=> 'published_date',
	                      'orderby'	=> 'meta_value',
                        'order'		=> 'Desc',
                        'paged'=> $paged,
                      );
                      $args['tax_query'] = array();
                      if(isset($_GET['category']) && $_GET['category'] != 'all'){
                        $args['tax_query']['relation'] = 'AND';
                        $category = array(
                            'taxonomy' => 'podcasts-category',
                            'field' => 'slug',
                            'terms' => $_GET['category'],
                            'operator' => 'IN',
                        );
                        array_push($args['tax_query'],$category);
                      }
                      if(isset($_GET['sort']) && $_GET['sort']){
                        $args['orderby'] = 'title';
                        $args['order'] = 'asc';
                      }
                      $the_query = new WP_Query( $args );
                    }
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
                            <?php if ( get_post_type() === 'podcasts' ) : ?>
                              <img src="<?php echo get_template_directory_uri(); ?>/img/podcast_icon_white.svg"  alt="Image" />
                              <span>PODCAST</span>
                            <?php else: ?>
                              <img src="<?php echo get_template_directory_uri(); ?>/img/blog_icon.svg"  alt="Image" />
                              <span>Blog</span>
                            <?php endif; ?>
                          </p>
                        </div>
                      </div>
                      <div class="col-sm-12 col-md-7 col-lg-8 col-12 flex-not-centered">
                        <div class="content-blk">
                          <?php if ( get_post_type() === 'podcasts' ) : ?>
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
                          <?php else: ?>
                            <div class="tag-blk">
                              <?php
                                $categories = get_the_terms(get_the_ID(),'podcasts-category');
                                if($categories):
                              ?>
                              <ul class="list-inline tags-list">
                                <?php foreach ($categories as $key => $category): ?>
                                  <?php if(!($category->slug == 'uncategorized')) : ?>
                                  <li class="list-inline-item">
                                    <span class="support-text"><?php echo $category->name; ?></span>
                                  </li>
                                  <?php endif; ?>
                                <?php endforeach; ?>
                              </ul>
                              <?php endif;?>
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
                            <?php if(get_field('read_time') || get_field('listen_time')): ?>
                              <span class="dot-blk">•</span>
                              <?php if ( get_post_type() === 'podcasts' ) : ?>
                              <span class="read-time"> <?php echo get_field('listen_time'); ?></span>
                              <?php else: ?>
                              <span class="read-time"> <?php echo get_field('read_time'); ?></span>
                              <?php endif; ?>
                            <?php endif; ?>
                          </p>
                          <div class="description support-text">
                            <?php echo mb_strimwidth(wp_strip_all_tags(get_the_content()),0,160,' ...') ?>
                          </div>
                          <?php if ( get_post_type() === 'podcasts' ) : ?>
                            <div class="author-blk host-blk">
                              <ul class="list-inline flex-centered">
                                <?php
                                  $hosts = CFS()->get('guest_details');
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
                          <?php else: ?>
                            <div class="author-blk host-blk">
                              <ul class="list-inline flex-centered author-info-list">
                								<?php if(get_field('author_image') || get_field('author_designation') || get_field('author_company') || get_field('about_author') || get_field('author_linkedin_link')): ?>
                								<li class="list-inline-item flex-centered">
                									<?php if(get_field('author_image')): ?>
                										<img src="<?php echo get_field('author_image')['url']?>" data-toggle="tooltip" data-placement="bottom" title="<?php echo get_field('author_name'); ?>" alt="image"/>
                									<?php else: ?>
                										<img src="<?php echo get_template_directory_uri(); ?>/img/default_profile_picture.png" data-toggle="tooltip" data-placement="bottom" title="<?php echo get_field('author_name'); ?>" alt="Profile Pic" />
                									<?php endif; ?>
                									<h4 class="support-text"  <?php if((!get_field('author_name_2'))): ?> style="display:block;" <?php endif;?>>
                										<?php echo get_field('author_name') ?>
                									</h4>
                								</li>
                								<?php endif; ?>
                								<?php if(get_field('author_image_2') || get_field('author_designation_2') || get_field('author_company_2') || get_field('about_author_2') || get_field('author_linkedin_link_2')): ?>
                								<li class="list-inline-item flex-centered">
                									<?php if(get_field('author_image_2')): ?>
                										<img src="<?php echo get_field('author_image_2')['url']?>" data-toggle="tooltip" data-placement="bottom" title="<?php echo get_field('author_name_2'); ?>" alt="image"/>
                									<?php else: ?>
                										<img src="<?php echo get_template_directory_uri(); ?>/img/default_profile_picture.png"  data-toggle="tooltip" data-placement="bottom" title="<?php echo get_field('author_name_2'); ?>" alt="Profile Pic" />
                									<?php endif; ?>
                									<h4 class="support-text">
                										<?php echo get_field('author_name_2') ?>
                									</h4>
                								</li>
                								<?php endif; ?>
                								<?php if(get_field('author_image_3') || get_field('author_designation_3') || get_field('author_company_3') || get_field('about_author_3') || get_field('author_linkedin_link_3')): ?>
                								<li class="list-inline-item flex-centered">
                									<?php if(get_field('author_image_3')): ?>
                										<img src="<?php echo get_field('author_image_3')['url']?>" data-toggle="tooltip" data-placement="bottom" title="<?php echo get_field('author_name_3'); ?>" alt="image"/>
                									<?php else: ?>
                										<img src="<?php echo get_template_directory_uri(); ?>/img/default_profile_picture.png"  data-toggle="tooltip" data-placement="bottom" title="<?php echo get_field('author_name_3'); ?>" alt="Profile Pic" />
                									<?php endif; ?>
                									<h4 class="support-text">
                										<?php echo get_field('author_name_3') ?>
                									</h4>
                								</li>
                								<?php endif; ?>
                								<?php if(get_field('author_image_4') || get_field('author_designation_4') || get_field('author_company_4') || get_field('about_author_4') || get_field('author_linkedin_link_4')): ?>
                								<li class="list-inline-item flex-centered">
                									<?php if(get_field('author_image_4')): ?>
                										<img src="<?php echo get_field('author_image_4')['url']?>" data-toggle="tooltip" data-placement="bottom" title="<?php echo get_field('author_name_4'); ?>" alt="image"/>
                									<?php else: ?>
                										<img src="<?php echo get_template_directory_uri(); ?>/img/default_profile_picture.png" data-toggle="tooltip" data-placement="bottom" title="<?php echo get_field('author_name_4'); ?>" alt="Profile Pic" />
                									<?php endif; ?>
                									<h4 class="support-text">
                										<?php echo get_field('author_name_4') ?>
                									</h4>
                								</li>
                								<?php endif; ?>
                							</ul>
                            </div>
                          <?php endif; ?>
                        </div>
                      </div>
                    </div>
                  </a>                  
                  <?php else: ?>
                  <a href="<?php echo get_permalink(); ?>" class="card-wrapper card-hidden">
                    <div class="row overview-row flex-not-centered">
                      <div class="col-sm-12 col-md-4 col-lg-4 col-12 flex-not-centered">
                        <div class="img-blk">
                          <?php if(get_the_post_thumbnail_url()): ?>
                              <img class="featured-img" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_the_title(); ?>">
                          <?php else: ?>
                            <img class="featured-img" src="<?php echo get_template_directory_uri(); ?>/img/blog_placeholder.png"  alt="Image" />
                          <?php endif; ?>
                          <p class="title support-text">
                            <?php if ( get_post_type() === 'podcasts' ) : ?>
                              <img src="<?php echo get_template_directory_uri(); ?>/img/podcast_icon_white.svg"  alt="Image" />
                              <span>PODCAST</span>
                            <?php else: ?>
                              <img src="<?php echo get_template_directory_uri(); ?>/img/blog_icon.svg"  alt="Image" />
                              <span>Blog</span>
                            <?php endif; ?>
                          </p>
                        </div>
                      </div>
                      <div class="col-sm-12 col-md-8 col-lg-8 col-12 flex-not-centered">
                        <div class="content-blk">
                          <?php if ( get_post_type() === 'podcasts' ) : ?>
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
                          <?php else: ?>
                            <div class="tag-blk">
                              <?php
                                $categories = get_the_terms(get_the_ID(),'podcasts-category');
                                if($categories):
                              ?>
                              <ul class="list-inline tags-list">
                                <?php foreach ($categories as $key => $category): ?>
                                  <?php if(!($category->slug == 'uncategorized')) : ?>
                                  <li class="list-inline-item">
                                    <span class="support-text"><?php echo $category->name; ?></span>
                                  </li>
                                  <?php endif; ?>
                                <?php endforeach; ?>
                              </ul>
                              <?php endif; ?>
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
                            <?php if(get_field('read_time') || get_field('listen_time')): ?>
                              <span class="dot-blk">•</span>
                              <?php if ( get_post_type() === 'podcasts' ) : ?>
                              <span class="read-time"> <?php echo get_field('listen_time'); ?></span>
                              <?php else: ?>
                              <span class="read-time"> <?php echo get_field('read_time'); ?></span>
                              <?php endif; ?>
                            <?php endif; ?>
                          </p>
                          <div class="description support-text">
                            <?php echo mb_strimwidth(wp_strip_all_tags(get_the_content()),0,160,' ...') ?>
                          </div>
                          <?php if ( get_post_type() === 'podcasts' ) : ?>
                            <div class="author-blk host-blk">
                              <ul class="list-inline flex-centered">
                                <?php
                                  $hosts = CFS()->get('guest_details');
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
                          <?php else: ?>
                          <div class="author-blk flex-centered">
                            <?php if(get_field('author_image')): ?>
                              <img src="<?php echo get_field('author_image')['url']?>" alt="image"/>
                            <?php else: ?>
                              <img src="<?php echo get_template_directory_uri(); ?>/img/default_profile_picture.png"  alt="Profile Pic" />
                            <?php endif; ?>
                            <h4 class="support-text">
                              <?php echo get_field('author_name') ?>
                            </h4>
                          </div>
                          <?php endif; ?>
                        </div>
                      </div>
                    </div>
                  </a>
                  <?php endif; ?>

                <?php endwhile; wp_reset_postdata();
                  // $args = array(
                  //   'post_type' => array( 'post', 'podcasts' ),
                  // );
                  // $the_query = new WP_Query( $args );
                  // $post_count = $the_query->found_posts;
                  // var_dump($post_count);
                  // if($post_count > 4):
                ?>
                  <!-- <div class="row view-all-row text-center">
                    <div class="col-md-12">
                      <p class="show-more-btn">
                        <a href="javascript:void(0)" class="secondary-btn btn-large" id="showMore">
                          <span>VIEW MORE</span>
                        </a>
                      </p>
                    </div>
                  </div> -->
                  <div class="row view-all-row text-center pagination-row pagination">
                    <div class="col-lg-12 pagination text-center">
                      <?php pagination_bar( $the_query ); ?>
                    </div>
                  </div>
                <?php  else : ?>
                <p class="heading2" style="margin: 24px 0;">No resul found</p>
                <?php endif; ?>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php get_template_part('templates/template-newsletter'); ?>


</div>

<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/wow.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/select2.min.js"></script>

<script type="text/javascript">
  $(document).ready(function () {
    // new WOW().init();
    $('.podcast-slider').owlCarousel({
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
       stagePadding: 30,
       margin: 25,
       navText:['<img class="next-arrow" src="<?php echo get_template_directory_uri(); ?>/img/prev_arrow.svg"  alt="Play Podcasts" />','<img class="prev-arrow" src="<?php echo get_template_directory_uri(); ?>/img/next_arrow.svg"  alt="Next" />'],
       responsive:{
           0:{
               items:1,
           },
           568:{
             items:1,
           },
           767:{
               items:2,
           },
           1024:{
               items:2
           }
       },
    });

    $('#sortByFilter').select2({minimumResultsForSearch: -1});

    $('#showMore').on('click',function(){
      debugger
        if($(this).hasClass('show-active')){
          $('.overview-wrapper').find('.card-hidden').css('height','0').css('display','none').slideUp(300);
            $(this).removeClass('show-active');
            $(this).find('span').text('View More');
        }
        else{
            $('.overview-wrapper').find('.card-hidden').css('height','auto').css('display','block').show().slideDown(500);
            $(this).addClass('show-active');
            $(this).find('span').text('View Less');
        }
    });

    $('#sortByFilter').on('change', function (){
        var $this = $(this);
        var val = $(this).val();
        var paged = '<?php echo get_query_var('paged')?>';
        if(paged && paged != '0'){
          var url = '<?php echo get_permalink(); ?>';
        }else{
          var url = window.location.href;
        }
        if(val){
            param = addParam(url, 'sort', val);
            window.location.href = param;
        }
        else{
            param = removeParam('sort', url);
            window.location.href = param;
        }
    });

    $('.category').on('click', function(){
      var $this = $(this);
      var val = $this.attr('data-category-slug');
      var paged = '<?php echo get_query_var('paged')?>';
      if(paged && paged!= '0'){
        var url = '<?php echo get_permalink(); ?>';
      }else{
        var url = window.location.href;
      }
      if(val != 'all'){
        param = addParam(url, 'category', val);
        window.location.href = param;
      }
      else{
        param = addParam(url, 'category', val);
        window.location.href = param;
      }
    });

    $('.content-type').on('click', function(){
      var $this = $(this);
      var val = $this.attr('data-category-slug');
      var paged = '<?php echo get_query_var('paged')?>';
      if(paged && paged!= '0'){
        var url = '<?php echo get_permalink(); ?>';
      }else{
        var url = window.location.href;
      }
      if(val != 'all'){
        param = addParam(url, 'content-type', val);
        window.location.href = param;
      }
      else{
        param = addParam(url, 'content-type', val);
        window.location.href = param;
      }
    });

    function addParam(myUrl, name, value) {
        var re = new RegExp("([?&]" + name + "=)[^&]+", "");

        function add(sep) {
            myUrl += sep + name + "=" + encodeURIComponent(value);
        }

        function change() {
            myUrl = myUrl.replace(re, "$1" + encodeURIComponent(value));
        }

        if (myUrl.indexOf("?") === -1) {
            add("?");
        } else {
            if (re.test(myUrl)) {
                change();
            } else {
                add("&");
            }
        }

        return myUrl;
    }

    function removeParam(key, sourceURL) {
        var rtn = sourceURL.split("?")[0],
            param,
            params_arr = [],
            queryString = (sourceURL.indexOf("?") !== -1) ? sourceURL.split("?")[1] : "";
        if (queryString !== "") {
            params_arr = queryString.split("&");
            for (var i = params_arr.length - 1; i >= 0; i -= 1) {
                param = params_arr[i].split("=")[0];
                if (param === key) {
                    params_arr.splice(i, 1);
                    page = 0;
                }
            }

            if (params_arr.length > 0) {
                rtn = rtn + "?" + params_arr.join("&");

            }
        }
        return rtn;
    }
    var contentType = null;
    var category = null;
    var sort  = null;
    <?php if(isset($_GET['content-type']) && in_array($_GET['content-type'], ['post', 'podcasts'])): ?>
      contentType = '<?php echo $_GET['content-type'] ?>' ;
    <?php endif ?>
    <?php if(isset($_GET['category']) && $_GET['category']): ?>
      category = '<?php echo $_GET['category'] ?>';
    <?php endif ?>
    <?php if(isset($_GET['sort']) && $_GET['sort']): ?>
      sort = '<?php echo $_GET['sort'] ?>';
    <?php endif ?>
    $('#searchInput').on('keyup',function(e){
      var val = $(this).val();
      $('.pagination').hide();
      if(!val){
          $('.pagination').show();
      }
      $.ajax({
          type: 'POST',
          url: '<?php echo admin_url('admin-ajax.php'); ?>',
          data: {
              'val': val,
              'category': category,
              'content-type': contentType,
              'action': 'knowledge_search' //this is the name of the AJAX method called in WordPress
          }, success: function (result) {
              console.log(result);
              var html = '';
              if(result.length != 0){
                  $.each(result, function(key, val){
                    html +='<a href="'+val['permalink']+'" class="card-wrapper">';
                    html +='<div class="row overview-row flex-not-centered">';
                    html +='<div class="col-sm-12 col-md-5 col-lg-4 col-12 flex-not-centered">';
                    html +='<div class="img-blk">';
                    if(val['featured_img']){
                      html +='<img class="featured-img" src="'+val['featured_img']+'" alt="'+val['title']+'">';
                    }else{
                      html +='<img class="featured-img" src="<?php echo get_template_directory_uri(); ?>/img/blog_placeholder.png" alt="'+val['title']+'">';
                    }
                    html += '<p class="title support-text">';
                    if(val['post_type'] == 'podcasts'){
                      html += '<img src="<?php echo get_template_directory_uri(); ?>/img/podcast_icon_white.svg" alt="Image">';
                      html += '<span>PODCAST</span>';
                    }else{
                      html += '<img src="<?php echo get_template_directory_uri(); ?>/img/blog_icon.svg" alt="Image">';
                      html += '<span>BLOG</span>';
                    }
                    html += '</p>';
                    html += '</div>';
                    html += '</div>';
                    html += '<div class="col-sm-12 col-md-7 col-lg-8 col-12 flex-not-centered">';
                    html += '<div class="content-blk">';
                    html += '<div class="tag-blk">';
                    html += '<ul class="list-inline tags-list">';
                    if(val['categories'] && val['categories'].length){
                      $.each(val['categories'], function(key2, category){
                        html += '<li class="list-inline-item">';
                        html += '<span class="support-text">'+category['name']+'</span>';
                        html += '</li>';
                      });
                    }
                    html += '</ul>';
                    html += '</div>';
                    html += '<h3 class="heading4">'+val['title']+'</h3>';
                    html += '<p class="support-text date-info">';
                    html += '<span class="date"> '+val['date']+' </span>';
                    if(val['time']){
                      html += '<span class="dot-blk">•</span>';
                      html += '<span class="read-time"> '+val['time']+' </span>';
                    }
                    html += '</p>';
                    html += '<div class="description support-text">';
                    html += val['content'];
                    html += '</div>';
                    if(val['post_type'] == 'podcasts'){
                      if(val['hosts'] && val['hosts'].length){
                        html += '<div class="author-blk host-blk">';
                        html += '<ul class="list-inline flex-centered">';
                        $.each(val['hosts'], function(key2, host){
                          html += '<li class="list-inline-item">';
                          if(host['profile_picture']){
                            html += '<img src="'+host['profile_picture']+'" alt="image">';
                          }else{
                            html += '<img src="<?php echo get_template_directory_uri(); ?>/img/default_profile_picture.png" alt="image">';
                          }
                          html += '<h4 class="support-text">'+host['name']+'</h4>';
                          html += '</li>';
                        });
                        html += '</ul>';
                        html += '</div>';
                      }
                    }else{

                      html += '<div class="author-blk host-blk">';
                      html += '<ul class="list-inline flex-centered author-info-list">';
                      if(val['author_image'] || val['author_designation'] || val['author_company'] || val['about_author'] || val['author_linkedin_link']){
                        html += '<li class="list-inline-item flex-centered">';
                        if(val['author_image']){
                          html += '<img src="'+val['author_image']+'" alt="image" data-toggle="tooltip" data-placement="bottom" title="'+val['author_name']+'" />';
                        }else{
                          html += '<img src="<?php echo get_template_directory_uri(); ?>/img/default_profile_picture.png" alt="image" data-toggle="tooltip" data-placement="bottom" title="'+val['author_name']+'" />';
                        }
                        html += '<h4 class="support-text"  <?php if((!get_field('author_name'))): ?> style="display:block;" <?php endif;?>>'+val['author_name']+'</h4>';
                        html += '</li>';
                      }
                      if(val['author_image_2'] || val['author_designation_2'] || val['author_company_2'] || val['about_author_2'] || val['author_linkedin_link_2']){
                        html += '<li class="list-inline-item flex-centered">';
                        if(val['author_image_2']){
                          html += '<img src="'+val['author_image_2']+'" alt="image" data-toggle="tooltip" data-placement="bottom" title="'+val['author_name_2']+'" />';
                        }else{
                          html += '<img src="<?php echo get_template_directory_uri(); ?>/img/default_profile_picture.png" alt="image" data-toggle="tooltip" data-placement="bottom" title="'+val['author_name_2']+'" />';
                        }
                        html += '<h4 class="support-text">'+val['author_name_2']+'</h4>';
                        html += '</li>';
                      }
                      if(val['author_image_3'] || val['author_designation_3'] || val['author_company_3'] || val['about_author_3'] || val['author_linkedin_link_3']){
                        html += '<li class="list-inline-item flex-centered">';
                        if(val['author_image_3']){
                          html += '<img src="'+val['author_image_3']+'" alt="image" data-toggle="tooltip" data-placement="bottom" title="'+val['author_name_3']+'" />';
                        }else{
                          html += '<img src="<?php echo get_template_directory_uri(); ?>/img/default_profile_picture.png" alt="image" data-toggle="tooltip" data-placement="bottom" title="'+val['author_name_3']+'" />';
                        }
                        html += '<h4 class="support-text">'+val['author_name_3']+'</h4>';
                        html += '</li>';
                      }
                      if(val['author_image_4'] || val['author_designation_4'] || val['author_company_4'] || val['about_author_4'] || val['author_linkedin_link_4']){
                        html += '<li class="list-inline-item flex-centered">';
                        if(val['author_image_4']){
                          html += '<img src="'+val['author_image_4']+'" alt="image" data-toggle="tooltip" data-placement="bottom" title="'+val['author_name_4']+'" />';
                        }else{
                          html += '<img src="<?php echo get_template_directory_uri(); ?>/img/default_profile_picture.png" alt="image" data-toggle="tooltip" data-placement="bottom" title="'+val['author_name_4']+'" />';
                        }
                        html += '<h4 class="support-text">'+val['author_name_4']+'</h4>';
                        html += '</li>';
                      }
                      html += '</ul>';
                      html += '</div>';

                    }
                    html += '</div>';
                    html += '</div>';
                    html += '</div>';
                    html += '</a>';
                  });
                  $('.overview-wrapper').html(html);
              }
              else{
                $('.overview-wrapper').html('<div class="col-lg-12 text-center"><p class="no-result heading2" style="padding: 100px 0;">Sorry, but nothing matched your search</p></div>');
              }
          },
          error: function () {
              console.log(error);
          }
      });
            // }
            // else {
            //location.reload();
            // }
        });

    <?php if(
      (isset($_GET['content-type']) && in_array($_GET['content-type'], ['all', 'post', 'podcasts'])) ||
      (isset($_GET['category']) && $_GET['category']) ||
      (isset($_GET['sort']) && in_array($_GET['sort'], ['alphabetical']))
      ):?>
      $([document.documentElement, document.body]).animate({
          scrollTop: $("#exploreContentSection").offset().top - 100
      }, 1000);
    <?php endif?>

  });
</script>

<?php get_footer(); ?>
