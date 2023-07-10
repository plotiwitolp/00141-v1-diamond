<?php get_header('second'); ?>

<div class="page-inner">
    <div class="container">
        <h1 class="page-title">
            <span class="history-back"></span>
            Портфолио
        </h1>
    </div>

    <!-- Портфолио -->
    <section>
        <div class="container">
            <div class="block">
                <div class="portfolio">
                    <div class="portfolio-inner">

                        <?php
                        $args = array(
                            'post_type' => 'portfolio',
                            'posts_per_page' => get_field('number_of_portfolio')
                        );
                        $query = new WP_Query($args);
                        if ($query->have_posts()) {
                            $images = array();
                            while ($query->have_posts()) {
                                $query->the_post();
                        ?>
                                <div class="portfolio__item">
                                    <div class="diamond-thumbnail">
                                        <div class="diamond-thumbnail__img">
                                            <?php
                                            $content = get_the_content();
                                            $filtered_content = display_images_with_alt($content);
                                            echo $filtered_content;
                                            ?>
                                        </div>
                                        <div class="diamond-thumbnail__body">
                                            <div class="diamond-thumbnail__title">
                                                <?php the_title(); ?>
                                            </div>
                                            <div class="diamond-thumbnail__arrow diamond-thumbnail__arrow_prtfl">
                                                <span></span>
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


                        <!-- <div class="portfolio__item">
                            <div class="diamond-thumbnail">
                                <div class="diamond-thumbnail__img">
                                    <img src="./assets/img/10.png" alt="#">
                                </div>
                                <div class="diamond-thumbnail__body">
                                    <div class="diamond-thumbnail__title">
                                        Стенд Shetelig
                                    </div>
                                    <a href="#">
                                        <div class="diamond-thumbnail__arrow diamond-thumbnail__arrow_prtfl">
                                            <span></span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="portfolio__item">
                            <div class="diamond-thumbnail">
                                <div class="diamond-thumbnail__img">
                                    <img src="./assets/img/stands/5.png" alt="#">
                                </div>
                                <div class="diamond-thumbnail__body">
                                    <div class="diamond-thumbnail__title">
                                        Стенд ЯНАО
                                    </div>
                                    <a href="#">
                                        <div class="diamond-thumbnail__arrow diamond-thumbnail__arrow_prtfl">
                                            <span></span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="portfolio__item">
                            <div class="diamond-thumbnail">
                                <div class="diamond-thumbnail__img">
                                    <img src="./assets/img/stands/5.png" alt="#">
                                </div>
                                <div class="diamond-thumbnail__body">
                                    <div class="diamond-thumbnail__title">
                                        Стенд Shetelig
                                    </div>
                                    <a href="#">
                                        <div class="diamond-thumbnail__arrow diamond-thumbnail__arrow_prtfl">
                                            <span></span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="portfolio__item">
                            <div class="diamond-thumbnail">
                                <div class="diamond-thumbnail__img">
                                    <img src="./assets/img/10.png" alt="#">
                                </div>
                                <div class="diamond-thumbnail__body">
                                    <div class="diamond-thumbnail__title">
                                        Стенд ЯНАО
                                    </div>
                                    <a href="#">
                                        <div class="diamond-thumbnail__arrow diamond-thumbnail__arrow_prtfl">
                                            <span></span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="portfolio__item">
                            <div class="diamond-thumbnail">
                                <div class="diamond-thumbnail__img">
                                    <img src="./assets/img/stands/6.jpg" alt="#">
                                </div>
                                <div class="diamond-thumbnail__body">
                                    <div class="diamond-thumbnail__title">
                                        Cтенд ЧЭТА
                                    </div>
                                    <a href="#">
                                        <div class="diamond-thumbnail__arrow diamond-thumbnail__arrow_prtfl">
                                            <span></span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="portfolio__item">
                            <div class="diamond-thumbnail">
                                <div class="diamond-thumbnail__img">
                                    <img src="./assets/img/stands/7.jpg" alt="#">
                                </div>
                                <div class="diamond-thumbnail__body">
                                    <div class="diamond-thumbnail__title">
                                        Стенд NMTC
                                    </div>
                                    <a href="#">
                                        <div class="diamond-thumbnail__arrow diamond-thumbnail__arrow_prtfl">
                                            <span></span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="portfolio__item">
                            <div class="diamond-thumbnail">
                                <div class="diamond-thumbnail__img">
                                    <img src="./assets/img/10.png" alt="#">
                                </div>
                                <div class="diamond-thumbnail__body">
                                    <div class="diamond-thumbnail__title">
                                        Стенд Shetelig
                                    </div>
                                    <a href="#">
                                        <div class="diamond-thumbnail__arrow diamond-thumbnail__arrow_prtfl">
                                            <span></span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="portfolio__item">
                            <div class="diamond-thumbnail">
                                <div class="diamond-thumbnail__img">
                                    <img src="./assets/img/stands/5.png" alt="#">
                                </div>
                                <div class="diamond-thumbnail__body">
                                    <div class="diamond-thumbnail__title">
                                        Стенд ЯНАО
                                    </div>
                                    <a href="#">
                                        <div class="diamond-thumbnail__arrow diamond-thumbnail__arrow_prtfl">
                                            <span></span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="portfolio__item">
                            <div class="diamond-thumbnail">
                                <div class="diamond-thumbnail__img">
                                    <img src="./assets/img/stands/5.png" alt="#">
                                </div>
                                <div class="diamond-thumbnail__body">
                                    <div class="diamond-thumbnail__title">
                                        Стенд Shetelig
                                    </div>
                                    <a href="#">
                                        <div class="diamond-thumbnail__arrow diamond-thumbnail__arrow_prtfl">
                                            <span></span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="portfolio__item">
                            <div class="diamond-thumbnail">
                                <div class="diamond-thumbnail__img">
                                    <img src="./assets/img/10.png" alt="#">
                                </div>
                                <div class="diamond-thumbnail__body">
                                    <div class="diamond-thumbnail__title">
                                        Стенд ЯНАО
                                    </div>
                                    <a href="#">
                                        <div class="diamond-thumbnail__arrow diamond-thumbnail__arrow_prtfl">
                                            <span></span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="portfolio__item">
                            <div class="diamond-thumbnail">
                                <div class="diamond-thumbnail__img">
                                    <img src="./assets/img/stands/6.jpg" alt="#">
                                </div>
                                <div class="diamond-thumbnail__body">
                                    <div class="diamond-thumbnail__title">
                                        Cтенд ЧЭТА
                                    </div>
                                    <a href="#">
                                        <div class="diamond-thumbnail__arrow diamond-thumbnail__arrow_prtfl">
                                            <span></span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="portfolio__item">
                            <div class="diamond-thumbnail">
                                <div class="diamond-thumbnail__img">
                                    <img src="./assets/img/stands/7.jpg" alt="#">
                                </div>
                                <div class="diamond-thumbnail__body">
                                    <div class="diamond-thumbnail__title">
                                        Стенд NMTC
                                    </div>
                                    <a href="#">
                                        <div class="diamond-thumbnail__arrow diamond-thumbnail__arrow_prtfl">
                                            <span></span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div> -->

                    </div>
                    <div class="d-btn-more">
                        Показать больше
                    </div>
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