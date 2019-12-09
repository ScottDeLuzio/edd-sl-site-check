<?php
// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
add_action( 'admin_menu', 'eddslsc_admin_settings_page' );
add_action( 'admin_init', 'eddslsc_register_settings' );
	
function eddslsc_admin_settings_page(){
	add_submenu_page( 'edit.php?post_type=download', __( 'SL Sites' ), __( 'SL Sites' ), 'manage_options', 'edd-sl-sites', 'eddslsc_display_settings' );
}

function eddslsc_register_settings(){
	register_setting( 'subscriber_discounts_settings_group', 'sdedd_settings' );
}

function eddslsc_display_settings(){
	global $sdedd_options; ?>
	<div class="wrap">
	<h2><?php _e( 'Software Licensing Sites' ); ?></h2>
	<?php
	echo eddslsc_get_sites();
}