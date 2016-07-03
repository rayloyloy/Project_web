<?php
/**
 * @package   WOD Timer
 * @author    DesignFox
 * @license   GPL-2.0+
 * @copyright 2014 DesignFox
 *
 * @wordpress-plugin
 * Plugin Name:       WOD Timer
 * Description:       A workout timers, having preset times that can be selected on the front page.
 * Version:           1.0.0
 * Author:            DesignFox
 * Author URI:        http://design-fox.com.au
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/*----------------------------------------------------------------------------*
 * Public-Facing Functionality
 *----------------------------------------------------------------------------*/

/*
 * @TODO:
 *
 * - replace `class-wodtimer.php` with the name of the plugin's class file
 *
 */
require_once( plugin_dir_path( __FILE__ ) . 'public/class-wodtimer.php' );

/*
 * Register hooks that are fired when the plugin is activated or deactivated.
 * When the plugin is deleted, the uninstall.php file is loaded.
 *
 * @TODO:
 *
 * - replace WOD_Timer with the name of the class defined in
 *   `class-wodtimer.php`
 */
register_activation_hook( __FILE__, array( 'WOD_Timer', 'activate' ) );
register_deactivation_hook( __FILE__, array( 'WOD_Timer', 'deactivate' ) );

/*
 * @TODO:
 *
 * - replace WOD_Timer with the name of the class defined in
 *   `class-wodtimer.php`
 */
add_action( 'plugins_loaded', array( 'WOD_Timer', 'get_instance' ) );

/*----------------------------------------------------------------------------*
 * Dashboard and Administrative Functionality
 *----------------------------------------------------------------------------*/

/*
 * @TODO:
 *
 * - replace `class-wodtimer-admin.php` with the name of the plugin's admin file
 * - replace WOD_Timer_Admin with the name of the class defined in
 *   `class-wodtimer-admin.php`
 *
 * If you want to include Ajax within the dashboard, change the following
 * conditional to:
 *
 * if ( is_admin() ) {
 *   ...
 * }
 *
 * The code below is intended to to give the lightest footprint possible.
 */
if ( is_admin() && ( ! defined( 'DOING_AJAX' ) || ! DOING_AJAX ) ) {

	require_once( plugin_dir_path( __FILE__ ) . 'admin/class-wodtimer-admin.php' );
	add_action( 'plugins_loaded', array( 'WOD_Timer_Admin', 'get_instance' ) );

}
