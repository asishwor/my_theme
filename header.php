<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
    <title>Document</title>
</head>

<body>
    <header>
        <nav>
            <div class="logo">
                <a href="<?php echo site_url(); ?>">
                    <img src='<?php echo get_header_image(); ?>' alt="">
                </a>
            </div>
            <!-- calling menu  -->
            <?php
            wp_nav_menu(
                array(
                    'theme-location' => 'primary-menu',
                    'menu-class' => 'menu'
                )
            );
            ?>
        </nav>
    </header>