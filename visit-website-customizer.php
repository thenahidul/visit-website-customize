<?php
/**
 * Plugin Name: Visit Website Link in Customizer
 * Plugin URI: https://github.com/thenahidul/visit-website-customizer
 * Description: This Plugin adds a Visit Website Button and Visit Store Button(if woocommerce installed & activated) in WordPress Customizer so users can easily go to the frontend of the website either on a new tab or existing tab.
 * Version: 2.0
 * Requires at least: 5.0
 * Tested up to: 5.7
 * Requires PHP version: 7.0
 * Author: TheNahidul
 * Author URI: https://www.linkedin.com/in/thenahidul
 * License: GPLv2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: visit-website-customizer
 * Domain Path: /languages
 */

defined( 'ABSPATH' ) || exit;

define( 'VWLC_VERSION', '2.0' );

/**
 * Plugin main function
 * Loads button templates, styles and scripts
 *
 * @return null
 */
function vwlc_add_footer_scripts () {
	require plugin_dir_path( __FILE__ ) . 'templates/button.php';

	wp_enqueue_style( 'vwlc-style', plugin_dir_url( __FILE__ ) . 'assets/css/style.css', null, VWLC_VERSION );
	wp_enqueue_script( 'vwlc-scripts', plugin_dir_url( __FILE__ ) . 'assets/js/scripts.js', array( 'jquery' ), VWLC_VERSION, true );
}

add_action( 'customize_controls_print_footer_scripts', 'vwlc_add_footer_scripts' );
