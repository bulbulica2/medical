<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-content">
		<?php
		the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'twentyfourteen' ) );
			wp_link_pages( array(
				'before'      => '<div class="page-links clearfix">',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>'
			) );
		?>
	</div>
	<div class="post_tags">
		<?php the_tags(); ?>
	</div>
</article>
