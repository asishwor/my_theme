<?php

// Register a new section in the Customizer
function my_typography_customizer_section($wp_customize)
{
    $wp_customize->add_panel(
        'Typography',
        array(
            'title' => "Typography",
            'description' => 'Select typography for body and heading',
            // Include html tags such as <p>.
            'priority' => 30,
            // Mixed with top-level-section hierarchy.
        )
    );

    //section for font Family
    $wp_customize->add_section(
        'Font_family',
        array(
            'title' => 'Font Family',
            'panel' => 'Typography'
        )
    );


    // add controls for typography
    // Add settings and controls for font family
    $wp_customize->add_setting(
        'body_font_family',
        array(
            'default' => 'Arial',
            'transport' => 'refresh',
            'sanitize_callback' => 'sanitize_text_field',

        )
    );

    // Add settings and controls for font family
    $wp_customize->add_setting(
        'heading_font_family',
        array(
            'default' => 'Arial',
            'transport' => 'refresh',
            'sanitize_callback' => 'sanitize_text_field',

        ),
    );
    $wp_customize->add_control(
        'body_font_family',
        array(
            'label' => 'Body Font Family',
            'section' => 'Font_family',
            'settings' => 'body_font_family',
            'type' => 'select',
            'choices' => array(
                'Arial' => 'Arial',
                'Helvetica' => 'Helvetica',
                'Verdana' => 'Verdana',
                'DM Sans' => 'DM Sans',
                "DM Serif Display" => "'DM Serif Display', serif",
                'Inter' => "'Inter', sans-serif"
            ),
        )
    );

    //body font family controls
    $wp_customize->add_control(
        'heading_font_family',
        array(
            'label' => 'Heading Font Family',
            'section' => 'Font_family',
            'settings' => 'heading_font_family',
            'type' => 'select',
            'choices' => array(
                'Arial' => 'Arial',
                'Helvetica' => 'Helvetica',
                'Verdana' => 'Verdana',
                'DM Sans' => 'DM Sans',
                "DM Serif Display" => "'DM Serif Display', serif",
                'Gilda Display' => "'Gilda Display'"
            ),
        )
    );

    //  Font size 


    // Add a new section
    $wp_customize->add_section(
        'font_size',
        array(
            'title' => 'Font Size',
            'mytheme',
            'priority' => 40,
            'panel' => 'Typography'
        )
    );


    // Add a new setting

    $wp_customize->add_setting(
        'body_font_size',
        array(
            'transport' => 'refresh',
            'sanitize_callback' => 'sanitize_text_field',
            'default' => '16px',
        )
    );
    $wp_customize->add_setting(
        'h1_font',
        array(
            'transport' => 'refresh',
            'sanitize_callback' => 'sanitize_text_field',
            'default' => '34px',
        )
    );
    $wp_customize->add_setting(
        'h2_font',
        array(
            'transport' => 'refresh',
            'sanitize_callback' => 'sanitize_text_field',
            'default' => '24px',
        )
    );
    // h3 font size
    $wp_customize->add_setting(
        'h3_font',
        array(
            'transport' => 'refresh',
            'sanitize_callback' => 'sanitize_text_field',
            'default' => '18px',
        )
    );
    // hd font size
    $wp_customize->add_setting(
        'h4_font',
        array(
            'transport' => 'refresh',
            'sanitize_callback' => 'sanitize_text_field',
            'default' => '16px',
        )
    );


    // Add a new control
    $wp_customize->add_control(
        'body_font_size',
        array(
            'label' => 'Body Font Size',
            'section' => 'font_size',
            'settings' => 'body_font_size',
            'type' => 'range',
            'input_attrs' => array(
                'min' => 12,
                'max' => 32,
                'step' => 1,
            ),
            'description' => '<span class="range-value"></span>'
        )
    );
    // h1 
    $wp_customize->add_control(
        'h1_font',
        array(
            'label' => 'h1 Font Size',
            'section' => 'font_size',
            'settings' => 'h1_font',
            'type' => 'range',
            'input_attrs' => array(
                'min' => 12,
                'max' => 58,
                'step' => 1,
            ),
            'description' => '<span class="range-value"></span>'
        )
    );

    // h2 
    $wp_customize->add_control(
        'h2_font',
        array(
            'label' => 'h2 Font Size',
            'section' => 'font_size',
            'settings' => 'h2_font',
            'type' => 'range',
            'input_attrs' => array(
                'min' => 12,
                'max' => 47,
                'step' => 1,
            ),
            'description' => '<span class="range-value"></span>'
        )
    );

    // h3
    $wp_customize->add_control(
        'h3_font',
        array(
            'label' => 'h3 Font Size',
            'section' => 'font_size',
            'settings' => 'h3_font',
            'type' => 'range',
            'input_attrs' => array(
                'min' => 12,
                'max' => 28,
                'step' => 1,
            ),
            'description' => '<span class="range-value"></span>'
        )
    );
    // h4
    $wp_customize->add_control(
        'h4_font',
        array(
            'label' => 'h4 Font Size',
            'section' => 'font_size',
            'settings' => 'h4_font',
            'type' => 'range',
            'input_attrs' => array(
                'min' => 12,
                'max' => 24,
                'step' => 1,
            ),
            'description' => '<span class="range-value"></span>'
        )
    );
}

add_action('customize_register', 'my_typography_customizer_section');

//  font size 