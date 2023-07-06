<?php get_header('second'); ?>

<div class="page-inner conacts-page">
    <div class="container">
        <h1 class="page-title">
            <span class="history-back"></span>
            Контакты
        </h1>
    </div>

    <!-- ФОС - форма обратной связи -->
    <section>
        <div class="feedback" id="feedback">
            <div class="container">
                <div class="block">
                    <h1>форма обратной связи</h1>

                    <div class="contacts-wrapper">
                        <div class="feedback-form">
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


                        <div class="footer-contact">
                            <div class="footer-contact__item">
                                <a href="tel:+74994992373">
                                    <span class="footer-contact__item-icon">
                                        <img src="./assets/img/contacts/phone.png" alt="phone">
                                    </span>
                                    <span>+7 (499) 499-23-73</span>
                                </a>
                            </div>
                            <div class="footer-contact__item">
                                <a href="mailto:info@diamond-expo.ru">
                                    <span class="footer-contact__item-icon">
                                        <img src="./assets/img/contacts/envelope-alt.png" alt="mail">
                                    </span>
                                    <span>info@diamond-expo.ru</span>
                                </a>
                            </div>
                            <div class="footer-contact__item">
                                <span class="footer-contact__item-icon">
                                    <img src="./assets/img/contacts/location.png" alt="location">
                                </span>
                                <span>ул. Свободы, 35, стр. 8, Москва</span>
                            </div>
                            <div class="footer-contact__item">
                                <a href="#">
                                    <span class="footer-contact__item-icon">
                                        <img src="./assets/img/contacts/vkontakte_icon-icons.com_61245 1.png" alt="vkontakte_icon">
                                    </span>
                                    <span>ВКонтакте</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>

<?php get_footer(); ?>