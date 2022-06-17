<?php
/**
 * Register widget area
 * 
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 * @package StarterWP
 */

	function swp_widgets_init() {
		register_sidebar( array(
			'name'          => esc_html__( 'Sidebar', 'text-domain' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'text-domain' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		) );

		register_sidebar( array(
			'name'          => esc_html__( 'Footer One', 'text-domain' ),
			'id'            => 'footer-1',
			'description'   => esc_html__( 'Add widgets here.', 'text-domain' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		) );

		register_sidebar( array(
			'name'          => esc_html__( 'Footer Two', 'text-domain' ),
			'id'            => 'footer-2',
			'description'   => esc_html__( 'Add widgets here.', 'text-domain' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		) );

		register_sidebar( array(
			'name'          => esc_html__( 'Footer Three', 'text-domain' ),
			'id'            => 'footer-3',
			'description'   => esc_html__( 'Add widgets here.', 'text-domain' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		) );
	}

	add_action( 'widgets_init', 'swp_widgets_init' );
	