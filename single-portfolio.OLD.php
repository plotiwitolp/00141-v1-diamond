<?php $page = 'p3'; ?>
<?php require_once './header-second.php'; ?>
<div class="page-inner">
    <div class="container">
        <h1 class="page-title">
            <span class="history-back"></span>
            Пример заголовка определенного портфолио
        </h1>
    </div>

    <!-- Портфолио -->

    <div class="container">
        <div class="block">
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis tempora ut modi ex harum unde atque hic libero autem perferendis doloremque itaque voluptate corrupti suscipit, saepe, non voluptatibus eos ipsum?
            </p>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis tempora ut modi ex harum unde atque hic libero autem perferendis doloremque itaque voluptate corrupti suscipit, saepe, non voluptatibus eos ipsum?
            </p>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis tempora ut modi ex harum unde atque hic libero autem perferendis doloremque itaque voluptate corrupti suscipit, saepe, non voluptatibus eos ipsum?
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

<?php require_once './footer.php'; ?>