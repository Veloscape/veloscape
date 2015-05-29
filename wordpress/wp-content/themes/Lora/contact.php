<?php
/*
Template Name: Contact Form
*/

get_header(); ?>

	<?php
	$transparent_header = get_theme_mod( 'transparent_header', true );
	$style = get_post_meta( get_the_ID(), 'bgimage_style', true );
	
	if( !$style ) {
		$style = 'background';
	}

	$id = get_post_thumbnail_id( get_the_ID() );

	if( $style == 'background' ) :
		$image = wp_get_attachment_image_src( $id, 'fullscreen' );
	else :
		$image = wp_get_attachment_image_src( $id, 'post' );
	endif;

	$parallax = get_post_meta( get_the_ID(), 'enable_parallax', true );

	if( !$parallax ) {
		$parallax = 'yes';
	}

	$fullscreen = get_post_meta( get_the_ID(), 'enable_fs_image', true );

	if( $fullscreen == 'yes' ) {
		$title_class = 'title-full';
		$height = ' height: 100vh;';
	} else {
		$title_class = 'title';
	}

	$desc = get_post_meta( get_the_ID(), 'page_desc', true );

	$enable_overlay = get_post_meta( get_the_ID(), 'enable_overlay', true );

	if( !$enable_overlay ) {
		$enable_overlay = 'yes';
	}

	if( has_post_thumbnail() && $style == 'background' ) { ?>
	<div id="background" class="background <?php if( $parallax == 'yes' ) echo 'parallax-bg'; ?><?php if( $transparent_header == true ) echo ' transparent'; ?>"<?php if( $parallax == 'no' ) echo ' data-src="' . esc_url( $image[0] ) . '"'; ?> style="<?php if( $parallax == 'no' ) echo 'background: url(' . esc_url( $image[0] ) . ');'; ?><?php if( isset( $height ) ) echo esc_attr( $height ); ?>">
		<?php if( $parallax == 'yes' ) : ?>
		<div class="parallax" data-src="<?php echo esc_url( $image[0] ); ?>" style="background: url(<?php echo esc_url( $image[0] ); ?>); background-position: center top;"></div>
		<?php endif; ?>

		<?php if( $enable_overlay == 'yes' ) { ?><div class="overlay"></div><?php } ?>
		
		<div class="<?php echo esc_attr( $title_class ); ?>">
			<h1><?php the_title(); ?></h1>

			<?php if( isset( $desc ) && $desc != '' ) { ?> 
			<div class="underline"></div>
			<p><?php echo esc_html( $desc ); ?></p> 
			<?php } ?>
		</div>

	</div>
	<?php } ?>

	<div class="wrapper">

		<div id="container" class="container">

			<main id="main" role="main">

				<div class="content">

				<?php if( isset( $sent ) && $sent == true ) { ?>

					<div class="thanks">
						<h1>Thanks, <?php echo esc_attr( $name ); ?></h1>
						<p>Your email was successfully sent. I will be in touch soon.</p>
					</div>

				<?php } else { ?>

					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


						<article id="post-<?php the_ID(); ?>" <?php post_class( 'article' ); ?>>

							<?php page_header( $style ); ?>

							<div class="entry-content">

								<?php the_content(); ?>

								<div class="thanks">
									<div class="alert-success">
										<p><i class="fa fa-thumbs-up"></i> <?php _e( 'Your email was successfully sent. Thanks.', 'lora' ); ?></p>
									</div>
								</div>

								<form action="" data-src="<?php echo get_template_directory_uri() . '/inc/mail.php'; ?>" id="contactform" method="post">

									<div class="col four">
										<input type="text" name="name" id="name" placeholder="Your Name *" class="required" />
										<?php if( isset( $name_error ) && $name_error != '' ) { ?>
											<span class="error"><?php echo esc_html( $name_error ); ?></span> 
										<?php } ?>
									</div>

									<div class="col four">
										<input type="text" name="email" id="email" placeholder="Your Email *" class="email required" />
										<?php if( isset( $email_error ) && $email_error != '' ) { ?>
											<span class="error"><?php echo esc_html( $email_error ); ?></span>
										<?php } ?>
									</div>

									<div class="col four">
										<input type="text" name="subject" id="subject" placeholder="Subject" />
									</div>

									<div class="clear"></div>

									<div class="message">
										<textarea name="message" id="message" cols="45" rows="4" placeholder="Your message... *" class="required"></textarea>
										<?php if( isset( $message_error ) && $message_error != '' ) { ?>
											<span class="error"><?php echo esc_html( $message_error ); ?></span> 
										<?php } ?>
									</div>
									
									<input type="hidden" name="submit" id="submit" value="true" />
									<button type="submit">Submit</button>

								</form>

							</div><!-- .entry-content -->

						</article>

						<?php endwhile; endif; ?>

					<?php } // end if email was sent ?>

				</div>

			</main>

		</div>

<?php get_footer(); ?>
