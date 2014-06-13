<?php

class Debug_Bar_Custom_Info extends Debug_Bar_Panel
{
	/**
	 * Array of custom info
	 *
	 * @var array
	 */
	static $info = array();

	/**
	 * Show debug custom info
	 *
	 * @return void
	 */
	public function render()
	{
		foreach ( self::$info as $info )
		{
			if ( empty( $info ) )
			{
				var_dump( $info );
			}
			elseif ( is_string( $info ) )
			{
				echo $info;
			}
			else
			{
				echo '<pre>';
				print_r( $info );
				echo '</pre>';
			}

			echo '<br><br><hr><br><br>';
		}
	}

	/**
	 * Easily add more text to custom info panel
	 *
	 * @param string $text
	 *
	 * @return void
	 */
	static function add( $text )
	{
		self::$info[] = $text;
	}
}
