<?php
function Phitheme_add_stylesheet() {
    wp_enqueue_style( 'Phistyle', get_stylesheet_uri() );
}

add_action( 'wp_enqueue_scripts', 'Phitheme_add_stylesheet' );

function Phitheme_add_menus() {
    register_nav_menus( array(
        'primary' => __( 'Primary' ),
        'secondary' => __( 'Bob' ),
    ) );
}
add_action( 'after_setup_theme',
            'Phitheme_add_menus' );
