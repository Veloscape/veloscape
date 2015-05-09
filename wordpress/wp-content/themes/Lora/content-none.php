<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

	<p><?php printf( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'twentyfifteen' ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>

<?php elseif ( is_search() ) : ?>

	<header class="entry-header">
		<h1 class="entry-title">No Results.</h1>
		<div class="underline"></div>
	</header><!-- .entry-header -->

	<p><?php _e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'twentyfifteen' ); ?></p>
	<?php get_search_form(); ?>
	
<?php else : ?>

	<header class="entry-header">
		<h1 class="entry-title">Error 404</h1>
		<div class="underline"></div>
	</header><!-- .entry-header -->

	<p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'twentyfifteen' ); ?></p>
	<?php get_search_form(); ?>



<?php endif; ?>