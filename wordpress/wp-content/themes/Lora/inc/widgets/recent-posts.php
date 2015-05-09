<?php
/**
 * Recent Posts Widget
 */
class recentPosts extends WP_Widget {

    function recentPosts() {
        parent::WP_Widget( false, $name = 'Lora - Recent Posts' );	
    }

    function widget( $args, $instance ) {		
        extract( $args );
		global $wpdp;
        $title = apply_filters( 'widget_title', $instance['title'] );
		$query = array( 'showposts' => 4, 'nopaging' => 0, 'post_status' => 'publish', 'ignore_sticky_posts' => 1 );
		$r = new WP_Query( $query );
		if ( $r->have_posts() ) :
			echo $before_widget;

		if ( $title ) echo $before_title . $title . $after_title; ?>

		<ul class="recent-posts">
			<?php while( $r->have_posts() ): $r->the_post(); ?>
				<li>
		            <?php if( has_post_thumbnail() ) { ?>
		            	<div class="thumbnail">
							<a href="<?php echo get_permalink() ?>" title="<?php the_title();?>">
								<?php the_post_thumbnail( array( 55, 55 ), array( 'title'=> get_the_title(),'alt'=> get_the_title() ) ); ?>
							</a>
						</div>
		            <?php } ?>

					<div class="widget-post-meta">
						<span><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php echo esc_attr( get_the_title() ? get_the_title(): get_the_ID() ); ?>"><?php if ( get_the_title() ) the_title(); else the_ID(); ?></a></span><br />
						<span class="recent-posts-date"><?php the_time( 'F, j, Y' ); ?></span>
					</div>

				</li>
			<?php endwhile; ?>
		</ul>
		<div style="clear:both"></div>
		<?php echo $after_widget; ?>
		<?php wp_reset_query(); endif; 
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
    }
}
add_action( 'widgets_init', create_function( '', 'return register_widget("recentposts");' ) );
?>