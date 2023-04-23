<?php
//  le theme parent : astra
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
//  Charger le style du theme parent
wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
 
//  Chercher le style personnalisé pour le theme
wp_enqueue_style( 'theme-style', get_stylesheet_directory_uri() . '/assets/css/theme.css' );
}