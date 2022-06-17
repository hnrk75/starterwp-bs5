<?php
/**
 * StarterWP functions and definitions
 *
 * @package StarterWP
 */

	if ( ! function_exists( 'swp_setup' ) ) :
		function swp_setup() {

			// Make theme available for translation. Translations can be filed in the /languages/ directory. If you're building a theme based on StarterWP, use a find and replace to change 'swp' to the name of your theme in all the template files.
			load_theme_textdomain( 'swp', get_template_directory() . '/languages' );

			// Add default posts and comments RSS feed links to head
			add_theme_support( 'automatic-feed-links' );

			// Let WordPress manage the document title. By adding theme support, we declare that this theme does not use a hard-coded <title> tag in the document head, and expect WordPress to provide it for us
			add_theme_support( 'title-tag' );

			// Enable support for Post Thumbnails on posts and pages
			add_theme_support( 'post-thumbnails' );

			// This theme uses wp_nav_menu() in one location
			register_nav_menus( array(
				'primary' => esc_html__( 'Primary', 'text-domain' ),
			) );

			// Switch default core markup for search form, comment form, and comments to output valid HTML5
			add_theme_support( 'html5', array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
			) );

			// Set up the WordPress core custom background feature
			add_theme_support( 'custom-background', apply_filters( 'swp_custom_background_args', array(
				'default-color' => 'ffffff',
				'default-image' => '',
			) ) );

			// Add theme support for selective refresh for widgets
			add_theme_support( 'customize-selective-refresh-widgets' );
			
			// Add wide image support
			add_theme_support( 'align-wide' );

			// Add support for responsive embedded content
			add_theme_support( 'responsive-embeds' );

			// Add editor styles
			//add_theme_support('editor-styles');

			// Editor color palette
			add_theme_support(
				'editor-color-palette',
				array(
					array(
						'name'  => __( 'Primary', 'text-domain' ),
						'slug'  => 'primary',
						'color' => '#007bff',
					),
					array(
						'name'  => __( 'Secondary', 'text-domain' ),
						'slug'  => 'secondary',
						'color' => '#6c757d',
					),
					array(
						'name'  => __( 'Success', 'text-domain' ),
						'slug'  => 'success',
						'color' => '#28a745',
					),
					array(
						'name'  => __( 'Danger', 'text-domain' ),
						'slug'  => 'danger',
						'color' => '#dc3545',
					),
					array(
						'name'  => __( 'Warning', 'text-domain' ),
						'slug'  => 'warning',
						'color' => '#ffc107',
					),
					array(
						'name'  => __( 'Info', 'text-domain' ),
						'slug'  => 'info',
						'color' => '#17a2b8',
					),
					array(
						'name'  => __( 'Dark Gray', 'text-domain' ),
						'slug'  => 'dark',
						'color' => '#343a40',
					),
					array(
						'name'  => __( 'Light Gray', 'text-domain' ),
						'slug'  => 'light',
						'color' => '#f8f9fa',
					),
					array(
						'name'  => __( 'White', 'text-domain' ),
						'slug'  => 'white',
						'color' => '#FFF',
					),
				)
			);

			add_theme_support( 'custom-logo', array(
				'height'      => 100,
				'width'       => 400,
				'flex-height' => true,
				'flex-width'  => true,
				'header-text' => array( 'site-title', 'site-description' ),
			) );
		}
	endif;

	add_action( 'after_setup_theme', 'swp_setup' );

	/**
	 * Set the content width in pixels, based on the theme's design and stylesheet.
	 *
	 * Priority 0 to make it available to lower priority callbacks.
	 * @global int $content_width
	 */

	function swp_content_width() {
		$GLOBALS['content_width'] = apply_filters( 'swp_content_width', 640 );
	}

	add_action( 'after_setup_theme', 'swp_content_width', 0 );


	/*-------------------------------------------------------------
	# Requirements
	--------------------------------------------------------------*/
	// Bootstrap Walker
	require get_template_directory() . '/inc/bootstrap-walker.php';

	// Custom functions that act independently of the theme templates
	require get_template_directory() . '/inc/extras.php';

	// Add CSS/JS Scritps
	require get_template_directory() . '/inc/scripts.php';

	// Custom template tags for this theme
	require get_template_directory() . '/inc/template-tags.php';

	// Register Widget Areas
	require get_template_directory() . '/inc/widgets.php';


	/* ---------------------------------------------------
    # Custom Classes
	----------------------------------------------------- */
	require get_template_directory() . '/lib/shows/custom-post-type.php';