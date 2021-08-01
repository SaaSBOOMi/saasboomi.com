<?php
/*
* Template Name: McKinsey Report
*/ ?>
<?php get_header(); ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/home-page.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/owl.carousel.min.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/animate.css">
    <div class="mckinsey-report">
        <section class="banner-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <h2>The McKinsey Report</h2>
                        <h1>Shaping India’s SaaS landscape</h1>
                        <a href="javascript:void(0)">Get the report</a>
                    </div>
                    <div class="col-md-5">
                        <img src="<?php echo get_template_directory_uri()?>/img/saas_landscape.png" alt="SaaS Landscape"/>
                    </div>
                </div>
            </div>
        </section>
        <section class="key-insights">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Key Insights on the Indian SaaS Opportunity</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <img src="<?php echo get_template_directory_uri();?>/img/saas_grow.svg" alt="Saas grow" />
                        <h3>All Software will be SaaS</h3>
                        <p>SaaS penetration will grow from ~35% in 2019 to 90%+ by 2030 implying global market of $1300Bn by 2030</p>
                    </div>
                    <div class="col-md-6">
                        <img src="<?php echo get_template_directory_uri();?>/img/saas_grow.svg" alt="Saas grow" />
                        <h3>Indian SaaS potentially a $1Tn value Opportunity</h3>
                        <p>Indian pure-play SaaS ecosystem can potentially reach $50-70Bn in revenues generating $500B - 1Tn in enterprise value by 2030 (similar in value of Indian IT services industry by 2030)</p>
                    </div>
                    <div class="col-md-6">
                        <img src="<?php echo get_template_directory_uri();?>/img/saas_grow.svg" alt="Saas grow" />
                        <h3>3 Key areas will need Attention</h3>
                        <ul class="listUnstyled">
                            <li>Investment in GTM (esp. early stage) & maturity of template to scale</li>
                            <li>Scale-up critical SaaS talent by 3-4x</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <img src="<?php echo get_template_directory_uri();?>/img/saas_grow.svg" alt="Saas grow" />
                        <h3>India has a right to win in SaaS</h3>
                        <ul class="listUnstyled">
                            <li>Democratization of SaaS beyond large enterprises (~70% of global mkt.)</li>
                            <li>Strong techno functional domain expertise (55-60% of global IT & Ops workflows run from India)</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </div>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/wow.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/parsley.min.js"></script>
<?php get_footer(); ?>