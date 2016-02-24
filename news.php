<?php include('header.php');?>
<div class="breadcrumbs">
	<a class="brdcmb-link" href="#">Главная</a> - 
	<a class="brdcmb-link" href="#">Новости</a> - 
	<span class="brdcmb-curpage">Новая коллекция к Новому году</span>
</div>
<div class="page-title">Новости</div>
<div class="news-list" ng-controller="newsCtrl">
	<div class="news-item grid-equalHeight" ng-repeat="new in news | orderBy:id">
		<div class="col-4">
			<a href="news_single.php" class="img-link">
				<img class="item-img" ng-src="{{new.image}}" />
			</a>
		</div>
		<div class="col-8 grid-column-spaceBetween">
			<div class="item-title title-h2"><a href="news_single.php">{{new.title}}</a></div>
			<div class="item-date light-color">{{new.date}}</div>
			<div class="item-preview-text">
				<p>{{new.text}}</p>
			</div>
			<a href="news_single.php" class="btn standart mediumsize">Подробнее</a>
		</div>
	</div>
</div>
<?php include('pagination.php');?>
<?php include('footer.php');?>
