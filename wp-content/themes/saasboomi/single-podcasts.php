<?php get_header(); ?>

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/detail-page.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/animate.css">

<div class="detail-page podcast-detail-page">

<?php if(have_posts()) : the_post(); ?>

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
					<h1 class="heading2"><?php echo get_the_title(); ?></h1>
				  <div class="row author-info-row flex-centered">
						<div class="col-md-6 col-12 col-sm-6">
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

	<section class="blog-detail-section">
  <div class="container">
		<div class="row blog-detail-row">
			<div class="col-md-10 offset-md-1 offset-lg-2 col-lg-8 col-sm-12 col-12">
				<?php if(get_field('embed_link')): ?>
          <div class="img-blk">
          <?php echo get_field('embed_link') ?>
          </div>
				<?php else: ?>
					<img class="hidden" src="<?php echo get_template_directory_uri()?>/img/podcast_placeholder.png" alt="Podcasts Placeholder">
				<?php endif; ?>
				<div class="author-blk host-blk">
					<div class="row guest-host-row">
						<div class="col-md-6 col-lg-6 col-12">
							<?php
								$hosts = CFS()->get('guest_details');
								if($hosts && count($hosts)):
							?>
							<h3 class="support-text">OUR GUESTS</h3>
							<ul class="list-inline">
								<?php foreach($hosts as $host): ?>
								<li class="list-inline-item flex-centered">
										<?php if($host['profile_picture']): ?>
											<img src="<?php echo $host['profile_picture']?>" alt="image"/>
										<?php else: ?>
											<img src="<?php echo get_template_directory_uri(); ?>/img/default_profile_picture.png"  alt="Profile Pic" />
										<?php endif; ?>
										<div class="content-blk">
											<h4 class="heading5">
												<?php echo $host["name"] ?>
											</h4>
											<h5 class="support-text">
												<span><?php echo $host["designation"]?></span>
												<?php if($host['company']): ?>
												<span class="comma">, </span>
												<span><?php echo $host["company"] ?></span>
												<?php endif; ?>
											</h5>
										</div>
								</li>
								<?php endforeach;?>
							</ul>
							<?php endif; ?>
						</div>
						<div class="col-md-6 col-lg-6 col-12">
							<?php
								$hosts = CFS()->get('host_details');
								if($hosts && count($hosts)):
							?>
							<h3 class="support-text">OUR HOST</h3>
							<ul class="list-inline">
								<?php foreach($hosts as $host): ?>
								<li class="list-inline-item flex-centered">
										<?php if($host['profile_picture']): ?>
											<img src="<?php echo $host['profile_picture']?>" alt="image"/>
										<?php else: ?>
											<img src="<?php echo get_template_directory_uri(); ?>/img/default_profile_picture.png"  alt="Profile Pic" />
										<?php endif; ?>
										<div class="content-blk">
											<h4 class="heading5">
												<?php echo $host["name"] ?>
											</h4>
											<h5 class="support-text">
												<span><?php echo $host["designation"]?></span>
												<?php if($host['company']): ?>
												<span class="comma">, </span>
												<span><?php echo $host["company"] ?></span>
												<?php endif; ?>
											</h5>
										</div>
								</li>
								<?php endforeach;?>
							</ul>
							<?php endif; ?>
						</div>
					</div>
				</div>
				<?php if(get_the_content()): ?>
				<div class="social-media-blk">
	        <?php echo do_shortcode('[addtoany]') ?>
	      </div>
				<?php endif; ?>
				<div class="content-blk dynamic-content">
	        <?php the_content(); ?>
	      </div>
				<?php if(get_field('author_image') || get_field('author_designation') || get_field('author_company') || get_field('about_author')): ?>
					<div class="author-info-wrapper">
					<h4 class="heading4 written-by">
						Written by
					</h4>
					<div class="author-blk flex-centered">
						<?php if(get_field('author_image')): ?>
							<img src="<?php echo get_field('author_image')['url']?>" alt="image"/>
						<?php else: ?>
							<img src="<?php echo get_template_directory_uri(); ?>/img/default_profile_picture.png"  alt="Profile Pic" />
						<?php endif; ?>
						<div class="author-info">
							<h4 class="heading4">
								<?php echo get_field('author_name') ?>
							</h4>
							<h5 class="support-text">
								<span><?php echo get_field('author_designation') ?></span>
								<span><?php echo get_field('author_company') ?></span>
							</h5>
							<h6 class="paragraph"><?php echo get_field('about_author') ?></h6>
						</div>
					</div>
				</div>
				<?php endif; ?>
		</div>
  </div>
</section>

<?php endif; ?>

<?php
    $post_IDS = [];
    array_push($post_IDS,get_the_ID());
    $cat_ids = [];
    $cats = get_categories('taxonomy=podcasts-category&type=podcasts');
    if($cats){
        foreach ($cats as $cat){
            array_push($cat_ids,$cat->term_id);
        }
    }
    $args = array(
        'post_type' => 'podcasts',
        'posts_per_page' => 3,
        'post_status' => 'publish',
        'order' => 'desc',
        'post__not_in' => $post_IDS,
        // 'category__in' => $cat_ids
    );
    $the_query = new WP_Query( $args );

    if ( $the_query->have_posts() ) :
?>
  <section class="podcasts-section featured-podcast-section">
    <div class="container container-wrapper">
      <div class="row title-row">
        <div class="col-12">
          <h2 class="heading2">Listen to More Podcasts</h2>
        </div>
      </div>
      <div class="podcast-outer-wrapper">
        <div class="podcast-content-wrapper">
          <div class="row content-row">
            <?php  while ( $the_query->have_posts() ) : $the_query->the_post();  ?>
            <div class="col-sm-6 col-md-6 col-lg-4 col-12 ">
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
                           // $taxonomies = get_categories('taxonomy=podcasts-category&type=podcasts');
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
            <?php endwhile; wp_reset_postdata();?>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php endif; ?>

<?php get_template_part('templates/template-newsletter'); ?>

</div>

<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery-scrolltofixed-min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/wow.min.js"></script>

<script type="text/javascript">
  $(document).ready(function () {

		new WOW().init();

		if ($(window).outerWidth() > 767) {
			$('.social-media-blk').scrollToFixed({
					marginTop: 130,
					zIndex: 0,
					limit: $('.featured-podcast-section').offset().top - 100
			});
		}
  });
</script>

<?php get_footer(); ?>
