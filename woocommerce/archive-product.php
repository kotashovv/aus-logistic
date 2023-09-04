<?php
/*
Template Name: Каталог
*/
?>
<?php echo get_header(); ?>

<main class="main">
    <div class="custom">
        <?php
        if (function_exists('dynamic_sidebar'))
            dynamic_sidebar('homepage-sidebar');
        ?>
    </div>
    <section class="catalog">
        <div class="container">
            <?php

            if (is_product_category('biore')) {

            ?>

                <div class="catalog-head">
                    <div class="catalog-head__title">
                        <img src="<?php echo get_template_directory_uri() . '/' ?>assets/imgs/brand.png" alt="">
                        <div class="text">
                            <h2>
                                Biore <button class="likeit"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" class="ui-f2">
                                        <path fill="" d="M7 5a4 4 0 0 0-4 4c0 3.552 2.218 6.296 4.621 8.22A21.525 21.525 0 0 0 12 19.91a21.58 21.58 0 0 0 4.377-2.69C18.78 15.294 21 12.551 21 9a4 4 0 0 0-4-4c-1.957 0-3.652 1.396-4.02 3.2a1 1 0 0 1-1.96 0C10.652 6.396 8.957 5 7 5Zm5 17c-.316-.02-.56-.147-.848-.278a23.542 23.542 0 0 1-4.781-2.942C3.777 16.705 1 13.449 1 9a6 6 0 0 1 6-6 6.183 6.183 0 0 1 5 2.568A6.183 6.183 0 0 1 17 3a6 6 0 0 1 6 6c0 4.448-2.78 7.705-5.375 9.78a23.599 23.599 0 0 1-4.78 2.942c-.543.249-.732.278-.845.278Z"></path>
                                    </svg></button>
                            </h2>
                            <p>
                                Средства для стирки Attack появились в 1987 году как первый массовый концентрированный...
                            </p>
                            <a href="#">
                                Узнать больше
                            </a>
                        </div>
                    </div>
                    <div class="catalog-head__banner">

                    </div>
                </div>

            <?php

            } else if (is_product_category('attack')) {

            } else if (is_product_category('laurier')) {

            } else if (is_product_category('jumbo')) {

            } else if (is_product_category('megrhythm')) {
                
            }

            ?>
            <!-- <div class="catalog-head">
                <div class="catalog-head__title">
                    <img src="<?php echo get_template_directory_uri() . '/' ?>assets/imgs/brand.png" alt="">
                    <div class="text">
                        <h2>
                            Attacks <button class="likeit"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" class="ui-f2">
                                    <path fill="" d="M7 5a4 4 0 0 0-4 4c0 3.552 2.218 6.296 4.621 8.22A21.525 21.525 0 0 0 12 19.91a21.58 21.58 0 0 0 4.377-2.69C18.78 15.294 21 12.551 21 9a4 4 0 0 0-4-4c-1.957 0-3.652 1.396-4.02 3.2a1 1 0 0 1-1.96 0C10.652 6.396 8.957 5 7 5Zm5 17c-.316-.02-.56-.147-.848-.278a23.542 23.542 0 0 1-4.781-2.942C3.777 16.705 1 13.449 1 9a6 6 0 0 1 6-6 6.183 6.183 0 0 1 5 2.568A6.183 6.183 0 0 1 17 3a6 6 0 0 1 6 6c0 4.448-2.78 7.705-5.375 9.78a23.599 23.599 0 0 1-4.78 2.942c-.543.249-.732.278-.845.278Z"></path>
                                </svg></button>
                        </h2>
                        <p>
                            Средства для стирки Attack появились в 1987 году как первый массовый концентрированный...
                        </p>
                        <a href="#">
                            Узнать больше
                        </a>
                    </div>
                </div>
                <div class="catalog-head__banner">

                </div>
            </div> -->
            <div class="catalog__wrapper">
                <div class="filter__accord">
                    <button class="filter-btn">Фильтровать
                        <img src="<?php echo get_template_directory_uri() . '/' ?>assets/imgs/icons/filter.png" alt="">
                    </button>
                </div>
                <div class="catalog__filter">
                    <?php echo do_shortcode('[woof autohide=0 autosubmit=0 ]'); ?>
                    <!-- <form action="#">
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
                            <button class="main-btn" type="submit">Применить</button>
                        </form> -->
                </div>
                <div class="catalog__body-wrap">
                    <div class="catalog__view-btns">
                        <p>Вид товаров:</p>
                        <div>
                            <button data-view="1" class="view">Плитка</button>
                            <button data-view="2" class="view">Список</button>
                        </div>
                    </div>
                    <?php
                    if (woocommerce_product_loop()) {

                        /**
                         * Hook: woocommerce_before_shop_loop.
                         *
                         * @hooked woocommerce_output_all_notices - 10
                         * @hooked woocommerce_result_count - 20
                         * @hooked woocommerce_catalog_ordering - 30
                         */
                        do_action('woocommerce_before_shop_loop');

                        woocommerce_product_loop_start();

                        if (wc_get_loop_prop('total')) {
                            while (have_posts()) {
                                the_post();

                                /**
                                 * Hook: woocommerce_shop_loop.
                                 */
                                do_action('woocommerce_shop_loop');

                                wc_get_template_part('content', 'product');
                            }
                        }

                        woocommerce_product_loop_end();

                        /**
                         * Hook: woocommerce_after_shop_loop.
                         *
                         * @hooked woocommerce_pagination - 10
                         */
                        do_action('woocommerce_after_shop_loop');
                    } else {
                        /**
                         * Hook: woocommerce_no_products_found.
                         *
                         * @hooked wc_no_products_found - 10
                         */
                        do_action('woocommerce_no_products_found');
                    }
                    ?>

                </div>
            </div>
        </div>

    </section>
    <!-- <section class="reclame">
                    <div class="container">
                        <div class="reclame__big">
                            <div class="reclame__slider reclame-one swiper">
                                <div class="swiper-button-prev"></div>
                                <div class="swiper-button-next"></div>
                                <div class="reclame__slider-list swiper-wrapper">
                                    <div class="reclame__slide swiper-slide">
                                        <a href="#">
                                            <img src="<?php echo get_template_directory_uri() . '/' ?>assets/imgs/reclame-big.png" alt="">
                                        </a>
                                    </div>
                                    <div class="reclame__slide swiper-slide">
                                        <a href="#">
                                            <img src="<?php echo get_template_directory_uri() . '/' ?>assets/imgs/reclame-big.png" alt="">
                                        </a>
                                    </div>
                                    <div class="reclame__slide swiper-slide">
                                        <a href="#">
                                            <img src="<?php echo get_template_directory_uri() . '/' ?>assets/imgs/reclame-big.png" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="reclame__long">
                            <div class="reclame-two">
                                <a href="#">
                                    <img src="<?php echo get_template_directory_uri() . '/' ?>assets/imgs/reclame-long.png" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
            </section> -->
    <!-- <div class="mcategory">
            <div class="container">
                <div class="mcategory__slider swiper">
                    <div class="mcategory__list swiper-wrapper">
                        <div class="mcategory__item swiper-slide">
                            <a href="#">
                                <img src="<?php echo get_template_directory_uri() . '/' ?>assets/imgs/mcatalog.png" alt="">
                                <span>
                                    Заголовок к изображению
                                </span>
                            </a>
                        </div>
                        <div class="mcategory__item swiper-slide">
                            <a href="#">
                                <img src="<?php echo get_template_directory_uri() . '/' ?>assets/imgs/mcatalog.png" alt="">
                                <span>
                                    Заголовок к изображению
                                </span>
                            </a>
                        </div>
                        <div class="mcategory__item swiper-slide">
                            <a href="#">
                                <img src="<?php echo get_template_directory_uri() . '/' ?>assets/imgs/mcatalog.png" alt="">
                                <span>
                                    Заголовок к изображению
                                </span>
                            </a>
                        </div>
                        <div class="mcategory__item swiper-slide">
                            <a href="#">
                                <img src="<?php echo get_template_directory_uri() . '/' ?>assets/imgs/mcatalog.png" alt="">
                                <span>
                                    Заголовок к изображению
                                </span>
                            </a>
                        </div>
                        <div class="mcategory__item swiper-slide">
                            <a href="#">
                                <img src="<?php echo get_template_directory_uri() . '/' ?>assets/imgs/mcatalog.png" alt="">
                                <span>
                                    Заголовок к изображению
                                </span>
                            </a>
                        </div>
                        <div class="mcategory__item swiper-slide">
                            <a href="#">
                                <img src="<?php echo get_template_directory_uri() . '/' ?>assets/imgs/mcatalog.png" alt="">
                                <span>
                                    Заголовок к изображению
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mcategory">
            <div class="container">
                <div class="mcategory__slider-middle swiper">
                    <div class="mcategory__list swiper-wrapper">
                        <div class="mcategory__item swiper-slide">
                            <a href="#">
                                <img src="<?php echo get_template_directory_uri() . '/' ?>assets/imgs/mcatalog.png" alt="">
                                <span>
                                    Заголовок к изображению
                                </span>
                            </a>
                        </div>
                        <div class="mcategory__item swiper-slide">
                            <a href="#">
                                <img src="<?php echo get_template_directory_uri() . '/' ?>assets/imgs/mcatalog.png" alt="">
                                <span>
                                    Заголовок к изображению
                                </span>
                            </a>
                        </div>
                        <div class="mcategory__item swiper-slide">
                            <a href="#">
                                <img src="<?php echo get_template_directory_uri() . '/' ?>assets/imgs/mcatalog.png" alt="">
                                <span>
                                    Заголовок к изображению
                                </span>
                            </a>
                        </div>
                        <div class="mcategory__item swiper-slide">
                            <a href="#">
                                <img src="<?php echo get_template_directory_uri() . '/' ?>assets/imgs/mcatalog.png" alt="">
                                <span>
                                    Заголовок к изображению
                                </span>
                            </a>
                        </div>
                        <div class="mcategory__item swiper-slide">
                            <a href="#">
                                <img src="<?php echo get_template_directory_uri() . '/' ?>assets/imgs/mcatalog.png" alt="">
                                <span>
                                    Заголовок к изображению
                                </span>
                            </a>
                        </div>
                        <div class="mcategory__item swiper-slide">
                            <a href="#">
                                <img src="<?php echo get_template_directory_uri() . '/' ?>assets/imgs/mcatalog.png" alt="">
                                <span>
                                    Заголовок к изображению
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mcategory">
            <div class="container">
                <div class="mcategory__slider-big swiper">
                    <div class="mcategory__list swiper-wrapper">
                        <div class="mcategory__item swiper-slide">
                            <a href="#">
                                <img src="<?php echo get_template_directory_uri() . '/' ?>assets/imgs/mcatalog.png" alt="">
                                <span>
                                    Заголовок к изображению
                                </span>
                            </a>
                        </div>
                        <div class="mcategory__item swiper-slide">
                            <a href="#">
                                <img src="<?php echo get_template_directory_uri() . '/' ?>assets/imgs/mcatalog.png" alt="">
                                <span>
                                    Заголовок к изображению
                                </span>
                            </a>
                        </div>
                        <div class="mcategory__item swiper-slide">
                            <a href="#">
                                <img src="<?php echo get_template_directory_uri() . '/' ?>assets/imgs/mcatalog.png" alt="">
                                <span>
                                    Заголовок к изображению
                                </span>
                            </a>
                        </div>
                        <div class="mcategory__item swiper-slide">
                            <a href="#">
                                <img src="<?php echo get_template_directory_uri() . '/' ?>assets/imgs/mcatalog.png" alt="">
                                <span>
                                    Заголовок к изображению
                                </span>
                            </a>
                        </div>
                        <div class="mcategory__item swiper-slide">
                            <a href="#">
                                <img src="<?php echo get_template_directory_uri() . '/' ?>assets/imgs/mcatalog.png" alt="">
                                <span>
                                    Заголовок к изображению
                                </span>
                            </a>
                        </div>
                        <div class="mcategory__item swiper-slide">
                            <a href="#">
                                <img src="<?php echo get_template_directory_uri() . '/' ?>assets/imgs/mcatalog.png" alt="">
                                <span>
                                    Заголовок к изображению
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
</main>
<div class="custom">
    <?php
    if (function_exists('dynamic_sidebar'))
        dynamic_sidebar('homepage-sidebar');
    ?>
</div>
<?php echo get_footer(); ?>