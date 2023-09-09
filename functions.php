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
        //Chargement du css/bandeau-canettes.css pour personnalisations
        wp_enqueue_style('shot-code-canette-style',get_stylesheet_directory_uri() . '/css/bandeau-canettes.css');




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
add_filter('wp_nav_menu_items', 'add_admin_link_to_menu', 10, 2);
    function add_admin_link_to_menu($items, $args) {
        if (is_user_logged_in() && current_user_can('administrator') && $args->theme_location == 'primary')
         {$admin_url = admin_url();
          $items .= '<li><a href="' . esc_url($admin_url) . '">Admin</a></li>';
         
        }
        return $items;
    }
    

/*short */

add_shortcode('bandeau_canette','bandeau_canette_func');
    function bandeau_canette_func($atts)
    {
        $atts = shortcode_atts(array(
        'src'=>''),$atts,'bandeau_canette');
        ob_start();

        if($atts['src'] !="")
        { ?>
            <div id='bloc_bandeau_canettes'>
            <div class='bloc_image'>
                <?php for($compteur=1;$compteur<=16;$compteur++) :
                            if ($compteur==4|| $compteur==7 || $compteur==11 || $compteur==15)
                                {
                                $hauteur=1;
                                } 
                             elseif($compteur==1 ||$compteur==3|| $compteur==5 || $compteur==8 ||$compteur==10 || $compteur==12|| $compteur==14 || $compteur==16)
                                {
                                $hauteur=2;
                                }
                                elseif ($compteur==2||$compteur==6||$compteur==9 || $compteur==13) 
                                    {
                                $hauteur=3;
                                    }
                                    ?>
                                    <figure  class='position_<?php echo ($compteur);?> hauteur<?php echo ($hauteur);?>'>
                                        <img src= <?php echo $atts['src'] ;?> class='img_bandeau'>
                                    </figure>                                       
                            <? endif;?>
                    <?php endfor;?>
                                </div>
                            </div>
                        <?php             
            }
    $output=ob_get_contents();
    ob_end_clean();

return $output;
    }

?>
















