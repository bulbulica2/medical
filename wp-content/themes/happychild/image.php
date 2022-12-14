<?php

// Retrieve attachment metadata.
$metadata = wp_get_attachment_metadata();
get_header();
get_template_part( 'partials/title_box' );
?>
<div class="row">
	<div class="col-md-8">
		<?php
		// Start the Loop.
		while ( have_posts() ) : the_post();
			?>
			<article class="article" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<div class="content_block">
					<div class="entry-attachment">
						<div class="attachment">
							<?php stm_the_attached_image(); ?>
						</div><!-- .attachment -->

						<?php if ( has_excerpt() ) : ?>
							<div class="entry-caption">
								<?php the_excerpt(); ?>
							</div><!-- .entry-caption -->
						<?php endif; ?>
					</div><!-- .entry-attachment -->

					<?php
					the_content();
					wp_link_pages( array(
						'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'happychild' ) . '</span>',
						'after'       => '</div>',
						'link_before' => '<span>',
						'link_after'  => '</span>',
					) );
					?>
				</div><!-- .entry-content -->
				<header class="entry-header">
					<div class="entry-meta">

						<span class="entry-date"><time class="entry-date" datetime="<?php echo esc_attr( get_the_date( 'c' ) ); ?>"><?php echo esc_html( get_the_date() ); ?></time></span>

						<span class="full-size-link"><a href="<?php echo wp_get_attachment_url(); ?>"><?php echo $metadata['width']; ?> &times; <?php echo $metadata['height']; ?></a></span>

						<span class="parent-post-link"><a href="<?php echo get_permalink( $post->post_parent ); ?>" rel="gallery"><?php echo get_the_title( $post->post_parent ); ?></a></span>
						<?php edit_post_link( __( 'Edit', 'twentyfourteen' ), '<span class="edit-link">', '</span>' ); ?>
					</div><!-- .entry-meta -->
				</header><!-- .entry-header -->
			</article><!-- #post-## -->

			<nav id="image-navigation" class="navigation image-navigation">
				<div class="nav-links">
					<?php previous_image_link( false, '<div class="previous-image">' . __( 'Previous Image', 'happychild' ) . '</div>' ); ?>
					<?php next_image_link( false, '<div class="next-image">' . __( 'Next Image', 'happychild' ) . '</div>' ); ?>
				</div><!-- .nav-links -->
			</nav><!-- #image-navigation -->

		<?php endwhile; // end of the loop. ?>
	</div>
	<?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>
