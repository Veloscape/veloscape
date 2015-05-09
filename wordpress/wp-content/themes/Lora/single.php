<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package Lora
 * @since Lora 1.0
 */

get_header(); ?>

	<?php
	$blog_layout = get_theme_mod( 'blog_layout', 'default' );
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

	/* Page Layout */
	$page_layout = get_post_meta( get_the_ID(), 'page_layout', true );

	if( !$page_layout ) {
		$page_layout = 'fullwidth';
	}

	if( $page_layout == 'fullwidth' ) {
		$content_class = 'content';
	} else {
		$content_class = 'content-alt';
	}

	$fullscreen = get_post_meta( get_the_ID(), 'enable_fs_image', true );

	if( !$fullscreen ) {
		$fullscreen = 'yes';
		$height = ' height: 100vh;';
	}

	if( $fullscreen == 'yes' ) {
		$title_class = 'title-full';
		$height = ' height: 100vh;';
	} else {
		$title_class = 'title';
	}

	$video = get_post_meta( $post->ID, '_format_video_embed', true );

	if( has_post_format( 'video' ) && isset( $video ) ) {
		$height = ' height: auto;';
	}

	$enable_overlay = get_post_meta( get_the_ID(), 'enable_overlay', true );

	if( !$enable_overlay ) {
		$enable_overlay = 'yes';
	}

	if( has_post_thumbnail() && $style == 'background' || has_post_format( 'video' ) && $style == 'background' ) { ?>
	<div id="background" class="background <?php if( $parallax == 'yes' ) echo 'parallax-bg'; ?>"<?php if( $parallax == 'no' ) echo ' data-src="' . esc_url( $image[0] ) . '"'; ?> style="<?php if( $parallax == 'no' ) echo 'background: url(' . esc_url( $image[0] ) . ');'; ?><?php if( isset( $height ) ) echo esc_attr( $height ); ?>">
		
		<?php if( $enable_overlay == 'yes' ) { ?><div class="overlay"></div><?php } ?>

		<?php if( $parallax == 'yes' && !has_post_format( 'video' ) ) : ?>
		<div class="parallax" data-src="<?php echo esc_url( $image[0] ); ?>" style="background: url(<?php echo esc_url( $image[0] ); ?>); background-position: center top;"></div>
		<?php endif; ?>

		<?php if( isset( $video ) && has_post_format( 'video' ) ) {

			$allowed_html = array(
				'p' => array(),
				'a' => array(
					'href' => array()
				),
				'iframe' => array(
					'src' => array(),
					'width' => array(),
					'height' => array(),
					'frameborder' => array()
				),
				'embed'
			);

			echo "<div class='post-video'>";
			if( wp_oembed_get( $video ) ) {
				echo wp_oembed_get( $video );
			} else {
				echo wp_kses( $video, $allowed_html );
			}
			echo "</div>";

		}

		?>

		<?php if( !( isset( $video ) && has_post_format( 'video' ) ) ) { ?>
		<div class="<?php echo esc_attr( $title_class ); ?>">
			<h1><?php the_title(); ?></h1>
			<?php
			echo "<ul class=\"post-meta-alt\">";

			if( get_theme_mod( 'show_author', true ) == true ) {
				echo "<li>";
				the_author_link();
				echo "</li>";
			}

			if( get_theme_mod( 'show_date', true ) == true ) { ?>
				<li><span class="entry-date"><?php the_time('F jS, Y'); ?></span></li>
				<?php 
			}

			echo "<li><strong>&middot;</strong></li>";
				
			if( get_theme_mod( 'show_comments', true ) == true ) { ?>
				<li><a href="<?php comments_link() ?>" class="comments-link"><?php comments_number( 'No Comments', '1 Comment', '% Comments' ); ?></a></li>
				<?php 
			}

			echo "<li><strong>&middot;</strong></li>";
			
			if( get_theme_mod( 'show_categories', true ) == true ) {
				echo "<li>";
				the_category( ', ' );
				echo "</li>";
			}

			if( current_user_can( 'manage_options' ) ) {
				echo "<li><strong>&middot;</strong></li>";
			} ?>

			<li><?php edit_post_link( 'Edit' ); ?></li>

		<?php echo "</ul>"; ?>
		</div>

		<?php } ?>

		<?php if( $fullscreen == 'yes' ) { ?><div class="arrow"></div><?php } ?>
	</div>
	<?php } ?>

	<div class="wrapper">
		<div id="container" class="container">
			<main id="main" role="main">

				<div class="<?php echo esc_attr( $content_class ); ?>">

					<?php if( have_posts() ) : the_post();
						get_template_part( 'content', get_post_format() );
					endif; ?>

					<?php if( comments_open() || get_comments_number() ) :
						comments_template();
					endif; ?>

					<div class="clear"></div>
					<?php lora_post_nav(); ?>
					<?php /* lora_related_posts(); */ ?>

				</div>

				<?php if( $blog_layout == 'standard_sidebar' || $blog_layout == 'masonry_sidebar' || $page_layout == 'sidebar' ) : ?>
				<aside class="sidebar">
					<?php get_sidebar(); ?>
				</aside>
				<?php endif; ?>

			</main>
		</div>

<?php get_footer(); ?>