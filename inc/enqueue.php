<?php
/**
 * Enqueue theme assets.
 *
 * @package TCW
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Enqueue frontend assets.
 */
function tcw_enqueue_assets() {

	$theme = wp_get_theme();
	$version = $theme->get( 'Version' );

	/*
	|--------------------------------------------------------------------------
	| Styles
	|--------------------------------------------------------------------------
	*/

	wp_enqueue_style(
		'tcw-main-style',
		get_stylesheet_uri(),
		array(),
		$version
	);

	wp_enqueue_style(
		'tcw-variables',
		get_template_directory_uri() . '/assets/css/variables.css',
		array(),
		$version
	);

	wp_enqueue_style(
		'tcw-typography',
		get_template_directory_uri() . '/assets/css/typography.css',
		array( 'tcw-variables' ),
		$version
	);

	wp_enqueue_style(
		'tcw-layout',
		get_template_directory_uri() . '/assets/css/layout.css',
		array( 'tcw-typography' ),
		$version
	);

	wp_enqueue_style(
		'tcw-components',
		get_template_directory_uri() . '/assets/css/components.css',
		array( 'tcw-layout' ),
		$version
	);

	wp_enqueue_style(
		'tcw-sections',
		get_template_directory_uri() . '/assets/css/sections.css',
		array( 'tcw-components' ),
		$version
	);

	wp_enqueue_style(
		'tcw-main',
		get_template_directory_uri() . '/assets/css/main.css',
		array( 'tcw-sections' ),
		$version
	);

	wp_enqueue_style(
		'tcw-responsive',
		get_template_directory_uri() . '/assets/css/responsive.css',
		array( 'tcw-main' ),
		$version
	);

	/*
	|--------------------------------------------------------------------------
	| JavaScript
	|--------------------------------------------------------------------------
	*/

	wp_enqueue_script(
		'tcw-navigation',
		get_template_directory_uri() . '/assets/js/navigation.js',
		array(),
		$version,
		true
	);

	wp_enqueue_script(
		'tcw-animations',
		get_template_directory_uri() . '/assets/js/animations.js',
		array(),
		$version,
		true
	);

	wp_enqueue_script(
		'tcw-sliders',
		get_template_directory_uri() . '/assets/js/sliders.js',
		array(),
		$version,
		true
	);

	wp_enqueue_script(
		'tcw-main',
		get_template_directory_uri() . '/assets/js/main.js',
		array( 'tcw-navigation', 'tcw-animations', 'tcw-sliders' ),
		$version,
		true
	);

	/*
	|--------------------------------------------------------------------------
	| Comments
	|--------------------------------------------------------------------------
	*/

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}

add_action( 'wp_enqueue_scripts', 'tcw_enqueue_assets' );
