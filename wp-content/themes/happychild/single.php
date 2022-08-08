<?php
get_header();
get_template_part( 'partials/title_box' );
if ( get_post_meta( get_the_ID(), 'show_breadcrumbs', true ) != 'no' ) {
	get_template_part( 'partials/breadcrumbs' );
}
?>
	<div class="row">
		<div class="col-md-8">
			<?php
			if ( have_posts() ) :
				while ( have_posts() ) : the_post();
					get_template_part( 'partials/content', get_post_format() );
				endwhile;
				posts_nav_link();

			else :
				get_template_part( 'content', 'none' );
			endif;
			?>
		</div>
		<?php get_sidebar(); ?>
	</div>

<?php get_footer(); ?>