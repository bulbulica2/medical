<article <?php post_class(); ?>>
	<div class="page-content">
		<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

		<p><?php printf( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'twentyfourteen' ), admin_url( 'post-new.php' ) ); ?></p>

		<?php elseif ( is_search() ) : ?>

		<p><?php _e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'twentyfourteen' ); ?></p>

		<?php else : ?>

		<p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'twentyfourteen' ); ?></p>

		<?php endif; ?>
	</div><!-- .page-content -->
</article>