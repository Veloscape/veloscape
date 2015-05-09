	<footer id="footer">
		<div class="footer-overlay"></div>
		<div class="container">

			<?php lora_footer(); ?>

			<div class="clear"></div>

			<footer>
			<i class="fa fa-angle-up top-btn"></i>

			<?php 
			if( get_theme_mod( 'disable_copyright' ) == '' ) {
				echo "<p>" . get_theme_mod( 'copyright', 'Copyright &copy; 2015 Lora by <a href="http://themeforest.net/user/CadenGrant/portfolio/">Caden Grant</a>' ) . "</p>";
			} ?>
			</footer>
			
		</div>
	</footer>
<?php if( has_wrapper( 'footer' ) ) : ?>
</div>
<?php endif; ?>

<?php
$enable_slider = get_theme_mod( 'enable_slider', true );
$slider = get_theme_mod( 'slider_type', 'parallax' );
$slider_type = get_theme_mod( 'featured_slider_type', 'carousel' );

global $wp_query;

if( isset( $wp_query->query_vars['slider'] ) ) {
	$slider_param = $wp_query->query_vars['slider'];
} else {
	$slider_param = '';
}

if( $enable_slider && $slider == 'owlslider' || $slider_param == 'owlslider' ) : ?>
<script type="text/javascript">
jQuery(document).ready(function() {
	jQuery("#post-slider").owlCarousel({
		items : 3,
		lazyLoad : true,
		navigation : true,
		itemsDesktop : [1199,3],
		itemsDesktopSmall : [980,2],
		itemsTablet: [768,2],
		itemsTabletSmall: [680,1],
		itemsMobile : [479,1],
		<?php if( $slider_param != 'owlslider' && $slider_type == 'slider' ) : ?>
			singleItem: true
		<?php endif; ?>
	});
});
</script>
<?php endif;

global $wp_query;

if( isset( $wp_query->query_vars['blog'] ) ) {
	$blog_param = $wp_query->query_vars['blog'];
} else {
	$blog_param = '';
}

$blog_layout = get_theme_mod( 'blog_layout' );
if( ( $blog_param == 'masonry' || $blog_param == 'masonry_sidebar' || $blog_param == 'masonry_fullscreen' )
	|| $blog_layout == 'masonry' || $blog_layout == 'masonry_sidebar' || $blog_layout == 'masonry_fullscreen'
	|| is_page_template( 'portfolio.php' ) ) : ?>
<script type="text/javascript">
jQuery(document).ready(function($) {
	var $container = $('.grid');

	$container.imagesLoaded( function(){
	  $container.masonry({
	    itemSelector : '.masonry'
	  });
	});
});
</script>
<?php endif; ?>

<?php echo get_theme_mod( 'before_body' ); ?>
<?php wp_footer(); ?>
</body>
</html>