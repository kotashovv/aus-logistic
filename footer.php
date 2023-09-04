<?php /*
<footer class="newfooter">
    <div class="container">
        <div class="newfooter__row">
            <div class="newfooter__title newfooter__elem">
                <a href="<?php echo get_home_url(); ?>">
                    <img src="<?php echo get_template_directory_uri() . '/' ?>assets/imgs/footertitle.png" alt="" />
                </a>
            </div>

            <?php

            wp_nav_menu([
                'theme_location'  => '',
                'menu'            => 'footer-menu',
                'container'       => false,
                'menu_class'      => 'menu',
                'menu_id'         => '',
                'echo'            => true,
                'fallback_cb'     => 'wp_page_menu',
                'items_wrap'      => '%3$s',
                'depth'           => 0,
                'walker'          => '',
            ]);

            ?>
        </div>
    </div>
</footer>
*/ ?>

<footer class="foot">
    <div class="container">
        <div class="foot__body">
            <div class="foot__info">
                <div class="foot__title">
                    <a href="<?php echo get_home_url(); ?>">
                        <img src="<?php echo get_template_directory_uri() . '/'; ?>assets/imgs/icons/title.png" alt="">
                        AUSS LOGISTIC
                    </a>
                </div>
                <div class="info">
                    <p>
                        Росссия
                    </p>
                    <p>
                        г. Хабаровск
                    </p>
                    <p>
                        ул. Павловича, 13, корпус Е2, оф. 303
                    </p>
                    <p>
                        Индивидуальный предприниматель
                    </p>
                    <p>
                        Гончарова Наталья Владимировна
                    </p>
                    <a href="#">
                        +7 (914) 772-30-88
                    </a>
                    <ul class="foot_social">
                        <li>
                            <a href="#">
                                <img src="<?php echo get_template_directory_uri() . '/'; ?>assets/imgs/icons/foot_vk.png" alt="">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="<?php echo get_template_directory_uri() . '/'; ?>assets/imgs/icons/whats_foot.png" alt="">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="<?php echo get_template_directory_uri() . '/'; ?>assets/imgs/icons/yot__whats.png" alt="">
                            </a>
                        </li>
                    </ul>
                    <div class="foot__action">
                        <button class="main-btn">Заказать звонок</button>
                        <button class="quest-btn"><img src="<?php echo get_template_directory_uri() . '/'; ?>assets/imgs/icons/quest.png" alt=""></button>
                    </div>
                </div>
            </div>
            <div class="foot__nav">
                <div class="col">
                    <ul class="foot__list goods">
                        <p>
                            Каталог
                        </p>
                        <!-- <li>
                    <a href="#">Attack</a>
                    <ul>
                      <li>
                        <a href="#">
                          Гель
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          Деликатная стирка
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          Порошки
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          Пятновыводители
                        </a>
                      </li>
                    </ul>
                  </li> -->
                        <?php

                        wp_nav_menu([
                            'theme_location'  => '',
                            'menu'            => 'menu-catalog',
                            'container'       => '',
                            'container_class' => '',
                            'container_id'    => '',
                            'menu_class'      => 'menu',
                            'menu_id'         => '',
                            'echo'            => true,
                            'fallback_cb'     => 'wp_page_menu',
                            'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                            'depth'           => 0,
                            'walker'          => '',
                        ]);

                        ?>
                    </ul>
                </div>
                <div class="col">
                    <ul class="foot__list">
                        <p>
                            Клиентам
                        </p>
                        <li>
                            <a href="<?php echo get_home_url() . '/katalog'; ?>">Каталог</a>
                        </li>
                        <li>
                            <a href="#">Все бренды</a>
                        </li>
                        <li>
                            <a href="#">Стать клиентом</a>
                        </li>
                        <li>
                            <a href="#">Предложить новые товары</a>
                        </li>
                        <li>
                            <a href="#">Товары на реализацию</a>
                        </li>
                        <li>
                            <a href="#">Отсрочка платежа</a>
                        </li>
                        <li>
                            <a href="#">Заказ по телефону</a>
                        </li>
                        <li>
                            <a href="#">Заказ онлайн</a>
                        </li>
                        <li>
                            <a href="#">Дозаказ товара</a>
                        </li>
                        <li>
                            <a href="#">Возврат товара</a>
                        </li>
                        <li>
                            <a href="#">Обмен товара</a>
                        </li>
                        <li>
                            <a href="#">Помощь в подборе товара</a>
                        </li>
                        <li>
                            <a href="#">Где продается товар</a>
                        </li>
                        <li>
                            <a href="#">Где продается товар</a>
                        </li>
                        <li>
                            <a href="#">Изменение цен и условий</a>
                        </li>
                        <li>
                            <a href="#">Акции</a>
                        </li>
                        <li>
                            <a href="#">Договорр оферты</a>
                        </li>
                    </ul>
                </div>
                <div class="col">
                    <ul class="foot__list">
                        <p>
                            C нами удобно
                        </p>
                        <li>
                            <a href="#">
                                Кто мы
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Как мы работаем
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo get_home_url() . '/'; ?>marketplejsy">
                                Купить для личных целей
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo get_home_url() . '/'; ?>about/#Bussines">
                                Для бизнеса
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo get_home_url() . '/'; ?>about/#sklad">
                                Склады
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo get_home_url() . '/'; ?>about/#form">
                                Помощь
                            </a>
                        </li>
                    </ul>
                    <ul class="foot__list">
                        <p>
                            Работа в компании
                        </p>
                        <li>
                            <a href="#">
                                Вакансии
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Заполнить резюме
                            </a>
                        </li>
                    </ul>
                    <ul class="foot__list">
                        <p>
                            Сотрудникам
                        </p>
                        <li>
                            <a href="#">
                                Стандарты компании
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col">

                    <ul class="foot__list">
                        <p>
                            Бухгалтерия
                        </p>
                        <li>
                            <a href="#">
                                Запросить акт сверки
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Отправка документов
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Наши реквизиты
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="login-modal">
    <div class="login-modal__item">
        <svg class="spinner" viewBox="0 0 50 50">
            <circle class="path" cx="25" cy="25" r="20" fill="none" stroke-width="5"></circle>
        </svg>
        <div class="login-modal1 login-item">

            <button class="close-login"></button>
            <h5>
                Войти в личный кабинет
            </h5>
            <p>
                Рады видеть вас снова!
            </p>

            <form name="loginform" id="loginform" method="post" action="<?php echo wc_get_page_permalink('myaccount'); ?>">
                <label for="username">
                    <input type="email" id="username" name="username" placeholder="Ваш Email" >
                </label>
                <label for="password">
                    <input type="password" id="password" name="password" placeholder="Ваш пароль" >
                </label>
                <label class="rememberme-label" for="rememberme">
                    <input name="rememberme" type="checkbox" id="rememberme" value="forever">
                    <span>
                        Запомнить меня
                    </span>
                </label>
                <div class="action">
                    <?php wp_nonce_field( 'woocommerce-login', 'woocommerce-login-nonce' ); ?>
                    <input type="submit" name="login" class="main-btn login-btn" value="Войти">
                </div>

                <div class="variation">
                    <a href="<?php echo esc_url( wp_lostpassword_url() ); ?>"><?php esc_html_e( 'Lost your password?', 'woocommerce' ); ?></a>
                </div>
            </form>
            <p>
                Еще нет аккаунта нашего маназина?
            </p>
            <button class="register-btn">Зарегистрироваться</button>
            <div class="login-modal-notice" id="login-notice">

            </div>
        </div>
        <div class="login-modal2 login-item">
            <button class="close-login"></button>
            <h5>
                Заполните поля регистрации
            </h5>
            <p>
                Телефон нужен только при регистрации
            </p>
            <form id="registerform" action="<?php echo bloginfo('url') . '/my-account' ?>" method="post">
                <label for="reg_phone">
                    <input type="tel" id="reg_phone" name="phone" class="input" placeholder="+7(900)0000000" pattern="\+?[0-9]{1}\(?[0-9]{3}\)?[0-9]{7}"  size="25" />
                </label>
                <label for="reg_first_name">
                    <input type="text" name="first_name" id="reg_first_name" class="input" placeholder="Ваше имя" size="20" autocapitalize="off" autocomplete="given-name">
                </label>
                <label for="reg_last_name">
                    <input type="text" name="last_name" id="reg_last_name" class="input" placeholder="Ваша фамилия" size="20" autocapitalize="off" autocomplete="family-name">
                </label>
                <label for="reg_email">
                    <input type="email" name="email" id="reg_email" class="input" placeholder="Ваша почта" >
                </label>
                <label for="reg_password">
                    <input type="password" name="password" id="reg_password" class="input" placeholder="Ваш пароль" >
                </label>
                <input type="hidden" name="redirect_to" value="<?php echo get_edit_user_link(); ?>">
                <div class="action">
                    <?php wp_nonce_field( 'woocommerce-register', 'woocommerce-register-nonce' ); ?>
                    <input type="submit" name="register" class="main-btn" value="Отправить">
                </div>
            </form>
            <button class="autorize-btn">
                Авторизоваться
            </button>
        </div>
    </div>
</div>
</div>
</body>
<?php wp_footer(); ?>
</html>