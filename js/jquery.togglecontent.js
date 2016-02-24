(function($){
	var defaults = {
		'state': 'less',
		'num': 8
	};
	var methods = {
		init: function(params){
			var options = $.extend({},defaults,params);
			console.log(params);
			console.log(options);
			//return this.each(function(){
				
			//});
		},
		toggle: function(params){
			var options = $.extend({},defaults,params);
			//console.log(arguments);
			console.log(params);
			console.log(options);
		}
	};
	$.fn.toggleContent = function(method){
		if(methods[method]){
			if(!arguments[1]){
				//arguments[1] = dataAttrs(this)/*.apply(arguments,Array.prototype.slice.call(arguments,1))*/;
				arguments = $.extend({},arguments,dataAttrs(this));
				//console.log(arguments);
			}
			console.log(arguments);
			return methods[method].apply(this,Array.prototype.slice.call(arguments,1));
		} else if (typeof method == 'object' || !method){
			return methods.init.apply(this,arguments);
		} else {
			$.error ('Нет тут метода '+method);
		}
		function dataAttrs(el){
			params = {};
			if(el.attr('data-state')){
				params['state'] = el.attr('data-state');
			}
			if(el.attr('data-show')){
				params['num'] = el.attr('data-show');
			}
			return params;
		}
	};
})(jQuery);