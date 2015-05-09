<?php
$slider = get_theme_mod( 'slider_type', 'parallax' );
$revslider = get_theme_mod( 'revslider_alias', 'home' );
$featured_slider = get_theme_mod( 'featured_slider_type', 'carousel' );
$query = new WP_Query( array( 'showposts' => 5 ) );

global $wp_query;

if( isset( $wp_query->query_vars['slider'] ) ) {
	$slider_param = $wp_query->query_vars['slider'];
} else {
	$slider_param = '';
}

if( $slider == 'parallax' || $slider == 'static' ) {
	$image = get_theme_mod( 'home_image', get_template_directory_uri() . '/images/person.jpg' );
}

$title = get_theme_mod( 'bg_text', '<h1>Lora WP</h1>
<p>A premium personal WordPress theme great for any blogger! Lora is easily customizable and comes with plenty of options!</p>
<a href="#" class="button button-white small">Learn More</a>' );

if( !isset( $image ) ) {
	$image = get_template_directory_uri() . '/images/person.jpg';
}

$image_height = get_theme_mod( 'image_height', '600px' );

if( !$image_height ) {
	$image_height = '600px';
}

$show_arrow = get_theme_mod( 'show_arrow', false );

if( !$show_arrow ) {
	$show_arrow = false;
}

$enable_overlay = get_theme_mod( 'enable_overlay', false );

if( !$enable_overlay ) {
	$enable_overlay = false;
}

$allowed_html = array(
	'a' => array(
        'href' => array(),
        'title' => array(),
        'class' => array()
    ),
    'br' => array(),
    'em' => array(),
    'strong' => array(),
    'h1' => array(),
    'h2' => array(),
    'h3' => array(),
    'h4' => array(),
    'h5' => array(),
    'h6' => array(),
    'p' => array(
    	'class' => array(),
    	'style' => array()
    ),
    'div' => array(
    	'class' => array()
    ),
);

if( $slider_param == 'static' ) {
	get_template_part( 'inc/templates/static-image' );
} elseif( $slider_param == 'owlslider' ) {
	get_template_part( 'inc/templates/owlslider' );
} else {

	if( is_home() ) :

		if( $slider == 'revslider' || $slider_param == 'revslider' ) :

			if( function_exists( 'putRevSlider' ) ) {
				putRevSlider( $revslider );
			} else {
				
			}

		elseif( $slider == 'owlslider' ) :
			if( $query->have_posts() ) : ?>

			<div class="wrapper">

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
		<?php elseif( $slider == 'parallax' || $slider == 'static' || $slider_param == 'static' ) : ?>

			<?php if( $image ) : ?>
			<div id="background" class="background <?php if( $slider == 'parallax' ) echo 'parallax-bg'; ?>"<?php if( $slider == 'static' ) echo ' data-src="' . esc_url( $image ) . '"'; ?> style="<?php if( $slider == 'static' ) echo 'background: url(' . esc_url( $image ) . ');'; ?>height:<?php echo esc_attr( $image_height ); ?>">
				<?php if( $slider == 'parallax' ) : ?>
				<div class="parallax" data-src="<?php echo esc_url( $image ); ?>" style="background: url(<?php echo esc_url( $image ); ?>); background-position: center top;"></div>
				<?php endif; ?>

				<?php if( $enable_overlay == true ) { ?><div class="overlay"></div><?php } ?>

				<div class="title">
					<?php echo wp_kses( $title, $allowed_html ); ?>
				</div>

				<?php if( $show_arrow ) { ?><div class="arrow"></div><?php } ?>
			</div>
			<?php endif;

		endif;

	endif;
}