<?php
/*
* Template Name: All Podcasts
*/ ?>

<?php get_header(); ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/annual-events-page.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/knowledge-hub-page.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/animate.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/owl.carousel.min.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/select2.min.css">

<div class="event-annual-page knowledge-hub-page all-podcast-page">

  <section class="banner-section">
    <div class="container container-wrapper">
      <div class="row title-row flex-centered">
        <div class="col-sm-6 col-md-6 col-lg-6 col-12 ">
          <h1 class="heading1">Podcasts</h1>
          <p class="paragraph">
            Listen to the voice of Indian SaaS
          </p>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-6 col-12 ">
          <div class="img-blk text-right">
            <img class="featured-img" src="<?php echo get_template_directory_uri(); ?>/img/all_podcast_featured_img.png"  alt="All Podcasts" />
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="podcasts-section featured-podcast-section">
    <div class="container container-wrapper">
      <div class="row title-row">
        <div class="col-12">
          <h2 class="heading2">Featured Episodes</h2>
        </div>
      </div>
      <div class="podcast-outer-wrapper">
        <div class="podcast-content-wrapper">
          <div class="row content-row">
            <?php
              $args = array(
                  'post_type' => 'podcasts',
                  'posts_per_page' => 3,
                  'post_status' => 'publish',
                  'order'		=> 'Desc',
                  'meta_query' => array(
                      array(
                          'key' => 'featured_podcast',
                          'compare' => '=',
                          'value' => '1',
                      )
                  ),
              );
              $the_query = new WP_Query( $args );
              if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();
            ?>
            <div class="col-sm-6 col-md-4 col-lg-4 col-12 ">
              <div class="item">
                <a href="<?php echo get_permalink(); ?>" class="card-wrapper">
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
                          <li class="list-inline-item">
                            <img class="tag-img" src="<?php echo get_template_directory_uri(); ?>/img/tag.svg"  alt="Tag" />
                          </li>
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
            </div>
            <?php endwhile; wp_reset_postdata(); else : ?>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section class="podcast-series-section">
    <div class="container container-wrapper">
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
                <?php if(!($podcast->slug == 'uncategorized')) : ?>
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
      </div>
    </div>
  </section>


  <section class="explore-content-section" id="exploreContentSection">
    <div class="container container-wrapper">
      <div class="row title-row">
        <div class="col-12">
          <h2 class="heading2">Explore Podcasts</h2>
        </div>
      </div>
      <div class="row content-row">
        <div class="col-12">
          <div class="row filter-main-row">
            <div class="col-sm-4 col-md-4 col-lg-3 col-12 ">
              <div class="filter-wrapper">
                <h5 class="heading5">CATEGORY</h5>
                <form>
                  <?php
                    $args = array(
                      'post_type' => array( 'podcasts' ),
                      'posts_per_page' => -1,
                      'post_status' => 'publish',
                      'order'		=> 'desc',
                    );
                    $all = new WP_Query( $args );
                  ?>
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
                <h5 class="heading5 content-type">Series</h5>
                <form>
                  <div class="custom-checkbox series" data-category-slug="all">
                    <input type="checkbox" <?php if(!isset($_GET['series']) || $_GET['series'] =='all'){?> checked <?php }?> class="custom-control-input" >
                    <label class="custom-control-label paragraph" for="customCheck1"><span>All</span></label>
                    <span class="count paragraph"><?php echo $all->post_count ?></span>
                  </div>
                  <?php
                    $categories = get_terms('podcasts-series-category');
                    if($categories):
                    foreach($categories as $category):
                  ?>
                    <div class="custom-checkbox series" data-category-slug="<?php echo $category->slug ?>">
                      <input type="checkbox" <?php if(isset($_GET['series']) && $_GET['series'] == $category->slug) {?> checked <?php }?> class="custom-control-input">
                      <label class="custom-control-label paragraph" for="customCheck1"><span><?php echo $category->name ?></span></label>
                      <span class="count paragraph"><?php echo $category->count?></span>
                    </div>
                    <?php endforeach; endif; ?>
                </form>
              </div>
            </div>
            <div class="col-sm-8 col-md-8 col-lg-9 col-12 ">
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
                  $args = array(
                    'post_type' => 'podcasts',
                    'posts_per_page' => 4,
                    'post_status' => 'publish',
                    'meta_key'	=> 'published_date',
                    'orderby'	=> 'meta_value',
                    'order'		=> 'Desc',
                    'paged'=> $paged,
                  );
                  $args['tax_query'] = array();
                  if(isset($_GET['series']) && $_GET['series'] != 'all'){
                    $args['tax_query']['relation'] = 'AND';
                    $category = array(
                        'taxonomy' => 'podcasts-series-category',
                        'field' => 'slug',
                        'terms' => $_GET['series'],
                        'operator' => 'IN',
                    );
                    array_push($args['tax_query'],$category);
                  }
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
                        </div>
                      </div>
                    </div>
                  </a>
                  <?php endif; ?>
                <?php endwhile; wp_reset_postdata();  ?>
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

    $('#sortByFilter').select2({minimumResultsForSearch: -1});

    $('#showMore').on('click',function(){
        if($(this).hasClass('show-active')){
          $('.overview-wrapper').find('.card-hidden').css('height','0').css('display','none').slideUp(300);
            $(this).removeClass('show-active');
            $(this).find('span').text('View More');
        }
        else{
            $('.overview-wrapper').find('.card-hidden').css('height','auto').css('display','block').slideDown(500);
            $(this).addClass('show-active');
            $(this).find('span').text('View Less');
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

    $('.series').on('click', function(){
      var $this = $(this);
      var val = $this.attr('data-category-slug');
      var paged = '<?php echo get_query_var('paged')?>';
      if(paged && paged!= '0'){
        var url = '<?php echo get_permalink(); ?>';
      }else{
        var url = window.location.href;
      }
      if(val != 'all'){
        param = addParam(url, 'series', val);
        window.location.href = param;
      }
      else{
        param = addParam(url, 'series', val);
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

    var series = null;
    var category = null;
    var sort  = null;
    <?php if(isset($_GET['series']) && $_GET['series']): ?>
      series = '<?php echo $_GET['series'] ?>' ;
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
              'series': series,
              'sort': sort,
              'action': 'podcast_search' //this is the name of the AJAX method called in WordPress
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
                    html += '<img src="<?php echo get_template_directory_uri(); ?>/img/podcast_icon_white.svg" alt="Image">';
                    html += '<span>PODCAST</span>';
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
          error: function (error) {
              console.log(error);
          }
      });
    });

    <?php if(
      (isset($_GET['series']) && in_array($_GET['series'], ['all', 'post', 'podcasts'])) ||
      (isset($_GET['category']) && $_GET['category']) ||
      (isset($_GET['sort']) && in_array($_GET['sort'], ['alphabetical']))
      ):?>
      $([document.documentElement, document.body]).animate({
          scrollTop: $("#exploreContentSection").offset().top - 100
      }, 1000);
    <?php endif?>

    $('#sortByFilter').on('change', function (){
        var $this = $(this);
        var val = $(this).val();
        var paged = '<?php echo get_query_var('paged')?>';
        if(paged && paged!= '0'){
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

  });
</script>

<?php get_footer(); ?>
