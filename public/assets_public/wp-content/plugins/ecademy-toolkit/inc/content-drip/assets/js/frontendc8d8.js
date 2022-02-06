jQuery.noConflict();
(function ($) {

	// A $( document ).ready() block.
	$(document).ready(function () {

		// Reload page when item available
		const input_reload = $('#lcd-reload'),
			reload_value = input_reload.val();
		console.log(reload_value);
		if (input_reload.length > 0) {
			if ( 0 < reload_value && reload_value < 2147483647 ) {
				setTimeout( function() {
					window.location.reload( true );
				}, reload_value );
			}
		}
	});

})(jQuery);

// Other code using $ as an alias to the other library


