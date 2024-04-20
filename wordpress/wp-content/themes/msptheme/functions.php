<?php

/* Function to enqueue stylesheet from parent theme */

function child_enqueue__parent_scripts() {

wp_enqueue_style( 'parent', get_template_directory_uri().'/style.css' );

}

add_action( 'wp_enqueue_scripts', 'child_enqueue__parent_scripts');
?>
<?php
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles', 11 );
function my_theme_enqueue_styles() {
    wp_enqueue_style( 'child-style', get_stylesheet_uri() );
}
?>