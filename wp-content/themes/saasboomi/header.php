<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package dazzling
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<?php if (get_field('meta_title')): ?>
	<meta name="title" content="<?php echo get_field('meta_title'); ?>">
<?php else: ?>
	<meta name="title" content="SaaSBOOMi - The Pay it Forward Community for SaaS Founders">
<?php endif; ?>
<?php if (get_field('description')): ?>
	<meta name="description" content="<?php echo get_field('meta_description'); ?>">
<?php else: ?>
	<meta name="description" content="Asia’s largest community of founders and product builders shaping the SaaS ecosystem with a pay it forward philosophy at heart.">
<?php endif; ?>
<meta name="keywords" content="<?php echo get_field('meta_keywords'); ?>">


<?php if (get_field('meta_title')): ?>
	<meta property="og:title" content="<?php echo get_field('meta_title'); ?>">
<?php else: ?>
	<meta property="og:title" content="SaaSBOOMi - The Pay it Forward Community for SaaS Founders">
<?php endif; ?>
<?php if (get_field('description')): ?>
	<meta property="og:description" content="<?php echo get_field('meta_description'); ?>">
<?php else: ?>
	<meta property="og:description" content="Asia’s largest community of founders and product builders shaping the SaaS ecosystem with a pay it forward philosophy at heart.">
<?php endif; ?>
<?php if (get_field('meta_image')): ?>
<meta property="og:image" content="<?php echo get_field('meta_image')['url']?>">
<?php else: ?>
<meta property="og:image" content="<?php echo get_template_directory_uri()?>/img/meta_image.png">
<?php endif; ?>
<meta property="og:url" content="<?php echo get_permalink();?>">

<?php if (get_field('meta_title')): ?>
	<meta name="twitter:title" content="<?php echo get_field('meta_title'); ?>">
<?php else: ?>
	<meta name="twitter:title" content="SaaSBOOMi - The Pay it Forward Community for SaaS Founders">
<?php endif; ?>
<?php if (get_field('description')): ?>
	<meta name="twitter:description" content="<?php echo get_field('meta_description'); ?>">
<?php else: ?>
	<meta name="twitter:description" content="Asia’s largest community of founders and product builders shaping the SaaS ecosystem with a pay it forward philosophy at heart.">
<?php endif; ?>
<?php if (get_field('meta_image')): ?>
<meta name="twitter:image" content="<?php echo get_field('meta_image')['url']?>">
<?php else: ?>
<meta name="twitter:image" content="<?php echo get_template_directory_uri()?>/img/meta_image.png">
<?php endif; ?>
<meta name="twitter:card" content="summary"></meta>


<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" />

<?php wp_head(); ?>

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.min.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/hamburgers.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/sidenav.min.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/app.css">

</head>

<title>SaaSBOOMi</title>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-68163784-10"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-68163784-10');
</script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery-3.5.1.min.js"></script>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<div class="text-center paragraph announcement"><p class="paragraph" style="color: #FFFFFF; font-size: 12px">Read the Media announcement Shaping the SaaS landscape: a US$1 trillion opportunity for India’s startups <a href="<?php echo get_home_url()?>/press-release/shaping-the-saas-landscape-a-us1-trillion-opportunity-for-indias-startups/">Read more.</a></p></div>
	<header class="d-none d-lg-block  primary-header">
		<div class="header-top">
				<div class="container">
						<div class="row flex-centered">
								<div class="col-md-1 col-lg-1 left-blk" style="">
									<a href="<?php echo home_url(); ?>">
											<img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" class="logo" alt="SaaSBOOMi">
									</a>
								</div>
								<div class="col-md-8 col-lg-8">
										<ul class="list-inline middle-blk">
												<li class="list-inline-item">
													<a href="<?php echo get_permalink(790); ?>">Indian SaaS Tribe</a>
												</li>
												<li class="list-inline-item">
													<a href="<?php echo get_permalink(588); ?>">Playbook</a>
												</li>
												<li class="parent-li list-inline-item <?php if(in_array(get_the_ID(),[72,74])){ ?> active <?php } ?>">
														<a href="javascript:void(0)">
															<span>Events</span>
															<img src="<?php echo get_template_directory_uri(); ?>/img/down_arrow.svg" />
														</a>
														<div class="row dropdown-block" style="left: 34%;">
																<div class="col-md-12">
																		<div class="row">
																				<div class="col-md-6">
																						<ul class="list-unstyled">
																								<li>
																										<a href="<?php echo get_home_url()?>/saasboomi-annual-2021/" class="annual">
																												<h6>
																													<img src="<?php echo get_template_directory_uri(); ?>/img/menu_icon.svg" />
																													<span>Annual</span>
																												</h6>
																												<p class="support-text">
																														Asia’s Largest SaaS Conference, for Founders, by Founders
																												</p>
																										</a>
																								</li>
																								<li>
																										<a href="<?php echo get_permalink(117); ?>" class="growth">
																											<h6>
																												<img src="<?php echo get_template_directory_uri(); ?>/img/menu_icon.svg" />
																												<span>Growth</span>
																											</h6>
																											<p class="support-text">
																												Share and Learn Growth Ideas From the Best SaaS Leaders
																											</p>
																										</a>
																								</li>
																								<li>
																										<a href="<?php echo get_permalink(123); ?>" class="product">
																											<h6>
																												<img src="<?php echo get_template_directory_uri(); ?>/img/menu_icon.svg" />
																												<span>Product</span>
																											</h6>
																											<p class="support-text">
																													Learn to build product that sell themselves
																											</p>
																										</a>
																								</li>
																						</ul>
																				</div>
																				<div class="col-md-6">
																						<ul class="list-unstyled">
																							<li>
																									<a href="<?php echo get_permalink(119); ?>" class="build">
																										<h6>
																											<img src="<?php echo get_template_directory_uri(); ?>/img/menu_icon.svg" />
																											<span>Build</span>
																										</h6>
																										<p class="support-text">
																												Dive Into Product Success With Passionate Founders, Product and Engineering Leaders
																										</p>
																									</a>
																							</li>
																							<li>
																									<a href="<?php echo get_permalink(121); ?>" class="enterprise">
																										<h6>
																											<img src="<?php echo get_template_directory_uri(); ?>/img/menu_icon.svg" />
																											<span>Enterprise</span>
																										</h6>
																										<p class="support-text">
																												Exclusive Event for Enterprise SaaS Startups
																										</p>
																									</a>
																							</li>
																						</ul>
																				</div>
																		</div>
																</div>
														</div>
												</li>
												<li class="parent-li list-inline-item <?php if(in_array(get_the_ID(),[101,70])){ ?> active <?php } ?>">
														<a href="javascript:void(0)">
															<span>Initiatives</span>
															<img src="<?php echo get_template_directory_uri(); ?>/img/down_arrow.svg" />
														</a>
														<div class="row dropdown-block" style="left: 50%;">
															<div class="col-md-12">
																	<div class="row">
																			<div class="col-md-6">
																					<ul class="list-unstyled">
																							<li>
																									<a href="<?php echo get_permalink(348); ?>" class="awards">
																											<h6>
																												<img src="<?php echo get_template_directory_uri(); ?>/img/menu_icon.svg" />
																												<span><i>Awards</i></span>
																											</h6>
																											<p class="support-text">
																													Annual Awards To Recognize Desrving Indian SaaS Startups
																											</p>
																									</a>
																							</li>
																							<li>
																									<a href="<?php echo get_permalink(350); ?>" class="growthx">
																										<h6>
																											<img src="<?php echo get_template_directory_uri(); ?>/img/menu_icon.svg" />
																											<span><i>GrowthX</i></span>
																										</h6>
																										<p class="support-text">
																											Personalized Coaching Program For SaaS Startups
																										</p>
																									</a>
																							</li>
																							<li>
																									<a href="<?php echo get_permalink(353); ?>" class="debt-fund">
																										<h6>
																											<img src="<?php echo get_template_directory_uri(); ?>/img/menu_icon.svg" />
																											<span><i>Debt Fund</i></span>
																										</h6>
																										<p class="support-text">
																												Support, Mentor, and Guide SaaS Startups Through Challenging Times
																										</p>
																									</a>
																							</li>
																					</ul>
																			</div>
																			<div class="col-md-6">
																					<ul class="list-unstyled">
																						<li>
																								<a href="<?php echo get_permalink(355); ?>" class="suraksha">
																									<h6>
																										<img src="<?php echo get_template_directory_uri(); ?>/img/menu_icon.svg" />
																										<span><i>Suraksha</i></span>
																									</h6>
																									<p class="support-text">
																											Comprehensive And Affordable Employee Health Insurance
																									</p>
																								</a>
																						</li>
																						<li>
																								<a href="<?php echo get_permalink(357); ?>" class="saathi">
																									<h6>
																										<img src="<?php echo get_template_directory_uri(); ?>/img/menu_icon.svg" />
																										<span><i>Saathi</i></span>
																									</h6>
																									<p class="support-text">
																											With Founders When Nobody Else is. Your Support During The Tough Times
																									</p>
																								</a>
																						</li>
																					</ul>
																			</div>
																	</div>
															</div>
														</div>
												</li>
												<li class="parent-li list-inline-item">
														<a href="<?php echo get_permalink(663); ?>">Knowledge Hub</a>
												</li>
												<li class="parent-li list-inline-item <?php if(in_array(get_the_ID(),[101,70])){ ?> active <?php } ?>" >
														<a href="javascript:void(0)" >
															<span>About Us</span>
															<img src="<?php echo get_template_directory_uri(); ?>/img/down_arrow.svg" />
														</a>
														<div class="row dropdown-block secondary-dropdown-block about-us-dropdown-block" style="left: 60%;">
															<div class="col-md-12">
																	<div class="row">
																			<div class="col-md-6">
																					<ul class="list-unstyled">
																							<li>
																									<a href="<?php echo get_permalink(770); ?>" class="our-story">
																											<h6>
																												<span>Our Story</span>
																											</h6>
																											<p class="support-text">
																													Learn about the origin, mission and much more about SaaSBOOMi
																											</p>
																									</a>
																							</li>
																							<li>
																								<a href="<?php echo get_home_url() ?>/culture/" class="our-story side-nav-link">
																									<h6>
																										<span class="paragraph">Culture & Values</span>
																									</h6>
																									<p class="support-text">Values and Behaviours that SaaSBOOMi Founders and Volunteers are expected to personify</p>
																								</a>
																							</li>
																							<li>
																								<a href="<?php echo get_home_url() ?>/saastreasure/" class="our-story side-nav-link">
																									<h6>
																										<span class="paragraph" style="text-transform: none">SaaSTreasure</span>
																									</h6>
																									<p class="support-text">We are a community of SaaS Founders and product builders shaping India’s SaaS industry.</p>
																								</a>
																							</li>
																					</ul>
																			</div>
																			<div class="col-md-6">
																					<ul class="list-unstyled">
																						<li>
																								<a href="<?php echo get_permalink(772); ?>" class="our-story">
																									<h6>
																										<img src="<?php echo get_template_directory_uri(); ?>/img/menu_icon.svg" />
																										<span>Be Part of SaaSBOOMi</span>
																									</h6>
																									<p class="support-text">
																											Join Us in Building the future of SaaS Ecosystem
																									</p>
																								</a>
																						</li>
																						<li>
																								<a href="<?php echo get_home_url(); ?>/press-release/" class="our-story">
																									<h6>
																										<span>Press Release</span>
																									</h6>
																									<p class="support-text">
																										Learn more about press releases and media coverage
																									</p>
																								</a>
																						</li>
																					</ul>
																			</div>
																			
																	</div>
															</div>
														</div>
												</li>
										</ul>
								</div>
								<div class="col-md-3 col-lg-3 right-blk text-right" style="">
									<a href="<?php echo get_permalink(1146); ?>" class="primary-btn primary-btn-dark btn-small join-btn">Join The Community</a>
								</div>
						</div>
				</div>
	</header>
	<div class="d-none d-lg-block height-block" style="height: 90px; display: none"></div>

	<header class="d-md-block d-sm-block d-lg-none secondary-header">
			<div class="mobile-header">
					<div class="header-blk">
							<a href="javascript:void(0)" class=" hamburger hamburger--collapse toggle sidenav-toggle-hambergur hidden-md hidden-lg" type="button" id="sidenav-toggle">
								<span class="hamburger-box">
												<span class="hamburger-inner"></span>
								</span>
							</a>
							<a class="logo-blk" href="<?php echo home_url(); ?>">
									<img class="logo-img" src="<?php echo get_template_directory_uri(); ?>/img/logo_white.svg" alt="SaaSBOOMi">
							</a>
					</div>
			</div>
			<div id="sideNav" class="sidenav" data-sidenav data-sidenav-toggle="#sidenav-toggle">
				<ul class="sidenav-menu">
					<li class="hidden <?php if(in_array(get_the_ID(),[150, 154])){ ?> active <?php } ?>">
							<a href="javascript:void(0)" data-sidenav-dropdown-toggle class="side-nav-link">
								<span class="sidenav-link-title">
										COMPANY
										<span class="sidenav-dropdown-icon show" data-sidenav-dropdown-icon>
											<i class="fa fa-caret-up" aria-hidden="true"></i>
										</span>
										<span class="sidenav-dropdown-icon" data-sidenav-dropdown-icon>
											<i class="fa fa-caret-up" aria-hidden="true"  style="transform:rotate(180deg);padding-top: 10px"></i>
										</span>
								</span>
							</a>
							<ul class="sidenav-dropdown secondary-list second-menu" data-sidenav-dropdown>
									<li class="<?php if(in_array(get_the_ID(),[150])){ ?> active <?php } ?>">
											<a class="side-nav-link" href="<?php echo get_permalink(150); ?>">About Us</a>
									</li>
									<li class="<?php if(in_array(get_the_ID(),[154])){ ?> active <?php } ?>">
											<a class="side-nav-link" href="<?php echo get_permalink(154); ?>">What We Do</a>
									</li>
							</ul>
					</li>
					<li class="<?php if(in_array(get_the_ID(),[790])){ ?> active <?php } ?>">
						<a href="<?php echo get_permalink(790); ?>" class="side-nav-link" data-sidenav-dropdown-toggle>
							<span class="sidenav-link-title heading4">
								Indian SaaS Tribe
							</span>
						</a>
					</li>
					<li class="<?php if(in_array(get_the_ID(),[588])){ ?> active <?php } ?>">
						<a href="<?php echo get_permalink(588); ?>" class="side-nav-link" data-sidenav-dropdown-toggle>
							<span class="sidenav-link-title heading4">
								Playbook
							</span>
						</a>
					</li>
					<li class="parent-menu">
						<a href="javascript:void(0)" class="side-nav-link" data-sidenav-dropdown-toggle>
							<span class="sidenav-link-title heading4">
								Events
								<span class="sidenav-dropdown-icon show" data-sidenav-dropdown-icon>
									<img src="<?php echo get_template_directory_uri(); ?>/img/right_arrow.svg" alt="Go" />
								</span>
								<span class="sidenav-dropdown-icon" data-sidenav-dropdown-icon>
									<img src="<?php echo get_template_directory_uri(); ?>/img/right_arrow.svg" alt="Go" />
								</span>
							</span>
						</a>
						<div class="submenu-wrapper">
							<div class="submenu-heading">
								<p>
									<a href="javascript:void(0)" class="submenu-back-btn">
										<img src="<?php echo get_template_directory_uri(); ?>/img/back_arrow.svg" />
										<span class="support-text">BACK</span>
									</a>
								</p>
								<h6 class="heading4">Events</h6>
							</div>
							<ul class="list-unstyled">
									<li>
											<a href="<?php echo get_home_url()?>/saasboomi-annual-2021/" class="annual side-nav-link">
													<img src="<?php echo get_template_directory_uri(); ?>/img/annual_logo_black.svg" />
													<p class="support-text">
															Asia’s Largest SaaS Conference, for Founders, by Founders
													</p>
											</a>
									</li>
									<li>
											<a href="<?php echo get_permalink(117); ?>" class="growth side-nav-link">
												<img src="<?php echo get_template_directory_uri(); ?>/img/growth_logo_black.svg" />
												<p class="support-text">
													Share and Learn Growth Ideas From the Best SaaS Leaders
												</p>
											</a>
									</li>
									<li>
											<a href="<?php echo get_permalink(123); ?>" class="product side-nav-link">
												<img src="<?php echo get_template_directory_uri(); ?>/img/product_logo_black.svg" />
												<p class="support-text">
														Learn to build product that sell themselves
												</p>
											</a>
									</li>
									<li>
											<a href="<?php echo get_permalink(119); ?>" class="build side-nav-link">
												<img src="<?php echo get_template_directory_uri(); ?>/img/build_logo_black.svg" />
												<p class="support-text">
														Dive Into Product Success With Passionate Founders, Product and Engineering Leaders
												</p>
											</a>
									</li>
									<li>
											<a href="<?php echo get_permalink(121); ?>" class="enterprise side-nav-link">
												<img src="<?php echo get_template_directory_uri(); ?>/img/enterprise_logo_black.svg" />
												<p class="support-text">
														Exclusive Event for Enterprise SaaS Startups
												</p>
											</a>
									</li>
							</ul>
						</div>
					</li>
					<li class="parent-menu">
						<a href="javascript:void(0)" class="side-nav-link" data-sidenav-dropdown-toggle>
							<span class="sidenav-link-title heading4">
								Initiatives
								<span class="sidenav-dropdown-icon show" data-sidenav-dropdown-icon>
									<img src="<?php echo get_template_directory_uri(); ?>/img/right_arrow.svg" alt="Go" />
								</span>
								<span class="sidenav-dropdown-icon" data-sidenav-dropdown-icon>
									<img src="<?php echo get_template_directory_uri(); ?>/img/right_arrow.svg" alt="Go" />
								</span>
							</span>
						</a>
						<div class="submenu-wrapper">
							<div class="submenu-heading">
								<p>
									<a href="javascript:void(0)" class="submenu-back-btn">
										<img src="<?php echo get_template_directory_uri(); ?>/img/back_arrow.svg" />
										<span class="support-text">BACK</span>
									</a>
								</p>
								<h6 class="heading4">Initiatives</h6>
							</div>
							<ul class="list-unstyled">
									<li>
											<a href="<?php echo get_permalink(348); ?>" class="awards side-nav-link">
													<img src="<?php echo get_template_directory_uri(); ?>/img/awards_logo_black.svg" />
													<p class="support-text">
															Annual Awards To Recognize Desrving Indian SaaS Startups
													</p>
											</a>
									</li>
									<li>
											<a href="<?php echo get_permalink(350); ?>" class="growthx side-nav-link">
												<img src="<?php echo get_template_directory_uri(); ?>/img/growthx_logo_black.svg" />
												<p class="support-text">
													Personalized Coaching Program For SaaS Startups
												</p>
											</a>
									</li>
									<li>
											<a href="<?php echo get_permalink(353); ?>" class="debt-fund side-nav-link">
												<img src="<?php echo get_template_directory_uri(); ?>/img/debt_fund_logo_black.svg" />
												<p class="support-text">
														Support, Mentor, and Guide SaaS Startups Through Challenging Times
												</p>
											</a>
									</li>
									<li>
											<a href="<?php echo get_permalink(355); ?>" class="suraksha side-nav-link">
												<img src="<?php echo get_template_directory_uri(); ?>/img/suraksha_logo_black.svg" />
												<p class="support-text">
														Comprehensive And Affordable Employee Health Insurance
												</p>
											</a>
									</li>
									<li>
											<a href="<?php echo get_permalink(357); ?>" class="saathi side-nav-link">
												<img src="<?php echo get_template_directory_uri(); ?>/img/saathi_logo_black.svg" />
												<p class="support-text">
														With Founders When Nobody Else is. Your Support During The Tough Times
												</p>
											</a>
									</li>
							</ul>
						</div>
					</li>
					<li class="parent-menu">
						<a href="javascript:void(0)" class="side-nav-link" data-sidenav-dropdown-toggle>
							<span class="sidenav-link-title heading4">
								Knowledge Hub
								<span class="sidenav-dropdown-icon show" data-sidenav-dropdown-icon>
									<img src="<?php echo get_template_directory_uri(); ?>/img/right_arrow.svg" alt="Go" />
								</span>
								<span class="sidenav-dropdown-icon" data-sidenav-dropdown-icon>
									<img src="<?php echo get_template_directory_uri(); ?>/img/right_arrow.svg" alt="Go" />
								</span>
							</span>
						</a>
						<div class="submenu-wrapper">
							<div class="submenu-heading">
								<p>
									<a href="javascript:void(0)" class="submenu-back-btn">
										<img src="<?php echo get_template_directory_uri(); ?>/img/back_arrow.svg" />
										<span class="support-text">BACK</span>
									</a>
								</p>
								<h6 class="heading4">Knowledge Hub</h6>
							</div>
							<ul class="list-unstyled">
									<li>
											<a href="<?php echo get_permalink(663); ?>" class="our-story side-nav-link">
													<h6>
														<span class="paragraph">Overview</span>
													</h6>
													<p class="support-text hidden">
															Learn about the origin, mission and much more about SaaSBOOMi
													</p>
											</a>
									</li>
									<li>
											<a href="<?php echo get_permalink(670); ?>" class="our-story side-nav-link">
												<h6>
													<span class="paragraph">Podcasts</span>
												</h6>
												<p class="support-text hidden">
														Join Us in Building the future of SaaS Ecosystem
												</p>
											</a>
									</li>
									<li>
											<a href="<?php echo get_permalink(663); ?>" class="our-story">
												<h6>
													<span class="paragraph">Blogs</span>
												</h6>
												<p class="support-text hidden">
														Join Us in Building the future of SaaS Ecosystem
												</p>
											</a>
									</li>
							</ul>
						</div>
					</li>
					<li class="parent-menu">
						<a href="javascript:void(0)" class="side-nav-link" data-sidenav-dropdown-toggle>
							<span class="sidenav-link-title heading4">
								About Us
								<span class="sidenav-dropdown-icon show" data-sidenav-dropdown-icon>
									<img src="<?php echo get_template_directory_uri(); ?>/img/right_arrow.svg" alt="Go" />
								</span>
								<span class="sidenav-dropdown-icon" data-sidenav-dropdown-icon>
									<img src="<?php echo get_template_directory_uri(); ?>/img/right_arrow.svg" alt="Go" />
								</span>
							</span>
						</a>
						<div class="submenu-wrapper">
							<div class="submenu-heading">
								<p>
									<a href="javascript:void(0)" class="submenu-back-btn">
										<img src="<?php echo get_template_directory_uri(); ?>/img/back_arrow.svg" />
										<span class="support-text">BACK</span>
									</a>
								</p>
								<h6 class="heading4">About Us</h6>
							</div>
							<ul class="list-unstyled">
									<li>
											<a href="<?php echo get_permalink(770); ?>" class="our-story side-nav-link">
													<h6>
														<span class="paragraph">Our Story</span>
													</h6>
													<p class="support-text">
															Learn about the origin, mission and much more about SaaSBOOMi
													</p>
											</a>
									</li>
									<li>
											<a href="<?php echo get_permalink(772); ?>" class="our-story side-nav-link">
												<h6>
													<span class="paragraph">Be Part of SaaSBOOMi</span>
												</h6>
												<p class="support-text">
														Join Us in Building the future of SaaS Ecosystem
												</p>
											</a>
									</li>
									<li>
										<a href="<?php echo get_home_url() ?>/culture/" class="our-story side-nav-link">
											<h6>
												<span class="paragraph">Culture & Values</span>
											</h6>
											<p class="support-text">
												Values and Behaviours that SaaSBOOMi Founders and Volunteers are expected to personify
											</p>
										</a>
									</li>
									<li>
										<a href="<?php echo get_home_url() ?>/press-release/" class="our-story side-nav-link">
											<h6>
												<span class="paragraph">Press Release</span>
											</h6>
											<p class="support-text">
												Learn more about press releases and media coverage
											</p>
										</a>
									</li>
									<li>
										<a href="<?php echo get_home_url() ?>/saastreasure/" class="our-story side-nav-link">
											<h6>
												<span class="paragraph" style="text-transform: none">SaaSTreasure</span>
											</h6>
											<p class="support-text">
												We are a community of SaaS Founders and product builders shaping India’s SaaS industry.
											</p>
										</a>
									</li>
							</ul>
						</div>
					</li>
				</ul>
				<div class="header-content-blk text-center">
					<img class="logo" src="<?php echo get_template_directory_uri(); ?>/img/logo_gray.svg" alt="SaaSBOOMi">
					<h5 class="support-text">
						We are a community of founders and product <br/>
						builders shaping India’s SaaS industry.
					</h5>
					<p>
						<a href="<?php echo get_permalink(1146); ?>" class="primary-btn primary-btn-dark btn-large">
							Join The Community
						</a>
					</p>
					<h6 class="end-line text-center"><span></span></h6>
				</div>
			</div>
	</header>
