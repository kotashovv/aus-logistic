<?php
/** @var array $args */
$a            = 1;
$warehouse_id = auss_get_warehouse_id();
?>

<div class="popup">
	<div class="popup__body">
		<div class="popup__item popup-item1">
			<button class="close-popup">
			</button>
			<h3>
				С какого склада отгрузить?
			</h3>
			<p>
				Выберите склад, чтобы составить заказ
			</p>

			<form action="#" class="form-sklad">
                            <span class="subtext">
                                Вы все еще не выбрали склад
                            </span>
				<?php foreach ( $args as $id => $warehouse ): ?>
					<?php $classes = ( $warehouse_id === $id ) ? 'active' : ''; ?>
					<label class="<?php echo $classes; ?>">
						<input type="radio" name="option-sklad"
							   value="<?php echo $warehouse['Адрес']['Город'] ?? 'Артём'; ?>"
							   data-warehouse-id="<?php echo $id; ?>">
						<span></span>
						<h4>
							<?php echo $warehouse['Адрес']['Город'] ?? 'Артём'; ?>
						</h4>
						<p>
							<?php
							echo $warehouse['Контакты'][1]['Почта'] ?? '';
							?>
						</p>
						<p>
							Способы отгрузки: доставка и самовывоз
						</p>
					</label>
				<?php endforeach; ?>
				<span>
                                В процессе набора товара и заказа вы сможете сменить склад отгрузки на нужный
                            </span>
				<button class="main-btn auss_choose_warehouse" type="submin">Выбрать</button>
			</form>

		</div>
	</div>
</div>
