<div class="information__item">
    <div class="information__item-img">
        <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php echo get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true); ?>">
    </div>
    <div class="information__item-body">
        <div class="information__item-body-title">
            <?php the_title(); ?>
        </div>
        <div class="information__item-body-text">
            <?php the_field('short_escription'); ?>
        </div>
        <div class="information__item-body-arrow">
            <a href="<?php echo get_permalink(); ?>">
                <span></span>
            </a>
        </div>
    </div>
</div>