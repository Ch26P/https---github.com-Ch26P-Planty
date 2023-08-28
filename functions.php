<?php
    //action qui permet de charger des scripts dans notre theme
    add_action('wp_enqueue_scripts','theme_enqueue_styles');
    function theme_enqueue_styles()
    {
        //changement du style.css du parent
        wp_enqueue_style('parent-style',get_template_directory_uri().'/style.css');
        //Chargement du css/theme.css pour personnalisations
        wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/css/theme.css',
        array(), filemtime(get_stylesheet_directory() . '/css/theme.css'));
    }
/*hook*/
    function planty_menus() {

        $locations = array(
     
            'main-footer'   => __( 'Footer principale', 'planty' ),

        );
    
        register_nav_menus( $locations );
    }
    
    add_action( 'init', 'planty_menus' );
    /*Chargement des widgets */


   








?>


