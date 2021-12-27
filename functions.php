<?php
    if ( ! function_exists( 'mytheme_register_nav_menu' ) ) {
 
        function mytheme_register_nav_menu(){
            register_nav_menus( array(
                'mainnav' => __( 'Hauptnavigation' )
            ) );
        }
        add_action( 'after_setup_theme', 'mytheme_register_nav_menu' );
    }
?>