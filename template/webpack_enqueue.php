<?php
  


function caldera_learn_vue_plugin_scripts() {


    wp_enqueue_style( 'main', CL_PLUGIN_URL . '/assets/style.css', NULL, CL_PLUGIN_VER, 'all' );
  	wp_enqueue_script('vendor', CL_PLUGIN_URL . '/assets/vendor.js', NULL, CL_PLUGIN_VER, TRUE);
  	wp_enqueue_script('main', CL_PLUGIN_URL . '/assets/main.js', array('vendor'), CL_PLUGIN_VER, TRUE);

}

add_action( 'wp_enqueue_scripts', 'caldera_learn_vue_plugin_scripts' );