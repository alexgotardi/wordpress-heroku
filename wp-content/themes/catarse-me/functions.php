<?php
/**
 * This is child themes functions.php file. All modifications should be made in this file.
 *
 * All style changes should be in child themes style.css file.
 *
 * @package LiveWireChild
 * @subpackage Functions
 */

/* Adds the child theme setup function to the 'after_setup_theme' hook. */
add_action( 'after_setup_theme', 'live_wire_child_theme_setup', 11 );

/**
 * Setup function.  All child themes should run their setup within this function.  The idea is to add/remove 
 * filters and actions after the parent theme has been set up.  This function provides you that opportunity.
 *
 * @since 0.1.0
 */
function live_wire_child_theme_setup() {

	/* Get the theme prefix ("live-wire"). */
	$prefix = hybrid_get_prefix();

	/* Example action. */
	add_action( "{$prefix}_home_before_main", 'show_featured_posts' );

	/* Example filter. */
	// add_filter( "{$prefix}_site_title", 'live_wire_child_example_filter' );

}

function show_featured_posts(){
if ( function_exists( 'get_smooth_slider' ) ) { get_smooth_slider(); }
}

?>