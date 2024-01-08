<?php

/* Chargement des styles du parent. */
add_action( 'wp_enqueue_scripts', 'wpchild_enqueue_styles' );
function wpchild_enqueue_styles(){
  wp_enqueue_style( 'wpm-BlankSlate-style', get_template_directory_uri() . '/style.css' );
}

add_filter( 'wp_nav_menu_items', 'add_admin_link_to_menu', 10, 2 );
function add_admin_link_to_menu( $items, $args ) {
    if (is_user_logged_in() && $args->menu == 'main-menu') {
        $items .= '<li><a href="'. get_permalink( get_option('woocommerce_myaccount_page_id') ) .'">My Account</a></li>';
    }
    elseif (!is_user_logged_in() && $args->menu == 'main-menu') {
        $items .= '<li><a href="' . get_permalink( wc_get_page_id( 'myaccount' ) ) . '">Sign in  /  Register</a></li>';
    }
    return $items;
}