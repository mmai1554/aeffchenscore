<?php
/**
 * Aeffchenscore functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Aeffchenscore
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( 'AEFF_VERSION', '1.0.0' );
}

define( 'THEME_DIR', get_stylesheet_directory() );
define( 'THEME_URL', get_stylesheet_directory_uri() );

require_once THEME_DIR . '/vendor/autoload.php';
include_once THEME_DIR . '/includes/theme_setup.php';
include_once THEME_DIR . '/includes/register_scripts_and_styles.php';
include_once THEME_DIR . '/includes/register_image_sizes.php';
include_once THEME_DIR . '/includes/register_wp_optimizing.php';
include_once THEME_DIR . '/includes/mnc-tags.php';

require get_template_directory() . '/inc/template-tags.php';
// require get_template_directory() . '/inc/custom-header.php';
// require get_template_directory() . '/inc/template-functions.php';
// require get_template_directory() . '/inc/customizer.php';


