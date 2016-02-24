<?php include('header.php');?>
<div class="breadcrumbs">
	<a class="brdcmb-link" href="home.php">Главная</a> - 
	<a class="brdcmb-link" href="catalog.php">Каталог</a> - 
	<a class="brdcmb-link" href="category.php">Заготовки для творчества</a> - 
	<a class="brdcmb-link" href="category.php">Канцтовары</a> - 
	<span class="brdcmb-curpage">Лоток-накопитель</span>
</div>
<div class="product-page grid">
	<div class="product-imgs col-6">
		<div class="full-img"><img src="images/products/product-full.jpg"/></div>
		<div class="carousel carousel-thumbs" data-target="4">
			<div class="carousel-inner">
				<div class="carousel-item">
					<!-- ссылка на большое изображение -->
					<a class="item thumb-link img-link active" href="images/products/product-full.jpg">
						<!-- миниатюра -->
						<img class="thumb-img" src="images/products/love.jpg"/>
					</a>
				</div>
				<div class="carousel-item">
					<a class="item thumb-link img-link" href="images/products/product-full.jpg">
						<img class="thumb-img" src="images/products/love.jpg"/>
					</a>
				</div>
				<div class="carousel-item">
					<a class="item thumb-link img-link" href="images/products/product-full.jpg">
						<img class="thumb-img" src="images/products/love.jpg"/>
					</a>
				</div>
				<div class="carousel-item">
					<a class="item thumb-link img-link" href="images/products/product-full.jpg">
						<img class="thumb-img" src="images/products/love.jpg"/>
					</a>
				</div>
				<div class="carousel-item">
					<a class="item thumb-link img-link" href="images/products/product-full.jpg">
						<img class="thumb-img" src="images/products/love.jpg"/>
					</a>
				</div>
				<div class="carousel-item">
					<a class="item thumb-link img-link" href="images/products/product-full.jpg">
						<img class="thumb-img" src="images/products/love.jpg"/>
					</a>
				</div>
			</div>
			<div class="carousel-controlls">
				<button class="carousel-prev"><svg class="icon"><use xlink:href="#arrow"/></svg></button>
				<button class="carousel-next"><svg class="icon"><use xlink:href="#arrow"/></svg></button>
			</div>
		</div>
	</div>
	<div class="product-info col-6">
		<h1 class="product-title large-text">Лоток-накопитель</h1>
		<div class="articul violet-color">Артикул: 2585-56</div>
		<div class="series light-color">Серия «Голландский»</div>
		<div class="product-price-box">
			<div class="price old-price light-color">125&nbsp;&#8381;</div>
			<div class="price product-optprice bold">100&nbsp;&#8381;</div>
			<div class="price old-price light-color">150&nbsp;&#8381;</div>
			<div class="price product-price">120&nbsp;&#8381; <span class="xsmall-text note-text">розн. цена</span></div>
		</div>
		<div class="action-box grid-noGutter-spaceAround">
			<div class="product-quantity-box">
					<button class="btn sueare btn-minus"><svg class="icon"><use xlink:href="#minus"/></svg></button>
					<input type="text" class="inputtext input-quantity" value="0"/>
					<button class="btn sueare btn-plus"><svg class="icon"><use xlink:href="#plus"/></svg></button>
				</div>
			<div class="action-buttons">
				<a class="btn primary mediumsize" href="#">В корзину</a>
				<button class="btn standart white-bg mediumsize btn-modal" data-modal="one-click-form_product-id">Купить в 1 клик</button>
			</div>
		</div>
		<div class="product-categories small-text">
			Категория: <a href="#">лотки-накопители</a>, <a href="#">на день рождения</a>
		</div>
		<div class="product-desc">
			<p>Лоток идеально подходит для стола школьника или учителя в школах. Запах древесины позволяет во время работы почувствовать себя в сосновом лесу. </p>
		</div>
		<dl class="params-list">
			<dt>Материал:</dt> <dd>Фанера березовая шлифованная ФК</dd></br>
			<dt>Толщина:</dt> <dd>3 мм</dd></br>
			<dt>Упаковка:</dt> <dd>термоусадка</dd></br>
			<dt>Транспортная упаковка:</dt> <dd>гофрокороб</dd>
		</dl>
	</div>
</div>
<div class="relative-products grid-column" ng-controller="productsCtrl">
	<div class="box-title title-h2 col">Похожие товары</div>
	<div class="carousel products-carousel col" data-target="4">
		<div class="carousel-inner">
			<div class="col-3 tile carousel-item" ng-repeat="product in products">
				<div class="card product-card">
					<a class="card-img grid-column-center-middle-noGutter" href="product__single.php">
						<img class="product-img" ng-src="{{product.image}}"/>
						<div ng-if="product.label" class="label label-{{product.label}}"></div>
					</a>
					<div class="card-content product-info">
						<div class="card-title product-name"><a class="item-link center-align" href="product__single.php">{{product.name}}</a></div>
						<div class="product-articul xsmall-text violet-color">{{product.articul}}</div>
						<div class="grid-noGutter product-price-box">
							<div class="product-optprice bold">{{product.optprice}} &#8381;</div>
							<div class="product-price">{{product.price}} &#8381;<div class="xsmall-text note-text">розн. цена</div></div>
							<div class="product-actions">
								<button class="btn js-add-to-cart btn-add-to-cart square primary"><svg class="icon"><use xlink:href="#cart"/></svg></button>
								<div class="product-quantity-box">
									<button class="btn sueare btn-minus"><svg class="icon"><use xlink:href="#minus"/></svg></button>
									<input type="text" class="inputtext input-quantity" value="0"/>
									<button class="btn sueare btn-plus"><svg class="icon"><use xlink:href="#plus"/></svg></button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="carousel-controlls">
				<button class="carousel-prev"><svg class="icon"><use xlink:href="#arrow"/></svg></button>
				<button class="carousel-next"><svg class="icon"><use xlink:href="#arrow"/></svg></button>
			</div>
	</div>
</div>

<div class="one-click-form-box modal" id="one-click-form_product-id">
	<button class="btn-close-modal btn btn-icon btn-close"><svg class="icon"><use xlink:href="#cross"/></svg></button>
	<div class="modal-content">
		<div class="title">Купить в 1 клик</div>
		<p class="note-text">Укажите Ваши данные, и наш менеджер свяжется с Вами для оформления заказа.</p>
		<div class="table-field">
			<span class="label">Имя</span>
			<div class="field"><input type="text"/></div>
		</div>
		<div class="table-field">
			<span class="label">Телефон</span>
			<div class="field"><input type="tel"/></div>
		</div>
		<div class="table-field time-field">
		<span class="label">Удобное время для звонка:</span>
			<div class="first-field">
				<input type="radio" name="usertype" value="v1" id="time-v1"/>
				<label class="radio-lbl" for="time-v1">8:00 - 12:00</label>
			</div>
			<div class="field">
				<input type="radio" checked name="usertype" value="v2" id="time-v2"/>
				<label class="radio-lbl" for="time-v2">12:00 - 18:00</label>
			</div>
		</div>
		<button class="btn primary big bigsize center">Купить</button>
	</div>
</div>
<?php include('footer.php');?>