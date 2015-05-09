<?php require_once( '../../../../wp-load.php' );
Header("Content-type: text/css");

$page_width = get_theme_mod( 'page_width', '1000' );
$masonry_blog_width = get_theme_mod( 'masonry_blog_width', '1200' );
$logo_top_margin = get_theme_mod( 'logo_top_margin', '17' );
$logo_bottom_margin = get_theme_mod( 'logo_bottom_margin', '17' );
$menu_height = get_theme_mod( 'menu_height', '62' );

/* Fonts */
$body_font = get_theme_mod( 'body_font', 'Noticia Text' );
$body_font_weight = get_theme_mod( 'body_font_weight', '400' );
$headings_font = get_theme_mod( 'heading_font', 'Montserrat' );
$headings_font_weight = get_theme_mod( 'headings_font_weight', '400' );
$headings_text_transform = get_theme_mod( 'headings_text_transform', 'uppercase' );
$font_size = get_theme_mod( 'font_size', '18' );
$menu_font_size = get_theme_mod( 'menu_font_size', '14' );
$post_title_size = get_theme_mod( 'post_title_size', '36' );
$masonry_post_title_size = get_theme_mod( 'masonry_post_title_size', '22' );
$widget_title_size = get_theme_mod( 'widget_title_size', '18' );
$h1_font_size = get_theme_mod( 'h1_font_size', '34' );
$h2_font_size = get_theme_mod( 'h2_font_size', '28' );
$h3_font_size = get_theme_mod( 'h3_font_size', '24' );
$h4_font_size = get_theme_mod( 'h4_font_size', '18' );
$h5_font_size = get_theme_mod( 'h5_font_size', '16' );
$h6_font_size = get_theme_mod( 'h6_font_size', '14' );

/* Colors */
$transparent_header = get_theme_mod( 'transparent_header', true );
$header_bg_color = get_theme_mod( 'header_bg_color', '#ffffff' );
$menu_link_color = get_theme_mod( 'menu_link_color', '#333333' );
$menu_link_hover_color = get_theme_mod( 'menu_link_hover_color', '#aeaeae' );
$transparent_menu_link_color = get_theme_mod( 'transparent_menu_link_color', '#ffffff' );
$transparent_menu_link_hover_color = get_theme_mod( 'transparent_menu_link_hover_color', '#e0e0e0' );
$dd_bg_color = get_theme_mod( 'dd_bg_color', '#444444' );
$dd_link_color = get_theme_mod( 'dd_link_color', '#ffffff' );
$dd_link_hover_color = get_theme_mod( 'dd_link_hover_color', '#aeaeae' );
$page_bg_color = get_theme_mod( 'page_bg_color', '#f9f9f9' );
$text_color = get_theme_mod( 'text_color', '#222222' );
$link_color = get_theme_mod( 'link_color', '#000000' );
$link_hover_color = get_theme_mod( 'link_hover_color', '#aeaeae' );
$headings_color = get_theme_mod( 'headings_color', '#444444' );
$post_title_hover_color = get_theme_mod( 'post_title_hover_color', '#000000' );
$footer_bg_color = get_theme_mod( 'footer_bg_color', '#181818' );
$footer_text_color = get_theme_mod( 'footer_text_color', '#ffffff' );
$footer_link_color = get_theme_mod( 'footer_link_color', '#999999' );
$footer_link_hover_color = get_theme_mod( 'footer_link_hover_color', '#ffffff' );
$footer_divider_color = get_theme_mod( 'footer_divider_color', '#ffffff' );

if( $transparent_header == true ) {
	$header_style = 'background: transparent;
	-webkit-box-shadow: 0px 0px 0px 0px rgba(0, 0, 0, 0);
	-moz-box-shadow: 0px 0px 0px 0px rgba(0, 0, 0, 0);
	box-shadow: 0px 0px 0px 0px rgba(0, 0, 0, 0);';
} else {
	$header_style = '';
}

if( $transparent_header == true ) {
	$menu_styles = "
.logo a,
.main-menu ul li a {
	color: {$transparent_menu_link_color};
}

.logo a:hover,
.main-menu ul li a:hover {
	color: {$transparent_menu_link_hover_color};
}

.nontransparent .logo a,
.nontransparent .main-menu ul li a {
	color: {$menu_link_color};
}

.nontransparent .logo a:hover,
.nontransparent .main-menu ul li a:hover {
	color: {$menu_link_hover_color};
}";
} else {
	$menu_styles = "
.logo a,
.main-menu ul li a {
	color: {$menu_link_color};
}

.logo a:hover,
.main-menu ul li a:hover {
	color: {$menu_link_hover_color};
}";
}

$bg_title_toppadding = $menu_height + 140;
$bg_title_bottompadding = 140;
$trans_title_toppadding = $menu_height + 120;
$trans_title_bottompadding = 150;

$title_styles = "
.background .title {
	padding: {$bg_title_toppadding}px 0 {$bg_title_bottompadding}px;
}

.blog .background .title {
	padding: 0;
}

.transparent .title {
	padding: {$trans_title_toppadding}px 0 {$trans_title_bottompadding}px;
}

.single .title {
	padding: {$bg_title_toppadding}px 0 {$trans_title_bottompadding}px;
}
";

echo <<<CSS
body,
button,
input,
select,
textarea {
	font-family: {$body_font};
	font-size: {$font_size}px;
	color: {$text_color};
	font-weight: {$body_font_weight};
}

html, body {
	background: {$page_bg_color};
}

.wrapper {
	padding-top: {$menu_height}px;
	background: {$page_bg_color};
}

.header-bg-image .wrapper {
	padding-top: 0;
}

#container { 
	padding-top: 2em;
}

#container.blog-masonry-fullscreen {
	padding-top: 3em;
}

.container {
	max-width: {$page_width}px;
}

.blog-masonry {
	max-width: {$masonry_blog_width}px;
}

#header {
	background: {$header_bg_color};
	{$header_style}
}

.header-no-bg #header {
	background: {$header_bg_color}!important; /* Override JS */
	-webkit-box-shadow: 0px 2px 5px 0px rgba(50, 50, 50, 0.1);
	-moz-box-shadow: 0px 2px 5px 0px rgba(50, 50, 50, 0.1);
	box-shadow: 0px 2px 5px 0px rgba(50, 50, 50, 0.1);
}

a {
	color: {$link_color};
}

a:hover {
	color: {$link_hover_color};
}

h1,
h2,
h3,
h4,
h5,
h6,
.logo,
.main-menu {
	font-family: {$headings_font};
	color: {$headings_color};
	font-weight: {$headings_font_weight};
	text-transform: {$headings_text_transform};
}

.logo {
	margin: {$logo_top_margin}px 0 {$logo_bottom_margin}px;
}

.main-menu {
	font-size: {$menu_font_size}px;
}

.menu-icon,
.main-menu ul li {
	line-height: {$menu_height}px;
	height: {$menu_height}px;
}

{$menu_styles}

.main-menu ul ul {
	background: {$dd_bg_color};
	border-color: {$dd_bg_color};
}

.main-menu ul li ul li a {
	color: {$dd_link_color}!important;
}

.main-menu ul li ul li a:hover {
	color: {$dd_link_hover_color}!important;
}

#menu {
	font-family: {$headings_font};
	padding: {$menu_height}px 0 0;
}

h1 { font-size: {$h1_font_size}px; }
h2 { font-size: {$h2_font_size}px; }
h3 { font-size: {$h3_font_size}px; }
h4 { font-size: {$h4_font_size}px; }
h5 { font-size: {$h5_font_size}px; }
h6 { font-size: {$h6_font_size}px; }

.entry-title {
	font-size: {$post_title_size}px;
}

.blog-masonry .entry-title,
.blog-masonry-fullscreen .entry-title {
	font-size: {$masonry_post_title_size}px;
}

.entry-title a {
	color: {$headings_color};
}

.entry-title a:hover {
	color: {$post_title_hover_color};
}

.widgettitle {
	font-size: {$widget_title_size}px;
}

{$title_styles}

.post-meta, .post-meta-alt, blockquote cite {
	font-family: {$headings_font};
	font-weight: {$headings_font_weight};
}

blockquote cite {
	color: {$text_color};
}

.social-sharing ul span.list-wrap {
	background: {$page_bg_color};
}

.single-post-nav a {
	font-family: {$headings_font};
}

#footer {
	background: {$footer_bg_color};
	color: {$footer_text_color};
}

#footer a {
	color: {$footer_link_color};
}

#footer a:hover {
	color: {$footer_link_hover_color};
}

#footer h3.widgettitle {
	color: {$footer_text_color};
}

#footer .widget .underline {
	background: {$footer_divider_color};
}

#customize-controls {
	font-family: 'Open Sans';
	font-size: 14px;
}

#customize-controls input[type="text"],
#customize-controls select,
#customize-controls textarea {
	margin: 0 0 1em;
	font-size: 14px;
	font-family: 'Open Sans', Arial;
}

#customize-controls h3 {
	font-family: 'Open Sans', Arial;
}

#customize-controls img {
	width: auto;
}

/* RevSlider Styles */
.tp-leftarrow.custom {
	background: url(../images/arrows.png) no-repeat 0 0;
	width: 54px;
	height: 54px;
	margin-top: 2em;
}

.tp-rightarrow.custom {
	background: url(../images/arrows.png) no-repeat -54px 0;
	width: 54px;
	height: 54px;
	margin-top: -2em;
}

.tp-leftarrow.custom:hover {
	background-position: 0 -54px;
}

.tp-rightarrow.custom:hover {
	background-position: -54px -54px;
}

.tp-bullets.custom {
	bottom: 30px;
}

.tp-bullets.custom .bullet {
	border-radius: 50%;
	width: 11px;
	height: 11px;
	border: 2px solid #fff;
	float: left;
	margin: 0 4px;
	filter: alpha(opacity=60);
	opacity: 0.6;
}

.tp-bullets.custom .bullet:hover {
	cursor: pointer;
	filter: alpha(opacity=100);
	opacity: 1;
}

.tp-bullets.custom .bullet.selected {
	background: #fff;
	filter: alpha(opacity=100);
	opacity: 1;
}
CSS;
?>