<?php
/*
Template Name: Timetable Event
*/
get_header();

get_template_part( 'partials/title_box' );

?>
	<div class="row">
		<div class="col-md-8">
			<article <?php post_class(); ?>>
				<div class="blog_post">
					<?php
						the_post_thumbnail( "event-post-thumb", array( "alt" => get_the_title(), "title" => "" ) );
					?>
					<?php
					if ( have_posts() ) : while ( have_posts() ) : the_post();
						echo tt_remove_wpautop(get_the_content());
					endwhile; endif;
					?>
				</div>
			</article>
		</div>
		<?php
		if ( is_active_sidebar( 'sidebar-event' ) ) { ?>
			<div class="col-md-4">
				<div id="primary-sidebar" class="primary-sidebar widget-area sidebar">
					<?php dynamic_sidebar( 'sidebar-event' ); ?>
				</div>
			</div>
		<?php } ?>
	</div>
<?php get_footer(); ?>