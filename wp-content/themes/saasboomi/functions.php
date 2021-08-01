<?php
/**
 * Dazzling functions and definitions
 *
 * @package dazzling
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
  $content_width = 730; /* pixels */
}

/**
 * Set the content width for full width pages with no sidebar.
 */
function dazzling_content_width() {
  if ( is_page_template( 'page-fullwidth.php' ) || is_page_template( 'front-page.php' ) ) {
    global $content_width;
    $content_width = 1110; /* pixels */
  }
}
add_action( 'template_redirect', 'dazzling_content_width' );

if ( ! function_exists( 'dazzling_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function dazzling_setup() {

  /*
   * Make theme available for translation.
   * Translations can be filed in the /languages/ directory.
   * If you're building a theme based on Dazzling, use a find and replace
   * to change 'dazzling' to the name of your theme in all the template files
   */
  load_theme_textdomain( 'dazzling', get_template_directory() . '/languages' );

  // Add default posts and comments RSS feed links to head.
  add_theme_support( 'automatic-feed-links' );

  /*
   * Enable support for Post Thumbnails on posts and pages.
   *
   * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
   */
  add_theme_support( 'post-thumbnails' );

  add_image_size( 'dazzling-featured', 730, 410, true );
  add_image_size( 'tab-small', 60, 60 , true); // Small Thumbnail

  // This theme uses wp_nav_menu() in one location.
  register_nav_menus( array(
    'primary'      => __( 'Primary Menu', 'dazzling' ),
    'footer-links' => __( 'Footer Links', 'dazzling' ) // secondary menu in footer
  ) );

  // Enable support for Post Formats.
  add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' ) );

  // Setup the WordPress core custom background feature.
  add_theme_support( 'custom-background', apply_filters( 'dazzling_custom_background_args', array(
    'default-color' => 'ffffff',
    'default-image' => '',
  ) ) );

  /*
   * Let WordPress manage the document title.
   * By adding theme support, we declare that this theme does not use a
   * hard-coded <title> tag in the document head, and expect WordPress to
   * provide it for us.
   */
  add_theme_support( 'title-tag' );
}
endif; // dazzling_setup
add_action( 'after_setup_theme', 'dazzling_setup' );

/**
 * Register widgetized area and update sidebar with default widgets.
 */
function dazzling_widgets_init() {
  register_sidebar( array(
    'name'          => __( 'Sidebar', 'dazzling' ),
    'id'            => 'sidebar-1',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget'  => '</aside>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>',
  ) );
  register_sidebar(array(
    'id'            => 'home-widget-1',
    'name'          => __( 'Homepage Widget 1', 'dazzling' ),
    'description'   => __( 'Displays on the Home Page', 'dazzling' ),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widgettitle">',
    'after_title'   => '</h3>',
  ));

  register_sidebar(array(
    'id'            => 'home-widget-2',
    'name'          =>  __( 'Homepage Widget 2', 'dazzling' ),
    'description'   => __( 'Displays on the Home Page', 'dazzling' ),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widgettitle">',
    'after_title'   => '</h3>',
  ));

  register_sidebar(array(
    'id'            => 'home-widget-3',
    'name'          =>  __( 'Homepage Widget 3', 'dazzling' ),
    'description'   =>  __( 'Displays on the Home Page', 'dazzling' ),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widgettitle">',
    'after_title'   => '</h3>',
  ));

  register_sidebar(array(
    'id'            => 'footer-widget-1',
    'name'          =>  __( 'Footer Widget 1', 'dazzling' ),
    'description'   =>  __( 'Used for footer widget area', 'dazzling' ),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widgettitle">',
    'after_title'   => '</h3>',
  ));

  register_sidebar(array(
    'id'            => 'footer-widget-2',
    'name'          =>  __( 'Footer Widget 2', 'dazzling' ),
    'description'   =>  __( 'Used for footer widget area', 'dazzling' ),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widgettitle">',
    'after_title'   => '</h3>',
  ));

  register_sidebar(array(
    'id'            => 'footer-widget-3',
    'name'          =>  __( 'Footer Widget 3', 'dazzling' ),
    'description'   =>  __( 'Used for footer widget area', 'dazzling' ),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widgettitle">',
    'after_title'   => '</h3>',
  ));


  register_widget( 'dazzling_social_widget' );
  register_widget( 'dazzling_popular_posts_widget' );
}
add_action( 'widgets_init', 'dazzling_widgets_init' );

include(get_template_directory() . "/inc/widgets/widget-popular-posts.php");
include(get_template_directory() . "/inc/widgets/widget-social.php");


/**
 * Enqueue scripts and styles.
 */
function dazzling_scripts() {

  // wp_enqueue_style( 'dazzling-bootstrap', get_template_directory_uri() . '/inc/css/bootstrap.min.css' );

  wp_enqueue_style( 'dazzling-icons', get_template_directory_uri().'/inc/css/font-awesome.min.css' );

  if( ( is_home() || is_front_page() ) && of_get_option('dazzling_slider_checkbox') == 1 ) {
    wp_enqueue_style( 'flexslider-css', get_template_directory_uri().'/inc/css/flexslider.css' );
  }

  if ( class_exists( 'jigoshop' ) ) { // Jigoshop specific styles loaded only when plugin is installed
    wp_enqueue_style( 'jigoshop-css', get_template_directory_uri().'/inc/css/jigoshop.css' );
  }

  wp_enqueue_style( 'dazzling-style', get_stylesheet_uri() );

  // wp_enqueue_script('dazzling-bootstrapjs', get_template_directory_uri().'/inc/js/bootstrap.min.js', array('jquery') );

  if( ( is_home() || is_front_page() ) && of_get_option('dazzling_slider_checkbox') == 1 ) {
    wp_enqueue_script( 'flexslider', get_template_directory_uri() . '/inc/js/flexslider.min.js', array('jquery'), '2.5.0', true );
  }

  wp_enqueue_script( 'dazzling-main', get_template_directory_uri() . '/inc/js/main.js', array('jquery'), '1.5.4', true );

  if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
    wp_enqueue_script( 'comment-reply' );
  }
}
add_action( 'wp_enqueue_scripts', 'dazzling_scripts' );

/**
 * Add HTML5 shiv and Respond.js for IE8 support of HTML5 elements and media queries
 */
function dazzling_ie_support_header() {
  echo '<!--[if lt IE 9]>'. "\n";
  echo '<script src="' . esc_url( get_template_directory_uri() . '/inc/js/html5shiv.min.js' ) . '"></script>'. "\n";
  echo '<script src="' . esc_url( get_template_directory_uri() . '/inc/js/respond.min.js' ) . '"></script>'. "\n";
  echo '<![endif]-->'. "\n";
}
add_action( 'wp_head', 'dazzling_ie_support_header', 11 );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Load custom nav walker
 */
require get_template_directory() . '/inc/navwalker.php';

if ( class_exists( 'woocommerce' ) ) {
/**
 * WooCommerce related functions
 */
require get_template_directory() . '/inc/woo-setup.php';
}

if ( class_exists( 'jigoshop' ) ) {
/**
 * Jigoshop related functions
 */
require get_template_directory() . '/inc/jigoshop-setup.php';
}

/**
 * Metabox file load
 */
require get_template_directory() . '/inc/metaboxes.php';

/**
 * TGMPA
 */
require get_template_directory() . '/inc/tgmpa/tgm-plugin-activation.php';

/**
 * Register Social Icon menu
 */
add_action( 'init', 'register_social_menu' );

function register_social_menu() {
  register_nav_menu( 'social-menu', _x( 'Social Menu', 'nav menu location', 'dazzling' ) );
}

/* Globals variables */
global $options_categories;
$options_categories = array();
$options_categories_obj = get_categories();
foreach ($options_categories_obj as $category) {
        $options_categories[$category->cat_ID] = $category->cat_name;
}

global $site_layout;
$site_layout = array('side-pull-left' => esc_html__('Right Sidebar', 'dazzling'),'side-pull-right' => esc_html__('Left Sidebar', 'dazzling'),'no-sidebar' => esc_html__('No Sidebar', 'dazzling'),'full-width' => esc_html__('Full Width', 'dazzling'));

// Typography Options
global $typography_options;
$typography_options = array(
        'sizes' => array( '6px' => '6px','10px' => '10px','12px' => '12px','14px' => '14px','15px' => '15px','16px' => '16px','18px'=> '18px','20px' => '20px','24px' => '24px','28px' => '28px','32px' => '32px','36px' => '36px','42px' => '42px','48px' => '48px' ),
        'faces' => array(
                'arial'          => 'Arial,Helvetica,sans-serif',
                'verdana'        => 'Verdana,Geneva,sans-serif',
                'trebuchet'      => 'Trebuchet,Helvetica,sans-serif',
                'georgia'        => 'Georgia,serif',
                'times'          => 'Times New Roman,Times, serif',
                'tahoma'         => 'Tahoma,Geneva,sans-serif',
                'Open Sans'      => 'Open Sans,sans-serif',
                'palatino'       => 'Palatino,serif',
                'helvetica'      => 'Helvetica,Arial,sans-serif',
                'helvetica-neue' => 'Helvetica Neue,Helvetica,Arial,sans-serif'
        ),
        'styles' => array( 'normal' => 'Normal','bold' => 'Bold' ),
        'color'  => true
);

// Typography Defaults
global $typography_defaults;
$typography_defaults = array(
        'size'  => '14px',
        'face'  => 'helvetica-neue',
        'style' => 'normal',
        'color' => '#6B6B6B'
);

/**
 * Helper function to return the theme option value.
 * If no value has been saved, it returns $default.
 * Needed because options are saved as serialized strings.
 *
 * Not in a class to support backwards compatibility in themes.
 */
if ( ! function_exists( 'of_get_option' ) ) :
function of_get_option( $name, $default = false ) {

  $option_name = '';
  // Get option settings from database
  $options = get_option( 'dazzling' );

  // Return specific option
  if ( isset( $options[$name] ) ) {
    return $options[$name];
  }

  return $default;
}
endif;

//
// //******************************* Team starts *****************************
//
// add_action('init', 'team_init');
//
// function team_init() {
//     $args = array(
//         'labels' => array(
//             'name' => __('Team'),
//             'singular_name' => __('Tem'),
//         ),
//         'public' => true,
//         'supports' => array('thumbnail','editor','title'),
//         'taxonomies' => array('post_tag'),
//     );
//
//     register_post_type('team' , $args );
// }
//
// //************************************* Team ends ******************************
//

//******************************* Authors starts *****************************

add_action('init', 'authors_init');

function authors_init() {
    $args = array(
        'labels' => array(
            'name' => __('Authors'),
            'singular_name' => __('Authors'),
        ),
        'public' => true,
        'supports' => array('thumbnail','editor','title'),
    );
    register_post_type('authors' , $args );
}

//************************************* Authors ends ******************************


//******************************* Podcasts starts *****************************

add_action('init', 'podcasts_init');

function podcasts_init() {
    $args = array(
        'labels' => array(
            'name' => __('Podcasts'),
            'singular_name' => __('Podcast'),
        ),
        'public' => true,
        'supports' => array('thumbnail','editor','title'),
    );
    register_post_type('podcasts' , $args );
}

//************************************* Podcasts ends ******************************

//******************************* Our Journey starts *****************************

add_action('init', 'our_journey_init');

function our_journey_init() {
    $args = array(
        'labels' => array(
            'name' => __('Our Journey'),
            'singular_name' => __('Our Journey'),
        ),
        'public' => true,
        'supports' => array('thumbnail','editor','title'),
    );
    register_post_type('our_journey' , $args );
}

//************************************* Our Journey  ends ******************************

//******************************* Buzz starts *****************************

add_action('init', 'buzz_init');

function buzz_init() {
    $args = array(
        'labels' => array(
            'name' => __('Buzz'),
            'singular_name' => __('Buzz'),
        ),
        'public' => true,
        'supports' => array('thumbnail','editor','title'),
    );
    register_post_type('buzz' , $args );
}

//************************************* Buzz ends ******************************

//******************************* home testimonials starts *****************************

add_action('init', 'home_testimonials_init');

function home_testimonials_init() {
    $args = array(
        'labels' => array(
            'name' => __('Home Testimonials'),
            'singular_name' => __('Home Testimonial'),
        ),
        'public' => true,
        'supports' => array('thumbnail','editor','title'),
    );
    register_post_type('home_testimonials' , $args );
}

//************************************* home testimonials ends ******************************

//******************************* Podcasts Series starts *****************************

// add_action('init', 'podcast_series_init');
//
// function podcast_series_init() {
//     $args = array(
//         'labels' => array(
//             'name' => __('Podcast Series'),
//             'singular_name' => __('Podcast Series'),
//         ),
//         'public' => true,
//         'supports' => array('thumbnail','editor','title'),
//     );
//     register_post_type('podcast_series' , $args );
// }

//************************************* Podcasts Series ends ******************************


//******************************* annual events starts *****************************

add_action('init', 'annual_events_init');

function annual_events_init() {
    $args = array(
        'labels' => array(
            'name' => __('Annual Events'),
            'singular_name' => __('Annual Event'),
        ),
        'public' => true,
        'supports' => array('title', 'thumbnail'),
        'taxonomies' => array('post_tag'),
    );

    register_post_type('annual_events' , $args );
}

//************************************* annual events ends ******************************

//*******************************  organisers starts *****************************

add_action('init', 'annual_organisers_init');

function annual_organisers_init() {
    $args = array(
        'labels' => array(
            'name' => __('Organisers'),
            'singular_name' => __('Organiser'),
        ),
        'public' => true,
        'supports' => array('thumbnail','title'),
        'taxonomies' => array('post_tag'),
    );

    register_post_type('organisers' , $args );
}

//*************************************  organisers ends ******************************

//*******************************  volunteers starts *****************************

add_action('init', 'annual_volunteers_init');

function annual_volunteers_init() {
    $args = array(
        'labels' => array(
            'name' => __('Volunteers'),
            'singular_name' => __('Volunteer'),
        ),
        'public' => true,
        'supports' => array('thumbnail','title'),
        'taxonomies' => array('post_tag'),
    );

    register_post_type('volunteers' , $args );
}

//************************************* volunteers ends ******************************

//******************************* Speakers starts *****************************

add_action('init', 'speakers_init');

function speakers_init() {
    $args = array(
        'labels' => array(
            'name' => __('Speakers'),
            'singular_name' => __('Speaker'),
        ),
        'public' => true,
        'supports' => array('thumbnail','title'),
    );

    register_post_type('speakers' , $args );
}

//************************************* Speakers ends ******************************


//******************************* Speakers starts *****************************

add_action('init', 'curators_init');

function curators_init() {
    $args = array(
        'labels' => array(
            'name' => __('Curators'),
            'singular_name' => __('Curator'),
        ),
        'public' => true,
        'supports' => array('thumbnail','title'),
    );

    register_post_type('curators' , $args );
}

//************************************* Speakers ends ******************************


//******************************* testimonials starts *****************************

add_action('init', 'annual_testimonials_init');

function annual_testimonials_init() {
    $args = array(
        'labels' => array(
            'name' => __('Annual Testimonials'),
            'singular_name' => __('Annual Testimonial'),
        ),
        'public' => true,
        'supports' => array('thumbnail','editor','title'),
    );
    register_post_type('testimonials' , $args );
}

//************************************* testimonials ends ******************************


//******************************* Annual Event Agenda starts *****************************

add_action('init', 'days_init');

function days_init() {
    $args = array(
        'labels' => array(
            'name' => __('Annual Event Agenda'),
            'singular_name' => __('Annual Event Agenda'),
        ),
        'public' => true,
        'supports' => array('thumbnail','title'),
    );

    register_post_type('days' , $args );
}

//*************************************  Annual Event Agenda ends ******************************


//******************************* growth events starts *****************************

add_action('init', 'growth_events_init');

function growth_events_init() {
    $args = array(
        'labels' => array(
            'name' => __('Growth Events'),
            'singular_name' => __('Growth Event'),
        ),
        'public' => true,
        'supports' => array('title', 'thumbnail'),
        'taxonomies' => array('post_tag'),
    );

    register_post_type('growth_events' , $args );
}

//************************************* growth events ends ******************************

//******************************* growth testimonials starts *****************************

add_action('init', 'growth_testimonials_init');

function growth_testimonials_init() {
    $args = array(
        'labels' => array(
            'name' => __('Growth Testimonials'),
            'singular_name' => __('Growth Testimonial'),
        ),
        'public' => true,
        'supports' => array('thumbnail','editor','title'),
    );
    register_post_type('growth_testimonials' , $args );
}

//************************************* growth testimonials ends ******************************


//******************************* growth Event Agenda starts *****************************

add_action('init', 'growth_days_init');

function growth_days_init() {
    $args = array(
        'labels' => array(
            'name' => __('Growth Event Agenda'),
            'singular_name' => __('Growth Event Agenda'),
        ),
        'public' => true,
        'supports' => array('thumbnail','title'),
    );

    register_post_type('growth_days' , $args );
}

//************************************* growth Event Agenda ends ******************************


//******************************* enterprise vents starts *****************************

add_action('init', 'enterprise_events_init');

function enterprise_events_init() {
    $args = array(
        'labels' => array(
            'name' => __('Enterprise Events'),
            'singular_name' => __('Enterprise Event'),
        ),
        'public' => true,
        'supports' => array('title', 'thumbnail'),
        'taxonomies' => array('post_tag'),
    );

    register_post_type('enterprise_events' , $args );
}

//************************************* enterprise events ends ******************************

//******************************* enterprise testimonials starts *****************************

add_action('init', 'entprise_testimonial_init');

function entprise_testimonial_init() {
    $args = array(
        'labels' => array(
            'name' => __('Enterprise Testimonials'),
            'singular_name' => __('Enterprise Testimonial'),
        ),
        'public' => true,
        'supports' => array('thumbnail','editor','title'),
    );
    register_post_type('entprise_testimonial' , $args );
}

//************************************* enterprise testimonials ends ******************************


//******************************* enterprise Event Agenda starts *****************************

add_action('init', 'enterprise_days_init');

function enterprise_days_init() {
    $args = array(
        'labels' => array(
            'name' => __('Enterprise Event Agenda'),
            'singular_name' => __('Enterprise Event Agenda'),
        ),
        'public' => true,
        'supports' => array('thumbnail','title'),
    );

    register_post_type('enterprise_days' , $args );
}

//************************************* enterprise Event Agenda ends ******************************


//******************************* build events starts *****************************

add_action('init', 'build_events_init');

function build_events_init() {
    $args = array(
        'labels' => array(
            'name' => __('Build Events'),
            'singular_name' => __('Build Event'),
        ),
        'public' => true,
        'supports' => array('title', 'thumbnail'),
        'taxonomies' => array('post_tag'),
    );

    register_post_type('build_events' , $args );
}

//*************************************  build events ends ******************************

//*******************************  build testimonials starts *****************************

add_action('init', 'build_testimonials_init');

function build_testimonials_init() {
    $args = array(
        'labels' => array(
            'name' => __('Build Testimonials'),
            'singular_name' => __('Build Testimonial'),
        ),
        'public' => true,
        'supports' => array('thumbnail','editor','title'),
    );
    register_post_type('build_testimonials' , $args );
}

//*************************************  build testimonials ends ******************************


//*******************************  build Event Agenda starts *****************************

add_action('init', 'build_days_init');

function build_days_init() {
    $args = array(
        'labels' => array(
            'name' => __('Build Event Agenda'),
            'singular_name' => __('Build Event Agenda'),
        ),
        'public' => true,
        'supports' => array('thumbnail','title'),
    );

    register_post_type('build_days' , $args );
}

//*************************************  build Event Agenda ends ******************************


//******************************* product events starts *****************************

add_action('init', 'product_events_init');

function product_events_init() {
    $args = array(
        'labels' => array(
            'name' => __('Product Events'),
            'singular_name' => __('Product Event'),
        ),
        'public' => true,
        'supports' => array('title', 'thumbnail'),
        'taxonomies' => array('post_tag'),
    );

    register_post_type('product_events' , $args );
}

//************************************* product events ends ******************************

//******************************* product testimonials starts *****************************

add_action('init', 'product_testimonials_init');

function product_testimonials_init() {
    $args = array(
        'labels' => array(
            'name' => __('Product Testimonials'),
            'singular_name' => __('Product Testimonial'),
        ),
        'public' => true,
        'supports' => array('thumbnail','editor','title'),
    );
    register_post_type('product_testimonials' , $args );
}

//************************************* product testimonials ends ******************************


//******************************* product Event Agenda starts *****************************

add_action('init', 'product_days_init');

function product_days_init() {
    $args = array(
        'labels' => array(
            'name' => __('Product Event Agenda'),
            'singular_name' => __('Product Event Agenda'),
        ),
        'public' => true,
        'supports' => array('thumbnail','title'),
    );

    register_post_type('product_days' , $args );
}

//************************************* product Event Agenda ends ******************************

// //******************************* awards starts *****************************
//
// add_action('init', 'awards_init');
//
// function awards_init() {
//     $args = array(
//         'labels' => array(
//             'name' => __('Awards Initiatives'),
//             'singular_name' => __('Award Initiatives'),
//         ),
//         'public' => true,
//         'supports' => array('title', 'thumbnail'),
//         'taxonomies' => array('post_tag'),
//     );
//
//     register_post_type('awards' , $args );
// }
//
// //************************************* awards ends ******************************

//******************************* Jury starts *****************************

add_action('init', 'jury_init');

function jury_init() {
    $args = array(
        'labels' => array(
            'name' => __('Jury'),
            'singular_name' => __('Jury'),
        ),
        'public' => true,
        'supports' => array('thumbnail','title'),
    );

    register_post_type('jury' , $args );
}

//************************************* Jury ends ******************************

//******************************* awards testimonials starts *****************************

add_action('init', 'awards_testimonials_init');

function awards_testimonials_init() {
    $args = array(
        'labels' => array(
            'name' => __('Awards Testimonials'),
            'singular_name' => __('Awards Testimonial'),
        ),
        'public' => true,
        'supports' => array('thumbnail','editor','title'),
    );
    register_post_type('awards_testimonials' , $args );
}

//************************************* awards testimonials ends ******************************


//******************************* awards coordinators and winners starts *****************************

add_action('init', 'awards_coordinators_init');

function awards_coordinators_init() {
    $args = array(
        'labels' => array(
            'name' => __('Awards'),
            'singular_name' => __('Award'),
        ),
        'public' => true,
        'supports' => array('thumbnail','editor','title'),
    );
    register_post_type('awards_coordinators' , $args );
}

//************************************* awards coordinators and winners ends ******************************


//******************************* Suraksha what is covered starts *****************************

add_action('init', 'what_is_covered_init');

function what_is_covered_init() {
    $args = array(
        'labels' => array(
            'name' => __('Suraksha Covers'),
            'singular_name' => __('Suraksha Cover'),
        ),
        'public' => true,
        'supports' => array('thumbnail','editor','title'),
    );
    register_post_type('what_is_covered' , $args );
}

//************************************* Suraksha what is covered ends ******************************

//******************************* Experts starts *****************************

add_action('init', 'experts_init');

function experts_init() {
    $args = array(
        'labels' => array(
            'name' => __('Experts'),
            'singular_name' => __('Expert'),
        ),
        'public' => true,
        'supports' => array('thumbnail','editor','title'),
    );
    register_post_type('experts' , $args );
}

//************************************* Experts ends ******************************

//******************************* Sarathi starts *****************************

add_action('init', 'sarathi_init');

function sarathi_init() {
    $args = array(
        'labels' => array(
            'name' => __('Sarathi'),
            'singular_name' => __('Sarathi'),
        ),
        'public' => true,
        'supports' => array('thumbnail','editor','title'),
    );
    register_post_type('sarathi' , $args );
}

//************************************* Sarathi ends ******************************

//******************************* Your Saathi starts *****************************

add_action('init', 'your_saathi_init');

function your_saathi_init() {
    $args = array(
        'labels' => array(
            'name' => __('Your Saathi'),
            'singular_name' => __('Your Saathi'),
        ),
        'public' => true,
        'supports' => array('thumbnail','editor','title'),
    );
    register_post_type('your_saathi' , $args );
}

//************************************* Your Saathi ends ******************************


//******************************* Core Team starts *****************************

add_action('init', 'core_team_init');

function core_team_init() {
    $args = array(
        'labels' => array(
            'name' => __('Core Team'),
            'singular_name' => __('Core Team'),
        ),
        'public' => true,
        'supports' => array('thumbnail','editor','title'),
    );
    register_post_type('core_team' , $args );
}

//************************************* Core Team ends ******************************


//******************************* Playbook Speakers starts *****************************

add_action('init', 'playbook_speakers_init');

function playbook_speakers_init() {
    $args = array(
        'labels' => array(
            'name' => __('Playbook Speakers'),
            'singular_name' => __('Playbook Speaker'),
        ),
        'public' => true,
        'supports' => array('thumbnail','editor','title'),
    );
    register_post_type('playbook_speakers' , $args );
}

//************************************* Playbook Speakers ends ******************************

//******************************* Playbook Testimonials starts *****************************

add_action('init', 'playbook_testimonial_init');

function playbook_testimonial_init() {
    $args = array(
        'labels' => array(
            'name' => __('Playbook Testimonials'),
            'singular_name' => __('Playbook Testimonial'),
        ),
        'public' => true,
        'supports' => array('thumbnail','editor','title'),
    );
    register_post_type('playbook_testimonial' , $args );
}

//************************************* Playbook Testimonials ends ******************************

//************************************* Custom Category & tags for Podcast arts ******************************


function reg_tag() {
     register_taxonomy_for_object_type('post_tag', 'podcasts');
}
add_action('init', 'reg_tag');


function podcasts_taxonomy() {
    register_taxonomy(
        'podcasts-category',
        array('post','podcasts'),
        array(
            'label' => __( 'Knowledge Hub Category' ),
            'rewrite' => array( 'slug' => 'podcasts-category'),
            'hierarchical' => true,
        )
    );
}
add_action( 'init', 'podcasts_taxonomy' );

//************************************* Custom Category & tags ends ******************************


add_action('admin_menu', 'my_remove_sub_menus');

function my_remove_sub_menus() {
    remove_submenu_page('edit.php', 'edit-tags.php?taxonomy=category');
}

function remove_my_post_metaboxes() {
    remove_meta_box( 'categorydiv','post','normal' ); // Categories Metabox
    remove_meta_box( 'tagsdiv-post_tag','post','normal' ); // Tags Metabox
}

add_action('admin_menu','remove_my_post_metaboxes');

//************************************* Custom Category for Podcasts Series starts ******************************

function podcasts_series_taxonomy() {

    register_taxonomy(
        'podcasts-series-category',
        'podcasts',
        array(
            'label' => __( 'Podcasts Series Category' ),
            'rewrite' => array( 'slug' => 'podcasts-series-category'),
            'hierarchical' => true,
        )
    );
}
add_action( 'init', 'podcasts_series_taxonomy' );

//************************************* Custom Category for Podcasts Series ends ******************************


//*********** numbered pagination function start ************************

function pagination_bar( $query_wp )
{
    $pages = $query_wp->max_num_pages;
    $big = 999999999; // need an unlikely integer
    if ($pages > 1)
    {
        $page_current = max(1, get_query_var('paged'));
        echo paginate_links(array(
            'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
            'format' => '?paged=%#%',
            'current' => $page_current,
            'total' => $pages,
            'prev_text' => '<i class="fa fa-angle-left"></i>',
            'next_text' => '<i class="fa fa-angle-right"></i>',
        ));
    }
}

//*********** numbered pagination function ends ************************

//****************** knowledge ajax function starts ***********

add_action( 'wp_ajax_knowledge_search', 'knowledge_search_callback' );
// If you want not logged in users to be allowed to use this function as well, register it again with this function:
add_action( 'wp_ajax_nopriv_knowledge_search', 'knowledge_search_callback' );

function knowledge_search_callback() {
    $var = $_POST['val'];
    $count = 0;
    $arr = array();
    if(isset($_POST['content-type']) && in_array($_POST['content-type'], ['post', 'podcasts'])){
        $args = array(
            'post_type' => $_POST['content-type'],
            'posts_per_page' => -1,
            'post_status' => 'publish',
            'meta_key'	=> 'published_date',
            'orderby'	=> 'meta_value',
            'order' => 'Desc',
            's' => $var,
        );
        $args['tax_query'] = array();
        if(isset($_POST['category']) && $_POST['category'] && $_POST['category'] != 'all'){
            $args['tax_query']['relation'] = 'AND';
            $category = array(
                'taxonomy' => 'podcasts-category',
                'field' => 'slug',
                'terms' => $_POST['category'],
                'operator' => 'IN',
            );
            array_push($args['tax_query'], $category);
        }
        if(isset($_POST['sort']) && $_POST['sort']){
            $args['orderby'] = 'title';
            $args['order'] = 'asc';
        }
        $the_query = new WP_Query( $args );
    }
    elseif(isset($_POST['content-type']) && in_array($_POST['content-type'], ['all'])){
        $args = array(
            'post_type' => array( 'post', 'podcasts' ),
            'posts_per_page' => -1,
            'post_status' => 'publish',
            'meta_key'	=> 'published_date',
            'orderby'	=> 'meta_value',
            'order' => 'desc',
            's' => $var,
        );
        $args['tax_query'] = array();
        if(isset($_POST['category']) && $_POST['category'] && $_POST['category'] != 'all'){
            $args['tax_query']['relation'] = 'AND';
            $category = array(
                'taxonomy' => 'podcasts-category',
                'field' => 'slug',
                'terms' => $_POST['category'],
                'operator' => 'IN',
            );
            array_push($args['tax_query'],$category);
        }
        if(isset($_POST['sort']) && $_POST['sort']){
            $args['orderby'] = 'title';
            $args['order'] = 'asc';
        }
        $the_query = new WP_Query( $args );
    }else{
        $args = array(
            'post_type' => array( 'post', 'podcasts' ),
            'posts_per_page' => -1,
            'post_status' => 'publish',
            'meta_key'	=> 'published_date',
            'orderby'	=> 'meta_value',
            'order'		=> 'Desc',
            's' =>$var,
        );
        $args['tax_query'] = array();
        if(isset($_POST['category']) && $_POST['category'] && $_POST['category'] != 'all'){
            $args['tax_query']['relation'] = 'AND';
            $category = array(
                'taxonomy' => 'podcasts-category',
                'field' => 'slug',
                'terms' => $_POST['category'],
                'operator' => 'IN',
            );
            array_push($args['tax_query'],$category);
        }
        if(isset($_POST['sort']) && $_POST['sort']){
            $args['orderby'] = 'title';
            $args['order'] = 'asc';
        }
        $the_query = new WP_Query( $args );
    }
    ?>
    <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <?php
            $count++;
            $title_len = 80;
            $content_len = 160;
            $date = date_create_from_format('d/m/Y', get_field('published_date'));
            $arr[$count]['post_type'] = get_post_type();
            $arr[$count]['categories'] = get_the_terms(get_the_ID(),'podcasts-category');
            $arr[$count]['title'] = mb_strimwidth(get_the_title(),0,$title_len,'...');
            $arr[$count]['featured_img'] = get_the_post_thumbnail_url();
            $arr[$count]['permalink'] = get_permalink();
            $arr[$count]['date'] = (DateTime::createFromFormat('d/m/Y', get_field('published_date'))) ? DateTime::createFromFormat('d/m/Y', get_field('published_date'))->format('d M Y') : get_the_date( 'd M Y' );
            if ( get_post_type() === 'podcasts' ){
                $arr[$count]['time'] = get_field('listen_time');
                $arr[$count]['hosts'] = CFS()->get('host_details');
            }else{
                $arr[$count]['time'] = get_field('read_time');
                $arr[$count]['author_image'] = get_field('author_image')['url'];
                $arr[$count]['author_name'] = get_field('author_name');
                $arr[$count]['author_image_2'] = get_field('author_image_2')['url'];
                $arr[$count]['author_name_2'] = get_field('author_name_2');
                $arr[$count]['author_image_3'] = get_field('author_image_3')['url'];
                $arr[$count]['author_name_3'] = get_field('author_name_3');
                $arr[$count]['author_image_4'] = get_field('author_image_4')['url'];
                $arr[$count]['author_name_4'] = get_field('author_name_4');
            }
            $arr[$count]['content'] = mb_strimwidth(wp_strip_all_tags(get_the_content()),0,160,' ...');
        ?>
    <?php endwhile; wp_reset_postdata(); else : ?>
    <?php endif; ?>
    <?php //  var_dump($latest_books);
        wp_send_json($arr);
    ?>

    <?php

}

//****************** knowledge ajax function ends   ***********


//****************** podcast ajax function starts ***********

add_action( 'wp_ajax_podcast_search', 'podcast_search_callback' );
// If you want not logged in users to be allowed to use this function as well, register it again with this function:
add_action( 'wp_ajax_nopriv_podcast_search', 'podcast_search_callback' );

function podcast_search_callback() {
    $var = $_POST['val'];
    $count = 0;
    $arr = array();
    $args = array(
        'post_type' => 'podcasts',
        'posts_per_page' => -1,
        'post_status' => 'publish',
        'meta_key'	=> 'published_date',
        'orderby'	=> 'meta_value',
        'order' => 'desc',
        's' => $var,
    );
    $args['tax_query'] = array();
    if(isset($_POST['series']) && $_POST['series'] && $_POST['series'] != 'all'){
        $args['tax_query']['relation'] = 'AND';
        $category = array(
            'taxonomy' => 'podcasts-series-category',
            'field' => 'slug',
            'terms' => $_POST['series'],
            'operator' => 'IN',
        );
        array_push($args['tax_query'],$category);
    }
    if(isset($_POST['category']) && $_POST['category'] && $_POST['category'] != 'all'){
        $args['tax_query']['relation'] = 'AND';
        $category = array(
            'taxonomy' => 'podcasts-category',
            'field' => 'slug',
            'terms' => $_POST['category'],
            'operator' => 'IN',
        );
        array_push($args['tax_query'],$category);
    }
    if(isset($_POST['sort']) &&  $_POST['sort']){
        $args['orderby'] = 'title';
        $args['order'] = 'asc';
    }
    $the_query = new WP_Query($args);
    ?>
    <?php if( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <?php
            $count++;
            $title_len = 80;
            $content_len = 160;
            $date = date_create_from_format('d/m/Y', get_field('published_date'));
            // $arr[$count]['post_type'] = get_post_type();
            $arr[$count]['categories'] = get_the_terms(get_the_ID(),'podcasts-category');
            $arr[$count]['title'] = mb_strimwidth(get_the_title(),0,$title_len,'...');
            $arr[$count]['featured_img'] = get_the_post_thumbnail_url();
            $arr[$count]['permalink'] = get_permalink();
            $arr[$count]['date'] = (DateTime::createFromFormat('d/m/Y', get_field('published_date'))) ? DateTime::createFromFormat('d/m/Y', get_field('published_date'))->format('d M Y') : get_the_date( 'd M Y' );
            $arr[$count]['time'] = get_field('listen_time');
            $arr[$count]['hosts'] = CFS()->get('host_details');
            $arr[$count]['content'] = mb_strimwidth(wp_strip_all_tags(get_the_content()),0,160,' ...');
        ?>
    <?php endwhile; wp_reset_postdata(); else : ?>
    <?php endif; ?>
    <?php //  var_dump($latest_books);
        wp_send_json($arr);
    ?>

    <?php

}

//****************** podcast ajax function ends   ***********


//******************************* Press release starts *****************************

add_action('init', 'press_release_init');

function press_release_init() {
    $args = array(
        'labels' => array(
            'name' => __('Press Release'),
            'singular_name' => __('Press Release'),
        ),
        'public' => true,
        'supports' => array('thumbnail','editor','title'),
        'rewrite' => array('slug' => 'press-release')
    );
    register_post_type('press_release' , $args );
}

//************************************* Press release ends ******************************