<?php get_header(); ?>
	<div class="title_block style_1">
		<span><?php echo single_cat_title(); ?></span>
	</div>
<?php
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post();
		get_template_part( 'partials/loop', get_post_format() );
	}
	get_template_part( 'partials/paginate' );
} else {
	get_template_part( 'content', 'none' );
}
?>
<?php get_footer(); ?>