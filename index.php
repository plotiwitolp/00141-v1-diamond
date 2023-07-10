<?php get_header('main'); ?>


<section>
    <div class="container">
        <?php the_content(); ?>
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

<?php get_footer(); ?>