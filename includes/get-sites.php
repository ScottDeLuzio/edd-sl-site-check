<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
function eddslsc_get_sites(){
	global $wpdb;
	$license_table			= $wpdb->prefix . 'edd_licenses';
	$license_activations	= $wpdb->prefix . 'edd_license_activations';
	$status					= 'active';
	$sites					= $wpdb->get_results( "SELECT * FROM " . $license_activations, OBJECT );

	if ( $sites ){
		echo '<ul>';
		foreach( $sites as $site ){
			$download_id	= $wpdb->get_results( $wpdb->prepare( "SELECT download_id FROM " . $license_table . " WHERE id='%s';", $site->license_id ) );
			foreach( $download_id as $id ){
				$download		= edd_get_download( $id->download_id );
			}

			echo '<li><a href="http://' . $site->site_name . '">http://' . $site->site_name . '</a> - ' . $download->post_title . '</li>';
		}
		echo '</ul>';
	}
}