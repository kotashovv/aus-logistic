<?php
/*
Template Name: Страница Профиля
*/
?>
<?php echo get_header(); ?>

<main class="main">
<section class="profile">
                <div class="container">
                    <div class="profile__body">

                        <div class="profile__nav">
                           <div class="profile__nav-head">
                            <div class="profile__img">
                                <img src="<?php echo get_template_directory_uri( ).'/'?>assets/imgs/products/product1.jpg" alt="">
                                <button class="profile-img-btn"></button>
                            </div>
                            <div class="profile__name">
                                <h4>
                                    Имя Фамилия
                                </h4>
                                <a href="#">Изменить профиль</a>
                            </div>
                           </div>
                            <nav class="profile__menu">
                                <p>
                                    Главная информация
                                </p>
                                <ul>
                                    <li>
                                        <a class="active" href="#">Главная</a>
                                    </li>
                                    <li>
                                        <a  href="#">Моя корзина</a>
                                    </li>
                                    <li>
                                        <a  href="#">Мои возвраты</a>
                                    </li>
                                    <li>
                                        <a  href="#">Купленные товары</a>
                                    </li>
                                    <li>
                                        <a  href="#">Сравнение товаров</a>
                                    </li>
                                    <li>
                                        <a href="#">Настройки товаров</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="profile__content">
                            <div class="profile__row">
                                <div class="profile__row-title">
                                    <p>
                                        Мои данные
                                    </p>
                                </div>
                                <div class="profile__row-body">
                                    <div class="profile__item">
                                        <p>
                                            Баллы и бонусы
                                        </p>
                                        <div class="bonus">
                                            0 бонусов
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="profile__row">
                                <div class="profile__row-title">
                                    <p>
                                        Мои данные
                                    </p>
                                </div>
                                <div class="promocode">
                                    <p>
                                        Используйте промокод
                                    </p>
                                    <form action="#">
                                        <input type="text" placeholder="Введите промокод или сертификат">
                                        <button type="submit">Применить</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
       </main>
<?php echo get_footer(); ?>