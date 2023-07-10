<?php get_header('second'); ?>

<div class="page-inner">
    <div class="container">
        <h1 class="page-title">
            <span class="history-back"></span>
            Наши услуги
        </h1>
    </div>

    <section class="services-wrap">
        <div class="container">
            <div class="block">
                <div class="services">
                    <?php
                    $args = array(
                        'post_type' => 'services',
                        'posts_per_page' => '-1'
                    );
                    $query = new WP_Query($args);
                    if ($query->have_posts()) {
                        while ($query->have_posts()) {
                            $query->the_post();
                    ?>
                            <div class="services__item">
                                <div class="diamond-thumbnail">
                                    <div class="diamond-thumbnail__img">
                                        <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php echo get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true); ?>">
                                    </div>
                                    <div class="diamond-thumbnail__body">
                                        <div class="diamond-thumbnail__title">
                                            <?php the_title(); ?>
                                        </div>
                                        <div class="diamond-thumbnail__text">
                                            <?php the_field('short_escription'); ?>
                                        </div>
                                        <div class="diamond-thumbnail__arrow">
                                            <a href="<?php echo get_permalink(); ?>">
                                                <span></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    <?php
                        }
                        wp_reset_postdata();
                    } else {
                        echo '';
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>

    <!-- ФОС - Хотите заказать себе? -->
    <section>
        <div class="feedback" id="feedback">
            <div class="container">
                <div class="block">
                    <h1>Хотите заказать себе?</h1>
                    <div class="feedback-form">
                        <div class="feedback-form__info">
                            Оставь свою заявку прямо сейчас:
                        </div>
                        <form action="">

                            <div class="feedback-form___top">
                                <input type="text" placeholder="Ваше имя">
                                <input type="text" placeholder="Ваш телефон">
                                <input type="text" placeholder="Ваша компания">
                            </div>
                            <div class="feedback-form___bottom">
                                <textarea placeholder="Сообщение"></textarea>
                                <input type="file" name="fileInput" id="fileInput">
                                <input class="diamond-btn" type="submit" value="Отправить">
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?php get_footer(); ?>