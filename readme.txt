=== Debug Bar Custom Info ===
Contributors: fitwp, rilwis
Donate link: http://www.deluxeblogtips.com/donate
Tags: debug
Requires at least: 3.8
Tested up to: 3.9.1
Stable tag: 1.0.1
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

This plugin adds an extra panel to Debug Bar plugin that allows developers to output custom debug info.

== Description ==

This plugin adds an extra panel to [Debug Bar](https://wordpress.org/plugins/debug-bar/) plugin that allows developers to output custom debug info.

Developers can log any variable to see its value when running PHP in WordPress. This helps developers see the real-time values of variables. It works exactly like `console.log()` in browsers.

= How to add custom debug info =

Add the following code wherever you want to debug a variable:

`do_action( 'add_debug_info', $var );`

where `$var` can has any data type.

- If `$var` is a string or any simple value, the value is outputted directly.
- If `$var` is an array or object, the output is the same as `print_r( $var )`.

= How to view debug info =

- Click on **Debug Bar** in the top right of the admin bar
- Select **Custom Info** panel (see [screenshots](https://wordpress.org/plugins/debug-bar-custom-info/screenshots/))

[Project Homepage](http://fitwp.com/plugins/debug-bar-custom-info/) | [Report Bugs](https://github.com/fitwp/debug-bar-custom-info/issues) | [Donate](http://www.deluxeblogtips.com/donate/)

== Installation ==

1. Unzip the download package
1. Upload `debug-bar-custom-info` to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress

== Frequently Asked Questions ==

== Screenshots ==

1. Custom Info Panel

== Changelog ==

= 1.0.1 =
* Use `do_action` to prevent fatal error when plugin files is not loaded

= 1.0 =
* First release

== Upgrade Notice ==
