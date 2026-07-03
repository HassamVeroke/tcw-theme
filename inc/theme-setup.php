<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function tcw_theme_setup() {
	load_theme_textdomain( 'tcw', get_template_directory() . '/languages' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
		'script',
		'style',
	) );
	add_theme_support( 'custom-logo' );
	add_theme_support( 'customize-selective-refresh-widgets' );
	add_theme_support( 'automatic-feed-links' );
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'tcw' ),
		'footer'  => __( 'Footer Menu', 'tcw' ),
	) );
}
add_action( 'after_setup_theme', 'tcw_theme_setup' );
