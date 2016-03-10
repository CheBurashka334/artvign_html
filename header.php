<!DOCTYPE html>
<html>
<head>
	<title>Art Vision</title>
	<!--meta name="viewport" content="width=device-width, initial-scale=1"-->
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:800,700,600,400,300|Open+Sans+Condensed:300,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
	<!--link rel="shortcut icon" href="favicon.ico" type="image/x-icon"-->
	<!--link rel="shortcut icon" href="favicon.png" type="image/png"-->
	<script src="js/jquery-1.11.3.min.js"></script>
	<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
	<script src="js/modernizr-custom.js"></script>
	<script src="js/materialize.min.js"></script>
	<!--<script src="js/jquery.inputmask.bundle.min.js"></script>-->
	<script src="js/angular.js"></script>
	<script src="js/content-app.js"></script>
	<script src="js/jquery.jcarousel.min.js"></script>
	<script src="js/svg-lib.js"></script>
	<script src="js/script.js"></script>
	<script src="js/effects.js"></script>
	<link rel="stylesheet" type="text/css" href="template_styles.css" />
</head>
<body ng-app="artvision">
<div id="svg-placeholder" class="hide"></div>
<div class="layout">
<div class="page">
	<!-- если не 404 -->
	<div class="header">
		<div class="container">
			<div class="grid-middle-spaceBetween">
				<div class="main-menu">
					<button class="btn btn-icon btn-menu">
						<span class="line top"></span><span class="line middle"></span><span class="line bottom"></span>
					</button>
					<div class="main-menu-box">
						<div class="logo"><a class="img-link" href="home.php"><img src="images/logo.png"/></a></div>
						<ul class="menu vertical-menu">
							<li class="menu-item"><a href="home.php" class="menu-link">Главная</a></li>
							<li class="menu-item"><a href="catalog.php" class="menu-link">Каталог</a></li>
							<li class="menu-item active"><a href="dostavka-oplata.php" class="menu-link">Доставка и оплата</a></li>
							<li class="menu-item"><a href="prices.php" class="menu-link">Прайсы</a></li>
							<li class="menu-item"><a href="specials.php" class="menu-link">Спецзаказы</a></li>
							<li class="menu-item"><a href="news.php" class="menu-link">Новости</a></li>
							<li class="menu-item"><a href="media.php" class="menu-link">Медиа</a></li>
							<li class="menu-item"><a href="about.php" class="menu-link">О компании</a></li>
							<li class="menu-item"><a href="contacts.php" class="menu-link">Контакты</a></li>
						</ul>
					</div>
				</div>
				<div class="logo-box">
					<a class="img-link" href="home.php"><svg class="logo"><use xlink:href="#logo"/></svg></a>
				</div>
				<div class="phone-box">
					<a href="callto:+78043334140" class="nostyle phone-link big-text">8-800-768-54-79</a><br/>
					<a href="mailto:info@artvision.ru" class="light-color">info@artvision.ru</a>
				</div>
				<div class="search-box">
					<input type="text" class="search inputtext" id="h-search" />
					<label for="h-search" class="textfield-placeholder">Поиск</label>
					<button class="search-btn btn btn-icon"><svg class="icon"><use xlink:href="#search"/></svg></button>
				</div>
				<div class="auth-box">
					<a class="auth-link btn flat btn-with-icon medium-text" id="lk-menu-link" href="lk.php"><svg class="icon violet"><use xlink:href="#profile"/></svg> Личный кабинет</a>
					<!--
					<a class="auth-link login" href="authorize.php"><svg class="icon"><use xlink:href="#profile"/></svg> Вход</a>
					<a class="auth-link register" href="registration.php">Регистрация</a>
					-->
				</div>
				<div class="shopping-card-box">
					<a class="basket-link btn flat primary medium-text" href="basket.php">Корзина</a>
				</div>
			</div>
		</div>
	</div>
	<div class="workarea container">
		<!--##WORKAREA##-->