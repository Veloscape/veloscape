<?php
/**
 * The template for displaying the header
 *
 * Displays the head element and theme header
 *
 * @package Framework
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<style type="text/css">
	#header { background: <?php echo get_theme_mod('header_bg_color', '#ffffff') ?>; }
	.background .title { padding: <?php echo intval( get_theme_mod( 'menu_height', '80' ) ) + 150; ?>px 0 150px; }
	</style>
	<![endif]-->
	<?php
	function page_styles() {
		$slider = get_theme_mod( 'slider_type', 'parallax' );
		$transparent_header = get_theme_mod( 'transparent_header', true );
		$bg_text_color = get_post_meta( get_the_ID(), 'bg_text_color', true );
		$home_bg_text_color = get_theme_mod( 'home_bg_text_color', 'light' );
		$text_pos = get_theme_mod( 'text_pos', '30' );

		if( $bg_text_color == 'light' ) {
			$color = get_theme_mod( 'light_color', '#ffffff' );
		} else {
			$color = get_theme_mod( 'dark_color', '#333333' );
		}

		if( $home_bg_text_color == 'light' ) {
			$home_color = get_theme_mod( 'light_color', '#ffffff' );
		} else {
			$home_color = get_theme_mod( 'dark_color', '#333333' );
		}
		
		$style = get_post_meta( get_the_ID(), 'bgimage_style', true );
		
		if( !$style ) {
			$style = 'background';
		}

		if( $style == 'background' && has_post_thumbnail() || is_home() && ( $slider == 'parallax' || $slider == 'static' ) ) { ?>
		<style type="text/css">
		<?php if( is_home() && ( $slider == 'parallax' || $slider == 'static' ) ) { ?>
		.blog .background .title,
		.blog .background .title h1,
		.blog .background .title h2,
		.blog .background .title h3,
		.blog .background .title h4,
		.blog .background .title h5,
		.blog .background .title h6,
		.blog .background .title p {
			color: <?php echo esc_html( $home_color ); ?>;
		}
		<?php } else { ?>
		.background .title h1,
		.background .title-full h1,
		.background .title p,
		.background .title-full p,
		.post-meta-alt,
		.post-meta-alt a {
			color: <?php echo esc_html( $color ); ?>;
		}
		.background .title .underline,
		.background .title-full .underline {
			background: <?php echo esc_html( $color ); ?>;
		}
		<?php if( $transparent_header == true ) { ?>
		.main-menu ul li a {
			color: <?php echo esc_html( $color ); ?>;
		}
		<?php } ?>
		<?php } // end else ?>
		<?php if( $slider == 'parallax' || $slider == 'static' ) { ?>
		.home .background .title {
			top: <?php echo esc_html( $text_pos ); ?>%;
			padding: 0 2em;
		}
		<?php } ?>
		</style>
		<?php }

		echo get_theme_mod( 'before_head' );
		echo get_theme_mod( 'custom_css' );
	}
	add_action( 'wp_head', 'page_styles' ); ?>
	<?php wp_head(); ?>
</head>
<?php
if( has_background_img() ) {
	$class = 'header-bg-image';
} else {
	$class = 'header-no-bg';
} ?>
<body <?php body_class( $class ); ?>>

	<?php
	global $wp_customize;
	if ( isset( $wp_customize ) ) {
		$header_class = ' class="header-customizer"';
	} else {
		$header_class = '';
	}

	$transparent_header = get_theme_mod( 'transparent_header', true );
	$header_bg_color = get_theme_mod( 'header_bg_color', '#ffffff' );
	
	if( $transparent_header == true ) {
		$data = ' data-style="transparent" data-color="' . $header_bg_color . '"';
	} else {
		$data = '';
	}
	?>

	<header id="header"<?php echo esc_attr( $header_class ); echo $data; ?>>
		<div class="logo">
			<?php
			global $wp_query;
			if( isset( $wp_query->query_vars['slider'] ) ) {
				$slider_param = $wp_query->query_vars['slider'];
			}
			$enable_slider = get_theme_mod( 'enable_slider', true );
			$light = get_theme_mod( 'logo', get_template_directory_uri() . '/images/logo.png' );
			$dark = get_theme_mod( 'dark_logo', get_template_directory_uri() . '/images/logo-dark.png' );
			$slider = get_theme_mod( 'slider_type', 'parallax' );
			$image = get_post_meta( get_the_ID(), 'bgimage_style', true );
			$retina_logo = get_theme_mod( 'retina_logo' );
			$retina_logo_dark = get_theme_mod( 'retina_dark_logo' );
			$logo_width = get_theme_mod( 'logo_width' );
			$logo_height = get_theme_mod( 'logo_height' );

			if( isset( $retina_logo ) && isset( $retina_logo_dark ) && $retina_logo != '' && $retina_logo_dark != '' ) {
				if( $logo_width && $logo_height ) {
					$retina = ' width="' . esc_attr( $logo_width ) . '" height="' . esc_attr( $logo_height ) . '" data-logo2x="' . esc_url( $retina_logo ) . '" data-logodark2x="' . esc_url( $retina_logo_dark ) . '"';
				} else {
					$retina = ' data-logo2x="' . esc_url( $retina_logo ) . '" data-logodark2x="' . esc_url( $retina_logo_dark ) . '"';
				}
			} else {
				$retina = '';
			}

			if( is_home() && $slider == 'owlslider' ) {
				$transparent_header = false;
			}

			$bg_text_color = get_post_meta( get_the_ID(), 'bg_text_color', true );

			if( !isset( $bg_text_color ) ) {
				$bg_text_color = 'light';
			}

			if( isset( $bg_text_color ) && !is_home() && !is_search() ) {
				if( $transparent_header == true && !is_category() ) {
					if( $bg_text_color == 'light' && ( $image == 'background' && has_post_thumbnail() || is_home() ) ) {
						$logo = $light;
					} else {
						$logo = $dark;
					}
				} else {
					$logo = $dark;
				}
			} else {
				if( $transparent_header == true && !is_category() && !is_search() ) {
					if( $enable_slider == true ) {
						$logo = $light;
					} else {
						$logo = $dark;
					}
				} else {
					$logo = $dark;
				}
			}

			if( isset( $slider_param ) && $slider_param == 'owlslider' ) {
				$logo = $dark;
			}

			if( $logo ) : ?>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-name" rel="home"><img src="<?php echo esc_url( $logo ); ?>" data-altsrc="<?php echo esc_url( $dark ); ?>"<?php echo $retina; ?> alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" /></a>
			<?php else : ?>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-name" rel="home"><?php echo esc_html( get_bloginfo( 'name' ) ); ?></a>
			<?php endif; ?>
		</div>
		<nav id="navigation" class="main-menu">
			<?php wp_nav_menu( array( 'theme-location' => 'primary', 'container' => 'ul', 'fallback_cb' => 'lora_nav_menu' ) ); ?>
		</nav>
	</header>