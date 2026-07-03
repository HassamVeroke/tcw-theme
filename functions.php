<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'TCW_THEME_VERSION', '0.1.0' );
define( 'TCW_THEME_DIR', get_template_directory() );
define( 'TCW_THEME_URI', get_template_directory_uri() );

require_once TCW_THEME_DIR . '/inc/theme-setup.php';
require_once TCW_THEME_DIR . '/inc/enqueue.php';
require_once TCW_THEME_DIR . '/inc/template-tags.php';
require_once TCW_THEME_DIR . '/inc/helpers.php';
