<?php
/**
 * This file contains function related to the sections on front page
 */

/**
 * Wrapping testimonials section to add background image option
 *
 * @since 1.0.0
 */
function fagri_testimonials_before() {

	$default_background_image_path = get_stylesheet_directory_uri() . '/assets/img/testimonials4.jpg';
	$fagri_testimonials_background_image = get_theme_mod( 'fagri_testimonials_background', $default_background_image_path );

	echo '<div class="fagri-testimonials-wrapper" style="background-image: url(' . esc_url( $fagri_testimonials_background_image ) . ');">';
}
add_action( 'hestia_before_testimonials_section_hook', 'fagri_testimonials_before' );

/**
 * The end of testimonials section wrapper
 *
 * @since 1.0.0
 */
function fagri_testimonials_after() {
	echo '</div>';
}
add_action( 'hestia_after_testimonials_section_hook', 'fagri_testimonials_after' );

/**
 * Wrapping team section to add background image option
 *
 * @since 1.0.0
 */
function fagri_team_before() {

	$default_background_image_path = get_stylesheet_directory_uri() . '/assets/img/testimonials4.jpg';
	$fagri_team_background_image = get_theme_mod( 'fagri_team_background', $default_background_image_path );

	echo '<div class="fagri-team-wrapper" style="background-image: url(' . esc_url( $fagri_team_background_image ) . ');">';
}
add_action( 'hestia_before_team_section_hook', 'fagri_team_before' );

/**
 * The end of team section wrapper
 *
 * @since 1.0.0
 */
function fagri_team_after() {
	echo '</div>';
}
add_action( 'hestia_after_team_section_hook', 'fagri_team_after' );