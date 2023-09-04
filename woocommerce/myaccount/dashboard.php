<?php

/**
 * My Account Dashboard
 *
 * Shows the first intro screen on the account dashboard.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/dashboard.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 4.4.0
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

$allowed_html = array(
    'a' => array(
        'href' => array(),
    ),
);
?>

<div class="profile__banner">

</div>

<div class="profile__cards">
    <div class="total-cart profile__cart card dashboard__card">
        <div class="item">
            <span>Товаров на сумму</span>
            <?php do_action('woocommerce_cart_totals_before_order_total'); ?>
            <span id="">
                <strong>
                    <?php
                    $cart = WC()->cart;
                    $subtotal = $cart->subtotal;
                    echo wc_price($subtotal);
                    ?>
                </strong>
            </span>
            <?php do_action('woocommerce_cart_totals_after_order_total'); ?>
        </div>
        <div class="item">
            <span>Наименований товара
            </span>
            <span><?php echo count(WC()->cart->get_cart()); ?> шт.
            </span>
        </div>
        <div class="item">
            <span>Количество товара
            </span>
            <span><?php echo WC()->cart->get_cart_contents_count(); ?> шт.
            </span>
        </div>
        <div class="item">
            <span>Стоимость доставки: </span>
            <span style="font-weight: bold;">
                <?php print_r(WC()->cart->get_cart_shipping_total()) ?>
            </span>
            <?php foreach (WC()->cart->get_fees() as $fee) : ?>
                <tr class="fee">
                    <th><?php echo esc_html($fee->name); ?></th>
                    <td><?php wc_cart_totals_fee_html($fee); ?></td>
                </tr>
            <?php endforeach; ?>
        </div>
        <!-- <div class="item">
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
                        </div> -->
        <div class="order-total">
            <span>Итого:</span>
            <span>
                <?php
                wc_cart_totals_order_total_html();
                ?>
            </span>
        </div>
    </div>
    <div class="profile__orders dashboard__card">
        <?php
        $args = array(
            'status' => 'completed',
            'limit' => -1,
        );

        $orders = wc_get_orders($args);

        $orders_count = count($orders);
        $orders_total = 0;

        foreach ($orders as $key => $order) {
            $order_id = $order->get_id();
            $order_total = $order->get_total();

            $orders_total += $order_total;

            echo "Заказ №" . ($key + 1) . " - " . wc_price($order_total) . "<br>";
        }

        echo "<p>Количество заказов: " . $orders_count . '</p>';
        echo "<p>Сумма всех заказов: " . wc_price($orders_total) . '</p>';

        ?>

        <a href="<?php echo wc_get_page_permalink('myaccount'); ?>orders/">Посмотреть все заказы</a>
    </div>
    <div class="default-address dashboard__card">
        <p>
            Ваш Адрес доставки по умолчанию
        </p>
        <div style="margin-bottom: 30px;">
            <?php
            $current_user_id = get_current_user_id(); // Получаем ID текущего пользователя

            $address_parts = array();

            $address_1 = get_user_meta($current_user_id, 'billing_address_1', true);
            if (!empty($address_1)) {
                $address_parts[] = $address_1;
            }

            $address_2 = get_user_meta($current_user_id, 'billing_address_2', true);
            if (!empty($address_2)) {
                $address_parts[] = $address_2;
            }

            $city = get_user_meta($current_user_id, 'billing_city', true);
            if (!empty($city)) {
                $address_parts[] = $city;
            }

            $postcode = get_user_meta($current_user_id, 'billing_postcode', true);
            if (!empty($postcode)) {
                $address_parts[] = $postcode;
            }

            if (empty($address_parts)) {
                echo 'Адрес не найден или он заполнен неполностью';
            } else {
                $address = implode(', ', $address_parts);
                echo '<p>' . $address . '</p>' ;
            }
            ?>
        </div>

        <a href="<?php echo wc_get_account_endpoint_url('edit-address'); ?>">Изменить адреса доставки</a>
    </div>
</div>