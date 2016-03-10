<?php include('header.php');?>
<div class="breadcrumbs">
    <a class="brdcmb-link" href="#">Главная</a> - 
    <span class="brdcmb-curpage">Контакты</span>
</div>
<div class="page-title">Контакты</div>
<div class="maps contacts">
	<div class="map" id="map"></div>
	<div class="contact">
        <div class="title">ООО Производственная компания "ArtVision"</div>
        <div class="field phone">
            8 800 999 88 99
        </div>  
        <div class="field email">
            9998899@gmail.com
        </div>  
        <div class="field skype">
           ArtVision99
        </div>  
        <div class="field address">
            102025, Московская обл., г. Химки,
            ул. Карла Маркса, д. 15, корп. 7
        </div> 
		<div class="dop-information small-text hide">
			<div>ИНН: 7758692546</div>
			<div>Юр. адрес: 102025, г. Москва, Красный пр-т, д. 184, оф. 15</div>
		</div>
        <div class="align-center">
            <button class="btn white" onclick="show_all_address(this);">Подробнее</button>
        </div>
    </div>
</div>
<script>
function show_all_address(element){
	if($('.dop-information').hasClass('hide') == true){
		$('.dop-information').removeClass('hide');
		$('.dop-information').addClass('show');
		$(element).text('Свернуть');
	}
	else{
		$('.dop-information').addClass('hide');
		$('.dop-information').removeClass('show');
		$(element).text('Подробнее');
	}
}
</script>
<div class="forms"></div>

<!--yandex maps-->
<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
<script type="text/javascript">
  ymaps.ready(init);
    var myMap,
        myPlacemark;

    function init(){     
        myMap = new ymaps.Map ("map", {
            center: [55.76, 37.65],
            zoom: 14
        });

        myPlacemark = new ymaps.Placemark([55.76, 37.64], { 
            hintContent: 'Москва!', 
            balloonContent: 'Столица России' 
        });

        myMap.geoObjects.add(myPlacemark);
    }
</script>
<?php include('footer.php');?>