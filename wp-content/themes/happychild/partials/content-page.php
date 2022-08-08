<article <?php post_class(); ?>>
	<?php the_post_thumbnail( 'large' ); ?>
	<?php the_content(); ?>
	<?php wp_link_pages(); ?>
</article>