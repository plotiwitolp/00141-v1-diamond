<?php get_header('second'); ?>

<div class="page-inner">
    <div class="container">
        <h1 class="page-title">
            <span class="history-back"></span>
            О компании
        </h1>
    </div>

    <!-- О компании -->
    <section>
        <div class="container">
            <div class="block">
                <div class="about-top">
                    <div class="about-top-slider">
                        <div class="about-slider__arrow-prev">
                            <span></span>
                        </div>
                        <div class="about-top-slider__inner">
                            <?php
                            $content = get_field('pictures_for_slide');
                            $filtered_content = display_images_and_alt($content);
                            echo $filtered_content;
                            ?>
                        </div>
                        <div class="about-slider__arrow-next">
                            <span></span>
                        </div>
                    </div>
                    <div class="about-top-desc">
                        <?php the_field('text_of_right_of_slide'); ?>
                    </div>
                </div>
                <div class="about-second">
                    <div class="about-second__title"><?php the_field('second_block_header');  ?></div>
                    <div class="about-second__body">
                        <?php the_field('second_block_desc');  ?>
                    </div>
                </div>
                <div class="about-third">
                    <div class="about-third__inner">
                        <div class="about-third__item">
                            <div class="about-third__item__inner">
                                <div class="about-third__item-pic">
                                    <img src="<?php the_field('block_iz_4_block_1_img'); ?>" alt="pic1">
                                </div>
                                <div class="about-third__item-desc">
                                    <div class="about-third__item-desc-title">
                                        <?php the_field('block_iz_4_block_1_title'); ?>
                                    </div>
                                    <div class="about-third__item-desc-body">
                                        <?php the_field('block_iz_4_block_1_desc'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="about-third__item">
                            <div class="about-third__item__inner">
                                <div class="about-third__item-pic">
                                    <img src="<?php the_field('block_iz_4_block_2_img'); ?>" alt="pic2">
                                </div>
                                <div class="about-third__item-desc">
                                    <div class="about-third__item-desc-title">
                                        <?php the_field('block_iz_4_block_2_title'); ?>
                                    </div>
                                    <div class="about-third__item-desc-body">
                                        <?php the_field('block_iz_4_block_2_desc'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="about-third__item">
                            <div class="about-third__item__inner">
                                <div class="about-third__item-pic">
                                    <img src="<?php the_field('block_iz_4_block_3_img'); ?>" alt="pic3">
                                </div>
                                <div class="about-third__item-desc">
                                    <div class="about-third__item-desc-title">
                                        <?php the_field('block_iz_4_block_3_title'); ?>
                                    </div>
                                    <div class="about-third__item-desc-body">
                                        <?php the_field('block_iz_4_block_3_desc'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="about-third__item">
                            <div class="about-third__item__inner">
                                <div class="about-third__item-pic">
                                    <img src="<?php the_field('block_iz_4_block_4_img'); ?>" alt="pic4">
                                </div>
                                <div class="about-third__item-desc">
                                    <div class="about-third__item-desc-title">
                                        <?php the_field('block_iz_4_block_4_title'); ?>
                                    </div>
                                    <div class="about-third__item-desc-body">
                                        <?php the_field('block_iz_4_block_4_desc'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Наша статистика -->
    <div class="about-stat">
        <div class="about-stat__img">
            <img src="<?php the_field('statistica_img'); ?>" alt="about-stat">
        </div>
        <div class="about-stat__body">
            <div class="container">
                <div class="about-stat__body-inner">
                    <div class="about-stat__title"><?php the_field('statistica_title'); ?></div>
                    <div class="about-stat-wrap">
                        <div class="about-stat-wrap__inner">
                            <div class="about-stat-wrap__item">
                                <div class="about-stat-wrap__item-text">
                                    <?php the_field('statistica_element_1_text'); ?>
                                </div>
                                <div class="about-stat-wrap__item-line">
                                </div>
                                <div class="about-stat-wrap__item-per">
                                    <?php the_field('statistica_element_1_percent'); ?>
                                </div>
                            </div>
                            <div class="about-stat-wrap__item">
                                <div class="about-stat-wrap__item-text">
                                    <?php the_field('statistica_element_2_text'); ?>
                                </div>
                                <div class="about-stat-wrap__item-line">
                                </div>
                                <div class="about-stat-wrap__item-per">
                                    <?php the_field('statistica_element_2_percent'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="about-stat-wrap__btn">
                            <a href="#feedback">
                                Узнать подробнее
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Наши клиенты -->
    <?php echo get_template_part('/templates/clients-block'); ?>

    <!-- Информация -->
    <div class="container">
        <div class="information-title">
            Информация
        </div>
        <div class="information">

            <?php
            $args = array(
                'post_type' => 'infoposts',
                'posts_per_page' => get_field('number_of_info')
            );
            $query = new WP_Query($args);
            if ($query->have_posts()) {
                while ($query->have_posts()) {
                    $query->the_post();
                    echo get_template_part('/templates/information-item-block');
                }
                wp_reset_postdata();
            } else {
                echo '';
            }
            ?>

        </div>
    </div>

    <!-- Отзывы -->
    <?php echo get_template_part('/templates/reviews-block'); ?>
    <!-- <section>
        <div class="container">
            <div class="block">
                <h1>Отзывы</h1>

                <div class="reviews-slider">
                    <div class="reviews-slider__arrow-prev">
                        <span></span>
                    </div>
                    <div class="reviews-slider__inner">
                        <div class="reviews-slider__item">
                            <div class="reviews-slider__item__inner">
                                <div class="reviews-slider__item-img-first">
                                    <img src="./assets/img/reviews/1.png" alt="#">
                                </div>
                                <div class="reviews-slider__item-img-second">
                                    <img src="./assets/img/reviews/2.png" alt="#">
                                </div>
                            </div>
                        </div>

                        <div class="reviews-slider__item">
                            <div class="reviews-slider__item__inner">
                                <div class="reviews-slider__item-img-first">
                                    <img src="./assets/img/reviews/1.png" alt="#">
                                </div>
                                <div class="reviews-slider__item-img-second">
                                    <img src="./assets/img/reviews/2.png" alt="#">
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="reviews-slider__arrow-next">
                        <span></span>
                    </div>
                </div>

            </div>
        </div>
    </section> -->

    <!-- ФОС - Хотите заказать себе? -->
    <?php echo get_template_part('/templates/feedback-block'); ?>
    <!-- <section>
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
    </section> -->
</div>

<?php get_footer(); ?>