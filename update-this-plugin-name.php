<?php
/**
* Plugin Name: Stop jQuery Migrate Emails
* Plugin URI: https://github.com/FreshyMichael/stop-jquery-migrate-emails
* Description: full stop jQuery Migrate Helper emails notifications
* Version: 1.0.0
* Author: FreshySites
* Author URI: https://freshysites.com/
* License: GNU v3.0
*/

if ( ! defined( 'ABSPATH' ) ) {
	die();
}

/* Stop jQuery Migrate Emails Start */
//______________________________________________________________________________
add_action('init', function() {
	$timestamp = wp_next_scheduled( 'enable_jquery_migrate_helper_notification' );
	wp_unschedule_event($timestamp, 'enable_jquery_migrate_helper_notification');
}, 100); 

//______________________________________________________________________________
// All About Updates

//  Begin Version Control | Auto Update Checker
require 'plugin-update-checker/plugin-update-checker.php';
$myUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
// ***IMPORTANT*** Update this path to New Github Repository Master Branch Path
	'https://github.com/FreshyMichael/stop-jquery-migrate-emails',
	__FILE__,
// ***IMPORTANT*** Update this to New Repository Master Branch Path
	'stop-jquery-migrate-emails'
);
//Enable Releases
$myUpdateChecker->getVcsApi()->enableReleaseAssets();
//Optional: If you're using a private repository, specify the access token like this:
//
//
//Future Update Note: Comment in these sections and add token and branch information once private git established
//
//
//$myUpdateChecker->setAuthentication('your-token-here');
//Optional: Set the branch that contains the stable release.
//$myUpdateChecker->setBranch('stable-branch-name');

//______________________________________________________________________________
/* Stop jQuery Migrate Emails End */
?>
