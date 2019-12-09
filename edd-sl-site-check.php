<?php
/*
Plugin Name: Easy Digital Downloads Software Licensing Site Check
Description: Shows all sites that have activated license
Plugin URI: https://scottdeluzio.com
Author: Scott DeLuzio
Author URI: https://scottdeluzio.com
Version: 1.0
*/

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
/*
 * Includes for our Plugin
 */
 if ( ! defined( 'EDD_SL_SC_PLUGIN' ) ) {
   define( 'EDD_SL_SC_PLUGIN', __FILE__ );
 }
 if( ! defined( 'EDD_SL_SC_PLUGIN_DIR' ) ) {
  	define( 'EDD_SL_SC_PLUGIN_DIR', dirname( __FILE__ ) );
 }
 if( ! defined( 'EDD_SL_SC_PLUGIN_URL' ) ) {
	define( 'EDD_SL_SC_PLUGIN_URL', plugins_url( '', __FILE__ ) );
}
/* Show Sites */
include( EDD_SL_SC_PLUGIN_DIR . '/includes/get-sites.php' );
include( EDD_SL_SC_PLUGIN_DIR . '/includes/display-sites.php' );