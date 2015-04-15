<?php

/**
 * Setup the Monocle WordPress plugin
 * 
 * @since 1.0
 */
if ( ! function_exists('monocle_setup') ) 
{
	function monocle_setup () 
	{
		// @todo
	}
	add_action();
}

/**
 * Register scripts
 * 
 * @since 1.0
 */ 
if ( ! function_exists('monocle_register_scripts') ) 
{
	function monocle_register_scripts() 
	{
		// wp_enqueue_style('social-admin-css', plugins_url( '/social/css/stylesheets/social-admin-style.css', dirname(__FILE__)));

		// admin javascript (needs jQuery UI)
		// wp_enqueue_script('social-profile-js',plugins_url('/social/js/admin-profile.js', dirname(__FILE__)), array('jquery','jquery-ui-core','jquery-effects-core') );
		// wp_enqueue_script('social-admin-js',plugins_url('/social/js/social-admin.js', dirname(__FILE__)), array('social-profile-js') );
	}
	add_action('wp_enqueue_scripts','monocle_register_scripts');
}

/**
 * Register shortcodes
 * 
 * @since 1.0
 */ 
if ( ! function_exists('monocle_register_shortcodes') ) 
{
	function monocle_register_shortcodes () 
	{
		require_once MONOCLE_PHP_DIR . '/shortcodes.php';
	}
	add_action('init', 'monocle_register_shortcodes');
}