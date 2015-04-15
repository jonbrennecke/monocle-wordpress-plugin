<?php

/**
 * Plugin Name: Monocle
 * Plugin URI: http://github.com/monocle
 * Description: A WordPress plugin for zooming images
 * Version: 1.0
 * Author: Jon Brennecke
 * Author URI: http://twitter.com/jonbrennecke
 * License: MIT
 *
 * @package Monocle
 * @author Jon Brennecke
 * @version 1.0
 */


/*
 * Prevent direct file access
 */
if( ! defined( 'ABSPATH' ) ) {
	die();
}


/**
 * Define the plugin directory
 */ 
define( 'MONOCLE_DIR', dirname( __FILE__ ) );


/**
 * Define the PHP directory
 */ 
define( 'MONOCLE_PHP_DIR', MONOCLE_DIR . '/php' );


/**
 * Include the functions.php file
 */ 
require_once MONOCLE_DIR . '/functions.php';

