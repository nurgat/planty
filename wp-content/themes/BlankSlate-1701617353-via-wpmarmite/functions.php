<?php

/* Chargement des styles du parent. */
add_action( 'wp_enqueue_scripts', 'wpchild_enqueue_styles' );
function wpchild_enqueue_styles(){
  wp_enqueue_style( 'wpm-BlankSlate-style', get_template_directory_uri() . '/style.css' );
}

// Ajoute un filtre pour modifier les éléments du menu
add_filter('wp_nav_menu_items', 'ajouter_lien_admin_au_menu', 10, 2);

// Fonction appelée lors du filtrage des éléments du menu
function ajouter_lien_admin_au_menu($items, $args) {
    // Vérifie si l'utilisateur est connecté
    if (is_user_logged_in()) {
        // Vérifie si le menu actuel est le menu principal
        $menu_principal = 'Menu Header (Main Menu)';
        if ($args->theme_location == $menu_principal) {
            // Ajoute le lien "Admin" au menu principal
            $items .= '<li>' . wp_loginout(home_url('/wp-admin/'), false) . '</li>';
        }
    }

    return $items;
}
