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
		foreach ( Debug_Bar_Custom_Info::$info as $label => $variable )
		{
			if ( is_string( $label ) && $label )
				echo "<h1>$label</h1>";
			if ( empty( $variable ) )
			{
				var_dump( $variable );
			}
			elseif ( is_string( $variable ) )
			{
				echo $variable;
			}
			else
			{
				echo '<pre>';
				print_r( $variable );
				echo '</pre>';
			}

			echo '<br><br><hr><br><br>';
		}
	}
}
