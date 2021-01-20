<?php
/**
* Plugin Name: Stop jQuery Migrate Emails
* Plugin URI: https://github.com/FreshyMichael/stop-jquery-migrate-emails
* Description: Say goodbye to Enable jQuery Migrate Helper weekly status email notifications.
* Version: 1.0.0
* Author: FreshySites
* Author URI: https://freshysites.com/
* License: GNU v3.0
*/

if ( ! defined( 'ABSPATH' ) ) {
	die();
}

/* Stop jQuery Migrate Emails Start */

if ( is_plugin_active( 'enable-jquery-migrate-helper/enable-jquery-migrate-helper.php' ) ) {
    //Enable jQuery Migrate Helper plugin is active

add_action('init', function() {
	$timestamp = wp_next_scheduled( 'enable_jquery_migrate_helper_notification' );
	wp_unschedule_event($timestamp, 'enable_jquery_migrate_helper_notification');
}, 100);
	
}

/* Stop jQuery Migrate Emails End */
?>
