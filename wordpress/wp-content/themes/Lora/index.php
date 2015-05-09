<?php
/**
 * The main template file
 *
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package Lora
 */

get_header(); ?>

	<?php if( get_theme_mod( 'enable_slider', true ) == true ) {
		get_template_part( 'inc/templates/slider' );
	} ?>

	<?php
	$blog_layout = get_theme_mod( 'blog_layout', 'default' );

	global $wp_query;

	if( isset( $wp_query->query_vars['blog'] ) ) {
		$blog_param = $wp_query->query_vars['blog'];
	} else {
		$blog_param = '';
	}

	if( isset( $wp_query->query_vars['slider'] ) ) {
		$slider_param = $wp_query->query_vars['slider'];
	} else {
		$slider_param = '';
	}

	/* If layout is set to masonry */
	if( $blog_param == 'masonry' || $blog_param == 'masonry_fullscreen' || $blog_param == 'masonry_sidebar'
		|| $blog_layout == 'masonry' || $blog_layout == 'masonry_fullscreen' || $blog_layout == 'masonry_sidebar' ) :

		$container_id = 'container';

		if( $blog_layout == 'masonry' || $blog_param == 'masonry' || $blog_layout == 'masonry_sidebar' || $blog_param == 'masonry_sidebar' ) :
			$container_class = 'blog-masonry';
		else :
			$container_class = 'blog-masonry-fullscreen';
		endif;

		if( $blog_layout == 'masonry_sidebar' || $blog_param == 'masonry_sidebar' ) :
			$content_class = 'content-alt';
		else :
			$content_class = 'content';
		endif;

		$posts_container = 'grid';

	/* If layout is set to standard blog layout */
	elseif( $blog_layout == 'standard' || $blog_layout == 'standard_sidebar' || $blog_param == 'standard' || $blog_param == 'standard_sidebar' || $slider_param == 'owlslider' ) :

		$container_id = 'container';

		if( $blog_layout == 'standard_sidebar' || $blog_param == 'standard_sidebar' ) :
			$content_class = 'content-alt';
		else :
			$content_class = 'content';
		endif;

		$container_class = 'container';
		$posts_container = 'post-list';

	elseif( $blog_layout == 'default' && ! ($blog_param == 'standard' || $blog_param == 'standard_sidebar' || $blog_param == 'masonry' || $blog_param == 'masonry_sidebar' || $blog_param == 'masonry_fullscreen' ) ) :

		$container_id = 'wrapper';
		$container_class = 'fullscreen';
		$content_class = 'content';
		$posts_container = 'grid';

	endif;

	$layout = get_theme_mod( 'layout', '3_1' );

	if( $blog_layout == 'default' && ! ($blog_param == 'standard' || $blog_param == 'standard_sidebar' || $blog_param == 'masonry' || $blog_param == 'masonry_sidebar' || $blog_param == 'masonry_fullscreen' || $slider_param == 'owlslider' ) ) :

		if( ( $layout == '3_1' || $layout == '3x3' ) && !( $blog_param == '1col' || $blog_param == '2col' || $blog_param == '2colalt' ) ) :
			$container_class .= ' layout_3_col';
		elseif( $layout == '2_1' || $layout == '2x2' || $blog_param == '2col' || $blog_param == '2colalt' ) :
			$container_class .= ' layout_2_col';
		elseif( $layout == '1x1' || $blog_param == '1col' ) :
			$container_class .= ' layout_1_col';
		endif;

	endif;

	$thumb_size = 'post';
	?>

	<?php if( has_wrapper() ) : ?>
	<div class="wrapper">
	<?php endif; ?>

		<div id="<?php echo esc_attr( $container_id ); ?>" class="<?php echo esc_attr( $container_class ); ?>">
			<main id="main" role="main">

				<div class="<?php echo esc_attr( $content_class ); ?>">

					<div class="<?php echo esc_attr( $posts_container ); ?>">

						<?php if( have_posts() ) :

							$article_class = 'standard';
							$thumb_size = 'three_col';
							$reset = false;
							$two_thirds = false;
							$x = 0;

							while( have_posts() ) : $x++; the_post();

								if( ( $layout == '3_1' || $blog_param == '3colalt' ) && !( $blog_param == '1col' || $blog_param == '2col' || $blog_param == '2colalt' || $blog_param == '3col' || $slider_param == 'owlslider' ) ) {

									if( $x == 4 ) {
										$article_class = 'fullwidth';
										$thumb_size = 'fullwidth';
										$img_width = '1400';
										$img_height = '430';
										$x = 0;
									} else {
										$article_class = 'standard';
										$thumb_size = 'three_col';
										$img_width = '550';
										$img_height = '430';
									}

									if( $x == 3 ) {
										$article_class .= ' last';
									}

								} elseif( $layout == '3x3' || $blog_param == '3col' ) {

									if( $x == 3 ) {
										$article_class .= ' last';
										$x = 0;
									} else {
										$article_class = 'standard';
									}

									$thumb_size = 'three_col';
									$img_width = '550';
									$img_height = '430';

								} elseif( $layout == '2_1' || $blog_param == '2colalt' ) { 

									$thumb_size = 'one_half';

									if( $x == 2 ) {
										$article_class .= ' last';
										$thumb_size = 'one_half';
										$img_width = '750';
										$img_height = '550';
										$reset = true;
										$x = 0;
									} else {
										$article_class = 'standard';
										$thumb_size = 'one_half';
										$img_width = '750';
										$img_height = '550';
									}

									if( $reset == true && $x == 1 ) {
										$article_class = 'fullwidth';
										$thumb_size = 'fullwidth';
										$img_width = '1400';
										$img_height = '550';
										$reset = false;
										$x = 0;
									}

								} elseif( $layout == '2x2' || $blog_param == '2col' ) { 

									if( $x == 2 ) {
										$article_class .= ' last';
										$x = 0;
									} else {
										$article_class = 'standard';
									}

									$thumb_size = 'one_half';
									$img_width = '750';
									$img_height = '550';

								} elseif( $layout == '1x1' || $blog_param == '1col' ) {
									$article_class = 'fullwidth';
									$thumb_size = 'fullwidth';
									$img_width = '1400';
									$img_height = '550';
								}

								$thumb = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), $thumb_size );
								
								?>
								
								<?php if( $blog_layout == 'default' && ! ($blog_param == 'standard' || $blog_param == 'standard_sidebar' || $blog_param == 'masonry' || $blog_param == 'masonry_sidebar' || $blog_param == 'masonry_fullscreen' || $slider_param == 'owlslider' ) ) { ?>
								
								<article id="post-<?php the_ID(); ?>" <?php post_class( $article_class . ' masonry-item' ); ?>>
									
									<?php if( $thumb && !has_post_format( 'gallery' ) ) { ?>
									<img src="<?php echo esc_url( $thumb[0] ); ?>" width="<?php echo esc_attr( $thumb[1] ); ?>" height="<?php echo esc_attr( $thumb[2] ); ?>" alt="" />
									<?php } elseif( !has_post_format( 'gallery' ) ) { ?>
									<img src="<?php echo get_template_directory_uri() . '/images/placeholder.jpg'; ?>" width="<?php echo esc_attr( $img_width ); ?>" height="<?php echo esc_attr( $img_height ); ?>" alt="No Image" />
									<?php } ?>
									<?php get_template_part( 'content', get_post_format() ); ?>

									<?php 
									if( has_post_format( 'gallery' ) ) {
										$images = get_post_meta( $post->ID, '_format_gallery_images', true );
										if( $images ) { ?>
										<ul class="gallery-slider">
										<?php foreach( $images as $image ) { ?>
											<?php
											$the_image = wp_get_attachment_image_src( $image, $thumb_size );
											$the_title = get_post_field( 'post_title', $image ); 
											?>
											<li><img src="<?php echo esc_url( $the_image[0] ); ?>" alt="<?php echo esc_attr( $the_title ); ?>" width="<?php echo esc_attr( $the_image[1] ); ?>" height="<?php echo esc_attr( $the_image[2] ); ?>" /></li>
										<?php } ?>
										</ul>
										<?php }
									 } ?>

								</article>

								<?php } else {
									get_template_part( 'content', get_post_format() );
								}

							endwhile;

						else:

							get_template_part( 'content', 'none' );

						endif; ?>

					</div>

					<?php lora_post_navigation(); ?>

				</div>

				<?php if( ( $blog_param == 'standard_sidebar' || $blog_param == 'masonry_sidebar' ) || $blog_layout == 'standard_sidebar' || $blog_layout == 'masonry_sidebar' ) : ?>
				<aside class="sidebar">
					<?php get_sidebar(); ?>
				</aside>
				<?php endif; ?>

			</main>
		</div>

<?php get_footer(); ?>