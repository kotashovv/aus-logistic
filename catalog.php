<?php
/*
Template Name: Каталог
*/
?>
<?php echo get_header(); ?>

<main class="main">
        <section class="catalog">
            <div class="container">
                
                <div class="catalog__wrapper">
                    <div class="filter__accord">
                        <button class="filter-btn">Фильтровать 
                            <img src="<?php echo get_template_directory_uri().'/' ?>assets/imgs/icons/filter.png" alt="">
                        </button>
                    </div>
                    <div class="catalog__filter">
                        <form action="#">
                            <div class="catalog__item">
                                <div class="filter-title">
                                    <p>
                                        Категория
                                    </p>
                                </div>
                                <div class="filter__checks">
                                    <label class="check-item">
                                        <input type="checkbox" value="all" name="category">
                                        <span></span>
                                        <p>Показать все</p>
                                    </label>
                                    <label class="check-item">
                                        <input type="checkbox" value="1" name="category">
                                        <span></span>
                                        <p>Гели</p>
                                    </label>
                                    <label class="check-item">
                                        <input type="checkbox" value="2" name="category">
                                        <span></span>
                                        <p>Порошки</p>
                                    </label>
                                    <label class="check-item">
                                        <input type="checkbox" value="3" name="category">
                                        <span></span>
                                        <p>Пятновыводители</p>
                                    </label>
                                    <label class="check-item">
                                        <input type="checkbox" value="all" name="category">
                                        <span></span>
                                        <p>Деликатная стирка</p>
                                    </label>
                                </div>
                                <div class="filter-title">
                                    <p>
                                        Цена - ₽
                                    </p>
                                </div>
                                <div class="filter__slider">
                                    <div class="range-slider"></div>
                                    <div class="filter__slider-values">
                                        <input name="price-start" type="text">
                                        <input name="price-end" type="text">
                                    </div>
                                </div>
                                <div class="filter-title">
                                    <p class="with-info" title="Техническая информация">
                                        Категория
                                    </p>
                                </div>
                                <div class="filter__tab">
                                    <button>Форма выпуска</button>
                                    <div class="tabs">
                                        <label class="check-item">
                                            <input type="checkbox">
                                            <span></span>
                                            <p>Показать все</p>
                                        </label>
                                        <label class="check-item">
                                            <input type="checkbox">
                                            <span></span>
                                            <p>Показать все</p>
                                        </label>
                                        <label class="check-item">
                                            <input type="checkbox">
                                            <span></span>
                                            <p>Показать все</p>
                                        </label>
                                    </div>
                                </div>
                                <div class="filter__tab">
                                    <button>Упаковка</button>
                                    <div class="tabs">
                                        <label class="check-item">
                                            <input type="checkbox">
                                            <span></span>
                                            <p>Показать все</p>
                                        </label>
                                        <label class="check-item">
                                            <input type="checkbox">
                                            <span></span>
                                            <p>Пластиковая бутылка</p>
                                        </label>
                                        <label class="check-item">
                                            <input type="checkbox">
                                            <span></span>
                                            <p>Бумага (коробка)</p>
                                        </label>
                                    </div>
                                </div>
                                <div class="filter__end">
                                    <label class="mini-slideer">
                                        <span>
                                            Только в наличии
                                        </span>
                                        <input type="checkbox">
                                        <div class="decor">
                                            <div class="toggler-slider">
                                                <div class="toggler-knob"></div>
                                            </div>
                                        </div>
                                    </label>
                                    <label class="mini-slideer">
                                        <span>
                                            Только по акции
                                        </span>
                                        <input type="checkbox">
                                        <div class="decor">
                                            <div class="toggler-slider">
                                                <div class="toggler-knob"></div>
                                            </div>
                                        </div>
                                    </label>
                                    <label class="mini-slideer">
                                        <span>
                                            Только со скидкой
                                        </span>
                                        <input type="checkbox">
                                        <div class="decor">
                                            <div class="toggler-slider">
                                                <div class="toggler-knob"></div>
                                            </div>
                                        </div>
                                    </label>
                                    <label class="mini-slideer">
                                        <span>
                                            Только выбранный склад
                                        </span>
                                        <input type="checkbox">
                                        <div class="decor">
                                            <div class="toggler-slider">
                                                <div class="toggler-knob"></div>
                                            </div>
                                        </div>
                                    </label>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="catalog__body">
                         <a href="index.html" class="rec__item">
                             <div class="rec__img">
                                 <img src="<?php echo get_template_directory_uri().'/' ?>assets/imgs/products/product1.jpg" alt="">
                             </div>
                             <div class="old-price">
                                 <p>
                                     -15%<span>827 р</span>
                                 </p>
                             </div>
                             <div class="rec__price">
                                 <div class="offer-price">
                                     <p>432 Р</p>
                                     <span>Цена на опт</span>
                                 </div>
                                 <div class="norm-price">
                                     <span>500 Р</span>
                                     <span>Средняя цена</span>
                                 </div>
                             </div>
                             <!-- <div class="rec__tag">
                                 <span>Бестселлер</span>
                             </div> -->
                             <div class="rec__name">
                                 <h2>Attack BioEX Концентрированный универсальный стиральный порошок 0,9 кг</h2>
                             </div>
                             <!-- <div class="rec__raiting">
                                 <img src="<?php echo get_template_directory_uri().'/' ?>assets/imgs/icons/Без названия.svg" alt="">
                                 <img src="<?php echo get_template_directory_uri().'/' ?>assets/imgs/icons/Без названия.svg" alt="">
                                 <img src="<?php echo get_template_directory_uri().'/' ?>assets/imgs/icons/Без названия.svg" alt="">
                                 <img src="<?php echo get_template_directory_uri().'/' ?>assets/imgs/icons/Без названия.svg" alt="">
                                 <img src="<?php echo get_template_directory_uri().'/' ?>assets/imgs/icons/Без названия.svg" alt="">
                             </div> -->
                             <div class="rec__action">
                                 <button class="main-btn">В корзину</button>
                                 <button class="in-list">В список</button>
                             </div>
                             <div class="rec__notice">
                                 <p>Склад не выбран</p>
                             </div>
                             <div class="rec__delivery">
                                 <p>Артем - <span> 100 шт.</span></p>
                                 <p>Хабаровск - <span> 100 шт.</span></p>
                             </div>
                         </a>
                         <a href="index.html" class="rec__item">
                             <div class="rec__img">
                                 <img src="<?php echo get_template_directory_uri().'/' ?>assets/imgs/products/product1.jpg" alt="">
                             </div>
                             <div class="old-price">
                                 <p>
                                     -15%<span>827 р</span>
                                 </p>
                             </div>
                             <div class="rec__price">
                                 <div class="offer-price">
                                     <p>432 Р</p>
                                     <span>Цена на опт</span>
                                 </div>
                                 <div class="norm-price">
                                     <span>500 Р</span>
                                     <span>Средняя цена</span>
                                 </div>
                             </div>
                             <!-- <div class="rec__tag">
                                 <span>Бестселлер</span>
                             </div> -->
                             <div class="rec__name">
                                 <h2>Attack BioEX Концентрированный универсальный стиральный порошок 0,9 кг</h2>
                             </div>
                             <!-- <div class="rec__raiting">
                                 <img src="<?php echo get_template_directory_uri().'/' ?>assets/imgs/icons/Без названия.svg" alt="">
                                 <img src="<?php echo get_template_directory_uri().'/' ?>assets/imgs/icons/Без названия.svg" alt="">
                                 <img src="<?php echo get_template_directory_uri().'/' ?>assets/imgs/icons/Без названия.svg" alt="">
                                 <img src="<?php echo get_template_directory_uri().'/' ?>assets/imgs/icons/Без названия.svg" alt="">
                                 <img src="<?php echo get_template_directory_uri().'/' ?>assets/imgs/icons/Без названия.svg" alt="">
                             </div> -->
                             <div class="rec__action">
                                 <button class="main-btn">В корзину</button>
                                 <button class="in-list">В список</button>
                             </div>
                             <div class="rec__notice">
                                 <p>Склад не выбран</p>
                             </div>
                             <div class="rec__delivery">
                                 <p>Артем - <span> 100 шт.</span></p>
                                 <p>Хабаровск - <span> 100 шт.</span></p>
                             </div>
                         </a>
                         <a href="index.html" class="rec__item">
                             <div class="rec__img">
                                 <img src="<?php echo get_template_directory_uri().'/' ?>assets/imgs/products/product1.jpg" alt="">
                             </div>
                             <div class="old-price">
                                 <p>
                                     -15%<span>827 р</span>
                                 </p>
                             </div>
                             <div class="rec__price">
                                 <div class="offer-price">
                                     <p>432 Р</p>
                                     <span>Цена на опт</span>
                                 </div>
                                 <div class="norm-price">
                                     <span>500 Р</span>
                                     <span>Средняя цена</span>
                                 </div>
                             </div>
                             <!-- <div class="rec__tag">
                                 <span>Бестселлер</span>
                             </div> -->
                             <div class="rec__name">
                                 <h2>Attack BioEX Концентрированный универсальный стиральный порошок 0,9 кг</h2>
                             </div>
                             <!-- <div class="rec__raiting">
                                 <img src="<?php echo get_template_directory_uri().'/' ?>assets/imgs/icons/Без названия.svg" alt="">
                                 <img src="<?php echo get_template_directory_uri().'/' ?>assets/imgs/icons/Без названия.svg" alt="">
                                 <img src="<?php echo get_template_directory_uri().'/' ?>assets/imgs/icons/Без названия.svg" alt="">
                                 <img src="<?php echo get_template_directory_uri().'/' ?>assets/imgs/icons/Без названия.svg" alt="">
                                 <img src="<?php echo get_template_directory_uri().'/' ?>assets/imgs/icons/Без названия.svg" alt="">
                             </div> -->
                             <div class="rec__action">
                                 <button class="main-btn">В корзину</button>
                                 <button class="in-list">В список</button>
                             </div>
                             <div class="rec__notice">
                                 <p>Склад не выбран</p>
                             </div>
                             <div class="rec__delivery">
                                 <p>Артем - <span> 100 шт.</span></p>
                                 <p>Хабаровск - <span> 100 шт.</span></p>
                             </div>
                         </a>
                         <a href="index.html" class="rec__item">
                             <div class="rec__img">
                                 <img src="<?php echo get_template_directory_uri().'/' ?>assets/imgs/products/product1.jpg" alt="">
                             </div>
                             <div class="old-price">
                                 <p>
                                     -15%<span>827 р</span>
                                 </p>
                             </div>
                             <div class="rec__price">
                                 <div class="offer-price">
                                     <p>432 Р</p>
                                     <span>Цена на опт</span>
                                 </div>
                                 <div class="norm-price">
                                     <span>500 Р</span>
                                     <span>Средняя цена</span>
                                 </div>
                             </div>
                             <!-- <div class="rec__tag">
                                 <span>Бестселлер</span>
                             </div> -->
                             <div class="rec__name">
                                 <h2>Attack BioEX Концентрированный универсальный стиральный порошок 0,9 кг</h2>
                             </div>
                             <!-- <div class="rec__raiting">
                                 <img src="<?php echo get_template_directory_uri().'/' ?>assets/imgs/icons/Без названия.svg" alt="">
                                 <img src="<?php echo get_template_directory_uri().'/' ?>assets/imgs/icons/Без названия.svg" alt="">
                                 <img src="<?php echo get_template_directory_uri().'/' ?>assets/imgs/icons/Без названия.svg" alt="">
                                 <img src="<?php echo get_template_directory_uri().'/' ?>assets/imgs/icons/Без названия.svg" alt="">
                                 <img src="<?php echo get_template_directory_uri().'/' ?>assets/imgs/icons/Без названия.svg" alt="">
                             </div> -->
                             <div class="rec__action">
                                 <button class="main-btn">В корзину</button>
                                 <button class="in-list">В список</button>
                             </div>
                             <div class="rec__notice">
                                 <p>Склад не выбран</p>
                             </div>
                             <div class="rec__delivery">
                                 <p>Артем - <span> 100 шт.</span></p>
                                 <p>Хабаровск - <span> 100 шт.</span></p>
                             </div>
                         </a>
                         <a href="index.html" class="rec__item">
                             <div class="rec__img">
                                 <img src="<?php echo get_template_directory_uri().'/' ?>assets/imgs/products/product1.jpg" alt="">
                             </div>
                             <div class="old-price">
                                 <p>
                                     -15%<span>827 р</span>
                                 </p>
                             </div>
                             <div class="rec__price">
                                 <div class="offer-price">
                                     <p>432 Р</p>
                                     <span>Цена на опт</span>
                                 </div>
                                 <div class="norm-price">
                                     <span>500 Р</span>
                                     <span>Средняя цена</span>
                                 </div>
                             </div>
                             <!-- <div class="rec__tag">
                                 <span>Бестселлер</span>
                             </div> -->
                             <div class="rec__name">
                                 <h2>Attack BioEX Концентрированный универсальный стиральный порошок 0,9 кг</h2>
                             </div>
                             <!-- <div class="rec__raiting">
                                 <img src="<?php echo get_template_directory_uri().'/' ?>assets/imgs/icons/Без названия.svg" alt="">
                                 <img src="<?php echo get_template_directory_uri().'/' ?>assets/imgs/icons/Без названия.svg" alt="">
                                 <img src="<?php echo get_template_directory_uri().'/' ?>assets/imgs/icons/Без названия.svg" alt="">
                                 <img src="<?php echo get_template_directory_uri().'/' ?>assets/imgs/icons/Без названия.svg" alt="">
                                 <img src="<?php echo get_template_directory_uri().'/' ?>assets/imgs/icons/Без названия.svg" alt="">
                             </div> -->
                             <div class="rec__action">
                                 <button class="main-btn">В корзину</button>
                                 <button class="in-list">В список</button>
                             </div>
                             <div class="rec__notice">
                                 <p>Склад не выбран</p>
                             </div>
                             <div class="rec__delivery">
                                 <p>Артем - <span> 100 шт.</span></p>
                                 <p>Хабаровск - <span> 100 шт.</span></p>
                             </div>
                         </a>
                         <a href="index.html" class="rec__item">
                             <div class="rec__img">
                                 <img src="<?php echo get_template_directory_uri().'/' ?>assets/imgs/products/product1.jpg" alt="">
                             </div>
                             <div class="old-price">
                                 <p>
                                     -15%<span>827 р</span>
                                 </p>
                             </div>
                             <div class="rec__price">
                                 <div class="offer-price">
                                     <p>432 Р</p>
                                     <span>Цена на опт</span>
                                 </div>
                                 <div class="norm-price">
                                     <span>500 Р</span>
                                     <span>Средняя цена</span>
                                 </div>
                             </div>
                             <!-- <div class="rec__tag">
                                 <span>Бестселлер</span>
                             </div> -->
                             <div class="rec__name">
                                 <h2>Attack BioEX Концентрированный универсальный стиральный порошок 0,9 кг</h2>
                             </div>
                             <!-- <div class="rec__raiting">
                                 <img src="<?php echo get_template_directory_uri().'/' ?>assets/imgs/icons/Без названия.svg" alt="">
                                 <img src="<?php echo get_template_directory_uri().'/' ?>assets/imgs/icons/Без названия.svg" alt="">
                                 <img src="<?php echo get_template_directory_uri().'/' ?>assets/imgs/icons/Без названия.svg" alt="">
                                 <img src="<?php echo get_template_directory_uri().'/' ?>assets/imgs/icons/Без названия.svg" alt="">
                                 <img src="<?php echo get_template_directory_uri().'/' ?>assets/imgs/icons/Без названия.svg" alt="">
                             </div> -->
                             <div class="rec__action">
                                 <button class="main-btn">В корзину</button>
                                 <button class="in-list">В список</button>
                             </div>
                             <div class="rec__notice">
                                 <p>Склад не выбран</p>
                             </div>
                             <div class="rec__delivery">
                                 <p>Артем - <span> 100 шт.</span></p>
                                 <p>Хабаровск - <span> 100 шт.</span></p>
                             </div>
                         </a>
                         <a href="index.html" class="rec__item">
                             <div class="rec__img">
                                 <img src="<?php echo get_template_directory_uri().'/' ?>assets/imgs/products/product1.jpg" alt="">
                             </div>
                             <div class="old-price">
                                 <p>
                                     -15%<span>827 р</span>
                                 </p>
                             </div>
                             <div class="rec__price">
                                 <div class="offer-price">
                                     <p>432 Р</p>
                                     <span>Цена на опт</span>
                                 </div>
                                 <div class="norm-price">
                                     <span>500 Р</span>
                                     <span>Средняя цена</span>
                                 </div>
                             </div>
                             <!-- <div class="rec__tag">
                                 <span>Бестселлер</span>
                             </div> -->
                             <div class="rec__name">
                                 <h2>Attack BioEX Концентрированный универсальный стиральный порошок 0,9 кг</h2>
                             </div>
                             <!-- <div class="rec__raiting">
                                 <img src="<?php echo get_template_directory_uri().'/' ?>assets/imgs/icons/Без названия.svg" alt="">
                                 <img src="<?php echo get_template_directory_uri().'/' ?>assets/imgs/icons/Без названия.svg" alt="">
                                 <img src="<?php echo get_template_directory_uri().'/' ?>assets/imgs/icons/Без названия.svg" alt="">
                                 <img src="<?php echo get_template_directory_uri().'/' ?>assets/imgs/icons/Без названия.svg" alt="">
                                 <img src="<?php echo get_template_directory_uri().'/' ?>assets/imgs/icons/Без названия.svg" alt="">
                             </div> -->
                             <div class="rec__action">
                                 <button class="main-btn">В корзину</button>
                                 <button class="in-list">В список</button>
                             </div>
                             <div class="rec__notice">
                                 <p>Склад не выбран</p>
                             </div>
                             <div class="rec__delivery">
                                 <p>Артем - <span> 100 шт.</span></p>
                                 <p>Хабаровск - <span> 100 шт.</span></p>
                             </div>
                         </a>
                         <a href="index.html" class="rec__item">
                             <div class="rec__img">
                                 <img src="<?php echo get_template_directory_uri().'/' ?>assets/imgs/products/product1.jpg" alt="">
                             </div>
                             <div class="old-price">
                                 <p>
                                     -15%<span>827 р</span>
                                 </p>
                             </div>
                             <div class="rec__price">
                                 <div class="offer-price">
                                     <p>432 Р</p>
                                     <span>Цена на опт</span>
                                 </div>
                                 <div class="norm-price">
                                     <span>500 Р</span>
                                     <span>Средняя цена</span>
                                 </div>
                             </div>
                             <!-- <div class="rec__tag">
                                 <span>Бестселлер</span>
                             </div> -->
                             <div class="rec__name">
                                 <h2>Attack BioEX Концентрированный универсальный стиральный порошок 0,9 кг</h2>
                             </div>
                             <!-- <div class="rec__raiting">
                                 <img src="<?php echo get_template_directory_uri().'/' ?>assets/imgs/icons/Без названия.svg" alt="">
                                 <img src="<?php echo get_template_directory_uri().'/' ?>assets/imgs/icons/Без названия.svg" alt="">
                                 <img src="<?php echo get_template_directory_uri().'/' ?>assets/imgs/icons/Без названия.svg" alt="">
                                 <img src="<?php echo get_template_directory_uri().'/' ?>assets/imgs/icons/Без названия.svg" alt="">
                                 <img src="<?php echo get_template_directory_uri().'/' ?>assets/imgs/icons/Без названия.svg" alt="">
                             </div> -->
                             <div class="rec__action">
                                 <button class="main-btn">В корзину</button>
                                 <button class="in-list">В список</button>
                             </div>
                             <div class="rec__notice">
                                 <p>Склад не выбран</p>
                             </div>
                             <div class="rec__delivery">
                                 <p>Артем - <span> 100 шт.</span></p>
                                 <p>Хабаровск - <span> 100 шт.</span></p>
                             </div>
                         </a>
                         <a href="index.html" class="rec__item">
                             <div class="rec__img">
                                 <img src="<?php echo get_template_directory_uri().'/' ?>assets/imgs/products/product1.jpg" alt="">
                             </div>
                             <div class="old-price">
                                 <p>
                                     -15%<span>827 р</span>
                                 </p>
                             </div>
                             <div class="rec__price">
                                 <div class="offer-price">
                                     <p>432 Р</p>
                                     <span>Цена на опт</span>
                                 </div>
                                 <div class="norm-price">
                                     <span>500 Р</span>
                                     <span>Средняя цена</span>
                                 </div>
                             </div>
                             <!-- <div class="rec__tag">
                                 <span>Бестселлер</span>
                             </div> -->
                             <div class="rec__name">
                                 <h2>Attack BioEX Концентрированный универсальный стиральный порошок 0,9 кг</h2>
                             </div>
                             <!-- <div class="rec__raiting">
                                 <img src="<?php echo get_template_directory_uri().'/' ?>assets/imgs/icons/Без названия.svg" alt="">
                                 <img src="<?php echo get_template_directory_uri().'/' ?>assets/imgs/icons/Без названия.svg" alt="">
                                 <img src="<?php echo get_template_directory_uri().'/' ?>assets/imgs/icons/Без названия.svg" alt="">
                                 <img src="<?php echo get_template_directory_uri().'/' ?>assets/imgs/icons/Без названия.svg" alt="">
                                 <img src="<?php echo get_template_directory_uri().'/' ?>assets/imgs/icons/Без названия.svg" alt="">
                             </div> -->
                             <div class="rec__action">
                                 <button class="main-btn">В корзину</button>
                                 <button class="in-list">В список</button>
                             </div>
                             <div class="rec__notice">
                                 <p>Склад не выбран</p>
                             </div>
                             <div class="rec__delivery">
                                 <p>Артем - <span> 100 шт.</span></p>
                                 <p>Хабаровск - <span> 100 шт.</span></p>
                             </div>
                         </a>
                         <a href="index.html" class="rec__item">
                             <div class="rec__img">
                                 <img src="<?php echo get_template_directory_uri().'/' ?>assets/imgs/products/product1.jpg" alt="">
                             </div>
                             <div class="old-price">
                                 <p>
                                     -15%<span>827 р</span>
                                 </p>
                             </div>
                             <div class="rec__price">
                                 <div class="offer-price">
                                     <p>432 Р</p>
                                     <span>Цена на опт</span>
                                 </div>
                                 <div class="norm-price">
                                     <span>500 Р</span>
                                     <span>Средняя цена</span>
                                 </div>
                             </div>
                             <!-- <div class="rec__tag">
                                 <span>Бестселлер</span>
                             </div> -->
                             <div class="rec__name">
                                 <h2>Attack BioEX Концентрированный универсальный стиральный порошок 0,9 кг</h2>
                             </div>
                             <!-- <div class="rec__raiting">
                                 <img src="<?php echo get_template_directory_uri().'/' ?>assets/imgs/icons/Без названия.svg" alt="">
                                 <img src="<?php echo get_template_directory_uri().'/' ?>assets/imgs/icons/Без названия.svg" alt="">
                                 <img src="<?php echo get_template_directory_uri().'/' ?>assets/imgs/icons/Без названия.svg" alt="">
                                 <img src="<?php echo get_template_directory_uri().'/' ?>assets/imgs/icons/Без названия.svg" alt="">
                                 <img src="<?php echo get_template_directory_uri().'/' ?>assets/imgs/icons/Без названия.svg" alt="">
                             </div> -->
                             <div class="rec__action">
                                 <button class="main-btn">В корзину</button>
                                 <button class="in-list">В список</button>
                             </div>
                             <div class="rec__notice">
                                 <p>Склад не выбран</p>
                             </div>
                             <div class="rec__delivery">
                                 <p>Артем - <span> 100 шт.</span></p>
                                 <p>Хабаровск - <span> 100 шт.</span></p>
                             </div>
                         </a>
                         <a href="index.html" class="rec__item">
                             <div class="rec__img">
                                 <img src="<?php echo get_template_directory_uri().'/' ?>assets/imgs/products/product1.jpg" alt="">
                             </div>
                             <div class="old-price">
                                 <p>
                                     -15%<span>827 р</span>
                                 </p>
                             </div>
                             <div class="rec__price">
                                 <div class="offer-price">
                                     <p>432 Р</p>
                                     <span>Цена на опт</span>
                                 </div>
                                 <div class="norm-price">
                                     <span>500 Р</span>
                                     <span>Средняя цена</span>
                                 </div>
                             </div>
                             <!-- <div class="rec__tag">
                                 <span>Бестселлер</span>
                             </div> -->
                             <div class="rec__name">
                                 <h2>Attack BioEX Концентрированный универсальный стиральный порошок 0,9 кг</h2>
                             </div>
                             <!-- <div class="rec__raiting">
                                 <img src="<?php echo get_template_directory_uri().'/' ?>assets/imgs/icons/Без названия.svg" alt="">
                                 <img src="<?php echo get_template_directory_uri().'/' ?>assets/imgs/icons/Без названия.svg" alt="">
                                 <img src="<?php echo get_template_directory_uri().'/' ?>assets/imgs/icons/Без названия.svg" alt="">
                                 <img src="<?php echo get_template_directory_uri().'/' ?>assets/imgs/icons/Без названия.svg" alt="">
                                 <img src="<?php echo get_template_directory_uri().'/' ?>assets/imgs/icons/Без названия.svg" alt="">
                             </div> -->
                             <div class="rec__action">
                                 <button class="main-btn">В корзину</button>
                                 <button class="in-list">В список</button>
                             </div>
                             <div class="rec__notice">
                                 <p>Склад не выбран</p>
                             </div>
                             <div class="rec__delivery">
                                 <p>Артем - <span> 100 шт.</span></p>
                                 <p>Хабаровск - <span> 100 шт.</span></p>
                             </div>
                         </a>
                         <a href="index.html" class="rec__item">
                             <div class="rec__img">
                                 <img src="<?php echo get_template_directory_uri().'/' ?>assets/imgs/products/product1.jpg" alt="">
                             </div>
                             <div class="old-price">
                                 <p>
                                     -15%<span>827 р</span>
                                 </p>
                             </div>
                             <div class="rec__price">
                                 <div class="offer-price">
                                     <p>432 Р</p>
                                     <span>Цена на опт</span>
                                 </div>
                                 <div class="norm-price">
                                     <span>500 Р</span>
                                     <span>Средняя цена</span>
                                 </div>
                             </div>
                             <!-- <div class="rec__tag">
                                 <span>Бестселлер</span>
                             </div> -->
                             <div class="rec__name">
                                 <h2>Attack BioEX Концентрированный универсальный стиральный порошок 0,9 кг</h2>
                             </div>
                             <!-- <div class="rec__raiting">
                                 <img src="<?php echo get_template_directory_uri().'/' ?>assets/imgs/icons/Без названия.svg" alt="">
                                 <img src="<?php echo get_template_directory_uri().'/' ?>assets/imgs/icons/Без названия.svg" alt="">
                                 <img src="<?php echo get_template_directory_uri().'/' ?>assets/imgs/icons/Без названия.svg" alt="">
                                 <img src="<?php echo get_template_directory_uri().'/' ?>assets/imgs/icons/Без названия.svg" alt="">
                                 <img src="<?php echo get_template_directory_uri().'/' ?>assets/imgs/icons/Без названия.svg" alt="">
                             </div> -->
                             <div class="rec__action">
                                 <button class="main-btn">В корзину</button>
                                 <button class="in-list">В список</button>
                             </div>
                             <div class="rec__notice">
                                 <p>Склад не выбран</p>
                             </div>
                             <div class="rec__delivery">
                                 <p>Артем - <span> 100 шт.</span></p>
                                 <p>Хабаровск - <span> 100 шт.</span></p>
                             </div>
                         </a>
                    </div>
                </div>
            </div>
        </section>
       </main>
<?php echo get_footer(); ?>