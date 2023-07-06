<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>

<body>

    <!-- Header -->
    <header class="header-second">
        <div class="container">
            <div class="header">
                <nav class="header__nav">
                    <!-- Logo -->
                    <div class="header__logo">
                        <a href="./">
                            <img src="<?php the_field('logo_top', 10) ?>" alt="logotype">
                        </a>
                    </div>
                    <!-- Menu -->
                    <div class="header__burger_open">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/meno.svg" alt="menu">
                    </div>

                    <div class="header-menu">
                        <div class="header-menu__inner">
                            <div class="header-menu__top">
                                <div class="header-menu__logo">
                                    <a href="./">
                                        <img src="<?php the_field('logo_menu', 10) ?>" alt="logotype">
                                    </a>
                                </div>
                                <div class="header__burger_close">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/meno-close.svg" alt="menu close">
                                </div>
                            </div>

                            <div class="header-menu__bottom">

                                <div class="wp-menu">
                                    <?php wp_nav_menu(['theme_location'  => 'primary',]); ?>
                                </div>

                                <div class="header-menu-contact">
                                    <div class="header-menu-contact__item">
                                        <a href="tel:<?php the_field('phone_call', 10) ?>"><?php the_field('phone_show', 10) ?></a>
                                    </div>
                                    <div class="header-menu-contact__item">
                                        <a href="mailto:<?php the_field('email', 10) ?>"><?php the_field('email', 10) ?></a>
                                    </div>
                                    <div class="header-menu-contact__item">
                                        <span><?php the_field('address', 10) ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>

                <!-- Contacts -->
                <div class="header__contact">
                    <a href="tel:<?php the_field('phone_call', 10) ?>"><?php the_field('phone_show', 10) ?></a>
                </div>
            </div>
        </div>
    </header>

    <!-- Main -->
    <main id="top">