<?php include('header.php');?>
<div class="grid">
	<div class="col-3">
		<div class="left-block">
			<?php include('filter.php');?>
			<?php include('left-menu.php');?>
			<?php include('dop-menu.php');?>
		</div>
	</div>
	
	<div class="col">
		<div class="breadcrumbs">
			<a class="brdcmb-link" href="home.php">Главная</a> - 
			<a class="brdcmb-link" href="catalog.php">Каталог</a> - 
			<a class="brdcmb-link" href="category.php">Заготовки для творчества</a> - 
			<a class="brdcmb-link" href="category.php">Канцтовары</a> - 
			<span class="brdcmb-curpage">Визитницы-бюро</span>
		</div>
		<div class="page-title">Каталог</div>
		<div class="catalog grid-3-equalHeight" ng-controller="productsCtrl">
			<div class="col tile" ng-repeat="product in products">
				<div class="card product-card {{product.label}}">
					<a class="card-img grid-column-center-middle-noGutter" href="product__single.php">
						<img class="product-img" ng-src="{{product.image}}"/>
						<div ng-if="product.label" class="label label-{{product.label}}"></div>
					</a>
					<div class="card-content product-info">
						<div class="card-title product-name"><a class="item-link center-align" href="product__single.php">{{product.name}}</a></div>
						<div class="product-articul xsmall-text violet-color">{{product.articul}}</div>
						<div class="grid-noGutter product-price-box">
							<div class="product-optprice bold">{{product.optprice}} <span class="ruble">c</span></div>
							<div class="product-price">{{product.price}} <span class="ruble">a</span><div class="xsmall-text note-text">розн. цена</div></div>
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
		<button class="btn standart fullwidth show-more">Показать все</button>
		<?php include('pagination.php'); ?>
		<div class="text-box">
			<p>Наличие собственной мастерской по производству товаров для творчества, оснащенной современным технологичным оборудованием, позволяет не только постоянно расширять ассортиментный перечень деревянных заготовок, реагируя на запросы рынка товаров для творчества, но и увеличивать количество производимых товаров без ущерба для качества.</p>
			<p>Мы тщательно следит за качеством производимых деревянных изделий и их безопасностью. Заготовки производятся только из сертифицированных материалов. Влажность дерева контролируется электронными влагомерами. Мы производим, а не перепродает деревянные заготовки. Тем самым из цепочки исключаются множественные звенья всех производимых заготовок из дерева.</p>
		</div>
	</div>
</div>
<?php include('footer.php');?>