<?php
/*
Template Name: Корзина
*/
?>
<?php echo get_header(); ?>

        <main class="main">
        <section class="cart">
                <div class="container">
                    <div class="cart__body">
                        <div class="cart__content">
                            <div class="cart__title">
                                <h3>
                                    Корзина
                                </h3>
                            </div>
                            <div class="cart__bar">
                                <label>
                                    <button class="btn-current-all ">Выбрать все</button>
                                </label>
                                <div class="item">
                                    выборано строк: <span class="inline-count">0</span>
                                </div>
                                <div class="item">
                                    <button class="cancel-count">Отменить выбор</button>
                                </div>
                                <div class="item">
                                    <button class="open-filters-carts">Работать с фильтрами</button>
                                </div>
                                <div class="item">
                                    <button class="delete-currents">Удалить выбранные</button>
                                </div>
                            </div>
                            <div class="cart__wrap">
                                <article class="cart__item">
                                    <label class="item-check">
                                        <input type="checkbox">
                                    </label>
                                    <div style="background-image: url(<?php echo get_template_directory_uri().'/'?>assets/imgs/products/product1.jpg);" class="item-img">
                                    </div>
                                    <div class="item-info">
                                        <a href="#">
                                            Attack BioEX Концентрированный универсальный стиральный порошок 0,9 кг
                                        </a>
                                        <span class="item-weight">Количество ед.изм. в упаковке - 10 шт.</span>
                                        <span class="item-article">Код товара: 548511964</span>
                                    </div>
                                    <div class="item-price">
                                        <p>
                                            1 229 ₽
                                        </p>
                                        <span class="bad-price">827 ₽ - средняя в рознице</span>
                                    </div>
                                    <div class="item_have">
                                        <span>
                                            Артем - 100 шт.
                                        </span>
                                        <span>
                                            Хабаровск - 100 шт.
                                        </span>
                                    </div>
                                    <div class="item-count">
                                        <input type="number" value="1">
                                        <div class="item-final">
                                            Итого: 33 231 ₽ 
                                        </div>
                                        <div class="item-skolko">
                                            Упаковок: 5 шт
                                            и еще 3 шт.
                                        </div>
                                    </div>
                                    <div class="item-delete">
                                        <button class="delete-item">
                                            <img src="<?php echo get_template_directory_uri().'/'?>assets/imgs/icons/trash.svg" alt="">
                                        </button>
                                    </div>
                                </article>
                                <article class="cart__item">
                                    <label class="item-check">
                                        <input type="checkbox">
                                    </label>
                                    <div style="background-image: url(<?php echo get_template_directory_uri().'/'?>assets/imgs/products/product1.jpg);" class="item-img">
                                    </div>
                                    <div class="item-info">
                                        <a href="#">
                                            Attack BioEX Концентрированный универсальный стиральный порошок 0,9 кг
                                        </a>
                                        <span class="item-weight">Количество ед.изм. в упаковке - 10 шт.</span>
                                        <span class="item-article">Код товара: 548511964</span>
                                    </div>
                                    <div class="item-price">
                                        <p>
                                            1 229 ₽
                                        </p>
                                        <span class="bad-price">827 ₽ - средняя в рознице</span>
                                    </div>
                                    <div class="item_have">
                                        <span>
                                            Артем - 100 шт.
                                        </span>
                                        <span>
                                            Хабаровск - 100 шт.
                                        </span>
                                    </div>
                                    <div class="item-count">
                                        <input type="number" value="1">
                                        <div class="item-final">
                                            Итого: 33 231 ₽ 
                                        </div>
                                        <div class="item-skolko">
                                            Упаковок: 5 шт
                                            и еще 3 шт.
                                        </div>
                                    </div>
                                    <div class="item-delete">
                                        <button class="delete-item">
                                            <img src="<?php echo get_template_directory_uri().'/'?>assets/imgs/icons/trash.svg" alt="">
                                        </button>
                                    </div>
                                </article>
                                <article class="cart__item">
                                    <label class="item-check">
                                        <input type="checkbox">
                                    </label>
                                    <div style="background-image: url(<?php echo get_template_directory_uri().'/'?>assets/imgs/products/product1.jpg);" class="item-img">
                                    </div>
                                    <div class="item-info">
                                        <a href="#">
                                            Attack BioEX Концентрированный универсальный стиральный порошок 0,9 кг
                                        </a>
                                        <span class="item-weight">Количество ед.изм. в упаковке - 10 шт.</span>
                                        <span class="item-article">Код товара: 548511964</span>
                                    </div>
                                    <div class="item-price">
                                        <p>
                                            1 229 ₽
                                        </p>
                                        <span class="bad-price">827 ₽ - средняя в рознице</span>
                                    </div>
                                    <div class="item_have">
                                        <span>
                                            Артем - 100 шт.
                                        </span>
                                        <span>
                                            Хабаровск - 100 шт.
                                        </span>
                                    </div>
                                    <div class="item-count">
                                        <input type="number" value="1">
                                        <div class="item-final">
                                            Итого: 33 231 ₽ 
                                        </div>
                                        <div class="item-skolko">
                                            Упаковок: 5 шт
                                            и еще 3 шт.
                                        </div>
                                    </div>
                                    <div class="item-delete">
                                        <button class="delete-item">
                                            <img src="<?php echo get_template_directory_uri().'/'?>assets/imgs/icons/trash.svg" alt="">
                                        </button>
                                    </div>
                                </article>
                                <article class="cart__item">
                                    <label class="item-check">
                                        <input type="checkbox">
                                    </label>
                                    <div style="background-image: url(<?php echo get_template_directory_uri().'/'?>assets/imgs/products/product1.jpg);" class="item-img">
                                    </div>
                                    <div class="item-info">
                                        <a href="#">
                                            Attack BioEX Концентрированный универсальный стиральный порошок 0,9 кг
                                        </a>
                                        <span class="item-weight">Количество ед.изм. в упаковке - 10 шт.</span>
                                        <span class="item-article">Код товара: 548511964</span>
                                    </div>
                                    <div class="item-price">
                                        <p>
                                            1 229 ₽
                                        </p>
                                        <span class="bad-price">827 ₽ - средняя в рознице</span>
                                    </div>
                                    <div class="item_have">
                                        <span>
                                            Артем - 100 шт.
                                        </span>
                                        <span>
                                            Хабаровск - 100 шт.
                                        </span>
                                    </div>
                                    <div class="item-count">
                                        <input type="number" value="1">
                                        <div class="item-final">
                                            Итого: 33 231 ₽ 
                                        </div>
                                        <div class="item-skolko">
                                            Упаковок: 5 шт
                                            и еще 3 шт.
                                        </div>
                                    </div>
                                    <div class="item-delete">
                                        <button class="delete-item">
                                            <img src="<?php echo get_template_directory_uri().'/'?>assets/imgs/icons/trash.svg" alt="">
                                        </button>
                                    </div>
                                </article>
                               
                            </div>
                        </div>
                        <div class="cart__output">
                            <div class="total-cart">
                                <div class="item">
                                    <span>Итого</span>
                                    <span>956 589 ₽</span>
                                </div>
                                <div class="item">
                                    <span>Наименований товара
                                    </span>
                                    <span>59 шт.
                                    </span>
                                </div>
                                <div class="item">
                                    <span>Количество товара
                                    </span>
                                    <span>659 шт.
                                    </span>
                                </div>
                                <div class="item">
                                    <span>Общий вес
                                    </span>
                                    <span>546 кг.
                                    </span>
                                </div>
                                <div class="item">
                                    <span>Общий объем
                                    </span>
                                    <span>35 м.куб.
                                    </span>
                                </div>
                            </div>
                            <div class="sklad">
                                <p>
                                    Информация об отгрузке 
                                </p>
                                <div class="item">
                                    <div class="img">
                                        <img src="<?php echo get_template_directory_uri().'/'?>assets/imgs/icons/nocurrent.png" alt="">
                                    </div>
                                    <button class="go-list-sklad">
                                        Склад не выбран
                                    </button>
                                </div>
                                <span>
                                    Укажите склад, чтобы продолжить оформмление заказа
                                    <span title=" lorem lorem lorem ">i</span>
                                </span>
                            </div>
                            <button class="main-btn">Продолжить оформление</button>
                            <div class="questions">
                                <div class="questions__title">
                                    <p>
                                        Вопросы и ответы по делу
                                    </p>
                                </div>
                                <div class="items">
                                    <a href="#">Способы и условия доставки</a>
                                    <a href="#">Способы оплаты</a>
                                    <a href="#">Задать свой вопрос</a>
                                    <a href="#">Если не могу собрать товар с одного склада</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    <?php echo get_footer(); ?>