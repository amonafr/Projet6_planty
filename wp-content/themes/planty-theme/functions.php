<?php
function theme_enqueue_styles()
{
    wp_enqueue_style('parent-style',get_template_directory_uri().'/style.css');
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/css/theme.css', array(), filemtime(get_stylesheet_directory() . '/css/theme.css'));
}
add_action('wp_enqueue_scripts','theme_enqueue_styles');



add_filter( 'wp_nav_menu_items', 'afficher_menu_admin', 10, 2 );

function afficher_menu_admin( $items, $args ) {
    if ((is_user_logged_in()) && ($args->menu == 'menu-principal'))
    {
        preg_match_all('/<li[^>]*>.*?<a[^>]*>.*?<\/a>.*?<\/li>/is', $items, $matches,PREG_PATTERN_ORDER);
        $lien_nousrencontrer= $matches[0][0];
        $lien_commander=$matches[0][1];
        $lien_admin = '<li id="planty-admin" class="menu-item menu-item-type-post_type menu-item-object-page parent hfe-creative-menu"><a href="'. get_admin_url().'" class="hfe-menu-item">Admin</a></li>';
        $items=$lien_nousrencontrer. $lien_admin . $lien_commander;
         
    }
    return $items;
}

remove_filter( 'the_content', 'wpautop' );
// code qui marche  également
/*function afficher_menu($args) 
{
   
    if( is_user_logged_in() )  
    {
            $args['menu'] = 4;
     } else {
    
             $args['menu'] = 2;
    }
    return $args;
    }
add_filter( 'wp_nav_menu_args', 'afficher_menu' );

*/

?>
