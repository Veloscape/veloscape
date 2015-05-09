<?php
/* This file is only used for the Lora Live Preview/Demo */

$query = new WP_Query( array( 'showposts' => 5 ) );
$menu_height = get_theme_mod( 'menu_height', '70' );
if( $query->have_posts() ) : ?>

<div class="wrapper" style="padding-top: <?php echo esc_attr( $menu_height ); ?>px">

	<div id="post-slider" class="owl-carousel">	

		<?php while( $query->have_posts() ) : $query->the_post(); ?>
		
			<div class="item">
				<?php 
				if( has_post_thumbnail() ) {
					the_post_thumbnail( 'post-medium' );
				} else {
					echo '<div class="placeholder"></div>';
				} ?>
				<div class="post-caption">
					<span class="post-date"><?php the_time('F jS, Y'); ?></span>
					<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
				</div>
			</div>

		<?php endwhile; ?>

	</div>
<?php endif; ?>