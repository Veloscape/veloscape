<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package Lora
 */
?>

<?php
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

$layout = get_theme_mod( 'blog_layout', 'default' );

if( $blog_param == 'masonry' || $blog_param == 'masonry_fullscreen' || $blog_param == 'masonry_sidebar' ) {
	$layout = 'masonry';
}

if( ( $blog_param == 'masonry' || $blog_param == 'masonry_fullscreen' || $blog_param == 'masonry_sidebar' )
	|| $layout == 'masonry' || $layout == 'masonry_fullscreen' || $layout == 'masonry_sidebar' ) :
	$post_class = 'article masonry';
	$thumb_size = 'post-masonry';
elseif( $blog_param == 'standard' || $blog_param == 'standard_sidebar' || $layout == 'standard' || $layout == 'standard_sidebar' ) :
	$post_class = 'article';
	$thumb_size = 'post';
else :
	$post_class = '';
	$thumb_size = 'post';
endif;

if( is_single() ) {
	$post_class .= ' article';
}

$image_style = get_post_meta( get_the_ID(), 'bgimage_style', true );

if( !$image_style ) {
	$image_style = 'standard';
}

$subtitle = get_post_meta( get_the_ID(), 'page_desc', true );

if( $blog_param == 'masonry' || $blog_param == 'masonry_fullscreen' || $blog_param == 'masonry_sidebar' || $blog_param == 'standard' || $blog_param == 'standard_sidebar'
	|| $layout == 'standard' || $layout == 'standard_sidebar' || $layout == 'masonry' || $layout == 'masonry_fullscreen' || $layout == 'masonry_sidebar' 
	|| is_single() || $slider_param == 'owlslider' ) { ?>

<article id="post-<?php the_ID(); ?>" <?php post_class( $post_class ); ?>>

	<?php 
	if( ! ( ( $blog_param == 'masonry' || $blog_param == 'masonry_fullscreen' || $blog_param == 'masonry_sidebar' )
	|| $layout == 'masonry' || $layout == 'masonry_fullscreen' || $layout == 'masonry_sidebar' ) ) {
		post_header( $layout );
	}
	?>

	<?php if( get_post_format() == false ) : ?>
		<?php if( has_post_thumbnail() ) : ?>
			<?php if( is_single() && $image_style == 'standard' ) : ?>
			<div class="post-thumbnail">
				<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( $thumb_size ); ?></a>
			</div>
			<?php elseif( !is_single() ) : ?>
			<div class="post-thumbnail">
				<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( $thumb_size ); ?></a>
			</div>
			<?php endif; ?>
		<?php endif; ?>
	<?php endif; ?>

	<?php if( has_post_format( 'gallery' ) ) :
		$images = get_post_meta( $post->ID, '_format_gallery_images', true );

		if( $images ) : ?>
		<div class="post-gallery">
			<ul class="bxslider">
			<?php foreach( $images as $image ) { ?>
				<?php
				$the_image = wp_get_attachment_image_src( $image, $thumb_size );
				$the_caption = get_post_field( 'post_excerpt', $image );
				$the_title = get_post_field( 'post_title', $image ); 
				?>
				<li><img src="<?php echo esc_url( $the_image[0] ); ?>" alt="<?php echo esc_attr( $the_title ); ?>"<?php if( $the_caption ) { ?> title="<?php echo esc_attr( $the_caption ); ?>"<?php } ?> /></li>
			<?php } ?>
			</ul>
		</div>

		<?php endif; ?>

	<?php elseif( has_post_format( 'video' ) ) : ?>

		<?php if( !is_single() || is_single() && $image_style == 'standard' ) { ?>
		<div class="post-video">
			<?php
			$video = get_post_meta( $post->ID, '_format_video_embed', true );

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

			if( wp_oembed_get( $video ) ) : 
				echo wp_oembed_get( $video );
			else :
				echo wp_kses( $video, $allowed_html );
			endif;
			?>
		</div>
		<?php } ?>

	<?php elseif( has_post_format( 'audio' ) ) : ?>

		<?php
		$audio = get_post_meta( $post->ID, '_format_audio_embed', true );
		if( !empty( $audio ) ) : ?>
		<div class="post-audio">
			<?php
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

			if( substr( $audio, 0, 4 ) == 'http' && substr( $audio, 0, 22 ) != 'https://soundcloud.com' ) :
				echo do_shortcode( '[audio src="' . esc_url( $audio ) . '"]' );
			elseif( wp_oembed_get( $audio ) ) : 
				echo wp_oembed_get( $audio );
			else :
				echo wp_kses( $audio, $allowed_html );
			endif;
			?>
		</div>
		<?php endif; ?>

	<?php endif; ?>

	<?php 
	if( ( $blog_param == 'masonry' || $blog_param == 'masonry_fullscreen' || $blog_param == 'masonry_sidebar' )
	|| $layout == 'masonry' || $layout == 'masonry_fullscreen' || $layout == 'masonry_sidebar' ) {
		post_header( $layout );
	}
	?>

	<div class="entry-content">

		<?php 
		$blog_layout = get_theme_mod( 'blog_layout', 'default' );

		if( $blog_layout == 'standard' || $blog_layout == 'standard_sidebar' || $blog_param == 'standard' || $blog_param == 'standard_sidebar' || $slider_param == 'owlslider' ) {
			
			the_content();
			
		} else {

			if( $blog_param == 'masonry' ) {
				the_excerpt();
			} else {

				if( !is_single() ) :
					the_excerpt();
				else :
					if( has_post_format( 'status' ) ) { ?>
						<a href="<?php the_permalink(); ?>"><?php the_content(); ?></a>
					<?php } else {
						the_content();
					} 
				endif;

			}
		} ?>

		<?php if( has_post_format( 'status' ) ) {
			if( !is_single() )
				lora_post_meta( $layout );
		} ?>

		<?php
		$show_tags = get_theme_mod( 'show_tags', false );
		if( $show_tags ) { ?>
		<div class="post-tags"><?php the_tags(); ?></div>
		<?php } ?>

		<?php if( !is_singular( 'portfolio' )  ) lora_share_post(); ?>

	</div><!-- .entry-content -->

	<?php
		// Author bio.
		if ( is_single() && get_the_author_meta( 'description' ) && !is_singular( 'portfolio' ) ) :
			get_template_part( 'author-bio' );
		endif;
	?>

</article>

<?php } else { ?>

	<div class="overlay"></div>
	
	<div class="title">
		<a href="<?php the_permalink(); ?>"><h2 class="entry-title"><?php the_title(); ?></h2></a>
		<?php if( $subtitle != '' ) echo '<p class="subtitle">' . $subtitle . '</p>'; ?>
		<div class="underline"></div>
		<?php lora_post_meta( 'default' ); ?>
	</div>

<?php } ?>