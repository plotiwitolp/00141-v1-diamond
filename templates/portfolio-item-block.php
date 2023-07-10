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