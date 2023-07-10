<section>
    <div class="container">
        <div class="block">
            <h1>Отзывы</h1>

            <div class="reviews-slider">
                <div class="reviews-slider__arrow-prev">
                    <span></span>
                </div>
                <div class="reviews-slider__inner">
                    <?php
                    $args = array(
                        'post_type' => 'reviews',
                    );
                    $query = new WP_Query($args);
                    if ($query->have_posts()) {
                        $images = array();
                        while ($query->have_posts()) {
                            $query->the_post();
                    ?>
                            <div class="reviews-slider__item">
                                <div class="reviews-slider__item__inner">
                                    <div class="reviews-slider__item-img-first">
                                        <img src="<?php the_field('picture_left') ?>" alt="review 1">
                                    </div>
                                    <div class="reviews-slider__item-img-second">
                                        <img src="<?php the_field('picture_right') ?>" alt="review 2">
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
                <div class="reviews-slider__arrow-next">
                    <span></span>
                </div>
            </div>

        </div>
    </div>
</section>