<?php
/* This file is only used for the Lora Live Preview/Demo */

$slider = 'static';
$query = new WP_Query( array( 'showposts' => 5 ) );

$image = get_theme_mod( 'home_image', get_template_directory_uri() . '/images/sparkler.jpg' );
$title = get_theme_mod( 'bg_text' );

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
?>

<?php if( $image ) : ?>
<div id="background" class="background" data-src="<?php echo esc_url( $image ); ?>" style="background: url(<?php echo esc_url( $image ); ?>); height:100vh">

	<div class="title" style="top:33%!important;">
		<?php echo wp_kses( $title, $allowed_html ); ?>
	</div>

	<div class="arrow"></div>
</div>
<?php endif; ?>