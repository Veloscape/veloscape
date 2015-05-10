<?php
/**
 * Plugin Name: Lora Theme Shortcodes
 * Plugin URI:
 * Description: Shortcodes for the Lora theme.
 * Version: 1.0.1
 * Author: Caden Grant
 * Author URI: http://www.themeforest.net/user/CadenGrant
 */

defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

function admin_shortcode_scripts() {
	wp_enqueue_script( 'shortcodes', plugins_url( 'shortcodes.js', __FILE__ ) );
}
add_action( 'admin_enqueue_scripts', 'admin_shortcode_scripts' );

function shortcode_dropdown_init() {

	// Abort early if the user will never see TinyMCE
	if ( ! current_user_can( 'edit_posts' ) && ! current_user_can( 'edit_pages' ) && get_user_option( 'rich_editing' ) == 'true')
		return;

	// Add a callback to regiser our tinymce plugin   
	add_filter("mce_external_plugins", "register_tinymce_plugin"); 

	// Add a callback to add our button to the TinyMCE toolbar
	add_filter('mce_buttons', 'add_tinymce_dropdown');
}
add_action( 'init', 'shortcode_dropdown_init' );


// This callback registers our plug-in
function register_tinymce_plugin( $plugin_array ) {
    $plugin_array['shortcodes'] = plugins_url( 'shortcodes.js', __FILE__ );
    return $plugin_array;
}

// This callback adds our button to the toolbar
function add_tinymce_dropdown( $buttons ) {
            //Add the button ID to the $button array
    $buttons[] = "shortcodes";
    return $buttons;
}

/* Shortcodes */
function enqueue_style() {
	wp_enqueue_style( 'theme-shortcodes', plugins_url( 'lora-shortcodes.css', __FILE__ ), array( 'style' ) );
}
add_action( 'wp_enqueue_scripts', 'enqueue_style' );

function the_content_filter( $content ) {
    $block = join( '|', array( 'one-half', 'one-third', 'one-fourth', 'one-fifth', 'one-sixth', 'two-thirds', 'three-fourths', 'four-fifths', 'five-sixths', 'accordion', 'section', 'toggle', 'heading', 'alert', 'fa', 'lightbox', 'lb_gallery', 'lb_image', 'lead', 'list', 'li', 'button', 'cta', 'row', 'portfolio' ) );
    $rep = preg_replace( "/(<p>)?\[($block)(\s[^\]]+)?\](<\/p>|<br \/>)?/","[$2$3]", $content );
    $rep = preg_replace( "/(<p>)?\[\/($block)](<\/p>|<br \/>)?/","[/$2]", $rep );
	return $rep;
}
add_filter( 'the_content', 'the_content_filter' );

/* One Half Column Shortcode */
function one_half( $atts, $content = null ) {
	if( isset( $atts['first'] ) == 'yes' ) {
		$row = '<div class="row">';
		$endrow = '';
	} elseif( isset( $atts['last'] ) == 'yes' ) {
		$row = '';
		$endrow = '</div>';
	} else {
		$row = '';
		$endrow = '';
	}

	if( isset( $atts['align'] ) ) {
		$align = ' style="text-align:' . $atts['align'] . '"';
	} else {
		$align = '';
	}

	return $row . '<div class="col six"' . $align . '>' . do_shortcode( $content ) . '</div>' . $endrow;

}
add_shortcode( 'one-half', 'one_half' );

/* One Third Column Shortcode */
function one_third( $atts, $content = null ) {
	if( isset( $atts['first'] ) == 'yes' ) {
		$row = '<div class="row">';
		$endrow = '';
	} elseif( isset( $atts['last'] ) == 'yes' ) {
		$row = '';
		$endrow = '</div>';
	} else {
		$row = '';
		$endrow = '';
	}

	if( isset( $atts['align'] ) ) {
		$align = ' style="text-align:' . $atts['align'] . '"';
	} else {
		$align = '';
	}

	return $row . '<div class="col four"' . $align . '>' . do_shortcode( $content ) . '</div>' . $endrow;

}
add_shortcode( 'one-third', 'one_third' );

/* One Fourth Column Shortcode */
function one_fourth( $atts, $content = null ) {
	if( isset( $atts['first'] ) == 'yes' ) {
		$row = '<div class="row">';
		$endrow = '';
	} elseif( isset( $atts['last'] ) == 'yes' ) {
		$row = '';
		$endrow = '</div>';
	} else {
		$row = '';
		$endrow = '';
	}

	if( isset( $atts['align'] ) ) {
		$align = ' style="text-align:' . $atts['align'] . '"';
	} else {
		$align = '';
	}

	return $row . '<div class="col three"' . $align . '>' . do_shortcode( $content ) . '</div>' . $endrow;

}
add_shortcode( 'one-fourth', 'one_fourth' );

/* One Fifth Column Shortcode */
function one_fifth( $atts, $content = null ) {
	if( isset( $atts['first'] ) == 'yes' ) {
		$row = '<div class="row">';
		$endrow = '';
	} elseif( isset( $atts['last'] ) == 'yes' ) {
		$row = '';
		$endrow = '</div>';
	} else {
		$row = '';
		$endrow = '';
	}

	if( isset( $atts['align'] ) ) {
		$align = ' style="text-align:' . $atts['align'] . '"';
	} else {
		$align = '';
	}

	return $row . '<div class="col one-fifth"' . $align .'>' . do_shortcode( $content ) . '</div>' . $endrow;

}
add_shortcode( 'one-fifth', 'one_fifth' );

/* One Sixth Column Shortcode */
function one_sixth( $atts, $content = null ) {
	if( isset( $atts['first'] ) == 'yes' ) {
		$row = '<div class="row">';
		$endrow = '';
	} elseif( isset( $atts['last'] ) == 'yes' ) {
		$row = '';
		$endrow = '</div>';
	} else {
		$row = '';
		$endrow = '';
	}

	if( isset( $atts['align'] ) ) {
		$align = ' style="text-align:' . $atts['align'] . '"';
	} else {
		$align = '';
	}

	return $row . '<div class="col two"' . $align . '>' . do_shortcode( $content ) . '</div>' . $endrow;

}
add_shortcode( 'one-sixth', 'one_sixth' );

/* Two Thirds Column Shortcode */
function two_thirds( $atts, $content = null ) {
	if( isset( $atts['first'] ) == 'yes' ) {
		$row = '<div class="row">';
		$endrow = '';
	} elseif( isset( $atts['last'] ) == 'yes' ) {
		$row = '';
		$endrow = '</div>';
	} else {
		$row = '';
		$endrow = '';
	}

	if( isset( $atts['align'] ) ) {
		$align = ' style="text-align:' . $atts['align'] . '"';
	} else {
		$align = '';
	}

	return $row . '<div class="col eight"' . $align. '>' . do_shortcode( $content ) . '</div>' . $endrow;

}
add_shortcode( 'two-thirds', 'two_thirds' );

/* Three Fourths Column Shortcode */
function three_fourths( $atts, $content = null ) {
	if( isset( $atts['first'] ) == 'yes' ) {
		$row = '<div class="row">';
		$endrow = '';
	} elseif( isset( $atts['last'] ) == 'yes' ) {
		$row = '';
		$endrow = '</div>';
	} else {
		$row = '';
		$endrow = '';
	}

	if( isset( $atts['align'] ) ) {
		$align = ' style="text-align:' . $atts['align'] . '"';
	} else {
		$align = '';
	}

	return $row . '<div class="col nine"' . $align . '>' . do_shortcode( $content ) . '</div>' . $endrow;

}
add_shortcode( 'three-fourths', 'three_fourths' );

/* Four Fifths Column Shortcode */
function four_fifths( $atts, $content = null ) {
	if( isset( $atts['first'] ) == 'yes' ) {
		$row = '<div class="row">';
		$endrow = '';
	} elseif( isset( $atts['last'] ) == 'yes' ) {
		$row = '';
		$endrow = '</div>';
	} else {
		$row = '';
		$endrow = '';
	}

	if( isset( $atts['align'] ) ) {
		$align = ' style="text-align:' . $atts['align'] . '"';
	} else {
		$align = '';
	}

	return $row . '<div class="col four-fifths"' . $align . '>' . do_shortcode( $content ) . '</div>' . $endrow;

}
add_shortcode( 'four-fifths', 'four_fifths' );

/* Five Sixths Column Shortcode */
function five_sixths( $atts, $content = null ) {
	if( isset( $atts['first'] ) == 'yes' ) {
		$row = '<div class="row">';
		$endrow = '';
	} elseif( isset( $atts['last'] ) == 'yes' ) {
		$row = '';
		$endrow = '</div>';
	} else {
		$row = '';
		$endrow = '';
	}

	if( isset( $atts['align'] ) ) {
		$align = ' style="text-align:' . $atts['align'] . '"';
	} else {
		$align = '';
	}

	return $row . '<div class="col ten"' . $align . '>' . do_shortcode( $content ) . '</div>' . $endrow;

}
add_shortcode( 'five-sixths', 'five_sixths' );

/**
 * 2.0 - Accordion & Toggle 
 *
 * @since Framework 1.0
 */
function accordion( $atts, $content = null ) {
	return '<div id="accordion">' . do_shortcode( $content ) . '</div>';
}
add_shortcode( 'accordion', 'accordion' );

function accordion_section( $atts, $content = null ) {

	if( isset( $atts['icon'] ) ) {
		$icon = '<i class="fa fa-' . $atts['icon'] . '"></i> &nbsp;';
	} else {
		$icon = '';
	}

	if( isset( $atts['title'] ) ) {
		$title = $atts['title'];
	} else {
		$title = '';
	}

	$html = '<span class="section-title">' . $icon . '<span>' . $title . '</span></span>';
	$html .= '<div>';
	$html .= '<p>' . do_shortcode( $content ) . '</p>';
	$html .= '</div>';

	return $html;
}
add_shortcode( 'section', 'accordion_section' );

function toggle( $atts, $content = null ) {

	if( isset( $atts['icon'] ) ) {
		$icon = '<i class="fa fa-' . $atts['icon'] . '"></i> &nbsp;';
	} else {
		$icon = '';
	}

	if( isset( $atts['id'] ) ) {
		$id = $atts['id'];
	} else {
		$id = '';
	}

	if( isset( $atts['title'] ) ) {
		$title = $atts['title'];
	} else {
		$title = '';
	}

	$html = '<span id="' . $id . '" class="toggle-title">' . $icon . '<span>' . $title . '</span></span>';
	$html .= '<div class="' . $id . ' toggle-content">' . do_shortcode( $content ) . '</div>';

	return $html;
}
add_shortcode( 'toggle', 'toggle' );

function heading( $atts, $content = null ) {
	return '<h3 class="heading">' . do_shortcode( $content ) . '</h3>';
}
add_shortcode( 'heading', 'heading' );

function alert( $atts, $content = null ) {
	if( isset( $atts['icon'] ) ) {
		$icon = '<i class="fa fa-' . $atts['icon'] . '"></i> &nbsp;';
	} else {
		$icon = '';
	}

	return '<div class="alert-' . $atts['type'] . '">' . $icon . '' . do_shortcode( $content ) . '</div>';
}
add_shortcode( 'alert', 'alert' );

function font_awesome( $atts, $content = null ) {
	if( isset( $atts['size'] ) ) {
		$size = 'fa-' . $atts['size'] . 'x';
	} else {
		$size = '';
	}

	if( isset( $atts['color'] ) ) {
		$color = ' style="color:' . $atts['color'] . '"';
	} else {
		$color = '';
	}

	if( isset( $atts['icon'] ) ) {
		$icon = $atts['icon'];
	} else {
		$icon = '';
	}

	return '<i class="fa fa-' . $icon . ' ' . $size . '"' . $color . '></i> ';
}
add_shortcode( 'fa', 'font_awesome' );

function lightbox( $atts, $content = null ) {

	if( isset( $atts['link'] ) ) {
		$link = $atts['link'];
	} else {
		$link = '';
	}

	if( isset( $atts['title'] ) ) {
		$title = $atts['title'];
	} else {
		$title = '';
	}

	return '<div class="lightbox"><a href="' . $link . '"><img src="' . do_shortcode( $content ) . '" alt="' . $title . '"></a></div>';
}
add_shortcode( 'lightbox', 'lightbox' );

function lb_gallery( $atts, $content = null ) {
	return '<div class="lightbox gallery">' . do_shortcode( $content ) . '</div>';
}
add_shortcode( 'lb_gallery', 'lb_gallery' );

function lb_image( $atts, $content = null ) {

	if( isset( $atts['link'] ) ) {
		$link = $atts['link'];
	} else {
		$link = '';
	}

	if( isset( $atts['title'] ) ) {
		$title = $atts['title'];
	} else {
		$title = '';
	}

	return '<a href="' . $link . '"><img src="' . do_shortcode( $content ) . '" alt="' . $title . '"></a>';
}
add_shortcode( 'lb_image', 'lb_image' );

function lead_shortcode( $atts, $content = null ) {
	if( isset( $atts['dropcap'] ) && $atts['dropcap'] == 'yes' ) {
		$dropcap = 'dropcap';
	} else {
		$dropcap = '';
	}

	return '<p class="lead ' . $dropcap . '">' . do_shortcode( $content ) . '</p>';
}
add_shortcode( 'lead', 'lead_shortcode' );

function list_shortcode( $atts, $content = null ) {
	return '<ul class="styled-list">' . do_shortcode( $content ) . '</ul>';
}
add_shortcode( 'list', 'list_shortcode' );

function list_item( $atts, $content = null ) {
	if( isset( $atts['icon'] ) ) {
		$icon = '<i class="fa fa-' . $atts['icon'] . '"></i> ';
	} else {
		$icon = '';
	}

	return '<li>' . $icon . ' ' . do_shortcode( $content ) . '</li>';
}
add_shortcode( 'li', 'list_item' );

function button_shortcode( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'link' => '#',
		'style' => '1',
		'size' => 'small',
		'color' => 'darkgray',
		'icon' => ''
	), $atts ) );

	if( $icon ) {
		$i = '<i class="fa fa-' . $icon . '"></i> ';
	} else {
		$i = '';
	}

	if( $style == '1' ) {
		$button = 'button';
	} elseif( $style == '2' ) {
		$button = 'button-alt';
	} else {
		$button = 'button';
	}

	return '<a href="' . $link . '" class="button ' . $button . '-' . $color . ' ' . $size . '">' . $i . '' . do_shortcode( $content ) . '</a>';
}
add_shortcode( 'button', 'button_shortcode' );

function calltoaction( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'heading' => '',
		'subtext' => '',
		'actiontext' => 'Buy Now',
		'link' => '#',
		'style' => '1',
		'size' => 'large',
		'color' => 'darkgray',
		'icon' => ''
	), $atts ) );

	if( $icon ) {
		$i = '<i class="fa fa-' . $icon . '"></i> ';
	} else {
		$i = '';
	}

	if( $style == '1' ) {
		$button = 'button';
	} elseif( $style == '2' ) {
		$button = 'button-alt';
	} else {
		$button = 'button';
	}

	$html = '<div class="row">';
	$html .= '<div class="col twelve">';
	$html .= '<div class="row cta"><span class="col nine"><h3>' . $heading . '</h3><p>' . $subtext . '</p></span><span class="col three buttonright"><a href="' . $link . '" class="button ' . $button . '-' . $color . ' ' . $size . '">' . $i . '' . $actiontext . '</a></span></div>';
	$html .= '</div>';
	$html .= '</div>';

	return $html;
}
add_shortcode( 'cta', 'calltoaction' );

function row_shortcode( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'paddingtop' => '0',
		'paddingright' => '0',
		'paddingbottom' => '0',
		'paddingleft' => '0',
		'align' => ''
	), $atts ) );

	$padding = ' style="padding: ' . $paddingtop . 'px ' . $paddingright . 'px ' . $paddingbottom . 'px ' . $paddingright . 'px"';

	if( $align ) {
		$align = ' style="text-align:' . $align . '"';
	}

	return '<div class="row-alt"' . $padding . '><div class="col twelve"' . $align . '>' . do_shortcode( $content ) . '</div></div>';
}
add_shortcode( 'row', 'row_shortcode' );

/* Portfolio Shortcode */
function lora_portfolio( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'columns' => 3,
		'maxposts' => 6,
		'pagination' => true
	), $atts ) );

	$thumb_size = 'portfolio';

	if( !wp_script_is( 'masonry.pkgd.min' ) ) {
		wp_enqueue_script( 'masonry.pkgd.min', get_template_directory_uri() . '/js/masonry.pkgd.min', array(), '3.2.2', true );
	}

	if( is_page_template( 'portfolio.php' ) ) {
		$output = '<div class="portfolio_'.$columns.'_col">';
	} else {
		$output = '<div class="portfolio-container portfolio_'.$columns.'_col">';
	}

		$output .= '<div class="grid">';

			$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
			$args = array( 'post_type' => 'portfolio', 'posts_per_page' => $maxposts, 'paged' => $paged );
			$wp_query = new WP_Query( $args );

			if( $wp_query->have_posts() ) :

				while( $wp_query->have_posts() ) : $wp_query->the_post();

					$post_class = get_post_class( array( 'post masonry' ), get_the_ID() );

					if( $post_class && is_array( $post_class ) ) {
						$classes = implode( ' ', get_post_class( array( 'post masonry' ), get_the_ID() ) );
					}

					$thumb = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), $thumb_size );
					
					$output .= '<article id="post-'. get_the_ID() . '" class="' . $classes . '">';
						
						$output .= '<a href="' . get_the_permalink() . '">';
						if( $thumb ) {
							$output .= '<img src="' . esc_url( $thumb[0] ) . '" width="' . esc_attr( $thumb[1] ) . '" height="' . esc_attr( $thumb[2] ) . '" alt="" />';
						} else {
							$output .= '<img src="' . get_template_directory_uri() . '/images/placeholder.jpg" alt="No Image" />';
						}
						$output .= '</a>';
						
						$output .= '<div class="overlay"></div>';

						$output .= '<div class="item-title">';
							$output .= '<a href="' . get_the_permalink() . '"><h2 class="entry-title">' . get_the_title() . '</h2></a>';
						$output .= '</div>';

					$output .= '</article>';

				endwhile;

			else:

				get_template_part( 'content', 'none' );

			endif;

			$output .= '</div>';

		$output .= '</div>';

	$output .= '<div class="clear"></div></div>';

	//$output .= lora_post_navigation();
	$output .= wp_reset_query();

	return $output;
}
add_shortcode( 'portfolio', 'lora_portfolio' );

/* Add shortcodes documentation to theme */
function add_menu() {
	add_theme_page( 'Lora Documentation', 'Lora Documentation', 'edit_theme_options', 'lora', 'my_custom_menu_page' );
}
add_action('admin_menu', 'add_menu');

function my_custom_menu_page() {
	$output = '<div class="wrap">';

	$output .= '<h1>Lora Documentation</h1>';
	$output .= '<h2>Shortcodes</h2>';

	/* Nav */
	$output .= '
	<ul>
		<li style="display: inline"><a href="#rows">Rows</a></li>
		<li style="display: inline"> &middot; </li>
		<li style="display: inline"><a href="#columns">Columns</a></li>
		<li style="display: inline"> &middot; </li>
		<li style="display: inline"><a href="#portfolio">Portfolio</a></li>
		<li style="display: inline"> &middot; </li>
		<li style="display: inline"><a href="#buttons">Buttons</a></li>
		<li style="display: inline"> &middot; </li>
		<li style="display: inline"><a href="#fa">Font Awesome Icons</a></li>
		<li style="display: inline"> &middot; </li>
		<li style="display: inline"><a href="#lightbox">Lightbox</a></li>
		<li style="display: inline"> &middot; </li>
		<li style="display: inline"><a href="#accordion">Accordion</a></li>
		<li style="display: inline"> &middot; </li>
		<li style="display: inline"><a href="#toggle">Toggle</a></li>
		<li style="display: inline"> &middot; </li>
		<li style="display: inline"><a href="#tabs">Tabs</a></li>
		<li style="display: inline"> &middot; </li>
		<li style="display: inline"><a href="#alert">Alert</a></li>
		<li style="display: inline"> &middot; </li>
		<li style="display: inline"><a href="#cta">Call To Action</a></li>
		<li style="display: inline"> &middot; </li>
		<li style="display: inline"><a href="#lead">Lead</a></li>
		<li style="display: inline"> &middot; </li>
		<li style="display: inline"><a href="#list">List</a></li>
	</ul>
	';

	/* Rows */
	$output .= '<div id="rows" style="padding-top:20px"><h3>Rows</h3>';
	$output .= '<p>Creates a horizontal row. Used for separating and spacing content.</p>
	<p><strong>Shortcode:</strong> <code>[row][/row]</code></p>
	<p><strong>Parameters:</strong>
	<ul style="padding: 0 0 5px 15px;">
		<li><strong>&middot; paddingtop</strong> - The amount of top padding in pixels. Default = 0</li>
		<li><strong>&middot; paddingbottom</strong> - The amount of bottom padding in pixels. Default = 0</li>
		<li><strong>&middot; textalign</strong> - Values: <strong>center</strong>, <strong>right</strong>. Default = <strong>left</strong></li>
	</ul></p>
	<p><strong>Example:</strong><pre>[row paddingtop="30" paddingbottom="30" textalign="center"][/row]</pre></p>
	<div style="width: 100%; height: 1px; background: #ddd;"></div></div>';

	/* Columns */
	$output .= '<div id="columns" style="padding-top:20px"><h3>Columns</h3>';
	$output .= 'Used to create columns. The first column must always have the attribute <code>first="yes"</code> and the last must always have <code>last="yes"</code>.</p>
	<p><strong>Shortcodes:</strong><br />
	<code>[one-half][/one-half]</code><br />
	<code>[one-third][/one-third]</code><br />
	<code>[one-fourth][/one-fourth]</code><br />
	<code>[one-fifth][/one-fifth]</code><br />
	<code>[one-sixth][/one-sixth]</code><br />
	<code>[two-thirds][/two-thirds]</code><br />
	<code>[three-fourths][/three-fourths]</code><br />
	<code>[four-fifths][/four-fifths]</code><br />
	<code>[five-sixths][/five-sixths]</code><br />
	</p>
	<p><strong>Parameters:</strong>
	<ul style="padding: 0 0 5px 15px;">
		<li><strong>&middot; first</strong> - If is first column. Values: <strong>yes</strong></li>
		<li><strong>&middot; last</strong> - If is last column. Values: <strong>yes</strong></li>
		<li><strong>&middot; textalign</strong> - Values: <strong>center</strong>, <strong>right</strong>. Default = <strong>left</strong></li>
	</ul></p>
	<p><strong>Example:</strong>
	<pre>[one-third first="yes" textalign="center"]Column 1[/one-third]<br />[one-third]Column 2[/one-third]<br />[one-third last="yes"]Column 3[/one-third]</pre></p>
	<p><strong>Example 2:</strong>
	<pre>[three-fourths first="yes"]Column 1[/three-fourths]<br />[one-fourth last="yes"]Column 2[/one-fourth]</pre></p>
	<div style="width: 100%; height: 1px; background: #ddd;"></div></div>';

	/* Portfolio */
	$output .= '<div id="portfolio" style="padding-top:20px"><h3>Portfolio</h3>';
	$output .= '
	<p><strong>Parameters:</strong>
	<ul style="padding: 0 0 5px 15px;">
		<li><strong>&middot; columns</strong> - Number of columns. Values: <strong>1</strong>, <strong>2</strong>, <strong>3</strong>. Default <strong>3</strong>.</li>
		<li><strong>&middot; maxposts</strong> - The number of items to show. Set as -1 to display all items. Default <strong>6</strong></li>
	</ul></p>
	<p><strong>Example:</strong>
	<pre>[portfolio maxposts="6" columns="2"]</pre></p>
	<div style="width: 100%; height: 1px; background: #ddd;"></div></div>';

	/* Buttons */
	$output .= '<div id="buttons" style="padding-top:20px"><h3>Buttons</h3>';
	$output .= 'Used to create columns. The first column must always have the attribute <code>first="yes"</code> and the last must always have <code>last="yes"</code>.</p>
	<p><strong>Shortcode:</strong><code>[button link="http://url.com"][/button]</code></p>
	<p><strong>Parameters:</strong>
	<ul style="padding: 0 0 5px 15px;">
		<li><strong>&middot; link</strong> - The URL you want to link to. Default = <strong>#</strong></li>
		<li><strong>&middot; style</strong> - The button style. Values: <strong>1</strong>, <strong>2</strong>. Default = <strong>1</strong></li>
		<li><strong>&middot; size</strong> - The button size. Values: <strong>small</strong>, <strong>large</strong>. Default = <strong>small</strong></li>
		<li><strong>&middot; color</strong> - The button color. Values: <strong>darkgray</strong>, <strong>white</strong>, <strong>blue</strong>, <strong>turquoise</strong>, <strong>green</strong>, <strong>yellow</strong>, <strong>pink</strong>, <strong>red</strong>. Default = <strong>darkgray</strong></li>
		<li><strong>&middot; icon</strong> - The icon name you want to use. <a href="http://fortawesome.github.io/Font-Awesome/icons/" target="_blank">Click here for values</a> (opens in new window). Default = <strong>none</strong>.
	</ul></p>
	<p><strong>Examples:</strong>
	<pre>[button link="http://url.com"]Button Text[/button]<br />[button link="http://url.com" size="large" color="turquoise" icon="shopping-cart"]Buy Now[/button]</pre></p>
	<div style="width: 100%; height: 1px; background: #ddd;"></div></div>';

	/* Font awesome */
	$output .= '<div id="fa" style="padding-top:20px"><h3>Font Awesome Icons</h3>';
	$output .= '<p>Used to create icons.</p>
	<p><strong>Shortcode:</strong><code>[fa icon="icon-name"][/fa]</code></p>
	<p><strong>Parameters:</strong>
	<ul style="padding: 0 0 5px 15px;">
		<li><strong>&middot; icon</strong> - The icon name you want to use. <a href="http://fortawesome.github.io/Font-Awesome/icons/" target="_blank">Click here for values</a> (opens in new window).</li>
		<li><strong>&middot; size</strong> - The size of the icon. Values: <strong>1</strong>, <strong>2</strong>, <strong>3</strong>, <strong>4</strong>, <strong>5</strong>. Default = <strong>1</strong></li>
		<li><strong>&middot; color</strong> - The HEX code of the color you want to use. Example: <strong>#000000</strong> (black). Default = <strong>none</strong>. <a href="http://www.colorpicker.com/" target="_blank">HEX generator</a> (opens in new window).</li>
	</ul></p>
	<p><strong>Examples:</strong>
	<pre>[fa icon="star"]<br />[fa icon="star" size="4" color="#FFEA00"]</pre></p>
	<div style="width: 100%; height: 1px; background: #ddd;"></div></div>';

	/* Lightbox */
	$output .= '<div id="lightbox" style="padding-top:20px"><h3>Lightbox</h3>';
	$output .= '<p>Used for images/galleries. The lightbox pops up when an image is clicked and shows the full image. Can be used for a single image and for image galleries.</p>
	<p><strong>Single Image Shortcode:</strong><code>[lightbox title="Image Title" link="http://large-image-url.com"]http://small-image-url.com[/lightbox]</code></p>
	<p><strong>Gallery Shortcode:</strong><pre>[lb_gallery]<br />[lb_image title="Image Title" link="http://large-image-url.com"]http://small-image-url.com[/lb_image]<br />[lb_image title="Image Title" link="http://large-image-url.com"]http://small-image-url.com[/lb_image]<br/ >[/lb_gallery]</pre></p>
	<p><strong>Parameters:</strong>
	<ul style="padding: 0 0 5px 15px;">
		<li><strong>&middot; link</strong> - The URL to the full image to be displayed.</li>
		<li><strong>&middot; title</strong> - The image title.</li>
	</ul></p>
	<div style="width: 100%; height: 1px; background: #ddd;"></div></div>';

	/* Accordion */
	$output .= '<div id="accordion" style="padding-top:20px"><h3>Accordion</h3>';
	$output .= '<p><strong>Shortcode:</strong><pre>[accordion]<br />[section title="Title"]Content[/section]<br />[section title="Title"]Content[/section]<br />[/accordion]</pre></p>
	<p><strong>Parameters:</strong>
	<ul style="padding: 0 0 5px 15px;">
		<li><strong>&middot; title</strong> - The title of the section.</li>
		<li><strong>&middot; icon</strong> - The icon name you want to use. Will be displayed next to section title. <a href="http://fortawesome.github.io/Font-Awesome/icons/" target="_blank">Click here for values</a> (opens in new window).</li>
	</ul></p>
	<p><strong>Example:</strong>
	<pre>[accordion]<br />[section title="Title" icon="icon-name"]Content[/section]<br />[section title="Title" icon="icon-name"]Content[/section]<br />[/accordion]</pre></p>
	<div style="width: 100%; height: 1px; background: #ddd;"></div></div>';

	/* Toggle */
	$output .= '<div id="toggle" style="padding-top:20px"><h3>Toggle</h3>';
	$output .= '<p>Creates sections of content that can be toggled.</p>
	<p><strong>Shortcode:</strong><pre>[toggle id="unique-id" title="Title"]Content[/toggle]</pre></p>
	<p><strong>Parameters:</strong>
	<ul style="padding: 0 0 5px 15px;">
		<li><strong>&middot; id</strong> - The ID of the toggle section. <strong>Note:</strong> The ID <strong>must</strong> be unique. ie. toggle1, toggle2, etc.</li>
		<li><strong>&middot; title</strong> - The title of the section.</li>
		<li><strong>&middot; icon</strong> - The icon name you want to use. Will be displayed next to section title. <a href="http://fortawesome.github.io/Font-Awesome/icons/" target="_blank">Click here for values</a> (opens in new window).</li>
	</ul></p>
	<p><strong>Example:</strong>
	<pre>[toggle id="toggle1" title="Title" icon="icon-name"]Content[/toggle]<br />[toggle id="toggle2" title="Title" icon="icon-name"]Content[/toggle]</pre></p>
	<div style="width: 100%; height: 1px; background: #ddd;"></div></div>';

	/* Tabs */
	$output .= '<div id="tabs" style="padding-top:20px"><h3>Tabs</h3>';
	$output .= '<p>Creates sections of content with linkable tabs.</p>
	<p>Instead of using a shortcode to create tabs, we use HTML. To add tabs, the best method is to add them via the shortcode generator in the <strong>Visual</strong> editor, and then switch to the <strong>Text</strong> editor to customize the tabs to make sure the HTML code remains valid.</p>
	<p>
	<img src="' . plugins_url( 'images/visualeditor.png', __FILE__ ) . '" />
	<img src="' . plugins_url( 'images/texteditor.png', __FILE__ ) . '" />
	</p>
	<p><strong>Code:</strong>
	<pre>&lt;div id="tabs">
	&lt;ul>
		&lt;li>&lt;i class="fa fa-paint-brush">&lt;/i> &lt;a href="#tabs-1">Tab 1&lt;/a>&lt;/li>
		&lt;li>&lt;i class="fa fa-rocket">&lt;/i> &lt;a href="#tabs-2">Tab 2&lt;/a>&lt;/li>
		&lt;li>&lt;i class="fa fa-wrench">&lt;/i> &lt;a href="#tabs-3">Tab 3&lt;/a>&lt;/li>
	&lt;/ul>
	&lt;div id="tabs-1">Tabbed section 1.&lt;/div>
	&lt;div id="tabs-2">Tabbed section 2.&lt;/div>
	&lt;div id="tabs-3">Tabbed section 1.&lt;/div>
&lt;/div>
</pre></p>
	<p>Notice the code: <code>&lt;i class="fa fa-paint-brush">&lt;/i></code>, <code>&lt;i class="fa fa-rocket">&lt;/i></code>, etc. This code will output an icon if you wish to use one. <a href="http://fortawesome.github.io/Font-Awesome/icons/" target="_blank">Click here for icon names</a> (opens in new window).</p>

	<p>Each tab must have a unique link. For example: <code>&lt;a href="#tabs-1">Tab 1&lt;/a></code> This links to the div with the id of tabs-1: <code>&lt;div id="tabs-1">Tabbed section 1.&lt;/div></code>.</p>
	
	<div style="width: 100%; height: 1px; background: #ddd;"></div></div>';

	/* Alert */
	$output .= '<div id="alert" style="padding-top:20px"><h3>Alert</h3>';
	$output .= '<p>Creates a notice/alert box.</p>
	<p><strong>Shortcode:</strong><pre>[alert type=""]Message goes here.[/alert]</pre></p>
	<p><strong>Parameters:</strong>
	<ul style="padding: 0 0 5px 15px;">
		<li><strong>&middot; type</strong> - The alert/notice type. Values: <strong>note</strong>, <strong>error</strong>, <strong>success</strong>, <strong>info</strong>.</li>
		<li><strong>&middot; icon</strong> - The icon name you want to use. Will be displayed next to section title. <a href="http://fortawesome.github.io/Font-Awesome/icons/" target="_blank">Click here for values</a> (opens in new window).</li>
	</ul></p>
	<p><strong>Examples:</strong>
	<pre>[alert type="note"]This is a standard alert message.[/alert]<br />[alert type="error" icon="exclamation"]This is a standard error message.[/alert]</pre></p>
	<div style="width: 100%; height: 1px; background: #ddd;"></div></div>';

	/* Call To Action */
	$output .= '<div id="cta" style="padding-top:20px"><h3>Call To Action</h3>';
	$output .= '<p>Creates a call to action box. Good for getting peoples attention to download or purchase something.</p>
	<p><strong>Shortcode:</strong><pre>[cta heading="Main text goes here" subtext="Sub text goes here" actiontext="Button Text" link="#"]</pre></p>
	<p><strong>Parameters:</strong>
	<ul style="padding: 0 0 5px 15px;">
		<li><strong>&middot; heading</strong> - The main call to action text.</li>
		<li><strong>&middot; subtext</strong> - The sub text below the main heading text.</li>
		<li><strong>&middot; actiontext</strong> - The call to action button text. Example: Buy Now.</li>
		<li><strong>&middot; link</strong> - The URL you want to link to. Default = <strong>#</strong></li>
		<li><strong>&middot; style</strong> - The button style. Values: <strong>1</strong>, <strong>2</strong>. Default = <strong>1</strong></li>
		<li><strong>&middot; size</strong> - The button size. Values: <strong>small</strong>, <strong>large</strong>. Default = <strong>large</strong></li>
		<li><strong>&middot; color</strong> - The button color. Values: <strong>darkgray</strong>, <strong>white</strong>, <strong>blue</strong>, <strong>turquoise</strong>, <strong>green</strong>, <strong>yellow</strong>, <strong>pink</strong>, <strong>red</strong>. Default = <strong>darkgray</strong></li>
		<li><strong>&middot; icon</strong> - The icon name you want to use for the button. <a href="http://fortawesome.github.io/Font-Awesome/icons/" target="_blank">Click here for values</a> (opens in new window). Default = <strong>none</strong>.</li>
	</ul></p>
	<p><strong>Example:</strong>
	<pre>[cta heading="Sign up for access to 1000\'s of Premium Themes!" subtext="We offer a 30 Day Money Back Guarantee, so joining is risk-free!" actiontext="Buy Now" link="#" icon="shopping-cart"]</pre></p>
	<div style="width: 100%; height: 1px; background: #ddd;"></div></div>';

	/* Lead text */
	$output .= '<div id="lead" style="padding-top:20px"><h3>Lead Text</h3>';
	$output .= '<p>Makes text 125% larger. Good for the beginning of articles to grab peoples attention.</p>
	<p><strong>Shortcode:</strong><pre>[lead]Leading paragraph goes here[/lead]</pre></p>
	<p><strong>Parameters:</strong>
	<ul style="padding: 0 0 5px 15px;">
		<li><strong>&middot; dropcap</strong> - Makes the first letter of the paragraph larger than the rest of the text. Good for grabbing attention & adding a little extra style. Default = <strong>no</strong></li>
	</ul></p>
	<p><strong>Example:</strong>
	<pre>[lead dropcap="yes"]Content[/lead]</pre></p>
	<div style="width: 100%; height: 1px; background: #ddd;"></div></div>';

	/* List */
	$output .= '<div id="list" style="padding-top:20px"><h3>List</h3>';
	$output .= '<p>Makes text 125% larger. Good for the beginning of articles to grab peoples attention.</p>
	<p><strong>Shortcode:</strong><br /><pre>[list]<br />[li]List Item 1[/li]<br />[li]List item 2[/li]<br />[/list]</pre></p>
	<p><strong>Parameters:</strong>
	<ul style="padding: 0 0 5px 15px;">
		<li><strong>&middot; icon</strong> - The icon name you want to show before each list item. <a href="http://fortawesome.github.io/Font-Awesome/icons/" target="_blank">Click here for values</a> (opens in new window). Default = <strong>none</strong>.</li>
	</ul></p>
	<p><strong>Example:</strong>
	<pre>[list]<br />[li icon="icon-name"]List item 1.[/li]<br />[li icon="icon-name"]List item 2.[/li]<br />[/list]</pre></p>
	<div style="width: 100%; height: 1px; background: #ddd;"></div></div>';

	$output .= '</div><!-- end .wrap -->';

	echo $output;
}
?>