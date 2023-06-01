<?php
/**
 * Enque theme assets
 * @package SKN
 */

 namespace SKN_THEME\Inc;
 use SKN_THEME\Inc\Traits\Singleton; 

 class Assets {
    use Singleton;

    protected function __construct() {
        // load class
        $this->setup_hooks();
    }

    protected function setup_hooks() {
        //action and filters
        add_action( 'wp_enqueue_scripts', [$this, 'enqueu_style'] );
        add_action( 'wp_enqueue_scripts', [$this, 'enqueu_script'] );
    }

    public function enqueu_style() {
        wp_enqueue_style( 'style-name', get_stylesheet_uri() );
        wp_enqueue_style( 'bootstrap-css', SKN_DIR_URI . '/assets/library/css/bootstrap.min.css' );
    }

    public function enqueu_script() {
        wp_enqueue_script( 'script-name', SKN_DIR_URI . '/assets/library', array(), '1.0.0', true );
        wp_enqueue_script( 'bootstrap-js',SKN_DIR_URI . '/assets/library/js/bootstrap.min.js', ['jquery'], false, true );
    }

 }