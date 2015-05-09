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

if( ( $blog_param == 'masonry' || $blog_param == 'masonry_fullscreen' || $blog_param == 'masonry_sidebar' )
	|| $layout == 'masonry' || $layout == 'masonry_fullscreen' || $layout == 'masonry_sidebar' ) :
	$post_class = 'article masonry';
	$thumb_size = 'post-masonry';
else :
	$post_class = 'article';
	$thumb_size = 'post';
endif;

$show_icon = get_theme_mod( 'show_icon', true );

$background = get_post_meta( get_the_ID(), 'bgimage_layout', true );

if( !$background ) {
	$background = 'background';
}

if( $background == 'background' ) {
	if( !has_post_thumbnail() ) {
		$background = 'standard';
	}
}

$subtitle = get_post_meta( get_the_ID(), 'page_desc', true );

if( $layout != 'default' || is_single() || $blog_param == 'masonry' || $blog_param == 'masonry_sidebar' || $blog_param == 'masonry_fullscreen' || $blog_param == 'standard' || $blog_param == 'standard_sidebar' || $slider_param == 'owlslider' ) { ?>

<article id="post-<?php the_ID(); ?>" <?php post_class( $post_class ); ?>>

	<header class="entry-header">
	<div class="post-icon"><i class="fa fa-link"></i></div>
		<?php $link = get_post_meta( $post->ID, '_format_link_url', true ); ?>

		<h2 class="entry-title"><a href="<?php if( is_single() ) { echo esc_url( $link ); } else { esc_url( the_permalink() ); } ?>"<?php if( is_single() ) echo ' target="_blank"'; ?>><?php the_title(); ?></a></h2>
		<?php if( $background == 'standard' || is_home() )
			lora_post_meta( $layout ); ?>

	</header>

	<div class="entry-content">

		<?php 
		$blog_layout = get_theme_mod( 'blog_layout', 'default' );

		if( $blog_layout == 'standard' || $blog_layout == 'standard_sidebar' ) {
			the_content(); 
		} else {
			if( !is_single() ) :
				the_excerpt();
			else :
				the_content();
			endif;
		} 

		?>

		<?php lora_share_post(); ?>

	</div><!-- .entry-content -->

	<?php
		// Author bio.
		if ( is_single() && get_the_author_meta( 'description' ) ) :
			get_template_part( 'author-bio' );
		endif;
	?>

	<footer class="entry-footer">
		
	</footer>

</article>

<?php } else { ?>

	<div class="overlay"></div>

	<?php if( has_post_format( 'gallery' ) ) { ?>
		<div class="gallery-nav">
			<div class="prev"></div>
			<div class="next"></div>
		</div>
	<?php } ?>
	
	<div class="title">
		<a href="<?php the_permalink(); ?>"><h2 class="entry-title"><?php the_title(); ?></h2></a>
		<?php if( $subtitle != '' ) echo '<p class="subtitle">' . esc_html( $subtitle ) . '</p>'; ?>
		<div class="underline"></div>
		<?php lora_post_meta( 'default' ); ?>
	</div>

<?php } ?>