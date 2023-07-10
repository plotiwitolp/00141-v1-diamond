<?php get_header('main'); ?>


<section class="m140">
    <div class="container">
        <?php the_content(); ?>
    </div>
</section>


<!-- ФОС - Хотите заказать себе? -->
<?php echo get_template_part('/templates/feedback-block'); ?>

<?php get_footer(); ?>