//"use strict"
var artvision = angular.module('artvision',[]);

artvision.controller('newsCtrl', function($scope, $http){
	$scope.news = [
		{
			"id": 1,
			"title": "Новая коллекция к Новому году!",
			"image": "images/news/news-1.jpg",
			"date": "15 декабря, 2015",
			"text": "Новогодняя коллекция деревянных заготовок для творчества поможет вам создать праздничную атмосферу и уют своими руками! А также может стать прекрасным подарком для творческих личностей."
		},
		{
			"id": 2,
			"title": "Мы запустили новый производственный цех",
			"image": "images/news/news-2.jpg",
			"date": "3 декабря, 2015",
			"text": "Наше предприятие активно развивается, и в связи с необходимостью расширения производственных площадей нами был запущен новый производственный цех по производству деревянных заготовок."
		},
		{
			"id": 3,
			"title": "Последние скидки этого лета! Экономия до 50%",
			"image": "images/news/news-3.jpg",
			"date": "24 сентября, 2015",
			"text": "У нас грандиозная распродажа летних образцов! Вас порадуют наши скидки и спецпредложения, не упустите возможность приобрести наш товар с максимальной выгодой для себя!"
		},
		{
			"id": 4,
			"title": "Мы запустили новый производственный цех",
			"image": "images/news/news-2.jpg",
			"date": "3 декабря, 2015",
			"text": "Наше предприятие активно развивается, и в связи с необходимостью расширения производственных площадей нами был запущен новый производственный цех по производству деревянных заготовок."
		},
		{
			"id": 5,
			"title": "Последние скидки этого лета! Экономия до 50% ",
			"image": "images/news/news-3.jpg",
			"date": "24 сентября, 2015",
			"text": "У нас грандиозная распродажа летних образцов! Вас порадуют наши скидки и спецпредложения, не упустите возможность приобрести наш товар с максимальной выгодой для себя!"
		},
	];
});
artvision.controller('productsCtrl', function($scope, $http){
	$scope.orderProp = 'id';
	$scope.products = [
		{
			"id": 1,
			"name": "Надпись деревянная Любовь",
			"image": "images/products/love.jpg",
			"articul": "2585-56",
			"optprice": 100,
			"price": 125,
			"quantity": 100,
			"label": 'new',
		},
		{
			"id": 2,
			"name": "Надпись деревянная Любовь",
			"image": "images/products/love.jpg",
			"articul": "2585-56",
			"optprice": 100,
			"price": 125,
			"quantity": 100,
			"label": '',
		},
		{
			"id": 3,
			"name": "Надпись деревянная Любовь",
			"image": "images/products/love.jpg",
			"articul": "2585-56",
			"optprice": 100,
			"price": 125,
			"quantity": 100,
			"label": '',
		},
		{
			"id": 4,
			"name": "Надпись деревянная Любовь",
			"image": "images/products/love.jpg",
			"articul": "2585-56",
			"optprice": 100,
			"price": 125,
			"quantity": 100,
			"label": 'sale',
		},
		{
			"id": 5,
			"name": "Надпись деревянная Любовь",
			"image": "images/products/love.jpg",
			"articul": "2585-56",
			"optprice": 100,
			"price": 125,
			"quantity": 100,
			"label": '',
		},
		{
			"id": 6,
			"name": "Надпись деревянная Любовь",
			"image": "images/products/love.jpg",
			"articul": "2585-56",
			"optprice": 100,
			"price": 125,
			"quantity": 100,
			"label": '',
		},
		{
			"id": 7,
			"name": "Надпись деревянная Любовь",
			"image": "images/products/love.jpg",
			"articul": "2585-56",
			"optprice": 100,
			"price": 125,
			"quantity": 100,
			"label": '',
		},
		{
			"id": 8,
			"name": "Надпись деревянная Любовь",
			"image": "images/products/love.jpg",
			"articul": "2585-56",
			"optprice": 100,
			"price": 125,
			"quantity": 100,
			"label": '',
		},
		{
			"id": 9,
			"name": "Надпись деревянная Любовь",
			"image": "images/products/love.jpg",
			"articul": "2585-56",
			"optprice": 100,
			"price": 125,
			"quantity": 100,
			"label": 'sale',
		},
		{
			"id": 10,
			"name": "Надпись деревянная Любовь",
			"image": "images/products/love.jpg",
			"articul": "2585-56",
			"optprice": 100,
			"price": 125,
			"quantity": 100,
			"label": '',
		},
		{
			"id": 11,
			"name": "Надпись деревянная Любовь",
			"image": "images/products/love.jpg",
			"articul": "2585-56",
			"optprice": 100,
			"price": 125,
			"quantity": 100,
			"label": 'hit',
		},
		{
			"id": 12,
			"name": "Надпись деревянная Любовь",
			"image": "images/products/love.jpg",
			"articul": "2585-56",
			"optprice": 100,
			"price": 125,
			"quantity": 100,
			"label": '',
		},
	];
});
artvision.controller('categoryCtrl', function($scope, $http){
	$scope.orderProp = 'id';
	$scope.categories = [
		{
			"id": 1,
			"name": "Детские игры",
			"image": "images/categories/children-games.png",
		},
		{
			"id": 2,
			"name": "Деревянная упаковка",
			"image": "images/categories/wooden-pack.png",
		},
		{
			"id": 3,
			"name": "Заготовки для творчества",
			"image": "images/categories/wood.png",
		},
		{
			"id": 4,
			"name": "Бижутерия",
			"image": "images/categories/earrings.png",
		},
		{
			"id": 5,
			"name": "Детское развитие",
			"image": "images/categories/hedgehog.png",
		},
		{
			"id": 6,
			"name": "Новый год 2016",
			"image": "images/categories/new-year.png",
		},
		{
			"id": 7,
			"name": "Для интерьера и декора",
			"image": "images/categories/decor.png",
		},
		{
			"id": 8,
			"name": "14 февраля",
			"image": "images/categories/hearts.png",
		},
		{
			"id": 9,
			"name": "Заготовки для часов",
			"image": "images/categories/clock.png",
		},
		{
			"id": 10,
			"name": "Кухонные и столовые принадлежности",
			"image": "images/categories/cutting-board.png",
		},
		{
			"id": 11,
			"name": "Скрапбукинг",
			"image": "images/categories/apples.png",
		},
		{
			"id": 12,
			"name": "23 февраля",
			"image": "images/categories/tank.png",
		},
		{
			"id": 13,
			"name": "Открытки",
			"image": "images/categories/new-year-card.png",
		},
		{
			"id": 14,
			"name": "Пасха",
			"image": "images/categories/eggs.png",
		},
		{
			"id": 15,
			"name": "Спецзаказы",
			"image": "images/categories/boat.png",
		},
	];
});
artvision.controller('pageCtrl', function($scope, $http){
	$scope.orderProp = 'id';
	$scope.pages = [
		{
			"id": 1,
			"name": "Каталог продукции",
			"image": "images/pages/catalog.png",
			"link": "catalog.php",
		},
		{
			"id": 2,
			"name": "Контактная информация",
			"image": "images/pages/contacts.png",
			"link": "contacts.php",
		},
		{
			"id": 3,
			"name": "Скачать прайс",
			"image": "images/pages/price.png",
			"link": "price.php",
		},
		{
			"id": 4,
			"name": "Условия доставки",
			"image": "images/pages/dostavka.png",
			"link": "oplata-dostavka.php",
		},
		{
			"id": 5,
			"name": "Способы оплаты",
			"image": "images/pages/oplata.png",
			"link": "oplata-dostavka.php",
		},
		{
			"id": 6,
			"name": "Ваши покупки",
			"image": "images/pages/basket.png",
			"link": "basket.php",
		},
	];
});