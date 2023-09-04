<?php

/**
 * Cart Page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/cart.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.8.0
 */

defined('ABSPATH') || exit;

do_action('woocommerce_before_cart'); ?>

<?php do_action('woocommerce_after_cart'); ?>

<?php
/*
Template Name: Корзина
*/
?>
<?php echo get_header(); ?>

<section class="cart">
    <div class="container">
        <div class="cart__body">
            <div class="cart__content">
                <form method="post" class="cart__content-wrap">
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
                            выбрано строк: <span class="inline-count">0</span>
                        </div>
                        <div class="item">
                            <button class="cancel-count">Отменить выбор</button>
                        </div>
                        <div class="item">
                            <button type="submit" name="delete-select" class="delete-checked">Удалить выбранные товары</button>
                        </div>
                        <div class="item">
                            <button type="submit" onclick='javascript:if(!confirm("Удалить все товары из корзины?")) {return false;}' class="button" name="clear-cart">Очистить корзину</button>
                        </div>
                    </div>
                    <div class="cart__wrap">

                        <?php
                        foreach (WC()->cart->get_cart() as $cart_item_key => $cart_item) {
                            $_product   = apply_filters('woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key);
                            $product_id = apply_filters('woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key);

                            if ($_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters('woocommerce_cart_item_visible', true, $cart_item, $cart_item_key)) {
                                $product_permalink = apply_filters('woocommerce_cart_item_permalink', $_product->is_visible() ? $_product->get_permalink($cart_item) : '', $cart_item, $cart_item_key);
                        ?>
                                <article class="woocommerce-cart-form__cart-item cart__item <?php echo esc_attr(apply_filters('woocommerce_cart_item_class', 'cart_item', $cart_item, $cart_item_key)); ?>">

                                    <label class="item-check">
                                        <input name="product_id[]" value="<?php echo $cart_item['product_id']; ?>" type="checkbox">
                                    </label>
                                    <div class="product-thumbnail item-img">
                                        <?php
                                        $thumbnail = apply_filters('woocommerce_cart_item_thumbnail', $_product->get_image(), $cart_item, $cart_item_key);

                                        if (!$product_permalink) {
                                            echo $thumbnail; // PHPCS: XSS ok.
                                        } else {
                                            printf('<a href="%s">%s</a>', esc_url($product_permalink), $thumbnail); // PHPCS: XSS ok.
                                        }
                                        ?>
                                    </div>

                                    <div class="item-info" data-title="<?php esc_attr_e('Product', 'woocommerce'); ?>">
                                        <a href="#">
                                            <?php
                                            if (!$product_permalink) {
                                                echo wp_kses_post(apply_filters('woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key) . '&nbsp;');
                                            } else {
                                                echo wp_kses_post(apply_filters('woocommerce_cart_item_name', sprintf('<a href="%s">%s</a>', esc_url($product_permalink), $_product->get_name()), $cart_item, $cart_item_key));
                                            }

                                            do_action('woocommerce_after_cart_item_name', $cart_item, $cart_item_key);

                                            // Meta data.
                                            echo wc_get_formatted_cart_item_data($cart_item); // PHPCS: XSS ok.

                                            // Backorder notification.
                                            if ($_product->backorders_require_notification() && $_product->is_on_backorder($cart_item['quantity'])) {
                                                echo wp_kses_post(apply_filters('woocommerce_cart_item_backorder_notification', '<p class="backorder_notification">' . esc_html__('Available on backorder', 'woocommerce') . '</p>', $product_id));
                                            }
                                            ?>
                                        </a>
                                        <?php

                                        if ($_product->get_attribute('forma-upakovki') != null) {
                                        ?>

                                            <span class="item-weight">Количество ед.изм. в упаковке - <?php echo $_product->get_attribute('forma-upakovki'); ?>.</span>

                                        <?php
                                        } else {
                                        ?>

                                            <span class="item-weight">Количество шт. в упаковке уточняйте у менеджера</span>


                                        <?php
                                        }

                                        ?>

                                        <span class="item-article">Код товара: <?php $sku = $_product->get_sku();
                                                                                echo $sku; ?></span>
                                    </div>

                                    <div class="item-price" data-title="<?php esc_attr_e('Price', 'woocommerce'); ?>">
                                        <p>
                                            <?php
                                            $price_product = apply_filters('woocommerce_cart_item_price', WC()->cart->get_product_price($_product), $cart_item, $cart_item_key); // PHPCS: XSS ok.
                                            echo $price_product;
                                            ?>
                                        </p>
                                        <!-- <span class="bad-price"><?php
                                                                        $currency_symbol = get_woocommerce_currency_symbol();
                                                                        $price_without_currency_symbol = str_replace($currency_symbol, '', $price_product);
                                                                        if (strpos($price_without_currency_symbol, '.') !== false) {
                                                                            $price_without_currency_symbol = strstr($price_without_currency_symbol, '.', true);
                                                                        }

                                                                        // это значение не превращается в число, оно является строкой*
                                                                        echo $price_without_currency_symbol;

                                                                        ?> - средняя в рознице</span> -->

                                    </div>

                                    <div class="item-count">

                                        <?php
                                        if ($_product->is_sold_individually()) {
                                            $product_quantity = sprintf('1 <input type="hidden" name="cart[%s][qty]" value="1" />', $cart_item_key);
                                        } else {
                                            $product_quantity = woocommerce_quantity_input([
                                                'input_name'   => "cart[{$cart_item_key}][qty]",
                                                'input_value'  => $cart_item['quantity'],
                                                'max_value'    => $_product->get_max_purchase_quantity(),
                                                'min_value'    => '0',
                                                'product_name' => $_product->get_name(),
                                            ], $_product, false);
                                        }
                                        echo apply_filters('woocommerce_cart_item_quantity', $product_quantity, $cart_item_key, $cart_item); // PHPCS: XSS ok.
                                        ?>
                                            

                                        <div class="item-final">
                                            Итого: <?php
                                                    echo apply_filters('woocommerce_cart_item_subtotal', WC()->cart->get_product_subtotal($_product, $cart_item['quantity']), $cart_item, $cart_item_key); // PHPCS: XSS ok.
                                                    ?>
                                        </div>
                                        <div class="item-skolko">
                                            Упаковок: <?php echo $cart_item['quantity']; ?> шт.
                                        </div>
                                    </div>

                                    <td class="product-quantity" data-title="<?php esc_attr_e('Quantity', 'woocommerce'); ?>">
                                    </td>

                                    <td class="product-subtotal" data-title="<?php esc_attr_e('Subtotal', 'woocommerce'); ?>">

                                    </td>

                                    <td class="product-remove">
                                        <?php
                                        echo apply_filters( // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
                                            'woocommerce_cart_item_remove_link',
                                            sprintf('<a href="%s" class="remove" aria-label="%s" data-product_id="%s" data-product_sku="%s"><img src="https://auss.funnytalk.ru/wp-content/themes/aus-logistic/assets/imgs/icons/trash.svg" alt=""></a>', esc_url(wc_get_cart_remove_url($cart_item_key)), esc_html__('Remove this item', 'woocommerce'), esc_attr($product_id), esc_attr($_product->get_sku())),
                                            $cart_item_key
                                        );
                                        ?>
                                    </td>
                                </article>
                        <?php
                            }
                        }
                        ?>
                        <div class="cart__pagination">

                            <div id="cart__pag" class="nums">

                            </div>

                        </div>
                    </div>
                    <button type="submit" class="button" name="update_cart" value="<?php esc_attr_e( 'Update cart', 'woocommerce' ); ?>"><?php esc_html_e( 'Update cart', 'woocommerce' ); ?></button>

<?php do_action( 'woocommerce_cart_actions' ); ?>

<?php wp_nonce_field( 'woocommerce-cart', 'woocommerce-cart-nonce' ); ?>
                </form>
            </div>
            <div class="cart-collaterals cart__output">
                <?php
                /**
                 * Cart collaterals hook.
                 *
                 * @hooked woocommerce_cross_sell_display
                 * @hooked woocommerce_cart_totals - 10
                 */
                do_action('woocommerce_cart_collaterals');
                ?>
            </div>
            <!-- <div class="cart__output">
                           
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
                                        <img src="<?php echo get_template_directory_uri() . '/' ?>assets/imgs/icons/nocurrent.png" alt="">
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
                        </div> -->
        </div>
    </div>

</section>

