<?php
register_nav_menus(
    array(
        'primary_menu' => 'Header-Menu',
        'secondary_menu' => 'Footer_Menu'

    )
);
//  Feature image option added on admin
add_theme_support('post-thumbnails');
// add header logo image options customizer
add_theme_support('custom-header');


?>