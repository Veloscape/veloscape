jQuery(document).ready( function($) {
    $('#bgimage_style').change(function() {
        var val = $(this).val();

        if( val == 'standard' ) {
            $('.bgimage_height').fadeOut();
        } else {
            $('.bgimage_height').fadeIn();
        }
    });

    if( $('#bgimage_style').val() == 'standard' ) {
        $('.bgimage_height').css({display : 'none'});
    }
});