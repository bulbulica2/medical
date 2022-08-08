<article <?php post_class(); ?>>
	<div class="project_video">
		<?php echo get_post_meta( get_the_ID(), 'embed', true ) ?>
	</div><!--project_gallery-->
	<div class="project_info">
		<div class="project_text">
			<?php the_content(); ?>
		</div>
	</div>
</article>