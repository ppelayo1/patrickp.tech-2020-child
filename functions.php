<?php 
    add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
    function my_theme_enqueue_styles() {
        wp_register_style('PlayFairBlack900',"https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");
        wp_enqueue_style('PlayFairBlack900');
        
        wp_enqueue_style( 'child-style', get_stylesheet_uri(),
            array( 'style' ), 
            wp_get_theme()->get('Version') // this only works if you have Version in the style header
        );
    }
?>