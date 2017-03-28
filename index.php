<?php
/*
Plugin Name: WPHackathon - Organizations
Version: 1.0.0
Plugin URI: https://wphackathon.com
Description: Creates a Custom Post Type to manage the Organizations participating in the WPHackathon
Author: WPHackathon
Author URI: https://wphackathon.com
*/

define( 'WPH_ORGANIZATIONS_PATH', dirname( __FILE__ ) );

$wph_textdomain = 'wphackathon-cpt-organizations';

/* Custom Post Type - Organizations */
include( WPH_ORGANIZATIONS_PATH . '/includes/cpt-organizations.php' );

/* Shortcode - Organizations */
// include( WPH_ORGANIZATIONS_PATH . '/includes/sc-organizations.php' );

/* Shortcode - Organizations Application */
include( WPH_ORGANIZATIONS_PATH . '/includes/sc-organizations-application.php' );

/* Widget - Organizations */
// include( WPH_ORGANIZATIONS_PATH . '/includes/widget-organizations.php' );
