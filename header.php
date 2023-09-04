<!DOCTYPE html>
<html lang="ru">

<head>
    <?php wp_head(); ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo get_bloginfo('name'); ?> | <?php echo get_the_title(); ?></title>
</head>

<body>
    <div class="wrapper">
        <!-- шапка сайта - старт -->

        <header class="header">
            <div class="container">

                <!-- верхняя строка шапки - Старт-->
                <div class="header__row">
                    <div class="header__location">
                        <!-- <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" class="ui-f2">
						<path fill="currentColor" d="M8 9a2 2 0 1 0 0-4 2 2 0 0 0 0 4Z"></path>
						<path fill="currentColor"
						      d="M8 0a7 7 0 0 0-7 7c0 2.91 1.713 5.148 3.285 6.596a15.845 15.845 0 0 0 2.945 2.13c.155.085.32.172.406.205a1 1 0 0 0 .728 0c.086-.033.25-.12.406-.206a15.846 15.846 0 0 0 2.945-2.13C13.287 12.149 15 9.91 15 7a7 7 0 0 0-7-7ZM3 7a5 5 0 0 1 10 0c0 2.09-1.237 3.833-2.64 5.125A13.846 13.846 0 0 1 8 13.863a13.847 13.847 0 0 1-2.36-1.738C4.237 10.833 3 9.09 3 7Z"></path>
					</svg> -->
                        <img src="<?php echo get_template_directory_uri() . '/' ?>assets/imgs/icons/newicon.png" alt="">
                        <button data-popup=".popup-item1" class="icon-location call-popup go-list-sklad">
                            <?php
                            $warehouse = auss_get_warehouse();
                            if ($warehouse) {
                                echo 'Склад: ' . $warehouse;
                            } else {
                                echo "Выберите склад";
                            }
                            ?>
                        </button>
                    </div>
                    <div class="header__dop">
                        <a href="#">Кто мы</a>
                        <a href="<?php echo get_home_url() . '/dlya-biznesa'; ?>">Как мы работаем</a>
                        <a href="<?php echo get_home_url() . '/contact';?>">Контакты</a>
                    </div>
                    <div class="header__info">
                        <a href="<?php echo get_home_url() . '/marketplejsy' ?>">Для личных целей</a>
                        <a href="<?php echo get_home_url() . '/about/#Bussines' ?>">Для бизнеса</a>
                        <a href="<?php echo get_home_url() . '/about/#sklad' ?>">Склады</a>
                        <a href="<?php echo get_home_url() . '/about/#form' ?>">Помощь</a>
                    </div>
                </div>
                <!-- верхняя строка шапки - Старт-->

                <!-- средняя строка шапки - старт -->
                <div class="header__row">
                    <div class="header__logo">
                        <a href="<?php echo get_home_url(); ?>">
                            <img src="<?php echo get_template_directory_uri() . '/' ?>assets/imgs/icons/title.png" alt="">
                            <span>
                                AUSS
                                LOGISTIC
                            </span>
                        </a>
                    </div>
                    <div class="header__catalog-btn">
                        <button class="catalog-btn">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" class="ui-f2">
                                <path fill="currentColor" d="M5 6a1 1 0 1 1-2 0 1 1 0 0 1 2 0Zm2 0a1 1 0 0 1 1-1h12a1 1 0 1 1 0 2H8a1 1 0 0 1-1-1Zm0 6a1 1 0 0 1 1-1h12a1 1 0 1 1 0 2H8a1 1 0 0 1-1-1Zm1 5a1 1 0 1 0 0 2h6a1 1 0 1 0 0-2H8Zm-4-4a1 1 0 1 0 0-2 1 1 0 0 0 0 2Zm1 5a1 1 0 1 1-2 0 1 1 0 0 1 2 0Z"></path>
                            </svg>
                            Каталог
                        </button>
                    </div>
                    <div class="header__search">
                        <!-- <form class="search-form">
						<button class="search-type">
							Везде
						</button>
						<input type="search" class="search-input" placeholder="Поиск по сайту">
						<button class="search-btn">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" class="ui-f2">
								<path fill="#fff"
								      d="M11 5a6 6 0 1 0 0 12c1.619 0 3.169-.639 4.24-1.656a1.101 1.101 0 0 1 1.537.019l4.93 4.93a1 1 0 0 1-1.414 1.414l-4.346-4.346A8.298 8.298 0 0 1 11 19a8 8 0 1 1 7.875-6.587 1 1 0 0 1-1.968-.351A6 6 0 0 0 11 5Z"></path>
							</svg>
						</button>
					</form> -->
                        <?php echo do_shortcode('[aws_search_form]'); ?>
                    </div>
                    <div class="header__action">
                        <a href="<?php echo wc_get_page_permalink('myaccount'); ?>orders/">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" class="yf9">
                                <path fill="" fill-rule="evenodd" d="M11.514 1.126a1 1 0 0 1 .972 0l9 5A1 1 0 0 1 22 7v10a1 1 0 0 1-.514.874l-9 5A1 1 0 0 1 11 22v-9.412l-3-1.666V13a1 1 0 1 1-2 0V9.81L4 8.7v7.734l4.514 2.708a1 1 0 0 1-1.028 1.716l-5-3A1 1 0 0 1 2 17V7a1 1 0 0 1 .514-.874l9-5ZM5.06 7 7.5 8.356 14.44 4.5 12 3.144 5.06 7ZM16.5 5.644 9.56 9.5 12 10.856 18.94 7 16.5 5.644ZM20 8.7l-7 3.888v7.713l7-3.89V8.7Z" clip-rule="evenodd"></path>
                            </svg>
                            <span>Заказы</span>
                        </a>
                        <a href="<?php echo wc_get_page_permalink('myaccount'); ?>my-wishlist/">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" class="y5g">
                                <path fill="" d="M7 5a4 4 0 0 0-4 4c0 3.552 2.218 6.296 4.621 8.22A21.525 21.525 0 0 0 12 19.91a21.58 21.58 0 0 0 4.377-2.69C18.78 15.294 21 12.551 21 9a4 4 0 0 0-4-4c-1.957 0-3.652 1.396-4.02 3.2a1 1 0 0 1-1.96 0C10.652 6.396 8.957 5 7 5Zm5 17c-.316-.02-.56-.147-.848-.278a23.542 23.542 0 0 1-4.781-2.942C3.777 16.705 1 13.449 1 9a6 6 0 0 1 6-6 6.183 6.183 0 0 1 5 2.568A6.183 6.183 0 0 1 17 3a6 6 0 0 1 6 6c0 4.448-2.78 7.705-5.375 9.78a23.599 23.599 0 0 1-4.78 2.942c-.543.249-.732.278-.845.278Z"></path>
                            </svg>
                            <span>Избранное</span>
                            <?php
                            $wishlist_count = YITH_WCWL()->count_products();
                            if ($wishlist_count != 0) {
                                echo ("<p>" . $wishlist_count . "</p>");
                            } else {
                                echo '';
                            }
                            ?>
                        </a>
                        <a href="<?php echo wc_get_page_permalink('cart'); ?>">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" class="va7">
                                <path fill="" d="M6 6a4 4 0 0 1 4-4h4a4 4 0 0 1 4 4v2h4a1 1 0 0 1 .986 1.164l-1.582 9.494A4 4 0 0 1 17.46 22H6.54a4 4 0 0 1-3.945-3.342L1.014 9.164A1 1 0 0 1 2 8h4V6Zm2 2h5a1 1 0 1 1 0 2H3.18l1.389 8.329A2 2 0 0 0 6.54 20h10.92a2 2 0 0 0 1.972-1.671L20.82 10H17a1 1 0 0 1-1-1V6a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v2Z"></path>
                            </svg>
                            <span>Корзина</span>
                            <?php
                            $checkTotals = WC()->cart->get_cart_contents_count();
                            if ($checkTotals != 0) {
                                echo ("<p>" . $checkTotals . "</p>");
                            } else {
                                echo '';
                            }
                            ?>
                        </a>
                        <?php if (is_user_logged_in()) {
                        ?>
                            <button class="open-popup-header" href="<?php echo wc_get_page_permalink('myaccount'); ?>">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" class="ayb9">
                                    <path fill="" d="M8 11a1 1 0 1 1-2 0 1 1 0 0 1 2 0Zm10 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0Zm-8.3 4.286c.016.015.185.165.5.323.376.187.971.391 1.8.391.829 0 1.425-.204 1.8-.391.175-.088.355-.19.5-.323a1 1 0 0 1 1.407 1.421C15.587 16.827 14.357 18 12 18c-2.358 0-3.587-1.173-3.707-1.293A1 1 0 0 1 9.7 15.286Z"></path>
                                    <path fill="" d="M11 2a1 1 0 0 1 1-1c6.075 0 11 4.925 11 11s-4.925 11-11 11S1 18.075 1 12a11 11 0 0 1 6.23-9.914 1 1 0 0 1 1.36.524c.292.72.69 1.565 1.362 2.233C10.592 5.481 11.524 6 13 6a1 1 0 1 1 0 2c-2.024 0-3.458-.743-4.459-1.74-.6-.596-1.027-1.267-1.34-1.875A9 9 0 1 0 12 3a1 1 0 0 1-1.001-1Z"></path>
                                </svg>

                                <span><?php if (is_user_logged_in()) {
                                            $current_user = wp_get_current_user();
                                            echo ($current_user->display_name);
                                        } else {
                                            echo "Войти";
                                        } ?></span>
                            </button>

                        <?php
                        } else {
                        ?>
                            <button class="<?php if (!is_user_logged_in()) {
                                                echo 'login-link';
                                            } ?>" href="<?php echo wc_get_page_permalink('myaccount'); ?>">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" class="ayb9">
                                    <path fill="" d="M8 11a1 1 0 1 1-2 0 1 1 0 0 1 2 0Zm10 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0Zm-8.3 4.286c.016.015.185.165.5.323.376.187.971.391 1.8.391.829 0 1.425-.204 1.8-.391.175-.088.355-.19.5-.323a1 1 0 0 1 1.407 1.421C15.587 16.827 14.357 18 12 18c-2.358 0-3.587-1.173-3.707-1.293A1 1 0 0 1 9.7 15.286Z"></path>
                                    <path fill="" d="M11 2a1 1 0 0 1 1-1c6.075 0 11 4.925 11 11s-4.925 11-11 11S1 18.075 1 12a11 11 0 0 1 6.23-9.914 1 1 0 0 1 1.36.524c.292.72.69 1.565 1.362 2.233C10.592 5.481 11.524 6 13 6a1 1 0 1 1 0 2c-2.024 0-3.458-.743-4.459-1.74-.6-.596-1.027-1.267-1.34-1.875A9 9 0 1 0 12 3a1 1 0 0 1-1.001-1Z"></path>
                                </svg>

                                <span><?php if (is_user_logged_in()) {
                                            $current_user = wp_get_current_user();
                                            echo ($current_user->display_name);
                                        } else {
                                            echo "Войти";
                                        } ?></span>
                            </button>
                        <?php
                        } ?>
                    </div>
                </div>
                <!-- средняя строка шапки - старт -->

                <div class="menu-calog">
                    <a title="Смотреть все товары" href="<?php echo wc_get_page_permalink('shop'); ?>">
                        <h2>Каталог
                            <span><?php do_action('hook_count_all_products'); ?> </span>
                        </h2>
                    </a>
                    <?php

                    wp_nav_menu([
                        'theme_location'  => '',
                        'menu'            => 'menu-catalog',
                        'container'       => '',
                        'container_class' => '',
                        'container_id'    => '',
                        'menu_class'      => 'menu',
                        'menu_id'         => '',
                        'echo'            => true,
                        'fallback_cb'     => 'wp_page_menu',
                        'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                        'depth'           => 0,
                        'walker'          => '',
                    ]);

                    ?>
                </div>
                <div class="header__popup">
                    <div class="header__popup-item">
                        <div class="header__popup-item-head">
                            <p>
                                Личный кабинет
                            </p>
                            <?php if (is_user_logged_in()) { ?>

                                <?php $last_name =  $current_user->last_name; ?>
                                <span class="header_user-name"><?php echo $current_user->first_name . ' ' . mb_substr($last_name, 0, 1, 'UTF-8') . '.' ?></span>
                                <span class="header_user-email"><?php
                                                                $current_user = wp_get_current_user();
                                                                echo $current_user->user_email;
                                                                ?></span>

                            <?php
                            }?>
                            <span class="header_user-phone">Номер недоступен</span>
                        </div>
                        <div class="header__popup-item-link">
                            <a href="<?php echo wc_get_page_permalink('myaccount'); ?>">
                                <span>
                                    Мои профиль
                                </span>
                                <div class="img">
                                    <svg width="26" height="25" viewBox="0 0 26 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12.9987 3.09591C14.8354 3.09591 16.3237 4.54508 16.3237 6.33341C16.3237 8.12175 14.8354 9.57091 12.9987 9.57091C11.162 9.57091 9.6737 8.12175 9.6737 6.33341C9.6737 4.54508 11.162 3.09591 12.9987 3.09591ZM12.9987 16.9709C17.7012 16.9709 22.657 19.2217 22.657 20.2084V21.9042H3.34036V20.2084C3.34036 19.2217 8.2962 16.9709 12.9987 16.9709ZM12.9987 0.166748C9.49953 0.166748 6.66536 2.92633 6.66536 6.33341C6.66536 9.7405 9.49953 12.5001 12.9987 12.5001C16.4979 12.5001 19.332 9.7405 19.332 6.33341C19.332 2.92633 16.4979 0.166748 12.9987 0.166748ZM12.9987 14.0417C8.7712 14.0417 0.332031 16.1076 0.332031 20.2084V24.8334H25.6654V20.2084C25.6654 16.1076 17.2262 14.0417 12.9987 14.0417Z" fill="black" fill-opacity="0.87" />
                                    </svg>
                                </div>
                            </a>
                        </div>
                        <div class="header__popup-item-link">
                            <a href="<?php echo wc_get_page_permalink('myaccount'); ?>orders/">
                                <span>
                                    Мои заказы
                                </span>
                                <div class="img">
                                    <svg width="25" height="27" viewBox="0 0 25 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12.4862 22.7201L2.3525 15.0801L0.125 16.7601L12.5 26.0934L24.875 16.7601L22.6338 15.0667L12.4862 22.7201ZM12.5 19.3334L22.62 11.6934L24.875 10.0001L12.5 0.666748L0.125 10.0001L2.36625 11.6934L12.5 19.3334Z" fill="black" />
                                    </svg>
                                </div>
                            </a>
                        </div>
                        <div class="header__popup-item-link">
                            <a href="#">
                                <span>
                                    Документы
                                </span>
                                <div class="img">
                                    <svg width="16" height="21" viewBox="0 0 16 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10 0.0830078H2C0.9 0.0830078 0.0100002 1.02051 0.0100002 2.16634L0 18.833C0 19.9788 0.89 20.9163 1.99 20.9163H14C15.1 20.9163 16 19.9788 16 18.833V6.33301L10 0.0830078ZM12 16.7497H4V14.6663H12V16.7497ZM12 12.583H4V10.4997H12V12.583ZM9 7.37467V1.64551L14.5 7.37467H9Z" fill="black" fill-opacity="0.87" />
                                    </svg>
                                </div>
                            </a>
                        </div>
                        <div class="header__popup-item-link">
                            <a href="<?php echo wc_get_page_permalink('myaccount'); ?>company/">
                                <span>
                                    Моя компания
                                </span>
                                <div class="img">
                                    <svg width="25" height="22" viewBox="0 0 25 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10 15.8889V14.6667H1.2625L1.25 19.5556C1.25 20.9122 2.3625 22 3.75 22H21.25C22.6375 22 23.75 20.9122 23.75 19.5556V14.6667H15V15.8889H10ZM22.5 4.88889H17.4875V2.44444L14.9875 0H9.9875L7.4875 2.44444V4.88889H2.5C1.125 4.88889 0 5.98889 0 7.33333V11C0 12.3567 1.1125 13.4444 2.5 13.4444H10V11H15V13.4444H22.5C23.875 13.4444 25 12.3444 25 11V7.33333C25 5.98889 23.875 4.88889 22.5 4.88889ZM15 4.88889H10V2.44444H15V4.88889Z" fill="#333333" />
                                    </svg>
                                </div>
                            </a>
                        </div>
                        <div class="header__popup-item-link">
                            <a href="<?php echo wc_get_page_permalink('myaccount'); ?>edit-address/">
                                <span>
                                    Адреса доставки
                                </span>
                                <div class="img">
                                    <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M21.7708 0.625L21.5775 0.66125L15.125 3.1625L7.875 0.625L1.06 2.92083C0.80625 3.00542 0.625 3.22292 0.625 3.50083V21.7708C0.625 22.1092 0.890833 22.375 1.22917 22.375L1.4225 22.3387L7.875 19.8375L15.125 22.375L21.94 20.0792C22.1938 19.9946 22.375 19.7771 22.375 19.4992V1.22917C22.375 0.890833 22.1092 0.625 21.7708 0.625ZM15.125 19.9583L7.875 17.4088V3.04167L15.125 5.59125V19.9583Z" fill="black" fill-opacity="0.87" />
                                    </svg>
                                </div>
                            </a>
                        </div>
                        <div class="header__popup-item-link">
                            <a href="<?php echo wc_get_page_permalink('myaccount'); ?>my-wishlist/">
                                <span>
                                    Мои списки
                                </span>
                                <div class="img">
                                    <svg width="23" height="21" viewBox="0 0 23 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11.5 21L9.8325 19.4894C3.91 14.145 0 10.6202 0 6.29428C0 2.76948 2.783 0 6.325 0C8.326 0 10.2465 0.926976 11.5 2.39183C12.7535 0.926976 14.674 0 16.675 0C20.217 0 23 2.76948 23 6.29428C23 10.6202 19.09 14.145 13.1675 19.5008L11.5 21Z" fill="#333333" />
                                    </svg>
                                </div>
                            </a>
                        </div>

                        <div class="header__popup-item-link">
                            <a class="exit-link" href="<?php echo wp_logout_url(home_url()) ?>">
                                <span>
                                    Выход
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <nav class="mobile-bar">
            <ul>
                <li>
                    <a class="home-ico" href="<?php echo get_home_url(); ?>">
                        Главная
                    </a>
                </li>
                <li>
                    <a class="catalog-ico" href="<?php echo wc_get_page_permalink('shop'); ?>">
                        Каталог
                    </a>
                </li>
                <li>
                    <a class="cart-ico" href="<?php echo wc_get_page_permalink('cart'); ?>">
                        Корзина
                    </a>
                </li>
                <li>
                    <a class="profile-ico" href="<?php echo wc_get_page_permalink('myaccount'); ?>">
                        <?php if (is_user_logged_in()) {
                            echo ($current_user->display_name);
                        } else {
                            echo "Войти";
                        } ?>
                    </a>
                </li>
            </ul>
        </nav>