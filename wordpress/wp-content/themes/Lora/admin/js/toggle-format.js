if( jQuery('input#post-format-video').is(':checked') ) {
	jQuery('#video-post-format').fadeIn();
} else {
	jQuery('#video-post-format').fadeOut();
}

if( jQuery('input#post-format-audio').is(':checked') ) {
	jQuery('#audio-post-format').fadeIn();
} else {
	jQuery('#audio-post-format').fadeOut();
}

if( jQuery('input#post-format-quote').is(':checked') ) {
	jQuery('#quote-post-format').fadeIn();
} else {
	jQuery('#quote-post-format').fadeOut();
}

if( jQuery('input#post-format-link').is(':checked') ) {
	jQuery('#link-post-format').fadeIn();
} else {
	jQuery('#link-post-format').fadeOut();
}

jQuery('input.post-format').click(function() {

	if( jQuery(this).attr("value") == "video" ) {
		jQuery('#video-post-format').fadeIn();
	} else {
		jQuery('#video-post-format').fadeOut();
	}

	if( jQuery(this).attr("value") == "audio" ) {
		jQuery('#audio-post-format').fadeIn();
	} else {
		jQuery('#audio-post-format').fadeOut();
	}

	if( jQuery(this).attr("value") == "quote" ) {
		jQuery('#quote-post-format').fadeIn();
	} else {
		jQuery('#quote-post-format').fadeOut();
	}

	if( jQuery(this).attr("value") == "link" ) {
		jQuery('#link-post-format').fadeIn();
	} else {
		jQuery('#link-post-format').fadeOut();
	}

});