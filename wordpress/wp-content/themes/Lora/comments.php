<?php
/**
 * The template for displaying comments
 *
 * The area of the page that contains both the comments
 * and the comment form.
 *
 * @package Lora
 * @since Lora 1.0
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if( post_password_required() ) {
	return;
} ?>

<aside id="comments">
	<?php if( have_comments() ) : ?>

		<h3 class="comments-title">
			<?php
				printf( _nx( 'One Comment', '%1$s Comments', get_comments_number(), 'comments title', 'lora' ),
					number_format_i18n( get_comments_number() ), get_the_title() );
			?>
		</h3>

		<ul class="comment-list">
			<?php
				wp_list_comments( array(
					'callback' => 'lora_comments',
				) );
			?>
		</ul><!-- .comment-list -->

		<?php if( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
			<nav class="comment-nav">
				<span class="previous-comment"><?php previous_comments_link(); ?></span>
				<span class="next-comment"><?php next_comments_link(); ?></span>
			</nav>
		<?php endif; ?>

	<?php endif; // have_comments() ?>

	<?php 
		if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
	?>
		<p class="no-comments"><?php _e( 'Comments are closed.', 'lora' ); ?></p>
	<?php endif; ?>

	<?php
	$aria_req = ( $req ? " aria-required='true'" : '' );
	
	$args = array(
		'fields' => apply_filters(
			'comment_form_default_fields', array(
				'author' =>'<p class="comment-form-author">' . '<input id="author" placeholder="Name ' . ( $req ? '*' : '' ) . '" name="author" type="text" value="' .
					esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' /></p>'
					,
				'email'  => '<p class="comment-form-email">' . '<input id="email" placeholder="Email ' . ( $req ? '*' : '' ) . '" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
					'" size="30"' . $aria_req . ' /></p>',
				'url'    => '<p class="comment-form-url"><input id="url" name="url" placeholder="Website" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="30" /></p>'
			)
		),
		'comment_field' => '<p class="comment-form-comment"><textarea id="comment" name="comment" placeholder="Comment" cols="45" rows="4" aria-required="true"></textarea></p>',
	    'comment_notes_after' => '',
	);

	comment_form( $args );
	?>
	
</aside>