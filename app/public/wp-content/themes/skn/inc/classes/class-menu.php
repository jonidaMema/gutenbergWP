<?php
/**
 * Enqueue Menu
 * @Package SKN
 */

 namespace SKN_THEME\Inc;
 use SKN_THEME\INC\Traits\Singleton;

 class Menu {
    use Singleton;
    protected function __construct() {
        $this->setup_hooks();

    }

    public function setup_hooks() {
        add_action( 'after_setup_theme', [$this, 'register_menus']);
    }

    public function register_menus(){
        register_nav_menus( [
	    	'skn-header-menu' => esc_html__( 'Header Menu', 'skn' ),
	    	'skn-footer-menu'  => esc_html__( 'Footer Menu', 'skn' ),
		] );
    }
 }