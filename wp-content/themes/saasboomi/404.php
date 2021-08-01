<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package dazzling
 */

get_header(); ?>

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/404-page.css">

		<section class="banner-404-section">
				<div class="banner-slider flex-centered">
						<div class="container">
							<div class="row flex-centered error-page text-center">
								<div class="col-lg-12">
									<img src="<?php echo get_template_directory_uri(); ?>/img/page_not_found.png"  alt="404" />
									<h2 class="heading5">Whoooops, that page is gone</h2>
									<p>
										<a href="<?php echo home_url(); ?>" class="primary-btn primary-btn-dark btn-large">Back to home</a>
									</p>
								</div>
							</div>
						</div>
				</div>
		</section>

<?php get_footer(); ?>
