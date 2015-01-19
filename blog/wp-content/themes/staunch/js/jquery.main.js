jQuery(function(){
	clearInputs();
	jQuery(document).bind('gform_post_render', function() {
		clearInputs();
	});
	
	jQuery.daisyNav();
	
});
/*---- clear inputs ---*/
function clearInputs(){
	jQuery('input:text, input:password, textarea').each(function(){
		var _el = jQuery(this);
		_el.data('val', _el.val());
		_el.bind('focus', function(){
			if(_el.val() == _el.data('val')) _el.val('');
		}).bind('blur', function(){
			if(_el.val() == '') _el.val(_el.data('val'));
		});
	});
}


/*! DaisyNav v1.0.0 | (c) 2013 CircleWaves (support@circlewaves.com)
*/
(function(a,f,g,h){a.extend({daisyNav:function(){a("ul.menu-list li.has-submenu>a").append('<span class="menu-expand"></span>');a(".menu-toggle-button").click(function(){if(a(this).data("menu-id"))for(var b=a(this).data("menu-id").split(" "),e=b.length,c=0;c<e;c++){var d=b[c];d&&a("#"+d).toggleClass("show-for-devices")}else a("ul.menu-list").toggleClass("show-for-devices");a(this).toggleClass("active")});a(".menu-list .menu-expand").click(function(b){b.preventDefault();a(this).parent().next("ul").toggleClass("show-for-devices")})}})})(jQuery,
window,document);

