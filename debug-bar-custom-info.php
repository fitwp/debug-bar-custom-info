<?php

/*
Plugin Name: Debug Bar Custom Info
Plugin URI: http://fitwp.com
Description: Display custom debug info in Debug Bar panel
Version: 1.0.2
Author: FitWP
Author URI: http://fitwp.com
License: GPL2+
*/

class Debug_Bar_Custom_Info
{
	/**
	 * Array of custom info
	 *
	 * @var array
	 */
	static $info = array();

	/**
	 * Plugin loader function, run when the plugin is loaded
	 *
	 * @return void
	 */
	static function load()
	{
		add_action( 'add_debug_info', array( __CLASS__, 'add' ), 10, 2 );
		add_filter( 'debug_bar_panels', array( __CLASS__, 'add_panel' ) );
	}

	/**
	 * Easily add more text to custom info panel
	 *
	 * @param mixed  $variable Any variable that you want to show info
	 * @param string $label    Text label for the variable. Optional
	 *
	 * @return void
	 */
	static function add( $variable, $label = '' )
	{
		if ( $label )
			self::$info[$label] = $variable;
		else
			self::$info[] = $variable;
	}

	/**
	 * Add panel to Debug Bar plugin
	 *
	 * @param array $panels List of panels
	 *
	 * @return array
	 */
	static function add_panel( $panels )
	{
		require_once plugin_dir_path( __FILE__ ) . 'class-dbci-panel.php';
		$panels[] = new DBCI_Panel( __( 'Custom Info', 'dbci' ) );
		return $panels;
	}
}

Debug_Bar_Custom_Info::load();
