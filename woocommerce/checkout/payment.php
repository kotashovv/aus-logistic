<?php

/**
 * Checkout Payment Section
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/payment.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.5.3
 */

defined('ABSPATH') || exit;

if (!wp_doing_ajax()) {
    do_action('woocommerce_review_order_before_payment');
}
?>

<div id="payment" class="col woocommerce-checkout-payment">
    <div class="user-name">
        <p>
            <?php $current_user = wp_get_current_user(); ?>

            Индивидуальный предприниматель
        </p>
        <p>
            <?php echo $current_user->first_name . ' ' . $current_user->last_name ?>
        </p>
        <span>
            <!-- ИНН: <?php
                    $result = auss_get_company();
                    $inn = $result['inn'];
                    echo $inn;
                    ?>
            <?php echo $result['fio']['surname']; ?>
            <?php echo $result['fio']['name']; ?> -->
        </span>
        <span>
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
                echo $address;
            }
            ?>

        </span>
    </div>

    <div class="total-cart">
        <!-- <div class="item">
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
        </div> -->
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
      
        <div class="order-total">
            <span>Итого:</span>
            <span style="text-align: right;">
                <!-- <?php
                        wc_cart_totals_order_total_html();
                        ?> -->
                <?php
                $cart = WC()->cart;
                $subtotal = $cart->subtotal;
                echo wc_price($subtotal);
                ?>
                <span style="display: block; font-size: 12px;">
                    без учёта доставки
                </span>
            </span>
        </div>

        <!-- @todo 
        поставить обновление при переключении -->
        
    </div>

    <?php if (wc_tax_enabled() && !WC()->cart->display_prices_including_tax()) : ?>
        <?php if ('itemized' === get_option('woocommerce_tax_total_display')) : ?>
            <?php foreach (WC()->cart->get_tax_totals() as $code => $tax) : // phpcs:ignore WordPress.WP.GlobalVariablesOverride.Prohibited 
            ?>
                <tr class="tax-rate tax-rate-<?php echo esc_attr(sanitize_title($code)); ?>">
                    <th><?php echo esc_html($tax->label); ?></th>
                    <td><?php echo wp_kses_post($tax->formatted_amount); ?></td>
                </tr>
            <?php endforeach; ?>
        <?php else : ?>
            <tr class="tax-total">
                <th><?php echo esc_html(WC()->countries->tax_or_vat()); ?></th>
                <td><?php wc_cart_totals_taxes_total_html(); ?></td>
            </tr>
        <?php endif; ?>
    <?php endif; ?>




    <?php do_action('woocommerce_review_order_after_order_total'); ?>

    <div class="final_wrap">
        <?php if (WC()->cart->needs_payment()) : ?>
            <ul class="wc_payment_methods payment_methods methods">
                <?php
                if (!empty($available_gateways)) {
                    foreach ($available_gateways as $gateway) {
                        wc_get_template('checkout/payment-method.php', array('gateway' => $gateway));
                    }
                } else {
                    echo '<li class="woocommerce-notice woocommerce-notice--info woocommerce-info">' . apply_filters('woocommerce_no_available_payment_methods_message', WC()->customer->get_billing_country() ? esc_html__('Sorry, it seems that there are no available payment methods for your state. Please contact us if you require assistance or wish to make alternate arrangements.', 'woocommerce') : esc_html__('Please fill in your details above to see available payment methods.', 'woocommerce')) . '</li>'; // @codingStandardsIgnoreLine
                }
                ?>
            </ul>
        <?php endif; ?>
        <div class="form-row place-order">
            <noscript>
                <?php
                /* translators: $1 and $2 opening and closing emphasis tags respectively */
                printf(esc_html__('Since your browser does not support JavaScript, or it is disabled, please ensure you click the %1$sUpdate Totals%2$s button before placing your order. You may be charged more than the amount stated above if you fail to do so.', 'woocommerce'), '<em>', '</em>');
                ?>
                <br /><button type="submit" class="button alt" name="woocommerce_checkout_update_totals" value="<?php esc_attr_e('Update totals', 'woocommerce'); ?>"><?php esc_html_e('Update totals', 'woocommerce'); ?></button>
            </noscript>

            <?php wc_get_template('checkout/terms.php'); ?>

            <?php do_action('woocommerce_review_order_before_submit'); ?>

            <?php echo apply_filters('woocommerce_order_button_html', '<button type="submit" class="button alt" name="woocommerce_checkout_place_order" id="place_order" value="' . esc_attr($order_button_text) . '" data-value="' . esc_attr($order_button_text) . '">' . esc_html($order_button_text) . '</button>'); // @codingStandardsIgnoreLine 
            ?>

            <?php do_action('woocommerce_review_order_after_submit'); ?>

            <?php wp_nonce_field('woocommerce-process_checkout', 'woocommerce-process-checkout-nonce'); ?>
        </div>
    </div>
</div>
<?php
if (!wp_doing_ajax()) {
    do_action('woocommerce_review_order_after_payment');
}
