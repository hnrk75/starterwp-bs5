<?php
	
	// Enqueue scripts and styles.
	function swp_scripts() {
		wp_enqueue_style( 'swp-style', get_stylesheet_directory_uri() . '/style.min.css', array(), '5.2.0' );

		wp_enqueue_script( 'swp-js', get_template_directory_uri() . '/js/dist/scripts.min.js', array('jquery'), ' ', true );
		wp_enqueue_script( 'fontawesome-fa', '//use.fontawesome.com/releases/v6.1.1/js/all.js', array(), '6.1.1' );

		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
	}
	add_action( 'wp_enqueue_scripts', 'swp_scripts' );


	// Filter the HTML script tag of `leadgenwp-fa` script to add `defer` attribute
	function swp_defer_scripts( $tag, $handle, $src ) {
		$defer_scripts = array( 
			'swp-fa'
		);
		if ( in_array( $handle, $defer_scripts ) ) {
			return '<script src="' . $src . '" defer></script>';
		}
		return $tag;
	}
	add_filter( 'script_loader_tag', 'swp_defer_scripts', 10, 3 );
