<?php
/**
 * Template name: form
 */
?>

<?php get_header(); ?>

<div class="container">
    <div class="form_container">
        <form class="form" id="form">

            <div class="container_a">
                <div class="label_container">
                    <p class="text_form">Выберите тип сайта:</p>

                    <label class="label_form">
                        <input type="radio" name="type_site" value="business_card" checked>
                        <span class="active_radio"></span>
                        сайт визитка
                    </label>
                    <label class="label_form">
                        <input type="radio" name="type_site" value="shop">
                        <span class="active_radio"></span>
                        интернет магазин
                    </label>
                    <label class="label_form">
                        <input type="radio" name="type_site" value="corporate_site">
                        <span class="active_radio"></span>
                        корпоративный сайт
                    </label>
                    <label class="label_form">
                        <input type="radio" name="type_site" value="web_portal">
                        <span class="active_radio"></span>
                        веб портал
                    </label>
                    <label class="label_form">
                        <input type="radio" name="type_site" value="not_found">
                        <span class="active_radio"></span>
                        не нашел подходящего варианта
                    </label>
                    <label class="label_form">
                        <input type="radio" name="type_site" value="help">
                        <span class="active_radio"></span>
                        жду совета
                    </label>
                </div>

                <div class="label_container">
                    <p class="text_form">Тематика вашего сайта:</p>
                    <label class="label_form">
                        <textarea name="site_theme" class="textarea" ></textarea>
                    </label>
                </div>

                <div class="label_container">
                    <p class="text_form">Есть ли у вас домен, хостинг?</p>
                    <label class="label_form">
                        <input type="radio" name="hosting" value="yes_all" checked>
                        <span class="active_radio"></span>
                        предоставлю свои.
                    </label>
                    <label class="label_form">
                        <input type="radio" name="hosting" value="order_all">
                        <span class="active_radio"></span>
                        закажу обе услуги у вас.
                    </label>
                    <label class="label_form">
                        <input type="radio" name="hosting" value="help">
                        <span class="active_radio"></span>
                        я не знаю что это такое, нужна консультация.
                    </label>
                </div>

                <div class="label_container">
                    <p class="text_form">Вы физическое лицо или юридическое?</p>
                    <label class="label_form">
                        <input type="radio" name="user_entity" value="individual" checked>
                        <span class="active_radio"></span>
                        юридическое
                    </label>
                    <label class="label_form">
                        <input type="radio" name="user_entity" value="legal">
                        <span class="active_radio"></span>
                        физическое
                    </label>
                </div>

                <div class="label_container last_label">
                    <p class="text_form">У Вас есть логотип?</p>
                    <label class="label_form">
                        <input type="radio" name="logo" value="yes" checked>
                        <span class="active_radio"></span>
                        да, есть
                    </label>
                    <label class="label_form">
                        <input type="radio" name="logo" value="no">
                        <span class="active_radio"></span>
                        нету
                    </label>
                </div>
            </div>

            <div class="container_b">

                <div class="label_container">
                    <p class="text_form">Это Ваш первый сайт?</p>
                    <label class="label_form">
                        <input type="radio" name="first_site" value="yes" checked>
                        <span class="active_radio"></span>
                        да это мой первый сайт
                    </label>
                    <label class="label_form">
                        <input type="radio" name="first_site" value="no">
                        <span class="active_radio"></span>
                        у меня есть опыт в покупке сайта
                    </label>
                </div>

                <div class="label_container">
                    <p class="text_form">Какие обязательные функции должен выполнять Ваш сайт?</p>
                    <label class="label_form">
                        <input type="text" name="required_function"/>
                    </label>
                </div>

                <div class="label_container">
                    <p class="text_form">Нужна ли вам тех поддержка?</p>
                    <label class="label_form">
                        <input type="radio" name="tech_support" value="yes" checked>
                        <span class="active_radio"></span>
                        да
                    </label>
                    <label class="label_form">
                        <input type="radio" name="tech_support" value="no">
                        <span class="active_radio"></span>
                        нет
                    </label>
                </div>

                <div class="label_container">
                    <p class="text_form">К примеру Ваш сайт готов, любой новый сайт нужно рекламировать для того чтобы о
                        нем
                        узнали другие пользователи интернета. Вам нужно рекламировать ваш сайт? Где?</p>
                    <label class="label_form">
                        <input type="radio" name="advertising" value="yes" checked>
                        <span class="active_radio"></span>
                        да, я закажу рекламу у Вас
                    </label>
                    <label class="label_form">
                        <input type="radio" name="advertising" value="only_create">
                        <span class="active_radio"></span>
                        спасибо, мне нужно только создать сайт.
                    </label>
                    <label class="label_form">
                        <input type="radio" name="advertising" value="help">
                        <span class="active_radio"></span>
                        еще не определился, нужна консультация.
                    </label>
                </div>

                <div class="label_container user_container">
                    <label class="label_form name">
                        Ваше имя:
                        <input
                            type="text"
                            name="user_name"
                            required
                            pattern="[A-Za-zА-Яа-яЁё\s]+"
                            title="Введите только буквы"
                        >
                    </label>
                    <label class="label_form email">
                        Ваш e-mail:
                        <input
                            type="email"
                            name="user_email"
                            required
                            pattern="[a-z0-9._%+\-]+@[a-z0-9.\-]+\.[a-z]{2,}$"
                            title="Введите корректный email"
                        >
                    </label>
                </div>

                <div class="label_container">
                    <label class="label_form phone">
                        Ваш телефон или скайп:
                        <input
                                type="text"
                                name="user_phone"
                                required
                                pattern="(\+?\d{1,3}[\-.\s]?\(?\d{1,4}\)?[\-.\s]?\d{1,4}[\-.\s]?\d{1,4}[\-.\s]?\d{1,4})|([a-zA-Z][a-zA-Z0-9.,_\-]{5,31})"
                                title="Введите номер телефона в международном формате или Skype (6–32 символа, буквы, цифры)"
                        >
                    </label>
                </div>

                <button class="btn_form" type="submit">
                    ОТПРАВИТЬ
                </button>

            </div>

        </form>
    </div>
</div>
<?php get_footer(); ?>
