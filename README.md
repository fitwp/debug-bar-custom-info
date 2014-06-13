# Debug Bar Custom Info #

**Project Homepage:** http://fitwp.com/debug-bar-custom-info/

**Donate link:** http://www.deluxeblogtips.com/donate

This plugin adds an extra panel to Debug Bar plugin that allows developers to output custom debug info.

## Description ##

This plugin adds an extra panel to [Debug Bar](https://wordpress.org/plugins/debug-bar/) plugin that allows developers to output custom debug info.

Think about it like Console in browsers!

**How to view debug info**

- You first need to install the [Debug Bar](https://wordpress.org/plugins/debug-bar/) plugin
- Install this plugin
- When viewing a page, click on **Debug Bar** in the top right of the admin bar
- Select **Custom Info** panel (see screenshots)

That's the place where you see all custom debug info.

Note: You have to added the *custom* debug info yourself. The plugin only register a place for you to output the debug info.

**How to add debug info to Custom Info panel**

Add the following code whenever you want to debug a variable:

`do_action( 'add_debug_info', $var );`

where `$var` can has any data type. If it is a string or any simple value, the value is outputted directly. If it is an array or object, the output is the same as `print_r( $var )`.

## Installation ##

1. Unzip the download package
1. Upload `debug-bar-custom-info` to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress

## Changelog ##

### 1.1 ###
* Use `do_action` to prevent fatal error when plugin files is not loaded

### 1.0 ###
* First release
