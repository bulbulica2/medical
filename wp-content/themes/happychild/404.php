<?php get_header(); ?>
	<div class="title_block no-smile style_1">
		<span>404</span>
	</div>
	<div class="row">
		<div class="col-md-8">
			<div class="page_404">
				<h3><?php _e( 'The page you are looking for cannot be found', 'happychild' ); ?></h3>

				<p><?php _e( 'You may want to check the following links:', 'happychild' ); ?></p>
				<a class="btn btn-success awesome" href="<?php echo home_url(); ?>"><i class="fa fa-home"></i><?php _e( 'Homepage', 'happychild' ); ?>
				</a>
				<a class="btn btn-bordered-3 green green_text" href="<?php echo home_url().'/contact/'; ?>"><i class="fa fa-envelope"></i><?php _e( 'Contact', 'happychild' ); ?>
				</a>
			</div>
		</div>
		<?php get_sidebar(); ?>
	</div>

<?php get_footer(); ?>