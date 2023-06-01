<?php 

/**
 * Add base functionality of the themes
 * @Package SKN
 */

 namespace SKN_THEME\Inc;

 use SKN_THEME\Inc\Traits\Singleton; 
 

 class SKN_THEME {
    use Singleton;

    protected function __construct() {
        Assets::get_instance();
        // load class
        $this->setup_hooks();
    }

    protected function setup_hooks() {
        //add action
        add_action('after_setup_theme', [$this, 'theme_setup']);
    }

    public function theme_setup(){
        /** tag-title **/
         add_theme_support( 'title-tag' );
         add_theme_support( 'custom-logo', [
            'height' => 480,
            'width'  => 720,
            'flex-height'  => true,
	        'flex-width'   => true,
            'header-text'  => [ 'site-title', 'site-description' ],
        ] );
        add_theme_support( 'post-thumbnails' );
        add_theme_support('menus');
        add_theme_support( 'customize-selective-refresh-widgets' );
        add_theme_support( 'automatic-feed-links' );
        add_theme_support( 'html5', [
        'comment-list', 
        'comment-form', 
        'search-form', 
        'gallery',
        'caption',
         'style',
          'script'
        ]);

        add_editor_style();
        add_theme_support( 'wp-block-styles' );
        add_theme_support( 'align-wide' );
        

        //Set max width for the content 
        global $content_width;
        if ( ! isset( $content_width ) ) {
            $content_width = 1240;
        }

    }



 }
