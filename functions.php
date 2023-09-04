<?php

function mytheme_add_woocommerce_support()
{
    add_theme_support('woocommerce');
}

add_action('after_setup_theme', 'mytheme_add_woocommerce_support');

// подключение стилей и скриптов
add_action('wp_enqueue_scripts', 'theme_name_scripts');

// поддержка меню
add_theme_support('menus');

// add_action('wp_print_styles', 'theme_name_scripts'); // можно использовать этот хук он более поздний
function theme_name_scripts()
{
    // версия сайта
    $versionSite = '2.1.7';
    wp_enqueue_style('bundle-swiper-css', get_template_directory_uri() . '/assets/libs/swiper-bundle.min.css', [], $versionSite, '');
    wp_enqueue_style('no-slider-css', get_template_directory_uri() . '/assets/libs/nouislider.min.css', [], $versionSite, '');
    wp_enqueue_style('main-style', get_stylesheet_uri(), [], $versionSite);
    wp_enqueue_script('no-slider-js', get_template_directory_uri() . '/assets/libs/nouislider.min.js', [], $versionSite, true);
    wp_enqueue_script('fancybox', 'https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js', [], $versionSite, true);
    wp_enqueue_script('swiper-bundle-js', get_template_directory_uri() . '/assets/libs/swiper-bundle.min.js', [], $versionSite, true);
    wp_enqueue_script('main-script', get_template_directory_uri() . '/app.js', [
        'swiper-bundle-js',
        'no-slider-js',
        'fancybox',
    ], $versionSite, true);
}


// количество отображаемых товаров
add_filter("loop_shop_per_page", function ($cols) {
    return 16;
}, 20);


add_filter('woocommerce_product_loop_start', 'mytheme_product_loop_start');
function mytheme_product_loop_start()
{
?>
    <ul class="catalog__body columns-<?php echo esc_attr(wc_get_loop_prop('columns')); ?>">
    <?php
}

// Вывод общего количества товаров
add_action('hook_count_all_products', 'my_count_all_products');
function my_count_all_products()
{
    $args     = ['post_type' => 'product', 'post_status' => 'publish', 'posts_per_page' => -1];
    $products = new WP_Query($args);
    echo 'Всего ' . $products->found_posts . ' товара(ов)';
}

add_action('wp_footer', 'popupWindow');

function popupWindow()
{
    get_template_part('template-parts/warehouse', 'popup', auss_get_warehouses());
}


add_action('wp_footer', 'ajax_button_text_js_script');
function ajax_button_text_js_script()
{
    $text = __('Добавлено', 'woocommerce');
    ?>
        <script>
            jQuery(function($) {
                var text = '<?php echo $text; ?>',
                    $this;

                $(document.body).on('click', '.ajax_add_to_cart', function(event) {
                    $this = $(this);
                });

                $(document.body).on('added_to_cart', function(event, b, data) {
                    var buttonText = '<span class="add_to_cart_text product-is-added">' + text + '</span><i class="cart-icon"></i>';

                    $this.html(buttonText).attr('data-tip', text);
                });
            });
        </script>
    <?php
}


// подключаем панель виджетов
function register_my_widgets()
{
    register_sidebar([
        'name' => 'Панель управления Рекламой',
        'id' => 'homepage-sidebar',
        'description' => 'Рекламный блок',
        'before_widget' => '<li class="homepage-widget-block">',
        'after_widget' => '</li>',
        'before_title' => '<h2 class="widgettitle">',
        'after_title' => '</h2>',
    ]);
}
add_action('widgets_init', 'register_my_widgets');

add_action('init', 'woocommerce_clear_cart_url');


function woocommerce_clear_cart_url()
{
    global $woocommerce;
    if (isset($_REQUEST['clear-cart'])) {
        $woocommerce->cart->empty_cart();
    }
    
    // // получаем запрос на удаление выделенных товаров
    // if (isset($_POST['delete-select'])) {
    //     // собираем массив
    //     $product_ids = $_POST['product_id'];
    //     // запускаем цикл 
    //     foreach ($product_ids as $product_id) {
    //         // получаем айди корзины
    //         $product_cart_id = $woocommerce->cart->generate_cart_id($product_id);
    //         // получаем ключ товара в корзине
    //         $cart_item_key = WC()->cart->find_product_in_cart($product_cart_id);
    //         // если такой есть удаляем его
    //         if ($cart_item_key) {
    //             $woocommerce->cart->remove_cart_item($cart_item_key);
    //         }
    //     }
    // };
    
}





/**
 * @return false|mixed|null
 */ function auss_get_warehouses()
{
    // получим набор складов
    $stocks = get_option('all_1c_stocks', []);
    return $stocks ?: [];
}


// function product_shop( $q ) {

//     if ( !$q->is_post_type_archive() ) return;
//     $q->set( 'tax_query', array(array(
//     'taxonomy' => 'product_cat',
//     'field' => 'slug',
//     'terms' => array( 'collections' ),
//     'operator' => 'IN'
//     )));

//     }
//     add_action( 'woocommerce_product_query', 'product_shop', 10, 2 );

/*
$pageNumber = $_POST['page'];

// Здесь вы можете написать код для выборки товаров из базы данных

// Генерируем HTML-код с новыми товарами
$html = '';
foreach ($products as $product) {
  $html .= '<div class="rec__item">' . $product['name'] . '</div>';
}

// Отправляем HTML-код клиенту
echo $html;*/

// Создание шорткода для кнопки "Возобновить заказ"
add_shortcode('resume_order_button', 'resume_order_button_shortcode');
function resume_order_button_shortcode($atts) {
    $atts = shortcode_atts(array(
        'order_id' => '',
    ), $atts, 'resume_order_button');

    $order_id = intval($atts['order_id']);
    $order = wc_get_order($order_id);

    if (!$order || $order->get_status() !== 'on-hold') {
        return '';
    }

    $resume_url = wp_nonce_url(add_query_arg('resume_order', $order_id), 'resume_order');
    return '<a href="' . $resume_url . '" class="button refresh-order">Возобновить заказ</a>';
}

// Обработка возобновления заказа
add_action('init', 'resume_order');
function resume_order() {
    if (isset($_GET['resume_order']) && isset($_GET['_wpnonce'])) {
        if (wp_verify_nonce($_GET['_wpnonce'], 'resume_order')) {
            $order_id = intval($_GET['resume_order']);
            $order = wc_get_order($order_id);

            if ($order && $order->get_status() === 'on-hold') {
                $order->update_status('pending', __('Order resumed by customer.', 'your-text-domain'));
                wp_safe_redirect(wc_get_account_endpoint_url('orders'));
                exit;
            }
        }
    }
}


/*add_action('login_form_register', function(){
    if(isset($_POST['user_login']) && isset($_POST['user_email']) && !empty($_POST['user_email'])){
        $_POST['user_login'] = $_POST['user_email'];
    }
});*/


/*function custom_register_user($user_id) {
    if ( isset($_POST['user_pwd']) && !empty($_POST['user_pwd']) ) {
        $password = $_POST['user_pwd'];
        wp_set_password($password, $user_id);
    }

    if (isset($_POST['first_name'])) {
        update_user_meta($user_id, 'first_name', sanitize_text_field($_POST['first_name']));
    }
    if (isset($_POST['last_name'])) {
        update_user_meta($user_id, 'last_name', sanitize_text_field($_POST['last_name']));
    }
    if (isset($_POST['billing_phone'])) {
        update_user_meta($user_id, 'billing_phone', sanitize_text_field($_POST['billing_phone']));
    }

    //$customer = \WC_Customer();
    //$user_id = wc_create_new_customer( $email, $username, $password );
}

add_action('user_register', 'custom_register_user');*/

