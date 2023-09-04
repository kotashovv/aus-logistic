<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

// Ensure visibility.
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}

$base_url     = $_SERVER['REQUEST_URI'];
$warehouses   = auss_get_warehouses();
$warehouse    = auss_get_warehouse();
$warehouse_id = auss_get_warehouse_id();
?>

<div <?php wc_product_class( 'rec__item', $product ); ?>>
    <div class="rec__btn-wish">
        <?php echo do_shortcode( '[yith_wcwl_add_to_wishlist]' ); ?>
    </div>
	<a href="<?php the_permalink(); ?>" class="rec__img">

		<?php

		/**
		 * Hook: woocommerce_before_shop_loop_item_title.
		 *
		 * @hooked woocommerce_show_product_loop_sale_flash - 10
		 * @hooked woocommerce_template_loop_product_thumbnail - 10
		 */
		do_action( 'woocommerce_before_shop_loop_item_title' );


		?>
	</a>
	<!-- <div class="old-price">
		<p>
			-15%<span>827 р</span>
		</p>
	</div> -->

	<div class="rec__item-wrap">

		<div class="rec__price">
			<div class="offer-price">
				<p><?php woocommerce_template_loop_price(); ?></p>
				<span>Цена на опт</span>
			</div>
			<!-- <div class="norm-price">
				<span>500 Р</span>
				<span>Средняя цена</span>
			</div> -->
		</div>
		<!-- <div class="rec__tag">
			<span>Бестселлер</span>
		</div> -->
		<div class="rec__name">
			<a href="<?php the_permalink(); ?>">
				<h2><?php echo $product->get_title(); ?></h2>
			</a>
			<div class="rec__price">
				<div class="offer-price">
					<p><?php woocommerce_template_loop_price(); ?></p>
					<span>Цена на опт</span>
				</div>
				<!-- <div class="norm-price">
					<span>500 Р</span>
					<span>Средняя цена</span>
				</div> -->
			</div>
		</div>
        <div class="rec__quant">
            <?php 
            if ( ! $product->get_attribute( 'tovarnyh-edinits-v-korobke' ) == null ) {
                ?>
                <span>
                    В коробке
                </span>
                    <span>
                    <?php
                    echo $product->get_attribute( 'tovarnyh-edinits-v-korobke' ) . 'шт.';
                    ?>
                </span>
                <?php
            }
            ?>
        </div>
		<div class="rec__action woo-product-action">
			<a
				data-quantity="1" ;
				data-product_id="<?php echo esc_attr( $product->get_id() ); ?>"
				data-linkprice="<?php echo '?add-to-cart=' . get_the_ID(); ?>"
				href="<?php echo $product->add_to_cart_url() ?>"
				value="<?php echo esc_attr( $product->get_id() ); ?>"
				data-product_sku="<?php echo $product->get_sku('view'); ?>"
				aria-label="Add “<?php the_title_attribute() ?>” to your cart"
				class="main-btn add-to-cart-link button product_type_simple add_to_cart_button ajax_add_to_cart">
				В корзину
			</a>
			<input class="counter-for-item" type="number" value="1" min="1" step="1">
			<!-- <button class="in-list">В список</button> -->


			<!--<div class="yith-wcwl-add-button">
                <a href="<?php echo esc_url( wp_nonce_url( add_query_arg( 'add_to_wishlist', get_the_ID(), $base_url ), 'add_to_wishlist' ) ); ?>"
                   class="in-list add_to_wishlist single_add_to_wishlist button alt"
                   data-product-id="<?php echo get_the_ID(); ?>"
                   data-product-type="simple"
                   data-original-product-id="<?php echo get_the_ID(); ?>"
                   data-title="В список"
                   rel="nofollow">
                    <i class="yith-wcwl-icon fa fa-heart-o"></i>
                    <span>В список</span>
                </a>
            </div>-->
		</div>
		<?php echo do_shortcode( '[yith_wcwl_add_to_wishlist]' ); ?>
		<div class="rec__notice">
			<button data-popup=".popup-item1" class="call-popup go-list-sklad">
				<?php
				$stock = auss_get_warehouse_stock( get_the_ID(), $warehouse_id );
				if ( $warehouse ) {
					echo 'Склад:';
					//echo 'Склад: ' . $warehouse;
					//echo '<br>';
					//echo 'В наличии: ' . $stock;
				} else {
					echo "Склад не выбран";
				}

				foreach ( $warehouses as $id => $item ) {
					$sklad   = $item['Адрес']['Город'] ?? 'Артём';
					$stock   = auss_get_warehouse_stock( get_the_ID(), $id );

					$current = $warehouse_id == $id ? " style='font-weight: bold;'" : '';
					echo "<p {$current}>{$sklad} - {$stock} шт.</p>";
				}
				?>
			</button>
		</div>
	</div>
</div>
