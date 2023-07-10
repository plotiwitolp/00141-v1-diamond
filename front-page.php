<?php get_header('main'); ?>

<!-- Топ -->
<section>
    <div class="top-slider swiper">
        <div class="top-slider__inner swiper-wrapper">
            <?php
            $args = array(
                'post_type' => 'topslider',
            );
            $query = new WP_Query($args);
            if ($query->have_posts()) {
                while ($query->have_posts()) {
                    $query->the_post();
            ?>
                    <div class="top-slider__item swiper-slide animation">
                        <div class="container">
                            <div class="top-slider__item-inner">
                                <div class="top-slider__item-title">
                                    <h1><?php the_title(); ?></h1>
                                </div>
                                <div class="top-slider__item-desc">
                                    <?php the_field('description_head_heading'); ?>
                                </div>
                                <div class="top-slider__item-order">
                                    <div class="diamond-btn">
                                        <a href="#feedback">
                                            Заказать обратный звонок
                                        </a>
                                    </div>
                                </div>
                                <div class="top-slider__item-quote diamond-quote">
                                    <?php the_field('description_pod_key'); ?>
                                </div>
                                <div class="top-slider__item-bright"></div>
                            </div>
                        </div>
                        <div class="top-slider__item-img">
                            <img src="<?php the_field('image_slide'); ?>" alt="image slide">
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
        <div class="swiper-pagination"></div>
    </div>
</section>

<!-- Услуги -->
<section class="services-wrap">
    <div class="container">
        <div class="block">
            <h1>Наши услуги</h1>

            <div class="services">
                <?php
                $args = array(
                    'post_type' => 'services',
                    'posts_per_page' => get_field('number_of_service')
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
            <div class="diamond-more">
                <a href="<?php echo esc_url(home_url('/uslugi')); ?>">все услуги<span></span></a>
            </div>
        </div>
    </div>
</section>

<!-- Портфолио -->
<section>
    <div class="container">
        <div class="block">
            <h1>Портфолио</h1>
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
                </div>
                <div class="diamond-more">
                    <a href="<?php echo esc_url(home_url('/portfolios')); ?>">смотреть все проекты<span></span></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ -->
<section>
    <div class="block">
        <div class="block-faq">
            <div class="block-faq__img">
                <img src="<?php the_field('img_faq') ?>" alt="FAQ">
            </div>
            <div class="block-faq__body">
                <div class="container">
                    <div class="block-faq__body-inner">
                        <div class="block-faq__title"><?php the_field('title_faq') ?></div>
                        <div class="diamond-accordion">
                            <?php
                            $args = array(
                                'post_type' => 'faq',
                            );
                            $query = new WP_Query($args);
                            if ($query->have_posts()) {
                                $images = array();
                                while ($query->have_posts()) {
                                    $query->the_post();
                            ?>
                                    <div class="diamond-accordion__item">
                                        <div class="diamond-accordion__item-label">
                                            <span><?php the_title(); ?></span>
                                            <span class="diamond-accordion__chevrone diamond-accordion__chevrone-down"></span>
                                        </div>
                                        <div class="diamond-accordion__item-text">
                                            <?php the_content(); ?>
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
            </div>
        </div>
    </div>
</section>

<!-- Наши клиенты -->
<?php echo get_template_part('/templates/clients-block'); ?>

<!-- Отзывы -->
<?php echo get_template_part('/templates/reviews-block'); ?>

<!-- ФОС - Хотите заказать себе? -->
<?php echo get_template_part('/templates/feedback-block'); ?>

<?php get_footer(); ?>