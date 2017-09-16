<?php
/**
 Plugin Name: Plugin
 */

if( defined( 'CL_PLUGIN_VER' ) ){
	return;
}

define( 'CL_PLUGIN_VER', '0.0.1' );
define( 'CL_PLUGIN_PATH', plugin_dir_path(__FILE__));
define( 'CL_PLUGIN_URL', plugin_dir_url(__FILE__));
define( 'CL_PLUGIN_BASENAME', plugin_basename( __FILE__ ));


include_once  __DIR__ . '/webpack_enqueue.php';