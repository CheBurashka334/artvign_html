<div class="filter">
	<ul class="filters-list collapsible" data-collapsible="expandable">
		<li>
			<div class="collapsible-header active">Тип</div>
			<div class="collapsible-body">
				<div class="collapsible-body-content">
					<p class="range-field">
						<input type="checkbox" id="type-1" class="custom" />
						<label class="checkbox-lbl" for="type-1">Сетевые (20)</label>
					</p>
					<p class="range-field">
						<input type="checkbox" id="type-2" class="custom" />
						<label class="checkbox-lbl" for="type-2">Аккумуляторные (30)</label>
					</p>
				</div>
			</div>
		</li>
		<li>
			<!-- .active - по умолчанию развернуто -->
			<div class="collapsible-header active">Бренд</div>
			<div class="collapsible-body">
				<!-- если больше, чем data-show - .toggle-content-box, data-show - нужное количество, чтоб можно было настраивать в настройках компонента/фильтра, data-state - состояние по умолчанию (less/more) -->
				<div class="collapsible-body-content toggle-content-box" data-show="5" data-state="less">
					<p class="range-field">
						<input type="checkbox" id="brend-1" class="custom" />
						<label class="checkbox-lbl" for="brend-1">Bosch (10)</label>
					</p>
					<p class="range-field">
						<input type="checkbox" id="brend-2" class="custom" />
						<label class="checkbox-lbl" for="brend-2">Makita (4)</label>
					</p>
					<p class="range-field">
						<input type="checkbox" id="brend-3" class="custom" />
						<label class="checkbox-lbl" for="brend-3">Зубр (3)</label>
					</p>
					<p class="range-field">
						<input type="checkbox" id="brend-4" class="custom" />
						<label class="checkbox-lbl" for="brend-4">AEG (4)</label>
					</p>
					<p class="range-field">
						<input type="checkbox" id="brend-4" class="custom" />
						<label class="checkbox-lbl" for="brend-4">Hitachi (4)</label>
					</p>
					<p class="range-field">
						<input type="checkbox" id="brend-4" class="custom" />
						<label class="checkbox-lbl" for="brend-4">Интерскол (5)</label>
					</p>
					<p class="range-field">
						<input type="checkbox" id="brend-4" class="custom" />
						<label class="checkbox-lbl" for="brend-4">FEIN (2)</label>
					</p>
					<!-- если больше, чем data-show -->
					<div class="show-buttons">
						<button class="btn-link show-more">Показать все</button>
						<button class="btn-link show-less">Свернуть</button>
					</div>
				</div>
			</div>
		</li>
		<li>
			<div class="collapsible-header active">Тип патрона</div>
			<div class="collapsible-body">
				<div class="collapsible-body-content">
					<p class="range-field">
						<input type="checkbox" id="diagonal-1" class="custom" />
						<label class="checkbox-lbl" for="diagonal-1">Быстрозажимной (4)</label>
					</p>
					<p class="range-field">
						<input type="checkbox" id="diagonal-2" class="custom" />
						<label class="checkbox-lbl" for="diagonal-2">Квадрат 1’’ (6)</label>
					</p>
					<p class="range-field">
						<input type="checkbox" id="diagonal-3" class="custom" />
						<label class="checkbox-lbl" for="diagonal-3">Квадрат 1/2’’ (3)</label>
					</p>
					<p class="range-field">
						<input type="checkbox" id="check-4" class="custom" />
						<label class="checkbox-lbl" for="diagonal-4">Ключевой (4)</label>
					</p>
					<p class="range-field">
						<input type="checkbox" id="check-4" class="custom" />
						<label class="checkbox-lbl" for="diagonal-4">Под биты (3)</label>
					</p>
				</div>
			</div>
		</li>
		<li>
			<div class="collapsible-header">Диаметр патрона</div>
			<div class="collapsible-body">
				<div class="collapsible-body-content">
					<p class="range-field">
						<input type="checkbox" id="check-1" class="custom" />
						<label class="checkbox-lbl" for="check-1">Да (3)</label>
					</p>
				</div>
			</div>
		</li>
		<li>
			<div class="collapsible-header">Мощность</div>
			<div class="collapsible-body">
				<div class="collapsible-body-content">
					<p class="range-field">
						<input type="checkbox" id="check-1" class="custom" />
						<label class="checkbox-lbl" for="check-1">Да (3)</label>
					</p>
				</div>
			</div>
		</li>
		<li>
			<div class="collapsible-header">Макс. крутящий момент</div>
			<div class="collapsible-body">
				<div class="collapsible-body-content">
					<p class="range-field">
						<input type="checkbox" id="check-1" class="custom" />
						<label class="checkbox-lbl" for="check-1">Да (3)</label>
					</p>
				</div>
			</div>
		</li>
		<li>
			<div class="collapsible-header">Цена</div>
			<div class="collapsible-body">
				<div class="collapsible-body-content">
					<div class="range-field price">
						<div class="price-min">
							<input class="min-value inputtext-small" type="text" name="arrFilter_P1_MIN" id="arrFilter_P1_MIN">
							<label class="textfield-placeholder" for="arrFilter_P1_MIN">6 060</label>
							<span class="lbl-text">от</span>
						</div>
						<div class="price-max">
							<input class="max-value inputtext-small" type="text" name="arrFilter_P1_MAX" id="arrFilter_P1_MAX">
							<label class="textfield-placeholder" for="arrFilter_P1_MAX">19 060</label>
							<span class="lbl-text">до</span>
						</div>
					</div>
				</div>
			</div>
		</li>
	</ul>
	<div class="actions">
		<button class="btn standart-color mediumsize center">Сбросить</button>
	</div>
</div>