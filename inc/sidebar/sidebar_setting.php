<?php
function sidebar_customize_register($wp_customize)
{
    $wp_customize->add_panel(

        'sidebar',
        array(
            'title' => 'Sidebar',
            'description' => 'set sidebar width (%)',
            'priority' => 50,
        )
    );
    //  add section for sidebar
    $wp_customize->add_section(
        'sidebar_width',
        array(
            'title' => 'Sidebar Width',
            'panel' => 'sidebar'
        )
    );
    //  add settings 
    $wp_customize->add_setting(
        'sidebar_setting',
        array(
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options',
            'default' => 30,
            'transport' => 'refresh',
            'sanitize_callback' => 'absint'

        )
    );
    //  add control for width of this sidebar

    $wp_customize->add_control(
        'sidebar_setting',
        array(
            'label' => 'set sidebar width',
            'section' => 'sidebar_width',
            'type' => 'number',
        )
    );

}
;

add_action('customize_register', 'sidebar_customize_register');

?>