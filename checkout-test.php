<?php

/**
 * Checkout Form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/form-checkout.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.3.0
 */

if (!defined('ABSPATH')) {
    exit;
}

// Must remove hooks to manually use functions later. 
remove_action('woocommerce_checkout_order_review', 'woocommerce_order_review', 10);
remove_action('woocommerce_checkout_order_review', 'woocommerce_checkout_payment', 20);

wc_print_notices();

do_action('woocommerce_before_checkout_form', $checkout);

// If checkout registration is disabled and not logged in, the user cannot checkout
if (!$checkout->is_registration_enabled() && $checkout->is_registration_required() && !is_user_logged_in()) {
    echo apply_filters('woocommerce_checkout_must_be_logged_in_message', __('You must be logged in to checkout.', 'woocommerce'));
    return;
}

?>


<div class="checkout__wrap">
    <form name="checkout" method="post" class="checkout woocommerce-checkout aus-checkout" action="<?php echo esc_url(wc_get_checkout_url()); ?>" enctype="multipart/form-data">
        <div class="aus-checkout__header">
            <h2>Задайте параметры отгрузки</h2>
        </div>
        <div class="container">
            <div class="aus-checkout__body">
                <div class="col col-form">
                    <div class="aus-checkout__title">
                        <h3>Отгрузка</h3>
                    </div>
                    <div class="aus-checkout__block aus-changes">
                        <button class="checkout-changes-btn no-delivery">
                            <div class="btn-img">
                                <svg width="30" height="29" viewBox="0 0 30 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15 8.45833V3.625H2.5V25.375H27.5V8.45833H15ZM7.5 22.9583H5V20.5417H7.5V22.9583ZM7.5 18.125H5V15.7083H7.5V18.125ZM7.5 13.2917H5V10.875H7.5V13.2917ZM7.5 8.45833H5V6.04167H7.5V8.45833ZM12.5 22.9583H10V20.5417H12.5V22.9583ZM12.5 18.125H10V15.7083H12.5V18.125ZM12.5 13.2917H10V10.875H12.5V13.2917ZM12.5 8.45833H10V6.04167H12.5V8.45833ZM25 22.9583H15V20.5417H17.5V18.125H15V15.7083H17.5V13.2917H15V10.875H25V22.9583ZM22.5 13.2917H20V15.7083H22.5V13.2917ZM22.5 18.125H20V20.5417H22.5V18.125Z" fill="black" fill-opacity="0.87" />
                                </svg>
                            </div>
                            <div class="btn-text">
                                <p>Самовывоз со склада</p>
                                <span>
                                    Заберите заказ самостоятельно и экономьте на доставке.
                                </span>
                            </div>
                        </button>
                        <button class="checkout-changes-btn delievery-btn">
                            <div class="btn-img ">
                                <svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M29.1663 11.4015H24.7913V5.70074H4.37467C2.77051 5.70074 1.45801 6.98341 1.45801 8.55112V24.2282H4.37467C4.37467 26.594 6.32884 28.5038 8.74967 28.5038C11.1705 28.5038 13.1247 26.594 13.1247 24.2282H21.8747C21.8747 26.594 23.8288 28.5038 26.2497 28.5038C28.6705 28.5038 30.6247 26.594 30.6247 24.2282H33.5413V17.1023L29.1663 11.4015ZM8.74967 26.366C7.53926 26.366 6.56217 25.4111 6.56217 24.2282C6.56217 23.0453 7.53926 22.0904 8.74967 22.0904C9.96009 22.0904 10.9372 23.0453 10.9372 24.2282C10.9372 25.4111 9.96009 26.366 8.74967 26.366ZM28.4372 13.5393L31.2955 17.1023H24.7913V13.5393H28.4372ZM26.2497 26.366C25.0393 26.366 24.0622 25.4111 24.0622 24.2282C24.0622 23.0453 25.0393 22.0904 26.2497 22.0904C27.4601 22.0904 28.4372 23.0453 28.4372 24.2282C28.4372 25.4111 27.4601 26.366 26.2497 26.366Z" fill="black" fill-opacity="0.87" />
                                </svg>
                            </div>
                            <div class="btn-text">
                                <p>Доставка со склада</p>
                                <span> Ваш заказ прямо к двери, быстро и удобно. </span>
                            </div>
                        </button>
                    </div>
                    <div class="aus-checkout__notice">
                        <div class="img">
                            <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M13.6714 21.25H16.1572V13.75H13.6714V21.25ZM14.9143 2.5C8.05353 2.5 2.48535 8.1 2.48535 15C2.48535 21.9 8.05353 27.5 14.9143 27.5C21.7751 27.5 27.3433 21.9 27.3433 15C27.3433 8.1 21.7751 2.5 14.9143 2.5ZM14.9143 25C9.43315 25 4.97115 20.5125 4.97115 15C4.97115 9.4875 9.43315 5 14.9143 5C20.3955 5 24.8575 9.4875 24.8575 15C24.8575 20.5125 20.3955 25 14.9143 25ZM13.6714 11.25H16.1572V8.75H13.6714V11.25Z" fill="black" fill-opacity="0.87" />
                            </svg>
                        </div>
                        <div class="text for-delivery">
                            <p>Вы выбрали способ получения “Самовывоз”.</p>
                            <p>
                                Это удобный и экономичный способ получения вашего заказа.
                                После оформления и подтверждения заказа, вы можете
                                самостоятельно забрать товар в указанное время из нашего
                                пункта выдачи.
                            </p>
                            <p>Хотите чтобы доставили мы? Измените способ доставки.</p>
                        </div>
                        <div class="text for-not-delivery active">
                            <p>Вы выбрали способ получения "Доставка".</p>
                            <p>
                                Это удобный способ получения вашего заказа.
                                Заполните данные для доставки.
                            </p>
                            <p>Хотите забрать сами? Измените способ доставки.</p>
                        </div>
                    </div>
                    <div class="aus-checkout__adress for-delivery">
                        <h2>Куда доставить?</h2>
                        <?php do_action('woocommerce_checkout_billing'); ?>
                    </div>
                    <div class="aus-checkout__adress for-delivery">
                        <h2>Чем доставить?</h2>


                    </div>

                    <div class="aus-checkout__delivery-company for-delivery">
                        <!-- выводим сюда способы -->
                        <?php if (WC()->cart->needs_shipping() && WC()->cart->show_shipping()) : ?>

                            <?php do_action('woocommerce_review_order_before_shipping'); ?>

                            <?php wc_cart_totals_shipping_html(); ?>

                            <?php do_action('woocommerce_review_order_after_shipping'); ?>

                        <?php endif; ?>
                    </div>
                    <div class="aus-checkout__commentary">
                        <!-- выводим примечание -->

                    </div>
                    <div class="aus-checkout__prods">

                    </div>
                </div>
                <?php woocommerce_checkout_payment() ?>
            </div>
        </div>
    </form>
</div>

<?php do_action('woocommerce_after_checkout_form', $checkout); ?>