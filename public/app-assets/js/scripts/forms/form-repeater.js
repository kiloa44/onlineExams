/*=========================================================================================
		File Name: form-repeater.js
		Description: Repeat forms or form fields
		----------------------------------------------------------------------------------------
		Item Name: Robust - Responsive Admin Theme
		Version: 3.0
		Author: PIXINVENT
		Author URL: http://www.themeforest.net/user/pixinvent
==========================================================================================*/

(function(window, document, $) {
	'use strict';

	// Default
	$('.repeater-default').repeater({
		show: function () {
			$(this).slideDown();
			//alert("before remove");
			$('span .select2-container').remove();
			setTimeout(function(){
				jQuery('.repeater-default').find('.select2').each(function(index, item) {
					//jQuery(this).select2("destroy");
					jQuery(item).select2();

				});
			}, 100);
			setTimeout(function(){
				jQuery('.repeater-default').find('.select2').first().select2().val(3).trigger('change');
			}, 100);
			//jQuery('select select2')[0].select2().val(3).trigger('change');

			/*alert("after remove");
			$('#select2').select2({
				placeholder: "Placeholder text",
				allowClear: true
			});
			alert("after select2");
			$('.select2-container').css('width','100%');
			alert("after set width");*/
		},
		hide: function(remove) {
			if (confirm('Are you sure you want to remove this item?')) {
				$(this).slideUp(remove);
			}
		}
	});

	// Custom Show / Hide Configurations
	$('.file-repeater, .contact-repeater').repeater({
		show: function () {
			$(this).slideDown();
			//alert("before remove");
			$('span .select2-container').remove();
			//alert("after remove");
			/*$('#select2').select2({
				placeholder: "Placeholder text",
				allowClear: true
			});*/
			//alert("after select2");
			//$('.select2-container').css('width','100%');
			//alert("after set width");
		},
		hide: function(remove) {
			if (confirm('Are you sure you want to remove this item?')) {
				$(this).slideUp(remove);
			}
		}
	});


})(window, document, jQuery);