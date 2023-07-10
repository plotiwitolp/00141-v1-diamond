<section>
    <div class="container">
        <div class="block">
            <h1>Наши клиенты</h1>
            <div class="client-slider">
                <div class="client-slider__arrow-prev">
                    <span></span>
                </div>
                <div class="client-slider__inner">
                    <?php
                    $args = array(
                        'post_type' => 'clients',
                    );
                    $query = new WP_Query($args);
                    if ($query->have_posts()) {
                        $images = array();
                        while ($query->have_posts()) {
                            $query->the_post();
                    ?>
                            <div class="client-slide__item">
                                <img src="<?php the_field('client_picture') ?>" alt="client">
                            </div>
                    <?php
                        }
                        wp_reset_postdata();
                    } else {
                        echo '';
                    }
                    ?>
                </div>
                <div class="client-slider__arrow-next">
                    <span></span>
                </div>
            </div>
        </div>
    </div>
</section>