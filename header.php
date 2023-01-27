<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/media.css">
    <style type="text/css">
    :root {
        --heading-color:
            <?php echo get_theme_mod('heading_Colors', 'var(--heading-font-color)');
        ?>;
        --body-font-color:
            <?php echo get_theme_mod('Body_font_Colors', '#333');
        ?>;
        --primary-font-family:
            <?php echo get_theme_mod('body_font_family', 'Arial');
        ?>;
        --heading-font-family:
            <?php echo get_theme_mod("heading_font_family", 'Arial');
        ?>;
        --body-font-size:
            <?php echo get_theme_mod("body_font_size", '16px') . 'px';
        ?>;
    }

    @media (min-width:768px) {
        .sidebar {
            width:
                <?php echo get_theme_mod('sidebar_setting', 30) . '%'?>;
            position: sticky;
            align-self: self-start;
            top: 40px;
            padding-right: 10px;
        }
    }


    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        color: var(--heading-color);
        font-family: var(--heading-font-family);
    }

    h1 {
        font-size:
            <?php echo get_theme_mod('h1_font', '34') . 'px';
        ?>;

    }

    h2 {
        font-size:
            <?php echo get_theme_mod('h2_font', '24') . 'px';
        ?>;

    }

    h3 {
        font-size:
            <?php echo get_theme_mod('h3_font', '18') . 'px';
        ?>;

    }

    h4 {
        font-size:
            <?php echo get_theme_mod('h4_font', '16') . 'px';
        ?>;

    }


    body {
        color: var(--body-font-color);
        font-family: var(--primary-font-family);
        font-size: var(--body-font-size);
    }
    </style>
    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
    <header class=" header-container" id="home">
        <div class="container">
            <div class="site-header">

                <div class="logo ">
                    <a href="<?php echo site_url(); ?>">
                        <img src="<?php echo get_header_image(); ?>" alt="" width="150px" />
                    </a>
                </div>
                <nav class="nav">
                    <div class="nav-list">
                        <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'primary',
                                'menu-class' => 'menu'
                            )
                        ); ?>
                    </div>

                    <div class="mobile__menu">

                        <div class="close">
                            <i class="fa-solid fa-times"></i>
                        </div>
                        <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'primary',
                                'menu-class' => 'menu'
                            )
                        ); ?>
                    </div>
                </nav>
                <div class="navbar-menu  hide-desktop">
                    <i class="fa-solid fa-bars"></i>
                </div>
            </div>

    </header>