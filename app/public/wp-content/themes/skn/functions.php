<?php 
/**
 * @Package SKN
 */

 /**
 * Proper way to enqueue scripts and styles
 */

//  require_once SKN_DIR_PATH . '/inc/helpers/autoloader.php';

 if (! defined('SKN_DIR_PATH')) {
    define('SKN_DIR_PATH', untrailingslashit(get_template_directory()));
 }

 if(! defined('SKN_DIR_URI')) {
    define('SKN_DIR_URI', untrailingslashit(get_template_directory_uri()));
 }
 require_once SKN_DIR_PATH . '/inc/helpers/autoloader.php';



 function skn_get_theme_instance() {
	\SKN_THEME\Inc\SKN_THEME::get_instance();
}


 skn_get_theme_instance();

