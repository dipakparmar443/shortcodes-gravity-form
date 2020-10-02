<?php
/**
 * Plugin Name:     Shortcodes for Gravity Form
 * Plugin URI:      
 * Description:     Display Gravity Form Shortcodes Admin column.
 * Author:          Dipak Parmar
 * Contributors: 	dipakparmar443
 * Author URI:      https://profiles.wordpress.org/dipakparmar443/
 * Donate link:     https://www.paypal.me/dipakparmar443/
 * Text Domain:     shortcodes-gravity-form
 * Domain Path:     /languages
 * Version:         1.0
 *
 * @package         Shortcodes_for_Gravity_Form_Addon
 * @to-do shortcodes_gravity_form
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once 'includes/class-' . basename( __FILE__ );

/**
 * Plugin textdomain.
 */
function shortcodes_gravity_form_textdomain() {
	load_plugin_textdomain( 'shortcodes-gravity-form', false, basename( dirname( __FILE__ ) ) . '/languages' );
}
add_action( 'plugins_loaded', 'shortcodes_gravity_form_textdomain' );

/**
 * Plugin activation.
 */
function shortcodes_gravity_form_activation() {
	// Activation code here.
}
register_activation_hook( __FILE__, 'shortcodes_gravity_form_activation' );

/**
 * Plugin deactivation.
 */
function shortcodes_gravity_form_deactivation() {
	// Deactivation code here.
}
register_deactivation_hook( __FILE__, 'shortcodes_gravity_form_deactivation' );

/**
 * Initialization class.
 */
function shortcodes_gravity_form_init() {
	new Shortcodes_for_Gravity_Form_Addon();
}
add_action( 'plugins_loaded', 'shortcodes_gravity_form_init' );
