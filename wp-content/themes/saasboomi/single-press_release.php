<?php get_header(); ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/detail-page.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/animate.css">
<div class="detail-page blog-detail-page">

    <?php if (have_posts()) : the_post(); ?>

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
                                $categories = get_the_category(get_the_ID());
                                ?>
                            <ul class="list-inline tags-list">
                                <?php foreach ($categories as $key => $category) : ?>
                                    <?php if (!($category->slug == 'uncategorized')) : ?>
                                        <li class="list-inline-item">
                                            <span class="support-text"><?php echo $category->name; ?></span>
                                        </li>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        <h1 class="heading2"><?php echo get_the_title(); ?></h1>
                        <p class="support-text date-info">
                            <?php if (get_field('published_date')) : ?>
                                <span class="date">
                                    <?php $date = DateTime::createFromFormat('d/m/Y', get_field('published_date')); ?>
                                    <?php echo $date->format('d M Y'); ?>
                                </span>
                            <?php else : ?>
                                <span class="date">
                                    <?php echo get_the_date('d M Y'); ?>
                                </span>
                            <?php endif; ?>
                            <?php if (get_field('read_time')) : ?>
                                <span class="dot-blk">•</span>
                                <span class="read-time"> <?php echo get_field('read_time'); ?></span>
                            <?php endif; ?>
                        </p>
                        <div class="row author-info-row">
                            <div class="col-md-8 col-12 col-sm-12">
                                
                            </div>
                            <div class="col-md-4 col-12 col-sm-12">
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
                        <div class="img-blk blog-detail-img-blk">
                            <?php if (get_the_post_thumbnail_url()) : ?>
                                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_the_title(); ?>">
                            <?php else : ?>
                                <img src="<?php echo get_template_directory_uri() ?>/img/press_release_placeholder.png" alt="Blog Placeholder">
                            <?php endif; ?>
                        </div>
                        <div class="social-media-blk">
                            <?php echo do_shortcode('[addtoany]') ?>
                        </div>
                        <div class="content-blk dynamic-content">
                            <?php the_content(); ?>
                        </div>
                        <div class="author-info-wrapper">
                            <?php if (get_field('author_image') || get_field('author_designation') || get_field('author_company') || get_field('about_author') || get_field('author_linkedin_link')) : ?>
                                <h4 class="heading4 written-by">
                                    Written by
                                </h4>
                                <div class="blog-author-wrapper">
                                    <a href="<?php if (get_field('author_linkedin_link')) : ?> <?php echo get_field('author_linkedin_link') ?> <?php else : ?> javascript:void(0) <?php endif; ?>" <?php if (get_field('author_linkedin_link')) : ?> target="_blank" <?php endif; ?>>
                                        <div class="author-blk flex-centered">
                                            <?php if (get_field('author_image')) : ?>
                                                <img src="<?php echo get_field('author_image')['url'] ?>" alt="image" />
                                            <?php else : ?>
                                                <img src="<?php echo get_template_directory_uri(); ?>/img/default_profile_picture.png" alt="Profile Pic" />
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
                                    </a>
                                </div>
                            <?php endif; ?>
                            <?php if (get_field('author_image_2') || get_field('author_designation_2') || get_field('author_company_2') || get_field('about_author_2') || get_field('author_linkedin_link_2')) : ?>
                                <div class="blog-author-wrapper">
                                    <a href="<?php if (get_field('author_linkedin_link_2')) : ?> <?php echo get_field('author_linkedin_link_2') ?> <?php else : ?> javascript:void(0) <?php endif; ?>" <?php if (get_field('author_linkedin_link_2')) : ?> target="_blank" <?php endif; ?>>
                                        <div class="author-blk flex-centered">
                                            <?php if (get_field('author_image_2')) : ?>
                                                <img src="<?php echo get_field('author_image_2')['url'] ?>" alt="image" />
                                            <?php else : ?>
                                                <img src="<?php echo get_template_directory_uri(); ?>/img/default_profile_picture.png" alt="Profile Pic" />
                                            <?php endif; ?>
                                            <div class="author-info">
                                                <h4 class="heading4">
                                                    <?php echo get_field('author_name_2') ?>
                                                </h4>
                                                <h5 class="support-text">
                                                    <span><?php echo get_field('author_designation_2') ?></span>
                                                    <span><?php echo get_field('author_company_2') ?></span>
                                                </h5>
                                                <h6 class="paragraph"><?php echo get_field('about_author_2') ?></h6>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            <?php endif; ?>
                            <?php if (get_field('author_image_3') || get_field('author_designation_3') || get_field('author_company_3') || get_field('about_author_3') || get_field('author_linkedin_link_3')) : ?>
                                <div class="blog-author-wrapper">
                                    <a href="<?php if (get_field('author_linkedin_link_3')) : ?> <?php echo get_field('author_linkedin_link_3') ?> <?php else : ?> javascript:void(0) <?php endif; ?>" <?php if (get_field('author_linkedin_link_3')) : ?> target="_blank" <?php endif; ?>>
                                        <div class="author-blk flex-centered">
                                            <?php if (get_field('author_image_3')) : ?>
                                                <img src="<?php echo get_field('author_image_3')['url'] ?>" alt="image" />
                                            <?php else : ?>
                                                <img src="<?php echo get_template_directory_uri(); ?>/img/default_profile_picture.png" alt="Profile Pic" />
                                            <?php endif; ?>
                                            <div class="author-info">
                                                <h4 class="heading4">
                                                    <?php echo get_field('author_name_3') ?>
                                                </h4>
                                                <h5 class="support-text">
                                                    <span><?php echo get_field('author_designation_3') ?></span>
                                                    <span><?php echo get_field('author_company_3') ?></span>
                                                </h5>
                                                <h6 class="paragraph"><?php echo get_field('about_author_3') ?></h6>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            <?php endif; ?>
                            <?php if (get_field('author_image_4') || get_field('author_designation_4') || get_field('author_company_4') || get_field('about_author_4') || get_field('author_linkedin_link_4')) : ?>
                                <div class="blog-author-wrapper">
                                    <a href="<?php if (get_field('author_linkedin_link_4')) : ?> <?php echo get_field('author_linkedin_link_4') ?> <?php else : ?> javascript:void(0) <?php endif; ?>" <?php if (get_field('author_linkedin_link_4')) : ?> target="_blank" <?php endif; ?>>
                                        <div class="author-blk flex-centered">
                                            <?php if (get_field('author_image_4')) : ?>
                                                <img src="<?php echo get_field('author_image_4')['url'] ?>" alt="image" />
                                            <?php else : ?>
                                                <img src="<?php echo get_template_directory_uri(); ?>/img/default_profile_picture.png" alt="Profile Pic" />
                                            <?php endif; ?>
                                            <div class="author-info">
                                                <h4 class="heading4">
                                                    <?php echo get_field('author_name_4') ?>
                                                </h4>
                                                <h5 class="support-text">
                                                    <span><?php echo get_field('author_designation_4') ?></span>
                                                    <span><?php echo get_field('author_company_4') ?></span>
                                                </h5>
                                                <h6 class="paragraph"><?php echo get_field('about_author_4') ?></h6>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
        </section>

    <?php endif; ?>

    <?php
    $post_IDS = [];
    array_push($post_IDS, get_the_ID());
    $cat_ids = [];
    $cats = get_the_category();
    if ($cats) {
        foreach ($cats as $cat) {
            array_push($cat_ids, $cat->term_id);
        }
    }
    $args = array(
        'post_type' => 'press_release',
        'posts_per_page' => 3,
        'post_status' => 'publish',
        'order' => 'desc',
        'post__not_in' => $post_IDS,
        // 'category__in' => $cat_ids
    );
    $the_query = new WP_Query($args);

    if ($the_query->have_posts()) :
        ?>
        <section class="related-blogs-section">
            <div class="container container-wrapper">
                <div class="row title-row">
                    <div class="col-12">
                        <h2 class="heading2">Related Blogs</h2>
                    </div>
                </div>
                <div class="row content-row flex-not-centered">
                    <?php while ($the_query->have_posts()) : $the_query->the_post();  ?>
                        <div class="col-sm-6 col-md-6 col-lg-4 col-12 flex-not-centered">
                            <a href="<?php echo get_permalink(); ?>" class="card-wrapper">
                                <div class="img-blk">
                                    <?php if (get_the_post_thumbnail_url()) : ?>
                                        <img class="featured-img" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_the_title(); ?>">
                                    <?php else : ?>
                                        <img class="featured-img" src="<?php echo get_template_directory_uri(); ?>/img/press_release_placeholder.png" alt="Image" />
                                    <?php endif; ?>
                                    <p class="title support-text">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/blog_icon.svg" alt="Image" />
                                        <span>Blog</span>
                                    </p>
                                </div>
                                <div class="content-blk">
                                    <div class="tag-blk">
                                        <?php
                                                $categories = get_the_category(get_the_ID());
                                                ?>
                                        <ul class="list-inline tags-list">
                                            <?php foreach ($categories as $key => $category) : ?>
                                                <?php if (!($category->slug == 'uncategorized')) : ?>
                                                    <li class="list-inline-item">
                                                        <span class="support-text"><?php echo $category->name; ?></span>
                                                    </li>
                                                <?php endif; ?>
                                            <?php endforeach; ?>
                                        </ul>
                                    </div>
                                    <h3 class="heading4"><?php echo get_the_title(); ?></h3>
                                    <p class="support-text date-info">
                                        <?php if (get_field('published_date')) : ?>
                                            <span class="date">
                                                <?php $date = DateTime::createFromFormat('d/m/Y', get_field('published_date')); ?>
                                                <?php echo $date->format('d M Y'); ?>
                                            </span>
                                        <?php else : ?>
                                            <span class="date">
                                                <?php echo get_the_date('d M Y'); ?>
                                            </span>
                                        <?php endif; ?>
                                        <span class="dot-blk">•</span>
                                        <span class="read-time"> <?php echo get_field('read_time'); ?></span>
                                    </p>
                                    <ul class="list-inline flex-centered author-info-list">
                                        <?php if (get_field('author_image') || get_field('author_designation') || get_field('author_company') || get_field('about_author') || get_field('author_linkedin_link')) : ?>
                                            <li class="author-blk flex-centered">
                                                <?php if (get_field('author_image')) : ?>
                                                    <img src="<?php echo get_field('author_image')['url'] ?>" data-toggle="tooltip" data-placement="bottom" title="<?php echo get_field('author_name'); ?>" alt="image" />
                                                <?php else : ?>
                                                    <img src="<?php echo get_template_directory_uri(); ?>/img/default_profile_picture.png" data-toggle="tooltip" data-placement="bottom" title="<?php echo get_field('author_name'); ?>" alt="Profile Pic" />
                                                <?php endif; ?>
                                                <h4 class="support-text" <?php if ((!get_field('author_name_2'))) : ?> style="display:block;" <?php endif; ?>>
                                                    <?php echo get_field('author_name') ?>
                                                </h4>
                                            </li>
                                        <?php endif; ?>
                                        <?php if (get_field('author_image_2') || get_field('author_designation_2') || get_field('author_company_2') || get_field('about_author_2') || get_field('author_linkedin_link_2')) : ?>
                                            <li class="author-blk flex-centered">
                                                <?php if (get_field('author_image_2')) : ?>
                                                    <img src="<?php echo get_field('author_image_2')['url'] ?>" data-toggle="tooltip" data-placement="bottom" title="<?php echo get_field('author_name_2'); ?>" alt="image" />
                                                <?php else : ?>
                                                    <img src="<?php echo get_template_directory_uri(); ?>/img/default_profile_picture.png" data-toggle="tooltip" data-placement="bottom" title="<?php echo get_field('author_name_2'); ?>" alt="Profile Pic" />
                                                <?php endif; ?>
                                                <h4 class="support-text">
                                                    <?php echo get_field('author_name_2') ?>
                                                </h4>
                                            </li>
                                        <?php endif; ?>
                                        <?php if (get_field('author_image_3') || get_field('author_designation_3') || get_field('author_company_3') || get_field('about_author_3') || get_field('author_linkedin_link_3')) : ?>
                                            <li class="author-blk flex-centered">
                                                <?php if (get_field('author_image_3')) : ?>
                                                    <img src="<?php echo get_field('author_image_3')['url'] ?>" data-toggle="tooltip" data-placement="bottom" title="<?php echo get_field('author_name_3'); ?>" alt="image" />
                                                <?php else : ?>
                                                    <img src="<?php echo get_template_directory_uri(); ?>/img/default_profile_picture.png" data-toggle="tooltip" data-placement="bottom" title="<?php echo get_field('author_name_3'); ?>" alt="Profile Pic" />
                                                <?php endif; ?>
                                                <h4 class="support-text">
                                                    <?php echo get_field('author_name_3') ?>
                                                </h4>
                                            </li>
                                        <?php endif; ?>
                                        <?php if (get_field('author_image_4') || get_field('author_designation_4') || get_field('author_company_4') || get_field('about_author_4') || get_field('author_linkedin_link_4')) : ?>
                                            <li class="author-blk flex-centered">
                                                <?php if (get_field('author_image_4')) : ?>
                                                    <img src="<?php echo get_field('author_image_4')['url'] ?>" data-toggle="tooltip" data-placement="bottom" title="<?php echo get_field('author_name_4'); ?>" alt="image" />
                                                <?php else : ?>
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
                    <?php endwhile;
                        wp_reset_postdata(); ?>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <?php get_template_part('templates/template-newsletter'); ?>


</div>

<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery-scrolltofixed-min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/wow.min.js"></script>

<script type="text/javascript">
    $(document).ready(function() {

        new WOW().init();

        if ($(window).outerWidth() > 767) {
            $('.social-media-blk').scrollToFixed({
                marginTop: 130,
                zIndex: 0,
                limit: $('.related-blogs-section').offset().top - 100
            });
        }
    });
</script>

<?php get_footer(); ?>