<?php get_header('second'); ?>

<div class="page-inner conacts-page">
    <div class="container">
        <h1 class="page-title">
            <span class="history-back"></span>
            Контакты
        </h1>
    </div>

    <!-- ФОС - форма обратной связи -->
    <section>
        <div class="feedback" id="feedback">
            <div class="container">
                <div class="block">
                    <h1>форма обратной связи</h1>

                    <div class="contacts-wrapper">
                        <div class="feedback-form">
                            <?php echo get_template_part('/templates/feedback-form-block'); ?>
                        </div>

                        <div class="footer-contact">
                            <div class="footer-contact__item">
                                <a href="tel:<?php the_field('phone_call', 39) ?>">
                                    <span class="footer-contact__item-icon">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/contacts/phone.png" alt="phone">
                                    </span>
                                    <span><?php the_field('phone_show', 39) ?></span>
                                </a>
                            </div>
                            <div class="footer-contact__item">
                                <a href="mailto:<?php the_field('email', 39) ?>">
                                    <span class="footer-contact__item-icon">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/contacts/envelope-alt.png" alt="mail">
                                    </span>
                                    <span><?php the_field('email', 39) ?></span>
                                </a>
                            </div>
                            <div class="footer-contact__item">
                                <span class="footer-contact__item-icon">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/contacts/location.png" alt="location">
                                </span>
                                <span><?php the_field('address', 39) ?></span>
                            </div>
                            <div class="footer-contact__item">
                                <a href="<?php the_field('vk', 39) ?>">
                                    <span class="footer-contact__item-icon">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/contacts/vkontakte_icon-icons.com_61245 1.png" alt="vkontakte_icon">
                                    </span>
                                    <span>ВКонтакте</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>

<?php get_footer(); ?>