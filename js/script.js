$(document).ready(function(){
	
	$('#svg-placeholder').html(svg);
	
	
	// main-menu
	$('.btn-menu').on('click', function(e){
		e.stopPropagation();
		$('.main-menu').toggleClass('active');
	});
	
	// search
	$('.search-box').on('click', function(e){
		e.stopPropagation();
		$(this).toggleClass('active');
		$(this).children('.search').focus();
	});
	$('.search-box *').on('click', function(e){
		if($('.search-box').hasClass('active')){
			e.stopPropagation();
		}
	});
	$('.page').on('click', function(){
		if(!$('.search-box .search').hasClass('dirty')){
			$('.search-box').removeClass('active');
		}
		$('.product-actions').removeClass('active');
	});
	
	// ad-to-cart animation
	$('.js-add-to-cart').on('click', function(e){
		e.stopPropagation();
		$(this).parent('.product-actions').addClass('active');
		var productC = parseInt($(this).siblings('.product-quantity-box').find('.input-quantity').val(),10) + 1;
		$(this).siblings('.product-quantity-box').find('.input-quantity').val(productC);
		var imgToDrag = $(this).parents('.product-card').find('.product-img').eq(0);
		if(imgToDrag && !($(this).parent('.product-actions').hasClass('added'))){
			var imgClone = imgToDrag.clone()
				.offset({
					top: imgToDrag.offset().top,
					left: imgToDrag.offset().left
				})
				.addClass('clone-img')
				.appendTo($('body'))
				.animate({
					'top': $('.shopping-card-box').offset().top + 30,
                    'left': $('.shopping-card-box').offset().left + 45,
                    'width': 75,
                    'height': 75
				}, 1000, 'easeInOutExpo');
			setTimeout(1500);
			imgClone.animate({
				'width': 0,
				'height': 0
			}, function () {
				$(this).detach()
			});
		}
		$(this).parents('.product-actions').addClass('added');
	});
	$('.product-actions').on('click', function(e){
		e.stopPropagation();
	});
	$('.product-quantity-box .btn-minus').on('click', function(){
		changeQuantity($(this).siblings('.input-quantity'), 'minus');
	});
	$('.product-quantity-box .btn-plus').on('click', function(){
		changeQuantity($(this).siblings('.input-quantity'), 'plus');
	});
	$('.product-quantity-box .input-quantity').on('change', function(){
		changeQuantity($(this));
	});
	
	// modal
	$('.btn-modal').click(function(){
		var modal = $(this).attr('data-modal');
		$('.dark-bg, #'+modal).fadeIn(500);
	});
	$('.modal .btn-close-modal, .dark-bg').click(function(){
		$('.dark-bg, .modal').fadeOut(500);
	});
	
	
	// placeholder
	// init
	$('.inputtext, input:not([type="submit"])').each(function(){
		if($(this).val().length > 0){
			$(this).addClass('dirty');
		} else {
			$(this).removeClass('dirty');
		}
	});
	// action
	$('.inputtext, input:not([type="submit"])').keyup(function(){
		$(this).change();
	});
	$('.inputtext, input:not([type="submit"])').change(function(){
		if($(this).val().length > 0){
			$(this).addClass('dirty');
		} else {
			$(this).removeClass('dirty');
		}
	});
	
	// collapsible 
	$('.collapsible').collapsible();
	
	if($(window).outerWidth() < 992){
		$('select.mobile-synh').change(function(){
			var radio = $('.select-synh[data-select="'+$(this).attr('id')+'"]');
			radio.find('input[type="radio"]').not('[value="'+$(this).val()+'"]').prop('checked', false);
			radio.find('input[type="radio"][value="'+$(this).val()+'"]').prop('checked', true);
			radio.find('input[type="radio"]:checked').parent('.dropdown-item').click();
		});
	}
	$('.select-synh input[type="radio"]').change(function(){
		var select = $(this).parents('.select-synh').attr('data-select');
		if(($(window).outerWidth() > 992) || (!$('#'+select).hasClass('mobile-synh'))){
			$('#'+select).val($(this).val());
			$('#'+select).change();
		}
	});
	// dropdown init
	$('.dropdown-box').each(function(){
		var value = $(this).find('.dropdown-item[data-active="active"]').find('[data-value-text]');
		$(this).find('.dropdown-value > .item-text').html(value.attr('data-value-text'));
	});
	// dropdown open
	$('.dropdown-box').click(function(e){
		$('.dropdown-box').not($(this)).removeClass('open');
		$(this).toggleClass('open');
		e.stopPropagation();
	});
	$('.page').click(function(){
		$('.dropdown-box').removeClass('open');
	});
	// dropdown change
	$('.dropdown-box .dropdown-item').click(function(e){
		var value = $(this).find('[data-value-text]');
		var box = $(this).parents('.dropdown-box');
		$(this).attr('data-active', 'active').siblings().removeAttr('data-active');
		box.find('.dropdown-value > .item-text').html(value.attr('data-value-text'));
		e.stopPropagation();
		box.removeClass('open');
	});
	
	// jcarousel
	// http://sorgalla.com/jcarousel/docs/
	$('.carousel')
		.on('jcarousel:createend', function(e, carousel){
			width = $(this).innerWidth();
			if($(this).attr('data-target') > 1){
				width = width / $(this).attr('data-target');
			}
			$(this).jcarousel('items').css('width', Math.ceil(width) + 'px');
			if($(this).attr('data-jcarouselautoscroll') == 'true'){
				if($(this).attr('data-interval')){
					var $interval = $(this).attr('data-interval');
				} else {
					var $interval = 3000;
				}
				if($(this).attr('data-target')){
					var $target = $(this).attr('data-target');
				} else {
					var $target = '+=1';
				}
				$(this).jcarouselAutoscroll({
					interval: $interval,
					target: $target,
					autostart: true
				});
			}
			if($(this).attr('data-wrap') == 'circular'){
				$(this).jcarousel({
					wrap: 'circular',
				});
			}
			
		})
		.jcarousel({
			list: '.carousel-inner',
			transitions: Modernizr.csstransforms ? {
				transforms: Modernizr.csstransforms,
				transforms3d: Modernizr.csstransforms3d,
				easing: 'ease'
			} : false
		});
	$('.carousel-nav')
		.on('jcarouselpagination:active', 'li', function(){
			$(this).children('.nav-btn').addClass('active');
		})
		.on('jcarouselpagination:inactive', 'li', function(){
			$(this).children('.nav-btn').removeClass('active');
		})
		.jcarouselPagination({
			item: function(page){
				return '<li class="nav-item"><button class="nav-btn"></button></li>';
			}
		});
	$('.carousel-controlls .carousel-prev').jcarouselControl({
		target: '-=1'
	});
	$('.carousel-controlls .carousel-next').jcarouselControl({
		target: '+=1'
	});
	
	// product-thumbs
	$('.product-imgs .thumb-link').click(function(){
		var fullImg = $(this).attr('href');
		$(this).addClass('active').siblings('.thumb-link').removeClass('active');
		$('.product-imgs .full-img img').attr({'src':fullImg});
		return false;
	});
	
	
	
	// anchor-link
	$('.anchor-link').click(function(e){
		var el = $(this).attr('href');
		var scrollto = $(el).offset();
		$('html,body').animate({scrollTop: scrollto.top - 100},700);
		return false;
		//e.preventDefault;
	});
	
	// yandex.map
	// https://tech.yandex.ru/maps/doc/jsapi/2.1/quick-start/tasks/quick-start-docpage/
	/*
	ymaps.ready(init);
	var shopsMap;
	function init(){
		shopsMap = new ymaps.Map("shops-map",{
			center: [57.16565145867384,65.54499550000001], // Тюмень
			zoom: 12,
			controls: ['smallMapDefaultSet','routeEditor','trafficControl']
		});
		// тут бы еще сделать действия при клике на метку, 
		// связать со списком магазинов рядом с картой, например центрировать 
		// и увеличивать карут при клике на адрес магазина в списке....
		// но я этого делать не буду, заебала меня эта карта
		var coords = [
			[57.15689047935417,65.45087498346709],	// Черепанова 29
			[57.15370227137238,65.56400849999996],	// 50 лет Октября, 8/1
			[57.194878271190895,65.5943265],		// Ветеранов Труда, 47
			[57.13485277148095,65.60593249999998],	// Пермякова, 1а
			[57.13079877143909,65.54357149999998],	// Молодежная, 72
			[57.13420827141365,65.4935445],			// Московский тракт, 120/1
		];
		zBalloonLayout = ymaps.templateLayoutFactory.createClass(
			'<div class="balloon">'+
				'<button class="btn btn-icon btn-close"><svg class="icon"><use xlink:href="#cross"/></svg></button>'+
				'<div class="balloon-tngl"></div>'+
				'<div class="balloon-inner">'+
					'$[[options.contentLayout observeSize minWidth=300]]'+
				'</div>'+
			'</div>', {
				build: function(){
					this.constructor.superclass.build.call(this);
					this._$element = $('.balloon', this.getParentElement());
					this.applyElementOffset();
					this._$element.find('.btn-close').on('click', $.proxy(this.onCloseClick, this));
				},
				clear: function () {
					this._$element.find('.btn-close').off('click');
					this.constructor.superclass.clear.call(this);
				},
				onSublayoutSizeChange: function (){
					zBalloonLayout.superclass.onSublayoutSizeChange.apply(this, arguments);
					if(!this._isElement(this._$element)) {
                        return;
                    }
                    this.applyElementOffset();
                    this.events.fire('shapechange');
                },
				applyElementOffset: function (){
					this._$element.css({
                        left: -(this._$element[0].offsetWidth / 2),
                        top: -(this._$element[0].offsetHeight + this._$element.find('.balloon-tngl')[0].offsetHeight)
                    });
				},
				onCloseClick: function (e){
                    e.preventDefault();
                    this.events.fire('userclose');
                },
				getShape: function (){
					if(!this._isElement(this._$element)) {
                        return zBalloonLayout.superclass.getShape.call(this);
                    }
					var position = this._$element.position();
					return new ymaps.shape.Rectangle(new ymaps.geometry.pixel.Rectangle([
                        [position.left, position.top], [
                            position.left + this._$element[0].offsetWidth,
                            position.top + this._$element[0].offsetHeight + this._$element.find('.balloon-tngl')[0].offsetHeight
                        ]
                    ]));
				},
				_isElement: function (element){
					return element && element[0] && element.find('.balloon-tngl')[0];
				}
			}
		);
		zBalloonContentLayout = ymaps.templateLayoutFactory.createClass(
			'<div class="balloon-header">'+
				'<div class="title medium-text">{{ properties.name|raw }}</div>'+
				'<div class="small-text color-text text-light">Уточните цену и наличие по телефону:</div>'+
				'<div class="phone medium-text">{{ properties.tel|raw }}</div>'+
			'</div>'+
			'<div class="balloon-content">'+
				'<div class="address">{{ properties.address|raw }}</div>'+
				'<div class="workhours">{{ properties.workhours|raw }}</div>'+
			'</div>'
		);
		shopsCollection = new ymaps.GeoObjectCollection({},{
			iconLayout: 'default#image',
			iconImageHref: 'images/map-marker.png',
			iconImageSize: [30, 36],
		});
		for (var i=0;i<coords.length;i++){
			shopsCollection.add(new ymaps.Placemark(
				coords[i],
				{
					name: 'Магазин на Молодежной',
					tel: '+7 (804) 333-41-40',
					address: 'ул. Молодежная, 72',
					workhours: 'пн.–пт. 08:00–19:00</br>Без обеда и выходных'
				},{
					balloonShadow: false,
					balloonLayout: zBalloonLayout,
					balloonContentLayout: zBalloonContentLayout,
					balloonPanelMaxMapArea: 0,
					balloonOffset: [130, 0]
				}
			));
		}
		shopsMap.behaviors.disable('scrollZoom');
		shopsMap.geoObjects.add(shopsCollection);
		if($('#shops-map').parents('.tab-content-item')){
			$('#shops-map').parents('.tab-content-item').on("tabshow", function(){
				shopsMap.container.fitToViewport();
			});
		}
	}*/
	
	
	$('.toggle-content-box').each(function(){
		if($(this).attr('data-state')){
			var state = $(this).attr('data-state');
		} else {
			var state = 'less';
		}
		if($(this).attr('data-show')){
			var num = $(this).attr('data-show');
		} else {
			var num = 5;
		}
		toggleContent($(this), 'init', state, num);
	});
	$('.show-buttons .show-more').click(function(){
		toggleContent($(this).parents('.toggle-content-box'), 'toggle', 'more', $(this).parents('.toggle-content-box').attr('data-show'));
		$(this).hide().siblings().show();
	});
	$('.show-buttons .show-less').click(function(){
		toggleContent($(this).parents('.toggle-content-box'), 'toggle', 'less', $(this).parents('.toggle-content-box').attr('data-show'));
		$(this).hide().siblings().show();
	});
	
	// tabs
	//$('.tabs').tabs();
	// init
	$('.tabs').each(function(){
		var actID = $(this).find('.tab-header-item.active .tab-link').attr('href');
		$(this).children('.tab-content').find(actID).addClass('open');
		if($('.workarea .tab-hide-box').length > 0){
			$('.tab-hide-box[data-hide-id='+actID+']').hide();
		}
	});
	// action
	$('.tab-link').click(function(){
		var actID = $(this).attr('href');
		var tabs = $(actID).parents('.tabs');
		if($(this).parent().hasClass('tab-header-item')){
			$(this).parent('.tab-header-item').addClass('active').siblings().removeClass('active');
		} else {
			$('.tab-header-item [href='+actID+']').parent('.tab-header-item').addClass('active').siblings().removeClass('active');
		}
		tabs.children('.tab-content').find(actID).addClass('open').siblings().removeClass('open');
		if($('.workarea .tab-hide-box').length > 0){
			$('.tab-hide-box[data-hide-id!='+actID+']').show();
			$('.tab-hide-box[data-hide-id='+actID+']').hide();
		}
		$(actID).trigger("tabshow");
		return false;
	});
	
	// tooltips 
	// init
	$('.tooltip:not(.noaction)').each(function(){
		if($(this).attr('data-box')){
			var box = $($(this).attr('data-box'));
		} else {
			var box = 'page';
		}
		if($(this).attr('data-position')){
			var pos = $(this).attr('data-position');
		} else {
			var pos = 'top-left';
		}
		if($(this).attr('data-offset')){
			var off = parseInt($(this).attr('data-offset'),10);
		} else {
			var off = 23;
		}
		var tooltipW = $(this).outerWidth();
		var tooltipH = $(this).outerHeight();
		var posTop = 0;
		var posLeft = 0;
		if(box != 'page'){
			switch(pos){
				case 'left-top':
					posTop = box.offset().top;
					posLeft = box.offset().left - off - tooltipW;
				break;
				case 'left-middle':
					posTop = box.offset().top + ((box.outerHeight() - tooltipH)/2);
					posLeft = box.offset().left - off - tooltipW;
				break;
				case 'left-bottom':
					posTop = box.offset().top + box.outerHeight() - tooltipH;
					posLeft = box.offset().left - off - tooltipW;
				break;
				case 'right-top':
					posTop = box.offset().top;
					posLeft = box.offset().left + off + box.outerWidth();
				break;
				case 'right-middle':
					posTop = box.offset().top + ((box.outerHeight() - tooltipH)/2);
					posLeft = box.offset().left + off + box.outerWidth();
				break;
				case 'right-bottom':
					posTop = box.offset().top + box.outerHeight() - tooltipH;
					posLeft = box.offset().left + off + box.outerWidth();
				break;
				case 'bottom-left':
					posTop = box.offset().top + box.outerHeight() + off;
					posLeft = box.offset().left;
				break;
				case 'bottom-center':
					posTop = box.offset().top + box.outerHeight() + off;
					posLeft =  box.offset().left + ((box.outerWidth() - tooltipW)/2);
				break;
				case 'bottom-right':
					posTop = box.offset().top + box.outerHeight() + off;
					posLeft = box.offset().left + box.outerWidth() - tooltipW;
				break;
				case 'top-center':
					posTop = box.offset().top - off - tooltipW;
					posLeft = box.offset().left + ((box.outerWidth() - tooltipW)/2);
				break;
				case 'top-right':
					posTop = box.offset().top - off - tooltipW;
					posLeft = box.offset().left + box.outerWidth() - tooltipW;
				break;
				case 'top-left':
				default:
					posTop = box.offset().top - off - tooltipW;
					posLeft = box.offset().left;
				break;
			}
			$(this).offset({top:posTop,left:posLeft});
		} else {
			console.log('page');
		}
	});
	// show
	$('.show-tooltip').click(function(){
		var tooltip = $(this).attr('data-tooltip');
		tooltip.addClass('show');
	});
	$('.btn.shopping-card').click(function(){
		$('.tooltip[data-box="#minicard"]').addClass('show');
	});
	// hide
	$('.tooltip .btn-close').click(function(){
		$(this).parents('.tooltip').removeClass('show');
	});
	
	// show/hide block
	$('.btn-toggle-block').click(function(){
		if($(this).attr('data-hide-block')){
			$($(this).attr('data-hide-block')).addClass('hide');
		}
		if ($(this).attr('data-show-block')) {
			$($(this).attr('data-show-block')).removeClass('hide');
		} 
		if ($(this).attr('data-block')){
			$($(this).attr('data-block')).toggleClass('hide');
		}
		if($(this).is('a')){
			return false;
		}
	});
	
	
	// forms
	$('[required]').change(function(){
		validateRequired($(this));
	});
	$('input[type="email"]').change(function(){
		validateEmail($(this));
	});
	//$('input[type="tel"]').inputmask("+7(999)9999999",{"clearMaskOnLostFocus": false,"placeholder":" "});
	$('input[type="tel"]').change(function(){
		validateTel($(this));
	});
	$('input[type="file"]').change(function(){
		if($(this).val().length > 0){
			var isValid = validateFile($(this));
			$(this).siblings('.inputfile-value').find('.item-text').text($(this)[0].files[0].name);
			$(this).siblings('.inputfile-value').addClass('shown');
		} else {
			$(this).parents('.inputfile').removeClass('invalid-file');
			$(this).siblings('.inputfile-value .item-text').text('');
			$(this).siblings('.inputfile-value').removeClass('shown');
		}
	});
	$('.inputfile .btn-delete').click(function(){
		$(this).parents('.inputfile').find('input[type="file"]').val('');
		$(this).parents('.inputfile').removeClass('invalid-file');
		$(this).parents('.inputfile').find('input[type="file"]').change();
		return false;
	});
	$('form').submit(function(){
		$(this).find('[required]').each(function(){
			validateRequired($(this));
		});
		if($(this).find('.invalid-required, .invalid-pattern, .invalid-file').length > 0){
			return false;
		} 
	});
	

});

function position() {
	var pos = $(window).scrollTop();
	$('.page').css({'position': 'fixed', 'top': - pos+'px'});
}
function toggleContent(el,action,state,num){
	// default
	if(!action){
		action = 'init';
	}
	if(!state){
		state = 'less';
	}
	if(!num){
		num = 5;
	}
	var lessHeight = el.children('.show-buttons').outerHeight();
	el.children('*:lt('+num+')').each(function(){
		lessHeight = lessHeight + $(this).outerHeight() + parseFloat($(this).css('margin-bottom'),10);
	});
	var moreHeight = el.children('.show-buttons').outerHeight();
	el.children('[class!="show-buttons"]').each(function(){
		moreHeight = moreHeight + $(this).outerHeight() + parseFloat($(this).css('margin-bottom'),10);
	});
	if(action == 'init'){
		if(state == 'less'){
			el.css('height', lessHeight);
		} else if (state == 'more') {
			el.css('height', moreHeight);
		}
	} else if (action == 'toggle'){
		if(state == 'less'){
			el.animate({'height': lessHeight},300).attr('data-state', 'more');
		} else if (state == 'more') {
			el.animate({'height': moreHeight},300).attr('data-state', 'less');;
		}
	}
}

// product quantity
function changeQuantity(el, orient){
	value = parseInt(el.val(),10);
	if(orient == 'plus') {
		value = value + 1;
	} else if (orient == 'minus') {
		value = value - 1;
	}
	if (value > 0) {
		el.val(value);
		el.parents('.product-actions').addClass('added');
	} else if (value <= 0) {
		el.val(0);
		el.parents('.product-actions').removeClass('added');
	}
}

// validation functions
function validateEmail(el){
	var pattern = /.+@.+\..+/i;
	if(pattern.test(el.val())){
		el.removeClass('invalid-pattern');
	} else {
		el.addClass('invalid-pattern');
	}
}
function validateTel(el){
	var pattern = /\+7\(\d{3}\)\d{7}/;
	if(pattern.test(el.val())){
		el.removeClass('invalid-pattern');
	} else {
		el.addClass('invalid-pattern');
	}
}
function validateFile(el){
	var typePattern = /ppt|pptx|doc|docx|xls|xlsx|txt|pdf|png|jpg/i;
	if((el[0].files[0].size > 10485760) || !(typePattern.test(el[0].files[0].name.split('.').pop()))) {
		el.parents('.inputfile').addClass('invalid-file');
		return false;
	} else {
		el.parents('.inputfile').removeClass('invalid-file');
		return true;
	}
}
function validateRequired(el){
	if((el.val().length == 0) || ((el.attr('type') == 'checkbox') && (el.prop('checked') == false))){
		el.addClass('invalid-required');
	} else {
		el.removeClass('invalid-required');
	}
}
