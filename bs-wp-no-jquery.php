<?php
  /*
    Plugin Name:  B&S WordPress No jQuery
    Plugin URI:   https://github.com/borgenfalkskott/bs-wp-no-jquery
    Description:  This plugin says NO to jQuery!
    Version:      0.0.1
    Author:       Borgenfalk & Skott
    Author URI:   https://borgenfalk.se
    License:      MIT
    License URI:  https://github.com/borgenfalkskott/bs-wp-no-jquery/blob/main/LICENSE
    Text Domain:  bs-wp-no-jquery
    Domain Path:  /languages
  */

  defined( 'ABSPATH' ) or die( 'No script kiddies please!' );


  /**
   * Dequeue and deregister jQuery from frontend
   */
  add_action( 'wp_enqueue_scripts', function(){
    wp_dequeue_script('jquery');
    wp_deregister_script('jquery');
  });
?>