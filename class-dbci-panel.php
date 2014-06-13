<?php
/**
 * This class renders custom debug info into its own panel
 * All the debug info is stored in Debug_Bar_Custom_Info::$info
 */
class DBCI_Panel extends Debug_Bar_Panel
{
	/**
	 * Show debug custom info
	 *
	 * @return void
	 */
	public function render()
	{
		foreach ( Debug_Bar_Custom_Info::$info as $info )
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
}
