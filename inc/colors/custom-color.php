<?php
function mytheme_customize_register($wp_customize)
{

    $wp_customize->add_section(
        'Header_Colors_Setting',
        array(
            'title' => 'Colors Settings',
            'priority' => 20
        )
    );
    // heading  font Color 
    $wp_customize->add_setting(
        'heading_Colors',
        array(
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options',
            'default' => "",
            'transport' => 'refresh',
            'sanitize_callback' => 'sanitize_hex_color',
        )
    );
    $wp_customize->add_control(
        'heading_Colors',
        array(
            'label' => 'heading color',
            'type' => 'color',
            'section' => "Header_Colors_Setting",

        )
    );
    //  Body Font Color
    $wp_customize->add_setting(
        'Body_font_Colors',
        array(
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options',
            'default' => "",
            'transport' => 'refresh',
            'sanitize_callback' => 'sanitize_hex_color',
        )
    );
    $wp_customize->add_control(
        'Body_font_Colors',
        array(
            'label' => 'body font color',
            'type' => 'color',
            'section' => "Header_Colors_Setting",
        )
    );

}
;
add_action('customize_register', 'mytheme_customize_register');



?>