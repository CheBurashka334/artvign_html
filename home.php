<?php include('header.php');?>
<div class="home-menu">
	<ul class="menu horizontal-menu cond">
		<li class="menu-item"><a href="catalog.php" class="menu-link">Каталог</a></li>
		<li class="menu-item"><a href="dostavka-oplata.php" class="menu-link">Доставка и оплата</a></li>
		<li class="menu-item"><a href="prices.php" class="menu-link">Прайс</a></li>
		<li class="menu-item"><a href="contacts.php" class="menu-link">Контакты</a></li>
	</ul>
</div>
<div class="carousel home-carousel full-width" data-target="1">
	<div class="carousel-inner">
		<div class="carousel-item">
			<div class="item-img" style="background-image:url('images/slides/slide-1.jpg');"></div>
		</div>
		<div class="carousel-item">
			<div class="item-img" style="background-image:url('images/slides/slide-2.jpg');"></div>
		</div>
		<div class="carousel-item">
			<div class="item-img" style="background-image:url('images/slides/slide-3.jpg');"></div>
		</div>
	</div>
	<div class="carousel-controlls">
		<div class="container">
			<button class="carousel-prev btn-icon"><svg class="icon"><use xlink:href="#arrow"/></svg></button>
			<button class="carousel-next btn-icon"><svg class="icon"><use xlink:href="#arrow"/></svg></button>
		</div>
	</div>
	<ul class="carousel-nav"></ul>
</div>
<div class="home-pages-box grid-equalHeight" ng-controller="pageCtrl">
	<div class="col-4 tile" ng-repeat="page in pages">
		<div class="card category-card">
			<a class="card-img grid-column-center-middle-noGutter" href="{{page.link}}">
				<img ng-src="{{page.image}}"/>
			</a>
			<div class="card-title title-overlay grid-column-center-middle-noGutter"><a class="item-link center-align" href="{{page.link}}">{{page.name}}</a></div>
		</div>
	</div>
</div>
<div class="grid-center">
	<div class="col-11">
		<p class="center-align">Наши деревянные заготовки подходят для различных видов рукоделия, таких как резьба по дереву, декупаж, лепка, роспись, выжигание, обплетение и в том числе для детского творчества. Заготовки компании "АртВижн"сделаны качественно, аккуратно, все детали четко и прочно прилегают друг к другу, нет излишек клея, неровностей, разницы в размерах заготовок одной партии. </p>
	</div>
</div>
<div class="grid icons-block">
	<div class="block-item col-4">
		<div class="item-icon"><svg class="icon"><use xlink:href="#home-1"/></svg></div>
		<div class="item-title title-h2 center-align">Разработка дизайна</div>
	</div>
	<div class="block-item col-4">
		<div class="item-icon"><svg class="icon"><use xlink:href="#home-2"/></svg></div>
		<div class="item-title title-h2 center-align">Низкие цены</div>
	</div>
	<div class="block-item col-4">
		<div class="item-icon"><svg class="icon"><use xlink:href="#home-3"/></svg></div>
		<div class="item-title title-h2 center-align">Качественное производство</div>
	</div>
</div>
<?php include('footer.php');?>