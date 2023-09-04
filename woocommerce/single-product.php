<?php
/*
Template Name: Продукт
*/

the_post();
global $product;

$warehouse    = auss_get_warehouse();
$warehouse_id = auss_get_warehouse_id();

?>
<?php echo get_header(); ?>
<div class="custom">
    <?php
    if (function_exists('dynamic_sidebar')) {
        dynamic_sidebar('homepage-sidebar');
    }
    ?>
</div>
<main class="main">
    <div class="content">
        <section class="single-product">
            <div class="container">
                <div class="single-product__title">
                    <h1>
                        <?php echo $product->get_title(); ?>
                    </h1>
                    <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
                        <?php if (function_exists('bcn_display')) {
                            bcn_display();
                        } ?>
                    </div>
                    <div class="single-product__header">
                        <div class="tags">
                            <span>
                                Хит продаж
                            </span>
                            <span>
                                Акция
                            </span>
                        </div>
                    </div>
                </div>
                <div class="single-product__wrap">
                    <?php $post_thumbnail_id = $product->get_image_id(); ?>
                    <div class="product-content">
                        <div class="single-product__page">
                            <div class="single-product__body">
                                <div class="single-product__body-wrap">
                                    <div class="single-product__img">
                                        <div class="single-product__mini-slider swiper">
                                            <div class="single-product__mini-slider-wrap swiper-wrapper">
                                                <article class="single-product__minislider-slide swiper-slide">
                                                    <img src="<?php echo wp_get_attachment_url($post_thumbnail_id); ?>" alt="">
                                                </article>
                                            </div>
                                        </div>
                                        <div class="single-product__slider swiper">
                                            <div class="single-product__slider-wrap swiper-wrapper">
                                                <article class="single-product__slider-slide swiper-slide">
                                                    <img src="<?php echo wp_get_attachment_url($post_thumbnail_id); ?>" alt="">
                                                </article>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="single-product__chars">
                                        <div class="for-action">
                                        </div>
                                        <ul>

                                            <!-- вес товара -->
                                            <?php
                                            if (!$product->get_attribute('ves') == null) {
                                            ?>
                                                <li>
                                                    <span>
                                                        Вес товара
                                                    </span>
                                                    <span>
                                                        <?php
                                                        echo $product->get_attribute('ves') . ' кг';
                                                        ?>
                                                    </span>
                                                </li>
                                            <?php
                                            }
                                            ?>

                                            <!-- Форма упаковки -->
                                            <?php
                                            if (!$product->get_attribute('forma-upakovki') == null) {
                                            ?>
                                                <li>
                                                    <span>
                                                        Упаковка
                                                    </span>
                                                    <span>
                                                        <?php
                                                        echo $product->get_attribute('forma-upakovki');
                                                        ?>
                                                    </span>
                                                </li>
                                            <?php
                                            }
                                            ?>

                                            <!--  Тип упаковки -->
                                            <?php
                                            if (!$product->get_attribute('tip-upakovki') == null) {
                                            ?>
                                                <li>
                                                    <span>
                                                        Тип упаковки
                                                    </span>
                                                    <span>
                                                        <?php
                                                        echo $product->get_attribute('tip-upakovki');
                                                        ?>
                                                    </span>
                                                </li>
                                            <?php
                                            }
                                            ?>

                                            <!--  Объем -->
                                            <?php
                                            if (!$product->get_attribute('obem') == null) {
                                            ?>
                                                <li>
                                                    <span>
                                                        Объем
                                                    </span>
                                                    <span>
                                                        <?php
                                                        echo $product->get_attribute('obem') . 'л.';
                                                        ?>
                                                    </span>
                                                </li>
                                            <?php
                                            }
                                            ?>

                                            <!--  Тип -->
                                            <?php
                                            if (!$product->get_attribute('tip') == null) {
                                            ?>
                                                <li>
                                                    <span>
                                                        Тип
                                                    </span>
                                                    <span>
                                                        <?php
                                                        echo $product->get_attribute('tip') . 'л.';
                                                        ?>
                                                    </span>
                                                </li>
                                            <?php
                                            }
                                            ?>

                                            <!--    Форма выпуска -->
                                            <?php
                                            if (!$product->get_attribute('forma-upakovki') == null) {
                                            ?>
                                                <li>
                                                    <span>
                                                        Форма выпуска
                                                    </span>
                                                    <span>
                                                        <?php
                                                        echo $product->get_attribute('forma-upakovki');
                                                        ?>
                                                    </span>
                                                </li>
                                            <?php
                                            }
                                            ?>


                                            <!--  Бренд-серия -->
                                            <?php
                                            if (!$product->get_attribute('izgotovitel') == null) {
                                            ?>
                                                <li>
                                                    <span>
                                                        Бренд-серия
                                                    </span>
                                                    <span>
                                                        <?php
                                                        echo $product->get_attribute('izgotovitel');
                                                        ?>
                                                    </span>
                                                </li>
                                            <?php
                                            }
                                            ?>
                                            <!--  Бренд -->
                                            <?php
                                            if (!$product->get_attribute('etot-zhe-tovar-v-drugih-va') == null) {
                                            ?>
                                                <li>
                                                    <span>
                                                        Бренд
                                                    </span>
                                                    <span>
                                                        <?php
                                                        echo $product->get_attribute('etot-zhe-tovar-v-drugih-va');
                                                        ?>
                                                    </span>
                                                </li>
                                            <?php
                                            }
                                            ?>


                                            <a href="#characters">Все характеристики</a>
                                            <!-- <a href="#">Все товары в этой группе</a> -->
                                        </ul>

                                    </div>
                                </div>
                                <div class="product__bar">
                                    <div class="item">
                                        <a class="company-link" href="#">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/attack.png" alt="">
                                            <div class="wrap">
                                                <?php
                                                $id_page    = get_the_ID();
                                                $ancestors  = get_ancestors($id_page, 'category');
                                                $top_cat_id = array_pop($ancestors);
                                                echo get_cat_name($top_cat_id);
                                                ?>
                                                <p>
                                                    Attack from JP <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/icons/i.png" alt="">
                                                </p>
                                                <span>Средства из Я понии</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="item">
                                        <div class="raiting">
                                            <div class="rate">
                                                <div class="wrap">
                                                    <?php
                                                    if (!$product->get_attribute('srednij-rejting-tovara-na') == null) {
                                                    ?>
                                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/icons/star.png" alt="">
                                                        <span>
                                                            <?php echo $product->get_attribute('srednij-rejting-tovara-na') . ' из 5'; ?>
                                                        </span>
                                                    <?php
                                                    } else {
                                                    ?>
                                                        <span>Без оценки</span>
                                                    <?php
                                                    }

                                                    ?>

                                                </div>
                                                <p>
                                                    Средний рейтинг товара на маркетплейсах
                                                </p>
                                            </div>
                                            <div class="detail">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/icons/place.png" alt="">
                                                <p>
                                                    Работаем на всей территории РФ
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="detail">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/icons/map.png" alt="">
                                            <p>
                                                Склады
                                            </p>
                                        </div>
                                        <div class="detail">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/icons/car.png" alt="">
                                            <p>
                                                Доставка и самовывоз
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="characters" class="single-bio">
                            <div id="character-product" class="single-bio__title">
                                <h3>
                                    Характеристики
                                </h3>
                                <a href="#bio-single">Описание</a>
                            </div>
                            <div class="single-bio__list">
                                <ul class="for-good">
                                    <p>
                                        Коробка
                                    </p>

                                    <!--  Бренд -->
                                    <?php
                                    if (!$product->get_attribute('etot-zhe-tovar-v-drugih-va') == null) {
                                    ?>
                                        <li>
                                            <span>
                                                Бренд
                                            </span>
                                            <span>
                                                <?php
                                                echo $product->get_attribute('etot-zhe-tovar-v-drugih-va');
                                                ?>
                                            </span>
                                        </li>
                                    <?php
                                    }
                                    ?>

                                    <!--  Бренд-серия -->
                                    <?php
                                    if (!$product->get_attribute('izgotovitel') == null) {
                                    ?>
                                        <li>
                                            <span>
                                                Бренд-серия
                                            </span>
                                            <span>
                                                <?php
                                                echo $product->get_attribute('izgotovitel');
                                                ?>
                                            </span>
                                        </li>
                                    <?php
                                    }
                                    ?>

                                    <!--  Категория -->
                                    <?php
                                    if (!$product->get_attribute('kategoriya-na-sajte-zareze') == null) {
                                    ?>
                                        <li>
                                            <span>
                                                Категория
                                            </span>
                                            <span>
                                                <?php
                                                echo $product->get_attribute('kategoriya-na-sajte-zareze');
                                                ?>
                                            </span>
                                        </li>
                                    <?php
                                    }
                                    ?>

                                    <!-- вес товара -->
                                    <?php
                                    if (!$product->get_attribute('ves') == null) {
                                    ?>
                                        <li>
                                            <span>
                                                Вес товара
                                            </span>
                                            <span>
                                                <?php
                                                echo $product->get_attribute('ves') . ' кг';
                                                ?>
                                            </span>
                                        </li>
                                    <?php
                                    }
                                    ?>

                                    <!-- Форма упаковки -->
                                    <?php
                                    if (!$product->get_attribute('forma-upakovki') == null) {
                                    ?>
                                        <li>
                                            <span>
                                                Упаковка
                                            </span>
                                            <span>
                                                <?php
                                                echo $product->get_attribute('forma-upakovki');
                                                ?>
                                            </span>
                                        </li>
                                    <?php
                                    }
                                    ?>

                                    <!--  Тип упаковки -->
                                    <?php
                                    if (!$product->get_attribute('tip-upakovki') == null) {
                                    ?>
                                        <li>
                                            <span>
                                                Тип упаковки
                                            </span>
                                            <span>
                                                <?php
                                                echo $product->get_attribute('tip-upakovki');
                                                ?>
                                            </span>
                                        </li>
                                    <?php
                                    }
                                    ?>

                                    <!--  Объем -->
                                    <?php
                                    if (!$product->get_attribute('obem') == null) {
                                    ?>
                                        <li>
                                            <span>
                                                Объем
                                            </span>
                                            <span>
                                                <?php
                                                echo $product->get_attribute('obem') . 'л.';
                                                ?>
                                            </span>
                                        </li>
                                    <?php
                                    }
                                    ?>
                                    <!--  Аромат -->
                                    <?php
                                    if (!$product->get_attribute('aromat') == null) {
                                    ?>
                                        <li>
                                            <span>
                                                Аромат
                                            </span>
                                            <span>
                                                <?php
                                                echo $product->get_attribute('aromat');
                                                ?>
                                            </span>
                                        </li>
                                    <?php
                                    }
                                    ?>

                                    <!--  Тип -->
                                    <?php
                                    if (!$product->get_attribute('tip') == null) {
                                    ?>
                                        <li>
                                            <span>
                                                Тип
                                            </span>
                                            <span>
                                                <?php
                                                echo $product->get_attribute('tip') . 'л.';
                                                ?>
                                            </span>
                                        </li>
                                    <?php
                                    }
                                    ?>

                                    <!--    Форма выпуска -->
                                    <?php
                                    if (!$product->get_attribute('forma-upakovki') == null) {
                                    ?>
                                        <li>
                                            <span>
                                                Форма выпуска
                                            </span>
                                            <span>
                                                <?php
                                                echo $product->get_attribute('forma-upakovki');
                                                ?>
                                            </span>
                                        </li>
                                    <?php
                                    }
                                    ?>

                                    <!--  Количество применения -->
                                    <?php
                                    if (!$product->get_attribute('kolichestvo-kapel-sht') == null) {
                                    ?>
                                        <li>
                                            <span>
                                                Количество применения
                                            </span>
                                            <span>
                                                <?php
                                                echo $product->get_attribute('kolichestvo-kapel-sht');
                                                ?>
                                            </span>
                                        </li>
                                    <?php
                                    }
                                    ?>

                                    <!--   Назначение -->
                                    <?php
                                    if (!$product->get_attribute('naznachenie-sredstva') == null) {
                                    ?>
                                        <li>
                                            <span>
                                                Назначение
                                            </span>
                                            <span>
                                                <?php
                                                echo $product->get_attribute('naznachenie-sredstva');
                                                ?>
                                            </span>
                                        </li>
                                    <?php
                                    }
                                    ?>

                                    <!--   Товарная группа -->
                                    <?php
                                    if (!$product->get_attribute('vse-tovary-v-etoj-gruppe') == null) {
                                    ?>
                                        <li>
                                            <span>
                                                Товарная группа
                                            </span>
                                            <span>
                                                <?php
                                                echo $product->get_attribute('vse-tovary-v-etoj-gruppe');
                                                ?>
                                            </span>
                                        </li>
                                    <?php
                                    }
                                    ?>

                                    <!-- Особенности применения -->
                                    <?php
                                    if (!$product->get_attribute('osobennosti-primeneniya') == null) {
                                    ?>
                                        <li>
                                            <span>
                                                Особенности применения
                                            </span>
                                            <span>
                                                <?php
                                                echo $product->get_attribute('osobennosti-primeneniya');
                                                ?>
                                            </span>
                                        </li>
                                    <?php
                                    }
                                    ?>

                                    <!-- Размер упаковки -->
                                    <?php
                                    if (!$product->get_attribute('razmer-upakovki-vysota-h-s') == null) {
                                    ?>
                                        <li>
                                            <span>
                                                Размер упаковки
                                            </span>
                                            <span>
                                                <?php
                                                echo $product->get_attribute('razmer-upakovki-vysota-h-s');
                                                ?>
                                            </span>
                                        </li>
                                    <?php
                                    }
                                    ?>

                                </ul>
                                <ul class="for-box">
                                    <p>
                                        Коробка
                                    </p>

                                    <!-- Товарных единиц в коробке -->
                                    <?php
                                    if (!$product->get_attribute('tovarnyh-edinits-v-korobke') == null) {
                                    ?>
                                        <li>
                                            <span>
                                                Товарных единиц в коробке
                                            </span>
                                            <span>
                                                <?php
                                                echo $product->get_attribute('tovarnyh-edinits-v-korobke');
                                                ?>
                                            </span>
                                        </li>
                                    <?php
                                    }
                                    ?>

                                    <!-- Вес коробки -->
                                    <?php
                                    if (!$product->get_attribute('ves-korobki-kg') == null) {
                                    ?>
                                        <li>
                                            <span>
                                                Вес коробки
                                            </span>
                                            <span>
                                                <?php
                                                echo $product->get_attribute('ves-korobki-kg') . 'кг';
                                                ?>
                                            </span>
                                        </li>
                                    <?php
                                    }
                                    ?>

                                    <!-- Размер коробки (Длина х Ширина х Высота), см -->
                                    <?php
                                    if (!$product->get_attribute('razmer-korobki-vysota-h-sh') == null) {
                                    ?>
                                        <li>
                                            <span>
                                                Размер коробки (Длина х Ширина х Высота), см
                                            </span>
                                            <span>
                                                <?php
                                                echo $product->get_attribute('razmer-korobki-vysota-h-sh');
                                                ?>
                                            </span>
                                        </li>
                                    <?php
                                    }
                                    ?>

                                    <!-- Страна-изготовитель -->
                                    <?php
                                    if (!$product->get_attribute('izgotovitel') == null) {
                                    ?>
                                        <li>
                                            <span>
                                                Страна-изготовитель
                                            </span>

                                            <span>
                                                <a href="<?php echo wc_get_page_permalink('shop') . '/?swoof=1&pa_izgotovitel=yaponiya' ?>">
                                                    <?php
                                                    echo $product->get_attribute('izgotovitel');
                                                    ?>
                                                </a>

                                            </span>
                                        </li>
                                    <?php
                                    }
                                    ?>
                                </ul>
                            </div>
                            <div class="subtext">
                                <p>
                                    Информация о технических характеристиках, комплекте поставки, стране
                                    изготовления, внешнем виде и цвете товара носит справочный характер и
                                    основывается на последних доступных к моменту публикации сведениях
                                </p>
                            </div>
                            <div class="single-product__description">
                                <b id="bio-single">
                                    Описание
                                </b>
                                <p>
                                    <?php echo $product->post->post_content; ?>
                                </p>
                                <b id="inner-product">
                                    Состав
                                </b>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi, consectetur!
                                    <!-- 15-30% неионогенные ПАВ, &lt; 5% стабилизатор, регулятор pH, смягчающий
										компонент для тканей (силиконовые соединения), катионные ПАВ, отдушка -->
                                </p>
                                <?php
                                if (!$product->get_attribute('komplektatsiya') == null) {
                                ?>

                                    <b id="complect-bio">
                                        Комплектация
                                    </b>
                                    <p>
                                        <?php echo $product->get_attribute('komplektatsiya'); ?>
                                    </p>

                                <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div data-da='.for-action, 1200,1' class="product__info-wrap">
                        <div class="product__info">
                            <div class="product-price">
                                <div class="price">
                                    <div class="price__item">
                                        <p>
                                            <?php echo $price = get_post_meta(get_the_ID(), '_regular_price', true) . ' ₽' ?>
                                        </p>
                                    </div>
                                    <span>Цена на опт</span>
                                </div>
                            </div>

                            <div class="add-to-cart__action woo-product-action">
                                <!-- <?php echo do_shortcode('[add_to_cart id="' . $post->ID . '"]'); ?> -->
                                <div class="btns">
                                    <a data-quantity="1" ; data-product_id="<?php echo esc_attr($product->get_id()); ?>" data-linkprice="<?php echo '?add-to-cart=' . get_the_ID(); ?>" href="<?php echo $product->add_to_cart_url() ?>" value="<?php echo esc_attr($product->get_id()); ?>" data-product_sku="<?php echo esc_attr($sku) ?>" aria-label="Add “<?php the_title_attribute() ?>” to your cart" class="main-btn add-to-cart-link button product_type_simple add_to_cart_button ajax_add_to_cart">
                                        В корзину
                                    </a>
                                </div>
                                <input class="counter-for-item" type="number" value="1" min="1" step="1">
                            </div>
                            <!-- <div class="product-buy">
										<button class="main-btn">Добавить в корзину</button>

									</div> -->
                            <div class="product__action-block">
                                <?php echo do_shortcode('[yith_wcwl_add_to_wishlist]'); ?>
                                <!-- <button class="add-in-favorite">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" class="ui-f2">
											<path fill="" d="M7 5a4 4 0 0 0-4 4c0 3.552 2.218 6.296 4.621 8.22A21.525 21.525 0 0 0 12 19.91a21.58 21.58 0 0 0 4.377-2.69C18.78 15.294 21 12.551 21 9a4 4 0 0 0-4-4c-1.957 0-3.652 1.396-4.02 3.2a1 1 0 0 1-1.96 0C10.652 6.396 8.957 5 7 5Zm5 17c-.316-.02-.56-.147-.848-.278a23.542 23.542 0 0 1-4.781-2.942C3.777 16.705 1 13.449 1 9a6 6 0 0 1 6-6 6.183 6.183 0 0 1 5 2.568A6.183 6.183 0 0 1 17 3a6 6 0 0 1 6 6c0 4.448-2.78 7.705-5.375 9.78a23.599 23.599 0 0 1-4.78 2.942c-.543.249-.732.278-.845.278Z"></path>
										</svg>
									</button> -->

                                <div title="Уже товаров в корзине" class="product-check-in-cart">
                                    <svg width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M7.875 20.25C6.6375 20.25 5.63625 21.2625 5.63625 22.5C5.63625 23.7375 6.6375 24.75 7.875 24.75C9.1125 24.75 10.125 23.7375 10.125 22.5C10.125 21.2625 9.1125 20.25 7.875 20.25ZM1.125 2.25V4.5H3.375L7.425 13.0388L5.90625 15.795C5.72625 16.11 5.625 16.4813 5.625 16.875C5.625 18.1125 6.6375 19.125 7.875 19.125H21.375V16.875H8.3475C8.19 16.875 8.06625 16.7513 8.06625 16.5938L8.1 16.4588L9.1125 14.625H17.4938C18.3375 14.625 19.08 14.1638 19.4625 13.4663L23.49 6.165C23.58 6.0075 23.625 5.81625 23.625 5.625C23.625 5.00625 23.1188 4.5 22.5 4.5H5.86125L4.80375 2.25H1.125ZM19.125 20.25C17.8875 20.25 16.8863 21.2625 16.8863 22.5C16.8863 23.7375 17.8875 24.75 19.125 24.75C20.3625 24.75 21.375 23.7375 21.375 22.5C21.375 21.2625 20.3625 20.25 19.125 20.25Z" fill="#BDBDBD" />
                                    </svg>
                                    <span>
                                        <?php
                                        $cart_count = 0;
                                        $product_id = get_the_ID(); // Получаем идентификатор текущего товара

                                        // Перебираем товары в корзине
                                        foreach (WC()->cart->get_cart() as $cart_item_key => $cart_item) {
                                            // Получаем идентификатор товара корзины
                                            $item_product_id = $cart_item['product_id'];

                                            // Проверяем, соответствует ли товар текущему товару на странице
                                            if ($item_product_id == $product_id) {
                                                // Увеличиваем счетчик количества товара в корзине
                                                $cart_count += $cart_item['quantity'];
                                            }
                                        }

                                        echo $cart_count . ' шт';
                                        ?>
                                    </span>
                                </div>

                            </div>
                        </div>
                        <!-- <div class="product__diferent">
									<div class="dif">
										<span>-15% </span>
										<span>827 ₽</span>
									</div>
									<p>
										<b>827 ₽</b> Средняя в рознице
									</p>
								</div> -->
                        <div class="sklad">
                            <p>
                                Информация об отгрузке
                            </p>
                            <div class="item">
                                <div class="img">
                                    <img src="<?php echo get_template_directory_uri() . '/' ?>assets/imgs/icons/nocurrent.png" alt="">
                                </div>
                                <button data-popup=".popup-item1" class="call-popup go-list-sklad">
                                    <?php
                                    if ($warehouse) {
                                        echo 'Склад: ' . $warehouse;
                                    } else {
                                        echo "Склад не выбран";
                                    }
                                    ?>
                                </button>
                            </div>
                            <span>
                                Укажите склад, чтобы продолжить оформление заказа
                                <span title=" lorem lorem lorem ">i</span>
                            </span>
                        </div>
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
    </div>
</main>
<?php echo get_footer(); ?>