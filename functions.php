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
        //Chargement du css/contact-from/commander.css pour personnalisations
        wp_enqueue_style('commander-style',get_stylesheet_directory_uri() . '/css/contact-from/commander.css');

    }
/*hook*/
/*hook footer*/
    function planty_menus() {

        $locations = array(
            
            'main-footer'   => __( 'Footer principale', 'planty' ),
            'main-header'   => __( 'header principale', 'planty' ),
        );
    
        register_nav_menus( $locations );
    }
    
    add_action( 'init', 'planty_menus' );

/*hook admin menu 'primary'*/

    function add_admin_link_to_menu($items, $args) {
        if (is_user_logged_in() && current_user_can('administrator') && $args->theme_location == 'primary')
         {$admin_url = admin_url();
          $items .= '<li><a href="' . esc_url($admin_url) . '">Admin</a></li>';
         
        }
        return $items;
    }
    add_filter('wp_nav_menu_items', 'add_admin_link_to_menu', 10, 2);
   /*hook admin menu test'

           function add_id_commander_menu($term_id,$args) {
        if ( $args->theme_location == 'main-header')
         {
            $term_id = 8;
         
         }
   
        return $term_id;
    }
    apply_filters('wp_update_term', 'add_id_commander_menu');    */







  
  



    /*Chargement des widgets */


   








?>


