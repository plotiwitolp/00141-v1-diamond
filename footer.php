</main>

<!-- Footer -->
<footer>
    <div class="container">
        <div class="footer-top">
            <div class="footer__logo">
                <img src="<?php the_field('logo_footer', 10) ?>" alt="logo-footer">
            </div>
        </div>
        <div class="footer-bottom">
            <div class="footer__item">
                <div class="footer-contact">
                    <div class="footer-contact__item">
                        <a href="tel:<?php the_field('phone_call', 39) ?>">
                            <span class="footer-contact__item-icon">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/phone-3.png" alt="phone-3">
                            </span>
                            <span><?php the_field('phone_show', 39) ?></span>
                        </a>
                    </div>
                    <div class="footer-contact__item">
                        <a href="mailto:<?php the_field('email', 39) ?>">
                            <span class="footer-contact__item-icon">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/mail.png" alt="mail">
                            </span>
                            <span><?php the_field('email', 39) ?></span>
                        </a>
                    </div>
                    <div class="footer-contact__item">
                        <span class="footer-contact__item-icon">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/location.svg" alt="location">
                        </span>
                        <span><?php the_field('address', 39) ?></span>
                    </div>
                    <div class="footer-contact__item">
                        <a href="<?php the_field('vk', 39) ?>">
                            <span class="footer-contact__item-icon">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/vkontakte_icon-icons.com_61245 1.png" alt="vkontakte_icon">
                            </span>
                            <span>ВКонтакте</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="footer__item">
                <div class="wp-menu">
                    <?php wp_nav_menu(['theme_location'  => 'primary',]); ?>
                </div>
            </div>
            <div class="footer__item">
                <div class="diamond-quote-slider">
                    <div class="diamond-quote-slider__item">
                        <div class="diamond-quote">
                            <?php the_field('text_citate', 10) ?>
                        </div>
                        <a href="#top">
                            <div class="diamond-quote__arrow"><span></span></div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<div style="display: none;" class="admin-ajax-url"> <?php echo admin_url('admin-ajax.php'); ?></div>
<div style="display: none;" class="post-per-page-portfolio"> <?php echo get_field('number_of_portfolio', 33); ?></div>
<div style="display: none;" class="post-per-page-info"> <?php echo get_field('number_of_posts', 37); ?></div>
<?php wp_footer(); ?>

</body>

</html>