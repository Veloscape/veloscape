<?php
/**
 * The template for displaying Author bios
 *
 * @package Lora
 * @since Lora 1.0
 */

$show = get_theme_mod( 'show_author_info', true );
if( $show == true ) { ?>

<div class="author-info">

	<div class="gravatar">
		<?php echo get_avatar( get_the_author_meta( 'user_email' ), 70 ); ?>
	</div>

	<div class="author-bio">
		<a class="author-link" href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" rel="author"><strong><?php echo get_the_author(); ?></strong></a>

		<p>
			<?php the_author_meta( 'description' ); ?><br /><br />
		</p><!-- .author-bio -->
	</div>
	
</div><!-- .author-info -->

<?php } ?>