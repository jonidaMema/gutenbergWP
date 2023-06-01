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

    public function get_menu_id($location) {
        $locations = get_nav_menu_locations();
        $menu_id=$locations[$location];
        return !empty($menu_id) ? $menu_id : '';
    }
 }