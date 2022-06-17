<?php
/**
 * Custom functions that act independently of the theme templates
 * 
 * @package StarterWP
 */

	// Adds custom classes to the array of body classes.
	function swp_body_classes( $classes ) {
		if ( is_multi_author() ) {
			$classes[] = 'group-blog';
		}

		if ( ! is_singular() ) {
			$classes[] = 'hfeed';
		}

		return $classes;
	}
	add_filter( 'body_class', 'swp_body_classes' );


	// Add a pingback url auto-discovery header for singularly identifiable articles.
	function swp_pingback_header() {
		if ( is_singular() && pings_open() ) {
			echo '<link rel="pingback" href="', esc_url( get_bloginfo( 'pingback_url' ) ), '">';
		}
	}
	add_action( 'wp_head', 'swp_pingback_header' );


	// Add Bootstrap button classes to tag cloud
	function swp_tag_cloud_btn( $return ) {
		$return = str_replace('<a', '<a class="btn btn-secondary btn-sm"', $return );
		return $return;
	}
	add_filter( 'wp_tag_cloud', 'swp_tag_cloud_btn' );


	// Customize the Read More Button
	function swp_modify_read_more_link() {
		return sprintf( '<a class="more-link btn btn-sm btn-secondary" href="%1$s">%2$s</a>',
			get_permalink(),
			__( 'Read More', 'text-domain' )
		);
	}
	add_filter( 'the_content_more_link', 'swp_modify_read_more_link' );


	// Add search form to navbar
	function add_search_box_to_menu( $items, $args ) {
		ob_start();
		get_search_form();
		$searchform = ob_get_contents();
		ob_end_clean();

		$items .= '<li class="navbar-search">' . $searchform . '</li>';

		return $items;
	}
	add_filter('wp_nav_menu_items','add_search_box_to_menu', 10, 2);


	//add SVG to allowed file uploads
	function cc_mime_types($mimes) {
		$mimes['svg'] = 'image/svg+xml';
		return $mimes;
	}
	add_filter('upload_mimes', 'cc_mime_types');
