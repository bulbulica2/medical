<div class="project_content">
	<div class="row">
		<div class="col-sm-8 col-md-8 col-xs-12">
			<?php the_post_thumbnail('project_gallery'); ?>
		</div>
		<div class="col-sm-4 col-md-4 col-xs-12">
			<?php the_content(); ?>
			<?php if ( $link = get_post_meta( get_the_ID(), 'view_work', 'true' ) ) { ?>
				<a href="<?php echo $link; ?>" class="btn btn-danger"><i class="fa fa-smile-o"></i><?php _e('View work','happychild'); ?></a>
				<br/>
				<br/>
			<?php } ?>
			<?php echo get_template_part( 'partials/share' ); ?>
		</div>
	</div>
</div>