<article <?php post_class(); ?>>
	<div class="blog_post">
		<?php if ( has_post_thumbnail() ) { ?>
			<div class="post_preview">
				<?php the_post_thumbnail( 'full' ); ?>
			</div>
		<?php } ?>
		<div class="content_block">
			<?php echo apply_filters( 'the_content', $post->post_content ); ?>
		</div>
	</div>
	<div class="post_tags">
		<?php the_tags(); ?>
	</div>
	<!--blog_post-->
</article>