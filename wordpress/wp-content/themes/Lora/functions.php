<?php
/**
 * Lora functions and definitions
 *
 * @package Lora
 * @since Lora 1.0
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 *
 * @since Lora 1.0
 */
if ( ! isset( $content_width ) ) {
	$content_width = 762;
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * @since Lora 1.0
 */
function lora_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on twentyfifteen, use a find and replace
	 * to change 'twentyfifteen' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'lora', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * See: https://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails', array( 'post', 'page', 'portfolio' ) );
	set_post_thumbnail_size( 960, 500, true );
	add_image_size( 'post', 960, 550, true );
	add_image_size( 'post-medium', 650, 450, true );
	add_image_size( 'post-masonry', 350, 200, true );
	add_image_size( 'fullwidth', 1400, 550, true );
	add_image_size( 'fullscreen', 1920, 1080, true );
	add_image_size( 'three_col', 550, 430, true );
	add_image_size( 'two_thirds', 960, 430, true );
	add_image_size( 'one_half', 750, 550, true );
	add_image_size( 'portfolio', 550, 999, false );
	add_image_size( 'portfolio-medium', 750, 999, false );
	add_image_size( 'portfolio-large', 1400, 999, true );

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array( 'primary' => __( 'Primary Menu',   'lora' ) ) );

	// Register widget locations/sidebars
	register_sidebar( array(
		'name' => __( 'Sidebar', 'lora' ),
		'id' => 'sidebar',
		'before_widget' => '<div class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widgettitle">',
		'after_title' => '</h3><div class="underline"></div>'
	) );

	register_sidebar( array(
		'name' => __( 'Footer Column 1', 'lora' ),
		'id' => 'footer-sidebar-1',
		'before_widget' => '<div class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widgettitle">',
		'after_title' => '</h3><div class="underline"></div>'
	) );

	register_sidebar( array(
		'name' => __( 'Footer Column 2', 'lora' ),
		'id' => 'footer-sidebar-2',
		'before_widget' => '<div class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widgettitle">',
		'after_title' => '</h3><div class="underline"></div>'
	) );

	register_sidebar( array(
		'name' => __( 'Footer Column 3', 'lora' ),
		'id' => 'footer-sidebar-3',
		'before_widget' => '<div class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widgettitle">',
		'after_title' => '</h3><div class="underline"></div>'
	) );

	register_sidebar( array(
		'name' => __( 'Footer Column 4', 'lora' ),
		'id' => 'footer-sidebar-4',
		'before_widget' => '<div class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widgettitle">',
		'after_title' => '</h3><div class="underline"></div>'
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	) );

	/*
	 * Enable support for Post Formats.
	 *
	 * See: https://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'video', 'quote', 'link', 'gallery', 'status', 'audio'
	) );

	add_filter( 'wp_title', 'filter_wp_title' );
	add_filter( 'the_excerpt', 'do_shortcode' );

}
add_action( 'after_setup_theme', 'lora_setup' );

/**
 * Enqueue scripts and styles.
 *
 * @since Lora 1.0
 */
function lora_scripts() {

	global $wp_query;

	if( isset( $wp_query->query_vars['slider'] ) ) {
		$slider_param = $wp_query->query_vars['slider'];
	} else {
		$slider_param = '';
	}

	if( isset( $wp_query->query_vars['blog'] ) ) {
		$blog_param = $wp_query->query_vars['blog'];
	} else {
		$blog_param = '';
	}

	$layout = get_theme_mod( 'blog_layout', 'default' );
	$slider = get_theme_mod( 'slider_type', 'parallax' );

	/*
	 * Enqueue Stylesheets
	 */
    wp_enqueue_style( 'bootstrap', "$protocol://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" );
	wp_enqueue_style( 'style', get_stylesheet_uri() );
	wp_enqueue_style( 'dynamic-style', get_template_directory_uri() . '/css/style.php' );
	wp_enqueue_style( 'jquery.bxslider', get_template_directory_uri() . '/css/jquery.bxslider.css', array(), '4.1.2' );
	
	if( $slider == 'owlslider' || $slider_param == 'owlslider' ) {
		wp_enqueue_style( 'owl.carousel', get_template_directory_uri() . '/css/owl.carousel.css', array(), '1.3.3' );
	}

	wp_enqueue_style( 'font-awesome.min', get_template_directory_uri() . '/css/font-awesome.min.css', array(), '4.3.0' );
	wp_enqueue_style( 'baguetteBox', get_template_directory_uri() . '/css/baguetteBox.css', array(), '1.3.1' );

	$body_font = get_theme_mod( 'body_font', 'Noticia Text' );
	$heading_font = get_theme_mod( 'heading_font', 'Montserrat' );

	$protocol = is_ssl() ? 'https' : 'http';

    wp_enqueue_style( 'body-font', "$protocol://fonts.googleapis.com/css?family=$body_font" );
    wp_enqueue_style( 'headings-font', "$protocol://fonts.googleapis.com/css?family=$heading_font" );


	/*
	 * Enqueue Scripts
	 */
	wp_enqueue_script( 'jquery' );

	if( is_single() )
		wp_enqueue_script( 'comment-reply' );
	
	wp_enqueue_script( 'jquery.bxslider.min', get_template_directory_uri() . '/js/jquery.bxslider.min.js', array(), '4.1.2', true );
	wp_enqueue_script( 'jquery.fitvids', get_template_directory_uri() . '/js/jquery.fitvids.js', array(), '1.1', true );
	wp_enqueue_script( 'jquery-ui.min', get_template_directory_uri() . '/js/jquery-ui.min.js', array(), '1.11.4', true );
	wp_enqueue_script( 'baguetteBox.min', get_template_directory_uri() . '/js/baguetteBox.min.js', array(), '1.2.0', true );

	if( $layout == 'default' || $blog_param == '' ) {
		wp_enqueue_script( 'jquery.fittext', get_template_directory_uri() . '/js/jquery.fittext.js', array(), '1.2', true );
	}

	if( $slider == 'owlslider' || $slider_param == 'owlslider' ) {
		wp_enqueue_script( 'owl.carousel.min', get_template_directory_uri() . '/js/owl.carousel.min.js', array(), '', true );
	}

	if( is_home() && ( $slider == 'parallax' || $slider == 'static' ) || is_single() || is_page() ) {
		wp_enqueue_script( 'jquery.smooth-scroll.min', get_template_directory_uri() . '/js/jquery.smooth-scroll.min.js', array(), '1.5.5', true );
	}

	if( ( $blog_param == 'masonry' || $blog_param == 'masonry_fullscreen' || $blog_param == 'masonry_sidebar' )
		|| $layout == 'masonry' || $layout == 'masonry_fullscreen' || $layout == 'masonry_sidebar'
		|| $layout == 'default' ) {
		wp_enqueue_script( 'masonry.pkgd.min', get_template_directory_uri() . '/js/masonry.pkgd.min.js', array(), '3.2.2', true );
		wp_enqueue_script( 'imagesloaded.pkgd.min', get_template_directory_uri() . '/js/imagesloaded.pkgd.min.js', array(), '3.1.8', true );
	}

	wp_enqueue_script( 'custom.min', get_template_directory_uri() . '/js/custom.js', array(), '1.0.0', true );
	
	if( is_page_template( 'contact.php' ) ) {
		wp_enqueue_script( 'contact-form', get_template_directory_uri() . '/js/contact-form.js', array(), '1.0.0', true );
	}

}
add_action( 'wp_enqueue_scripts', 'lora_scripts' );

function parameter_query_vars( $vars ) {
	$vars[] = 'slider';
	$vars[] = 'blog';
	$vars[] = 'layout';
	return $vars;
}
add_filter( 'query_vars', 'parameter_query_vars' );

/**
 * Filters the page title appropriately depending on the current page
 *
 * This function is attached to the 'wp_title' filter hook.
 *
 * @uses	get_bloginfo()
 * @uses	is_home()
 * @uses	is_front_page()
 */
function filter_wp_title( $title ) {
	global $page, $paged;

	if ( is_feed() )
		return $title;

	$filtered_title = $title;
	$filtered_title .= ( ! empty( $site_description ) && ( is_home() || is_front_page() ) ) ? ' | ' . $site_description: '';
	$filtered_title .= ( 2 <= $paged || 2 <= $page ) ? ' | ' . sprintf( __( 'Page %s', 'lora' ), max( $paged, $page ) ) : '';

	return $filtered_title;
}

function lora_nav_menu() {
	$args = array(
		'title_li' => '',
		'depth' => 2,
		'sort_column' => 'menu_order',
		'number' => 6
	);

	echo '<ul class="menu">';
	wp_list_pages( $args );
	echo '</ul>';
}

/**
 * Get post meta data
 *
 * @since Lora 1.0
 */
function lora_post_meta( $layout ) {

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

	if( !is_page() ) {

		if( $layout == 'standard' || $layout == 'standard_sidebar' || $blog_param == 'standard' || $blog_param == 'standard_sidebar' || is_single() || $slider_param == 'owlslider' ) :

		echo "<ul class=\"post-meta\">";

		if( ! ( has_post_format( 'status' ) || has_post_format( 'quote' ) || has_post_format( 'link' ) ) ) {
			if( get_theme_mod( 'show_author', true ) == true ) {
				echo "<li class=\"post-author\">";
				the_author_link();
				echo "</li>";
			}
		}

		if( get_theme_mod( 'show_date', true ) == true ) { ?>
			<li class="post-time"><a href="<?php the_permalink(); ?>"><span class="entry-date"><?php the_time('F jS, Y'); ?></span></a></li>
			<?php 
		}
			
		if( get_theme_mod( 'show_comments', true ) == true ) { ?>
			<li class="comment-number"><a href="<?php comments_link() ?>" class="comments-link"><?php comments_number( 'No Comments', '1 Comment', '% Comments' ); ?></a></li>
			<?php 
		}

		if( ! ( has_post_format( 'status' ) || has_post_format( 'quote' ) || has_post_format( 'link' ) ) ) {
			if( get_theme_mod( 'show_categories', true ) == true ) {
				echo "<li class=\"post-cat\">";
				the_category( ', ' );
				echo "</li>";
			}
		} ?>

		<?php if( current_user_can( 'manage_options' ) ) { ?>
			<li class="edit-link"><?php edit_post_link( 'Edit' ); ?></li>
		<?php } ?>

		<?php echo "</ul>";

		elseif( ( $layout != 'default' || $blog_param == 'masonry' ) && !has_post_format( 'quote' ) ) : ?>
		
		<div class="post-meta">
			<a href="<?php the_permalink(); ?>"><span class="entry-date"><?php the_time('F jS, Y'); ?></span></a> &middot; <a href="<?php comments_link(); ?>" class="comments-link"><?php comments_number( 'No Comments', '1 Comment', '% Comments' ); ?></a> <?php edit_post_link( '&middot; Edit' ); ?>
		</div>

		<?php endif;
	}

	if( $layout == 'default' && ! ( $blog_param == 'standard' || $blog_param == 'standard_sidebar' || $blog_param == 'masonry' || $blog_param == 'masonry_sidebar' || $blog_param == 'masonry_fullscreen' || $slider_param == 'owlslider' ) ) :

		if( !is_single() ) :
			echo "<ul class=\"post-meta-alt\">";

			if( get_theme_mod( 'show_author', true ) == true ) {
				echo "<li>";
				the_author_link();
				echo "</li>";
			}

			if( get_theme_mod( 'show_date', true ) == true ) {

				if( get_theme_mod( 'show_author', true ) == true ) {
					echo "<li><strong>&middot;</strong></li>";
				} ?>
				<li><span class="entry-date"><?php the_time('F jS, Y'); ?></span></li>
				<?php 
			}
			
			if( get_theme_mod( 'show_categories', true ) == true ) {
				echo "<li><strong>&middot;</strong></li>";
				echo "<li>";
				the_category( ', ' );
				echo "</li>";
			}

            /* show tags */
            if (has_tag()) {
                echo "<li>";
                the_tags("", ", ");
                echo "</li>";
            }

			if( current_user_can( 'manage_options' ) ) {
				echo "<li><strong>&middot;</strong></li>";
			} ?>

			<li><?php edit_post_link( 'Edit' ); ?></li>

		<?php echo "</ul>";

		endif;

	endif;

}

/**
 * Post share links
 *
 * @since Lora 1.0
 */
function lora_share_post() {

	if( is_single() && get_theme_mod( 'enable_social', true ) == true ) { 
	$id = get_post_thumbnail_id( get_the_ID() );
	$image = wp_get_attachment_image_src( $id, 'post' );
	$link = urlencode( get_permalink() );
	$shortlink = urlencode( wp_get_shortlink() );
	?>
	<div class="social-sharing">
		<ul>
			<span class="list-wrap">
			<?php if( get_theme_mod( 'show_fb', true ) == true ) { ?>
			<li><a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $link; ?>&t=<?php the_title(); ?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
			<?php } ?>
			<?php if( get_theme_mod( 'show_twitter', true ) == true ) { ?>
			<li><a href="https://twitter.com/intent/tweet?source=4rapiddev&text=<?php the_title(); ?>&url=<?php echo $shortlink; ?>" target="_blank"><i class="fa fa-twitter"></i></a></li>
			<?php } ?>
			<?php if( get_theme_mod( 'show_gplus', true ) == true ) { ?>
			<li><a href="https://plus.google.com/share?url=<?php echo $link; ?>" target="_blank"><i class="fa fa-google-plus"></i></a></li>
			<?php } ?>
			<?php if( get_theme_mod( 'show_linkedin', true ) == true ) { ?>
			<li><a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo $link ?>&title=<?php the_title(); ?>&summary=<?php if( has_excerpt() ) { get_the_excerpt(); } ?>&source=" target="_blank"><i class="fa fa-linkedin"></i></a></li>
			<?php } ?>
			<?php if( get_theme_mod( 'show_pinterest', true ) == true ) { ?>
			<li><a href="https://pinterest.com/pin/create/button/?url=<?php echo $link; ?>&media=<?php echo esc_url( $image[0] ); ?>&description=<?php the_title(); ?>" target="_blank"><i class="fa fa-pinterest-p"></i></a></li>
			<?php } ?>
			<?php if( get_theme_mod( 'show_reddit', true ) == true ) { ?>
			<li><a href="http://reddit.com/submit?url=<?php echo $link; ?>&title=<?php the_title(); ?>" target="_blank"><i class="fa fa-reddit"></i></a></li>
			<?php } ?>
			<?php if( get_theme_mod( 'show_delicious', true ) == true ) { ?>
			<li><a href="http://del.icio.us/post?url=<?php echo $link; ?>" target="_blank"><i class="fa fa-delicious"></i></a></li>
			<?php } ?>
			<?php if( get_theme_mod( 'show_stumbleupon', true ) == true ) { ?>
			<li><a href="http://www.stumbleupon.com/submit?url=<?php echo $link; ?>&title=<?php the_title(); ?>" target="_blank"><i class="fa fa-stumbleupon"></i></a></li>
			<?php } ?>
			<?php if( get_theme_mod( 'show_tumblr', true ) == true ) { ?>
			<li><a href="http://www.tumblr.com/share/link?url=<?php echo $link; ?>" target="_blank"><i class="fa fa-tumblr"></i></a></li>
			<?php } ?>
			</span>
		</ul>
	</div>
	<?php 
	}
}

/**
 * Posts navigation for index/archive
 *
 * @since Lora 1.0
 */
function lora_post_navigation() {
	$nav = get_theme_mod( 'post_nav', 'standard' );

	if( !$nav ) {
		$nav = 'standard';
	}
	
	$next = get_theme_mod( 'next_text', 'Next Page &rarr;' );
	$previous = get_theme_mod( 'previous_text', '&larr; Previous Page' );
	?>

	<?php if( get_next_posts_link() || get_previous_posts_link() ) : ?>
	<div class="clear"></div>

	<div class="post-nav">
	<?php if( $nav == 'standard' ) { ?>
		<span class="previous-page"><?php previous_posts_link( $previous ); ?></span>
		<span class="next-page"><?php next_posts_link( $next ); ?></span>
	<?php } elseif( $nav == 'numbered' ) {
		the_posts_pagination( array(
			'prev_text' => $previous,
			'next_text' => $next
		) );
	} else {
		wp_link_pages();
	} ?>
	</div>

	<?php endif; 

}

function new_content_more( $more ) {
       global $post;
       $read_more_text = get_theme_mod( 'read_more', __( 'Continue Reading &raquo;', 'lora' ) );
       return ' <span class="read-more"><a href="' . get_permalink() . "#more-{$post->ID}\" class=\"button button-darkgray small\"> " . $read_more_text . " </a></span>";
}   
add_filter( 'the_content_more_link', 'new_content_more' );

/**
 * Custom excerpt text & length for masonry blog layout
 *
 * @since Lora 1.0
 */
function custom_excerpt_length( $length ) {
	return 20;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

function new_excerpt_more( $more ) {
	$read_more_text = get_theme_mod( 'read_more', 'Continue Reading &rarr;' );
	 return '... <span class="read-more"><a href="' . get_permalink() . "\" class=\"button button-darkgray small\"> " . $read_more_text . " </a></span>";
}
add_filter('excerpt_more', 'new_excerpt_more');

/**
 * Posts navigation for single post
 *
 * @since Lora 1.0
 */
function lora_post_nav() {
	$nav = get_theme_mod( 'show_post_nav', false );

	$prev_post = get_previous_post();
	$next_post = get_next_post();


	if( $nav == true ) { ?>

		<div class="container single-post-nav">
		<?php if( ! empty( $prev_post ) ) : ?>
			<div class="col six previous-post">
				<a href="<?php echo get_permalink( $prev_post->ID ); ?>">
					<div class="arrow">
						<i class="fa fa-angle-left fa-5x"></i>
					</div>
					
					<div class="prev-post-text">
						<span class="desc">
						<?php if( is_singular( 'portfolio' ) ) {
							_e( 'Previous Project', 'lora' );
						} else {
							_e( 'Previous Post', 'lora' );
						} ?>
						</span>
						<?php echo get_the_title( $prev_post->ID ); ?>
					</div>
				</a>
			</div>
		<?php endif;

		if( ! empty( $next_post ) ) : ?>
			<div class="col six next-post">
				<a href="<?php echo get_permalink( $next_post->ID ); ?>">
					<div class="arrow">
						<i class="fa fa-angle-right fa-5x"></i>
					</div>

					<div class="next-post-text">
						<span class="desc">
						<?php if( is_singular( 'portfolio' ) ) {
							_e( 'Next Project', 'lora' );
						} else {
							_e( 'Next Post', 'lora' );
						} ?>
						</span>
						<?php echo get_the_title( $next_post->ID ); ?>
					</div>
				</a>
			</div>
		<?php endif; ?>
		</div>
		<?php
	}
}

/**
 * Get related posts
 *
 * @since Lora 1.0
 */
function lora_related_posts() {

	global $post;

	$show = get_theme_mod( 'show_related_posts', true );
	$limit = get_theme_mod( 'related_posts_number', 3 );
	$tags = wp_get_post_tags( $post->ID );

	if ( $tags && $show == true ) { ?>

		<h3>Related Posts</h3>

		<?php
		$first_tag = $tags[0]->term_id;

		$args = array(
			'tag__in' => array( $first_tag ),
			'post__not_in' => array( $post->ID ),
			'posts_per_page' => $limit,
			'caller_get_posts' => 1
		);

		$query = new WP_Query( $args );

		if( $query->have_posts() ) {
			while ( $query->have_posts() ) : $query->the_post();

				$the_image = wp_get_attachment_image_src( $post->ID, 'post' );
				$the_caption = get_post_field( 'post_excerpt', $post->ID );
				$the_title = get_post_field( 'post_title', $post->ID ); ?>

				<?php if( $the_image ) : ?>
				<img src="<?php echo esc_url( $the_image[0] ); ?>" alt="<?php echo esc_attr( $the_title ); ?>"<?php if( $the_caption) { ?> title="<?php echo esc_attr( $the_caption ); ?>"<?php } ?> />
				<?php endif; ?>

				<?php if( has_post_format( 'quote' ) ) : ?>

				<?php endif; ?>
				<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>

			<?php endwhile;
		}

		wp_reset_query();
	}
}

/**
 * Footer layout
 *
 * @since Lora 1.0
 */
function lora_footer() {
	$column_number = get_theme_mod( 'footer_columns', 3 );

	if( $column_number == 4 ) {
		$length = 'three';
	} elseif( $column_number == 3 ) {
		$length = 'four';
	} elseif( $column_number == 2 ) {
		$length = 'six';
	} else {
		$length = 'twelve';
	} 

	for( $i = 1; $i <= $column_number; $i++ ) { ?>
	<div class="col <?php echo esc_attr( $length ); ?>">
		<?php if ( ! function_exists( 'dynamic_sidebar' ) || ! dynamic_sidebar( "Footer Column {$i}" ) ) : endif; ?>
	</div>
	<?php 
	}
}

/**
 * Comments list layout
 *
 * @since Lora 1.0
 */
function lora_comments( $comment, $args, $depth ) {
	$GLOBALS['comment'] = $comment; ?>
	
	<li <?php comment_class(); ?> id="comment-<?php comment_ID(); ?>">
		
		<div class="gravatar">
			<?php echo get_avatar( $comment, $size = '70', $default = '' ); ?>
		</div>
		
		<div class="comment-body">
			<div class="reply">
				<?php comment_reply_link( array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']) ) ); ?>
			</div>
			
			<strong><?php printf( '%s', get_comment_author_link() ) ?></strong><?php edit_comment_link( __( '(Edit)', 'lora'), ' ', '' ) ?><br />
			<span class="comment-date"><?php comment_date('F jS, Y'); ?></span>
			
			<?php comment_text(); ?>

			<?php if( $comment->comment_approved == '0' ) : ?>
				<span class="unapproved"><?php _e( 'Your comment is awaiting moderation.', 'lora' ); ?></span>
			<?php endif; ?>

		</div>

	</li>

	<?php
}

/**
 * Post Header
 *
 * @since Lora 1.0
 */
function post_header( $layout ) {
	$show_icon = get_theme_mod( 'show_icon', true ); 
	$background = get_post_meta( get_the_ID(), 'bgimage_style', true ); 

	if( !$background ) {
		$background = 'standard';
	}
	?>

	<header class="entry-header">

	<?php

	if( has_post_format( 'status' ) ) :
		echo '<div class="post-icon icon-status"><i class="fa fa-pencil"></i></div>';
	endif;

	if( is_single() ) :
		if( ! ( $background == 'background' && has_post_thumbnail() ) ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
			if( !is_singular( 'portfolio' ) )
				lora_post_meta( $layout );
		endif;
	else :
		if( !has_post_format( 'status' ) ) {
			the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
			if( !is_singular( 'portfolio' ) )
				lora_post_meta( $layout );
		}
	endif; ?>

	</header>
	<?php
}

/**
 * Page Header
 *
 * @since Lora 1.0
 */
function page_header( $style ) {
	if( $style == 'standard' || ( $style == 'background' && !has_post_thumbnail() ) ) : ?>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		<div class="underline"></div>
	</header><!-- .entry-header -->
	<?php endif;
}

/**
 * Determines if page has background image set
 *
 * @since Lora 1.0
 */
function has_background_img() {
	global $wp_query;

	if( isset( $wp_query->query_vars['slider'] ) ) {
		$slider_param = $wp_query->query_vars['slider'];
	}

	$slider_enabled = get_theme_mod( 'enable_slider', true );
	$slider = get_theme_mod( 'slider_type', 'revslider' );
	$bgimage_style = get_post_meta( get_the_ID(), 'bgimage_style', true );

	if( !$bgimage_style ) {
		$bgimage_style = 'background';
	}

	if( isset( $slider_param ) && $slider_param == 'owlslider' ) {
		return false;
	}

	if( ( is_page() || is_single() ) && ( $bgimage_style == 'background' && has_post_thumbnail() ) 
		|| $slider_enabled && ( $slider == 'parallax' || $slider == 'static' || $slider == 'revslider' ) && is_home() ) {
		return true;
	} else {
		return false;
	}
}

/**
 * Determines if page has wrapper class
 *
 * @since Lora 1.0
 */
function has_wrapper( $section = null ) {
	global $wp_query;

	if( isset( $wp_query->query_vars['slider'] ) ) {
		$slider_param = $wp_query->query_vars['slider'];
	}

	$slider = get_theme_mod( 'slider_type', 'parallax' );

	if( isset( $slider_param ) && $slider_param == 'owlslider' ) {
		return false;
	}

	if( !is_home() ) {
		return true;
	} else {
		if( $section == 'footer' ) {
			if( get_theme_mod( 'enable_slider', true ) == true && ( $slider == 'parallax' || $slider == 'static' || $slider == 'revslider' || $slider == 'owlslider' ) 
			||  get_theme_mod( 'enable_slider', true ) == false ) {
				return true;
			} else {
				return false;
			}
		} else {
			if( get_theme_mod( 'enable_slider', true ) == true && ( $slider == 'parallax' || $slider == 'static' || $slider == 'revslider' ) 
			||  get_theme_mod( 'enable_slider', true ) == false ) {
				return true;
			} else {
				return false;
			}
		}
	}
}

/**
 * Removes width parameter from 
 * Soundcloud embeds to make responsive.
 *
 * @since Lora 1.0
 */
function soundcloud_no_width( $provider, $url, $args ) {
	if ( 'soundcloud.com' == parse_url( $url, PHP_URL_HOST ) ) {
		$provider = remove_query_arg( 'maxwidth', $provider );
	}
	return $provider;
}
add_filter('oembed_fetch_url', 'soundcloud_no_width', 10, 3);

/**
 * Customizer additions
 *
 * @since Lora 1.0
 */
require_once get_template_directory() . '/admin/customizer.php';

/**
 * Custom meta boxes for pages & posts
 *
 * @since Lora 1.0
 */
require_once get_template_directory() . '/admin/meta-boxes.php';

/**
 * Custom widgets
 *
 * @since Lora 1.0
 */
require_once get_template_directory() . '/inc/widgets/flickr.php';
require_once get_template_directory() . '/inc/widgets/recent-posts.php';

/**
 * Load TGM Plugin Activation Class
 */
include_once get_template_directory() . '/inc/class-tgm-plugin-activation.php';

function lora_load_required_plugins() {
	/**
     * Array of plugin arrays. Required keys are name and slug.
     * If the source is NOT from the .org repo, then source is also required.
     */
    $plugins = array(

    	array(
            'name'               => 'Lora Portfolio', // The plugin name.
            'slug'               => 'lora-portfolio', // The plugin slug (typically the folder name).
            'source'             => get_template_directory() . '/inc/plugins/lora-portfolio.zip', // The plugin source.
            'required'           => true, // If false, the plugin is only 'recommended' instead of required.
            'version'            => '1.0.0', // E.g. 1.0.0. If set, the active plugin must be this version or higher.
            'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
            'force_deactivation' => true, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
            'external_url'       => '', // If set, overrides default API URL and points to an external URL.
        ),
        array(
            'name'               => 'Lora Theme Shortcodes', // The plugin name.
            'slug'               => 'lora-shortcodes', // The plugin slug (typically the folder name).
            'source'             => get_template_directory() . '/inc/plugins/lora-shortcodes.zip', // The plugin source.
            'required'           => true, // If false, the plugin is only 'recommended' instead of required.
            'version'            => '1.0.0', // E.g. 1.0.0. If set, the active plugin must be this version or higher.
            'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
            'force_deactivation' => true, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
            'external_url'       => '', // If set, overrides default API URL and points to an external URL.
        ),
        array(
            'name'               => 'Vafpress Post Formats UI', // The plugin name.
            'slug'               => 'vafpress-post-formats-ui', // The plugin slug (typically the folder name).
            'source'             => get_template_directory() . '/inc/plugins/vafpress-post-formats-ui.zip', // The plugin source.
            'required'           => true, // If false, the plugin is only 'recommended' instead of required.
            'version'            => '1.5', // E.g. 1.0.0. If set, the active plugin must be this version or higher.
            'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
            'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
            'external_url'       => '', // If set, overrides default API URL and points to an external URL.
        ),
        array(
            'name'               => 'Revolution Slider', // The plugin name.
            'slug'               => 'revslider', // The plugin slug (typically the folder name).
            'source'             => get_template_directory() . '/inc/plugins/revslider.zip', // The plugin source.
            'required'           => false, // If false, the plugin is only 'recommended' instead of required.
            'version'            => '4.6.5', // E.g. 1.0.0. If set, the active plugin must be this version or higher.
            'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
            'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
            'external_url'       => '', // If set, overrides default API URL and points to an external URL.
        )
    );

    /**
     * Array of configuration settings. Amend each line as needed.
     * If you want the default strings to be available under your own theme domain,
     * leave the strings uncommented.
     * Some of the strings are added into a sprintf, so see the comments at the
     * end of each line for what each argument will be.
     */
    $config = array(
        'default_path' => '',                      // Default absolute path to pre-packaged plugins.
        'menu'         => 'tgmpa-install-plugins', // Menu slug.
        'has_notices'  => true,                    // Show admin notices or not.
        'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
        'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
        'is_automatic' => false,                   // Automatically activate plugins after installation or not.
        'message'      => '',                      // Message to output right before the plugins table.
        'strings'      => array(
            'page_title'                      => __( 'Install Required Plugins', 'tgmpa' ),
            'menu_title'                      => __( 'Install Plugins', 'tgmpa' ),
            'installing'                      => __( 'Installing Plugin: %s', 'tgmpa' ), // %s = plugin name.
            'oops'                            => __( 'Something went wrong with the plugin API.', 'tgmpa' ),
            'notice_can_install_required'     => _n_noop( 'This theme requires the following plugin: %1$s.', 'This theme requires the following plugins: %1$s.' ), // %1$s = plugin name(s).
            'notice_can_install_recommended'  => _n_noop( 'This theme recommends the following plugin: %1$s.', 'This theme recommends the following plugins: %1$s.' ), // %1$s = plugin name(s).
            'notice_cannot_install'           => _n_noop( 'Sorry, but you do not have the correct permissions to install the %s plugin. Contact the administrator of this site for help on getting the plugin installed.', 'Sorry, but you do not have the correct permissions to install the %s plugins. Contact the administrator of this site for help on getting the plugins installed.' ), // %1$s = plugin name(s).
            'notice_can_activate_required'    => _n_noop( 'The following required plugin is currently inactive: %1$s.', 'The following required plugins are currently inactive: %1$s.' ), // %1$s = plugin name(s).
            'notice_can_activate_recommended' => _n_noop( 'The following recommended plugin is currently inactive: %1$s.', 'The following recommended plugins are currently inactive: %1$s.' ), // %1$s = plugin name(s).
            'notice_cannot_activate'          => _n_noop( 'Sorry, but you do not have the correct permissions to activate the %s plugin. Contact the administrator of this site for help on getting the plugin activated.', 'Sorry, but you do not have the correct permissions to activate the %s plugins. Contact the administrator of this site for help on getting the plugins activated.' ), // %1$s = plugin name(s).
            'notice_ask_to_update'            => _n_noop( 'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.', 'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.' ), // %1$s = plugin name(s).
            'notice_cannot_update'            => _n_noop( 'Sorry, but you do not have the correct permissions to update the %s plugin. Contact the administrator of this site for help on getting the plugin updated.', 'Sorry, but you do not have the correct permissions to update the %s plugins. Contact the administrator of this site for help on getting the plugins updated.' ), // %1$s = plugin name(s).
            'install_link'                    => _n_noop( 'Begin installing plugin', 'Begin installing plugins' ),
            'activate_link'                   => _n_noop( 'Begin activating plugin', 'Begin activating plugins' ),
            'return'                          => __( 'Return to Required Plugins Installer', 'tgmpa' ),
            'plugin_activated'                => __( 'Plugin activated successfully.', 'tgmpa' ),
            'complete'                        => __( 'All plugins installed and activated successfully. %s', 'tgmpa' ), // %s = dashboard link.
            'nag_type'                        => 'updated' // Determines admin notice type - can only be 'updated', 'update-nag' or 'error'.
        )
    );

    tgmpa( $plugins, $config );
}
add_action( 'tgmpa_register', 'lora_load_required_plugins' );
