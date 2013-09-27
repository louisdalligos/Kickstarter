jQuery(document).ready(function(){
	(function($){
		$('*').replaceText('WooFramework', 'Framework');
		$('*').replaceText('WooThemes', 'Theme');

		//Instead of binding to AJAX success
		$(document).on('click mousemove mouseout keyup keydown change focus blur', function(){
			var shortcodetitle = window.setInterval(function(){
				var title = $('#TB_ajaxWindowTitle');
				var titlel = $('#TB_ajaxWindowTitle').length;
				
				if (titlel != 0) {
					title.text("Insert shortcode.");
					window.clearInterval(shortcodetitle);
				}
			});
		});
		
		//Instead of binding to AJAX success
		var shortcode = window.setInterval(function(){
			var img = $('.mce_woothemes_shortcodes_button img');
			var imgl = $('.mce_woothemes_shortcodes_button img').length;
			
			if(imgl != 0) {
			var loc = window.location.href
				loc = loc.substring(0, loc.indexOf('/wp-admin/'));
				$('<img/>').attr('src', loc + "/wp-content/themes/thg_blank/images/shortcode.jpg").insertBefore(img);
				$('#content_woothemes_shortcodes_button').attr('title','Insert theme shortcode.');
				img.remove();
				window.clearInterval(shortcode);
			}
		},1);
	})(jQuery);
});