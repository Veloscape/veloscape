jQuery(document).ready(function($) {
	
	$('form#contactform').submit(function() {
		$('form#contactform .error').remove();
		var hasError = false;
		$('.required').each(function() {
			if( jQuery.trim( $(this).val() ) == '' ) {
				var labelText = $(this).attr('id');
				$(this).parent().append('<span class="error">You forgot to enter your ' + labelText + '.</span>');
				hasError = true;
			} else if( $(this).hasClass('email') ) {
				var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
				if( !emailReg.test( jQuery.trim( $(this).val() ) ) ) {
					$(this).parent().append( '<span class="error">You\'ve entered an invalid email address.</span>' );
					hasError = true;
				}
			}
		});

		if( !hasError ) {

			$.ajax({
				type: "GET",
				url: $(this).attr('data-src'),
				data: $(this).serialize(),
				success: function() {
					$('.thanks').fadeIn();
					$('#name, #email, #subject, #message').attr('value', '');
				},
				error: function( XMLHttpRequest, textStatus, errorThrown ) {
					alert("There was an error, please try again later. Error: " + errorThrown);
				}
			});
		}
		
		return false;
		
	});
});
