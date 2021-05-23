<?php
function team06_register_styles(){

    wp_enqueue_style('style' , get_stylesheet_uri()); 
}

add_action( 'wp_enqueue_scripts', 'team06_register_styles');

?>