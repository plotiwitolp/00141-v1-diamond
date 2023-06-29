<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diamond Group</title>
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/libs/slick/slick.css">
    <link rel="shortcut icon" href="./assets/img/favicon.png" type="image/x-icon">
    <?php wp_head(); ?>
</head>

<body>

    <!-- Header -->
    <header>
        <div class="container">
            <div class="header">
                <nav class="header__nav">

                    <!-- Logo -->
                    <div class="header__logo">
                        <a href="./">
                            <img src="./assets/img/logo-white.svg" alt="logotype">
                        </a>
                    </div>

                    <!-- Menu -->
                    <div class="header__burger_open">
                        <img src="./assets/img/meno.svg" alt="menu">
                    </div>

                    <div class="header-menu">
                        <div class="header-menu__inner">
                            <div class="header-menu__top">
                                <div class="header-menu__logo">
                                    <a href="./">
                                        <img src="./assets/img/logo-white2.png" alt="logotype">
                                    </a>
                                </div>
                                <div class="header__burger_close">
                                    <img src="./assets/img/meno-close.svg" alt="menu close">
                                </div>
                            </div>

                            <div class="header-menu__bottom">
                                <div class="wp-menu">
                                    <ul>
                                        <li <?= $page == 'p1' ? 'class="wp-menu__item_active"' : '' ?>><a href="./">Главная</a></li>
                                        <li <?= $page == 'p2' ? 'class="wp-menu__item_active"' : '' ?>><a href="./page-services.php">Услуги</a></li>
                                        <li <?= $page == 'p3' ? 'class="wp-menu__item_active"' : '' ?>><a href="./page-portfolio.php">Портфолио</a></li>
                                        <li <?= $page == 'p4' ? 'class="wp-menu__item_active"' : '' ?>><a href="./page-about.php">О компании</a></li>
                                        <li <?= $page == 'p5' ? 'class="wp-menu__item_active"' : '' ?>><a href="./page-info.php">Информация</a></li>
                                        <li <?= $page == 'p6' ? 'class="wp-menu__item_active"' : '' ?>><a href="./page-contacts.php">Контакты</a></li>
                                    </ul>
                                </div>
                                <div class="header-menu-contact">
                                    <div class="header-menu-contact__item">
                                        <a href="tel:+74994992373">+7 (499) 499-23-73</a>
                                    </div>
                                    <div class="header-menu-contact__item">
                                        <a href="mailto:info@diamond-expo.ru">info@diamond-expo.ru</a>
                                    </div>
                                    <div class="header-menu-contact__item">
                                        <span>ул. Свободы, 35, стр. 8, Москва</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>

                <!-- Contacts -->
                <div class="header__contact">
                    <a href="tel:+74994992373">+7 (499) 499-23-73</a>
                </div>
            </div>
        </div>
    </header>

    <!-- Main -->
    <main id="top">