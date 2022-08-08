<?php
get_header();

get_template_part( 'partials/title_box' );

if ( get_post_meta( get_the_ID(), 'show_breadcrumbs', true ) != 'no' ) {
	get_template_part( 'partials/breadcrumbs' );
}
?>
<?php
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post();
		get_template_part( 'partials/content', 'page' );
	}
	get_template_part( 'partials/paginate' );
} else {
	get_template_part( 'content', 'none' );
}
?>
<?php get_footer(); ?>