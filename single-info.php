<?php get_header('second'); ?>

<div class="page-inner">
    <div class="container">
        <h1 class="page-title services_title">
            <span class="history-back"></span>
            Пример заголовка определенной информации
        </h1>
    </div>

    <div class="container">
        <div class="block">
            <p>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. In magni hic neque quae soluta sapiente temporibus similique? Vero officiis voluptate esse magni, illum fugiat repudiandae rerum, ullam deserunt, repellat perspiciatis.
            </p>

            <p>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. In magni hic neque quae soluta sapiente temporibus similique? Vero officiis voluptate esse magni, illum fugiat repudiandae rerum, ullam deserunt, repellat perspiciatis.
            </p>

            <p>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. In magni hic neque quae soluta sapiente temporibus similique? Vero officiis voluptate esse magni, illum fugiat repudiandae rerum, ullam deserunt, repellat perspiciatis.
            </p>
        </div>
    </div>

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
</div>

<?php get_footer(); ?>