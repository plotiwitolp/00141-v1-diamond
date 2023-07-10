<?php get_header('second'); ?>

<div class="page-inner">
    <div class="container">
        <h1 class="page-title services_title">
            <span class="history-back"></span>
            <?php the_title(); ?>
        </h1>
    </div>

    <div class="container">
        <div class="block">
            <?php the_content(); ?>
        </div>
    </div>

    <!-- ФОС - Хотите заказать себе? -->
    <?php echo get_template_part('/templates/feedback-block'); ?>

</div>

<?php get_footer(); ?>