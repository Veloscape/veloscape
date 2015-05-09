<?php
/**
* Flickr Widget
*/
class flickrWidget extends WP_Widget {

	function flickrWidget() {
		parent::WP_Widget( false, $name = 'Lora - Flickr Widget' );
	}
	
	function widget($args, $instance) {
		extract ( $args );
		global $wpdp;
		$title = apply_filters( 'widget_title', $instance['title'] );
		$settings = get_option( 'widget_flickrwidget' );

		$id = $settings['id'];
		$number = $settings['number'];
	
		echo $args['before_widget'];
		if ( $title ) echo $before_title . $title . $after_title;
		?>

        <div id="flickr">
            <div class="wrap">
                <div class="fix"></div>
                <script type="text/javascript" src="http://www.flickr.com/badge_code_v2.gne?count=<?php echo intval( $number ); ?>&amp;display=latest&amp;size=s&amp;layout=x&amp;source=user&amp;user=<?php echo esc_attr( $id ); ?>"></script>        
                <div class="fix"></div>
            </div>
        </div>
        
		<?php
		echo $args['after_widget'];
	}
	
    function update( $new_instance, $old_instance ) {				
		$instance = $old_instance;
		$instance['title'] = strip_tags( $new_instance['title'] );
	    
	    return $instance;
    }
	
    function form( $instance ) {				
		$title = esc_attr( $instance['title'] ); ?>
	    <p><label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php _e( 'Title:', 'lora' ); ?> <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" /></label></p>
	    <?php
	    $settings = get_option( 'widget_flickrwidget' );

		// check if anything's been sent
		if ( isset( $_POST['update_flickr'] ) ) {
			$settings['id'] = strip_tags( stripslashes( $_POST['flickr_id'] ) );
			$settings['number'] = strip_tags( stripslashes( $_POST['flickr_number'] ) );

			update_option( 'widget_flickrwidget', $settings );
		}

		echo '<p>
				<label for="flickr_id">Flickr ID (<a href="http://www.idgettr.com" target="_blank">idGettr</a>):
				<input id="flickr_id" name="flickr_id" type="text" class="widefat" value="' . $settings['id'] . '" /></label></p>';
		echo '<p>
				<label for="flickr_number">Number of photos:
				<input id="flickr_number" name="flickr_number" type="text" class="widefat" value="' . $settings['number'] . '" /></label></p>';
		echo '<input type="hidden" id="update_flickr" name="update_flickr" value="1" />';
    
	}
}
add_action( 'widgets_init', create_function( '', 'return register_widget("flickrwidget");' ) );

?>