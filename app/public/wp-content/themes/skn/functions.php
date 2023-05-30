<?php 
/**
 * @Package SKN
 */

 /**
 * Proper way to enqueue scripts and styles
 */

function wpdocs_skn_scripts() {

    //Enqueue Style
	wp_enqueue_style( 'style-name', get_stylesheet_uri() );
    wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/assets/library/css/bootstrap.min.css' );
	wp_enqueue_script( 'script-name', get_template_directory_uri() . '/assets/library', array(), '1.0.0', true );
    wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/assets/library/js/bootstrap.min.js', ['jquery'], false, true );
}
add_action( 'wp_enqueue_scripts', 'wpdocs_skn_scripts' );