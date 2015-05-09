<?php
/*
Template Name: Page w/ Sidebar
*/

get_header(); ?>

	<?php
	$style = get_post_meta( get_the_ID(), 'bgimage_style', true );
	
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
	<div id="background" class="background <?php if( $parallax == 'yes' ) echo 'parallax-bg'; ?>"<?php if( $parallax == 'no' ) echo ' data-src="' . esc_url( $image[0] ) . '"'; ?> style="<?php if( $parallax == 'no' ) echo 'background: url(' . esc_url( $image[0] ) . ');'; ?><?php if( isset( $height ) ) echo esc_attr( $height ); ?>">
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

	<div class="wrapper">

		<div id="container" class="container">

			<main id="main" role="main">

				<div class="content-alt">

				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

					<article id="post-<?php the_ID(); ?>" <?php post_class( 'article' ); ?>>

						<?php page_header( $style ); ?>

						<div class="entry-content">

							<?php the_content(); ?>

						</div><!-- .entry-content -->

					</article>

					<?php endwhile; endif; ?>

				</div>

				<aside class="sidebar">
					<?php get_sidebar(); ?>
				</aside>

			</main>

		</div>

<?php get_footer(); ?>