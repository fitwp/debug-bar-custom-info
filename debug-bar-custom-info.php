<?php
/*
Plugin Name: Debug Bar Custom Info
Plugin URI: http://fitwp.com
Description: Display custom debug info in Debug Bar panel
Version: 1.0
Author: FitWP
Author URI: http://fitwp.com
License: GPL2+
*/

add_filter( 'debug_bar_panels', 'debug_bar_custom_info_panel' );

function debug_bar_custom_info_panel( $panels )
{
	require_once 'class-debug-bar-custom-info.php';
	$panels[] = new Debug_Bar_Custom_Info( __( 'Custom Info', 'dbci' ) );
	return $panels;
}
