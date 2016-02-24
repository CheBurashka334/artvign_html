<?php include('header.php');?>
<div class="grid">
	<div class="col-3"><?php include('filter.php');?></div>
	<div class="col">
		<div class="breadcrumbs">
			<a class="brdcmb-link" href="#">Главная</a> - 
			<span class="brdcmb-curpage">Каталог</span>
		</div>
		<div class="page-title">Каталог</div>
		<div class="catalog grid-3-equalHeight" ng-controller="categoryCtrl">
			<div class="col tile" ng-repeat="category in categories">
				<div class="card category-card">
					<a class="card-img grid-column-center-middle-noGutter" href="category.php">
						<img ng-src="{{category.image}}"/>
					</a>
					<div class="card-title title-overlay grid-column-center-middle-noGutter"><a class="item-link center-align" href="category.php">{{category.name}}</a></div>
				</div>
			</div>
		</div>
		<div class="text-box">
			<p>Наличие собственной мастерской по производству товаров для творчества, оснащенной современным технологичным оборудованием, позволяет не только постоянно расширять ассортиментный перечень деревянных заготовок, реагируя на запросы рынка товаров для творчества, но и увеличивать количество производимых товаров без ущерба для качества.</p>
			<p>Мы тщательно следит за качеством производимых деревянных изделий и их безопасностью. Заготовки производятся только из сертифицированных материалов. Влажность дерева контролируется электронными влагомерами. Мы производим, а не перепродает деревянные заготовки. Тем самым из цепочки исключаются множественные звенья всех производимых заготовок из дерева.</p>
		</div>
	</div>
</div>
<?php include('footer.php');?>