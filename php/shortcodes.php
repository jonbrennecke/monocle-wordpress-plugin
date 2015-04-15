<?php

/**
 * Register the 'monocle-image' shortcode
 * 
 * @since 1.0
 */ 
if ( ! function_exists('monocle_image_shortcode') ) 
{
	function monocle_image_shortcode( $attr, $content=null ) {
		return "<img class='monocle-wp-init' src=\"{$attr['src']}\" />";
	}
	add_shortcode('monocle-image','monocle_image_shortcode');
}