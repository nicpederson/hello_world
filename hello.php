<?php

/**
* Plugin Name: Test plugin
* Plugin URI: https://nicpederson.com
* GitHub Plugin URI: https://github.com/nicpederson/hello_world
* Primary Branch: main2
* Description: This plugin does some stuff with WordPress
* Version: 1.0.5
* Author: Nic
* Author URI: https://nicpederson.com
* License: GPL2
*/

add_action( 'wp_footer', 'my_function' );

function my_function() {
  echo 'hello world';
}


?>