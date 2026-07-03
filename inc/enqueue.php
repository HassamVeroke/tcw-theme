<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function tcw_enqueue_assets() {
	wp_enqueue_style( 'tcw-main', TCW_THEME_URI . '/assets/css/main.css', array(), TCW_THEME_VERSION );
	wp_enqueue_style( 'tcw-responsive', TCW_THEME_URI . '/assets/css/responsive.css', array( 'tcw-main' ), TCW_THEME_VERSION );

	wp_enqueue_script( 'tcw-main', TCW_THEME_URI . '/assets/js/main.js', array(), TCW_THEME_VERSION, true );
}
add_action( 'wp_enqueue_scripts', 'tcw_enqueue_assets' );
