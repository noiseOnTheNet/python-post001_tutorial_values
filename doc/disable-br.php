<?php
 /*
 Plugin Name: Disable Br
 Plugin URI:
 Description: Disable Br and P.
 Version: 1.0
 Author: WebNots
 Author URI: https://www.webnots.com
 */
 remove_filter( 'the_content', 'wpautop' );

 remove_filter( 'the_excerpt', 'wpautop' );
 ?>
