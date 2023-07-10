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
                                echo get_template_part('/templates/portfolio-item-block');
                            }
                            wp_reset_postdata();
                        } else {
                            echo '';
                        }
                        ?>

                    </div>
                    <div class="d-btn-more">
                        <a href="#" data-page="2">Показать больше</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ФОС - Хотите заказать себе? -->
    <?php echo get_template_part('/templates/feedback-block'); ?>

</div>

<?php get_footer(); ?>