<?php 
   
    define('URL_THEME',get_stylesheet_directory_uri());
    define('URL_CSS', URL_THEME.'/inc/css');
    define('URL_IMGS', URL_THEME.'/inc/img');
    define('URL_JS', URL_THEME.'/inc/js');

    // hàm set up theme
    if(! function_exists('morial_setup') ){
        function morial_setup(){
            /**
             * Add support for two custom navigation menus.
             */
            register_nav_menus( array(
                'primary'   => __('Primary Menu', 'morial' ),
                'secondary' => __('Secondary Menu', 'morial' )
            ) );
        }
    }
    add_action( 'after_setup_theme', 'morial_setup' );
    // set up menu
    
    if( !function_exists( 'morial_header_menu' ) ) :
        /**
         * header menu (should you choose to use one)
         */
        function morial_header_menu() {
        // display the WordPress Custom Menu if available
        wp_nav_menu(array(
            'menu'              => 'primary',
            'theme_location'    => 'primary',
            'depth'             => 2,
            'container'         => 'div',
            'container_class'   => 'collapse navbar-collapse navbar-ex1-collapse',
            'container_id'	=> 'navbar-primary',
            'menu_class'        => 'nav navbar-nav',
            'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
        ));
    } /* end header menu */
    endif;
    // thêm css , js
    function wpdocs_theme_name_scripts() {
        wp_enqueue_style( 'style-main', get_stylesheet_uri() );
       // wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/example.js' );
    }
    add_action( 'wp_enqueue_scripts', 'wpdocs_theme_name_scripts' );
?>