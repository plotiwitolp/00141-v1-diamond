<?php get_header('second'); ?>

<div class="page-inner information-page">
    <div class="container">
        <h1 class="page-title">
            <span class="history-back"></span>
            Информация
        </h1>
    </div>

    <!-- Информация -->
    <section>
        <div class="container">
            <div class="information">

                <?php
                $args = array(
                    'post_type' => 'infoposts',
                    'posts_per_page' => get_field('number_of_posts')
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

            <div class="d-btn-more">
                <a href="#" data-page="2">Показать больше</a>
            </div>
        </div>
    </section>

    <!-- ФОС - Хотите заказать себе? -->
    <?php echo get_template_part('/templates/feedback-block'); ?>

</div>

<?php get_footer(); ?>