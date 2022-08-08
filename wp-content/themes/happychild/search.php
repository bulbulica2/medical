<?php get_header(); ?>
	<div class="title_block style_1">
		<h1><?php printf( __( 'Search Results for: %s', 'happychild' ), get_search_query() ); ?></h1>
	</div>
<?php
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post();
		get_template_part( 'partials/loop', get_post_format() );
	}
	get_template_part( 'partials/paginate' );
} else {
	get_template_part( 'partials/content', 'none' );
}
?>
<?php get_footer(); ?>