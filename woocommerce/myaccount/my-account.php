<?php

/**
 * My Account page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/my-account.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.5.0
 */

defined('ABSPATH') || exit;

/**
 * My Account navigation.
 *
 * @since 2.6.0
 */
?>
<div class="wrapper">
    <div class="container">
        <div class="account-wrap">
            <div class="custom-profile">
                <div class="custom-profile__head">
                    <div class="name">
                        <h2>
                            <?php $name = trim(wp_get_current_user()->first_name . ' ' . wp_get_current_user()->last_name);
                            echo $name;
                            ?>
                        </h2>
                    </div>
                    <div class="email">
                        <p>
                            <?php $email = wp_get_current_user()->user_email;
                            echo $email;
                            ?>
                        </p>
                    </div>
                    <div class="phone">
                        <p>
                            номер телефона
                        </p>
                    </div>
                </div>
                <div class="custom-profile__nav">
                    <ul>
                        <li <?php if (is_account_page() && !is_wc_endpoint_url()) echo 'class="active"'; ?>>
                            <a href="<?php echo wc_get_account_endpoint_url('my-account'); ?>">
                                <svg width="26" height="27" viewBox="0 0 26 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M23.6658 0.666992H2.33247C1.35469 0.666992 0.554688 1.49199 0.554688 2.50033V24.5003C0.554688 25.5087 1.35469 26.3337 2.33247 26.3337H23.6658C24.6436 26.3337 25.4436 25.5087 25.4436 24.5003V2.50033C25.4436 1.49199 24.6436 0.666992 23.6658 0.666992ZM12.9991 5.70866C15.2036 5.70866 16.9991 7.56033 16.9991 9.83366C16.9991 12.107 15.2036 13.9587 12.9991 13.9587C10.7947 13.9587 8.99913 12.107 8.99913 9.83366C8.99913 7.56033 10.7947 5.70866 12.9991 5.70866ZM20.9991 22.667H4.99913V21.292C4.99913 18.542 10.3325 17.167 12.9991 17.167C15.6658 17.167 20.9991 18.542 20.9991 21.292V22.667Z" fill="black" fill-opacity="0.87" />
                                </svg>

                                Панель управления
                            </a>
                        </li>
                        <li <?php if (is_wc_endpoint_url('orders')) echo 'class="active"'; ?>>
                            <a href="<?php echo wc_get_account_endpoint_url('orders'); ?>">
                                <svg width="25" height="27" viewBox="0 0 25 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12.4862 22.7198L2.3525 15.0798L0.125 16.7598L12.5 26.0932L24.875 16.7598L22.6338 15.0665L12.4862 22.7198ZM12.5 19.3332L22.62 11.6932L24.875 9.99984L12.5 0.666504L0.125 9.99984L2.36625 11.6932L12.5 19.3332Z" fill="black" />
                                </svg>

                                Мои заказы

                            </a>
                        </li>

                        <li <?php if (is_wc_endpoint_url('company')) echo 'class="active"'; ?>>
                            <a href="<?php echo wc_get_account_endpoint_url('company'); ?>">
                                <svg width="25" height="22" viewBox="0 0 25 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10 15.8889V14.6667H1.2625L1.25 19.5556C1.25 20.9122 2.3625 22 3.75 22H21.25C22.6375 22 23.75 20.9122 23.75 19.5556V14.6667H15V15.8889H10ZM22.5 4.88889H17.4875V2.44444L14.9875 0H9.9875L7.4875 2.44444V4.88889H2.5C1.125 4.88889 0 5.98889 0 7.33333V11C0 12.3567 1.1125 13.4444 2.5 13.4444H10V11H15V13.4444H22.5C23.875 13.4444 25 12.3444 25 11V7.33333C25 5.98889 23.875 4.88889 22.5 4.88889ZM15 4.88889H10V2.44444H15V4.88889Z" fill="#333333" />
                                </svg>

                                Моя компания
                            </a>
                        </li>
                        <li <?php if (is_wc_endpoint_url('edit-address')) echo 'class="active"'; ?>>
                            <a href="<?php echo wc_get_account_endpoint_url('edit-address'); ?>">
                                <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M21.7708 0.625L21.5775 0.66125L15.125 3.1625L7.875 0.625L1.06 2.92083C0.80625 3.00542 0.625 3.22292 0.625 3.50083V21.7708C0.625 22.1092 0.890833 22.375 1.22917 22.375L1.4225 22.3387L7.875 19.8375L15.125 22.375L21.94 20.0792C22.1938 19.9946 22.375 19.7771 22.375 19.4992V1.22917C22.375 0.890833 22.1092 0.625 21.7708 0.625ZM15.125 19.9583L7.875 17.4088V3.04167L15.125 5.59125V19.9583Z" fill="black" fill-opacity="0.87" />
                                </svg>

                                Адреса доставки
                            </a>
                        </li>
                        <li <?php if (is_wc_endpoint_url('my-wishlist')) echo 'class="active"'; ?>>
                            <a href="<?php echo wc_get_account_endpoint_url('my-wishlist'); ?>">
                                <svg width="23" height="21" viewBox="0 0 23 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11.5 21L9.8325 19.4894C3.91 14.145 0 10.6202 0 6.29428C0 2.76948 2.783 0 6.325 0C8.326 0 10.2465 0.926976 11.5 2.39183C12.7535 0.926976 14.674 0 16.675 0C20.217 0 23 2.76948 23 6.29428C23 10.6202 19.09 14.145 13.1675 19.5008L11.5 21Z" fill="#333333" />
                                </svg>

                                Мои списки
                            </a>
                        </li>
                        <li <?php if (is_wc_endpoint_url('edit-account')) echo 'class="active"'; ?>>
                            <a href="<?php echo wc_get_account_endpoint_url('edit-account'); ?>">
                                <svg width="26" height="25" viewBox="0 0 26 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12.9997 3.09567C14.8363 3.09567 16.3247 4.54484 16.3247 6.33317C16.3247 8.1215 14.8363 9.57067 12.9997 9.57067C11.163 9.57067 9.67467 8.1215 9.67467 6.33317C9.67467 4.54484 11.163 3.09567 12.9997 3.09567ZM12.9997 16.9707C17.7022 16.9707 22.658 19.2215 22.658 20.2082V21.904H3.34134V20.2082C3.34134 19.2215 8.29717 16.9707 12.9997 16.9707ZM12.9997 0.166504C9.50051 0.166504 6.66634 2.92609 6.66634 6.33317C6.66634 9.74025 9.50051 12.4998 12.9997 12.4998C16.4988 12.4998 19.333 9.74025 19.333 6.33317C19.333 2.92609 16.4988 0.166504 12.9997 0.166504ZM12.9997 14.0415C8.77217 14.0415 0.333008 16.1073 0.333008 20.2082V24.8332H25.6663V20.2082C25.6663 16.1073 17.2272 14.0415 12.9997 14.0415Z" fill="black" fill-opacity="0.87" />
                                </svg>

                                Мой профиль
                            </a>
                        </li>
                    </ul>
                    <a class="exit-btn" href="<?php echo wp_logout_url(home_url()); ?>">
                        Выйти
                    </a>
                </div>

            </div>
            <div class="content-info">
                <?php
                /**
                 * My Account content.
                 *
                 * @since 2.6.0
                 */
                do_action('woocommerce_account_content');
                ?>
            </div>
        </div>
    </div>
</div>