<?php
/**
 * Created by PhpStorm.
 * User: Juan
 * Date: 20/05/2015
 * Time: 17:50
 */

//ADD THUMBNAIL PIC TO THE POSTS 
add_theme_support("post-thumbnails");

//ADD SUPPORT FOR THE COMMENTS TEMPLATE
add_theme_support( 'html5', array( 'search-form' ) );

//ADD FAVICON IN THE ADMIN SESSION
function admin_favicon() {
    echo '<link rel="Shortcut Icon" type="image/x-icon"
    href="'.get_bloginfo('stylesheet_directory').'/img/favicon.png" />';
}
add_action('admin_head', 'admin_favicon');


//ADD SUPPORT FOR THE NAVBAR MENU
function register_my_menus(){
    register_nav_menus( array(
        'header-menu' => 'Header navigation',
        'footer-menu' => 'Footer navigation'
    )
  );
}
//ACTIVATE DE NABVARS MENUS
add_action( 'init', 'register_my_menus' );

//ADD SUPPORT FOR THE WIDGETS 
function forwidgets_register_sidebar(){
    register_sidebar( 
        array(

            'id' => 'sidebar--widget',
            'name' => "Sidebar Widget",
            "description" => "Widgets para el sidebar",
            "before_widget" => "<div class='sidebar__widget'>",
            "after_widget" => "</div>"
        )
     );
}
//ACTIVATE THE SUPPORT FOR WIDGETS
add_action( 'widgets_init', 'forwidgets_register_sidebar' );

