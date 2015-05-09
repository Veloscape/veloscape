<?php
/*
Template Name: Portfolio
*/

get_header(); ?>

	<?php
	global $wp_query;

	if( isset( $wp_query->query_vars['layout'] ) ) {
		$portfolio = $wp_query->query_vars['layout'];
	} else {
		$portfolio = '';
	}

	$layout = get_theme_mod( 'portfolio_layout', '3x3' );
	
	if( !$layout ) {
		$layout = '3x3';
	}

	if( $layout == '3x3' && !( $portfolio == '2x2' || $portfolio == '1x1' ) ) {
		$container_class = 'portfolio-container portfolio_3_col';
		$thumb_size = 'portfolio';
	} elseif( $layout == '2x2' || $portfolio == '2x2' ) {
		$container_class = 'portfolio-container portfolio_2_col';
		$thumb_size = 'portfolio-medium';
	} elseif( $layout == '1x1' || $portfolio == '1x1' ) {
		$container_class = 'portfolio-container portfolio_1_col';
		$thumb_size = 'portfolio-large';
	}
	
	/* Page Settings */
	$transparent_header = get_theme_mod( 'transparent_header', true );
	$id = get_queried_object_id();
	$style = get_post_meta( $id, 'bgimage_style', true );

	if( !$style ) {
		$style = 'background';
	}

	$id = get_post_thumbnail_id( get_the_ID() );

	if( $style == 'background' ) :
		$image = wp_get_attachment_image_src( $id, 'fullscreen' );
	else :
		$image = wp_get_attachment_image_src( $id, 'post' );
	endif;

	$parallax = get_post_meta( get_the_ID(), 'enable_parallax', true );

	if( !$parallax ) {
		$parallax = 'yes';
	}

	$fullscreen = get_post_meta( get_the_ID(), 'enable_fs_image', true );

	if( $fullscreen == 'yes' ) {
		$title_class = 'title-full';
		$height = ' height: 100vh;';
	} else {
		$title_class = 'title';
	}

	$desc = get_post_meta( get_the_ID(), 'page_desc', true );

	$enable_overlay = get_post_meta( get_the_ID(), 'enable_overlay', true );

	if( !$enable_overlay ) {
		$enable_overlay = 'yes';
	}

	if( has_post_thumbnail() && $style == 'background' ) { ?>
	<div id="background" class="background <?php if( $parallax == 'yes' ) echo 'parallax-bg'; ?><?php if( $transparent_header == true ) echo ' transparent'; ?>"<?php if( $parallax == 'no' ) echo ' data-src="' . esc_url( $image[0] ) . '"'; ?> style="<?php if( $parallax == 'no' ) echo 'background: url(' . esc_url( $image[0] ) . ');'; ?><?php if( isset( $height ) ) echo esc_attr( $height ); ?>">
		<?php if( $parallax == 'yes' ) : ?>
		<div class="parallax" data-src="<?php echo esc_url( $image[0] ); ?>" style="background: url(<?php echo esc_url( $image[0] ); ?>); background-position: center top;"></div>
		<?php endif; ?>
		
		<?php if( $enable_overlay == 'yes' ) { ?><div class="overlay"></div><?php } ?>

		<div class="<?php echo esc_attr( $title_class ); ?>">
			<h1><?php the_title(); ?></h1>

			<?php if( isset( $desc ) && $desc != '' ) { ?> 
			<div class="underline"></div>
			<p><?php echo esc_html( $desc ); ?></p> 
			<?php } ?>
		</div>

		<?php if( $fullscreen == 'yes' ) { ?><div class="arrow"></div><?php } ?>
	</div>
	<?php } ?>

	<?php if( has_wrapper() ) : ?>
	<div class="wrapper">
	<?php endif; ?>

		<div id="container" class="<?php echo esc_attr( $container_class ); ?>">
			<main id="main" role="main">

				<div class="content">

					<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
						<div class="article">
							<?php page_header( $style ); ?>
							<?php the_content(); ?>
						</div>
						<?php endwhile; endif; ?>

					<div class="grid">

						<?php
						$posts_per_page = get_theme_mod( 'portfolio_posts_per_page', 9 );
						$args = array( 'post_type' => 'portfolio', 'posts_per_page' => $posts_per_page, 'paged' => $paged );
						$wp_query = new WP_Query( $args );

						if( $wp_query->have_posts() ) :

							while( $wp_query->have_posts() ) : $wp_query->the_post();

								$thumb = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), $thumb_size ); ?>
								
								<article id="post-<?php the_ID(); ?>" <?php post_class( 'post masonry' ); ?>>
									
									<a href="<?php the_permalink(); ?>">
									<?php if( $thumb ) { ?>
									<img src="<?php echo esc_url( $thumb[0] ); ?>" width="<?php echo esc_attr( $thumb[1] ); ?>" height="<?php echo esc_attr( $thumb[2] ); ?>" alt="" />
									<?php } else { ?>
									<img src="<?php echo get_template_directory_uri() . '/images/placeholder.jpg'; ?>" alt="No Image" />
									<?php }?>
									</a>
									
									<div class="overlay"></div>
	
									<div class="item-title">
										<a href="<?php the_permalink(); ?>"><h2 class="entry-title"><?php the_title(); ?></h2></a>
									</div>

								</article>

								<?php

							endwhile;

						else:

							get_template_part( 'content', 'none' );

						endif; ?>

						</div>

					</div>

					<?php 
					lora_post_navigation(); 
					wp_reset_query();
					?>

				</div>

				<?php /*if(  ) : ?>
				<aside class="sidebar">
					<?php get_sidebar(); ?>
				</aside>
				<?php endif; */?>

			</main>
		</div>

<?php get_footer(); ?>