<?php
/*
Plugin Name: CAHNRS WSUWP Plugin Core
Version: 0.0.5+jweston491.0.1.0
Description: Core feature set for CAHNRS sites.
Author: jweston491, washingtonstateuniversity, Danial Bleile
Author URI: http://cahnrs.wsu.edu/communications/
Plugin URI: https://github.com/washingtonstateuniversity/CAHNRSWSUWP-Plugin-Core
Text Domain: cahnrswsuwp-plugin-core
*/

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

// This plugin uses namespaces and requires PHP 5.3 or greater.
if ( version_compare( PHP_VERSION, '5.3', '<' ) ) {
	add_action( 'admin_notices', create_function( '', // phpcs:ignore WordPress.PHP.RestrictedPHPFunctions.create_function_create_function
	"echo '<div class=\"error\"><p>" . __( 'WSUWP Plugin Skeleton requires PHP 5.3 to function properly. Please upgrade PHP or deactivate the plugin.', 'cahnrswsuwp-plugin-core' ) . "</p></div>';" ) );
	return;
} else {

	include_once __DIR__ . '/functions.php';

	include_once __DIR__ . '/vendor/settings-api/settings-api-adapter.php';

	if ( is_admin() ) {

		include_once __DIR__ . '/vendor/save-post/save-post.php';

	} // End if

	include_once __DIR__ . '/includes/modules/include-modules.php';

	include_once __DIR__ . '/includes/scripts/include-scripts.php';

}
