<?php
/**
 * Pyongyang functions and definitions
 *
 * @package Pyongyang
 * @since Pyongyang 1.0
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 *
 * @since Pyongyang 1.0
 */
if ( ! isset( $content_width ) )
	$content_width = 640; /* pixels */

if ( ! function_exists( 'pyongyang_setup' ) ):
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 *
 * @since Pyongyang 1.0
 */
function pyongyang_setup() {

	/**
	 * Make theme available for translation
	 * Translations can be filed in the /languages/ directory
	 * If you're building a theme based on Pyongyang, use a find and replace
	 * to change 'pyongyang' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'pyongyang', get_template_directory() . '/languages' );

	/**
	 * Add default posts and comments RSS feed links to head
	 */
	add_theme_support( 'automatic-feed-links' );

	/**
	 * Enable support for Post Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );

	/**
	 * This theme uses wp_nav_menu() in one location.
	 */
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'pyongyang' ),
	) );

	/**
	 * Add support for the Aside Post Formats
	 */
	add_theme_support( 'post-formats', array( 'aside', ) );
	
	// Update Timezone Setting to Pyongyang. Nothing else is acceptable.
	update_option( 'timezone_string', 'Asia/Pyongyang');
	
	// Update Posts_per_page. 10 is not enough for the King. We humble the population of the great nation with this number.
	update_option( 'posts_per_page', 25 );
}
endif; // pyongyang_setup
add_action( 'after_setup_theme', 'pyongyang_setup' );

/**
 * Register widgetized area and update sidebar with default widgets
 *
 * @since Pyongyang 1.0
 */
function pyongyang_widgets_init() {
	register_sidebar( array(
		'name' => __( 'Sidebar', 'pyongyang' ),
		'id' => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h1 class="widget-title">',
		'after_title' => '</h1>',
	) );
}
add_action( 'widgets_init', 'pyongyang_widgets_init' );

/**
 * Enqueue scripts and styles
 */
function pyongyang_scripts() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'pyongyang_scripts' );


/* Current Date */
function pyongyang_currentdate() { 
	$date = date( 'F j. Y' ) . ' Juche 101'; // Juche 101 = 2012 - Should be updated each year to respect the Glorious Leader.
	return $date;
}

/* Previous Posts Link (outside of loop) */
function pyongyang_previous() {
	$posts = query_posts($query_string); if (have_posts()) : while (have_posts()) : the_post();
	$previous = previous_post_link( 'Past News' );
	endwhile; endif;
	return $previous;
}