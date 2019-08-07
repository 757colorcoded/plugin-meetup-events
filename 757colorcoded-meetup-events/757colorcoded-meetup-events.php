<?php
/**
 * 757ColorCoded Meetup Events Plugin
 *
 * @wordpress-plugin
 * Plugin Name:       757ColorCoded Meetup Events
 * Plugin URI:        https://github.com/757ColorCoded/plugin-meetup-events
 * Description:       Loads events from the 757ColorCoded API (which is a proxy to the Meetup Events API).
 * Version:           1.0.0
 * Author:            Guillermo A. Fisher <guillermo@757colorcoded.org>
 * Author URI:        https://bklyn.dev
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       757colorcoded-meetup-events
 * Domain Path:       /languages
 */

/**
 * If this file is called directly, abort.
 */
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Register the code needed to activate the plugin.
 */
register_activation_hook( __FILE__, function () {
	require plugin_dir_path( __FILE__ ) . 'includes/class-activator.php';
	ColorCoded_Meetup_Events_Activator::activate();
});

/**
 * Register the code needed to deactivate the plugin.
 */
register_deactivation_hook( __FILE__, function () {
	require plugin_dir_path( __FILE__ ) . 'includes/class-deactivator.php';
	ColorCoded_Meetup_Events_Deactivator::deactivate();
});

/**
 * Run the core plugin code.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-plugin.php';
(new ColorCoded_Meetup_Events_Plugin())->run();
