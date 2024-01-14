<?php

/* Chargement des styles du parent. */
add_action( 'wp_enqueue_scripts', 'wpchild_enqueue_styles' );
function wpchild_enqueue_styles(){
  wp_enqueue_style( 'wpm-BlankSlate-style', get_template_directory_uri() . '/style.css' );
}


// Ajoute un filtre pour modifier les éléments du menu de navigation WordPress
add_filter('wp_nav_menu_items', 'add_admin_link', 10, 2);

// Fonction appelée lors du filtrage des éléments du menu
function add_admin_link($items, $args) {
    // Vérifie si l'utilisateur est connecté
    if (is_user_logged_in()) {
        // Si l'utilisateur est connecté, ajoute un nouvel élément de menu avec le lien "Admin"
        $items .= '<li class="bloc-hfe-menu-item"><a class="hfe-menu-item" href="'. get_admin_url() .'">Admin</a></li>';
    }

    // Retourne les éléments du menu, avec ou sans le lien "Admin" ajouté
    return $items;
}





